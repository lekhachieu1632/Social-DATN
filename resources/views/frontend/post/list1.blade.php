<div class="main__content mb-5">
    <div class="post">
        <div class="box_input" data-toggle="modal" data-target="#addPostModal">
            <div class="flex">
                <div class="avatar_small">
                    <img src="{{ asset('static/image/user/'.$userLogin->userInfo->avatar) }}" alt="">
                </div>
                <div class="input_disabled open-create-post-modal">{{ $userLogin->userInfo->fullname }} ơi, bạn đang nghĩ gì thế ?</div>
                <div class="upload_img open-create-post-modal"><i class="fad fa-image-polaroid"></i><span>Ảnh</span></div>
            </div>
        </div>
    </div>

    <div class="posts__list">
        @foreach($posts as $post)
            <div class="posts__list--item">
                <div class="item-top flex">
                    <div class="item-top__left avatar_small">
                        @if($post->userInfo->avatar)
                            <img src="{{ asset('static/image/user/'.$post->userInfo->avatar) }}" alt="">
                        @else
                            <img src="{{ asset('static/image/user/defaut.jpeg') }}" alt="">
                        @endif
                    </div>
                    <div class="item-top__right">
                        @if($post->location_post && $post->location_post!= $post->user_id)
                            <h5 class="title">{{$post->userInfo->fullname}} <i class="fas fa-caret-right"></i> {{$post->userFriend->fullname}}</h5>
                        @else
                            <h5 class="title">{{$post->userInfo->fullname}}</h5>
                        @endif
                        <span class="date">{{ $post->created_at }}</span>
                    </div>
                    @if($idUserLogin === $post->user_id)
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btnCosturm" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fal fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="edit-post dropdown-item"
                                   data-toggle="modal"
                                   data-target="#editPostModal"
                                   href="{{ route('post.edit', $post->id) }}"
                                   data-id="{{ $post->id }}"
                                   name="confirm_detail"
                                   data-content="{{ $post->content }}"
                                   data-image="{{ $post->image }}">
                                <i class="fal fa-pencil-alt"></i> Sửa
                                </a>

                                <button class="btn-delete-post dropdown-item" data-id="{{ $post->id }}"
                                    data-toggle="modal" data-target="#deletePostModal" type="button">
                                    <i class="fas fa-trash-alt"></i> Xoá
                                </button>
                            </div>
                        </div>
                    @else
                    @endif

                </div>
                <div class="item-content">
                    <div class="description">
                        {{ $post->content }}
                    </div>z
                    @if(!!$post->image)
                        <div class="img">
                            <a href="{{ asset('../storage/'.$post->image) }}">
                                <img src="{{ asset('/storage/'.$post->image) }}" alt="" id='image-id1' name='image-id1'>
                            </a>
                            <a href="" ></a>
                        </div>
                    @else
                    @endif
                </div>
                <div class="item-action">
                    <div class="view-action flex">
                        <div class="view-action__left flex">
                            <span class="icon"><img src="{{ asset('static/image/tim.svg') }}" alt=""></span>
                            <span class="view-number"> {{ $post->likes }}</span>
                        </div>
                        <div class="view-action__right">

                        </div>
                    </div>
                    <div class="click-action flex">
                        <div class="click-action__left flex-center">
                            <span class="icon"><i class="fal fa-heart"></i></span>
                            <span class="title">Thích</span>
                        </div>
                        <a class="click-action__right flex-center" href="{{route('post.detail',['idUser' => $idUser, 'id' => $post->id])}}">
                            <span class="icon"><i class="fal fa-comment-smile"></i></span>
                            <span class="title">Bình luận</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('frontend.post.create')
@include('frontend.post.edit')
@include('frontend.post.delete')
