@extends('layouts.app')

@section('title', 'Competitions')

@section('content')

<section style="background-color: #141D2B; padding-top: 6rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="d-block justify-content-between">
            <a href="{{ route('competitions.index') }}" class="text-decoration-none text-white-50 text-center">
                <span><i class="bi bi-arrow-left-short"></i></span>&nbsp;&nbsp;Back to competitions</a>
            <hr class="border-4">
        </div>

        <div class="">
            <div class="row row-cols-1 row-cols-md-2 g-2">
                <div class="col">
                    <h3 class="m-0 text-white fw-bold">Hack The Box Exhibition CTF</h3>
                    <p class="mb-4 text-white-50 fst-italic">by EDE Laboratory</p>
                    <div class="row row-cols-2 row-cols-md-2">
                        <div class="col">
                            <small class="text-white-50 m-0">{{ _('Start Date') }}</small>
                            <p class="text-white fw-bold">08 Jul, 22:00, 2021</p>
                        </div>
                        <div class="col">
                            <small class="text-white-50 m-0">{{ _('End Date') }}</small>
                            <p class="text-white fw-bold">28 Dec, 23:09, 2021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-2">
                <a href="" class="btn btn-primary">{{ _('Sign Up') }}</a>
                <a href="" class="btn btn-outline-secondary">{{ _('Share Event') }}</a>
                <a href="" class="btn btn-outline-secondary">
                    <span><i class="bi bi-link-45deg"></i></span>&nbsp;&nbsp;{{ _('Copy') }}</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-auto col-lg-6">
                <p class="text-white fw-bold lead">{{ _('Overview') }}</p>
                <p class="text-white-50">
                    CTFs are entertaining, and professionals use them worldwide to enhance their soft and technical skills.
    
                    The web app, fully customized for CTFs only, ensures the players' experience is smooth, easy, and fun.
                    Live updates for each challenge submission, team management, and awesome UI make the CTF experience one
                    to remember! In addition, each CTF comes with its scoreboard, updating live with every change in the
                    competition, visible by both players and visitors.
                </p>
            </div>
            <div class="col-md-auto col-lg-5 p-3">
                <div class="mb-3 d-flex flex-row">
                    <div class="px-2 text-white-50 fs-3">
                        <span><i class="bi bi-people-fill"></i></span>
                    </div>
                    <div class="px-2">
                        <p class="text-white-50 m-0">{{ _('Players') }}</p>
                        <p class="text-white m-0"><span class="fw-bold">152 </span>players will participate</p>
                    </div>
                </div>
                <div class="mb-3 d-flex flex-row">
                    <div class="px-2 text-white-50 fs-3">
                        <span><i class="bi bi-puzzle-fill"></i></span>
                    </div>
                    <div class="px-2">
                        <p class="text-white-50 m-0">{{ _('Challenges') }}</p>
                        <p class="text-white m-0"><span class="fw-bold">19 </span>challenges</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="px-2 text-white-50 fs-3">
                        <span><i class="bi bi-geo-alt-fill"></i></span>
                    </div>
                    <div class="px-2">
                        <p class="text-white-50 m-0">{{ _('Location') }}</p>
                        <p class="text-white m-0">Online</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container d-flex flex-row justify-content-center">
    <div class="p-2 px-3">
        <small><a class="text-white-50 text-decoration-none" href="">{{ _('© 2022 MengKontes') }}</a></small>
    </div>
    <div class="p-2 px-3">
        <small><a class="text-white-50 text-decoration-none" href="">{{ _('Contact Us') }}</a></small>
    </div>
    <div class="p-2 px-3">
        <small><a class="text-white-50 text-decoration-none" href="">{{ _('Privacy & Policy') }}</a></small>
    </div>
    <div class="p-2 px-3">
        <small><a class="text-white-50 text-decoration-none" href="">{{ _('Terms of Service') }}</a></small>
    </div>
</div>

{{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a style="text-decoration: none" href="{{ route('competitions') }}">{{ __('Competitions') }}</a>
</li>
<li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
</ol>
</nav>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Detail Competition') }}</div>
            <livewire:competition-detail title="{{ $data->title }}" date="{{ $data->date }}" time="{{ $data->time }}"
                desc="{{ $data->desc }}" person="{{ $data->max_person }}" />
        </div>
    </div>
</div>
</div> --}}

@endsection