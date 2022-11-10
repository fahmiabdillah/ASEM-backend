<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPosisi extends Model
{
    use HasFactory;

    protected $table = 'status_posisi';
    protected $primaryKey = 'sp_id';
    protected $fillable = [
        'sp_desc'
    ];
}
