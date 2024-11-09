@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
<<<<<<< HEAD
            <h3 class="card-title">Edit Kategori</h3>
=======
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
        </div>
        <div class="card-body">
            @empty($kategori)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('kategori') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
<<<<<<< HEAD
                <form method="POST" action="{{ url('/kategori/'.$kategori->kategori_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kode Kategori</label>
                        <div class="col-11">
                            <input type="text" class="form-control" name="kategori_kode" value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
=======
                <form method="POST" action="{{ url('/kategori/' . $kategori->kategori_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh
                    method PUT -->
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kategori Kode</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="kategori_kode" name="kategori_kode"
                                value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                            @error('kategori_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama Kategori</label>
                        <div class="col-11">
<<<<<<< HEAD
                            <input type="text" class="form-control" name="kategori_nama" value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
=======
                            <input type="text" class="form-control" id="kategori_nama" name="kategori_nama"
                                value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                            @error('kategori_nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('kategori') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
@push('css')
@endpush
@push('js')
@endpush
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
