@extends('layouts.app')

@section('content')

<div class="row">
    <livewire:auth-sidebar/>

    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">{{ __('Competition') }}</div>
                <div class="m-3">
                    <a class="btn btn-sm btn-primary mb-2 fw-bold" href="{{ route('competitions.create') }}">
                        <span><i class="bi bi-plus-lg fw-bold"></i>
                        </span>&nbsp;{{ __('Add Competition') }}
                    </a>

                    <div class="card">
                        <div class="card-header row">
                            <div class="col-1">Id</div>
                            <div class="col-2">Title</div>
                            <div class="col-2">Slug</div>
                            <div class="col-2">Date</div>
                            <div class="col-1">Time</div>
                            <div class="col-1">Max. Person</div>
                            <div class="col-2">Action</div>
                        </div>
                        @foreach ($data as $key=>$row)
                            <div class="card-body row">
                                <div class="col-1">{{ $row->id }}</div>
                                <div class="col-2">{{ $row->title }}</div>
                                <div class="col-2">{{ $row->slug }}</div>
                                <div class="col-2">{{ $row->date }}</div>
                                <div class="col-1">{{ $row->time }}</div>
                                <div class="col-1">{{ $row->max_person }}</div>
                                <div class="col-3">
                                    <a class="btn btn-sm btn-info me-1 mb-1" href="{{ 'competitions/view/' . $row->slug }}"> {{ __('View') }} </a>
                                    <a class="btn btn-sm btn-primary me-1 mb-1" href="{{ 'competitions/edit/' . $row->slug }}"> {{ __('Edit') }} </a>
                                    <button class="btn btn-sm btn-danger me-1 mb-1" type="submit">Delete</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Max. Person</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key=>$row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->time }}</td>
                                <td>{{ $row->max_person }}</td>
                                <td class="d-flex flex-wrap">
                                    <a class="btn btn-sm btn-info me-1 mb-1" href="{{ 'competitions/view/' . $row->slug }}"> {{ __('View') }} </a>
                                    <a class="btn btn-sm btn-primary me-1 mb-1" href="{{ 'competitions/edit/' . $row->slug }}"> {{ __('Edit') }} </a>
                                    <button class="btn btn-sm btn-danger me-1 mb-1" type="submit">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> --}}
                </div> 
            </div>
        </div>
    </div>

</div>

{{-- <div class="d-flex justify-content-center">
    {{ $data->links() }}
</div> --}}

@endsection
