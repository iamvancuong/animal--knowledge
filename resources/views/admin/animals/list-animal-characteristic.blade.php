@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <style>
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
        }

        .notification.failed {
            background-color: #ff3333;
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
            <span id="close-notification" class="close-notification">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('failed'))
        <div id="notification" class="notification failed">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification">{{ session('failed') }}</span>
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
                @if ($mode == 'area')
                    <button class="btn btn-success" data-toggle="modal" data-target="#addAreaModal"><b
                            style="font-size: 20px">+</b> Thêm châu lục</button>
                @elseif($mode == 'climate')
                    <button class="btn btn-success" data-toggle="modal" data-target="#addClimateModal"><b
                            style="font-size: 20px">+</b> Thêm khí hậu</button>
                @elseif($mode == 'nation')
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNationModal"><b
                            style="font-size: 20px">+</b> Thêm quốc gia</button>
                @elseif($mode == 'color')
                    <button class="btn btn-success" data-toggle="modal" data-target="#addColorModal"><b
                            style="font-size: 20px">+</b> Thêm màu sắc</button>
                @elseif($mode == 'biome')
                    <button class="btn btn-success" data-toggle="modal" data-target="#addBiomeModal"><b
                            style="font-size: 20px">+</b> Thêm quần xã</button>
                @else
                    <button class="btn btn-success" data-toggle="modal" data-target="#addOceanModal"><b
                            style="font-size: 20px">+</b> Thêm đại dương</button>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if ($mode == 'area')
                            <h4 class="card-title">Danh sách các châu lục của động vật</h4>
                        @elseif($mode == 'climate')
                            <h4 class="card-title">Danh sách các vùng khí hậu của động vật</h4>
                        @elseif($mode == 'nation')
                            <h4 class="card-title">Danh sách các quốc gia của động vật</h4>
                        @elseif($mode == 'color')
                            <h4 class="card-title">Danh sách các màu sắc của động vật</h4>
                        @elseif($mode == 'biome')
                            <h4 class="card-title">Danh sách các quần xã sinh học của động vật</h4>
                        @else
                            <h4 class="card-title">Danh sách các đại dương của động vật</h4>
                        @endif
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        @if ($mode == 'area')
                                            <th>Ảnh châu lục</th>
                                            <th>Tên châu lục</th>
                                            <th>Mô tả châu lục</th>
                                        @elseif($mode == 'climate')
                                            <th>Ảnh vùng khí hậu</th>
                                            <th>Tên vùng khí hậu</th>
                                            <th>Mô tả vùng khí hậu</th>
                                        @elseif($mode == 'nation')
                                            <th>Tên quốc gia</th>
                                            <th>Mô tả quốc gia</th>
                                            <th>Vĩ độ quốc gia</th>
                                            <th>Kinh độ quốc gia</th>
                                        @elseif($mode == 'color')
                                            <th>Ảnh màu sắc</th>
                                            <th>Tên màu sắc</th>
                                            <th>Mô Tả màu sắc</th>
                                        @elseif($mode == 'biome')
                                            <th>Ảnh quần xã</th>
                                            <th>Tên quần xã</th>
                                            <th>Mô tả quần xã</th>
                                        @else
                                            <th>Ảnh đại dương</th>
                                            <th>Tên đại dương</th>
                                            <th>Mô tả đại dương</th>
                                        @endif
                                        <th>Thao tác</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    @if ($mode == 'area')
                                        @foreach ($data->areas as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                @if($item->area_image != null)    
                                                <img src="{{asset('areas/'.$item->area_image)}}"
                                                        width="200">
                                                </td>
                                                @else
                                                <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                                <td>{{ $item->area_name }}</td>
                                                {{-- <td style="width: 30%">{{ $item->area_description }}</td> --}}
                                                <td style="width: 30%">
                                                    <div class="description" id="description-{{ $key }}">
                                                        {{ Str::limit($item->area_description, 100) }}
                                                        @if (strlen($item->area_description) > 100)
                                                            <span class="show-more"
                                                                onclick="showMore({{ $key }})">Xem thêm</span>
                                                        @endif
                                                    </div>
                                                    <div class="full-description" id="full-description-{{ $key }}"
                                                        style="display: none;">
                                                        {{ $item->area_description }}
                                                        <span class="show-less"
                                                            onclick="showLess({{ $key }})">Ẩn bớt</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                châu lục có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa châu lục này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_area_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @elseif($mode == 'climate')
                                        @foreach ($data->climates as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                @if($item->climate_image != null)    
                                                <img src="{{asset('climates/full/'. $item->climate_image) }}"
                                                        width="200">
                                                </td>
                                                @else
                                                <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                                <td>{{ $item->climate_name }}</td>
                                                {{-- <td>{{ $item->climate_description }}</td> --}}
                                                <td style="width: 30%">
                                                    <div class="description" id="description-{{ $key }}">
                                                        {{ Str::limit($item->climate_description, 100) }}
                                                        @if (strlen($item->climate_description) > 100)
                                                            <span class="show-more"
                                                                onclick="showMore({{ $key }})">Xem Thêm</span>
                                                        @endif
                                                    </div>
                                                    <div class="full-description"
                                                        id="full-description-{{ $key }}" style="display: none;">
                                                        {{ $item->climate_description }}
                                                        <span class="show-less"
                                                            onclick="showLess({{ $key }})">Ẩn bớt</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action"
                                                        data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                vùng khí hậu có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa vùng khí hậu này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_climate_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @elseif($mode == 'nation')
                                        @foreach ($data->nations as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nation_name }}</td>
                                                <td width="40%">{{ $item->nation_description }}</td>
                                                <td>{{ $item->nation_latitude }}</td>
                                                <td>{{ $item->nation_longitude }}</td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action"
                                                        data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                quốc gia có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa quốc gia này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_nation_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @elseif($mode == 'color')
                                        @foreach ($data->colors as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                @if($item->color_image != null)    
                                                <img src="{{asset('colors/'. $item->color_image) }}"
                                                        width="200">
                                                </td>
                                                @else
                                                <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                                <td>{{ $item->color_name }}</td>
                                                {{-- <td>{{ $item->color_description }}</td> --}}
                                                <td>
                                                    <div class="description" id="description-{{ $key }}">
                                                        {{ Str::limit($item->color_description, 100) }}
                                                        @if (strlen($item->color_description) > 100)
                                                            <span class="show-more"
                                                                onclick="showMore({{ $key }})">Xem Thêm</span>
                                                        @endif
                                                    </div>
                                                    <div class="full-description"
                                                        id="full-description-{{ $key }}" style="display: none;">
                                                        {{ $item->color_description }}
                                                        <span class="show-less"
                                                            onclick="showLess({{ $key }})">Ẩn bớt</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action"
                                                        data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                màu sắc có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa màu sắc này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_color_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @elseif($mode == 'biome')
                                        @foreach ($data->biomes as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                @if($item->biome_image != null)    
                                                <img src="{{asset('biomes/full/'. $item->biome_image )}}"
                                                        width="200">
                                                </td>
                                                @else
                                                <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                                <td>{{ $item->biome_name }}</td>
                                                {{-- <td>{{ $item->biome_description }}</td> --}}
                                                <td style="width: 30%">
                                                    <div class="description" id="description-{{ $key }}">
                                                        {{ Str::limit($item->biome_description, 100) }}
                                                        @if (strlen($item->biome_description) > 100)
                                                            <span class="show-more"
                                                                onclick="showMore({{ $key }})">Xem Thêm</span>
                                                        @endif
                                                    </div>
                                                    <div class="full-description"
                                                        id="full-description-{{ $key }}" style="display: none;">
                                                        {{ $item->biome_description }}
                                                        <span class="show-less"
                                                            onclick="showLess({{ $key }})">Ẩn bớt</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action"
                                                        data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                quần xã sinh thái có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa quần xã sinh thái này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_biome_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($data->oceans as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                @if($item->ocean_image != null)    
                                                <img src="{{asset('oceans/'. $item->ocean_image )}}"
                                                        width="200">
                                                </td>
                                                @else
                                                <img src="{{asset('error/error.jpg')}}" alt="error" width="200">
                                                @endif
                                                <td>{{ $item->ocean_name }}</td>
                                                <td>{{ $item->ocean_description }}</td>
                                                <td>
                                                    <a href="#" class="icon-action delete-action"
                                                        data-toggle="modal"
                                                        data-target="#deleteConfirmationModal_{{ $item->id }}"
                                                        style="color: red;"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            {{-- Modal delete --}}
                                            <div class="modal fade" id="deleteConfirmationModal_{{ $item->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="deleteConfirmationModalLabel_{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteConfirmationModalLabel_{{ $item->id }}">Xóa
                                                                đại dương có động vật</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có chắc chắn muốn xóa đại dương này không?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.delete_ocean_animal', ['id' => $data->id, 'id2' => $item->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Hủy</button>
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Xóa</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
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

    @if ($mode == 'area')
        {{-- Modal Create  --}}
        <div class="modal fade" id="addAreaModal" tabindex="-1" role="dialog" aria-labelledby="addAreaModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAreaModal">Thêm châu lục có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_area_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên châu lục</label>
                                <select name="area_id" id="" class="form-control">
                                    @foreach ($areas as $item)
                                        <option value="{{ $item->id }}">{{ $item->area_name }}</option>
                                    @endforeach
                                </select>
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
    @elseif($mode == 'climate')
        {{-- Modal Create  --}}
        <div class="modal fade" id="addClimateModal" tabindex="-1" role="dialog" aria-labelledby="addClimateModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addClimateModal">Thêm vùng khí hậu có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_climate_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên Vùng Khí Hậu</label>
                                <select name="climate_id" id="" class="form-control">
                                    @foreach ($climates as $item)
                                        <option value="{{ $item->id }}">{{ $item->climate_name }}</option>
                                    @endforeach
                                </select>
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
    @elseif($mode == 'nation')
        {{-- Modal Create  --}}
        <div class="modal fade" id="addNationModal" tabindex="-1" role="dialog" aria-labelledby="addNationModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNationModal">Thêm quốc gia có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_nation_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên Vùng Khí Hậu</label>
                                <select name="nation_id" id="" class="form-control">
                                    @foreach ($nations as $item)
                                        <option value="{{ $item->id }}">{{ $item->nation_name }}</option>
                                    @endforeach
                                </select>
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
    @elseif($mode == 'color')
        {{-- Modal Create  --}}
        <div class="modal fade" id="addColorModal" tabindex="-1" role="dialog" aria-labelledby="addColorModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addColorModal">Thêm màu sắc có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_color_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên Màu Sắc</label>
                                <select name="color_id" id="" class="form-control">
                                    @foreach ($colors as $item)
                                        <option value="{{ $item->id }}">{{ $item->color_name }}</option>
                                    @endforeach
                                </select>
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
    @elseif($mode == 'biome')
        {{-- Modal Create  --}}
        <div class="modal fade" id="addBiomeModal" tabindex="-1" role="dialog" aria-labelledby="addBiomeModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBiomeModal">Thêm màu quần xã sinh học có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_biome_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên Quần Xã Sinh Học</label>
                                <select name="biome_id" id="" class="form-control">
                                    @foreach ($biomes as $item)
                                        <option value="{{ $item->id }}">{{ $item->biome_name }}</option>
                                    @endforeach
                                </select>
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
    @else
        {{-- Modal Create  --}}
        <div class="modal fade" id="addOceanModal" tabindex="-1" role="dialog" aria-labelledby="addOceanModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style=" padding:20px; border-radius: 12px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addOceanModal">Thêm màu đại dương có loài động vật này </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.add_ocean_animal', ['id' => $data->id]) }}" id="addContinentForm"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="continentTitle">Tên Đại Dương</label>
                                <select name="ocean_id" id="" class="form-control">
                                    @foreach ($oceans as $item)
                                        <option value="{{ $item->id }}">{{ $item->ocean_name }}</option>
                                    @endforeach
                                </select>
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
    @endif


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
                            <label for="editTitle">Tiêu đề</label>
                            <input type="text" class="form-control" id="editTitle" placeholder="Nhập tiêu đề"
                                value="Châu âu">
                        </div>
                        <div class="form-group">
                            <label for="editDescription">Mô tả</label>
                            <textarea class="form-control" id="editDescription" rows="3" placeholder="Nhập mô tả">Mô tả 1</textarea>
                        </div>
                        <div class="form-group">
                            <label for="currentImage">Hình ảnh hiện tại</label>
                            <br>
                            <img src="" id="currentImage" class="img-fluid" alt="Hình ảnh hiện tại">
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

    function showMore(id) {
        document.getElementById('description-' + id).style.display = 'none';
        document.getElementById('full-description-' + id).style.display = 'block';
    }

    function showLess(id) {
        document.getElementById('full-description-' + id).style.display = 'none';
        document.getElementById('description-' + id).style.display = 'block';
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
