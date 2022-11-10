<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afdelling extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'afdeling_id';
    protected $table = 'afdeling';
    protected $fillable = [
        'afdeling_desc'
    ];
}
