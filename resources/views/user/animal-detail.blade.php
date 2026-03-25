@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')

    <style>
        .truncate-text {
            position: relative;
            max-height: 6em;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            line-height: 1.5em;
            height: calc(1.5em * 4);
        }

        #mapid {
            height: 500px;
            width: 400px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('users/css/animal-detail.css') }}">
    @php
        // $breadcrumbs = [
        //     ['name' => 'Home', 'url' => route('user.home')],
        //     ['name' => 'List Animal For Category', 'url' => route('user.fillter-list-animal')],
        //     ['name' => 'Animal', 'url' => route('user.home')],
        // ];
    @endphp

    {{-- @include('user.includes.redirect', ['breadcrumbs' => $breadcrumbs]) --}}
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container page-animal">
            <div class="main-animal">
                <div class="row">
                    <div class="col-8">
                        @if (isset($data->images->image_name) && $data->images->image_name != null)
                            <img src="{{asset('animal_images/'. $data->images->image_name )}}" width="100%"
                                alt="" class="animal-detail-img">
                        @else
                            <img src="{{asset('error/error.jpg')}}" width="100%" alt=""
                                class="animal-detail-img">
                        @endif
                    </div>
                    <div class="col-lg-4">
                        <div class="s-char-content">
                            <div class="s-char-heading">
                                <h1 class="a-h1">
                                    {{ $data->animal_name }}
                                </h1>
                            </div>
                            <div class="s-char-kinds">
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr text-uppercase">
                                                TÊN KHOA HỌC

                                            </div>
                                        </div>
                                        <div class="col-8 s-char-kinds__name unactive">
                                            {{ $data->animal_scientific_name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s-char-char characteristic-right-block">
                            <div class="s-char-char__block">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="s-char-char__name">Tuổi Thọ</div>
                                        <div class="s-char-char__num">{{ $data->avg_lifespan }}<span> Năm</span></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="s-char-char__name">Cân Nặng</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value weight_1">{{ $data->animal_weight }}</div>
                                                </div>
                                            </div>
                                            <div class="units-block">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span action="weight_1" class="toggle-units active-unit">kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-char-char__block">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="s-char-char__name">Chiều Dài</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value lengths_1">{{ $data->animal_length }}</div>
                                            </div>
                                            <div class="units-block">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span action="weight_1" class="toggle-units active-unit">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (isset($data->animal_swing) && $data->animal_swing != '')
                                        <div class="col-6">
                                            <div class="s-char-char__name">Sải Cánh</div>
                                            <div class="s-char-char__num">
                                                <div class="characteristic-container">
                                                    <div class="characteristic-value wingspan_1">{{ $data->animal_swing }}</div>
                                                </div>
                                                <div class="units-block">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <span action="weight_1"
                                                                class="toggle-units active-unit">m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="s-char-char__block">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="s-char-char__name">Dân Số</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value">{{ $data->population_size }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ((isset($data->top_speed) && $data->top_speed != '') || (isset($data->top_speed) && $data->top_speed != ''))
                                        <div class="col-6">
                                            <div class="s-char-char__name">Tốc Độ Tối Đa</div>
                                            <div class="s-char-char__num">
                                                <div class="characteristic-container">
                                                    <div class="characteristic-value">{{ $data->top_speed }}</div>
                                                </div>
                                                <div class="units-block">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <span action="weight_1"
                                                                class="toggle-units active-unit">KM/H</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-char-text">
                <p></p>
                {{ $data->animal_description }}
                <p></p>
            </div>
            <div class="s-char-status">
                {{-- Tập tính sinh hoạt (Activity Time) --}}
                @if($data->activityTime)
                <a href="{{ route('user.activity_time', ['id' => $data->activityTime->id]) }}" title="{{ $data->activityTime->activity_name }}" class="s-char-status-item" style="background-color:#424242">
                    <p>{{ mb_substr($data->activityTime->activity_name, 0, 2) }}</p>
                    <span>{{ $data->activityTime->activity_name }}</span>
                </a>
                @endif

                {{-- Chế độ ăn (Diet Type) --}}
                @if($data->diet)
                <a href="{{ route('user.diet_type', ['id' => $data->diet->id]) }}" title="{{ $data->diet->diet_name }}" class="s-char-status-item" style="background-color:#9CCC65">
                    <p>{{ mb_substr($data->diet->diet_name, 0, 2) }}</p>
                    <span>{{ $data->diet->diet_name }}</span>
                </a>
                @endif

                {{-- Xu hướng quần thể (Population Trend) --}}
                @if($data->trend)
                <a href="{{ route('user.population_trending', ['id' => $data->trend->id]) }}" title="{{ $data->trend->population_trending_name }}" class="s-char-status-item" style="background-color:#d52828">
                    <p>{{ mb_substr($data->trend->population_trending_name, 0, 1) }}</p>
                    <span>Xu hướng: {{ $data->trend->population_trending_name }}</span>
                </a>
                @endif

                {{-- Tình trạng bảo tồn (Conservation Status) --}}
                @if($data->status)
                <a href="{{ route('user.conservation_status', ['id' => $data->status->id]) }}" title="{{ $data->status->status_full_name }}" class="s-char-status-item" style="background-color:#80052d">
                    <p>{{ $data->status->status_name }}</p>
                    <span>{{ $data->status->status_full_name }}</span>
                </a>
                @endif

                {{-- Môi trường sống (Biomes) --}}
                @if(isset($data->biomes))
                    @foreach($data->biomes as $biome)
                    <a href="{{ route('biome', ['id' => $biome->id]) }}" title="{{ $biome->biome_name }}" class="s-char-status-item" style="background-color:#6b62b9">
                        <p>{{ mb_substr($biome->biome_name, 0, 2) }}</p>
                        <span>{{ $biome->biome_name }}</span>
                    </a>
                    @endforeach
                @endif

                {{-- Khí hậu (Climates) --}}
                @if(isset($data->climates))
                    @foreach($data->climates as $climate)
                    <a href="{{ route('climate-zone', ['id' => $climate->id]) }}" title="{{ $climate->climate_name }}" class="s-char-status-item" style="background-color:#0ca6cd">
                        <p>{{ mb_substr($climate->climate_name, 0, 2) }}</p>
                        <span>{{ $climate->climate_name }}</span>
                    </a>
                    @endforeach
                @endif

                {{-- Màu sắc (Colors) --}}
                @if(isset($data->colors))
                    @foreach($data->colors as $color)
                    <a href="#" title="{{ $color->color_name }}" class="s-char-status-item" style="background-color:#FB8C00">
                        <p>{{ mb_substr($color->color_name, 0, 2) }}</p>
                        <span>Màu: {{ $color->color_name }}</span>
                    </a>
                    @endforeach
                @endif
            </div>
            <section class="s-ad-banner-horizontal">
                <div class="container" style="text-align: center;">
                    <div id="adngin-between_posts_auto-ad-0"></div>
                </div>
            </section>
            <section class="s-appearance">
                <a class="anchor" id="appearance"></a>
                <div class="container">
                    <div class="s-appearance-block">
                        <h2 class="a-h2">
                            Ngoại Hình
                        </h2>
                        <p>{{ $data->appearance_description }}</p>
                    </div>
                </div>
            </section>
            <section class="s-gallery">
                <a class="anchor" id="photo-gallery"></a>
                <div class="container">
                    <h2 class="a-h2">
                        Hình Ảnh
                    </h2>

                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            @foreach ($multiImages as $key => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true" aria-label="Slide 1"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($multiImages as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    @if ($image->image_name != null)
                                        <img src="{{asset('animal_images/'. $image->image_name )}}"
                                            class="d-block w-100" alt="...">
                                    @else
                                        <img src="{{asset('error/error.jpg')}}" class="d-block w-100"
                                            alt="...">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
            <section class="video">
                <div class="container">
                    <h2 class="a-h2">
                        Video
                    </h2>
                    <article class="content1">
                        <div id="rev_slider_1070_1_wrapper"
                            class="rev_slider_wrapper fullwidthbanner-container tp-mouseover" data-alias="media-gallery"
                            data-source="gallery"
                            style="margin: 0px auto; background-color: rgb(51, 51, 51); padding: 0px; overflow: visible; height: 778px;">

                            <div id="rev_slider_1070_1"
                                class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus"
                                style="margin-top: 0px; margin-bottom: 0px; height: 658px;">
                                <ul class="tp-revslider-mainul"
                                    style="visibility: visible; display: block; overflow: hidden; width: 1170px; height: 100%; max-height: none; left: 0px;">
                                    <li
                                        style="perspective: 6000px; width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: visible; min-width: 100%; left: 0px; top: 0px; z-index: 7;">
                                            <div class="tp-loop-wrap"
                                                style="position: absolute; display: block; min-width: 100%;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; min-width: 100%; overflow: visible;">
                                                    <div class="tp-caption tp-resizeme tp-videolayer coverscreenvideo HasListener rs-apiready"
                                                        id="slide-3018-layer-30"
                                                        style="z-index: 7; border-width: 0px; visibility: inherit; width: 1170px; height: 658px; transition: none 0s ease 0s; text-align: left; line-height: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 17px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <iframe type="text/html" src="{{ $data->animal_video }}"
                                                            width="100%" height="100%"
                                                            style="opacity: 1; width: 100%; height: 100.019%; position: absolute; left: 0px; top: -0.0094984%; display: block; transition: none 0s ease 0s; text-align: left; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; visibility: inherit;"
                                                            class="resizelistener" id="iframe77143"
                                                            title="Things you need to know about RED FOXES!"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden; width: 0%;"></div>
                            </div>
                            <div class="tp-tabs  outer-bottom hesperiden nav-pos-hor-left nav-pos-ver-bottom nav-dir-horizontal"
                                style="max-width: 900px; max-height: 80px; overflow: visible; position: relative; background: rgb(255, 255, 255); padding: 0px; left: 0px; transform: matrix(1, 0, 0, 1, 0, 0); height: 80px;">
                                <div class="tp-tab-mask"
                                    style="max-width: 900px; max-height: 80px; overflow: hidden; position: relative; height: 80px; width: 900px;">
                                    <div class="tp-tabs-inner-wrapper"
                                        style="position: relative; width: 900px; height: 80px; left: 0px;">
                                        <div class="tp-tab selected"
                                            style="width: 300px; height: 80px; left: 0px; top: 0px;">
                                            <div class="tp-tab-content"> <span class="tp-tab-date">Video Tài Liệu</span>
                                                <span class="tp-tab-title">{{ $data->animal_name }}</span>
                                            </div>
                                            <div class="tp-tab-image"
                                                style="background-image: url(&quot;https://img.youtube.com/vi/r2t0MidPKXQ/default.jpg&quot;);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <section class="s-distr">
                <a class="anchor" id="distribution"></a>
                <div class="container">
                    <div class="s-distr-block">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="s-distr-content">
                                    <h2 class="a-h2">
                                        Phân bổ
                                    </h2>
                                    <h3 class="a-h3">

                                        Địa lý
                                    </h3>
                                    <div class="s-distr-block s-distr-block--row">
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <div class="s-distr-geography__slug">

                                                    Lục Địa
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                @foreach ($data->areas as $item)
                                                    <a href="{{ route('user.cate-list', ['id' => $item->id]) }}"
                                                        class="s-distr-geography__link ">{{ $item->area_name }},</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        @if(isset($data->nations) && count($data->nations) > 0)
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <div class="s-distr-geography__slug">

                                                    Quốc Gia
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                @foreach ($data->nations as $item)
                                                    <a href="{{ route('user.nation', ['id' => $item->id]) }}"
                                                        class="s-distr-geography__link ">{{ $item->nation_name }},</a>
                                                @endforeach
                                                </span>
                                            </div>
                                        </div>
                                        @endif
                                        @if(isset($data->oceans) && count($data->oceans) > 0)
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <div class="s-distr-geography__slug">

                                                    Đại Dương
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                @foreach ($data->oceans as $item)
                                                    <a href="{{ route('user.ocean', ['id' => $item->id]) }}"
                                                        class="s-distr-geography__link ">{{ $item->ocean_name }},</a>
                                                @endforeach
                                                </span>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <p>{{ $data->geography_description }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="s-distr-map zoom-map-trigger">
                                    <div id="mapid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-50">
                            <section class="s-ad-banner-horizontal">
                                <div class="container" style="text-align: center;">
                                    <div class="list-ads-block"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="s-distr-zone">
                        <h3 class="a-h3">

                            Quần Xã Sinh Vật
                        </h3>
                        <div class="s-distr-block">
                            <div class="row">
                                @foreach ($data->biomes as $item)
                                    <div class="col-lg-3 col-md-6 s-distr-margin">
                                        @if ($item->biome_image != null)
                                            <a href="{{ route('biome', ['id' => $item->id]) }}"
                                                class="s-distr-zone-item "
                                                style="background-color: #00c853; background-image: url({{asset('biomes/small/'. $item->biome_image )}}); background-size: cover"><span>{{ $item->biome_name }}</span>
                                            </a>
                                        @else
                                            <a href="{{ route('biome', ['id' => $item->id]) }}"
                                                class="s-distr-zone-item "
                                                style="background-color: #00c853; background-image: url({{asset('error/error.jpg')}}); background-size: cover"><span>{{ $item->biome_name }}</span>
                                            </a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="s-distr-climate">
                        <h3 class="a-h3">

                            Vùng Khí Hậu
                        </h3>
                        <div class="row">
                            @foreach ($data->climates as $item)
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    @if ($item->climate_image != null)
                                        <a href="{{ route('climate-zone', ['id' => $item->id]) }}"
                                            class="s-distr-climate__link "
                                            style="background-color: #4CAF50; background-image: url({{asset('climates/small/'. $item->climate_image )}});"><span>{{ $item->climate_name }}</span>
                                        </a>
                                    @else
                                        <a href="{{ route('climate-zone', ['id' => $item->id]) }}"
                                            class="s-distr-climate__link "
                                            style="background-color: #4CAF50; background-image: url({{asset('error/error.jpg')}});"><span>{{ $item->climate_name }}</span>
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-habbit mt-5 mb-5">
                <a class="anchor" id="habits"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="s-habbit-img open-gallery" data-id="11849">
                                @if (isset($habitImage->image_name) && $habitImage->image_name != null)
                                    <img src="{{asset('animal_images/'. $habitImage->image_name )}}" style="width:100%;"
                                        alt="Red Fox 2016-05-19 (11)">
                                @else
                                    <img src="{{asset('error/error.jpg')}}" alt="Red Fox 2016-05-19 (11)" style="width:100%;">
                                @endif
                            </div>
                            <div class="optimanetwork">
                                <script data-adscript="" src="https://servingcdn.net?uid=64a8647323c90d5fba5ff554&amp;w=300&amp;h=250"
                                    type="text/javascript"></script>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-habbit-content">
                                <h2 class="a-h2">
                                    Tập Tính và Lối Sống
                                </h2>
                                <p>{{ $data->habit_lifestyle_description }}</p>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <div class="s-mating-slug">
                                        <div class="s-mating-slug__text text-uppercase">
                                            Thời gian hoạt động
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <a class="s-population__link"
                                            href="{{ route('user.activity_time', ['id' => $data->activityTime->id]) }}">{{ $data->activityTime->activity_name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-sm-3">
                                    <div class="s-mating-slug__text text-uppercase">

                                        Tiếng Kêu
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <audio controls="">
                                        <source src="{{asset('animal_sounds/'. $data->animal_sound )}}"
                                            type="audio/mpeg">
                                        Your browser does not support the audio element.

                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-mating mt-5 mb-5">
                <a class="anchor" id="mating"></a>
                <div class="container">
                    <div class="s-mating-block">
                        <h2 class="a-h2">

                            Tập Tính Sinh Sản
                        </h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="s-mating-descr">
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">
                                                    Hành vi giao hợp
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char__text">
                                                {{ $data->mating_behavior }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    Mùa sinh sản
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{ $data->reproduction_season }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    THỜI GIAN MANG THAI(ấp trứng)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{ $data->pregnancy_duration }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    Số lượng con(hoặc trứng)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{ $data->baby_carrying }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    Tuổi Độc Lập
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{ $data->independent_age }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="s-mating-text">
                                    <p>{{ $data->mating_habit_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-ad-banner-horizontal mt-5 mb-5">
                <div class="container" style="text-align: left;">
                    <div class="list-ads-block">
                        <div class="row">
                            <h2 class="a-h2 col-sm-6 col-md-8">
                                Chế độ ăn và dinh dưỡng
                            </h2>
                            <br>
                            <br>
                            <p class="col-sm-6 col-md-8">{{ $data->diet_nutrition_description }}</p>
                            <div class="col-sm-6 col-md-8">
                                <div class="row align-items-end">
                                    <div class="col col-4 s-population-slug">
                                        Chế độ dinh dưỡng
                                    </div>
                                    <div class="col-8">
                                        <a class="s-population__link"
                                            href="{{ route('user.diet_type', ['id' => $data->diet->id]) }}">{{ $data->diet->diet_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-population mt-5 mb-5">
                <a class="anchor" id="population"></a>
                <div class="container">
                    <div class="s-population-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="s-population-img open-gallery" data-id="53626">
                                    @if (isset($populationImage->image_name) && $populationImage->image_name != null)
                                        <img src="{{asset('animal_images/'. $populationImage->image_name )}}"style="width:90%"
                                            alt="Red Fox photo">
                                    @else
                                        <img src="{{asset('error/error.jpg')}}" alt="Red Fox photo" style="width:90%">
                                    @endif
                                </div>
                                <div class="s-population-link">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 col-md-4">
                                            <div class="s-population-slug">

                                                Xu hướng quần thể
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-md-8">
                                            <a href="{{ route('user.population_trending', ['id' => $data->trend->id]) }}"
                                                class="s-population__link">{{ $data->trend->population_trending_name }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-population-link">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 col-md-4">
                                            <div class="s-population-slug text-uppercase">
                                                Tình Trạng Bảo Tồn
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-md-8">
                                            <a href="{{ route('user.conservation_status', ['id' => $data->status->id]) }}"
                                                class="s-population__link">{{ $data->status->status_name }} ({{ $data->status->status_full_name }})</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-population-view">
                                    @foreach ($conservationStatus as $item)
                                        <a href="{{ route('user.conservation_status', ['id' => $item->id]) }}"
                                            @if ($item->id == $data->conservation_status_id) class="s-population-view__item active-hoover-circle"
                                    @else
                                    class="s-population-view__item" @endif>{{ $item->status_name }}</a>
                                    @endforeach
                                </div>
                                <div class="mt-50">
                                    <div id="adngin-population-0"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="s-population-content">
                                    <h2 class="a-h2">

                                        Quần Thể
                                    </h2>
                                    <h3 class="a-h3">

                                        Các mối đe dọa đối với quần thể
                                    </h3>
                                    <p>{{ $data->population_threat }}
                                    </p>
                                    <h3 class="a-h3">

                                        Số lượng quần thể
                                    </h3>
                                    <p>{{ $data->population_number }}</p>
                                    @if ($data->ecological_niche != '')
                                        <h3 class="a-h3">

                                            Vai trò sinh thái
                                        </h3>
                                        <p>{{ $data->ecological_niche }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @if($funFact != "")
            <section class="s-ad-banner-horizontal">
                <div class="container" style="text-align: left;">
                    <div class="list-ads-block">
                        <div class="row">
                            <h2 class="a-h2 col-sm-6 col-md-8">
                                Sự thật thú vị về {{ $data->animal_name }}
                            </h2>
                            <br>
                            <br>
                        </div>
                        @foreach ($funFact as $item)
                            <div>
                                <p style="font-size:20px;margin-bottom:30px"><i class="fa-solid fa-otter"
                                        style="color: #00c853;"></i> {{ $item }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            <!-- <section class="s-related">
                                            <div class="container">
                                                <h2 class="a-h2">

                                                    Included in Lists
                                                </h2>
                                                <div class="s-related-row">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="https://animalia.bio/index.php/lists/country/mammals-of-sri-lanka"
                                                                class="s-related-item ml-auto"
                                                                style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/800px-sri-lanka-purple-faced-leaf-monkeyjpg.webp') no-repeat center; background-size: cover">
                                                                <div class="s-related-item__content">
                                                                    <div class="s-related-item__name">Mammals of Sri Lanka</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="https://animalia.bio/index.php/lists/country/threatened-species-of-saudi-arabia"
                                                                class="s-related-item ml-auto"
                                                                style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/hawaiian-green-sea-turtle-on-black-sand.webp') no-repeat center; background-size: cover">
                                                                <div class="s-related-item__content">
                                                                    <div class="s-related-item__name">Threatened Species of Saudi Arabia</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="https://animalia.bio/index.php/lists/country/threatened-species-of-united-arab-emirates"
                                                                class="s-related-item ml-auto"
                                                                style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/hawaiian-green-sea-turtle-on-black-sand.webp') no-repeat center; background-size: cover">
                                                                <div class="s-related-item__content">
                                                                    <div class="s-related-item__name">Threatened Species of United Arab Emirates</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="https://animalia.bio/index.php/lists/country/mammals-of-oman"
                                                                class="s-related-item ml-auto"
                                                                style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/jIGBzfIM8PVutDJUsahS.webp') no-repeat center; background-size: cover">
                                                                <div class="s-related-item__content">
                                                                    <div class="s-related-item__name">Mammals of Oman</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="center">
                                                    <a href="https://animalia.bio/index.php/lists?animal=finless-porpoise"
                                                        class="show-more-animal-lists">
                                                        more lists with Indo-Pacific Finless Porpoise

                                                    </a>
                                                </div>
                                            </div>
                                        </section> -->

            <!-- <section class="s-fascinating">
                                            <div class="container">
                                                <h2 class="a-h2">
                                                    Coloring Pages

                                                </h2>
                                                <div class="s-fascinating-block coloring-slider-desktop-hidden">
                                                    <div class="owl-carousel-coloring-page owl-carousel s-fascinating-item owl-loaded owl-drag">


                                                        <div class="owl-stage-outer">
                                                            <div class="owl-stage"
                                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 0px;">
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/iGDSdDDqoIxxjLtfvbCfy0zGvD0dXZdfsoO2tlnZ.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/6CYJLb2FR71MX77Ob6v6TE0DSX13WQJhUgKJKU4O.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/nRUc9pZXYPpptdlmTTE0TDY3ZbOoigZLqF06Diw5.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/MsTxoY0HDSsb5NTZGvkiL1Of6W9deN6IXYWr1KgM.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/JZ2G3p2e9I3xqQTI7NvyyL4RTRcoNoYDspYJGzFa.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/kBepegCvE4c4HWB5phWwPdGt37E9sS353Amksc1C.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/iGDSdDDqoIxxjLtfvbCfy0zGvD0dXZdfsoO2tlnZ.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/6CYJLb2FR71MX77Ob6v6TE0DSX13WQJhUgKJKU4O.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/nRUc9pZXYPpptdlmTTE0TDY3ZbOoigZLqF06Diw5.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/MsTxoY0HDSsb5NTZGvkiL1Of6W9deN6IXYWr1KgM.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/JZ2G3p2e9I3xqQTI7NvyyL4RTRcoNoYDspYJGzFa.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/kBepegCvE4c4HWB5phWwPdGt37E9sS353Amksc1C.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/iGDSdDDqoIxxjLtfvbCfy0zGvD0dXZdfsoO2tlnZ.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/6CYJLb2FR71MX77Ob6v6TE0DSX13WQJhUgKJKU4O.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/nRUc9pZXYPpptdlmTTE0TDY3ZbOoigZLqF06Diw5.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/MsTxoY0HDSsb5NTZGvkiL1Of6W9deN6IXYWr1KgM.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/JZ2G3p2e9I3xqQTI7NvyyL4RTRcoNoYDspYJGzFa.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/kBepegCvE4c4HWB5phWwPdGt37E9sS353Amksc1C.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/iGDSdDDqoIxxjLtfvbCfy0zGvD0dXZdfsoO2tlnZ.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/6CYJLb2FR71MX77Ob6v6TE0DSX13WQJhUgKJKU4O.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/nRUc9pZXYPpptdlmTTE0TDY3ZbOoigZLqF06Diw5.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item cloned active" style="width: auto;">
                                                                    <div class="coloring-page-item">
                                                                        <div class="coloring-page-links">
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/MsTxoY0HDSsb5NTZGvkiL1Of6W9deN6IXYWr1KgM.pdf">A4
                                                                                PDF</a>
                                                                            <a target="_blank"
                                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/JZ2G3p2e9I3xqQTI7NvyyL4RTRcoNoYDspYJGzFa.pdf">Letter
                                                                                PDF</a>
                                                                        </div>
                                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/kBepegCvE4c4HWB5phWwPdGt37E9sS353Amksc1C.webp"
                                                                            alt="" style="opacity: 1;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-nav disabled">
                                                            <div class="owl-prev"></div>
                                                            <div class="owl-next"></div>
                                                        </div>
                                                        <div class="owl-dots disabled">
                                                            <div class="owl-dot active"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coloring-page-container coloring-animal-mobile-hidden">
                                                    <div class="coloring-page-item">
                                                        <div class="coloring-page-links">
                                                            <a target="_blank"
                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/MsTxoY0HDSsb5NTZGvkiL1Of6W9deN6IXYWr1KgM.pdf">A4
                                                                PDF</a>
                                                            <a target="_blank"
                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/JZ2G3p2e9I3xqQTI7NvyyL4RTRcoNoYDspYJGzFa.pdf">Letter
                                                                PDF</a>
                                                        </div>
                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/kBepegCvE4c4HWB5phWwPdGt37E9sS353Amksc1C.webp"
                                                            alt="">
                                                    </div>
                                                    <div class="coloring-page-item">
                                                        <div class="coloring-page-links">
                                                            <a target="_blank"
                                                                href="https://s3.animalia.bio/animals/coloring_pages/pdf/iGDSdDDqoIxxjLtfvbCfy0zGvD0dXZdfsoO2tlnZ.pdf">A4
                                                                PDF</a>
                                                            <a target="_blank"
                                                                href="https://s3.animalia.bio/animals/coloring_pages/letter_pdf/6CYJLb2FR71MX77Ob6v6TE0DSX13WQJhUgKJKU4O.pdf">Letter
                                                                PDF</a>
                                                        </div>
                                                        <img src="https://s3.animalia.bio/animals/coloring_pages/small/nRUc9pZXYPpptdlmTTE0TDY3ZbOoigZLqF06Diw5.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
            <!-- <section class="s-ref">
                                            <a class="anchor" id="refs"></a>
                                            <div class="container">
                                                <h2 class="a-h2">

                                                    References
                                                </h2>
                                                <div class="s-ref-block">
                                                    <div class="s-ref-item">
                                                        <span>1. Waved Albatross Wikipedia article - <a
                                                                href="https://en.wikipedia.org/wiki/Waved_albatross"
                                                                target="_blank">https://en.wikipedia.org/wiki/Waved_albatross</a></span>
                                                    </div>
                                                    <div class="s-ref-item">
                                                        <span>2. Waved Albatross on The IUCN Red List site - <a
                                                                href="http://www.iucnredlist.org/details/22698320/0"
                                                                target="_blank">http://www.iucnredlist.org/details/22698320/0</a></span>
                                                    </div>
                                                    <div class="s-ref-item">
                                                        <span>3. Xeno-canto bird call - <a href="https://xeno-canto.org/332858"
                                                                target="_blank">https://xeno-canto.org/332858</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
            <section class="slide-show-more">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <h2 class="a-h2">
                            Một số động vật khác bạn có thể xem thêm
                        </h2>
                        <div class="card-wrapper swiper-wrapper">
                            @foreach ($dataRandom as $item)
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            @if (isset($item->images->image_name) && $item->images->image_name != null)
                                                <img src="{{asset('animal_images/'. $item->images->image_name )}}"
                                                    alt="" class="card-img">
                                            @else
                                                <img src="{{asset('error/error.jpg')}}" alt=""
                                                    class="card-img">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">{{ $item->animal_name }}</h2>
                                        <p class="description truncate-text">{{ $item->animal_description }}</p>
                                        <a href="{{ route('user.animal-detail', ['id' => $item->id]) }}"
                                            class="button">Xem thêm</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </div>
    <!-- About End -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper's JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Leaflet.js
        let arrCordinate = @json($newArrayCordinate);
        var mymap = L.map('mapid').setView([0, 0], 2);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">Các Quốc Gia Có Động Vật</a> contributors'
        }).addTo(mymap);

        var customIcon = L.icon({
            iconUrl: '{{asset('maps/icon_map.png')}}',
            iconSize: [30, 30], // Kích thước của biểu tượng
        });
        arrCordinate.forEach(function(coords) {
            L.marker(coords.coords, {
                icon: customIcon
            }).addTo(mymap).bindPopup(coords.name).openPopup();
        });
    </script>
@endsection
