@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .container-collection {
            padding-top: 160px;
            margin-bottom: 40px;
        }

        .container {
            width: 96%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .collection-selected {
            color: #222;
        }

        .collection-title {
            font-weight: 700;
            font-size: 80px;
            color: #3bc853;
            font-family: Rubik, sans-serif;
            display: inline-block;
        }

        .collection-second-tab {
            padding-left: 35px;
        }

        .collection-not-selected {
            font-size: 72px;
            font-weight: 580;
        }

        .collection-title {
            font-weight: 700;
            font-size: 80px;
            color: #3bc853;
            font-family: Rubik, sans-serif;
            display: inline-block;
        }

        .collection-title a {
            color: #3bc853;
        }

        .collections-second-title {
            margin: 24px 0;
            font-weight: 700;
            font-size: 64px;
            font-family: Rubik, sans-serif;
            color: #e3eae6;
        }

        input[type=button],
        input[type=email],
        input[type=password],
        input[type=search],
        input[type=submit],
        input[type=text],
        input[type=url],
        textarea {
            -webkit-appearance: none;
        }

        input[type=checkbox],
        input[type=email],
        input[type=file],
        input[type=password],
        input[type=radio],
        input[type=search],
        input[type=text],
        input[type=url],
        textarea {
            font-family: Open Sans, Arial, sans-serif;
            background-color: #f5f5f5;
            font-size: 1.2em;
            outline: 0;
            border: 1px solid #ddd;
            border-radius: 2px;
        }

        .page-cl-search {
            background-color: #cff4df !important;
            border: none !important;
            height: 38px !important;
            border-radius: 12px !important;
            font-size: 14px !important;
            line-height: 38px !important;
            font-family: Rubik, sans-serif !important;
            width: 340px !important;
            padding: 0 16px !important;
        }

        .ui-autocomplete-input {
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            text-decoration: none;
            color: #262626;
            padding: 4px 10px;
            -webkit-transition: width .4s ease-in-out;
            transition: width .4s ease-in-out;
        }

        .collection-item {
            height: 548px;
            width: 30%;
            margin-top: 20px;
            float: left;
            margin-right: 27px;
            position: relative;
            overflow: hidden;
            border-radius: 22px;
        }

        .animate-cover .collection-cover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
        }

        .collection-cover {
            background-position: 50%;
            height: 100%;
            border-radius: 22px;
            background-repeat: no-repeat;
        }

        .collection-item-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 268px;
            width: 100%;
            padding-right: 0;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, hsla(0, 0%, 77%, 0)), to(#000));
            background: linear-gradient(180deg, hsla(0, 0%, 77%, 0), #000);
            border-bottom-left-radius: 22px;
            border-bottom-right-radius: 22px;
        }

        .collection-name-block {
            position: absolute;
            bottom: 64px;
            padding: 0 30px;
            font-family: Rubik, sans-serif;
        }

        .collection-name-text {
            font-size: 32px;
            font-weight: 700;
            color: #fff;
        }

        .collection-count-text {
            margin-top: 10px;
            font-size: 20px;
            font-weight: 500;
            color: #fff;
            font-family: Rubik, sans-serif;
        }
    </style>
    <!-- Blog Start -->
    <div class="container pt-2">
        <div class="container clearfix container-collection">
            <h2 class="collection-title  collection-selected" style="color: #222">
                Lists
            </h2>
            <h2 class="collection-title collection-not-selected collection-second-tab"><a href="https://animalia.bio/groups">
                    Groups </a></h2>
            <h2 class="collection-title collection-not-selected collection-second-tab"><a
                    href="https://animalia.bio/endemic-lists"> Endemics </a></h2>
            <h3 class="collections-second-title">
                <span class="collections-second-title-bold">All</span> you want to <span
                    class="collections-second-title-bold">know</span> about <span
                    class="collections-second-title-bold">animals</span>

            </h3>
            <input type="text" placeholder="Search country, state or province"
                class="page-cl-search ui-autocomplete-input" id="search-cl-page" autocomplete="off">
            <div class="lists-page-container" count-animals="Animals">
                <a href="https://animalia.bio/lists/country/lizards-of-united-states">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/horned-lizard-3.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Lizards of United States
                                </div>
                                <div class="collection-count-text">
                                    57 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://animalia.bio/lists/country/grassland-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/UpcAo9QQdc6lApnMdoVc.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Grassland animals of Australia
                                </div>
                                <div class="collection-count-text">
                                    566 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="list-ads-block"></div>
                <a href="https://animalia.bio/lists/country/endangered-species-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/western-long-beaked-echidna-colorpng.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Endangered Species of Australia
                                </div>
                                <div class="collection-count-text">
                                    161 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://animalia.bio/lists/country/bats-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/1ghost-bat-077ajpg.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Bats of Australia
                                </div>
                                <div class="collection-count-text">
                                    78 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://animalia.bio/lists/country/extinct-species-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/2560px-tasmanian-emu.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Extinct Species of Australia
                                </div>
                                <div class="collection-count-text">
                                    11 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="list-ads-block"></div>
                <a href="https://animalia.bio/lists/country/marine-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/1200px-green-sea-turtle-by-jeremy-bishop-2016-09-14jpg.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Marine animals of Australia
                                </div>
                                <div class="collection-count-text">
                                    1678 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://animalia.bio/lists/country/lizards-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/ujKUGs44uI4INJd7LFEa.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Lizards of Australia
                                </div>
                                <div class="collection-count-text">
                                    27 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://animalia.bio/lists/country/rainforest-of-australia">
                    <div class="collection-item animate-cover ">
                        <div class="collection-cover"
                            style="background-image: url(https://s3.animalia.bio/animals/photos/full/1x1/parma-wallaby-kobe-city-oji-zoo-1.webp)">
                        </div>
                        <div class="collection-item-bottom">
                            <div class="collection-name-block">
                                <div class="collection-name-text">
                                    Rainforest animals of Australia
                                </div>
                                <div class="collection-count-text">
                                    229 Animals
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="list-ads-block"></div>
            </div>
            <div class="clearfix"></div>
            {{-- <div class="list-pagination">
                <span class="list-load-more " out-of=" out of " load-more="LOAD MORE" type="custom_list" last_page="52"
                    next_page="2" lang="en">
                    1 - 41 out of 2099 <span class="fwb text-uppercase">

                        LOAD MORE
                    </span>
                </span>
            </div> --}}
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
