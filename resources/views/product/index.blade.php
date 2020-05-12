@extends('layout/main')

@section('title', 'Daftar Produk')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3 text-center">Daftar Produk Hefa Store</h1>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Nomor Seri</th>
                        <th scope="col">Designer</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $p->nama }}</td>
                        <td scope="row">{{ $p->nomor }}</td>
                        <td scope="row">{{ $p->designer }}</td>
                        <td scope="row">{{ $p->harga }}</td>
                        <td scope="row">
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
