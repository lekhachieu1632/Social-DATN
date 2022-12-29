<div class="sidebar">
    <div class="sideBar__right">
        <div class="advertisement">
            <marquee direction="up" scrolldelay="200">
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/im_ttkn.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img1_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img2_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img2_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img2_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img2_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
                <div>
                    <a href="" class="advItem">
                        <div class="advItem--img">
                            <img src="{{ asset('static/image/img2_slide2.png') }}" alt="">
                        </div>
                        <p class="">Bất đông sản tương lai</p>
                    </a>
                </div>
            </marquee>

        </div>
        <div class="messenger">
            <div class="top">
                Bạn bè
            </div>
            <?php
            $data = \App\Services\FriendGroupService::listFriend();
            $user= [];
            ?>
            @if(isset($data) && $data)
                <ul class="mes__list">
                    @foreach ($data as $key => $value)
                        @if($value['user_id_1'] === session(\App\Setting\Setting_Static::KEY.'-id'))
                        @php $user = \App\Models\UserInfo::where('user_id', $value['user_id_2'])->first(); @endphp
                        @else
                        @php $user = \App\Models\UserInfo::where('user_id', $value['user_id_1'])->first(); @endphp
                        @endif
                        @if(isset($user) && $user)
                        <li class="mes__list--item" @if(isset($user) && $user) onclick="chatAdd({{$user->user_id}})" @endif style="cursor: pointer">
                            <div class="item-img">
                                @if(isset($user) && $user)
                                <img
                                    src="{{asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $user->avatar))}}"
                                    alt="">
                                @endif
                            </div>
                            <p class="item-title">
                                @if(isset($user) && $user)
                                {{ $user->fullname }}
                                @endif
                            </p>
                        </li>
                        @endif
                    @endforeach
                </ul>
            @else
                <p>Hiện chưa có bạn bè</p>
            @endif
        </div>
    </div>

</div>

<script>
    function chatAdd(id) {
            window.location.href= "{{url('/message/add-message')}}"+"/"+id;
    }
</script>
