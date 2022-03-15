@extends('layouts.app')

@section('content')

<livewire:competition-search/>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Competition') }}</div>
                <livewire:competition-card/>
            </div>
        </div>
    </div>
</div>

{{-- <div class="d-flex justify-content-center">
    {{ $data->links() }}
</div> --}}

@endsection
