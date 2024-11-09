@extends('layouts.template')
@section('content')
<<<<<<< HEAD
=======
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
data-keyboard="false" data-width="75%" aria-hidden="true"></div>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('supplier/create') }}">Tambah</a>
<<<<<<< HEAD
            </div>
        </div>
        <div class="card-body">
            @if (@session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                <thead>
                    <tr>
                        <th >ID</th>
                        <th >Kode Supplier</th>
                        <th >Nama Supplier</th>
                        <th >Alamat Supplier</th> <!-- Tambahkan kolom untuk alamat -->
                        <th >Aksi</th>
=======
                <button onclick="modalAction('{{ url('/supplier/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah
                    Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            {{-- tidak menggunakan filter untuk supplier --}}
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="supplier_id" name="supplier_id" required>
                                <option value="">- Semua -</option>
                                @foreach ($supplier as $item)
                                    <option value="{{ $item->supplier_id }}">{{ $item->supplier_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">supplier Pengguna</small>
                        </div>
                    </div>
                </div>
            </div> --}}
            <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Supplier Kode</th>
                        <th>Nama Supplier</th>
                        <th>Supplier Alamat</th>
                        <th>Aksi</th>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
<<<<<<< HEAD
        $(document).ready(function() {
            var dataUser = $('#table_user').DataTable({
=======
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        var datasupplier;
        $(document).ready(function() {
            datasupplier = $('#table_supplier').DataTable({
                // serverSide: true, jika ingin menggunakan server side processing
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                serverSide: true,
                ajax: {
                    "url": "{{ url('supplier/list') }}",
                    "dataType": "json",
<<<<<<< HEAD
                    "type": "POST",
                    "data": function (d){
                        d.supplier_id = $('#supplier_id').val();
                    }
                },
                columns: [{
=======
                    "type": "POST"
                    // tidak perlu data dibawah karena tidak ada filter
                    // "data": function (d) {
                    //     d.supplier_id = $('#supplier_id').val();
                    // }
                },
                columns: [{
                    // nomor urut dari laravel datatable addIndexColumn()
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "supplier_kode",
                    className: "",
<<<<<<< HEAD
                    orderable: true,
=======
                    // orderable: true, jika ingin kolom ini bisa diurutkan
                    orderable: true,
                    // searchable: true, jika ingin kolom ini bisa dicari
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                    searchable: true
                }, {
                    data: "supplier_nama",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
<<<<<<< HEAD
                    data: "supplier_alamat", // Kolom untuk alamat
                    className: "",
                    orderable: true,
                    searchable: true
=======
                    data: "supplier_alamat",
                    className: "",
                    orderable: false,
                    searchable: false
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                }, {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false
                }]
<<<<<<< HEAD
            });
            $('#level_id').on('change',function(){
                dataUser.ajax.reload();
            })
=======
            })
            // $('#supplier_id').on('change',function(){
            //     datasupplier.ajax.reload();
            // });
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
        });
    </script>
@endpush