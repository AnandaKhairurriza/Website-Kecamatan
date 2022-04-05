@extends ("template")
@section("isi")
                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Input Perencanaan</h1>
                    </div>

                    <div class="form">
                        <form method="POST" action="/input-perencanaan-kirim">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Nama Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <select name="KodeProgramkeg">
                                        @foreach ($kegiatan as $peg)
                                            <option value="{{$peg ->KodeProgramkeg}}">{{$peg ->KodeProgramkeg}} - {{$peg ->ProgramDanKegiatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Kode Sub Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="KodeProgramPer" placeholder="Kode Kegiatan..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Nama Sub Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="ProgramDanKegiatan" placeholder="Nama sub kegiatan..." required>
                                </div>
                            </div>

                            <fieldset><legend style="margin: 20px 20px">Kinerja</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Target Kinerja</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TargetKinerja" placeholder="Target kinerja..." pattern="[0-9]{1,}" title="Input harus angka!" maxlength="20" required>
                                        <input style="margin: 20px; " type="radio" name="SatuanKinerja" value="Orang">Orang
                                        <input style="margin-left: 40px;margin: 20px" type="radio" name="SatuanKinerja" value="Dokumen">Dokumen
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset><legend style="margin: 20px 20px">Anggaran</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Target Anggaran</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TargetAnggaran" placeholder="Target anggaran..." pattern="[0-9]{1,}" title="Input harus angka!" maxlength="20" required>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset><legend style="margin: 20px 20px">Keterangan</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Mekanisme Diklat</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="Mekanisme" placeholder="Mekanisme Diklat..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Bulan Pelaksanaan</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="BulanPelaksanaan" placeholder="Bulan Pelaksanaan..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Tahun</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="Tahun" placeholder="Tahun..." required>
                                    </div>
                                </div>
                            </fieldset>

                            <input type="submit" value="Submit!" name="submit">
                        </form>
                    </div>
                <!-- /.container-fluid -->
@endsection
