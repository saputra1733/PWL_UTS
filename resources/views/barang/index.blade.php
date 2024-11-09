@extends('layouts.template')
@section('content')
<<<<<<< HEAD
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('barang/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">- Semua -</option>
                            @foreach($kategori as $item)
                                <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Kategori Barang</small>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_barang">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
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
    $(document).ready(function() {
        var dataBarang = $('#table_barang').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('barang/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d.kategori_id = $('#kategori_id').val();
                }
            },
            columns: [
                {
                    data: "DT_RowIndex", 
                    className: "text-center",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "barang_kode", 
                    className: "",
                    orderable: true, 
                    searchable: true
                },
                {
                    data: "barang_nama", 
                    className: "",
                    orderable: true, 
                    searchable: true
                },
                {
                    data: "kategori.kategori_nama", 
                    className: "",
                    orderable: false, 
                    searchable: false
                },
                {
                    data: "harga_beli", 
                    className: "text-right",
                    orderable: true, 
                    searchable: true
                },
                {
                    data: "harga_jual", 
                    className: "text-right",
                    orderable: true, 
                    searchable: true
                },
                {
                    data: "aksi", 
                    className: "",
                    orderable: false, 
                    searchable: false
                }
            ]
        });
        $('#kategori_id').on('change', function() {
            dataBarang.ajax.reload();
        });
    });
</script>
=======
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar barang</h3>
            <div class="card-tools">
                <a href="{{ url('/barang/create') }}" class="btn btn-primary">Tambah
                    Data</a>
                <button onclick="modalAction('{{ url('/barang/create_ajax') }}')" class="btn btn-success">Tambah Data
                    (Ajax)</button>
            </div>
        </div>
        <div class="card-body">
            <!-- untuk Filter data -->
            <div id="filter" class="form-horizontal filter-date p-2 border-bottom mb-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-sm row text-sm mb-0">
                            <label for="filter_date" class="col-md-1 col-formlabel">Filter</label>
                            <div class="col-md-3">
                                <select name="filter_kategori" class="form-control formcontrol-sm filter_kategori">
                                    <option value="">- Semua -</option>
                                    @foreach ($kategori as $l)
                                        <option value="{{ $l->kategori_id }}">{{ $l->kategori_nama }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Kategori Barang</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-sm table-striped table-hover" id="table-barang">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Kode Barang</th>
                        <th>Harga
                            Beli</th>
                        <th>Harga Jual</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false"
        data-width="75%"></div>
@endsection
@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        var tableBarang;
        $(document).ready(function() {
            tableBarang = $('#table-barang').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ url('barang/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.filter_kategori = $('.filter_kategori').val();
                    }
                },
                columns: [{
                    data: "kategori.kategori_id",
                    className: "text-center",
                    width: "5%",
                    orderable: false,
                    searchable: false
                }, {
                    data: "barang_kode",
                    className: "",
                    width: "10%",
                    orderable: true,
                    searchable: true
                }, {
                    data: "barang_nama",
                    className: "",
                    width: "37%",
                    orderable: true,
                    searchable: true,
                }, {
                    data: "harga_beli",
                    className: "",
                    width: "10%",
                    orderable: true,
                    searchable: false,
                    render: function(data, type, row) {
                        return new Intl.NumberFormat('id-ID').format(data);
                    }
                }, {
                    data: "harga_jual",
                    className: "",
                    width: "10%",
                    orderable: true,
                    searchable: false,
                    render: function(data, type, row) {
                        return new Intl.NumberFormat('id-ID').format(data);
                    }
                }, {
                    data: "kategori.kategori_nama",
                    className: "",
                    width: "14%",
                    orderable: true,
                    searchable: false
                }, {
                    data: "aksi",
                    className: "text-center",
                    width: "14%",
                    orderable: false,
                    searchable: false
                }]
            });
            $('#table-barang_filter input').unbind().bind().on('keyup', function(e) {
                if (e.keyCode == 13) { // enter key
                    tableBarang.search(this.value).draw();
                }
            });
            $('.filter_kategori').change(function() {
                tableBarang.draw();
            });
        });
    </script>
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
@endpush