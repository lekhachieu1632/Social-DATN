@extends('frontend.profile.layout')

@section('content')
    <div class="infoUser flex-jc-content ">
        <div class="col-900">
            <div class="rounded bg-white shadow mb-3 gapo-box">
                <div class="d-flex align-items-center mb-3 pt-2">
                    <h1 class="gapo-title">Bạn bè</h1><span class="ml-2 mb-1 text-secondary">35 bạn</span><a
                        class="btn btn-sm mr-2 d-flex align-items-center ml-auto">Lời mời đã gửi</a><a
                        class="btn btn-sm mr-2 d-flex align-items-center ml-2" href="/listFriend">Lời mời kết bạn<span
                            class="gapo-badge danger ml-2">40</span></a>
                </div>
                <div>
                    <div class="friend__list row">
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/phamngochuyentrinh"
                                    style="background-image: url({{ asset('static/image/bai1.jpg') }});"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/phamngochuyentrinh">Phạm Ngọc Huyền Trinh</a>
                                    <div class="text-secondary mb-2">8 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true" aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button" tabindex="0"
                                                role="menuitem" class="dropdown-item">Huỷ kết bạn</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/ngphnnn"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/11144d5d-fa77-4884-b3dc-2518465d0c4a.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/ngphnnn">ThịPhnn</a>
                                    <div class="text-secondary mb-2">1 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true" aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button" tabindex="0"
                                                role="menuitem" class="dropdown-item">Huỷ kết bạn</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/537870797"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/c604f2e1-60ee-401b-9e70-124eed1c04f9.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/537870797">Tuệ Minh</a>
                                    <div class="text-secondary mb-2">4 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true" aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button" tabindex="0"
                                                role="menuitem" class="dropdown-item">Huỷ kết bạn</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/992326725"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/f8dd81cd-4798-4480-beeb-bea13e83bb68.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/992326725">Nhỏ Thắm</a>
                                    <div class="text-secondary mb-2">5 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true" aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/anonhieu"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/46f43d39-e334-4de9-b8b3-2657a7ee7768.png&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/anonhieu">Minh Hiếu ☑️</a>
                                    <div class="text-secondary mb-2">23 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/621304110"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/78969bef-317f-4c40-8472-1cb86f7027cb.png&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/621304110">Linh Nguyễn</a>
                                    <div class="text-secondary mb-2">6 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/849531909"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/b729909f-6c7e-49f5-9eda-d9b4901324ef.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/849531909">Chu Thị Nhật Lệ</a>
                                    <div class="text-secondary mb-2">4 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/727686755"
                                    style="background-image: url(&quot;https://social-cdn-thumb-image-1.gapo.vn/312x312/smart/0a186d70-8d68-4583-bdbb-a20fda61f0da.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/727686755">Mia Nguyễn</a>
                                    <div class="text-secondary mb-2">14 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/thoxinhgai"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/adf7c1f6-2853-4cfd-9921-fd3a8cfae378.png&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/thoxinhgai">Thỏ</a>
                                    <div class="text-secondary mb-2">18 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/1834407234"
                                    style="background-image: url(&quot;https://social-cdn-thumb-image-1.gapo.vn/312x312/smart/b3fe9277-c556-4b2d-a711-d184fb889484.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/1834407234">Kiwi</a>
                                    <div class="text-secondary mb-2">15 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/346649"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/52f8b6e2-961c-465f-9895-a2a646430f2b.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/346649">Thu Hiền (Bull)</a>
                                    <div class="text-secondary mb-2">0 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/1119503436"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/c9295b58-760e-4059-91bd-36a7227e1eae.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/1119503436">Morela T</a>
                                    <div class="text-secondary mb-2">0 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/1063192942"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/edf6f0cd-5bb1-4fc0-9ce1-561c83d94136.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/1063192942">Thanh Nhi</a>
                                    <div class="text-secondary mb-2">6 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/866962958"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/66bb025a-de12-42fc-b298-a9e76b41af07.png&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/866962958">Nguyễn Thị Kiều Diễm</a>
                                    <div class="text-secondary mb-2">10 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/1366876248"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/a8314bce-5269-4306-9cdd-15e349aced03.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/1366876248">Văn Hiệu</a>
                                    <div class="text-secondary mb-2">1 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/112008245"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/a5381f49-1e78-4bd0-b61a-981b9e33bf76.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/112008245">Chuột tí hon</a>
                                    <div class="text-secondary mb-2">4 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/1195821068"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/d53fb450-13dc-44e5-98e6-fcbea9d45fc1.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/1195821068">Thuỳ Linh</a>
                                    <div class="text-secondary mb-2">18 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/481111131"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/7b42039f-8e64-41f1-abd6-e9148470d452.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/481111131">Mai Trần</a>
                                    <div class="text-secondary mb-2">17 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/346409"
                                    style="background-image: url(&quot;https://cdn-thumb-image-5.gapo.vn/312x312/smart/0e2926d5-86f7-4bdc-a376-02d58e94b2eb.jpeg&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/346409">Hoàng Hoa</a>
                                    <div class="text-secondary mb-2">0 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2dot4 px-1">
                            <div class="profile-friend-item mb-2"><a
                                    class="profile-friend-item__thumbnail gapo-thumbnail gapo-thumbnail--16x9 rounded-top cursor"
                                    href="/hot6868"
                                    style="background-image: url(&quot;https://social-cdn-thumb-image-1.gapo.vn/312x312/smart/77cdde5d-a0c9-4eb7-b6b8-fbabd71afd79.png&quot;);"><img
                                        class="w-100"></a>
                                <div class="text-left profile-friend-item__content"><a
                                        class="d-block text-body font-weight-semi-bold mb-1 text-overflow-ellipsis"
                                        href="/hot6868">Bảo linh</a>
                                    <div class="text-secondary mb-2">14 bạn chung</div>
                                    <div class="dropdown"><button type="button" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn btn-block btn-sm btn-light btn btn-secondary"><i
                                                class="gapo-icon icon-check mr-1 font-size-small"></i>Bạn bè</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right"><button type="button"
                                                tabindex="0" role="menuitem" class="dropdown-item">Huỷ kết bạn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
