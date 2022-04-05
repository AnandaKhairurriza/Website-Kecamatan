<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDiklat extends Model
{
    protected $table = 'datadiklat';
    protected $fillable = ['KodeProgramkeg', 'KodeProgramPer', 'ProgramDanKegiatan', 'TargetKinerja', 'RealisasiKinerja','SatuanKinerja', 'TargetAnggaran', 'RealisasiAnggaran', 'TanggalMulai', 'TanggalSelesai', 'BulanPelaksanaan', 'TempatPelaksanaan', 'Mekanisme', 'Tahun', ' 	IDFilePengadaan', 'FilePengadaan', 'KFilePengadaan', 'IDFilePendukung', 'FilePendukung', 'KFilePendukung'];
}
