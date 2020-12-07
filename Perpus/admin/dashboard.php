<?php
session_start();
error_reporting(0);
include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOX ICONS -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Perpustakaan</title>
</head>

<body id="body-pd">
    <?php include('includes/navbar.php'); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">ADMIN DASHBOARD</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-success back-widget-set text-center">
                        <i class='bx bxs-book nav__icon'></i>
                        <?php
                        $sql = "SELECT id from tblbooks ";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $listdbooks = $query->rowCount();
                        ?>

                        <h4><?php echo htmlentities($listdbooks); ?></h4>
                        <h4>Jumlah Buku</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-info back-widget-set text-center">
                        <i class='bx bxs-cart-add nav__icon'></i>
                        <?php
                        $sql1 = "SELECT id from tblissuedbookdetails ";
                        $query1 = $dbh->prepare($sql1);
                        $query1->execute();
                        $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                        $issuedbooks = $query1->rowCount();
                        ?>

                        <h4><?php echo htmlentities($issuedbooks); ?> </h4>
                        <h4>Jumlah Buku dipinjam</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-warning back-widget-set text-center">
                        <i class='bx bx-recycle nav__icon'></i>
                        <?php
                        $status = 1;
                        $sql2 = "SELECT id from tblissuedbookdetails where RetrunStatus=:status";
                        $query2 = $dbh->prepare($sql2);
                        $query2->bindParam(':status', $status, PDO::PARAM_STR);
                        $query2->execute();
                        $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                        $returnedbooks = $query2->rowCount();
                        ?>

                        <h4><?php echo htmlentities($returnedbooks); ?></h4>
                        <h4>Jumlah buku dikembalikan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-danger back-widget-set text-center">
                        <i class='bx bxs-user-circle nav__icon'></i>
                        <?php
                        $sql3 = "SELECT id from tblstudents ";
                        $query3 = $dbh->prepare($sql1);
                        $query3->execute();
                        $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
                        $regstds = $query3->rowCount();
                        ?>
                        <h4><?php echo htmlentities($regstds); ?></h4>
                        <h4>Anggota</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 rscol-xs-6">
                    <div class="alert alert-info back-widget-set text-center">
                        <i class='bx bxs-folder-open nav__icon'></i>
                        <?php
                        $sql5 = "SELECT id from tblcategory ";
                        $query5 = $dbh->prepare($sql1);
                        $query5->execute();
                        $results5 = $query5->fetchAll(PDO::FETCH_OBJ);
                        $listdcats = $query5->rowCount();
                        ?>

                        <h4><?php echo htmlentities($listdcats); ?> </h4>
                        <h4>Kategori</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/script.php'); ?>
</body>

</html>