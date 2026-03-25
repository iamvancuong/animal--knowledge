@extends('user.main')
@section('title', 'Home Page')
@section('content_user')
    <style>
        .wrapper_cate {
            width: 100%;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container_cate {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
        }

        .card_cate {
            width: 80px;
            border-radius: .75rem;
            background-size: cover;
            cursor: pointer;
            overflow: hidden;
            border-radius: 2rem;
            margin: 0 10px;
            display: flex;
            align-items: flex-end;
            transition: .6s cubic-bezier(.28, -0.03, 0, .99);
            box-shadow: 0px 10px 30px -5px rgba(0, 0, 0, 0.8);
        }

        .card_cate>.row {
            color: white;
            display: flex;
            flex-wrap: nowrap;
        }

        .card_cate>.row>.icon {
            background: #2EB872;
            color: white;
            border-radius: 50%;
            width: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
        }

        .card_cate>.row>.description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 100px;
            width: 520px;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }


        .row_climate {
            padding: 0.75vw;

            display: grid;
            grid-template-columns: repeat(64, 1fr);
            grid-template-rows: 55vh 30vh;
            grid-row-gap: 0.75vw;
        }

        .box_climate a {
            display: block;
            width: 100%;
            height: 100%;

            position: absolute;
            top: 0;
            left: 0;

            &:hover img {
                opacity: 0.75;
            }
        }

        .box__inner {
            background-color: #005696;
            width: 100%;
            height: 100%;
            position: relative;

            img {
                width: 100%;
                height: 100%;

                object-position: 50% 50%;
                object-fit: cover;

                transition: opacity .2s ease-out;
            }
        }

        .box--left {
            clip-path: polygon(0 0, 98% 0, 83% 100%, 0 100%);
            grid-row: 1;
            grid-column: 1 / span 35;
        }

        .box--right {
            clip-path: polygon(17% 0, 100% 0, 100% 100%, 2% 100%);
            grid-row: 1;
            grid-column: span 35 / -1;
        }

        .box--small {
            grid-row: 2;

            &.box--left {
                clip-path: polygon(0 0, 83% 0, 98% 100%, 0 100%);
            }

            &.box--right {
                clip-path: polygon(2% 0, 100% 0, 100% 100%, 17% 100%);
            }
        }

        .description p {
            color: #d8d8dc;
            padding-top: 9px;
        }

        .description h4 a {
            /* color: #fff; */
            text-transform: uppercase;
        }

        input {
            display: none;
        }

        input:checked+label {
            width: 800px;
        }

        input:checked+label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .bigTitle {
            font-family: 'Lobster', cursive;
            font-size: xx-large;
            text-align: center;
            margin: 130px 0;
        }

        .bigTitle .des {
            font-size: large;
            max-width: 500px;
            margin: 10px auto;
            color: #ffffff4D;
        }

        .transport ul {
            padding: 0;
            list-style: none;
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
            column-gap: 20px;
        }

        .transport li {
            text-align: center;
            color: #ffffff4D;
        }

        .transport li i {
            display: block;
            margin-bottom: 20px;
            font-size: xxx-large;
            color: #fff;
        }

        .zoom {
            transform: scale(1);
            transition: 0.5s;
        }

        .zoom:hover {
            transform: scale(1.2);
            filter: brightness(0.5);
        }

        .checkin {
            display: grid;
            grid-template-columns: 32.333% 32.333% 32.333%;
            column-gap: 1%;
            grid-template-rows: 300px 300px;
            row-gap: 10px;
        }

        .checkin .des {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
            font-size: 13px;
        }

        .checkin .item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            cursor: pointer;
        }

        .checkin img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .checkin .item .content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            color: #fff;
            width: calc(100% - 20px);
        }

        .checkin .item .content .title {
            font-size: 24px;
            font-weight: 700;
            color: #FFF;
        }

        .checkin .item .content .des {
            opacity: 0.7;
            font-size: 13px;
        }

        .checkin .item:nth-child(1) {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .checkin .item:nth-child(2) {
            grid-column-start: 3;
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .main-collection-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Khoảng cách giữa các mục */
        }

        .collection-group-block {
            flex: 1 1 30%;
            /* Đảm bảo các mục có chiều rộng khoảng 30% và có thể co dãn */
            box-sizing: border-box;
        }

        .collection-animal-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .collection-animal-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .hover-overlay,
        .bg-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .collection-title-block {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 200px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .card a {
            color: white;
            text-decoration: none;
            font-size: 0.5em;
            font-weight: bold;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            transition: background-color 0.1s;
        }

        .card a:hover {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .card:hover {
            transform: scale(1.005);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        /* .main-collection-container {
                                                                            display: grid;
                                                                            grid-template-columns: 1fr 1fr 1fr;
                                                                            gap: 20px;
                                                                        }

                                                                        .collection-group-block {
                                                                            display: flex;
                                                                            flex-direction: column;
                                                                            gap: 20px;
                                                                        }

                                                                        .center-column {
                                                                            justify-content: center;
                                                                        }

                                                                        .collection-animal-container {
                                                                            position: relative;
                                                                            text-align: center;
                                                                        }

                                                                        .collection-animal-container .hover-overlay {
                                                                            border-radius: 28px;
                                                                            height: 100%;
                                                                        }

                                                                        .collection-animal-img {
                                                                            border-radius: 20px;
                                                                            width: 100%;
                                                                            height: auto;
                                                                        }

                                                                        .hover-overlay,
                                                                        .bg-gradient {
                                                                            position: absolute;
                                                                            top: 0;
                                                                            left: 0;
                                                                            width: 100%;
                                                                            height: 100%;
                                                                        } */

        .card_cate .description p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
            margin: 0;
        }

        .collection-title-block {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
        }

        .see-all-collection-link-block {
            grid-column: span 3;
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('users/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/photo-grid.css') }}">
    @foreach ($areas as $key => $area)
        <style>
            .card_cate[for="c{{ $key + 1 }}"] {
                @if ($area->area_image != null)
                    background-image: url("{{ asset('areas/' . $area->area_image) }}");
                @else
                    background-image: url("{{ asset('error/error.jpg') }}");
                @endif
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    @endforeach
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Chào Mừng Đến Với Thế Giới Động Vật</p>
                    <h1 class="display-5 mb-4">
                        Bạn Không Thể Đến <br> Sở Thú. Đừng Lo Đã Có Trang Web <br>
                        <span class="text-primary">Thế Giới Động Vật</span>
                    </h1>
                    <p class="mb-4">
                        Trang web "Thế Giới Động Vật" là một kho tàng kiến thức phong phú về các loài động vật từ khắp các
                        châu lục rộng lớn cho đến các đại dương sâu thẳm. Tại đây, người dùng có thể khám phá những bài viết
                        chi tiết về các loài động vật đa dạng, từ sư tử ở châu Phi, gấu trúc ở châu Á, đến cá mập ở các đại
                        dương. Mỗi loài động vật đều được trình bày với hình ảnh chất lượng cao, thông tin về môi trường
                        sống, thói quen, và những câu chuyện thú vị xoay quanh chúng. Ngoài ra, trang web còn có các video
                        và tài liệu giáo dục giúp người dùng hiểu rõ hơn về sự đa dạng và vẻ đẹp của thế giới động vật. Đây
                        thực sự là một điểm đến lý tưởng cho những ai yêu thích và muốn tìm hiểu về thiên nhiên hoang dã.
                    </p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Trải Nghiệm Miễn Phí
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Kiến Thức Bổ Ích
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Nâng Cao Hiểu Biết
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Kết Nối Tới Những Người Có Cùng Đam Mê
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('user.list_post_social') }}">Khám Phá Ngay</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('users/img/about.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalAnimals }}</h1>
                    <p class="text-white mb-0">Tổng số động vật</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalPosts }}</h1>
                    <p class="text-white mb-0">Tổng số bài viết</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalMembers }}</h1>
                    <p class="text-white mb-0">Tổng số thành viên</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $totalProtected }}</h1>
                    <p class="text-white mb-0">Bảo vệ động vật hoang dã</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Trải nghiệm</p>
                    <h1 class="display-5 mb-0">
                        Trải nghiệm website khám phá
                        <span class="text-primary">Động vật</span> Hoang Dã
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Liên lạc để biết thêm thông tin chi tiết</p>
                            <h2 class="text-white mb-0">+024 3852 2201</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-3.png') }}" alt="Icon" />
                    <h5 class="mb-3">Hình Ảnh Động Vật</h5>
                    <span>Các bức ảnh chụp động vật hoang dã thường nổi bật với màu sắc sống động và chi tiết sắc nét, ghi
                        lại khoảnh khắc độc đáo của các loài thú, chim, bò sát và côn trùng. Những bức ảnh này có thể cho
                        thấy sự đa dạng và phong phú của cuộc sống hoang dã, từ những chú sư tử dũng mãnh đến những con chim
                        nhỏ bé đầy màu sắc.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-6.png') }}" alt="Icon" />
                    <h5 class="mb-3">Phần Thưởng Trò Chơi</h5>
                    <span>Phần thưởng trong trò chơi liên quan đến chủ đề động vật hoang dã thường mang lại cảm giác hứng
                        thú và động lực cho người chơi khi họ hoàn thành các nhiệm vụ hoặc đạt được những số điểm quan
                        trọng.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-7.png') }}" alt="Icon" />
                    <h5 class="mb-3">Trải Nghiệm Mượt Mà</h5>
                    <span>Trải nghiệm website khám phá động vật hoang dã mang lại cảm giác phiêu lưu vào thế giới tự nhiên
                        với giao diện trực quan và hấp dẫn. Người dùng dễ dàng tìm kiếm và xem thông tin chi tiết về các
                        loài động vật thông qua hình ảnh, video và mô tả sống động. Những tính năng tương tác và nội dung
                        giáo dục cũng giúp nâng cao kiến thức và khơi dậy niềm đam mê bảo tồn thiên nhiên.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-8.png') }}" alt="Icon" />
                    <h5 class="mb-3">Sân Chơi Thú Vị</h5>
                    <span>Website về sân chơi động vật hoang dã mang đến trải nghiệm giáo dục và giải trí với các trò chơi
                        tương tác, video sống động và thông tin chi tiết về các loài động vật. Người dùng có thể tham gia
                        vào các hoạt động khám phá môi trường sống tự nhiên, hoàn thành nhiệm vụ liên quan đến động vật và
                        nhận phần thưởng, từ đó khơi dậy sự tò mò và tình yêu thiên nhiên.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Categories Animal -->
    <div class="container-xxl py-5">
        <h1 class="display-5 mb-0">
            Nhiều Châu Lục Với Các <span class="text-primary">Loài Vật</span> Tuyệt Vời
        </h1>
        <div class="wrapper_cate">
            <div class="container_cate">
                @foreach ($areas as $key => $area)
                    <input type="radio" name="slide" id="c{{ $key + 1 }}" checked>
                    <label for="c{{ $key + 1 }}" class="card_cate">
                        <div class="row">
                            <div class="icon">{{ $key + 1 }}</div>
                            <div class="description">
                                <h2 style="font-weight: 700"><a
                                        href="{{ route('user.cate-list', ['id' => $area->id]) }}">{{ $area->area_name }}</a>
                                </h2>
                                <p style="color: #000000; font-weight:600">{{ $area->area_description }}</p>
                            </div>
                        </div>
                    </label>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Chế Độ Dinh Dưỡng</p>
                    <h1 class="display-5 mb-0">
                        Các Loài <span class="text-primary">Động Vật</span> Có Chế Độ Dinh Dưỡng Khác Nhau
                    </h1>
                </div>
            </div>
            <div class="row g-4" style="align-items:center;">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ route('user.diet_type', ['id' => $dietType1->id]) }}">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-md-1.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Động Vật</p>
                                        <h5 class="text-white mb-0">{{ $dietType1->diet_name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="{{ route('user.diet_type', ['id' => $dietType5->id]) }}">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-1.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Động Vật</p>
                                        <h5 class="text-white mb-0">{{ $dietType5->diet_name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ route('user.diet_type', ['id' => $dietType2->id]) }}">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-2.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Động Vật</p>
                                        <h5 class="text-white mb-0">{{ $dietType2->diet_name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ route('user.diet_type', ['id' => $dietType3->id]) }}">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-md-4.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Động Vật</p>
                                        <h5 class="text-white mb-0">{{ $dietType3->diet_name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="{{ route('user.diet_type', ['id' => $dietType4->id]) }}">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-3.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Động Vật</p>
                                        <h5 class="text-white mb-0">{{ $dietType4->diet_name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Animal End -->

    <!-- Animal Color -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="overflow-block">
                <div class="new-main-container main-collections">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Sắc Màu Động Vật </p>
                            <h1 class="display-5 mb-0">
                                Ngắm Nhìn Các Loài Vật Với <span class="text-primary">Màu Sắc</span> Đa Dạng
                            </h1>
                        </div>
                    </div>
                    <div class="photo-grid">
                        <div class="card card-tall card-wide"
                            style="background-image:url('{{ asset('colors/' . $green->color_image) }}')">
                            <a href="{{ route('color', ['id' => $green->id]) }}"
                                style="background-color: rgba(0, 128, 0, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(0, 128, 0, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(0, 128, 0, 0.5)'">
                                {{ $green->color_name }}
                            </a>
                        </div>
                        <div class="card card-tall"
                            style="background-image:url('{{ asset('colors/' . $blue->color_image) }}')">
                            <a href="{{ route('color', ['id' => $blue->id]) }}"
                                style="background-color: rgba(0, 0, 255, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(0, 0, 255, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(0, 0, 255, 0.5)'">
                                {{ $blue->color_name }}
                            </a>
                        </div>
                        <div class="card" style="background-image:url('{{ asset('colors/' . $red->color_image) }}')">
                            <a href="{{ route('color', ['id' => $red->id]) }}"
                                style="background-color: rgba(255, 0, 0, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(255, 0, 0, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(255, 0, 0, 0.5)'">
                                {{ $red->color_name }}
                            </a>
                        </div>
                        <div class="card"
                            style="background-image:url('{{ asset('colors/' . $yellow->color_image) }}')">
                            <a href="{{ route('color', ['id' => $yellow->id]) }}"
                                style="background-color: rgba(255, 255, 0, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(255, 255, 0, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(255, 255, 0, 0.5)'">
                                {{ $yellow->color_name }}
                            </a>
                        </div>
                        <div class="card"
                            style="background-image:url('{{ asset('colors/' . $orange->color_image) }}')">
                            <a href="{{ route('color', ['id' => $orange->id]) }}"
                                style="background-color: rgba(255, 165, 0, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(255, 165, 0, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(255, 165, 0, 0.5)'">
                                {{ $orange->color_name }}
                            </a>
                        </div>
                        <div class="card" style="background-image:url('{{ asset('colors/' . $brown->color_image) }}')">
                            <a href="{{ route('color', ['id' => $brown->id]) }}"
                                style="background-color: rgba(139, 69, 19, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(139, 69, 19, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(139, 69, 19, 0.5)'">
                                {{ $brown->color_name }}
                            </a>
                        </div>
                        <div class="card card-wide"
                            style="background-image:url('{{ asset('colors/' . $white->color_image) }}')">
                            <a href="{{ route('color', ['id' => $white->id]) }}"
                                style="background-color: rgba(255, 255, 255, 0.5); color: black;"
                                onmouseover="this.style.backgroundColor='rgba(255, 255, 255, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.5)'">
                                {{ $white->color_name }}
                            </a>
                        </div>
                        <div class="card" style="background-image:url('{{ asset('colors/' . $black->color_image) }}')">
                            <a href="{{ route('color', ['id' => $black->id]) }}"
                                style="background-color: rgba(0, 0, 0, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(0, 0, 0, 0.5)'">
                                {{ $black->color_name }}
                            </a>
                        </div>
                        <div class="card" style="background-image:url('{{ asset('colors/' . $gray->color_image) }}')">
                            <a href="{{ route('color', ['id' => $gray->id]) }}"
                                style="background-color: rgba(128, 128, 128, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(128, 128, 128, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(128, 128, 128, 0.5)'">
                                {{ $gray->color_name }}
                            </a>
                        </div>
                        <div class="card"
                            style="background-image:url('{{ asset('colors/' . $purple->color_image) }}')">
                            <a href="{{ route('color', ['id' => $purple->id]) }}"
                                style="background-color: rgba(128, 0, 128, 0.5);"
                                onmouseover="this.style.backgroundColor='rgba(128, 0, 128, 0.7)'"
                                onmouseout="this.style.backgroundColor='rgba(128, 0, 128, 0.5)'">
                                {{ $purple->color_name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Color --}}
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Vùng Khí Hậu</p>
                            <h1 class="display-5 mb-0">
                                Các Loài Động Vật Với <span class="text-primary">Vùng Khí Hậu</span> Khác Nhau
                            </h1>
                        </div>
                    </div>

                    <div class="checkin">
                        <div class="item">
                            @if ($tropical->climate_image != null)
                                <img src="{{ asset('climates/full/' . $tropical->climate_image) }}"title="{{ $tropical->climate_name }}"
                                    class="zoom">
                            @else
                                <img src="{{ asset('error/error.jpg') }}" alt="error">
                            @endif
                            <div class="content">
                                <a href="{{ route('climate', ['id' => $tropical->id]) }}"
                                    class="title">{{ $tropical->climate_name }}</a>
                                <div class="des">
                                    {{ $tropical->climate_description }}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            @if ($arid->climate_image != null)
                                <img src="{{ asset('climates/full/' . $arid->climate_image) }}"
                                    title="{{ $arid->climate_name }}" class="zoom">
                            @else
                                <img src="{{ asset('error/error.jpg') }}" alt="error">
                            @endif
                            <div class="content">
                                <a href="{{ route('climate', ['id' => $arid->id]) }}"
                                    class="title">{{ $arid->climate_name }}</a>
                                <div class="des">
                                    {{ $arid->climate_description }}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            @if ($temperate->climate_image != null)
                                <img src="{{ asset('climates/full/' . $temperate->climate_image) }}"
                                    title="{{ $temperate->climate_name }}" class="zoom">
                            @else
                                <img src="{{ asset('error/error.jpg') }}" alt="error">
                            @endif
                            <div class="content">
                                <a href="{{ route('climate', ['id' => $temperate->id]) }}"
                                    class="title">{{ $temperate->climate_name }}</a>
                                <div class="des">
                                    {{ $temperate->climate_description }}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            @if ($cold->climate_image != null)
                                <img src="{{ asset('climates/full/' . $cold->climate_image) }}"
                                    title="{{ $cold->climate_name }}" class="zoom">
                            @else
                                <img src="{{ asset('error/error.jpg') }}" alt="error">
                            @endif
                            <div class="content">
                                <a href="{{ route('climate', ['id' => $cold->id]) }}"
                                    class="title">{{ $cold->climate_name }}</a>
                                <div class="des">
                                    {{ $cold->climate_description }}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            @if ($polar->climate_image != null)
                                <img src="{{ asset('climates/full/' . $polar->climate_image) }}"
                                    title="{{ $polar->climate_name }}" class="zoom">
                            @else
                                <img src="{{ asset('error/error.jpg') }}" alt="error">
                            @endif
                            <div class="content">
                                <a href="{{ route('climate', ['id' => $polar->id]) }}"
                                    class="title">{{ $polar->climate_name }}</a>
                                <div class="des">
                                    {{ $polar->climate_description }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Visiting Hours Start -->
            <!-- <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                                <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span>Monday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Tuesday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Wednesday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Thursday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Friday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Saturday</span>
                                        <span>9:00AM - 6:00PM</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="display-6 text-white mb-5">Contact Info</h1>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Office</td>
                                            <td>Van Hoi, Ha Noi</td>
                                        </tr>
                                        <tr>
                                            <td>Zoo</td>
                                            <td>Van Hoi, Ha Noi</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>
                                                <p class="mb-2">+ 84 88 616 515</p>
                                                <p class="mb-0">ticket@example.com</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Support</td>
                                            <td>
                                                <p class="mb-2">+ 84 88 616 515</p>
                                                <p class="mb-0">support@example.com</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- Visiting Hours End -->

            <!-- Membership Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Thời Gian Hoạt Động</p>
                            <h1 class="display-5 mb-0">
                                Thời Gian Hoạt Động Của Các Loài
                                <span class="text-primary">Động Vật</span>
                            </h1>
                        </div>
                    </div>
                    <div class="row g-4">
                        @foreach ($activityTime as $key => $item)
                        <div class="col fadeInUp" data-wow-delay="0.3s">
                            <div class="membership-item position-relative d-flex flex-column justify-content-between" style="min-height: 600px">
                                @if ($key == 0)
                                    <img class="img-fluid" src="{{ asset('activity_times/day.jpg') }}" alt="" />
                                @elseif($key == 1)
                                    <img class="img-fluid" src="{{ asset('activity_times/night.jpg') }}" alt="" />
                                @elseif($key == 2)
                                    <img class="img-fluid" src="{{ asset('activity_times/allday.jpg') }}" alt="" />
                                @else
                                    <img class="img-fluid" src="{{ asset('activity_times/sunset_dawn.jpg') }}" alt="" />
                                @endif
                        
                                <div class="content text-center">
                                    <h1 class="display-1">0{{ $key + 1 }}</h1>
                                    <h4 class="text-white mb-3">{{ $item->activity_name }}</h4>
                                    <p class="text-primary mb-4">{{ $item->activity_description }}</p>
                                </div>
                        
                                <div class="mt-auto text-center">
                                    <a class="btn btn-outline-light px-4 mt-3"
                                        href="{{ route('user.activity_time', ['id' => $item->id]) }}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Membership End -->

            <!-- Testimonial Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        Người Dùng Bình Luận
                    </h1>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="https://ui-avatars.com/api/?name=Bá+Thị+Thư&background=198754&color=fff&size=100" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Website khám phá động vật hoang dã là một nền tảng thú vị cho những người yêu thích
                                    thiên nhiên và động vật. Nó cung cấp thông tin chi tiết về các loài động vật, từ thông
                                    số kỹ thuật đến hình ảnh và video, giúp người dùng hiểu rõ hơn về đời sống và môi trường
                                    sống của chúng.
                                </p>
                                <h5 class="mb-1">Bá Thị Thư</h5>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="https://ui-avatars.com/api/?name=Nguyễn+Đăng+Nhân&background=0d6efd&color=fff&size=100" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Trang web khám phá động vật hoang dã không chỉ cung cấp kiến thức sâu sắc về các loài
                                    động vật mà còn khuyến khích người dùng tham gia vào các hoạt động bảo tồn và bảo vệ môi
                                    trường. Đây là nơi lý tưởng để khám phá sự đa dạng sinh học của hành tinh chúng ta và
                                    tạo cảm hứng cho việc bảo vệ thiên nhiên.
                                </p>
                                <h5 class="mb-1">Nguyễn Đăng Nhân</h5>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="https://ui-avatars.com/api/?name=Trương+Văn+Cường&background=dc3545&color=fff&size=100" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Trang web khám phá động vật hoang dã cung cấp một cửa sổ rộng mở vào thế giới tự nhiên,
                                    cho phép người dùng khám phá các sinh vật kỳ diệu và học hỏi về cách tồn tại và phát
                                    triển của chúng trong tự nhiên.
                                </p>
                                <h5 class="mb-1">Trương Văn Cường</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
            @endsection
