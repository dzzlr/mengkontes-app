@extends('layouts.app')

@section('title', 'News')

@section('content')
<section style="background-color: #141D2B; padding-top: 6rem; padding-bottom: 3rem;">
    <div class="container">        
        <div class="d-block col-12 col-md-9 col-lg-7 mx-auto">
            <h1 class="mx-auto mb-3 text-white fw-bold text-center" style="font-size: 44px">{{ $data->title }}</h1>
            @php
                $day = $data->created_at;
                $day = date("jS F, Y", strtotime($day));
            @endphp
            <p class="text-white-50 text-center lead">{{ $day }}</p>
        </div>
    </div>
</section>

<section class="py-5 ">
    <div class="container">
        <div class="mb-3 row col-12 col-md-9 col-lg-7 mx-auto">
            <p class="text-white-50">{!! $data->content !!}</p>
        </div>
    </div>
</section>
@endsection
