<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Mania -  Sewa Motor Malang</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify.theme.css">
</head>
<body>
    <?php if($this->session->userdata('user')!=null){ ?>
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>M</b>M</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Motor</b>Mania</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>/assets/img/avatar.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">Rizki Maulana Akbar</span>
                        </a>
                        <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="User Image">

                            <p>
                            Rizki Maulana Akbar - Web Developer
                            <small>Administrator</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                            <a class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                            <a id="logout-link" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </nav>
            </header>



            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>/assets/img/avatar.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                    <p>Rizki Maulana Akbar</p>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU UTAMA</li>
                    <li class="active treeview">
                    <a href="#" id="home-link">
                        <i class="fa fa-dashboard"></i> <span>Beranda</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    </li>
                    <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                        </span>
                    </a>
                    </li>
                    <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    <!-- Menu Vehicle -->
                    <li><a href="#" id="vehicle-link"><i class="fa fa-car"></i> <span>Manajemen Kendaraan</span></a></li>
                    <!-- Menu Vehicle -->
                    <!-- Menu User -->
                    <li><a href="#" id="user-link"><i class="fa fa-user"></i> <span>Pengguna Sistem</span></a></li>
                    <!-- Menu User -->

                </ul>
                </section>
                <!-- /.sidebar -->
            </aside>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div id="main-content">
                <?php  
                    if($page!=null){
                        $this->load->view($page);
                    }
                ?>
                </div>
            
            </div>
            <!-- /.content-wrapper -->
            </div>
    
    <?php } ?>
        <?php if($this->session->userdata('user')==null){$this->load->view("modul/login/login");} ?>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/alertify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/adminlte.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>