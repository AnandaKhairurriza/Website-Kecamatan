<?php

namespace App\Exports;
 
use App\DataDiklat;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class PerencanaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataDiklat::select('KodeProgramPer', 'ProgramDanKegiatan', 'TargetKinerja', 'SatuanKinerja', 'TargetAnggaran', 'Mekanisme', 'BulanPelaksanaan', 'Tahun')->get();
    }
}