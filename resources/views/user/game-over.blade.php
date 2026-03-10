<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diễn Đàn Động Vật</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('users/social_assets/css/style.css') }}">
    <link href="{{ asset('users/css/bootstrap.min.css') }}" rel="stylesheet" />
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

    <main>
        <div class="games">

            <div class="game-over mb-5">
                <h1>Chúc mừng bạn đã hoàn thành trò chơi !!!</h1>

                <div class="row mt-5 mb-5">

                    <div style="width:40%;height:40%;" class="col">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="results col"
                        style="display:flex;align-items:center;justify-content:center;flex-direction:column">
                        <p class="fw-bold">Số câu đúng: <span id="correct-answers">{{ $trueAns }}</span></p>
                        <p class="fw-bold">Số câu sai: <span id="wrong-answers">{{ $wrongAns }}</span></p>
                        <p class="fw-bold">Số điểm bạn nhận được : <span id="wrong-answers">{{ $sumScore }}</span></p>
                        <p class="fw-bold" style="color:red;">Hãy dùng số điểm đó để nhận quà !!! </p>
                    </div>
                </div>

            </div>
        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let trueAns = @json($trueAns);
        let wrongAns = @json($wrongAns);


        var ctx = document.getElementById('myPieChart').getContext('2d');


        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Đáp án đúng', 'Đáp án sai'],
                datasets: [{
                    label: 'Số lượng',
                    data: [trueAns, wrongAns],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Biểu đồ đáp án'
                    }
                },
                maintainAspectRatio: false,
                onResize: function(chart, size) {
                    chart.canvas.parentNode.style.width = '250px';
                    chart.canvas.parentNode.style.height = '250px';
                }
            },
        });
    </script>
</body>


</html>
