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

            <div class="game-over">
                <h1>Lịch sử trò chơi</h1>
                <div style="width:40%;height:40%;margin:0 auto">
                        <canvas id="myPieChart"></canvas>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ngày</th>
                                    <th>Tên chủ đề</th>
                                    <th>Số câu đúng</th>
                                    <th>Số câu sai</th>
                                    <th>Điểm</th>
                                    <th>Tổng số câu hỏi</th>
                                </tr>
                            </thead>
                            <tbody id="game-history">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let arr = @json($history_games);
        let sum_true = @json($sumTrueAnswer);
        let sum_wrong = @json($sumWrongAnswer);

        var ctx = document.getElementById('myPieChart').getContext('2d');


var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Đáp án đúng', 'Đáp án sai'],
        datasets: [{
            label: 'Tổng số lượng ',
            data: [sum_true, sum_wrong],
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
                text: 'Biểu đồ tổng số lượng đúng sai của các lần chơi '
            }
        },
        maintainAspectRatio: false,
        onResize: function(chart, size) {
            chart.canvas.parentNode.style.width = '250px';
            chart.canvas.parentNode.style.height = '250px';
        }
    },
});

        function formatISO8601ToCustomFormat(iso8601String) {
    const date = new Date(iso8601String);
    const day = String(date.getUTCDate()).padStart(2, '0');
    const month = String(date.getUTCMonth() + 1).padStart(2, '0');
    const year = date.getUTCFullYear();
    const hours = String(date.getUTCHours()).padStart(2, '0');
    const minutes = String(date.getUTCMinutes()).padStart(2, '0');
    const seconds = String(date.getUTCSeconds()).padStart(2, '0');
    return `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
}

        var gameHistoryTable = document.getElementById('game-history');
        arr.forEach(function(game) {
            console.log(game.created_at);
            var row = document.createElement('tr');
            var sum = game.true_number + game.wrong_number;
            row.innerHTML = `
            <td>${formatISO8601ToCustomFormat(game.created_at)}</td>
            <td>${game.topic_id}</td>
            <td>${game.true_number}</td>
            <td>${game.wrong_number}</td>
            <td>${game.score}</td>
            <td>${sum}</td>
        `;
            gameHistoryTable.appendChild(row);
        });

        // Hiển thị tổng câu hỏi
        document.getElementById('total-questions').innerText = totalQuestions;
    </script>
</body>


</html>
