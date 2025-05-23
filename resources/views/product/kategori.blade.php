@extends('layouts.app')

@section('content')
    <h2>Produk Kategori: {{ ucfirst($category) }}</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp {{ number_format($product->price) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
