<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dekan extends Model
{
    protected $fillable = [
        'name', 
        'bidang', 
        'email', 
        'fakultas_id'
    ];

    public function fakultas(): HasMany
    {
        return $this->hasMany(Fakultas::class);
    }
}
