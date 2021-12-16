<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('src/bootstrap-5.1.3-dist/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url('src/fontawesome-free-5.15.4-web/css/all.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('src/style/dashboard.css'); ?>">
    <!--load all styles -->
    <title>Dashboard </title>
</head>

<body>

    <nav class="d-flex justify-content-between bg-warning">
        <h3 class="fs-1">Pencatatan Uang Mandiri</h3>

        <a href="#" class="nav-link fs-3">ADMIN <i class="fas fa-key"></i></a>
    </nav>
    <aside class="d-flex flex-column justify-content-evenly bg-info" style="width: 15%; height: 90vh;">
        <a href="#">Dashboard</a>
        <a href="#">Balance</a>
        <div class="transaksi">
            <h3>Transaksi</h3>
            <a href="#">Top Up</a>
            <a href="#">Pengeluaran</a>

        </div>
        <div class="report">
            <h3>Report</h3>
            <a href="#">Cetak laporan</a>
        </div>
    </aside>





</body>

</html>