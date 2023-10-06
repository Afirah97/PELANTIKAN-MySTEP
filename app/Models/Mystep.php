<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mystep extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'gred', 'gaji', 'tarikh_masuk', 'tarikh_tamat', 'tempoh'];
}
