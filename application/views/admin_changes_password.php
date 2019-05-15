<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>::: ĐỔI MẬT KHẨU ADMIN :::</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    <link href="<?= base_url(); ?>css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">

    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Đổi Mật khẩu</p>
        <? if($errors): ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                <?= $errors; ?>
            </div>
        <? endif;?>
        <? if($success): ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?= $success; ?>
            </div>
        <? endif;?>
        <form class="form login" action="" method="post">
            <div class="form-group has-feedback">
                <input type="password" name="currentPassword" class="form-control" placeholder="Mật khẩu hiện tại" required/>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="newPassword" class="form-control" placeholder="Mật khẩu mới" required/>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="comfirmPassword" class="form-control" placeholder="Xác nhận mật khẩu mới" required/>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đổi Mật Khẩu</button>
                    <input type="hidden" name="change" value="1"/>
                </div><!-- /.col -->
                <div class="col-xs-12" style="margin-top: 5px;">
                    <a class="btn btn-success btn-block btn-flat" href="<?= base_url(); ?>admin">Về trang quản lý</a>
                </div>
            </div>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?= base_url(); ?>js/jquery.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?= base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
