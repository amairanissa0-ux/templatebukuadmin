<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zie BukuTamu</title>


    <!-- Font Awesome -->
    <link
        href="assets/vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet"
        type="text/css">


    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
        rel="stylesheet">


    <!-- SB Admin 2 -->
    <link
        href="assets/css/sb-admin-2.min.css"
        rel="stylesheet">


    <!-- DataTables -->
    <link
        href="assets/vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">


</head>


<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- ====================================================== -->
        <!-- SIDEBAR -->
        <!-- ====================================================== -->

        <ul
            class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar">


            <!-- Sidebar Brand -->
            <a
                class="sidebar-brand d-flex align-items-center justify-content-center"
                href="index.php">

                <div class="sidebar-brand-icon">
                    <i class="fas fa-book"></i>
                </div>

                <div class="sidebar-brand-text mx-3">
                    Zie BukuTamu
                </div>

            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Dashboard -->
            <li class="nav-item">

                <a
                    class="nav-link"
                    href="index.php">

                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>
                        Dashboard
                    </span>

                </a>

            </li>


            <!-- Buku Tamu -->
            <li class="nav-item">

                <a
                    class="nav-link"
                    href="buku-tamu.php">

                    <i class="fas fa-fw fa-book-open"></i>

                    <span>
                        Buku Tamu
                    </span>

                </a>

            </li>


            <!-- Laporan -->
            <li class="nav-item">

                <a
                    class="nav-link"
                    href="laporan.php">

                    <i class="fas fa-fw fa-file-alt"></i>

                    <span>
                        Laporan
                    </span>

                </a>

            </li>


            <!-- User -->
            <li class="nav-item">

                <a
                    class="nav-link"
                    href="user.php">

                    <i class="fas fa-fw fa-users"></i>

                    <span>
                        User
                    </span>

                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- ================================================== -->
            <!-- TOMBOL PERKECIL SIDEBAR -->
            <!-- ================================================== -->

            <div class="text-center d-none d-md-inline">

                <button
                    class="rounded-circle border-0"
                    id="sidebarToggle">
                </button>

            </div>


        </ul>


        <!-- End Sidebar -->



        <!-- ====================================================== -->
        <!-- CONTENT WRAPPER -->
        <!-- ====================================================== -->

        <div
            id="content-wrapper"
            class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- ================================================== -->
                <!-- TOPBAR -->
                <!-- ================================================== -->

                <nav
                    class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Mobile Sidebar Toggle -->
                    <button
                        id="sidebarToggleTop"
                        class="btn btn-link d-md-none rounded-circle mr-3">

                        <i class="fa fa-bars"></i>

                    </button>



                    <!-- Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0">


                        <div class="input-group">


                            <input
                                type="text"
                                class="form-control bg-light border-0 small"
                                placeholder="Search for..."
                                aria-label="Search">


                            <div class="input-group-append">

                                <button
                                    class="btn btn-primary"
                                    type="button">

                                    <i class="fas fa-search fa-sm"></i>

                                </button>

                            </div>


                        </div>


                    </form>



                    <!-- Topbar Right -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Divider -->
                        <div class="topbar-divider d-none d-sm-block"></div>


                        <!-- User -->
                        <li class="nav-item dropdown no-arrow">


                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="userDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">


                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">

                                    Admin

                                </span>


                                <!-- FOTO PROFILE -->
                                <img
                                    class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">


                            </a>



                            <!-- User Dropdown -->
                            <div
                                class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <a
                                    class="dropdown-item"
                                    href="#">

                                    <i
                                        class="fas fa-user fa-sm fa-fw mr-2 text-gray-400">
                                    </i>

                                    Profile

                                </a>


                                <a
                                    class="dropdown-item"
                                    href="#">

                                    <i
                                        class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400">
                                    </i>

                                    Settings

                                </a>


                                <div class="dropdown-divider"></div>


                                <a
                                    class="dropdown-item"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#logoutModal">

                                    <i
                                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                    </i>

                                    Logout

                                </a>


                            </div>


                        </li>


                    </ul>


                </nav>


                <!-- End Topbar -->