@extends('layout/main')

@section('title', 'Detail Produk')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Produk Hefa Store</h1>
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->nomor }}</h6>
                    <p class="card-text">{{ $product->designer }}</p>
                    <p class="card-text">{{ $product->harga }}</p>

                    <a href="/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>

                    <form action="/products/{{$product->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/products" class="card-link">kembali</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
