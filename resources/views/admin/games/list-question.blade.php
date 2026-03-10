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
            margin: 15px;
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

        .key-father {
            position: relative;
        }

        .key-child {
            color: red;
            top: -10;
            right: -10;
            background-color: white;
            position: absolute;
            border: 1px solid black;
            padding: 2px;
            border-radius: 20px;
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
            <div class="col-5 text-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#addQuestionModal"><b
                        style="font-size: 20px">+</b> Thêm câu hỏi</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách các câu hỏi</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display "
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 65px; text-align: center; vertical-align: middle;">STT</th>
                                        <th style="text-align: center; vertical-align: middle;width: 50%;">Nội dung câu hỏi
                                        </th>
                                        <th style="text-align: center; vertical-align: middle;">Danh sách đáp án</th>
                                        <th style="text-align: center; vertical-align: middle;">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $key => $question)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td style="word-break: break-all;">{{ $question->question_content }}</td>
                                            <td class="box-container">
                                                @if (count($question->answers) > 0)
                                                    @foreach ($question->answers as $item)
                                                        <div class="box-char key-father">
                                                            <a href="#">{{ $item->answer_content }}</a>
                                                            @if ($item->answer_status == 1)
                                                                <span class="key-child"><i class="icon-key"></i></span>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $question->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                /
                                                <a href="#"class="icon-action" data-toggle="modal"
                                                    data-target="#editQuestionModal_{{ $question->id }}"><i
                                                        class="icon-settings"></i></a>
                                            </td>
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
    @foreach ($questions as $key => $question)
        <div class="modal fade" id="deleteConfirmationModal_{{ $question->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $question->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $question->id }}">Xóa chủ đề</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa chủ đề này không
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.delete_question', ['id' => $question->id, 'topic_id' => $id]) }}"
                            method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editQuestionModal_{{ $question->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editQuestionModal_{{ $question->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editQuestionModal_{{ $question->id }}">Sửa câu hỏi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.update_question_answer', ['id' => $question->id]) }}"
                            id="editQuestionForm_{{ $question->id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input hidden type="text" name="topic_id" value="{{ $id }}">
                            <div class="form-group">
                                <label for="questionTitle">Nội dung câu hỏi</label>
                                <textarea class="form-control" name="question_content" style="height:200px" required>{{ $question->question_content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="questionTitle">Nội dung câu đáp án</label>
                                @foreach ($question->answers as $key => $item)
                                    <div class="mb-2">
                                        <input type="text" name="answer_content[]" placeholder="Nhập nội dung"
                                            style="width: 75%;" value="{{ $item->answer_content }}" required>
                                        <input type="text" value="{{ $item->id }}" hidden name="hidden_id[]">
                                        <span class="ml-5">
                                            <input type="radio" name="answer_status" value="{{ $key }}"
                                                {{ $item->answer_status == 1 ? 'checked' : '' }} required>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" form="editQuestionForm_{{ $question->id }}">Cập
                            Nhật</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addQuestionModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="addQuestionModal">Thêm câu hỏi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.create_question_answer', ['id' => $id]) }}" id="addQuestionForm"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="questionTitle">Nội dung câu hỏi</label>
                            <textarea class="form-control" name="question_content" style="height:200px" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="questionTitle">Nội dung câu đáp án</label>
                            <div class="mb-2">
                                <input type="text" name="answer_content[]" placeholder="Nhập nội dung"
                                    style="width: 75%;" required>
                                <span class="ml-5">
                                    <input type="radio" name="answer_status" value="0" required>
                                </span>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="answer_content[]" placeholder="Nhập nội dung"
                                    style="width: 75%;" required>
                                <span class="ml-5">
                                    <input type="radio" name="answer_status" value="1" required>
                                </span>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="answer_content[]" placeholder="Nhập nội dung"
                                    style="width: 75%;" required>
                                <span class="ml-5">
                                    <input type="radio" name="answer_status" value="2" required>
                                </span class="ml-5">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="answer_content[]" placeholder="Nhập nội dung"
                                    style="width: 75%;" required>
                                <span class="ml-5">
                                    <input type="radio" name="answer_status" value="3" required>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary" form="addQuestionForm">Thêm Mới</button>
                        </div>
                    </form>
                </div>
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
