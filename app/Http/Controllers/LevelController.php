<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use App\Models\LevelModel;
use Yajra\DataTables\Facades\DataTables; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

class LevelController extends Controller
{
    public function index(){

        $breadcrumb = (object) [
            'title' => 'Data Level',
            'list' => ['Home', 'Level']
        ];
        $page = (object) [
            'title' => 'Daftar level yang terdaftar dalam sistem'
        ];
        $activeMenu = 'level';

        $level = LevelModel::all();

        return view('level.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) VALUES (?,?,?)' , ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. jumlah data yang diupdate: ' . $row . ' baris';
        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';
    
        // $data = DB::select('select * from m_level');
        // return view('level' , ['data' => $data]);
    }

    public function list(Request $request)
    {
        $level = LevelModel::select('level_id', 'level_kode', 'level_nama');

        return DataTables::of($level)
            // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addIndexColumn()
            ->addColumn('aksi', function ($level) { // menambahkan kolom aksi
=======
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Level',
            'list' => ['Home', 'Level']
        ];

        $page = (object) [
            'title' => 'Daftar Level yang terdaftar dalam sistem'
        ];

        $activeMenu = 'level'; // set menu yang sedang aktif

        // $level = LevelModel::all(); // ambil data level untuk filter level
        return view('level.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    // Ambil data level dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        // $level = LevelModel::select('level_id', 'level_kode', 'level_nama');

        // // ftidak perlu ada filter pada level
        // // if ($request->level_id) {
        // //     $level->where('level_id', $request->level_id);
        // // }
        
        // return DataTables::of($level)
        //     // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
        //     ->addIndexColumn()
        //     ->addColumn('aksi', function ($level) { // menambahkan kolom aksi
        //         $btn = '<a href="' . url('/level/' . $level->level_id) . '" class="btn btn-info btn-sm">Detail</a> ';
        //         $btn .= '<a href="' . url('/level/' . $level->level_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
        //         $btn .= '<form class="d-inline-block" method="POST" action="' .
        //             url('/level/' . $level->level_id) . '">'
        //             . csrf_field() . method_field('DELETE') .
        //             '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
        //             (\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
        //         return $btn;
        //     })
        //     ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
        //     ->make(true);

        $level = LevelModel::select('level_id', 'level_kode', 'level_nama');
        // Filter data level berdasarkan level_id
        // if ($request->level_id) {
        //     $level->where('level_id', $request->level_id);
        // }
        return DataTables::of($level)
            ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex) 
            ->addColumn('aksi', function ($level) { // menambahkan kolom aksi 
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
                $btn = '<a href="' . url('/level/' . $level->level_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<button onclick="modalAction(\'' . url('/level/' . $level->level_id . '/edit_ajax') . '\')" class="btn btn-warning btn-sm">Edit</button> ';
                $btn .= '<button onclick="modalAction(\'' . url('/level/' . $level->level_id . '/delete_ajax') . '\')" class="btn btn-danger btn-sm">Hapus</button> ';
                return $btn;
            })
<<<<<<< HEAD
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([

            'level_kode' => 'required|string|min:3|max:10|unique:m_level,level_kode', // level_kode harus diisi, berupa string, minimal 3 karakter, maks 10 dan bernilai unik
            'level_nama' => 'required|string|max:100' //nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        LevelModel::create([
            'level_kode'  => $request->level_kode,
            'level_nama'  => $request->level_nama
        ]);
        return redirect('/level')->with('success', 'Data level berhasil disimpan');
    }

=======
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html 
            ->make(true);
    }

    // Menampilkan halaman form tambah level 
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Level',
            'list' => ['Home', 'Level', 'Tambah']
        ];
        $page = (object) [
            'title' => 'Tambah Level baru'
        ];
<<<<<<< HEAD
=======

>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
        $activeMenu = 'level'; // set menu yang sedang aktif
        return view('level.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

<<<<<<< HEAD
    public function show(string $id)
    {
        $level = LevelModel::find($id);
        $breadcrumb = (object) ['title' => 'Detail Level', 'list' => ['Home', 'Level', 'Detail']];
        $page = (object) ['title' => 'Detail Level'];
        $activeMenu = 'level'; // set menu yang sedang aktif
        return view('level.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    public function edit(string $id)
    {
        $level = LevelModel::find($id);
        $breadcrumb = (object) [
            'title' => 'Edit Level',
            'list' => ['Home', 'Level', 'Edit']
        ];
        $page = (object) [
            "title" => 'Edit Level'
        ];
        $activeMenu = 'level'; // set menu yang sedang aktif
        return view('level.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            // levelname harus diisi, berupa string, minimal 3 karakter,
            // dan bernilai unik di tabel_level kolom levelname kecuali untuk level dengan id yang sedang diedit
            'level_kode' => 'required|string|min:3|max:10|unique:m_level,level_kode,' . $id . ',level_id',
            'level_nama' => 'required|string|max:100' // nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        LevelModel::find($id)->update([
            'level_kode'  => $request->level_kode,
            'level_nama'  => $request->level_nama
        ]);
        return redirect('/level')->with("success", "Data level berhasil diubah");
    }

    public function destroy(string $id)
    {
        $check = LevelModel::find($id);
        if (!$check) {      // untuk mengecek apakah data level dengan id yang dimaksud ada atau tidak
            return redirect('/level')->with('error', 'Data level tidak ditemukan');
        }
        try {
            LevelModel::destroy($id); // Hapus data level
            return redirect('/level')->with('success', 'Data level berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
            return redirect('/level')->with('error', 'Data level gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
=======
    public function create_ajax()
    {
        return view('level.create_ajax');
    }


    // Menyimpan data level baru
    public function store(Request $request)
    {
        $request->validate([
            
            'level_kode'=> 'required|string|min:3|max:10|unique:m_level,level_kode',// level_kode harus diisi, berupa string, minimal 3 karakter, maks 10 dan bernilai unik
            'level_nama'=> 'required|string|max:100' //nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        LevelModel::create([
            'level_kode'  => $request->level_kode,
            'level_nama'  => $request->level_nama
        ]);
        return redirect('/level')->with('success', 'Data level berhasil disimpan');
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    }

    public function store_ajax(Request $request)
    {
        // cek apakah request berupa ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'level_kode'    => 'required|string|min:3|unique:m_level,level_kode',
                'level_nama'    => 'required|string|max:100',
            ];
            // use Illuminate\Support\Facades\Validator;
            $validator = Validator::make($request->all(), $rules);
<<<<<<< HEAD
=======

>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
            if ($validator->fails()) {
                return response()->json([
                    'status'    => false, // response status, false: error/gagal, true: berhasil
                    'message'   => 'Validasi Gagal',
                    'msgField'  => $validator->errors(), // pesan error validasi
                ]);
            }
            LevelModel::create($request->all());
            return response()->json([
                'status'    => true,
                'message'   => 'Data level berhasil disimpan'
            ]);
        }
        redirect('/');
    }

<<<<<<< HEAD
=======
    // Menampilkan detail level
    public function show(string $id)
    {
        $level = LevelModel::find($id);
        $breadcrumb = (object) ['title' => 'Detail Level', 'list' => ['Home', 'Level', 'Detail']];
        $page = (object) ['title' => 'Detail Level'];
        $activeMenu = 'level'; // set menu yang sedang aktif
        return view('level.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    // Menampilkan halaman fore edit level 
    public function edit(string $id)
    {
        $level = LevelModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Level',
            'list' => ['Home', 'Level', 'Edit']
        ];

        $page = (object) [
            "title" => 'Edit Level'
        ];

        $activeMenu = 'level'; // set menu yang sedang aktif
        return view('level.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    // Menampilkan halaman form edit level ajax
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    public function edit_ajax(string $id)
    {
        $level = LevelModel::find($id);
        return view('level.edit_ajax', ['level' => $level]);
    }

<<<<<<< HEAD
=======
    // Menyimpan perubahan data level
    public function update(Request $request, string $id)
    {
        $request->validate([
            // levelname harus diisi, berupa string, minimal 3 karakter,
            // dan bernilai unik di tabel_level kolom levelname kecuali untuk level dengan id yang sedang diedit
            'level_kode'=> 'required|string|min:3|max:10|unique:m_level,level_kode,'. $id . ',level_id',
            'level_nama'=> 'required|string|max:100' // nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        LevelModel::find($id)->update([
            'level_kode'  => $request->level_kode,
            'level_nama'  => $request->level_nama
        ]);
        return redirect('/level')->with("success", "Data level berhasil diubah");
    }

>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    public function update_ajax(Request $request, $id)
    {
        // cek apakah request dari ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'level_kode' => 'required|max:20|unique:m_level,level_kode,' . $id . ',level_id',
                'level_nama' => 'required|max:100'
            ];
            // use Illuminate\Support\Facades\Validator;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false, // respon json, true: berhasil, false: gagal
                    'message' => 'Validasi gagal.',
                    'msgField' => $validator->errors() // menunjukkan field mana yang error
                ]);
            }
            $check = LevelModel::find($id);
            if ($check) {
                $check->update($request->all());
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil diupdate'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        }
        return redirect('/');
    }

<<<<<<< HEAD
=======

>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    public function confirm_ajax(string $id)
    {
        $level = LevelModel::find($id);
        return view('level.confirm_ajax', ['level' => $level]);
    }
<<<<<<< HEAD
=======

>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    public function delete_ajax(Request $request, $id)
    {
        // cek apakah request dari ajax
        if ($request->ajax() || $request->wantsJson()) {
            $level = LevelModel::find($id);
            if ($level) {
                $level->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        }
        return redirect('/');
<<<<<<< HEAD
=======
    }


    // Menghapus data level
    public function destroy(string $id)
    {
        $check = LevelModel::find($id);
        if (!$check) {      // untuk mengecek apakah data level dengan id yang dimaksud ada atau tidak
            return redirect('/level')->with('error', 'Data level tidak ditemukan');
        }

        try {
            LevelModel::destroy($id); // Hapus data level
            return redirect('/level')->with('success', 'Data level berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error

            return redirect('/level')->with('error', 'Data level gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
    }
}