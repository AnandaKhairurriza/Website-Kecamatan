@extends ("template")
@section("isi")
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Cetak Surat Perintah</h1>
                    <p class="mb-4">Pilih data yang ingin di cetak<a target="_blank" href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Kegiatan</th>
                                            <th>Nama Kegiatan</th>
                                            <!--
                                            <th>Target Anggaran</th>
                                            <th>Realisasi Anggaran</th>
                                            -->
                                            <th>Tempat Pelaksanaan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Tahun</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datadiklat as $dd)
                                        <tr>

                                            <td>{{ $dd->KodeProgramPer }}</td>
                                            <td>{{ $dd->ProgramDanKegiatan }}</td>
                                            <!--
                                            <td style="text-align: right; width: 15%">Rp. {{ number_format("$dd->TargetAnggaran",0,",",".") }}</td>
                                            <td>{{ $dd->RealisasiAnggaran }}</td>
                                            -->
                                            <td>{{ $dd->TempatPelaksanaan }}</td>
                                            <td style="text-align: justify; width: 11%; text-transform: capitalize;">{{ $dd->TanggalMulai }}</td>
                                            <td style="text-align: justify; width: 11%; text-transform: capitalize;">{{ $dd->TanggalSelesai }}</td>
                                            <td>{{ $dd->Tahun }}</td>
                                            <td style="text-align: center;"><a href="/ekspor-{{$dd->KodeProgramPer}}" target="_blank" style="width: 100px; height: 50px; padding: 5px; border-radius: 10px;  background-color: rgba(2, 243, 0, 0.6); text-align: center; font-weight: bold; text-decoration: none;">PRINT</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->

            </div>
            <!-- /.container-fluid -->
@endsection
