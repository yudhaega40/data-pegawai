<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'pegawai';

    protected $fillable = [
        'no_pegawai',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'status_kawin',
        'alamat',
        'no_hp',
        'mulai_kerja',
        'divisi',
    ];

    
}
