@extends('layouts.app')

@section('content')

<div class="container" style="width: 50rem">
    <div class="row justify-content-center">
        <h4>Busca tu Pokemon:</h4>
        <form action="/home/pokemon" method="POST" class="d-flex">
            @csrf
            <input type="text" class="form-control me-2" name="pokemon" placeholder="Ingrese Id o nombre de Pokemon a buscar...">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <h4 class="text-center mt-2">Lista de Pokemones</h4>
        @foreach($pokemones as $pokemon)
        <div class="col-md-6 text-center">
            <div class="card mt-2">
                <div class="card-body">
                    @if(isset($pokemon->sprites->front_default))
                    <img class="card-img-top" src="{{ $pokemon->sprites->front_default }}" alt="Card image cap">
                    @else
                    <div class="col">
                        <p></p>
                    </div>
                    @endif
                    <h5 class="card-title">Nombre: <strong>{{ $pokemon->name }}</strong></h5>
                    <form action="/home/details" method="POST">
                        @csrf
                        <input type="text" name="pokemon" value="{{ $pokemon->id }}" hidden>
                        <button type="submit" class="btn btn-primary">Ver mas</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="col-md-12 text-center mt-2">
    <div class="d-flex justify-content-center">
    <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="10" hidden><button class="page-link">1</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="20" hidden><button class="page-link">2</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="30" hidden><button class="page-link">3</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="40" hidden><button class="page-link">4</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="50" hidden><button class="page-link">5</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="60" hidden><button class="page-link">6</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="70" hidden><button class="page-link">7</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="80" hidden><button class="page-link">8</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="90" hidden><button class="page-link">9</button></li>
                </ul>
            </nav>
        </form>
        <form action="/home" method="POST">
            @csrf
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><input name="limit" type="number" value="100" hidden><button class="page-link">10</button></li>
                </ul>
            </nav>
        </form>
        </div>
    </div>
</div>


@endsection