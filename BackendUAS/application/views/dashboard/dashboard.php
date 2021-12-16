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

    <nav class="bg-warning p-3">
        <div class="container d-flex justify-content-between ">
            <h3 class="fs-4 fw-bold text-center text-wrap text-white" style="width: 6rem;">Pencatatan Uang Mandiri</h3>

            <a href="#" class="nav-link fs-2 text-white">ADMIN <i class="fas fa-key"></i></a>

        </div>

    </nav>

    <div class="content d-flex flex-row">
        <aside class="d-flex flex-column justify-content-evenly bg-info text-center " style="width: 15%; height: 90vh;">
            <a href="#" class="text-white nav-link active">Dashboard</a>
            <a href="#" class="text-white nav-link ">Balance</a>
            <div class="transaksi">
                <h3>Transaksi</h3>
                <a href="#" class="nav-link text-white">Top Up</a>
                <a href="#" class="nav-link text-white">Pengeluaran</a>

            </div>
            <div class="report">
                <h3>Report</h3>
                <a href="#" class="nav-link text-white">Cetak laporan</a>
            </div>
        </aside>
        <span class="main-content">
            <div class="balance">
                <h2></h2>
            </div>
        </span>
    </div>




</body>

</html>