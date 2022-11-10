<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetKode extends Model
{
    use HasFactory;

    protected $primaryKey = 'aset_kode_id';
    protected $table = 'aset_kode';
}
