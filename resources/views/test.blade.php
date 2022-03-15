@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-12">
        {{-- <div class="card"> --}}
            {{-- <div class="card-header">{{ __('Competition') }}</div> --}}
                <div class="m-3">
                    <a id="card-color" class="card mb-2 text-decoration-none" href="/competitions/">
                        <div class="card-body">
                            <h6 class="card-subtitle text-danger fw-bold mb-2"><span><i class="bi bi-pencil-square"></i></span> Belum Dibuat </h6>
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title text-black fw-bold"> 21 - 25 Feb 2022 </h5>
                                <p class="badge bg-success"> Lorem Ipsum </p>
                            </div>
                            <div>
                                <h6 class="card-subtitle text-muted"> Minggu ke-2 </h6>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-center">
                                <button class="btn btn-primary fw-bold" type="submit"> Buat Laporan Mingguan </button>
                            </li>
                        </ul>
                    </a>
                    <a id="card-color" class="card mb-2 text-decoration-none" href="/competitions/">
                        <div class="card-body">
                            <h6 class="card-subtitle text-primary fw-bold mb-2"><span><i class="bi bi-hourglass-top"></i></span> Menunggu Persetujuan Mentor </h6>
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title text-black fw-bold"> 21 - 25 Feb 2022&nbsp;<span><i class="bi bi-chevron-right fw-bold"></i></span></h5>
                                <p class="badge bg-success"> Lorem Ipsum </p>
                            </div>
                            <div>
                                <h6 class="card-subtitle text-muted"> Minggu ke-2 </h6>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit"> Buat Laporan Mingguan </button>
                            </li>
                        </ul>
                    </a>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>

{{-- <div class="d-flex justify-content-center">
    {{ $data->links() }}
</div> --}}

@endsection
