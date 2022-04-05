<?php

namespace App\Exports;
 
use App\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class PesertaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pegawai::all();
    }
}