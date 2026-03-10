@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .item-animal {
            margin-top: 70px;
        }

        .title-cate-animal {
            font-size: 4rem;
            font-weight: 700;
            color: #2EB872;
        }

        .item-animal-img {
            border-radius: 10px;
        }

        .line {
            height: 0.6px;
            background-color: #c9c9c9;
            margin: 10px 0 20px 0;
        }

        .detai-animal {
            font-weight: 700;
        }

        .multiline-ellipsis {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            /* Số lượng dòng hiển thị */
            overflow: hidden;
            text-overflow: ellipsis;
            height: 6em;
            /* 3 dòng x 1.5em mỗi dòng (tùy thuộc vào line-height) */
            line-height: 1.5em;
            /* Điều chỉnh khoảng cách dòng */
        }
    .message-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .message {
        padding: 20px;
        background-color: #fff3cd; /* Màu nền vàng nhạt */
        color: #856404; /* Màu chữ vàng đậm */
        border: 1px solid #ffeeba; /* Màu viền vàng nhạt */
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-size: 18px; /* Tăng kích thước chữ cho dễ nhìn */
    }
    </style>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="cate-top">
                @if(isset($data1->area_name))
                <h1 class="title-cate-animal">
                    {{ $data1->area_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->area_description }}
                </p>
                @elseif(isset($data1->color_name))
                <h1 class="title-cate-animal">
                    {{ $data1->color_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->color_description }}
                </p>
                @elseif(isset($data1->status_name))
                <h1 class="title-cate-animal">
                    {{ $data1->status_name }}
                    ({{ $data1->status_full_name}})
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->status_description }}
                </p>
                @elseif(isset($data1->population_trending_name))
                <h1 class="title-cate-animal">
                    {{ $data1->population_trending_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->population_trending_description }}
                </p>
                @elseif(isset($data1->nation_name))
                <h1 class="title-cate-animal">
                    {{ $data1->nation_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->nation_description }}
                </p>
                @elseif(isset($data1->diet_name))
                <h1 class="title-cate-animal">
                    {{ $data1->diet_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->diet_description }}
                </p>
                @else
                <h1 class="title-cate-animal">
                    {{ $data1->activity_name }}
                </h1>
                <p class="desc-cate-animal multiline-ellipsis">
                    {{ $data1->activity_description }}
                </p>
                @endif
            </div>
            @if(count($data) > 0)
            <div class="list-animal-item">
                @foreach ($data as $item)
                    <div class="item-animal">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="title-item-animal">
                                    {{ $item->animal_name }}
                                </h3>
                                <div class="line"></div>
                                <p class="desc-item-animal">{{ $item->animal_description }}</p>
                                <a class="detai-animal"
                                    href="{{ route('user.animal-detail', ['id' => $item->id]) }}">Khám phá thêm <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="col-6">
                                @if(isset($item->images->image_name) && $item->images->image_name != null)
                                <img src="{{asset('animal_images/'. $item->images->image_name )}}"
                                    width="100%" alt="" class="item-animal-img">
                                @else
                                <img src="{{asset('error/error.jpg')}}"
                                    width="100%" alt="" class="item-animal-img">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $data->links('pagination::bootstrap-4') }}
            </div>
            @else
            <div class="list-animal-item">
                <div class="message-container">
                    <div class="message">
                        Không tìm thấy dữ liệu !!!
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- About End -->
@endsection
