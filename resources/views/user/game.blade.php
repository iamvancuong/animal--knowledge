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
    <main>
        <div class="games">
            <div class="quizz">
                <h2 style="text-align: center">Hãy trả lời các câu hỏi sau:</h2>
                <form id="quiz-form" action="{{ route('user.check_answer') }}" method="post">
                    @csrf
                    <input hidden type="text" name="topic_id" id="" value="{{ $id }}">
                    @foreach ($questions as $key => $question)
                        <div class="title-quizz" style="word-break: break-all;">
                            <span>(Câu {{ $key + 1 }})</span>{{ $question->question_content }}
                        </div>
                        @foreach ($question->answers as $answer)
                            <div>
                                <span>
                                    <input type="radio" name="questions[{{ $key }}]"
                                        value="{{ $answer->id }}" required>
                                </span>
                                <span>
                                    {{ $answer->answer_content }}
                                </span>
                            </div>
                        @endforeach
                    @endforeach
                    <button type="submit" id="submit-quiz" class="btn-submit" onclick="return confirmSubmit()">Gửi đáp án</button>
                </form>
            </div>



        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script>
        function confirmSubmit() {
        var result = window.confirm('Bạn có chắc chắn muốn nộp đáp án ?');
        return result;
    }
    </script> -->
</body>


</html>
