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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Smart Contract | Blockchain</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/library/libs/flot/css/float-chart.css">
    <!-- Custom JS -->
    <script src="<?= base_url(); ?>assets/library/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/library/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/library/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url(); ?>assets/library/libs/flot/excanvas.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= base_url(); ?>assets/library/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/pages/chart/chart-page-init.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- HEADER -->
        <?= $this->include('layout/header') ?>
        <!-- SIDEBAR MENU -->
        <?= $this->include('layout/menu') ?>
        <div class="page-wrapper">
            <!-- CONTENT -->
            <?= $this->renderSection('content') ?>
            <!-- FOOTER -->
            <?= $this->include('layout/footer') ?>
        </div>

    </div>

</body>

</html>