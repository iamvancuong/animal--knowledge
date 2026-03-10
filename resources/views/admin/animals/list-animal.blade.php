@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <style>
        .box-container {
            display: flex;
            flex-wrap: wrap;
        }

        .box-char {
            width: calc(50% - 10px);
            margin: 5px;
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
            align-items: center;
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
                            <li class="breadcrumb-item"><a href="{{ route('list_animal') }}">Quản Lý Động Vật</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-12 mt-3">
                <form action="{{ route('admin.search_animal') }}" method="post">
                    @csrf
                    <div class="search-container">
                        <div class="form-group m-0">
                            <input type="text" name="key_word" class="form-control search-input" placeholder="Nhập tên">
                        </div>
                        <div class="form-group m-0">
                            <input type="text" name="key_word1" class="form-control search-input"
                                placeholder="Nhập tên khoa học">
                        </div>
                        <div class="form-group m-0">
                            <input type="date" class="form-control search-datetime" name="date_filter">
                        </div>
                        <button type="submit" class="btn btn-success">Tìm Kiếm</button>
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
                        <h4 class="card-title">Danh sách động vật</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên động vật</th>
                                        <th>Tên khoa học</th>
                                        <th>Danh sách ảnh</th>
                                        <th>Thời gian tạo</th>
                                        <th style="width: 25%">Đặc điểm</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animalDetail as $key => $item)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('detail_animal', ['id' => $item->id]) }}">{{ $item->animal_name }}</a>
                                            </td>
                                            <td>{{ $item->animal_scientific_name }}</td>
                                            <td><a href="{{ route('list_animal_image', ['id' => $item->id]) }}">Xem Thêm</a>
                                            </td>
                                            <td>{{ $item->created_at }}
                                            </td>
                                            <td class="box-container">
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_area', ['id' => $item->id]) }}">Châu
                                                        lục</a>
                                                </div>
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_climate', ['id' => $item->id]) }}">Khí
                                                        hậu</a>
                                                </div>
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_nation', ['id' => $item->id]) }}">Quốc
                                                        gia</a>
                                                </div>
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_color', ['id' => $item->id]) }}">Màu
                                                        sắc</a>
                                                </div>
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_biome', ['id' => $item->id]) }}">Quần
                                                        xã</a>
                                                </div>
                                                <div class="box-char">
                                                    <a href="{{ route('list_animal_ocean', ['id' => $item->id]) }}">Đại
                                                        dương</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                /
                                                <a href="{{ route('admin.edit-animal', ['id' => $item->id]) }}"
                                                    class="icon-action" onclick="event.stopPropagation();"><i
                                                        class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $animalDetail->links('pagination::bootstrap-4') }}
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
    @foreach ($animalDetail as $key => $item)
        <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa thông tin động
                            vật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa thông tin động vật này không
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.delete-animal', ['id' => $item->id]) }}" method="POST">
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
    // Chỉ kích hoạt modal xác nhận xóa khi click vào nút "Xóa"
    document.querySelectorAll('.delete-action').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault(); // Chặn sự kiện mặc định của nút "Xóa"
            event.stopPropagation(); // Ngăn chặn sự kiện lan truyền lên cấp độ cao hơn
            $('#deleteConfirmationModal').modal('show'); // Hiển thị modal xác nhận xóa
        });
    });


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
