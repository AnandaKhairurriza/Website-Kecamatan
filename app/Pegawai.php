<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['Nip','KodeProgramPer', 'Nama', 'Pangkat', 'UnitKerja', 'Keterangan'];
}
