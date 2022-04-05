<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Diklat</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function()
            {
              $("#tabel-pegawai").DataTable();
            });

        </script>

        <style>

        </style>
    </head>
    <body>
        <button style="margin: 20px"><a href="/">Back</a></button>
        <h1 style="text-align: center;"><b>Data Pegawai</b></h1>
        <div style="padding: 20px 20px">
            <table id="tabel-pegawai" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="background-color: lightblue; text-align: center">Nama Pegawai</th>
                                <th style="background-color: lightblue; text-align: center">NIP</th>
                                <th style="background-color: lightblue; text-align: center">Tanggal Lahir</th>
                                <th style="background-color: lightblue; text-align: center">Pangkat</th>
                                <th style="background-color: lightblue; text-align: center">TMT Pangkat</th>
                                <th style="background-color: lightblue; text-align: center">Jabatan</th>
                                <th style="background-color: lightblue; text-align: center">TMT Jabatan</th>
                                <th style="background-color: lightblue; text-align: center">SKPD</th>
                                <th style="background-color: lightblue; text-align: center">Unit Kerja</th>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->NamaPegawai }}</td>
                                <td>{{ $p->NIP }}</td>
                                <td>{{ $p->TanggalLahir }}</td>
                                <td>{{ $p->Pangkat }}</td>
                                <td>{{ $p->TMTPangkat }}</td>
                                <td>{{ $p->Jabatan }}</td>
                                <td>{{ $p->TMTJabatan }}</td>
                                <td>{{ $p->SKPD }}</td>
                                <td>{{ $p->UnitKerja }}</td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
        </div>
    </body>
</html>
