<div class="m-3">
    @foreach ($data as $key=>$row) 
        <a id="card-color" class="card mb-2 text-decoration-none" href="/competitions/{{ $row->slug }}">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-black fw-bold"> {{ $row->title }} </h5>
                    <p class="badge bg-success">
                        {{ $row->max_person > 1 ? $row->max_person . ' person / team' : '1 person' }}
                    </p>
                </div>
                <div>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $row->date . " | " . $row->time . " WIB"}} </h6>
                    <p class="card-text text-black"> {{ $row->desc }} </p>
                </div>
            </div>
        </a>
    @endforeach
</div>

<div class="px-3 d-flex justify-content-center">
    {{ $data->links() }}
</div>

<style>
    #card-color {
        background-color: #ffffff
    }
    
    #card-color:hover {
        background-color: #e9e9e9;
        transition: 0.3s;
    }
</style>