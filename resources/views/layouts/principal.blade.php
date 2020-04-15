<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <title>@yield('title')</title>

    {{--boostrap core css --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')  }}">

    {{--chartist morris--}}
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">

    {{--c3 CSS --}}
    <link rel="stylesheet" href="{{ asset('css/c3-master/c3.min.css')  }}">

    <!--Toaster Popup message CSS -->
    <link rel="stylesheet" href="{{ asset('css/toast-master/css/jquery.toast.css') }}">

    {{--CSS Style Custom--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Dashboard 1 Page CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard1.css') }}">

    <!-- You can change the theme colors from here -->
    <link rel="stylesheet" href="{{ asset('css/blue-dark.css') }}">

    {{--font-awesome--}}
    <link rel="stylesheet" href="{{asset('scss/icons/font-awesome/css/fontawesome-all.css')}}">

    {{--Spinners--}}
    <link rel="stylesheet" href="{{asset('css/spinners.css')}}">

    {{--Animate--}}
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    {{--DataTable--}}
    <link rel="stylesheet" href="{{asset('css/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/table-pages.css')}}">

    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css" />

    <link rel="stylesheet" href="{{asset('css/sf_admin.css')}}">
    <link rel="stylesheet" href="{{asset('js/dropzone-master/dist/dropzone.css')}}">

    {{--switchery--}}
    <link href="{{asset('css/switchery/dist/switchery.min.css')}}" rel="stylesheet" />

    <style>

        .input-style {
            color: white;
        }

    </style>


</head>
<body class="fix-header fix-sidebar card-no-border">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>

    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                         <img src="{{asset('images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="icon-Magnifi-Glass2"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a> -->
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Mail"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a> -->
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('images/users/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('images/users/3.jpg')}}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('images/users/4.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            {{--<a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>--}}
                            <div class="dropdown-menu dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/users/user-default2.jpeg')}}" alt="user" class="" /> <span class="hidden-md-down">{{Auth::user()->nome}} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{asset('images/users/user-default2.jpeg')}}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>{{Auth::user()->nome}}</h4>
                                                <a href="" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Meu Perfil</a></li>
                                    <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Sair</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li>
                            <a class=" waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="icon-Home"></i>Home</a>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-Car-Wheel"></i><span class="hide-menu">{{__('principal.dashboard')}} </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('dashboard-clientes')}}">Por cliente </a></li>
                                <li><a href="{{route('dashboard-all-clientes')}}">Todos os clientes </a></li>
                                <li><a href="#">Financeiro</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-Double-Circle"></i><span class="hide-menu">Cadastros</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('clientes')}}">Clientes</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('usuarios')}}">Usuários</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('cursos')}}">Cursos</a></li>
                            </ul>
                        </li>
                        {{--<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-Box-Full"></i><span class="hide-menu">Inbox</span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="#">Mailbox</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-On-Off-3"></i><span class="hide-menu">Ui Elements <span class="label label-rounded label-success">25</span></span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="#">Cards</a></li>--}}
                                {{--<li><a href="#">User Cards</a></li>--}}
                                {{--<li><a href="#">Buttons</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                @include('layouts.flash-message')

                @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Admin Wrap Admin by themedesigner.in
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

    </div>

    {{--JQUERY js--}}
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('js/ps/perfect-scrollbar.jquery.min.js')}}"></script>

    {{--Waves Effects--}}
    <script src="{{asset('js/waves.js')}}"></script>

    {{--Menu Sidebar--}}
    <script src="{{asset('js/sidebarmenu.js')}}"></script>

    {{--Custom Javascript--}}
    <script src="{{asset('js/custom.min.js')}}"></script>

    <!--morris JavaScript -->
    <script src="{{asset('js/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('css/morrisjs/morris.min.js')}}"></script>

    {{--c3 Javascript--}}
    <script src="{{asset('js/d3/d3.min.js')}}"></script>
    <script src="{{asset('css/c3-master/c3.min.js')}}"></script>

    <!-- Popup message jquery -->
    <script src="{{asset('css/toast-master/js/jquery.toast.js')}}"></script>

    {{--Chart Js--}}
    <script src="{{asset('js/dashboard1.js')}}"></script>

    <!-- Style switcher -->
    <script src="{{asset('js/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <!--stickey kit -->
    <script src="{{asset('js/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- This is data table -->
    <script src="{{asset('js/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    {{--CDN's referentes ao DataTable--}}
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    {{--SWEET ALERT--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    {{--Arquivo de javascripts do sf_admin--}}
    <script src="{{asset('js/sf_admin.js')}}"></script>
    <script src="{{asset('js/dashboard-cliente.js')}}"></script>

    <!-- inputmask -->
    <script src="{{asset('js/jquery/jquery.inputmask.bundle.js')}}"></script>

    {{-- DATEPICKER --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    {{--DROPZONE--}}
    <script src="{{asset('/js/dropzone-master/dist/dropzone.js')}}"></script>

    {{--switchery--}}
    <script src="{{asset('css/switchery/dist/switchery.min.js')}}"></script>

    <script>
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
    </script>



</body>
</html>