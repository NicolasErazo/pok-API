@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <h1 class="text-center">Tu Pokemon</h1>
        <div class="col d-flex justify-content-center text-center">
            <br>
            <div class="card" style="width: 22rem;">
                @if(isset($foto))
                <img class="card-img-top" src="{{ $foto }}" alt="Card image cap">
                @else
                <div class="col">
                    <p></p>
                </div>
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