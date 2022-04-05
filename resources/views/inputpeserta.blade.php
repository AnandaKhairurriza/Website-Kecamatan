@extends ("template")
@section("isi")
                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Input Peserta</h1>
                    </div>

                    <div class="form">
                        <form method="POST" action="/inputpesertakirim">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Sub Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <select name="KodeProgramPer">
                                        @foreach ($datadiklat as $dat)
                                            <option value="{{$dat -> KodeProgramPer}}">{{$dat -> KodeProgramPer}} - {{$dat -> ProgramDanKegiatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">NIP</label>
                                </div>
                                <select id="select-state" placeholder="Pilih NIP">
                                    <option value="">Pilih NIP</option>
                                    <option value="AL">20019302190</option>
                                    <option value="AK">20091209312</option>
                                    <option value="AZ">20392019320</option>
                                    <option value="AR">12930193093</option>
                                    <option value="CA">01293019039</option>
                                    <option value="CO">01293012930</option>
                                    <option value="CT">21039012930</option>
                                    <option value="DE">21839129393</option>
                                    <option value="DC">20209109020</option>
                                    <option value="FL">32910909039</option>
                                    <option value="GA">49839820202</option>
                                    <option value="HI">20920920090</option>
                                    <option value="ID">12910219290</option>
                                    <option value="IL">92398239282</option>
                                    <option value="IN">20209209090</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Nama Peserta</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Nama" placeholder="Nama Peserta..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Pangkat</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Pangkat" placeholder="Pangkat Peserta..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Unit Kerja</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="UnitKerja" placeholder="Unit Kerja Peserta..." required>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Keterangan</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="Keterangan" placeholder="Keterangan..." required>
                                    </div>
                                </div>
                            <input type="submit" value="Submit!" name="submit">
                        </form>
                    </div>
                <!-- /.container-fluid -->
@endsection
