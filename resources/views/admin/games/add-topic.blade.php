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

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.list_user') }}">Quản Lý Diễn Đàn</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if ($mode == 'add')
                            <h4 class="card-title">Thêm Mới Chủ Đề</h4>
                        @else
                            <h4 class="card-title">Cập Nhật Chủ Đề</h4>
                        @endif
                        <form
                            action="{{ $mode == 'add' ? route('admin.create_topic') : route('admin.update_topic', ['id' => $topic->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên chủ đề <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <input type="text" name="topic_name" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="text" name="topic_name" class="form-control"
                                                    placeholder="Tên chủ đề" value="{{ $topic->topic_name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh chủ đề <span class="asterisk text-danger">*</span></label>
                                            <input type="file" name="topic_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số điểm mỗi câu hỏi <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <input type="number" name="score_per_question" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="number" name="score_per_question" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value="{{ $topic->score_per_question }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Mô tả chủ đề <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <textarea class="form-control" name="topic_description" style="height:200px"></textarea>
                                            @else
                                                <textarea class="form-control" name="topic_description" style="height:200px">{{ $topic->topic_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    @if ($mode == 'add')
                                        <button type="submit" class="btn btn-info">Thêm Mới</button>
                                    @else
                                        <button type="submit" class="btn btn-info">Cập Nhật</button>
                                    @endif
                                    <button type="reset" class="btn btn-dark">Làm Mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // Hiển thị thông báo
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
