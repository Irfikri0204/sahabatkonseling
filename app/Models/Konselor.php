<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Konselor extends Model
{
    protected $table = 'konselors';

    protected $guarded = ['id'];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function konselings() :HasMany
    {
        return $this->hasMany(Konseling::class, 'id_konselor');
    }
}
