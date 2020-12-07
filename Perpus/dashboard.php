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

    <title>Perpustakaan | User Dashboard</title>
</head>

<body id="body-pd">
    <?php include('includes/navbar.php'); ?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">DASHBOARD</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-3 col-xs-6">
                    <div class="alert alert-info back-widget-set text-center">
                        <i class='bx bxs-book nav__icon'></i>
                        <?php
                        $sid = $_SESSION['stdid'];
                        $sql1 = "SELECT id_siswa from peminjaman where id_siswa=:sid";
                        $query1 = $dbh->prepare($sql1);
                        $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
                        $query1->execute();
                        $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                        $peminjaman = $query1->rowCount();
                        ?>

                        <h4><?php echo htmlentities($peminjaman); ?> </h4>
                        <h4>Buku yang dipinjam</h4>
                    </div>
                </div>

                <div class="col-md-5 col-sm-3 col-xs-6">
                    <div class="alert alert-warning back-widget-set text-center">
                        <i class='bx bx-recycle nav__icon'></i>
                        <?php
                        $rsts = 0;
                        $sql2 = "SELECT id from tblissuedbookdetails where StudentID=:sid and RetrunStatus=:rsts";
                        $query2 = $dbh->prepare($sql2);
                        $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                        $query2->bindParam(':rsts', $rsts, PDO::PARAM_STR);
                        $query2->execute();
                        $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                        $returnedbooks = $query2->rowCount();
                        ?>

                        <h4><?php echo htmlentities($returnedbooks); ?></h4>
                        <h4>Buku yang belum dikembalikan</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/script.php'); ?>
</body>
</html>