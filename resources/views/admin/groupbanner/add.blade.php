@extends("admin.layouts.main")
@section("content")
@php
    $pagtitle = 'Thêm nhóm banner';
@endphp
@section('pageTitle', $pagtitle)

<section class="content ">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-secondary">
                <form method="post" action="{{route('group_banner-create')}}">
                    {{ csrf_field() }}
                    <div class="card-body row">
                        @if(isset($data) && $data)
                            @include('admin.groupbanner.partials.form',['data' => $data])
                        @else
                            @include('admin.groupbanner.partials.form')
                        @endif
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm nhóm banner</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
