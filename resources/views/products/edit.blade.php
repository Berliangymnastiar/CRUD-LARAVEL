@extends('layout/main')

@section('title', 'Form Ubah Data Produk')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Produk</h1>
        
        <form method="post" action="/products/{{ $product->id }}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama"> Nama produk</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama produk" value="{{ $product->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor">Nomor seri produk</label> 
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name ="nomor" placeholder="Masukkan nomor seri produk" value="{{ $product->nomor }}">
                        @error('nomor')
                            <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="designer">Designer produk</label>
                        <input type="text" class="form-control @error('designer') is-invalid @enderror" id="designer" name ="designer" placeholder="Masukkan nama designer" value="{{ $product->designer }}">
                        @error('designer')
                            <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga produk</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name ="harga" placeholder="Masukkan harga" value="{{ $product->harga }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>     
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Produk</button>
            </form>

        </div>
    </div>
</div>
@endsection
