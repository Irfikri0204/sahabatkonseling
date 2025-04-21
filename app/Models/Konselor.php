<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Konselor extends Model
{
    protected $table = 'konselors';

    protected $guarded = ['id'];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }
}
