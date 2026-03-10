@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

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
            <div class="col mt-3">
            <form action="{{route('admin.search_user')}}" method="post">
                @csrf
                <div class="search-container">
                    <input type="text" name="key_word" class="search-input" placeholder="Nhập email">
                    <select class="search-select ml-3 mr-3" name="role_id">
                        <option value="">Vai trò</option>
                        <option value="1">Quản lý</option>
                        <option value="2">Người dùng</option>
                    </select>
                    <input type="date" class="search-datetime" name="date_filter">
                    <button type="submit" class="search-button">Tìm Kiếm</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách người dùng</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên người dùng</th>
                                        <th>Email</th>
                                        <th>Giới tính</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày sinh</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Vai trò</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            @if ($user->gender == 0)
                                                <td>Nam</td>
                                            @elseif($user->gender == 1)
                                                <td>Nữ</td>
                                            @else
                                                <td></td>
                                            @endif
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->birthdate }}</td>
                                            @if ($user->avatar != null)
                                                <td><img src="{{asset('avatars/'. $user->avatar )}}"
                                                        width="100"></td>
                                            @else
                                                <td><img src="{{asset('error/user_error.jpg')}}"
                                                        width="100"></td>
                                            @endif
                                            @if ($user->role_id == 1)
                                                <td>Quản trị viên</td>
                                            @elseif ($user->role_id == \App\Models\User::SYSTEM)
                                                <td>Hệ thống</td>
                                            @else
                                                <td>Người dùng</td>
                                            @endif
                                            <td>
                                                @if(Auth::user()->role_id == \App\Models\User::SYSTEM || $user->role_id != \App\Models\User::SYSTEM)
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $user->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                /
                                                <a href="{{ route('admin.view_edit_user', ['id' => $user->id]) }}"
                                                    class="icon-action" onclick="event.stopPropagation();"><i
                                                        class="icon-settings"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $users->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="animalModal" tabindex="-1" role="dialog" aria-labelledby="animalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-right" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="animalModalLabel">
                        <b>Animal Details</b>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> <span id="animalName"></span></p>
                    <p><strong>Scientific Name:</strong> <span id="animalScientificName"></span></p>
                    <p><strong>Description:</strong> <span id="animalDescription"></span></p>
                    <p><strong>Image:</strong> <img id="animalImage" src="" alt="" width="100"></p>
                    <p><strong>Length:</strong> <span id="animalLength"></span></p>
                    <p><strong>Height:</strong> <span id="animalHeight"></span></p>
                    <p><strong>Weight:</strong> <span id="animalWeight"></span></p>
                    <p><strong>Size:</strong> <span id="animalSize"></span></p>
                    <p><strong>Average Lifespan:</strong> <span id="animalLifespan"></span></p>
                    <p><strong>Sound:</strong> <span id="animalSound"></span></p>
                    <p><strong>Video:</strong> <span id="animalVideo"></span></p>
                    <p><strong>Conservation Status:</strong> <span id="animalConservationStatus"></span></p>
                    <p><strong>Activity Time:</strong> <span id="animalActivity"></span></p>
                    <p><strong>Diet:</strong> <span id="animalDiet"></span></p>
                    <p><strong>Category:</strong> <span id="animalCategory"></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    @foreach ($users as $key => $user)
        <div class="modal fade" id="deleteConfirmationModal_{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $user->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $user->id }}">Xóa thông tin người
                            dùng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa thông tin người dùng này không
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('delete_user', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
<script>
    function showModal(name, scientificName, description, imageSrc, category, length, height, weight, size, lifespan,
        sound, video, conservationStatus, activity, diet) {
        document.getElementById('animalName').innerText = name;
        document.getElementById('animalScientificName').innerText = scientificName;
        document.getElementById('animalDescription').innerText = description;
        document.getElementById('animalImage').src = imageSrc;
        document.getElementById('animalLength').innerText = length;
        document.getElementById('animalHeight').innerText = height;
        document.getElementById('animalWeight').innerText = weight;
        document.getElementById('animalSize').innerText = size;
        document.getElementById('animalLifespan').innerText = lifespan;
        document.getElementById('animalSound').innerText = sound;
        document.getElementById('animalVideo').innerText = video;
        document.getElementById('animalConservationStatus').innerText = conservationStatus;
        document.getElementById('animalActivity').innerText = activity;
        document.getElementById('animalDiet').innerText = diet;
        document.getElementById('animalCategory').innerText = category;
        $('#animalModal').modal('show');
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
