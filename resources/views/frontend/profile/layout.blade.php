@extends('frontend.layout.layout')

@section('contentLayout')
    <div class="bodyCard bg-color-3 flex-grow-1" style="">
        <div class="d-flex">
            <section class="mainContent flex-grow-1">
                <div class="maxw-60  m-auto w-100">
                    <div class="mainContent__header d-flex align-items-start w-100  pb-5 border-bottom-solid-1">
                        @include('frontend.post.create')
                        <form
                            class="mt-1 search listStory d-flex align-items-center justify-content-between flex-grow-1 maxw-80 overflow-auto">
                            <input type="text" class="input-custorm fs-14 w-100" placeholder="Tìm kiếm">
                            <button class="icon-search" type="submit"><img src="../../static/icon/search_left.svg" alt="">
                            </button>
                        </form>
                    </div>
                    @yield('contentProfile')
                </div>
            </section>
            @include('frontend.profile.sidebarProfile')
        </div>
    </div>
@endsection
