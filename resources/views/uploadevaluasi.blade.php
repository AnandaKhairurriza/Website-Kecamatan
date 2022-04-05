@extends ("template")
@section("isi")
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Evaluasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr style="text-align: center;">
                                <th>Kode Kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>File Pengadaan</th>
                                <th>File Pendukung</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datadiklat as $dd)
                                <tr>
                                    <td>{{ $dd->KodeProgramPer }}</td>
                                    <td style="text-align: center;"> <a href="datapeserta-{{$dd->KodeProgramPer}}" style="width: 100px; height: 50px; padding: 5px; border-radius: 10px; text-align: center; font-weight: bold; text-decoration: none;">{{ $dd->ProgramDanKegiatan }}</a></td>
                                    <td>
                                        <a href="pengadaan-{{$dd->KodeProgramPer}}-download" title="{{ $dd->KFilePengadaan }}">{{ $dd->FilePengadaan }}</a>
                                    </td>
                                    <td>
                                        <a href="pendukung-{{$dd->KodeProgramPer}}-download" title="{{ $dd->KFilePendukung }}">{{ $dd->FilePendukung }}</a>
                                    </td>
                                    <td style="text-align: center;"><a href="upload-evaluasi-{{$dd->KodeProgramPer}}" style="width: 100px; height: 50px; padding: 5px; border-radius: 10px;  background-color: rgba(2, 243, 0, 0.6); text-align: center; font-weight: bold; text-decoration: none;">UPLOAD</a></td>
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
