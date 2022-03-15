@extends('layouts.app')

@section('content')

<div class="row">
    <livewire:auth-sidebar/>
    
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">{{ __('View Competition') }}</div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-black fw-bold"> {{ $data->title }} </h5>
                    <p class="badge bg-success">
                        {{ $data->person > 1 ? $data->person . ' person / team' : '1 person' }}
                    </p>
                </div>
                <div>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <span><i class="bi bi-calendar-date"></i></span>&nbsp;&nbsp;{{ $data->date }} </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <span><i class="bi bi-clock"></i></span>&nbsp;&nbsp;{{ $data->time . " WIB" }}</h6>
            
                    <h6 class="mt-3 card-title text-black fw-bold"> {{ __('Description') }} </h6>
                    <p class="card-text text-black"> {{ $data->desc }} </p>
            
                    <h6 class="mt-3 card-title text-black fw-bold"> {{ __('Guidebook File') }} </h6>
                    <p><a href="" style="text-decoration: none" target="__blank"> {{ __('Download') }} </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row justify-content-center"> --}}
{{-- </div> --}}

@endsection
