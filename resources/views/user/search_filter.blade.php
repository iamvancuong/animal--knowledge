@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
<style>
    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .mr-2,
    .mx-2 {
        margin-right: .5rem !important;
    }

    .articles-container {
        margin-top: 40px;
    }

    .animals-invert__item {
        width: 100%;
        margin-bottom: 25px;
        display: flex;
    }

    .animals-invert__item:nth-of-type(odd) .animals-invert__item-content,
    .animals-invert__item:nth-of-type(odd) .animals-invert__item-img {
        background-color: #ebebeb;
    }

    .animals-invert__item:nth-of-type(2n) {
        border: 2px solid #e7e7e7;
        border-radius: 10px;
    }

    .animals-invert__item-img {
        position: relative;
        flex-shrink: 0;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .animals-invert__item-img img {
        width: 275px;
        object-fit: cover;
        height: 100%;
        display: block;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .animals-invert__item-content {
        width: 100%;
        padding: 50px 30px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .animals-invert__item-content p {
        font-family: Open Sans;
        line-height: 1.5;
        font-size: 16px;
    }

    .banner img,
    .blog-container .animals-invert__item:nth-of-type(odd) .animals-invert__item-content,
    .mob_banner img {
        width: 100%;
    }

    .f-tabs {
        display: flex;
    }

    .f-h2 {
        font-size: 24px;
        margin-bottom: 7px;
        color: #202020;
    }

    .f-h2,
    .f-tab {
        /* color: #fff; */
        font-weight: 700;
        text-transform: uppercase;
    }

    .multiline-ellipsis {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        /* Số lượng dòng hiển thị */
        overflow: hidden;
        text-overflow: ellipsis;
        height: 3em;
        /* 3 dòng x 1.5em mỗi dòng (tùy thuộc vào line-height) */
        line-height: 1.5em;
        /* Điều chỉnh khoảng cách dòng */
    }

    .container_select_mui {
        position: relative;
        /* max-width: 320px; */
        width: 100%;
        margin: auto;
    }

    .btn-select {
        display: flex;
        height: 50px;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        border-radius: 8px;
        background-color: #fff;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-select .btn-text {
        font-size: 17px;
        font-weight: 400;
        color: #333;
    }

    .btn-select .arrow-down {
        display: flex;
        height: 21px;
        width: 21px;
        color: #fff;
        font-size: 14px;
        border-radius: 50%;
        background-color: #2EB872;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .btn-select.open .arrow-down {
        transform: rotate(-180deg);
    }

    .list-items {
        position: relative;
        margin-top: 15px;
        border-radius: 8px;
        background-color: #fff;
        padding: 16px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        display: none;
    }

    .btn-select.open~.list-items {
        display: block;
    }

    .list-items .item {
        display: flex;
        align-items: center;
        list-style: none;
        height: 50px;
        cursor: pointer;
        transition: 0.3s;
        padding: 0 15px;
        border-radius: 8px;
    }

    .list-items .item:hover {
        background-color: #e7edfe;
    }

    .item .item-text {
        font-size: 16px;
        font-weight: 400;
        color: #333;
    }

    .item .checkbox {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 16px;
        width: 16px;
        border-radius: 4px;
        margin-right: 12px;
        border: 1.5px solid #c0c0c0;
        transition: all 0.3s ease-in-out;
    }

    .item.checked .checkbox {
        background-color: #2EB872;
        border-color: #2EB872;
    }

    .checkbox .check-icon {
        color: #fff;
        font-size: 11px;
        transform: scale(0);
        transition: 0.3s ease-in-out;
    }

    .item.checked .check-icon {
        transform: scale(1);
    }

    .tabs {
        position: relative;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 6px;
        border-radius: 15px;
        background-color: #2EB872;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 14px;
        text-align: center;
        color: #2EB872;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-icon {
        font-size: 20px;
        width: 32px;
        position: relative;
        top: 2px;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: rgba(194, 53, 100, 0.05);
        border-color: rgba(194, 53, 100, 0.1);
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .tab-pane h2 {
        font-size: 24px;
        margin-bottom: 8px;
    }

    .styled-button {
            background-color: #4CAF50; /* Green background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 15px 32px; /* Some padding */
            text-align: center; /* Centered text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Make the container inline-block */
            font-size: 16px; /* Increase font size */
            margin: 4px 2px; /* Some margin */
            cursor: pointer; /* Pointer/hand icon */
            border-radius: 12px; /* Rounded corners */
            transition-duration: 0.4s; /* 0.4 second transition effect to hover */
        }

        .styled-button:hover {
            background-color: white; /* White background on hover */
            color: black; /* Black text on hover */
            border: 2px solid #4CAF50; /* Green border on hover */
        }

        .search-input {
            border: none;
            outline: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            flex: 1;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.3s ease-in-out;
            margin-right: 10px
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
<!-- Blog Start -->
<div class="container pt-5">
    <h1 class="collection-title">
        Tìm kiếm các loài động vật với các đặc điểm của chúng
    </h1>
    <div class="row">
        <div class="col-4">
            <div class="tabs">
                <div class="tab-item active">
                    <i class="tab-icon fas fa-code"></i>
                    Đặc Điểm Động Vật
                </div>
                <div class="line"></div>
            </div>

            <!-- Tab content -->
            <form action="{{route('user.search_filter')}}" method="post">
                @csrf
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="container_select_mui">
                            <div class="btn-select">
                                <span class="btn-text">Châu Lục</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>

                            <ul class="list-items">
                                @foreach ($areas as $area)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="area_array[]" value="{{$area->id}}">
                                        </span>
                                        <span class="item-text">{{$area->area_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Quốc Gia</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>

                            <ul class="list-items">
                                @foreach ($nations as $nation)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="nation_array[]"
                                                value="{{$nation->id}}">
                                        </span>
                                        <span class="item-text">{{$nation->nation_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Khí Hậu</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>

                            <ul class="list-items">
                                @foreach ($climates as $climate)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="climate_array[]"
                                                value="{{$climate->id}}">
                                        </span>
                                        <span class="item-text">{{$climate->climate_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Quần Xã</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>

                            <ul class="list-items">
                                @foreach ($biomes as $biome)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="biome_array[]"
                                                value="{{$biome->id}}">
                                        </span>
                                        <span class="item-text">{{$biome->biome_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Màu Sắc</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($colors as $color)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="color_array[]"
                                                value="{{$color->id}}">
                                        </span>
                                        <span class="item-text">{{$color->color_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Đại Dương</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($oceans as $ocean)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="ocean_array[]"
                                                value="{{$ocean->id}}">
                                        </span>
                                        <span class="item-text">{{$ocean->ocean_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Tình Trạng Bảo Tồn</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($status as $item)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="status_array[]"
                                                value="{{$item->id}}">
                                        </span>
                                        <span class="item-text">{{$item->status_name}} {{ $item->status_full_name ? '(' . $item->status_full_name . ')' : '' }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Thời Gian Hoạt Động</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($activity_times as $activity_time)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="activity_time_array[]"
                                                value="{{$activity_time->id}}">
                                        </span>
                                        <span class="item-text">{{$activity_time->activity_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Xu Hướng Quần Thể</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($population_trendings as $population_trending)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="population_trending_array[]"
                                                value="{{$population_trending->id}}">
                                        </span>
                                        <span class="item-text">{{$population_trending->population_trending_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Chế Độ Dinh Dưỡng</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($diet_types as $diet_type)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="diet_type_array[]"
                                                value="{{$diet_type->id}}">
                                        </span>
                                        <span class="item-text">{{$diet_type->diet_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="container_select_mui mt-2">
                            <div class="btn-select">
                                <span class="btn-text">Giống Loài</span>
                                <span class="arrow-down">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <ul class="list-items">
                                @foreach ($categories as $category)
                                    <li class="item">
                                        <span class="ml-2 mr-2">
                                            <input class="checkBox" type="checkbox" name="category_array[]"
                                                value="{{$category->id}}">
                                        </span>
                                        <span class="item-text">{{$category->category_name}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;align-items:center;">
                <input type="text" name="keyword" class="search-input" placeholder="Nhập tên động vật...">
                    <button class="styled-button" type="submit">Tìm Kiếm</button>
                </div>
            </form>
        </div>
        @if(count($data) > 0)
        <div class="col-8">
            @foreach ($data as $item)
            <div class="containers articles-container">
                <a href="{{route('user.animal-detail',['id' => $item->id])}}" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="{{ asset('animal_images/' . $item->images->image_name) }}" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">{{$item->animal_name}}</h2>
                        <p class="multiline-ellipsis">{{$item->animal_description}}</p>
                    </div>
                </a>
            </div>
            @endforeach
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
        @else
        <div class="col-8 mt-5">
        <div class="list-animal-item">
                <div class="message-container">
                    <div class="message">
                        Không tìm thấy dữ liệu !!!
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Blog End -->



<script>
    /* Created bt Tivotal */

    document.querySelectorAll('.container_select_mui').forEach(container => {
        const btn = container.querySelector('.btn-select');
        const items = container.querySelectorAll('.checkBox');

        btn.addEventListener('click', () => {
            btn.classList.toggle('open');
        });

        items.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('checked');

                let btnText = container.querySelector('.btn-text');
                let checked = container.querySelectorAll('.checked');

                if (checked && checked.length > 0) {
                    btnText.innerText = `${checked.length} lựa chọn`;
                } else {
                    btnText.innerText = 'Tìm kiếm với nhiều điều kiện';
                }
            });
        });
    });
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    // SonDN fixed - Active size wrong size on first load.
    // Original post: https://www.facebook.com/groups/649972919142215/?multi_permalinks=1175881616551340
    requestIdleCallback(function () {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function () {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection