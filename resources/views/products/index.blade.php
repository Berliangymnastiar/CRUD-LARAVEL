@extends('layout/main')

@section('title', 'Detail Produk')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Produk Hefa Store</h1>

            <a href="/products/create" class="btn btn-primary my-3">Tambah Data Produk</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach ($products as $product)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $product->nama }}
                    <a href="/products/{{$product->id}}" class="badge badge-info">Detail</a>
                    @endforeach
                </ul>
        </div>
    </div>
</div>
@endsection
