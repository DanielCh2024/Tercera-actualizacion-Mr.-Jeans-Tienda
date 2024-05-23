@extends('layouts.app')
@section("titulo","Consultar productos tienda")
@section('Contenido')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($mercancias as $mercancia)
                <div class="card w-60 bg-base-500 shadow-xl">
                    <figure><img src="https://th.bing.com/th/id/OIP.DZirF7j2z__pJg-hf9XH0wHaLI?pid=ImgDet&w=185&h=277&c=7" alt="Shoes" /></figure>
                    <div class="card-body text-orange-400">
                    <h2 class="card-title">
                        {{ $mercancia["nombre"] }}
                        <div class="badge badge-secondary">15% dto</div>
                    </h2>
                    <p>Excelente calidad a bajos precios</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline text-orange-600">${{ $mercancia["valor"] }}</div> 
                        <div class="badge badge-outline text-green-600">Añadir al Carrito</div>
                    </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection