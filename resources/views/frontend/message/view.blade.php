
@if($data_mess)
    @foreach($data_mess as $key => $value)
        <div
            class="direct-chat-msg @if($value->user_id === session(\App\Setting\Setting_Static::KEY.'-id')) right @endif">
            <div class="direct-chat-infos clearfix">
                @if(isset($value->getUser) && $value->getUser)
                    <span
                        class="direct-chat-name float-right">{{$value->getUser->fullname}}</span>
                @endif
                <span
                    class="direct-chat-timestamp float-left">{{date('d/m/Y H:i', $value->created_at)}}
                                                            </span>
            </div>
            <!-- /.direct-chat-infos -->
            @if(isset($value->getUser) && $value->getUser)
                <img class="direct-chat-img"
                     src="{{asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $value->getUser->avatar))}}"
                     alt="{{$value->getUser->fullname}}">
        @endif
        <!-- /.direct-chat-img -->
            <a onclick="return confirm('Bạn có muốn xóa tin nhắn này!')" href="{{route('message-delete',['id' => $value->id])}}">
                <i class="fas fa-times"></i>
            </a><div class="direct-chat-text">
                {{ $value->message}}
            </div>
            <!-- /.direct-chat-text -->
        </div>
    @endforeach
@endif


