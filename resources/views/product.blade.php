@extends('layout/main')

@section('title', 'Product')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Product, {{ $product }}</h1>
        </div>
    </div>
</div>
@endsection
