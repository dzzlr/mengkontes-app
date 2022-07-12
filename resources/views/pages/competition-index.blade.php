@extends('layouts.app')

@section('title', 'Competitions')

@section('content')

<div class="mb-3" style="background-color: #141D2B; padding-top: 4rem;">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="p-2 px-3 border-bottom border-3">
                <a class="text-white text-decoration-none fw-bold" href="">{{ _('All') }}</a>
            </div>
            <div class="p-2 px-3">
                <a class="text-white-50 text-decoration-none" href="">{{ _('Capture The Flag') }}</a>
            </div>
            <div class="p-2 px-3">
                <a class="text-white-50 text-decoration-none" href="">{{ _('Competitive Programming') }}</a>
            </div>
            <div class="p-2 px-3">
                <a class="text-white-50 text-decoration-none" href="">{{ _('Data Mining') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3">
        <div class="col">
            <div class="card text-white" style="background-color: #141D2B">
                <img src="https://ctf.hackthebox.com/storage/ctfs/Exhibition-bg-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="badge bg-danger">Capture The Flag</span>
                    <span class="badge bg-success">Team Up</span>
                    <h5 class="mt-2 card-title fw-bold">Hack The Box Exhibition CTF</h5>
                    <p class="card-text text-white-50"><span><i class="bi bi-calendar3"></i></span>&nbsp;&nbsp;
                        29th August, 2022</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-primary">{{ _('Sign Up') }}</a>
                        <a href="{{ route('competitions.show') }}" class="btn btn-outline-secondary">
                            <span><i class="bi bi-info-circle-fill"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white" style="background-color: #141D2B">
                <img src="https://ctf.hackthebox.com/images/icons/events/card-bg.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white" style="background-color: #141D2B">
                <img src="https://ctf.hackthebox.com/images/icons/events/card-bg.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">Row column</div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">Row column</div>
        </div>
    </div>
</div>


{{-- <livewire:competition-search/>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Competition') }}</div>
<livewire:competition-card />
</div>
</div>
</div>
</div> --}}

{{-- <div class="d-flex justify-content-center">
    {{ $data->links() }}
</div> --}}

@endsection