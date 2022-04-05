<?php

namespace App\Http\Controllers;

use App\Sekertaris;
use Illuminate\Http\Request;
use DB;
use File;
use Image;

use App\Pegawai;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\DataDiklat;

use App\Pengadaan;
use App\Pendukung;

use App\Sekda;

use PDF;
use Webpatser\Uuid\Uuid;

use App\Exports\PerencanaanExport;
use App\Exports\PelaksanaanExport;
use App\Exports\EvaluasiExport;
use App\Exports\PesertaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DiklatController extends Controller
{
    public function index()
    {
        $datadiklat = DB::table('datadiklat')->paginate();
        $pegawai = DB::table('pegawai')->paginate();
        $tabel = DataDiklat::all();
        $sekda = Sekda::all();

        return view('utama',compact('datadiklat', 'pegawai', 'tabel', 'sekda'));
    }


    public function datapeserta($id)
    {
        $pegawai = DB::table('pegawai')
        ->join('datadiklat', 'datadiklat.KodeProgramPer', '=', 'pegawai.KodeProgramPer')->where('pegawai.KodeProgramPer', '=', $id)
        ->get();
        $kegiatan = DB::table('datadiklat')->where('KodeProgramPer', '=', $id)->get();
        $sekda = Sekda::all();
//        $pegawais = Pegawai::all(); //kl mau get all pake gini aja
        return view('datapeserta',compact('pegawai', 'kegiatan', 'sekda'));
    }
    public function inputpesertakirim(Request $request)
    {
        $this->validate($request,[
            'Nip' => 'required',
            'KodeProgramPer' => 'required',
            'Nama' => 'required',
            'Pangkat' => 'required',
            'UnitKerja' =>'required',
            'Keterangan' => 'required'
        ]);

        Pegawai::create([
            'Nip' => $request->Nip,
            'KodeProgramPer' => $request->KodeProgramPer,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'UnitKerja' => $request->UnitKerja,
            'Keterangan' => $request->Keterangan
        ]);

        return redirect('/peserta');
    }
    public function inputpeserta()
    {
        $datadiklat = DataDiklat::get();
        $sekda = Sekda::all();
        return view('inputpeserta', compact('datadiklat', 'sekda'));
    }
    public function peserta()
    {
        //$pegawai  = Pegawai::get();
        $pegawai = DB::table('pegawai')
            ->join('datadiklat', 'datadiklat.KodeProgramPer', '=', 'pegawai.KodeProgramPer')
            ->get();
        $sekda = Sekda::all();
        return view('peserta', compact('pegawai', 'sekda'));
    }
    public function perencanaan()
    {
        $datadiklat = DataDiklat::get();
        $sekda = Sekda::all();
        return view('perencanaan', compact('datadiklat', 'sekda'));
    }

    public function inputperencanaan()
    {
        $kegiatan = Kegiatan::get();
        $sekda = Sekda::all();
        return view ('inputperencanaan', compact('kegiatan', 'sekda'));
    }

    public function perencanaankirim(Request $request)
    {
        $this->validate($request, [
        'KodeProgramkeg' => 'required',
        'KodeProgramPer' => 'required',
        'ProgramDanKegiatan' => 'required',
        'TargetKinerja' => 'required',
        'SatuanKinerja' => 'required',
        'TargetAnggaran' => 'required',
        'Mekanisme' => 'required',
        'BulanPelaksanaan' => 'required',
        'Tahun' => 'required'
        ]);

        DataDiklat::create([
        'KodeProgramkeg' => $request->KodeProgramkeg,
        'KodeProgramPer' => $request->KodeProgramPer,
        'ProgramDanKegiatan' => $request->ProgramDanKegiatan,
        'TargetKinerja' => $request->TargetKinerja,
        'SatuanKinerja' => $request->SatuanKinerja,
        'TargetAnggaran' => $request->TargetAnggaran,
        'Mekanisme' => $request->Mekanisme,
        'BulanPelaksanaan' =>$request->BulanPelaksanaan,
        'Tahun' => $request->Tahun
        ]);

        return redirect('/perencanaan');
    }

    public function pelaksanaan()
    {
        $datadiklat = DataDiklat::get();
        $sekda = Sekda::all();
        return view('pelaksanaan', compact('datadiklat', 'sekda'));
    }

    public function editpelaksanaan($id)
    {
        $datadiklat = DB::table('datadiklat')->where('KodeProgramPer',$id)->get();
        $sekda = Sekda::all();
        return view('editpelaksanaan',compact('datadiklat', 'sekda'));
    }

    public function pelaksanaanupdate(request $request)
    {
        $this->validate($request, [
        'KodeProgramPer' => 'required',
        'RealisasiKinerja' => 'required',
        'RealisasiAnggaran' => 'required',
        'TempatPelaksanaan' => 'required',
        'TanggalMulai' => 'required',
        'TanggalSelesai' => 'required',
        ]);

        DataDiklat::where('KodeProgramPer',$request->KodeProgramPer)->update([
        'RealisasiKinerja' => $request->RealisasiKinerja,
        'RealisasiAnggaran' => $request->RealisasiAnggaran,
        'TempatPelaksanaan' => $request->TempatPelaksanaan,
        'TanggalMulai' => $request->TanggalMulai,
        'TanggalSelesai' => $request->TanggalSelesai,
        ]);

        return redirect('/pelaksanaan');
    }

    public function evaluasi()
    {
        $datadiklat = DataDiklat::get();
        $sekda = Sekda::all();
        return view('evaluasi', compact('datadiklat', 'sekda'));
    }

    public function uploadevaluasi()
    {
        $datadiklat = DataDiklat::get();
        $sekda = Sekda::all();
        return view('uploadevaluasi', compact('datadiklat', 'sekda'));
    }

    public function uploadperencanaan()
    {
        return view('uploadperencanaan');
    }

    public function uploadfileevaluasi($id)
    {
        $datadiklat = DB::table('datadiklat')->where('KodeProgramPer', '=', $id)->get();
        $sekda = Sekda::all();
        return view('uploadfileevaluasi', compact('datadiklat', 'sekda'));
    }

    public function uploadfilepengadaan(Request $request, $id)
    {

        if($request->hasFile('FilePengadaan'))
        {
            $file = DataDiklat::where('KodeProgramPer',$id)->first();
            File::delete('filepengadaan/'.$file->FilePengadaan);
    
    
            $file = $request->file('FilePengadaan');
        
            $nama_file = time()."_".$file->getClientOriginalName();
        
            $tujuan_upload = 'filepengadaan';
            $file->move($tujuan_upload,$nama_file);
        
            DataDiklat::where('KodeProgramPer',$request->KodeProgramPer)->update([
            'KFilePengadaan' => $request->KFilePengadaan,
            'FilePengadaan' => $nama_file
            ]);
        }
        else
        {
            DataDiklat::where('KodeProgramPer',$request->KodeProgramPer)->update([
            'KFilePengadaan' => $request->KFilePengadaan,
            ]);
        }

       return redirect('/upload-evaluasi')->with('successMsg','File berhasil ditambahkan');
    }

    public function uploadfilependukung(Request $request, $id)
    {
        if($request->hasFile('FilePendukung'))
        {
            $file = DataDiklat::where('KodeProgramPer',$id)->first();
            File::delete('filependukung/'.$file->FilePendukung);
    
    
            $file = $request->file('FilePendukung');
        
            $nama_file = time()."_".$file->getClientOriginalName();
        
            $tujuan_upload = 'filependukung';
            $file->move($tujuan_upload,$nama_file);
        
            DataDiklat::where('KodeProgramPer',$request->KodeProgramPer)->update([
            'KFilePendukung' => $request->KFilePendukung,
            'FilePendukung' => $nama_file
            ]);
        }
        else
        {
            DataDiklat::where('KodeProgramPer',$request->KodeProgramPer)->update([
            'KFilePengadaan' => $request->KFilePengadaan,
            ]);
        }

       return redirect('/upload-evaluasi')->with('successMsg','File berhasil ditambahkan!');
    }

    public function downloadpengadaan($id)
    {
        $dl = DataDiklat::where('KodeProgramPer',$id)->firstOrFail();
        $pathToFile = public_path('filepengadaan/' . $dl->FilePengadaan);
        return response()->download($pathToFile); 
    }


    public function downloadpendukung($id)
    {
        $dl = DataDiklat::where('KodeProgramPer',$id)->firstOrFail();
        $pathToFile = public_path('filependukung/' . $dl->FilePendukung);
        return response()->download($pathToFile);
    }

    public function cetaksp()
    {
        $datadiklat = DB::table('datadiklat')->whereNotNull('TanggalSelesai')->get();
        $sekda = Sekda::all();
        return view('cetaksp', compact('datadiklat', 'sekda'));
    }

    public function ekspor($id)
    {
        $datadiklat = DB::table('datadiklat')->where('KodeProgramPer',$id)->get();
        $sekda = Sekda::all();
        $pdf = PDF::loadview('suratperintah', ['datadiklat'=>$datadiklat, 'sekda'=>$sekda]);
        return $pdf->stream();
        //return $pdf->download('laporan-diklat.pdf');
    }

    public function peserta_excel()
    {
        return Excel::download(new PesertaExport, 'peserta.xlsx');
    }

    public function perencanaan_excel()
    {
        return Excel::download(new PerencanaanExport, 'data_perencanaan.xlsx');
    }

    public function pelaksanaan_excel()
    {
        return Excel::download(new PelaksanaanExport, 'data_pelaksanaan.xlsx');
    }

    public function evaluasi_excel()
    {
        return Excel::download(new EvaluasiExport, 'data_evaluasi.xlsx');
    }

    public function editsekertaris($id)
    {
        $sekda = DB::table('sekda')->where('NIP',$id)->get();
        return view('editsekertaris', compact('sekda'));
    }

    public function updatesekertaris(request $request)
    {
        $this->validate($request, [
        'NIP' => 'required',
        'Nama' => 'required',
        'Jabatan' => 'required',
        ]);

        Sekda::where('NIP',$request->NIP)->update([
        'NIP' => $request->NIP,
        'Nama' => $request->Nama,
        'Jabatan' => $request->Jabatan,
        ]);

        return redirect()->back()->with('message', 'Sukses update Sekertaris Daerah!');
    }

}
