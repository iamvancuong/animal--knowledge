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

        .chart-container {
      width: 80%;
      margin: auto;
      margin-top: 50px;
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
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Xin Chào {{ Auth::user()->name }}!
                </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Trang chủ</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{$user}}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Người Dùng</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{$reward}}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Phần Quà Trao
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="gift"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{$post}}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Bài Viết</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-text"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 font-weight-medium">{{$animalDetail}}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Động Vật</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="gitlab"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col">
                <div class="card pb-5">
                    <div class="chart-container">
                    <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pb-5">
                    <div class="chart-container">
                    <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card pb-5">
                    <div class="chart-container">
                    <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pb-5">
                    <div class="chart-container">
                    <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let arr = @json($monthlyCountPlays);
    let newArr = Object.values(arr);
    console.log(newArr);
    const labels = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'];
    const data = {
      labels: labels,
      datasets: [{
        label: 'Số lần người dùng tham gia',
        backgroundColor: 'rgb(255, 99, 132,0.5)',
        borderColor: 'rgb(255, 99, 132,1)',
        data: newArr,
      }]
    };

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    let arr1 = @json($monthlyCountRewards);
    let newArr1 = Object.values(arr1);
    console.log(newArr1);
    const label1 = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'];
    const data1 = {
      labels: label1,
      datasets: [{
        label: 'Số lần người dùng nhận quà',
        backgroundColor: 'rgba(0, 128, 0, 0.5)',
        borderColor: 'rgba(0, 128, 0, 1)',
        data: newArr1,
      }]
    };

    const ctx1 = document.getElementById('myChart1').getContext('2d');
    const myChart1 = new Chart(ctx1, {
      type: 'bar',
      data: data1,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    let arr2 = @json($monthlyCountUsers);
    let newArr2 = Object.values(arr2);
    console.log(newArr2);
    const label2 = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'];
    const data2 = {
      labels: label2,
      datasets: [{
        label: 'Người dùng đăng ký hệ thống',
        backgroundColor: 'rgba(0, 0, 255, 0.5)', 
        borderColor: 'rgba(0, 0, 255, 1)', 
        data: newArr2,
      }]
    };

    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: data2,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    let arr3 = @json($monthlyCountPosts);
    let newArr3 = Object.values(arr3);
    console.log(newArr2);
    const label3 = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'];
    const data3 = {
      labels: label3,
      datasets: [{
        label: 'Số bài viết diễn đàn',
        backgroundColor: 'rgba(255, 159, 64, 0.5)', // Màu cam nhạt
        borderColor: 'rgba(255, 159, 64, 1)', 
        data: newArr3,
      }]
    };

    const ctx3 = document.getElementById('myChart3').getContext('2d');
    const myChart3 = new Chart(ctx3, {
      type: 'bar',
      data: data3,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
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
@endsection