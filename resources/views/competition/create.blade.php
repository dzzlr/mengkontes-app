@extends('layouts.app')

@section('content')

<div class="row">
    <livewire:auth-sidebar/>
    
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">{{ __('Create Competition') }}</div>
            <div class="card-body">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold"> {{ __('Title') }} </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Your title">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label fw-bold"> {{ __('Slug') }} </label>
                        <input type="text" class="form-control" id="slug" name="slug" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label fw-bold"> {{ __('Date') }} </label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label fw-bold"> {{ __('Time') }} </label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="max_person" class="form-label fw-bold"> {{ __('Max Person') }} </label>
                        <input type="number" class="form-control" id="max_person" name="max_person" min="1" max="10">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold"> {{ __('Description') }} </label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        {{-- <a class="btn btn-warning me-md-2" href=""> {{ __('Edit') }} </a> --}}
                        <a class="btn btn-danger" href="{{ route('competitions.index') }}"> {{ __('Back') }} </a>
                        <button class="btn btn-primary" type="submit"> {{ __('Submit') }} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row justify-content-center"> --}}
{{-- </div> --}}

@endsection
