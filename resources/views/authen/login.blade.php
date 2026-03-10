<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
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
    <section class="bg-light p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="row g-0">
                            <div class="col-12 col-md-6">
                                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                                    src="{{ asset('images/animal-lg-1.jpg') }}" alt="Welcome back you've been missed!">
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                                <div class="col-12 col-lg-11 col-xl-10">
                                    <div class="card-body p-3 p-md-4 p-xl-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-5">
                                                    <h4 class="text-center">Chào mừng bạn đã trở lại!</h4>
                                                    <div class="alert alert-info mt-3" style="font-size: 0.9rem;">
                                                        <strong>Tài khoản test:</strong><br>
                                                        - Hệ thống: system@gmail.com / 123456<br>
                                                        - Admin: tuongvandang1@gmail.com / 123456<br>
                                                        - User: cuong2003@gmail.com / 123456<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="name@example.com" required>
                                                        <label for="email" class="form-label">Email <span
                                                                class="asterisk text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" placeholder="Password" required>
                                                        <label for="password" class="form-label">Mật khẩu <span
                                                                class="asterisk text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-dark btn-lg" type="submit">Đăng
                                                            nhập</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                                                    <a href="{{ route('view_register') }}"
                                                        class="link-secondary text-decoration-none">Tạo tài khoản
                                                        mới</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</body>

</html>
