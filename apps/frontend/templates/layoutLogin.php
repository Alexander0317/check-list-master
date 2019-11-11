<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <?php use_stylesheet("plugins/bootstrap/css/bootstrap.min.css") ?>
    <!-- page css -->
    <?php use_stylesheet("pages/login-register-lock.css") ?>
    <!-- Custom CSS -->
    <?php use_stylesheet("style.css") ?>

    <?php use_stylesheet('pages/floating-label.css')?>
    <!-- You can change the theme colors from here -->
    <?php use_stylesheet("colors/default-dark.css") ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <?php include_stylesheets(true) ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="login-box " style="padding-top: 100px;">
        <div class="card-body" style="background: #234C63;" >
            <a href="javascript:void(0)" class="text-center db"><br/><img src="/images/logo-text2.png" style="border-radius:10px;padding-top: 50px;" alt="Home" /></a>
          <?php echo $sf_content ?>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<?php use_javascript('plugins/jquery/jquery.min.js') ?>
<!-- Bootstrap tether Core JavaScript -->
<?php use_javascript('plugins/bootstrap/js/popper.min.js') ?>
<?php use_javascript('plugins/bootstrap/js/bootstrap.min.js') ?>
<?php use_javascript('custom.min.js') ?>
<?php include_javascripts(true) ?>
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>

</body>

</html>