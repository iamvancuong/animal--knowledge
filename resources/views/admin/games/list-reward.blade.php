@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: #4CAF50;
            /* Màu xanh */
            color: white;
            z-index: 9999;
            display: none;
            /* Ẩn ban đầu */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .notification.success {
            background-color: #4CAF50;
            /* Màu xanh */
        }

        .notification.failed {
            background-color: #ff3333;
            /* Màu đỏ */
            color: white;
        }


        .notification.show {
            display: block;
            animation: slideInRight 0.5s ease-out forwards;
        }

        .box-char {
            width: calc(100% - 10px);
            margin: 5px;
            padding: 8px;
            text-align: center;
            font-weight: 500;
        }

        .box-char:nth-child(odd) {
            border: 1px solid black;
        }

        .box-char:nth-child(even) {
            border: 1px solid blue;
            /* Optional: different border for even items */
        }

        td {
            word-wrap: break-word;
            white-space: normal;
        }

        .show-more,
        .show-less {
            color: rgb(46, 91, 255);
            cursor: pointer;
            text-decoration: underline;
        }

        .full-description {
            display: none;
            white-space: normal;
        }

        .search-container {
            display: flex;
            gap: 10px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-input .search-datetime {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .search-select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
    </style>
    @if (session('success'))
        <div id="notification" class="notification success">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-check" aria-hidden="true"></i>
                {{ session('success') }}</span>
        </div>
    @endif

    @if (session('failed'))
        <div id="notification" class="notification failed">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-exclamation-triangle"
                    aria-hidden="true"></i> {{ session('failed') }}</span>
        </div>
    @endif
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">{{ Auth::user()->name }}</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.list_posts') }}">Quản Lý Diễn Đàn</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 text-right">
                <a href="{{ route('admin.get_history_reward') }}" class="mr-2">
                    <button class="btn btn-warning"><b style="font-size: 25px"><i class="fa-regular fa-clock"></i></b> Lịch
                        sử nhận quà</button>
                </a>
                <button class="btn btn-success" data-toggle="modal" data-target="#addRewardModal"><b
                        style="font-size: 20px">+</b> Thêm phần quà</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách các phần quà</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display "
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 65px; text-align: center; vertical-align: middle;">Stt</th>
                                        <th style="text-align: center; vertical-align: middle;">Tên phần quà</th>
                                        <th style="text-align: center; vertical-align: middle;">Điểm nhận quà</th>
                                        <th style="text-align: center; vertical-align: middle;">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rewards as $key => $reward)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $reward->reward_name }}</td>
                                            <td>{{ $reward->reward_score }}</td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $reward->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                /
                                                <a href="#" data-toggle="modal"
                                                    data-target="#editRewardModal_{{ $reward->id }}"
                                                    class="icon-action"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($rewards as $key => $reward)
        <div class="modal fade" id="deleteConfirmationModal_{{ $reward->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $reward->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $reward->id }}">Xóa phần thưởng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa phần thưởng này không
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.delete_reward', ['id' => $reward->id]) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal edit -->
        <div class="modal fade" id="editRewardModal_{{ $reward->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editRewardModalLabel_{{ $reward->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRewardModalLabel_{{ $reward->id }}">Sửa thông tin phần thưởng
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.update_reward', ['id' => $reward->id]) }}"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên phần thưởng</label>
                                <input type="text" class="form-control" id="continentTitle" name="reward_name"
                                    value="{{ $reward->reward_name }}">
                            </div>
                            <div class="form-group">
                                <label for="continentImage">Số điểm cần nhận thưởng</label>
                                <input name="reward_score" type="text" class="form-control" id="continentImage"
                                    value="{{ $reward->reward_score }}">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="addRewardModal" tabindex="-1" role="dialog" aria-labelledby="addRewardModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRewardModalLabel">Thêm phần thưởng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.create_reward') }}" id="addRewardForm" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <label for="continentTitle">Tên phần thưởng <span
                                    class="asterisk text-danger">*</span></label>
                            <input type="text" class="form-control" id="continentTitle" name="reward_name">
                        </div>
                        <div class="form-group">
                            <label for="continentImage">Số điểm cần nhận thưởng <span
                                    class="asterisk text-danger">*</span></label>
                            <input name="reward_score" type="text" class="form-control" id="continentImage">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" form="addRewardForm">Lưu</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script>
    function showMore(id) {
        document.getElementById('description-' + id).style.display = 'none';
        document.getElementById('full-description-' + id).style.display = 'block';
    }

    function showLess(id) {
        document.getElementById('full-description-' + id).style.display = 'none';
        document.getElementById('description-' + id).style.display = 'block';
    }

    function showNotification(message) {
        var notification = document.querySelector('.notification');
        notification.innerHTML = message;
        notification.classList.add('show');

        // Tự động ẩn sau 5 giây
        setTimeout(function() {
            hideNotification();
        }, 5000); // Ẩn sau 5 giây
    }

    // Ẩn thông báo
    function hideNotification() {
        var notification = document.querySelector('.notification');
        notification.classList.remove('show');
    }

    // Hiển thị thông báo khi trang được load
    window.onload = function() {
        var successMessage = "{{ session('success') }}";
        var failedMessage = "{{ session('failed') }}";

        if (failedMessage) {
            showNotification(failedMessage);
        }
        if (successMessage) {
            showNotification(successMessage);
        }
    };
</script>
