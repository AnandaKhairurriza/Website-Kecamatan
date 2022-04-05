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
                    <h6 class="m-0 font-weight-bold text-primary">Input Evaluasi</h6>
                    <br>

                    <div class="row">
                        <div class="container">
                            <h2 class="text-center my-5">Upload File Pengadaan</h2>

                            <div class="col-lg-8 mx-auto my-5">

                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }} <br/>
                                        @endforeach
                                    </div>
                                @endif

                                <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <b>Upload File</b><br/>
                                        <input type="file" name="file">
                                    </div>

                                    <div class="form-group">
                                        <b>Keterangan</b>
                                        <textarea class="form-control" name="keterangan"></textarea>
                                    </div>

                                    <input style="background-color: #00b4ae" type="submit" value="Upload" class="btn btn-primary">
                                </form>
                            </div>
                            <html>
                            <head>
                                <title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                            </head>
                            <body>
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

                                        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <b>File Upload</b><br/>
                                                <input type="file" name="file">
                                            </div>

                                            <div class="form-group">
                                                <b>Keterangan</b>
                                                <textarea class="form-control" name="keterangan"></textarea>
                                            </div>

                                            <input style="background-color: #00b4ae" type="submit" value="Upload" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </body>
                            </html>
                        </div>
                    </div>
                    </body>
                    </html>

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
