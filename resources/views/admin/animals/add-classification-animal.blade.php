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
                            <li class="breadcrumb-item"><a href="{{ route('list_animal') }}">Quản Lý Động Vật</a>
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
                        <h4 class="card-title">Animal</h4>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name Animal</label>
                                            <input type="text" class="form-control" value="Sư Tử">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Area Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Biome Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Climate Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Color Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Nation Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animal-select">Select Ocean Animal</label>
                                        <select class="form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (!Dropzone.options.myDropzone) {
            Dropzone.options.myDropzone = {
                paramName: "file", // Tên của trường dùng để gửi tệp tin
                maxFilesize: 2, // Kích thước tệp tối đa (đơn vị: MB)
                acceptedFiles: ".jpeg,.jpg,.png,.gif", // Loại tệp chấp nhận
                addRemoveLinks: true, // Hiển thị liên kết để xóa tệp tin đã tải lên
                dictDefaultMessage: "Kéo và thả tệp tin hoặc nhấp để tải lên", // Thông báo mặc định
            };

            Dropzone.options.myDropzone.url = "index.html";
        }
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
@endsection
