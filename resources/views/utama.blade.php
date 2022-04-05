@extends ("template")
@section("isi")
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Data Perencanaan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datadiklat -> total()}}</div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Data Pelaksanaan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datadiklat -> total()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Data Evaluasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datadiklat -> total()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Peserta</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pegawai -> total()}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
                                <th>Realisasi Kinerja</th>
                                <th>Target Anggaran</th>
                                <th>Realisasi Anggaran</th>
                                <th>Tempat Pelaksanaan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Mekanisme</th>
                                <th>Tahun</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tabel as $dd)
                                <tr>

                                    <td>{{ $dd->KodeProgramPer }}</td>
                                    <td style="text-align: center;"> <a href="datapeserta-{{$dd->KodeProgramPer}}" style="width: 100px; height: 50px; padding: 5px; border-radius: 10px; text-align: center; font-weight: bold; text-decoration: none;">{{ $dd->ProgramDanKegiatan }}</a></td>
                                    <td>{{ $dd->TargetKinerja }}</td>
                                    <td>
                                    <?php
                                    if($dd->RealisasiKinerja != '' OR $dd->RealisasiAnggaran == '0')
                                    {
                                        echo "$dd->RealisasiKinerja";
                                    }
                                    else 
                                    {
                                        echo 'BELUM DIISI!';
                                    } ?>
                                    </td>
                                    <td style="text-align: right">Rp.{{ number_format("$dd->TargetAnggaran",0,",",".") }}</td>
                                    <td style="text-align: right">
                                    <?php 
                                    if($dd->RealisasiAnggaran != '' OR $dd->RealisasiAnggaran == '0')
                                    {
                                        echo "Rp.";
                                        echo number_format("$dd->RealisasiAnggaran",0,",",".");
                                    } 
                                    else 
                                    {
                                        echo 'BELUM DIISI!';
                                    } ?>  
                                    </td>
                                    <td>{{ $dd->TempatPelaksanaan }}</td>
                                    <td style="text-align: justify; width: 11%">
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
                                    <td style="text-align: justify; width: 11%">
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
