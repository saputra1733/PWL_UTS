<?php

namespace App\Models;

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
