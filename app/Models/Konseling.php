<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Konseling extends Model
{
    protected $guarded = ['id'];

    public function konselor()
    {
        return $this->belongsTo(Konselor::class);
    }

    public function pengajuan() : BelongsTo {
        return $this->belongsTo(PengajuanKonseling::class, 'id_pengajuan');
    }
}
