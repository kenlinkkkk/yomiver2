<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang quản trị  | Xem Liền </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/admin/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/admin/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/admin/_all-skins.min.css">

    <link rel="stylesheet" href="<?=base_url();?>css/jquery-ui.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css" />
    <!-- Bootstrap-Iconpicker Bundle -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.standalone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.standalone.min.css" />
    <style type="text/css">
        .highlight:hover{
            background: #ccc;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?= base_url(); ?>admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-inverse">
            <div class="navbar-header" align="center">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav>
        <style type="text/css">
            .content-wrapper{
                margin-left: 0px !important;
            }
        </style>
    </header>

    <div class="row">
        <div class="col-xs-6 col-md-2">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url(); ?>" target="_blank"><i class="fa fa-home"></i></a></li>
                    <!-- <li><a href="<?= base_url(); ?>admin"><i class="fa fa-book"></i> <span>Dashboard</span></a></li> -->
                    <li><a href="<?=site_url($this->uri->level(1).'/article');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Bài viết</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/comment');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Bình luận</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/category');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Danh Mục</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/menu');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Menu</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/reward');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Danh Sách Trúng Thưởng</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/slide');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Quản Lý Slide</span></a></li>
                    <li><a href="<?=site_url($this->uri->level(1).'/promotion');?>"><i class="fa fa-book"></i> <span style="font-size: 12px;">Promotion</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 12px;">Quản Lý Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=site_url($this->uri->level(1).'/password');?>">&nbsp;Đổi mật khẩu admin</a></li>
                            <li><a href="<?=site_url($this->uri->level(1).'/logout');?>">&nbsp;Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-10 col-md-10">
            <?= $main; ?>
        </div>
    </div>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 <a href="https://lbit.me">Link Bit</a>.</strong> All rights
        reserved.
    </footer>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<!-- jQuery CDN -->
<!-- SlimScroll -->
<script src="<?= base_url(); ?>js/admin/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="<?= base_url(); ?>js/admin/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>js/admin/adminlte.min.js"></script>

<script src="<?= base_url(); ?>aseet/ckeditor/ckeditor.js"></script>

<script src="<?= base_url(); ?>asset/ckfinder/ckfinder.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker-iconset-all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker-iconset-all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>asset/ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "order": [[ 0,"desc" ]]
        } );
    } );
</script>
</body>
</html>
