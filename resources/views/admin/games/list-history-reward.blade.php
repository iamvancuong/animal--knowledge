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
        <div class="col mt-3">
            <form action="{{route('admin.search_history_reward')}}" method="post">
                @csrf
                <div class="search-container">
                    <input type="text" name="key_word" class="search-input" placeholder="Nhập tên người dùng">
                    <input type="date" class="search-datetime" name="date_filter">
                    <button type="submit" class="search-button">Tìm Kiếm</button>
                </div>
            </form>
            </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lịch sử nhận quà</h4>
                    <div class="table-responsive">
                        <table id="multi_col_order" class="table table-striped table-bordered display "
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 65px; text-align: center; vertical-align: middle;">Stt</th>
                                    <th style="text-align: center; vertical-align: middle;">Tên người nhận</th>
                                    <th style="text-align: center; vertical-align: middle;">Tên phần quà</th>
                                    <th style="text-align: center; vertical-align: middle;">Điểm nhận quà</th>
                                    <th style="text-align: center; vertical-align: middle;">Thời gian nhận quà</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->reward_name}}</td>
                                        <td>{{$item->reward_score}}</td>
                                        <td>{{$item->created_at}}</td>
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
                    <form action="{{route('admin.create_reward')}}" id="addRewardForm"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="continentTitle">Tên phần thưởng</label>
                            <input type="text" class="form-control" id="continentTitle" name="reward_name">
                        </div>
                        <div class="form-group">
                            <label for="continentImage">Số điểm cần nhận thưởng</label>
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