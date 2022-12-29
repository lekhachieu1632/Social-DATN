<div class="comments__list d-block">
    @foreach ($comments as $comment)
        <div id="formListItemComment-{{ $comment->id }}" class="comment__item_1 d-flex ">
            <span class="avatarUser-30 me-2">
              <img class="img-cover" src="{{ asset('static/image/user/'.$comment->user->avatar) }}" alt="" />
            </span>
            <div class="media-body flex-grow-1">
                <div class="comment__body">
                    <div class="d-inline-block comment__info mb-1 position-relative" >
                        <a class="comment__author font-weight-bold d-inline-block text-body"
                           href="{{ route('post.list', ['idUser' => $comment->user_id]) }}">
                            {{ $comment->user->fullname }}
                        </a>
                        <div>
                            <div class="text-display undefined">
                                {{ $comment->content }}
                            </div>
                            @if(!!$comment->image)
                                <img class="img-cover border-radius-15 overflow-hidden"
                                     src="{{ asset('../storage/'.$comment->image) }}" alt="">
                            @endif
                        </div>
                        <a class="post-item__stats__item d-flex align-items-center mr-auto text-dark pt-3 pb-1"  >
                            <div class="post_item--info post-item__reaction post-item_medium d-flex align-items-center" >
                                @if(!!$comment)
                                <span class="item_reaction like d-flex align-items-center" >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15"
                                        height="15"
                                        viewBox="0 0 23.997 21.188" >
                                        <defs>
                                            <clipPath id="clip-path">
                                                <path
                                                    id="Clip_2"
                                                    data-name="Clip2"
                                                    d="M0,0H24V21.188H0Z"
                                                    transform="translate(0.003)"
                                                    fill="none"/>
                                            </clipPath>
                                        </defs>
                                        <g
                                            id="like"
                                            transform="translate(-0.003)"
                                            clip-path="url(#clip-path)">
                                            <path
                                                id="Fill_1"
                                                data-name="Fill1"
                                                d="M12,21.188A.749.749,0,0,1,11.506,21C10.471,20.1,9.474,19.247,8.6,18.5,3.419,14.087,0,11.174,0,6.915,0,2.973,2.741,0,6.375,0A5.682,5.682,0,0,1,9.924,1.227,8.083,8.083,0,0,1,12,3.724a8.084,8.084,0,0,1,2.076-2.5A5.682,5.682,0,0,1,17.625,0C21.259,0,24,2.973,24,6.915c0,4.259-3.419,7.173-8.595,11.583-.88.75-1.876,1.6-2.911,2.5a.749.749,0,0,1-.494.185"/>
                                        </g>
                                    </svg>
                                </span>
                                @endif
                                <span>1</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between font-size-small"
                         style="padding-left: 0.625rem" >
                        <div class="comment__actions d-flex align-items-center" >
                            <a class="comment__actions--reaction fs-12 fw-600 d-flex align-items-center"
                               style="color: rgb(26, 26, 26)" > Thích
                            </a>
                            <a class="text-dark fs-12 fw-600 d-flex align-items-center" onclick="getDatainput(1,2,'dfdsfsd')">
                                Trả lời
                            </a>
                            <span class="text-dark fs-12 dot">{{ $comment->created_at }}</span>
                        </div>
                        <script>
                            function getDatainput(idPost,idUser,content){
                                console.log(idPost,idUser,content);
                                document.getElementsByClassName('')
                            }
                        </script>
                        <div class="post-item__more mt-0 ml-auto btn-group" >
                            <button type="button" class="btn btn-link btn-sm " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" >
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" >
                                <li>
                                    <button class="dropdown-item btn-edit-comment" type="button"
                                            data-bs-id="{{ $comment->id }}"
                                            data-bs-content="{{ $comment->content }}"
                                            data-bs-image="{{ $comment->image }}">
                                        sửa
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item btn-delete-comment" type="button"
                                            data-bs-id-comment="{{ $comment->id }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteCommentModal">
                                        xoá
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @include('frontend.comment.edit')
                </div>
                {{--                                            <div class="comment__item_2 d-flex mt-1">--}}
                {{--                                                <span class="avatarUser-30 me-2">--}}
                {{--                                                  <img class="img-cover" src="image/user1.png" alt="" />--}}
                {{--                                                </span>--}}
                {{--                                                <div class="media-body flex-grow-1">--}}
                {{--                                                    <div class="comment__body">--}}
                {{--                                                        <div class="d-inline-block comment__info mb-1 position-relative" >--}}
                {{--                                                            <a class="comment__author font-weight-bold d-inline-block"--}}
                {{--                                                               href="/1205168982" > Trần Huyền Châu--}}
                {{--                                                            </a>--}}
                {{--                                                            <div>--}}
                {{--                                                                <div class="text-display undefined">--}}
                {{--                                                                    phim nay--}}
                {{--                                                                </div>--}}
                {{--                                                            </div>--}}
                {{--                                                            <a class="post-item__stats__item d-flex align-items-center mr-auto text-dark pt-3 pb-1"  >--}}
                {{--                                                                <div class="post-item__reaction post-item_medium d-flex align-items-center" >--}}
                {{--                                          <span class="item_reaction activelike d-flex align-items-center" >--}}
                {{--                                            <svg--}}
                {{--                                                xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                                xmlns:xlink="http://www.w3.org/1999/xlink"--}}
                {{--                                                width="15"--}}
                {{--                                                height="15"--}}
                {{--                                                viewBox="0 0 23.997 21.188" >--}}
                {{--                                              <defs>--}}
                {{--                                                <clipPath id="clip-path">--}}
                {{--                                                  <path--}}
                {{--                                                      id="Clip_2"--}}
                {{--                                                      data-name="Clip--}}
                {{--                                                                                                                                                                    2"--}}
                {{--                                                      d="M0,0H24V21.188H0Z"--}}
                {{--                                                      transform="translate(0.003)"--}}
                {{--                                                      fill="none"--}}
                {{--                                                  />--}}
                {{--                                                </clipPath>--}}
                {{--                                              </defs>--}}
                {{--                                              <g--}}
                {{--                                                  id="like"--}}
                {{--                                                  transform="translate(-0.003)"--}}
                {{--                                                  clip-path="url(#clip-path)"--}}
                {{--                                              >--}}
                {{--                                                <path--}}
                {{--                                                    id="Fill_1"--}}
                {{--                                                    data-name="Fill--}}
                {{--                                                                                                                                                                    1"--}}
                {{--                                                    d="M12,21.188A.749.749,0,0,1,11.506,21C10.471,20.1,9.474,19.247,8.6,18.5,3.419,14.087,0,11.174,0,6.915,0,2.973,2.741,0,6.375,0A5.682,5.682,0,0,1,9.924,1.227,8.083,8.083,0,0,1,12,3.724a8.084,8.084,0,0,1,2.076-2.5A5.682,5.682,0,0,1,17.625,0C21.259,0,24,2.973,24,6.915c0,4.259-3.419,7.173-8.595,11.583-.88.75-1.876,1.6-2.911,2.5a.749.749,0,0,1-.494.185"--}}
                {{--                                                />--}}
                {{--                                              </g>--}}
                {{--                                            </svg> </span--}}
                {{--                                          >1--}}
                {{--                                                                </div>--}}
                {{--                                                            </a>--}}
                {{--                                                        </div>--}}
                {{--                                                        <div class="d-flex align-items-center justify-content-between font-size-small"--}}
                {{--                                                             style="padding-left: 0.625rem" >--}}
                {{--                                                            <div class="comment__actions d-flex align-items-center" >--}}
                {{--                                                                <a class="comment__actions--reaction fs-12 fw-600 d-flex align-items-center"--}}
                {{--                                                                   style="color: rgb(26, 26, 26)" > Thích--}}
                {{--                                                                </a>--}}
                {{--                                                                <a class="text-dark fs-12 fw-600 d-flex align-items-center" >--}}
                {{--                                                                    Trả lời--}}
                {{--                                                                </a>--}}
                {{--                                                                <span class="text-dark fs-12 dot">--}}
                {{--                                            2 giờ trước--}}
                {{--                                            </span>--}}
                {{--                                                            </div>--}}
                {{--                                                            <div class="post-item__more mt-0 ml-auto btn-group" >--}}
                {{--                                                                <button type="button" class="btn btn-link btn-sm " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" >--}}
                {{--                                                                    <i class="fas fa-ellipsis-h"></i>--}}
                {{--                                                                </button>--}}
                {{--                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" >--}}
                {{--                                                                    <li>--}}
                {{--                                                                        <button class="dropdown-item" type="button" >--}}
                {{--                                                                            xoá--}}
                {{--                                                                        </button>--}}
                {{--                                                                    </li>--}}
                {{--                                                                </ul>--}}
                {{--                                                            </div>--}}
                {{--                                                        </div>--}}
                {{--                                                    </div>--}}

                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="comment__form subform__v2 d-flex align-items-center pb-4 hidden">--}}
                {{--                                <span class="avatarUser-30 me-2">--}}
                {{--                                    <img class="img-cover" src="image/user1.png" alt="" />--}}
                {{--                                  </span>--}}
                {{--                                                <form action="" class="flex-grow-1 position-relative">--}}
                {{--                                                    <input type="text" class="input-comment-v1 w-100 p-3 pe-5">--}}
                {{--                                                    <button type="submit" class="btn-comment-v1 border-radius-50 text-color-6" ><i class="far fa-paper-plane"></i></button>--}}
                {{--                                                </form>--}}
                {{--                                            </div>--}}
            </div>
        </div>
    @endforeach
</div>

@include('frontend.comment.delete')
