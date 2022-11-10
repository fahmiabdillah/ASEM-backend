<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubUnit extends Model
{
    use HasFactory;

    protected $table = 'sub_unit';
    protected $primaryKey = 'sub_unit_id';
    protected $fillable = [
        'sub_unit_desc'
    ];
}
