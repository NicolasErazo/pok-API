@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h6> Observaciones: Solamente se puede buscar por ID menor que 905 y nombre exacto de pokemon</h6>
        <div class="col-md-12 text-center">
            <form action="/home" method="POST" class="d-flex">
                @csrf
                <input type="text" class="form-control me-2" name="pokemon" placeholder="Ingrese Id o nombre de Pokemon a buscar...">
                <button type="submit" class="btn btn-success">Buscar</button>
            </form>
            <br>
            <div class="card" style="width: 18rem;">
                @if(isset($foto))
                <img class="card-img-top" src="{{ $foto }}" alt="Card image cap">
                @else
                    <p></p>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Nombre: <strong>{{ $name }}</strong></h5>
                    <form action="/home/details" method="POST">
                        @csrf
                        <input type="text" name="pokemon" value="{{ $name }}" hidden>
                        <button type="submit" class="btn btn-primary">Ver mas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection