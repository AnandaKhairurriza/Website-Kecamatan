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
                    @foreach ($datadiklat as $dd)
                    <h6 class="m-0 font-weight-bold text-primary">Upload file {{$dd -> ProgramDanKegiatan}}</h6>
                    @endforeach
                    <br>

                    <div class="row">
                        <div class="container">
                            <h2 class="text-center my-5">Upload File Pengadaan</h2>

                            <div class="col-lg-8 mx-auto my-5">

                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}<br/>
                                        @endforeach
                                    </div>
                                @endif
                                
                                @foreach ($datadiklat as $dd)
                                <form action="/upload-file-pengadaan-{{$dd->KodeProgramPer}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="KodeProgramPer" value="{{$dd -> KodeProgramPer}}" hidden>
                                        <b>Upload File</b><br/>
                                        {{$dd -> FilePengadaan}}<br>
                                        <input type="file" name="FilePengadaan" required="required">
                                    </div>

                                    <div class="form-group">
                                        <b>Keterangan</b>
                                        <textarea class="form-control" name="KFilePengadaan"></textarea>
                                    </div>
                                    <input style="background-color: #00b4ae" type="submit" value="Upload" class="btn btn-primary">
                                </form>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="container">
                                    <h2 class="text-center my-5">Upload File Pendukung</h2>

                                    <div class="col-lg-8 mx-auto my-5">

                                        @if(count($errors) > 0)
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    {{ $error }} <br/>
                                                @endforeach
                                            </div>
                                        @endif

                                        @foreach ($datadiklat as $dd)
                                        <form action="/upload-file-pendukung-{{$dd->KodeProgramPer}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <input type="text" name="KodeProgramPer" value="{{$dd -> KodeProgramPer}}" hidden>
                                                <b>Upload File</b><br/>
                                                {{$dd -> FilePendukung}}<br>
                                                <input type="file" name="FilePendukung" required="required">
                                            </div>

                                            <div class="form-group">
                                                <b>Keterangan</b>
                                                <textarea class="form-control" name="KFilePendukung"></textarea>
                                            </div>

                                            <input style="background-color: #00b4ae" type="submit" value="Upload" class="btn btn-primary">
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
