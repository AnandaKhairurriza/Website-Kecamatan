@extends ("template")
@section("isi")
                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Sekertaris Derah</h1>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @foreach($sekda as $sd)
                    <div class="form">
                        <form method="POST" action="/update-sekertaris">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">NIP</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="NIP" value="{{$sd->NIP}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Nama Sekertaris Daerah</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Nama" value="{{$sd->Nama}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Jabatan</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Jabatan" value="{{$sd->Jabatan}}" required>
                                </div>
                            </div>
                            <input type="submit" value="Update!" name="submit">
                        </form>
                        @endforeach
                    </div>
                <!-- /.container-fluid -->
@endsection
