<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Trang chủ</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Quản Lý</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Quản Lý Động Vật</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('list_animal') }}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách động vật </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.add-animal') }}" class="sidebar-link">
                                <span class="hide-menu"> Thêm động vật</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">{{ Auth::user()->role_id == \App\Models\User::SYSTEM ? 'Quản Lý Quyền Người Dùng' : 'Quản Lý Người Dùng' }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_user') }}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách người dùng</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.view_add_user') }}" class="sidebar-link">
                                <span class="hide-menu"> Thêm người dùng </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">Quản Lý Diễn Đàn</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_posts') }}" class="sidebar-link">
                                <span class="hide-menu"> Bài viết diễn đàn </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_topic') }}" class="sidebar-link">
                                <span class="hide-menu">Chủ đề câu hỏi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_reward') }}" class="sidebar-link">
                                <span class="hide-menu">Phần quà </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Điều Hướng</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('user.list_post_social') }}"
                        aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span
                            class="hide-menu">Mạng Xã Hội</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('user.home') }}"
                        aria-expanded="false"><i data-feather="globe" class="feather-icon"></i><span
                            class="hide-menu">Trang Chủ Web Động Vật</span></a>
                </li>

                <!-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="gamepad" class="feather-icon"></i>
                                <span class="hide-menu">Games</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="game-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Games </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-game.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Game </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="book-open" class="feather-icon"></i>
                                <span class="hide-menu">Topics</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="topic-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Topics </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-topic.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Topic </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="activity" class="feather-icon"></i>
                                <span class="hide-menu">Animal Behaviors</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="behavior-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Behaviors </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-behavior.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Behavior </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Animal Habitats</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="habitat-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Habitats </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-habitat.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Habitat </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="image" class="feather-icon"></i>
                                <span class="hide-menu">Animal Images</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="image-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Images </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-image.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Image </span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                <li class="list-divider"></li>
            </ul>
        </nav>
    </div>
</aside>
