@extends ("template")
@section("isi")
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Peserta Kegiatan</h6>
                        </div>
                        <a href="/inputpeserta" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                            <span class="text">Input Peserta</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>Unit Kerja</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pegawai as $pp)
                                        <tr>
                                            <td>{{ $pp->ProgramDanKegiatan }}</td>
                                            <td>{{ $pp->NIP }}</td>
                                            <td>{{ $pp->Nama }}</td>
                                            <td>{{ $pp->Pangkat }}</td>
                                            <td>{{ $pp->UnitKerja }}</td>
                                            <td>{{ $pp->Keterangan }}</td>
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
