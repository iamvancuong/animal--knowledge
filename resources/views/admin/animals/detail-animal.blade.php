@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
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
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin chi tiết động vật</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên</label>
                                            <input readonly name="animal_name" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin" value="{{ $animalDetail->animal_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên Khoa Học</label>
                                            <input readonly name="animal_scientific_name" type="text"
                                                class="form-control" placeholder="Hãy nhập thông tin"
                                                value="{{ $animalDetail->animal_scientific_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Chiều Dài</label>
                                            <input readonly name="animal_length" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin" value="{{ $animalDetail->animal_length }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tốc Độ Tối Đa</label>
                                            <input readonly name="top_speed" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin" value="{{ $animalDetail->top_speed }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cân Nặng</label>
                                            <input readonly name="animal_weight" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin" value="{{ $animalDetail->animal_weight }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sải Cánh</label>
                                            <input readonly name="animal_swing" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin" value ="{{ $animalDetail->animal_swing }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số Lượng Quần Thể</label>
                                            <input readonly name="population_size" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->population_size }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tuổi Thọ Trung Bình</label>
                                            <input readonly name="avg_lifespan" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->avg_lifespan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tiếng Kêu</label>
                                            <input readonly name="animal_sound" type="file" class="form-control"
                                                accept=".mp3,.mp4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hành Vi Giao Hợp</label>
                                            <input readonly name="mating_behavior" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->mating_behavior }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mùa Sinh Sản</label>
                                            <input readonly name="reproduction_season" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->reproduction_season }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Thời Gian Mang Thai (Ấp Trứng)</label>
                                            <input readonly name="pregnancy_duration" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->pregnancy_duration }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số Lượng Sinh Sản Con(Trứng) </label>
                                            <input readonly name="baby_carrying" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->baby_carrying }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tuổi Trưởng Thành</label>
                                            <input readonly name="independent_age" type="text" class="form-control"
                                                placeholder="Hãy nhập thông tin"
                                                value ="{{ $animalDetail->independent_age }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tình Trạng Bảo Tồn</label>
                                        <select name="conservation_status_id" id="" class="form-control"
                                            disabled>
                                            @foreach ($conservationStatus as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $animalDetail->conservation_status_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->status_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Chế Độ Ăn</label>
                                        <select name="diet_type" id="" class="form-control" disabled>
                                            @foreach ($dietType as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $animalDetail->diet_type_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->diet_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Loại Động Vật</label>
                                        <select name="category_id" id="" class="form-control" disabled>
                                            @foreach ($animalCategory as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $animalDetail->category_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Xu Hướng Quần Thể</label>
                                        <select name="population_trending_id" id="" class="form-control"
                                            disabled>
                                            @foreach ($populationTrending as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $animalDetail->population_trending_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->population_trending_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Thời Gian Hoạt Động</label>
                                        <select name="activity_time_id" id="" class="form-control" disabled>
                                            @foreach ($activityTime as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $animalDetail->activity_time_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->activity_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label>Đường Dẫn Video</label>
                                            <textarea name="animal_video" class="form-control" disabled placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->animal_video }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mô Tả</label>
                                            <textarea name="animal_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->animal_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vẻ Bề Ngoài</label>
                                            <textarea name="appearance_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->appearance_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Phân Bố Địa Lý</label>
                                            <textarea name="geography_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->geography_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tập Tính & Lối Sống</label>
                                            <textarea name="habit_lifestyle_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->habit_lifestyle_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tập Tính & Sinh Sản</label>
                                            <textarea name="mating_habit_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->mating_habit_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Chế Độ Ăn & Dinh Dưỡng</label>
                                            <textarea name="diet_nutrition_description" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->diet_nutrition_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Các Mối Đe Dọa Đối Với Quần Thể</label>
                                            <textarea name="population_threat" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->population_threat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số Lượng Trong Quần Thể</label>
                                            <textarea name="population_number" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->population_number }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vai Trò Sinh Thái</label>
                                            <textarea name="ecological_niche" class="form-control" disabled placeholder="Hãy nhập thông tin"
                                                style="height: 200px;">{{ $animalDetail->ecological_niche }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Những Sự Thật Thú Vị</label>
                                            <textarea name="fun_fact" class="form-control" disabled placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->fun_fact }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (!Dropzone.options.myDropzone) {
            Dropzone.options.myDropzone = {
                paramName: "file", // Tên của trường dùng để gửi tệp tin
                maxFilesize: 2, // Kích thước tệp tối đa (đơn vị: MB)
                acceptedFiles: ".jpeg,.jpg,.png,.gif", // Loại tệp chấp nhận
                addRemoveLinks: true, // Hiển thị liên kết để xóa tệp tin đã tải lên
                dictDefaultMessage: "Kéo và thả tệp tin hoặc nhấp để tải lên", // Thông báo mặc định
            };

            Dropzone.options.myDropzone.url = "index.html";
        }
    </script>
@endsection
