<?php

namespace App\Exports;
 
use App\DataDiklat;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class EvaluasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataDiklat::select('KodeProgramPer', 'ProgramDanKegiatan', 'TargetKinerja', 'RealisasiKinerja', 'TargetAnggaran', 'RealisasiAnggaran', 'TempatPelaksanaan', 'TanggalMulai', 'TanggalSelesai', 'Mekanisme', 'Tahun')->get();
    }
}