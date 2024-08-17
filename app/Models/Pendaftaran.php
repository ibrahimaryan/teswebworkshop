<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';


    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'jurusan',
        'pelatihan',
        'nowa',
        'ss_angtif',
        'ss_pcc',
        'ss_workshop',
    ];
    public $timestamps = false;
}
