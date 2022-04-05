@extends ("template")
@section("isi")
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pelaksanaan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Kegiatan</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Target Kinerja</th>
                                            <th>Target Anggaran</th>
                                            <th>Tempat Pelaksanaan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Mekanisme</th>
                                            <th>Tahun</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datadiklat as $dd)
                                        <tr>

                                            <td style="width: 1%">{{ $dd->KodeProgramPer }}</td>
                                            <td style="text-align: center;">{{ $dd->ProgramDanKegiatan }}</td>
                                            <td>{{ $dd->TargetKinerja }}</td>
                                            <td style="text-align: right; width: 15%">Rp.{{ number_format("$dd->TargetAnggaran",0,",",".") }}</td>
                                            <td>{{ $dd->TempatPelaksanaan }}</td>
                                            <td style="text-align: justify; width: 11%; text-transform: capitalize;">
                                            <?php
                                            if($dd->TanggalMulai != '')
                                            {
                                                echo "$dd->TanggalMulai";
                                            } 
                                            else 
                                            {
                                                echo 'BELUM DIISI!';
                                            } ?>  
                                            </td>
                                            <td style="text-align: justify; width: 11%; text-transform: capitalize;">
                                            <?php
                                            if($dd->TanggalSelesai != '')
                                            {
                                                echo "$dd->TanggalSelesai";
                                            } 
                                            else 
                                            {
                                                echo 'BELUM DIISI!';
                                            } ?>  
                                            </td>
                                            <td>{{ $dd->Mekanisme }}</td>
                                            <td>{{ $dd->Tahun }}</td>
                                            <td style="text-align: center;"><a href="pelaksanaan-edit-{{$dd->KodeProgramPer}}" style="width: 100px; height: 50px; padding: 5px; border-radius: 10px;  background-color: rgba(2, 243, 0, 0.6); text-align: center; font-weight: bold; text-decoration: none;">EDIT</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="/pelaksanaan/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
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
