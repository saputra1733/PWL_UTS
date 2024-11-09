@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($supplier)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $supplier->supplier_id }}</td>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <th>Kode supplier</th>
                        <td>{{ $supplier->supplier_kode }}</td>
                    </tr>
                    <tr>
                        <th>Nama supplier</th>
                        <td>{{ $supplier->supplier_nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat supplier</th>
=======
                        <th>Supplier Kode</th>
                        <td>{{ $supplier->supplier_kode }}</td>
                    </tr>
                    <tr>
                        <th>Nama Supplier</th>
                        <td>{{ $supplier->supplier_nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat Supplier</th>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        <td>{{ $supplier->supplier_alamat }}</td>
                    </tr>
                </table>
            @endempty
<<<<<<< HEAD
        <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
=======
            <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
@endsection
@push('css')
@endpush
@push('js')
@endpush