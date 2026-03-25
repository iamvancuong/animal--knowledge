<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Van Hoi, Ha Noi</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Thứ 2 - Chủ Nhật : 09.00 AM - 17.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+ 84 88 616 515</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <a href="{{ route('user.home') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{ asset('users/img/icon/icon-10.png') }}" alt="Icon" />
        <h1 class="m-0 text-primary">Động Vật Hoang Dã</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="{{ route('user.home') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Trang
                Chủ</a>
            <a href="{{ route('user.list-blog') }}"
                class="nav-item nav-link {{ Request::is('list-blog') ? 'active' : '' }}">Blog</a>
            <!-- <a href="{{ route('user.list-blog-3') }}" class="nav-item nav-link">Danh Sách</a> -->
            <a href="{{ route('user.view_search_filter') }}" class="nav-item nav-link">Tìm Kiếm</a>
            <a href="{{ route('user.list_post_social') }}" class="nav-item nav-link">Mạng xã hội</a>

            {{-- <div class="nav-item dropdown" style="z-index: 99999;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="animal.html" class="dropdown-item">List Animals</a>
                    <a href="membership.html" class="dropdown-item">List Blog</a>
                    <a href="{{ route('user.list_post_social') }}" class="dropdown-item">Social</a>
                    <a href="testimonial.html" class="dropdown-item">List Animal For Color</a>
                    <a href="testimonial.html" class="dropdown-item">List Animal For Area</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            <a href="{{ route('user.contact') }}"
                class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Liên Hệ</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

@if (request()->routeIs('user.home'))
    @include('user.includes.slide-show')
@endif
