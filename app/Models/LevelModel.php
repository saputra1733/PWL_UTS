<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $primaryKey = 'level_id';
    protected $table = 'm_level';
    protected $fillable = ['level_id','level_kode','level_nama'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class);
    }
}
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'level_id'; // Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['level_kode','level_nama'];

    public function user():HasMany
    {
   return $this->hasMany(UserModel::class, 'user_id', 'user_id');
    }
}
>>>>>>> 34e93d18b8ffcb46cfbe58b58acb019f067986c6
