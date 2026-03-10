<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diễn Đàn Động Vật</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('users/social_assets/css/style.css') }}">
    <!-- ICONCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body>
    @include('user.includes.header-social')
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
    <main>
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
        <div class="games">
            <h1>Danh sách quà</h1>

            <div class="points" style="margin-top:5px">
                <p>Số điểm bạn đang có : <span id="point-counter">{{ Auth::user()->reward_score }}</span></p>
            </div>

            <div class="gifts">
                @foreach ($rewards as $key => $reward)
                @if($key %2 == 0)
                <a href="{{route('user.get_reward',['id' => $reward->id])}}" class="gift-link" onclick="return confirmSubmit()">
                    <img src="{{asset('gifts/red.jpg')}}"
                        alt="Gift 2">
                    <p>{{$reward->reward_name}} ({{$reward->reward_score}} điểm)</p>
                </a>
                @else
                <a href="{{route('user.get_reward',['id' => $reward->id])}}" class="gift-link" onclick="return confirmSubmit()">
                    <img src="{{asset('gifts/yellow.jpg')}}"
                        alt="Gift 2">
                    <p>{{$reward->reward_name}} ({{$reward->reward_score}} điểm)</p>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>// Hiển thị thông báo
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
    };</script>
    <!-- <script>
        function confirmSubmit() {
        var result = window.confirm('Bạn có chắc chắn muốn lấy phần quà này ?');
        return result;
    }
    </script> -->
</body>


</html>
