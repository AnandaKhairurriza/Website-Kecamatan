@extends ("template")
@section("isi")
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Perencanaan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Kegiatan</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Target Kinerja</th>
                                            <th>Satuan Kinerja</th>
                                            <th>Target Anggaran (Rp)</th>
                                            <th>Mekanisme</th>
                                            <th>Bulan Pelaksanaan</th>
                                            <th>Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datadiklat as $dd)
                                        <tr>
                                            <td>{{ $dd->KodeProgramPer }}</td>
                                            <td>{{ $dd->ProgramDanKegiatan }}</td>
                                            <td>{{ $dd->TargetKinerja }}</td>
                                            <td>{{ $dd->SatuanKinerja }}</td>
                                            <td style="text-align: right; width: 15%">Rp.{{ number_format("$dd->TargetAnggaran",0,",",".") }}</td>
                                            <td style="text-transform: capitalize;">{{ $dd->Mekanisme }}</td>
                                            <td style="text-transform: capitalize;">{{ $dd->BulanPelaksanaan }}</td>
                                            <td>{{ $dd->Tahun }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="/perencanaan/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
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
