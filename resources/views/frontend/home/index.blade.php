@extends('frontend.layout.layout')

@section('contentLayout')
    <div class="bodyCard bg-color-3 flex-grow-1">
        <div class="d-flex">
            <section class="mainContent flex-grow-1">
                <div class="maxw-60  m-auto w-100">
                    <div class="mainContent__header d-flex align-items-center w-100  pb-5 border-bottom-solid-1">
                        @include('frontend.post.create')
                        <div class="listStory d-flex align-items-center justify-content-between flex-grow-1 maxw-80 overflow-auto">
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                    <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Đức</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Hoàng Đức</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Văn Hải</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Khắc Hiếu</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Siêu Nhân</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Siêu Nhân</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Siêu Nhân</p>
                            </div>
                            <div class="listStory--item text-center">
                                <a class="avatarUser-56 mb-3 me-auto ms-auto" href="">
                                   <span class="w-100 h-100 overflow-hidden d-block border-radius-50">
                                        <img src="image/user1.png" alt="" />
                                    </span>
                                </a>
                                <p class="fs-14 white-space-nowrap">Siêu Nhân</p>
                            </div>
                        </div>
                        <div class="showAll postUp  text-center ">
                            <a class="avatarUser-56  mb-3 me-auto ms-auto" href="">
                                <span class="bg-color-9  d-flex align-items-center justify-content-center">
                                    <span class="fs-35 fw-800 text-color-3">::</span>
                                </span>
                            </a>
                            <p class="fs-14">Xem tất cả</p>
                        </div>
                    </div>
                    @include('frontend.post.list')
                </div>

            </section>
            @include('frontend.home.sidebarRight')
        </div>
    </div>
@endsection
