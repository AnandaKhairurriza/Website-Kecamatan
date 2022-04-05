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
                            @foreach($kegiatan as $k)
                            <h6 class="m-0 font-weight-bold text-primary">Data Peserta {{$k -> ProgramDanKegiatan}}</h6>
                            @endforeach
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h6 class="m-0 font-weight-bold text-primary"></h6>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Peserta</th>
                                            <th>NIP</th>
                                            <th>Pangkat</th>
                                            <th>Unit Kerja</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pegawai as $pp)
                                        <tr>
                                            <td>{{ $pp->Nama }}</td>
                                            <td>{{ $pp->NIP }}</td>
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
