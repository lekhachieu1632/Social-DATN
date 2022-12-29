@extends('frontend.layout.home')
@php
    $no_text = "Chưa nhập thông tin này!";
@endphp
@section('content')
    <div class="detailFriend  px-3 pt-5">
        <div class="col py-4 " style="background-color: #ffffff">
            <div class="align-items-center">
                @if(isset($data) && $data)
                    <div class="gapo-subtitle mb-3 ">
                        Lời mời kết bạn
                    </div>
                    <div class="row">
                        @foreach($data as $key => $value)
                                @php $user = \App\Models\UserInfo::where('user_id', $value['user_id_1'])->first()->toArray(); @endphp

{{--                                    @php $user = \App\Models\UserInfo::where('user_id', $value->getFriend['user_id_2'])->first(); @endphp--}}
                                <div class="suggestion-item-background mb-2 mr-2">
                                    <div style="
                                 width: 100%;
                                    position: relative;
                                ">
                                        <a class="gapo-thumbnail gapo-thumbnail--1x1 mb-2 rounded" href="url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $user['avatar'])) }}')"
                                           style="
                                               background-image: url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $user['avatar'])) }}');
                                               "></a><a
                                            href="url('{{ asset(\App\Setting\Setting_Dynamic::getImage(\App\Setting\Setting_Static::path_site_user, $user['avatar'])) }}')">
                                            <div
                                                class="suggestion-display-name text-body font-weight-semi-bold mb-2 pt-1">
                                                {{$user['fullname']}}
                                            </div>
                                        </a>
                                        <div class="d-flex align-items-center"
                                             style="
                                        margin-left: 12px;
                                        margin-top: 4px;
                                        height: 21px;
                                    ">
                                            <div class="text-secondary text-ellipsis"
                                                 style="
                                            white-space: nowrap;
                                            text-overflow: ellipsis;
                                            overflow: hidden;
                                        ">
                                                {{$user['introduce'] ?$user['introduce'] :  $no_text}}
                                            </div>
                                        </div>
                                        <div class="button-container">
                                            <a class="btn btn-block btn-md btn-primary btn-width-90" href="{{ route('friend-acept',['group_id' , $value['id']]) }}" >
                                                Đồng ý
                                            </a>
                                            <button class="btn btn-block btn-md btn-primary btn-width-90">Hủy</button>
                                        </div>
                                    </div>
                                </div>

                        @endforeach
                    </div>
                @else
                    <div class="card-body pb-0">
                        <p style="color: #000000; padding-left: 10px; text-align: center"> Không có dữ liệu</p>
                    </div>
                @endif
            </div>
        </div>
    </div>


{{--        <script>--}}
{{--            function acceptFriend(gr) {--}}
{{--                $.ajax({--}}
{{--                    url: '{{route('friend-acept',['group_id',])}}'+ '/'+gr,--}}
{{--                    type: 'get',--}}
{{--                    data: {--}}
{{--                        group_id: gr,--}}
{{--                    },--}}
{{--                    success: function (data) {--}}
{{--                        alert(data.msg);--}}
{{--                        window.location.reload();--}}
{{--                    }--}}
{{--                })--}}
{{--            }--}}

    {{--        function folllowFriend(id) {--}}
    {{--            $.ajax({--}}
    {{--                url: '{{route('friend-add')}}',--}}
    {{--                type: 'POST',--}}
    {{--                data: {--}}
    {{--                    _token: '{{ csrf_token() }}',--}}
    {{--                    id: id,--}}
    {{--                    status: {{\App\Setting\Setting_Static::STATIC_TWO}}--}}
    {{--                },--}}
    {{--                success: function (data) {--}}
    {{--                    alert(data.msg);--}}
    {{--                    window.location.reload();--}}
    {{--                }--}}
    {{--            })--}}
    {{--        }--}}
    {{--</script>--}}
@endsection

