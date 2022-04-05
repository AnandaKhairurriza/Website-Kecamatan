@extends ("template")
@section("isi")
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Pelaksanaan</h1>
                    </div>

                    <div class="form">
                        <form method="POST" action="/pelaksanaan-update">
                            {{csrf_field()}}
                            @foreach($datadiklat as $dd)
                            <input type="text" name="KodeProgramPer" value="{{$dd->KodeProgramPer}}" hidden>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Kode Sub Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="X" value="{{$dd->KodeProgramPer}}" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label style="color: black">Nama Sub Kegiatan</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="ProgramDanKegiatan" value="{{$dd->ProgramDanKegiatan}}" disabled>
                                </div>
                            </div>

                            <fieldset><legend style="margin: 20px 20px">Kinerja</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Target Kinerja</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TargetKinerja" value="{{$dd->TargetKinerja}}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Realisasi Kinerja</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="RealisasiKinerja" value="{{$dd->RealisasiKinerja}}" placeholder="Realisasi kinerja..." pattern="[0-9]{1,}" title="Input harus angka!" maxlength="20" required>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset><legend style="margin: 20px 20px">Anggaran</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Target Anggaran</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TargetAnggaran" value="{{$dd->TargetAnggaran}}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Realisasi Anggaran</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="RealisasiAnggaran" value="{{$dd->RealisasiAnggaran}}" placeholder="Realisasi anggaran..." pattern="[0-9]{1,}" title="Input harus angka!" maxlength="20" required>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset><legend style="margin: 20px 20px">Keterangan</legend>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Tempat Pelaksanaan</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TempatPelaksanaan" value="{{$dd->TempatPelaksanaan}}" placeholder="Tempat Pelaksanaan..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Tanggal Mulai</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TanggalMulai" value="{{$dd->TanggalMulai}}" placeholder="Tanggal mulai..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Tanggal Selesai</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="TanggalSelesai" value="{{$dd->TanggalSelesai}}" placeholder="Tanggal selesai..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Mekanisme Diklat</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="Mekanisme" value="{{$dd->Mekanisme}}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label style="color: black">Tahun</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="Tahun" value="{{$dd->Tahun}}" disabled>
                                    </div>
                                </div>
                            </fieldset>
                            @endforeach
                            <input type="submit" value="Submit!" name="submit">
                        </form>
                    </div>
                <!-- /.container-fluid -->
@endsection
