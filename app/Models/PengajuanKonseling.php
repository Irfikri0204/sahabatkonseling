<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PengajuanKonseling extends Model
{
    protected $guarded = ['id'];

    public function konseling() :HasMany
    {
        return $this->hasMany(Konseling::class, 'id_pengajuan');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pengajuan) {
            if (empty($pengajuan->kode_konseling)) {
                $pengajuan->kode_konseling = Str::upper(Str::random(6));
            }
        });
    }

    public function konselor()
{
    return $this->hasOneThrough(
        \App\Models\Konselor::class,
        \App\Models\Konseling::class,
        'id_pengajuan', // foreign key di tabel konseling yang mengarah ke pengajuan_konseling
        'id',            // primary key di tabel konselor
        'id',            // primary key di tabel pengajuan_konseling
        'id_konselor'    // foreign key di tabel konseling yang mengarah ke konselor
    );
}
}
