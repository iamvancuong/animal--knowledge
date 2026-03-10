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
                <a href="{{ route('list_animal') }}" class="btn btn-primary mb-3"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i>
                    Quay lại</a>
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
            <div class="col-5 text-right">
                {{-- Nhớ thêm id để trỏ đến thêm nhiều ảnh động vật --}}
                <!-- <a class="btn btn-light" href="{{ route('admin.add-image-animal') }}"><b style="font-size: 20px">+</b>
                    Thêm nhiều ảnh
                    động vật</a> -->
                <button class="btn btn-success" data-toggle="modal" data-target="#addContinentModal"><b
                        style="font-size: 20px">+</b> Thêm ảnh động vật</button>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách ảnh động vật</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên Động Vật</th>
                                        <th>Thời Gian Tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $key => $image)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @if($image->image_name != null)
                                                    <img src="{{asset('animal_images/'. $image->image_name) }}"
                                                    width="200">
                                                 @else
                                                    <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                            </td>
                                            <td>{{ $image->animalDetail->animal_name }}</td>
                                            <td>{{ $image->created_at }}</td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $image->id }}"
                                                    style="color: red;"><i class="icon-close"></i></a>
                                                <!-- /
                                                                                            <a href="#" class="icon-action"
                                                                                                onclick="event.stopPropagation(); $('#editModal').modal('show');"><i
                                                                                                    class="icon-settings"></i></a> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $images->links('pagination::bootstrap-4') }}
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
    {{-- Modal Create  --}}
    <div class="modal fade" id="addContinentModal" tabindex="-1" role="dialog" aria-labelledby="addContinentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContinentModalLabel">Thêm Ảnh Động Vật</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.add_image_animal', ['id' => $animalDetail->id]) }}" id="addContinentForm"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="continentTitle">Tên động vật</label>
                            <input type="text" class="form-control" id="continentTitle"
                                value="{{ $animalDetail->animal_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="continentImage">Hình ảnh</label>
                            <input name="animal_image[]" type="file" class="form-control-file" id="continentImage" multiple>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" form="addContinentForm">Lưu</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($images as $key => $image)
        {{-- Modal delete --}}
        <div class="modal fade" id="deleteConfirmationModal_{{ $image->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $image->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $image->id }}">Xóa thông tin châu
                            lục</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa ảnh này không?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.delete_image_animal', ['id' => $image->id]) }}" method="POST">
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
    {{-- Modal Edit  --}}
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Sửa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="editTitle">Tên động vật</label>
                            <input type="text" class="form-control" id="editTitle" value="Sư tử " readonly>
                        </div>
                        <div class="form-group">
                            <label for="currentImage">Hình ảnh hiện tại</label>
                            <br>
                            <img src="" id="currentImage" class="img-fluid"
                                alt="Hình ảnh hiện tại">
                        </div>
                        <div class="form-group">
                            <label for="editImage">Chọn hình ảnh mới</label>
                            <input type="file" class="form-control-file" id="editImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
