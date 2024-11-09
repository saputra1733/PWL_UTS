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
<<<<<<< HEAD
                <a href="{{ url('user') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/supplier/' . $supplier->supplier_id) }}" class="formhorizontal">
                    @csrf
                    {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh method PUT -->
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kode supplier</label>
=======
                <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/supplier/' . $supplier->supplier_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh
                    method PUT -->
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Supplier Kode</label>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        <div class="col-11">
                            <input type="text" class="form-control" id="supplier_kode" name="supplier_kode"
                                value="{{ old('supplier_kode', $supplier->supplier_kode) }}" required>
                            @error('supplier_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
<<<<<<< HEAD
                        <label class="col-1 control-label col-form-label">Nama supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="supplier_nama" name="supplier_nama"
                                value="{{ old('supplier_nama', $supplier->supplier_nama) }}" required>
                            @error('nama')
=======
                        <label class="col-1 control-label col-form-label">Nama Supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="supplier_nama" name="supplier_nama"
                                value="{{ old('supplier_nama', $supplier->supplier_nama) }}" required>
                            @error('supplier_nama')
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
<<<<<<< HEAD
                        <label class="col-1 control-label col-form-label">Alamat supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="supplier_alamat" name="supplier_alamat"
                                value="{{ old('supplier_alamat', $supplier->supplier_alamat) }}" required>
                            @error('nama')
=======
                        <label class="col-1 control-label col-form-label">Alamat Supplier</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="supplier_alamat" name="supplier_alamat"
                                value="{{ old('supplier_alamat', $supplier->supplier_alamat) }}" required>
                            @error('supplier_alamat')
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('supplier') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection
@push('css')
@endpush
<<<<<<< HEAD
@push('js')
=======
@push('js')
@endpush
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
