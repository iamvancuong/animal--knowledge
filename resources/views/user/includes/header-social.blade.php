<nav>
    <div class="container">
        <div style="display: flex; align-items:center'">
            <a href="{{ route('user.list_post_social') }}" class="btn-game" style="margin-right:20px;margin-bottom:10px">
                <i class="fa-solid fa-home"></i>
            </a>
            <h2 class="logo">
                <a href="{{ route('user.view_list_topic') }}" style="color: #2EB872;text-decoration: none;">Diễn đàn động vật</a>
            </h2>
        </div>

        <div class="create">
            @if(request()->url() != route('user.view_list_topic'))
            <a href="{{ route('user.view_list_topic') }}" class="btn-game">
            <i class="fa-solid fa-list" aria-hidden="true"></i></i> Danh sách chủ đề
            </a>
            @endif
            <a href="{{request()->url() != route('user.view_get_reward')  ? route('user.view_get_reward') : route('user.history_get_reward')}}" class="btn-game">
                <i class="fa-solid fa-gift"></i>
                {{request()->url() != route('user.view_get_reward')  ? 'Nhận quà' : 'Lịch sử nhận quà'}}
            </a>
            <a href="{{ route('user.history_game') }}" class="btn-game">
                <i class="fa fa-history" aria-hidden="true"></i> Lịch sử chơi
            </a>
            <div class="profile-picture" id="profile-picture">
                <img src="{{ Auth::user()->avatar ? asset('avatars/' . Auth::user()->avatar) : asset('error/user_error.jpg') }}">
            </div>
            <div id="dropdown-menu" class="dropdown-menu" style="display: none;">
                <a id="editUser">Cập nhật tài khoản</a>
                <a href="{{route('logout')}}">Đăng xuất</a>
            </div>

        </div>
    </div>
</nav>
<style>
    .dropdown-menu {
        position: absolute;
        top: 25px;
        right: -150px;
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .create {
        position: relative;
    }

    .dropdown-menu a {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: black;
    }

    .dropdown-menu a:hover {
        background-color: #f0f0f0;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: auto;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10px auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        border-radius: 5px;
        position: relative;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .form-p label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-p input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-p input[readonly] {
        background-color: #e9ecef;
        /* Màu nền mờ */
        opacity: 0.7;
        /* Độ mờ */
        cursor: not-allowed;
        /* Con trỏ chuột */
    }
</style>

<div id="updateAccountModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Cập nhật tài khoản</h2>
        <form action="{{route('user.update_user')}}" id="updateAccountForm" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-p">
                    <label for="username">Tên:</label>
                    <input type="text" id="username" name="username" value="{{Auth::user()->name}}" required>
                </div>
                <div class="form-p">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                </div>
                <div class="form-p">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" value="{{Auth::user()->password}}" required>
                </div>
                <div class="form-p">
                <label for="gender">Giới tính:</label>
                <select name="gender" id="gender" style="padding: 10px;border: 1px solid #ccc;width: 100%;border-radius: 4px;">
                    <option value="0" {{Auth::user()->gender == 0 ? 'selected':''}}>Nam</option>
                    <option value="1" {{Auth::user()->gender == 1 ? 'selected':''}}>Nữ</option>
                </select>
                </div>
                <div class="form-p">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address" name="address" value="{{Auth::user()->address}}" required>
                </div>
                <div class="form-p">
                    <label for="birthdate">Ngày sinh:</label>
                    <input type="date" id="birthdate" name="birthdate" value="{{Auth::user()->birthdate}}" required>
                </div>
                <div class="form-p">
                    <label for="continentImage">Hình ảnh</label>
                    <input type="file" class="form-control-file" name="avatar" id="continentImage"
                        onchange="previewImage(event, 'imagePreview')" >
                </div>
                <div class="preview-container">
                    <img id="imagePreview" src="#" alt="Preview"
                        style="display: none; width: 200px; height: 200px;  object-fit: contain;" />
                </div>
                <button type="submit" class="btn-game" style="margin-top: 20px;">Lưu thay đổi</button>
            </form>
    </div>
</div>
<script>
    document.getElementById('profile-picture').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdown-menu');
        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });

    document.addEventListener('click', function(event) {
        var profilePicture = document.getElementById('profile-picture');
        var dropdownMenu = document.getElementById('dropdown-menu');

        if (!profilePicture.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });

    var modal = document.getElementById('updateAccountModal');

    var updateAccountLink = document.querySelector('#editUser');

    var closeBtn = document.getElementsByClassName('close')[0];

    updateAccountLink.onclick = function() {
        modal.style.display = 'block';
    }

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    var updateAccountForm = document.getElementById('updateAccountForm');

    updateAccountForm.addEventListener('submit', function(event) {
        // event.preventDefault();
        // var formData = new FormData(updateAccountForm);
        // var username = formData.get('username');
        // var password = formData.get('password');

        modal.style.display = 'none';
    });

    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function() {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = reader.result;
            imagePreview.style.display = 'block';
        }

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
