<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

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

    <title>Perpustakaan | Profil</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img href="profil.php" src="assets/Img/profile.png" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="dashboard.php" class="nav__logo">
                    <i class='bx bxs-book-reader nav__logo-icon'></i>
                    <span class="nav__logo-name">Perpustakaan</span>
                </a>

                <div class="nav__list">
                    <a href="dashboard.php" class="nav__link">
                        <i class='bx bxs-dashboard nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="peminjaman.php" class="nav__link">
                        <i class='bx bxs-cart-add nav__icon'></i>
                        <span class="nav__name">Peminjaman</span>
                    </a>

                    <a href="profil.php" class="nav__link active">
                        <i class='bx bxs-user nav__icon'></i>
                        <span class="nav__name">Profil</span>
                    </a>

                    <a href="ganti-pass.php" class="nav__link">
                        <i class='bx bxs-key nav__icon'></i>
                        <span class="nav__name">Ganti Password</span>
                    </a>
                </div>
            </div>

            <a href="logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Profil</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Profil Saya
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post">
                                <?php
                                // $sid = $_SESSION['stdid'];
                                $sql = "SELECT id_siswa,nama_siswa,email_siswa,no_telp,tgl_reg,tgl_update,status from  siswa";
                                $query = $dbh->prepare($sql);
                                // $query->bindParam(':sid', $sid, PDO::PARAM_STR);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {               ?>
                                        <div class="form-group">
                                            <label>ID Siswa: </label>
                                            <?php echo htmlentities($result->id_siswa); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Daftar : </label>
                                            <?php echo htmlentities($result->tgl_reg); ?>
                                        </div>
                                        <?php if ($result->tgl_update != "") { ?>
                                            <div class="form-group">
                                                <label>Tanggal diubah : </label>
                                                <?php echo htmlentities($result->tgl_update); ?>
                                            </div>
                                        <?php } ?>


                                        <div class="form-group">
                                            <label>Status : </label>
                                            <?php if ($result->status == 1) { ?>
                                                <span style="color: green">Aktif</span>
                                            <?php } else { ?>
                                                <span style="color: red">Blok</span>
                                            <?php } ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Masukan Nama</label>
                                            <input class="form-control" type="text" name="fullanme" value="<?php echo htmlentities($result->nama_siswa); ?>" autocomplete="off" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input class="form-control" type="text" name="notelp" maxlength="10" value="<?php echo htmlentities($result->no_telp); ?>" autocomplete="off" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" id="email_siswa" value="<?php echo htmlentities($result->email_siswa); ?>" autocomplete="off" required readonly />
                                        </div>
                                <?php }
                                } ?>

                                <button type="submit" name="update" class="btn btn-primary" id="submit">Pebarui</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/script.php'); ?>
</body>

</html>