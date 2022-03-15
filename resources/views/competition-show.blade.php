@extends('layouts.app')

@section('content')

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
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
                <livewire:competition-detail
                    title="{{ $data->title }}"
                    date="{{ $data->date }}"
                    time="{{ $data->time }}"
                    desc="{{ $data->desc }}"
                    person="{{ $data->max_person }}"
                />
            </div>
        </div>
    </div>
</div>

@endsection
