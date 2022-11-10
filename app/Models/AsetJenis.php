<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetJenis extends Model
{
    use HasFactory;

    protected $primaryKey = 'aset_jenis_id';
    protected $table = 'aset_jenis';
    protected $fillable = [
        'aset_jenis_desc'
    ];

}
