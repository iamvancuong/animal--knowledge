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
                            <li class="breadcrumb-item"><a href="{{ route('admin.list_user') }}">Quản Lý Người Dùng</a>
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
                            <h4 class="card-title">Thêm Mới Thông Tin Người Dùng</h4>
                        @else
                            <h4 class="card-title">Cập Nhật Thông Tin Người Dùng</h4>
                        @endif
                        <form
                            action="{{ $mode == 'add' ? route('admin.create_user') : route('admin.update_user', ['id' => $user->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên Người Dùng <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Username" value="{{ $user->name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Name Scientific" value="{{ $user->email }}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mật Khẩu <span class="asterisk text-danger">*</span></label>
                                            @if ($mode == 'add')
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password" value="{{ $user->password }}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            @if ($mode == 'add')
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Hãy nhập thông tin" value="{{ $user->address }}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Giới Tính </label>
                                            <select name="gender" id="" class="form-control">
                                                @if ($mode == 'add')
                                                    <option value="0">Nam</option>
                                                    <option value="1">Nữ</option>
                                                @else
                                                    <option value="0" {{ $user->gender == 0 ? 'selected' : '' }}>Nam
                                                    </option>
                                                    <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>Nữ
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ngày Sinh</label>
                                            @if ($mode == 'add')
                                                <input type="date" name="birthdate" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="date" name="birthdate" class="form-control"
                                                    placeholder="Birthday" value="{{ $user->birthdate }}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Vai Trò <span class="asterisk text-danger">*</span></label>
                                            <select name="role_id" id="" class="form-control">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh Đại Diện</label>
                                            <input type="file" name="avatar" class="form-control">
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
