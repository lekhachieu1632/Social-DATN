@php
    $user = \App\Models\UserInfo::where('user_id' , session(\App\Setting\Setting_Static::KEY.'-id'))->first()->toArray();
@endphp

<section class="barInfo bg-color-4 pt-xp-4">
    <div class="barInfo__header d-flex align-items-center justify-content-between w-100 ps-4 pe-4">
        <form class="search w-57 me-3" action="{{ asset(route('home')) }}">
            <input type="text" class="input-custorm fs-14" placeholder="Tìm kiếm"
                name="postSearch" value="{{ request()->postSearch }}">
            <button class="icon-search" type="submit"><img src="image\search_left.svg" alt=""></button>
        </form>
        <div class="border-solid-1-LavenderMist avatarUser-50 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                <path id="notification" d="M9,24a3.829,3.829,0,0,1-3.744-3.188H.692A.7.7,0,0,1,0,20.11V17.3a.705.705,0,0,1,.309-.585l1.075-.729V9.656A7.775,7.775,0,0,1,3.392,4.428,7.554,7.554,0,0,1,8.308,1.954V.7A.692.692,0,1,1,9.692.7V1.954a7.555,7.555,0,0,1,4.915,2.474,7.775,7.775,0,0,1,2.008,5.228v6.327l1.075.729A.705.705,0,0,1,18,17.3V20.11a.7.7,0,0,1-.692.7H12.744A3.829,3.829,0,0,1,9,24ZM6.675,20.813a2.408,2.408,0,0,0,4.649,0ZM9,3.328A6.287,6.287,0,0,0,2.769,9.656v6.7a.705.705,0,0,1-.309.585l-1.076.729v1.733H16.616V17.673l-1.076-.729a.705.705,0,0,1-.309-.585v-6.7A6.287,6.287,0,0,0,9,3.328Z" transform="translate(0 0)" fill="#8f9bb3"/>
            </svg>
        </div>
        <a class="avatarUser-50 ms-3" href="{{ asset(route('post.list', session()->get(\App\Setting\Setting_Static::KEY.'-id'))) }}">
            <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                 <img src="{{ asset('static/image/user/'.$user['avatar']) }}" alt="" />
            </span>
        </a>
    </div>
    <div class="barInfo__main">
        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500">Gợi ý kết bạn</h3>
                <a href="" class="fs-14 text-color-7">Xem thêm</a>
            </div>
            <ul class="mt-4">
                <li class=" d-flex align-items-center justify-content-between mb-4">
                    <div class="left d-flex align-items-center justify-content-between">
                        <a class="avatarUser-50 me-3" href="">
                                        <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                            <img src="image/user1.png" alt="" />
                                        </span>
                        </a>
                        <div>
                            <h4 class="lh-19">Khoulod Mohamed</h4>
                            <p class="fs-12 text-color-6">@khmohamed</p>
                        </div>
                    </div>
                    <button class="button-add">Kết bạn</button>
                </li>
                <li class=" d-flex align-items-center justify-content-between mb-4">
                    <div class="left d-flex align-items-center justify-content-between">
                        <a class="avatarUser-50 me-3" href="">
                                        <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                            <img src="image/user1.png" alt="" />
                                        </span>
                        </a>
                        <div>
                            <h4 class="lh-19">Khoulod Mohamed</h4>
                            <p class="fs-12 text-color-6">@khmohamed</p>
                        </div>
                    </div>
                    <button class="button-add">Kết bạn</button>
                </li>
                <li class=" d-flex align-items-center justify-content-between mb-4">
                    <div class="left d-flex align-items-center justify-content-between">
                        <a class="avatarUser-50 me-3" href="">
                                        <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                            <img src="image/user1.png" alt="" />
                                        </span>
                        </a>
                        <div>
                            <h4 class="lh-19">Khoulod Mohamed</h4>
                            <p class="fs-12 text-color-6">@khmohamed</p>
                        </div>
                    </div>
                    <button class="button-add">Kết bạn</button>
                </li>
            </ul>
        </div>
        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500">Khoảng khắc</h3>
                <!-- <a href="" class="fs-14 text-color-7">Xem thêm</a> -->
            </div>
            <div class="mt-4 row">
                <div class="col-6 mb-3">
                    <div class="item-img">
                        <img class="img-cover" src="image\gt1.png" alt="">
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="item-img">
                        <img class="img-cover" src="image\gt1.png" alt="">
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="item-img">
                        <img class="img-cover" src="image\gt1.png" alt="">
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="item-img">
                        <img class="img-cover" src="image\gt1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500">Thông báo</h3>
                <a href="" class="fs-14 text-color-7">Xem thêm</a>
            </div>
            <ul class="mt-4">
                <li class="mt-3 d-flex align-items-center">
                    <span class="me-2"><img src="{{ asset('static/icon/comment-2.png') }}" alt=""></span>
                    <p class="fs-14 fw-500">You’ve Comented on Ahmed Mohamed Shot</p>
                </li>
                <li class="mt-3 d-flex align-items-center">
                    <span class="me-2"><img src="{{ asset('static/icon/like.png') }}" alt=""></span>
                    <p class="fs-14 fw-500">You’ve Liked Noha Mohamed Shot</p>
                </li>
            </ul>
        </div>
    </div>

</section>
