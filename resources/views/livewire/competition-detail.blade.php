<div class="card-body">
    <div class="d-flex justify-content-between">
        <h5 class="card-title text-black fw-bold"> {{ $title }} </h5>
        <p class="badge bg-success">
            {{ $person > 1 ? $person . ' person / team' : '1 person' }}
        </p>
    </div>
    <div>
        <h6 class="card-subtitle mb-2 text-muted">
            <span><i class="bi bi-calendar-date"></i></span>&nbsp;&nbsp;{{ $date }} </h6>
        <h6 class="card-subtitle mb-2 text-muted">
            <span><i class="bi bi-clock"></i></span>&nbsp;&nbsp;{{ $time . " WIB" }}</h6>

        <h6 class="mt-3 card-title text-black fw-bold"> {{ __('Description') }} </h6>
        <p class="card-text text-black"> {{ $desc }} </p>

        <h6 class="mt-3 card-title text-black fw-bold"> {{ __('Guidebook File') }} </h6>
        <p><a href="" style="text-decoration: none" target="__blank"> {{ __('Download') }} </a></p>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a class="btn btn-danger me-md-2" href="{{ route('competitions') }}"> {{ __('< Back') }} </a>
            <button class="btn btn-primary" type="submit"> {{ __('Register') }} </button>
        </div>
    </div>
</div>