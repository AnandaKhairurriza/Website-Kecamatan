<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/inputstyle.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <!--FOR SEARCH AND PAGINATING TABLE!!!-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function()
        {
            $("#dataTable").DataTable();
        });

    </script>
    <!--FOR SEARCH AND PAGINATING TABLE!!!-->

    <title>BKPSDM</title>

    <style type="text/css">

        .navigasi:hover
        {
            background-color: rgba(0,0,0,0.5);
        }

        .col-25
        {
            width: 15%;
            margin-top: 20px;
        }

        .col-75
        {
            width: 85%;
        }

    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">BKPSDM</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Perencanaan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/perencanaan">Data Perencanaan</a>
                    <a class="collapse-item" href="/input-perencanaan">Input Data</a>
                    <!--
                    <a class="collapse-item" href="#">Upload File</a>
                    -->
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pelaksanaan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/pelaksanaan">Data Pelaksanaan</a>
                    <!--
                    <a class="collapse-item" href="#">Print Dokumen</a>
                    <a class="collapse-item" href="#">Cards</a>
                    -->
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Evaluasi</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/evaluasi">Data Evaluasi</a>
                    <a class="collapse-item" href="/upload-evaluasi">Upload File</a>
                    <!--
                    <a class="collapse-item" href="#">Print Data</a>
                    -->
                </div>
            </div>
        </li>

        <li class="nav-item active navigasi">
            <a class="nav-link" href="/cetak-sp">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Cetak Surat Perintah</span></a>
        </li>
        <li class="nav-item active navigasi">
            <a class="nav-link" href="/peserta">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Input Peserta</span></a>
        </li>
        <!--
        <li class="nav-item active navigasi">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Email</span></a>
        </li>
        -->
        @foreach ($sekda as $sd)
        <li class="nav-item active navigasi">
            <a class="nav-link" href="/edit-sekertaris-{{$sd -> NIP}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Sekertaris Daerah</span></a>
        </li>
        @endforeach
        <!-- Divider -->
        <hr class="sidebar-divider">




    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="margin-top: 20px; padding-top: 30px;">

        <!-- Main Content -->

        <div id="content">
            @yield('isi')
        </div>


        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Website Kediklatan 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

</body>
</html>
