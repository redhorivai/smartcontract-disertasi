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
            <!-- LIBRARIES JS -->
            <?= $this->include('layout/script') ?>
        </div>

    </div>

</body>

</html>