@extends('layouts.app')

@section('title')
    <title>Viajes personalizados</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')

    <main class="container">

        <span class="anchor" id="services"></span>
        <div class="row productos">
            <article class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.discover') }}</span></h2>
                <p class="titulo">{{ __('lang.product1_tittle') }}</p>
                <p>{{ __('lang.product1_description_1') }}</p>
            </article>

            <!-- <div class="col-md-6 col-12"> -->
            <div class="row justify-content-center">
                <article class="col-12 col-md-6   py-1">
                    <figure class="producto">
                        <img src="{{ asset('img/products/pr-1.jpg') }}" class="img-fluid" alt="">

                    </figure>
                </article>
                <!-- </div> -->
            </div>
        </div>
    </main>

@stop
