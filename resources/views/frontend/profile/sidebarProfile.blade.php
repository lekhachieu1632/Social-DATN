<section class="barInfo bg-color-4 pt-xp-4">
    <div class="barInfo__header d-flex align-items-center justify-content-between w-100 ps-4 pe-4">
        <div class="d-flex align-items-center">
            @if($user->id != session(\App\Setting\Setting_Static::KEY.'-id'))
                <a class="border-solid-1-LavenderMist avatarUser-50 d-flex align-items-center justify-content-center me-3 bg-color-7 text-color-3 fs-18 ketban">
                    <i class="fas fa-user-plus"></i>
                </a>
                <div class="border-solid-1-LavenderMist avatarUser-50 d-flex align-items-center justify-content-center mess me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.996" height="30" viewBox="0 0 29.996 30">
                        <defs>
                            <clipPath id="clip-path">
                                <path id="Clip_2" data-name="Clip 2" d="M0,0H30V30H0Z" transform="translate(0.004)" fill="none"></path>
                            </clipPath>
                        </defs>
                        <g id="messenger" transform="translate(-0.004)" opacity="1">
                            <path id="Clip_2-2" data-name="Clip 2" d="M0,0H30V30H0Z" transform="translate(0.004)" fill="none"></path>
                            <g id="messenger-2" data-name="messenger" clip-path="url(#clip-path)">
                                <path id="Fill_1" data-name="Fill 1" d="M1.172,30a1.184,1.184,0,0,1-.83-.343,1.167,1.167,0,0,1-.286-1.188l1.932-6a15,15,0,1,1,5.544,5.544l-6,1.933A1.168,1.168,0,0,1,1.172,30Zm6.506-4.44a1.17,1.17,0,0,1,.622.179A12.659,12.659,0,1,0,4.261,21.7a1.172,1.172,0,0,1,.122.981L2.988,27.013l4.333-1.4A1.168,1.168,0,0,1,7.679,25.56Zm13.18-9.1A1.465,1.465,0,1,1,22.324,15,1.466,1.466,0,0,1,20.859,16.465Zm-5.859,0A1.465,1.465,0,1,1,16.465,15,1.466,1.466,0,0,1,15,16.465Zm-5.86,0A1.465,1.465,0,1,1,10.606,15,1.466,1.466,0,0,1,9.14,16.465Z"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            @endif
            <div class="border-solid-1-LavenderMist avatarUser-50 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path id="notification" d="M9,24a3.829,3.829,0,0,1-3.744-3.188H.692A.7.7,0,0,1,0,20.11V17.3a.705.705,0,0,1,.309-.585l1.075-.729V9.656A7.775,7.775,0,0,1,3.392,4.428,7.554,7.554,0,0,1,8.308,1.954V.7A.692.692,0,1,1,9.692.7V1.954a7.555,7.555,0,0,1,4.915,2.474,7.775,7.775,0,0,1,2.008,5.228v6.327l1.075.729A.705.705,0,0,1,18,17.3V20.11a.7.7,0,0,1-.692.7H12.744A3.829,3.829,0,0,1,9,24ZM6.675,20.813a2.408,2.408,0,0,0,4.649,0ZM9,3.328A6.287,6.287,0,0,0,2.769,9.656v6.7a.705.705,0,0,1-.309.585l-1.076.729v1.733H16.616V17.673l-1.076-.729a.705.705,0,0,1-.309-.585v-6.7A6.287,6.287,0,0,0,9,3.328Z" transform="translate(0 0)" fill="#8f9bb3"/>
                </svg>
            </div>
        </div>

        <a class="avatarUser-50 ms-3" href="{{ asset(route('post.list', session()->get(\App\Setting\Setting_Static::KEY.'-id'))) }}">
            <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                 <img src="{{ asset('static/image/user/'.$user->userInfo->avatar) }}">
             </span>
        </a>
    </div>
    <div class="barInfo__main">
        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500 fw-bold">Thông tin cá nhân</h3>
                <a href="{{ route('about.list', ['idUser' => $user->id]) }}" class="fs-14 text-color-7">Sửa</a>
            </div>
            <ul class="mt-3 d-table">
                <li class="d-table-row">
                    <div class="d-flex align-items-center d-table-cell p-1">
                        <span class="me-2"><i class="fal fa-map-marker-alt"></i></span>
                        <p class="fs-14 fw-500">Thành phố :</p>
                    </div>
                    <p class="text-color-7 d-table-cell">{{ $user->userInfo->address }}</p>
                </li>
                <li class="d-table-row">
                    <div class="d-flex align-items-center d-table-cell p-1">
                        <span class="me-2"><i class="fal fa-map-marker-alt"></i></span>
                        <p class="fs-14 fw-500">Trường học :</p>
                    </div>
                    <p class="text-color-7 d-table-cell">Đại học Điện Lực</p>
                </li>
                <li class="d-table-row">
                    <div class="d-flex align-items-center d-table-cell p-1">
                        <span class="me-2"><i class="fal fa-map-marker-alt"></i></span>
                        <p class="fs-14 fw-500">Ngày sinh :</p>
                    </div>
                    <p class="text-color-7 d-table-cell">25/06/2000</p>
                </li>
                <li class="d-table-row">
                    <div class="d-flex align-items-center d-table-cell p-1">
                        <span class="me-2"><i class="fal fa-map-marker-alt"></i></span>
                        <p class="fs-14 fw-500">Tình trạng :</p>
                    </div>
                    <p class="text-color-7 d-table-cell">Độc thân</p>
                </li>
                <li class="d-table-row">
                    <div class="d-flex align-items-center d-table-cell p-1">
                        <span class="me-2"><i class="fal fa-map-marker-alt"></i></span>
                        <p class="fs-14 fw-500">Facebook :</p>
                    </div>
                    <p class="text-color-7 d-table-cell">https:/facebook/ducnguyen.256</p>
                </li>

            </ul>
        </div>
        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500 fw-bold">Ảnh</h3>
                <a href="{{ route('image.list', ['idUser' => $user->id]) }}" class="fs-14 text-color-7">Xem tất cả</a>
            </div>
            <div class="mt-4 row">
                @php
                    $count = 0
                @endphp
                @foreach($posts as $post)
                    @if(!!$post->image && $count<=3)
                        @php
                            $count++
                        @endphp
                    <div class="col-6 mb-3">
                        <div class="item-img">
                            <img class="img-cover" src="{{ asset('../storage/' . $post->image) }}" alt="">
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="barInfo__main--item ps-3 pe-3">
            <div class="d-flex align-content-center justify-content-between mt-4">
                <h3 class="fs-16 fw-500 fw-bold">Bạn bè</h3>
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
    </div>

</section>
