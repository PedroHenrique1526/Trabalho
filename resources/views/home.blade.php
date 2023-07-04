@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="background: #a9722d; padding-top: 0.7rem; padding-bottom: 0.7rem">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/pizza1.jpg') }}" class="d-block w-100" alt="Pizza 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/pizza2.jpg') }}" class="d-block w-100" alt="Pizza 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/pizza3.jpg') }}" class="d-block w-100" alt="Pizza 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>


                <div class="text-center mt-4">
                    <h1 class="display-4">Bem-vindo à PanPizzas</h1>
                    <p class="lead">Temos as melhores pizzas para você!</p>
                    <a href="{{ route('show') }}" class="btn btn-lg" style="background: #5d6fb7;">Ver
                        Cardápio</a>
                </div>

            </div>
        </div>
    </div>
@endsection
