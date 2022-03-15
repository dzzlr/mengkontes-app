<a id="card-color" class="card mb-2 text-decoration-none" href="/competitions/{{ $slug }}">
    <div class="card-body">
        <h6 class="card-subtitle text-primary fw-bold mb-2"><span><i class="bi bi-pencil-square"></i></span> Edit </h6>
        <div class="d-flex justify-content-between">
            <h5 class="card-title text-black fw-bold"> {{ $title }} </h5>
            <p class="badge bg-success">
                {{-- {{ $max_person > 1 ? $max_person . ' person / team' : '1 person' }} --}}
            </p>
        </div>
        <div>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $date . " | " . $time . " WIB"}} </h6>
            <p class="card-text text-black"> {{ $desc }} </p>
        </div>
    </div>
</a>

<style>
    #card-color {
        background-color: #ffffff
    }
    
    #card-color:hover {
        background-color: #e9e9e9;
        transition: 0.3s;
    }
</style>