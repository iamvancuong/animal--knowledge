@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <style>
        /* Custom styles to maintain layout */
        .dz-message {
            text-align: center;
            margin: 2em 0;
        }

        .dz-preview .dz-remove {
            display: block;
            text-align: center;
            cursor: pointer;
            color: red;
            margin-top: 10px;
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
                        <h4 class="card-title">Animal</h4>
                        <form action="{{ route('admin.add-image-animal-store') }}" method="POST"
                            enctype="multipart/form-data" class="dropzone" id="image-upload">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name Animal</label>
                                            <input type="text" class="form-control" value="Sư tử" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border p-2">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div class="dropzone-previews"></div>
                                            <div class="dz-message">
                                                <span>Click or drop files here to upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right mt-4">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
        integrity="sha512-MtTB6mPWTz1zMbwe1npxG6UyChS7LnIBHyL9aCf9y8BDp4gTm9Hwi6d/lc3uYicOgFd8kDpEKsVHgFbUO6yMUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
        integrity="sha512-4S4o9OGtLFzM9rpbI6/L0nsW2Pb6i+ij21RT+dG5vR+1owvBJtJq9ejcA+TTF5tX2bf7NLbiTV9eFje0Flcuow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new Dropzone('#image-upload', {
            thumbnailWidth: 200,
            maxFilesize: 5,
            acceptedFiles: '.jpeg, .jpg, .png, .gif',
            dictDefaultMessage: "Click or drop files here to upload",
            previewsContainer: ".dropzone-previews",
            previewTemplate: `
                <div class="dz-preview dz-file-preview">
                    <div class="dz-image"><img data-dz-thumbnail /></div>
                    <div class="dz-details">
                        <div class="dz-size"><span data-dz-size></span></div>
                        <div class="dz-filename"><span data-dz-name></span></div>
                    </div>
                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    <div class="dz-success-mark">
                        <svg width="54px" height="54px" viewBox="0 0 54 54">
                            <title>Check</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M23.5,31.8431458 L16.6568542,25 L14.5,27.1568542 L23.5,36.1568542 L41.5,18.1568542 L39.3431458,16 L23.5,31.8431458 Z" id="Path" fill="#000000"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="dz-error-mark">
                        <svg width="54px" height="54px" viewBox="0 0 54 54">
                            <title>error</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1314.000000, -20.000000)" fill="#000000">
                                    <path d="M1367.77778,37.1111111 L1349.88889,55 L1367.77778,72.8888889 L1349.88889,90.7777778 L1367.77778,108.666667 L1349.88889,126.555556 L1332,108.666667 L1349.88889,90.7777778 L1332,72.8888889 L1349.88889,55 L1332,37.1111111 L1349.88889,20 L1367.77778,37.1111111 Z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <a class="dz-remove" href="javascript:undefined;" data-dz-remove>Remove file</a>
                </div>
            `,
            init: function() {
                this.on("addedfile", function(file) {});
                this.on("success", function(file, response) {});
                this.on("error", function(file, response) {});
            }
        })
    </script>
@endsection
