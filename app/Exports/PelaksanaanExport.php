<?php

namespace App\Exports;
 
use App\DataDiklat;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class PelaksanaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataDiklat::select('KodeProgramPer', 'ProgramDanKegiatan', 'TargetKinerja', 'TargetAnggaran', 'TempatPelaksanaan', 'TanggalMulai', 'TanggalSelesai', 'Mekanisme', 'Tahun')->get();
    }
}