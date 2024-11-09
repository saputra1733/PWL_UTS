@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('barang') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Kategori</label>
                    <div class="col-11">
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">- Pilih Kategori -</option>
<<<<<<< HEAD
                            @foreach($kategori as $item)
=======
                            @foreach ($kategori as $item)
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                                <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
<<<<<<< HEAD
                    <label class="col-1 control-label col-form-label">Kode Barang</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="barang_kode" name="barang_kode" value="{{ old('barang_kode') }}" required>
=======
                    <label class="col-1 control-label col-form-label">Barang Kode</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="barang_kode" name="barang_kode"
                            value="{{ old('barang_kode') }}" required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        @error('barang_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Barang</label>
                    <div class="col-11">
<<<<<<< HEAD
                        <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ old('barang_nama') }}" required>
=======
                        <input type="text" class="form-control" id="barang_nama" name="barang_nama"
                            value="{{ old('barang_nama') }}" required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        @error('barang_nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Harga Beli</label>
                    <div class="col-11">
<<<<<<< HEAD
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}" required>
=======
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}"
                            required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        @error('harga_beli')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Harga Jual</label>
                    <div class="col-11">
<<<<<<< HEAD
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}" required>
=======
                        <input type="harga_jual" class="form-control" id="harga_jual" name="harga_jual" required>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                        @error('harga_jual')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush