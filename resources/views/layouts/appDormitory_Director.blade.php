<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>
    <style>
        body {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <!-- Authentication Links -->

            <div class="list-group list-group-item-action bg-light">
                <a class="sidebar-heading">
                    {{ Auth::user()->name }}
                </a>

                <a class="sidebar-heading" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('ออกจากระบบ') }}
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/changePassword">
                    เปลี่ยนรหัสผ่าน
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/showDataUser">
                    ข้อมูลนักศึกษา
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/showDataActivity">
                    ข้อมูลกิจกรรม
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/manageActivity">
                    จัดการกิจกรรม
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/conductActivity">
                    ดำเนินกิจกรรม
                </a>
                <a class="sidebar-heading" href="/Dormitory_Director/showDataStudentAll">
                    ดูรายชื่อนักศึกษา
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>



        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">เมนู</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                </div>
                <a class="sidebar-heading" href="/Dormitory_Director/home">
                    AMSKKU
                </a>
            </nav>

            <div class="container-fluid">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>