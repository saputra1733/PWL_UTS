<?php
<<<<<<< HEAD

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = 'm_kategori'; // Ganti dengan nama tabel yang sesuai, jika berbeda
    // Mendefinisikan primary key dari tabel kategori
    protected $primaryKey = 'kategori_id'; 
    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'kategori_kode', 
        'kategori_nama'
    ];
    // Hubungan dengan model lain (jika ada)
    public function barangs()
    {
        return $this->hasMany(BarangModel::class, 'kategori_id', 'kategori_id');
    }
}
=======
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'm_kategori'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'kategori_id'; // Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['kategori_kode','kategori_nama'];
    public function barang():HasMany
    {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }
}
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
