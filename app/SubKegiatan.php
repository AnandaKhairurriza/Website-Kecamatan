<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class SubKegiatan extends Model
{
    protected $table = 'subkegiatan';
    protected $fillable = ['KodeProgramsub', 'KodeProgramkeg', 'ProgramDanKegiatan', 'TargetKinerja', 'RealisasiKinerja', 'TargetAnggaran', 'RealisasiAnggaran', 'WaktuPelaksanaan', 'TempatPelaksanaan', 'Mekanisme'];
}