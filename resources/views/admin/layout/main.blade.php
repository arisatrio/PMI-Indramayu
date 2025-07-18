<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <link href="{{ asset('fa/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('/img/logo-pmi.png') }}">

    <link href="https://https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>@yield('title')</title>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-white sidebar sidebar-white accordion shadow" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center " href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('/img/logo-pmi.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            <div class="sidebar-brand-text text-dark mx-3">PMI Indramayu</div>
        </a>
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link @if(Request::is('admin/dashboard')) text-danger @else text-muted @endif " href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Donor Darah
        </div>
        <li class="nav-item">
            <a class="nav-link @if(Request::is('admin/registrasi')) text-danger @else text-muted @endif " href="{{ route('admin.registrasi') }}">
                <i class="fas fa-database"></i>
                <span>Data Registrasi Donor</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link @if(Request::is('admin/mcu')) text-danger @else text-muted @endif " href="{{ route('admin.mcu') }}">
                <i class="fas fa-database"></i>
                <span>Data MCU</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link @if(Request::is('admin/pendonor')) text-danger @else text-muted @endif" href="{{ route('admin.pendonor') }}">
                <i class="fas fa-database"></i>
                <span>Data Pendonor</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            WEBSITE
        </div>
        <li class="nav-item">
            <a class="nav-link @if(Request::is('admin/agenda')) text-danger @else text-muted @endif " href="{{ route('admin.agenda') }}" >
                <i class="fas fa-calendar-alt"></i>
                <span>Agenda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::is('admin/berita')) text-danger @else text-muted @endif " href="{{ route('admin.berita') }}" >
                <i class="fas fa-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::is('admin/komunikasi')) text-danger @else text-muted @endif " href="{{ route('admin.komunikasi') }}" >
                <i class="fas fa-envelope"></i>
                <span>Pertanyaan dan Saran</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow">
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle text-white " href="{{ url('admin/profil') }}" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small">{{ auth()->user()->name }}</span>
                        <i class="fas fa-user"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ url('admin/profil') }}">
                            Profile
                        </a>
                        <a class="dropdown-item" href="">
                            Ganti Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        @yield('container')
        <!-- End of Page Content -->
        
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; PMI Indramayu</span>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <Script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        
        function goBack() {
            window.history.back();
        }
    </Script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable({
                searching: false,
                paging: false,
                info: false
            });
        } );
    </script>
    <script>
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $(e.target).siblings('.custom-file-label').html(fileName);
        });
    </script>
</body>
</html>