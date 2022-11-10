<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asetmnj extends Model
{
    use HasFactory;

    protected $primaryKey = 'aset_id';
    protected $table = 'data_aset';
    protected $fillable = [
        'aset_name',
        'aset_tipe',
        'aset_kondisi',
        'nomor_sap',
        'foto_aset1',
        'foto_aset2',
        'foto_aset3',
        'foto_aset4',
        'geo_tag1',
        'geo_tag2',
        'geo_tag3',
        'geo_tag4',
        'aset_luas',
        'tgl_input',
        'tgl_oleh',
        'nilai_residu',
        'nilai_oleh',
        'nomor_bast',
        'masa_susut',
        'keterangan',
        'foto_qr',
        'no_inv',
        'foto_aset_qr',
    ];

}
