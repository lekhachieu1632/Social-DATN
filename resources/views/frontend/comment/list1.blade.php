<div id="contact" class="comment__content">
    @foreach ($comments as $comment)
        <div class="comment__content--item ">
            <div class="flex-stretch">
                <div class="avatar_small">
                    <img src="{{ asset('static/image/avatar.jpg') }}" alt="">
                </div>
                <div class="comment--detail">
                    <a href="{{ route('post.list', ['idUser' => $comment->user_id]) }}">
                        <h5>{{ $comment->user->fullname }}</h5>
                    </a>
                    <div class="desc">
                        {{ $comment->content }}
                    </div>
                    @if (!!$comment->image)
                        <div class="img">
                            <img src="{{ asset('../storage/' . $comment->image) }}" alt="{{ $comment->image }}">
                        </div>
                    @endif
                </div>
            </div>
            <div class="commentItem flex">
                <div class="like flex">
                    <span><i class="fas fa-thumbs-up"></i><span class="number">1,68k</span></span>
                    <p>Thích</p>
                </div>
                <div class="like flex ml-2">
                    <span class="like flex btn-edit-comment"
                          data-id="{{ $comment->id }}"
                          data-content="{{ $comment->content }}"
                          data-image="{{ $comment->image }}">Sửa</span>
                    <input hidden disabled id="id-{{ $comment->id }}" type="text" value="1" name="id">
                    <input hidden disabled id="content-{{ $comment->id }}" type="text"
                        value="{{ $comment->content }}" name="content">
                    @if(!!$comment->image)
                        <input hidden disabled id="img-{{ $comment->id }}" type="text" value="{{ asset('../storage/' . $comment->image) }}"
                               name="urlImage">
                    @endif

                </div>
                <span class="like flex btn-delete-comment"
                      data-id="{{ $comment->id }}"
                      data-toggle="modal"
                      data-target="#deleteCommentModal">&nbsp Xoá</span>
                <span style="color: #B0B3B8;"> &nbsp {{ $comment->created_at }}</span>
            </div>
            @include('frontend.comment.edit')
        </div>
    @endforeach
</div>

@include('frontend.comment.delete')
