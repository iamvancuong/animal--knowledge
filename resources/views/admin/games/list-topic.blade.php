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
                <button class="btn btn-success" onclick="location.href='{{ route('admin.view_add_topic') }}'"><b
                        style="font-size: 20px">+</b> Thêm chủ đề</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách các chủ đề</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display "
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 65px; text-align: center; vertical-align: middle;">Stt</th>
                                        <th style="text-align: center; vertical-align: middle;">Tên chủ đề</th>
                                        <th style="text-align: center; vertical-align: middle;">Ảnh chủ đề</th>
                                        <th style="text-align: center; vertical-align: middle;">Nội dung chủ đề</th>
                                        <th style="text-align: center; vertical-align: middle;">Số điểm mỗi câu</th>
                                        <th style="text-align: center; vertical-align: middle;">Bộ câu hỏi</th>
                                        <th style="text-align: center; vertical-align: middle;">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topics as $key => $topic)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $topic->topic_name }}</td>
                                            <td>
                                                @if ($topic->topic_image != null)
                                                    <img src="{{asset('topics/'. $topic->topic_image )}}"
                                                        alt="123" width="200">
                                                @else
                                                    <img src="{{asset('error/error.jpg')}}" alt="123"
                                                        width="200">
                                                @endif
                                            </td>
                                            <td style="word-break: break-all;">{{ $topic->topic_description }}</td>
                                            <td>{{ $topic->score_per_question }}</td>
                                            <td class="box-container">
                                                <a href="{{ route('admin.list_question', ['id' => $topic->id]) }}">Xem
                                                    thêm</a>
                                            </td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $topic->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                /
                                                <a href="{{ route('admin.view_edit_topic', ['id' => $topic->id]) }}"
                                                    class="icon-action" onclick="event.stopPropagation();"><i
                                                        class="icon-settings"></i></a>
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
    @foreach ($topics as $key => $topic)
        <div class="modal fade" id="deleteConfirmationModal_{{ $topic->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $topic->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $topic->id }}">Xóa chủ đề</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa chủ đề này không
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('delete_user', ['id' => $topic->id]) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
