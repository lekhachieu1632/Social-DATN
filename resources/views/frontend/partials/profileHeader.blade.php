<header class="user">
    <div class="container-custome">
        <div class="user__banner">
            <img id="viewBanner" src="{{ asset('static/image/user/'.$user->userInfo->image_cover) }}" alt="">
            @if($idUserLogin == $idUser)
                <button id='btn-viewBanner' class="btn-update">
                    <input type='file' id="input-viewBanner" accept=".png, .jpg, .jpeg"
                           name="update-banner" data-id="{{ $idUserLogin }}"/>
                    <span class="icon"><i class="fas fa-camera-alt"></i></span>
                    <p>Chỉnh sửa ảnh bìa</p>
                </button>
            @endif
        </div>
        <div class="user__name">
            <div class="user__name--left">
                <div class="avatar-upload">
                    @if($idUserLogin == $idUser)

                        <div class="avatar-edit">
{{--                        {!! Form::open(['method'=> 'put', 'url' => '/update/avatar/'. $idUserLogin, 'name' => 'update-avatar']) !!}--}}
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"
                                name="update-avatar" data-id="{{ $idUserLogin }}"/>
                            <label for="imageUpload"></label>
{{--                            <button type="submit">Nhap</button>--}}
{{--                        {!! Form::close() !!}--}}
                        </div>
                    @endif
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url('{{ asset('static/image/user/'.$user->userInfo->avatar) }}');">
                        </div>
                    </div>
                </div>
                <div class="name">
                    <h1>{{ $user->userInfo->fullname }}</h1>
                    <span>1,1 tỷ Bạn bè</span>
                </div>
            </div>
            <div class="user__name--rigth">
                @if($idUserLogin == $idUser)
                    @if ($_SERVER['REQUEST_URI'] == '/profile/post/about')
                        <button type="button" class="btn-update" id="btn-update" data-toggle="modal"
                            data-target="#exampleModalCenter" onclick="getdata()">
                            <span class="icon"><i class="fas fa-pencil-alt"></i></span>
                            <p>Chỉnh sửa trang cá nhân</p>
                        </button>
                    @else
                        <a class="btn-update" id="btn-update" href="{{ route('about.list', ['idUser' => $idUser]) }}">
                            <span class="icon"><i class="fas fa-pencil-alt"></i></span>
                            <p>Chỉnh sửa trang cá nhân</p>
                        </a>
                    @endif
                @else
                    <a class="btn-update" id="btn-update" href="/profile/about">
                        <span class="icon"><i class="far fa-user-plus m-right"></i></span>
                        <p>Kết bạn</p>
                    </a>
                @endif
            </div>
        </div>

        <div class="user__menu">
            <ul>
                <li class="user__menu--item  {{ $_SERVER['REQUEST_URI'] == '/profile/post/list' ? 'active' : '' }} ">
                    <a href="{{ route('post.list', ['idUser' => $idUser]) }}">Bài viết</a>
                </li>
                <li class="user__menu--item {{ $_SERVER['REQUEST_URI'] == '/profile/about' ? 'active' : '' }}">
                    <a href="{{ route('about.list', ['idUser' => $idUser]) }}">Giới thiệu</a>
                </li>
                <li class="user__menu--item {{ $_SERVER['REQUEST_URI'] == '/profile/friend' ? 'active' : '' }}">
                    <a href="{{ route('friend.list', ['idUser' => $idUser]) }}">Bạn bè</a>
                </li>
                <li class="user__menu--item {{ $_SERVER['REQUEST_URI'] == '/profile/image' ? 'active' : '' }}">
                    <a href="{{ route('image.list', ['idUser' => $idUser]) }}">Ảnh</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<script>
    function readURLAvatar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')') ;
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURLAvatar(this);
    });
// Banner
    function readURLBanner(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#viewBanner').attr("src", e.target.result);
                $('#viewBanner').hide();
                $('#viewBanner').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#input-viewBanner").change(function() {
        readURLBanner(this);
    });
</script>

<script src="{{ asset('frontend/js/profile.js') }}"></script>

