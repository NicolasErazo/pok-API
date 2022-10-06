@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center text-center">
            <br>
            <div class="card" style="width: 40rem;">
                <br>
                <h5 class="card-title text-uppercase"><strong>{{ $name }}</strong></h5>
                <div class="row text-center">
                    @if(isset($foto))
                    <div class="col">
                        <img class="card-img-top" src="{{ $foto }}" alt="Card image cap">
                    </div>
                    @else
                    <div class="col">
                        <p></p>
                    </div>
                    @endif
                    @if(isset($foto2))
                    <div class="col">
                        <img class="card-img-top" src="{{ $foto2 }}" alt="Card image cap">
                    </div>
                    @else
                    <div class="col">
                        <p></p>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <h4 class="card-text">Id: <strong>{{ $id }}</strong></h4>
                    <h4 class="card-text">Habilidades: <strong>{{ $abilities }}</strong></h4>
                    <h4 class="card-text">Tipo: <strong>{{ $type }}</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection