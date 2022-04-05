<br>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }

    </style>
    <center>
        <h5 style="font-weight: bold;text-decoration: underline ;font-family: 'Bookman Old Style'">SURAT  PERINTAH</h4>
        <h6 style="font-weight: bold; font-size: 15px;font-family: 'Bookman Old Style'">Nomor : 893/             -BKPSDM</h5>
    </center>
    <br>
    @foreach($datadiklat as $dd)
    <div style="text-align: justify; font-family:'Bookman Old Style'; font-size: 11px">
            Berdasarkan Program Kerja dan Kegiatan serta Dokumen Pelaksanaan
        Perubahan  Anggaran Badan Kepegawaian dan Pengembangan Sumber Daya Manusia
        Kota Tangerang Tahun Anggaran 2019, untuk kepentingan dinas dengan ini :
        <br><br>
    <center style="font-weight: bold">
        MEMERINTAHKAN
    </center>
        <br><br>
        Kepada : Pegawai Negri Sipil Yang namanya tercantum pada kolom 2 daftar surat perintah ini.
    <br><br>
        <p></p>
            Untuk  : Mengikuti <b>{{$dd->ProgramDanKegiatan}}</b> yang diselenggarakan pada tanggal <span style="text-transform: capitalize;"><b>{{$dd->TanggalMulai}}</b></span> sampai dengan <span style="text-transform: capitalize;"><b>{{$dd->TanggalSelesai}}</b></span>  <b>{{$dd->Tahun}}</b> bertempat di <b>{{$dd->TempatPelaksanaan}}</b> dengan ketentuan sebagai berikut :
        <br><br>
                 1. Cek In Peserta
        <p></p>
                 2. Membawa Surat Tugas dan perlengkapan pribadi.
    <p></p>
                 3. Membawa Pakaian Olahraga.
    <p></p>
                 4. Selama diklat peserta berpakaian batik Nasional.
    <p></p>
                 5. Membawa Laptop dan Modem.
    <p></p>
                 6. Peserta tidak boleh diganti.
    <br><br>
                Demikian surat perintah ini dibuat, untuk dilaksanakan dan dipergunakan sebagaimana mestinya.
    <br><br>
    </div>
    @endforeach
    <br>
    @foreach($sekda as $sd)
    <div style="text-align: right; font-family: 'Bookman Old Style'; font-size: 11px; margin-top: 240px">
        <div style="margin-right: 45px">Dikeluarkan   di:   TANGERANG</div>
        <p></p>
        <div style="text-decoration: underline; margin-right: 45px">  Pada  tanggal:    November 2019</div>
        <p></p>
        <div style="font-weight: bold; font-size: 14px; margin-right: 35px">  SEKERTARIS DAERAH  </div>
        <br><br>
        <br><br>
        <br><br>
        <b style="text-decoration: underline;font-size: 14px ;margin-right: 43px">{{$sd -> Nama}}</b>
        <p></p>
        <div style="font-size: 14px; margin-right: 43px;font-weight: bold">{{$sd -> Jabatan}}</div>
        <p></p>
        <div style="font-size: 14px; margin-right: 33px;font-weight: bold">NIP. {{$sd -> NIP}}</div>
    </div>
    @endforeach
        <br><br>
        <b>Tembusan :</b>
        <p></p>
        1.  Walikota Tangerang;
        <p></p>
        2.  Wakil Walikota Tangerang.
</body>
</html>
