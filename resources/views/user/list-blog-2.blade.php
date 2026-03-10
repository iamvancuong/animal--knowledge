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
    </style>
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="f-page__content">
            <h1 class="collection-title">
                Những blog hay, được được sưu tầm từ diễn đàn của chúng tôi 
            </h1>
            <div class="containers articles-container">
                @foreach ($posts as $post)
                    <a href="{{route('user.detail-blog',['id' => $post->id])}}" class="animals-invert__item ">
                        <div class="animals-invert__item-img">
                            <img src="{{ asset('posts/' . $post->image) }}" 
                            onerror="this.src='{{ asset('img/error_img.svg') }}'" 
                            alt="alt">
                        </div>
                        <div class="animals-invert__item-content">
                            <h2 class="f-h2">{{ $post->title }}</h2>
                            <p class="multiline-ellipsis">{{ $post->content }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        {{ $posts->links('pagination::bootstrap-4') }}

        </div>
    </div>
    <!-- Blog End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
