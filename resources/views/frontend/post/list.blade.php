<div class="mainContent__body mt-4">
    <div class="d-flex align-items-baseline justify-content-between mb-4">
        <h2 class="fs-22 fw-600">Bài viết</h2>
        <ul class="d-flex align-items-center">
            <li class="">
                <a href="" class="text-color-7">Tất cả</a>
            </li>
            <li class="ps-4">
                <a href="" class="text-color-7">Cá nhân</a>
            </li>
            <li class="ps-4">
                <a href="" class="text-color-7">chia sẻ</a>
            </li>
        </ul>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-xxl-6 col-xl-6 col-sm-12 mb-4">
                <div class="post_item ">
                    <div class="post_item--img img-posts overflow-hidden">
                        <div class="post-item__more mt-0 ml-auto btn-group position-absolute m-2 top-0 end-0" >
                            <button type="button" class="btn btn-link btn-sm text-light" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" >
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" >
                                <li>
                                    <a class="dropdown-item" type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editPostModal"
                                            href="{{ route('post.edit', ['idUser' => session(\App\Setting\Setting_Static::KEY.'-id'), 'id' => $post->id]) }}"
                                            name="confirm_detail">
                                        sửa
                                    </a>
                                </li>
                                <li>
                                    <button class="btn-delete-post dropdown-item" data-bs-id="{{ $post->id }}"
                                            data-bs-toggle="modal" data-bs-target="#deletePostModal" type="button">
                                        <i class="fas fa-trash-alt"></i> Xoá
                                    </button>
                                </li>
                            </ul>
                        </div>


                        <a href="{{route('post.detail',['idUser' => $post->user_id  , 'id' => $post->id])}}">
                            @if($post->image)
                                <img class="img-cover" src="{{ asset('/storage/'.$post->image) }}" alt="">
                            @else
                                <img class="img-cover" src="{{ asset('/static/defaut/defaut_image_post.jpeg') }}" alt="">
                            @endif
                            <div class="post_item--content text-color-3 p-3 ">
                                <p class="webkit-box-2">{{ $post->content }}</p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="post_item--info d-flex align-items-center justify-content-between mt-3">
                        <div class="post_item--user d-flex align-items-center">
                            <a class="avatarUser-30 me-2" href="{{ asset(route('post.list', $post->user_id)) }}">
                                @if($post->userInfo->avatar)
                                    <img class="img-cover" src="{{ asset('static/image/user/'.$post->userInfo->avatar) }}" alt="">
                                @else
                                    <img class="img-cover" src="{{ asset('static/image/user/defaut.jpeg') }}" alt="">
                                @endif
                            </a>

                            @if($post->location_post && $post->location_post!= $post->user_id)
                                <a class="text-body" href="{{ asset(route('post.list', $post->user_id)) }}">{{$post->userInfo->fullname}}</a>
                                <i class="fas fa-caret-right mx-2 align-middle"></i>
                                <a class="text-body" href="{{ asset(route('post.list', $post->location_post)) }}">{{$post->userFriend->fullname}}</a>
                            @else
                                <a class="text-body" href="{{ asset(route('post.list', $post->user_id)) }}" class="title">{{$post->userInfo->fullname}}</a>
                            @endif
                        </div>

                        <div class="post_item--action d-flex align-items-center">
                            @include('frontend.post.like')

                            <div class="comment color-fill cursor-pointer">
                                <span class="me-2"><img class="align-bottom" src=" {{ asset('static/icon/comment-2.png') }}" alt=""></span>
                                <span>200</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('frontend.post.edit')
@include('frontend.post.delete')
