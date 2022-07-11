@extends('layouts.app')

@section('title', 'News')

@section('content')
<section style="background-color: #141D2B; padding-top: 6rem; padding-bottom: 4rem;">
    <div class="container">        
        <div class="d-block col-12 col-md-9 col-lg-7 mx-auto">
            <h1 class="text-white fw-bold text-center display-5">MengKontes News</h1>
        </div>
    </div>
</section>

<section class="py-5 ">
    <div class="container">
        @foreach ($data as $key)
            <div class="mb-3 row col-12 col-md-8 col-lg-6 mx-auto">
                <div class="col">
                    @php
                        $day = $key->created_at;
                        $day = date("jS F, Y", strtotime($day));
                    @endphp
                    <p class="text-white-50 lead">{{ $day }}</p>
                </div>
                <div class="col-8">
                    <a class="text-white text-decoration-none lead fw-bold" href="{{ route('news.show', $key->slug) }}">{{ $key->title }}</a>
                    <p class="text-white-50">{!! Str::limit($key->content, 200, '...') !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
