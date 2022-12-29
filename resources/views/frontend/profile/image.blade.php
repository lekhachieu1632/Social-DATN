@extends('frontend.profile.layout')

@section('contentProfile')
    <div class="row">
        @foreach($posts as $post)
            @if(!!$post->image)
                <div class="col-xxl-6 col-xl-6 col-sm-12 mb-4">
                    <div class="post_item ">
                        <div class="post_item--img img-posts overflow-hidden">
                            <a href="{{route('post.detail',['idUser' => $post->user_id  , 'id' => $post->id])}}">
                                <img class="img-cover" src="{{ asset('/storage/'.$post->image) }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
