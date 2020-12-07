<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/signIn.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Perpustakaan | Login </title>
</head>

<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="assets/img/img-login.svg" alt="">
            </div>

            <div class="login__forms">
                <form name="signin" role="form" method="POST" class="login__registre" id="login-in">
                    <h1 class="login__title">Masuk</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Masukan Email Anda" name="emailid" required autocomplete="off" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" name="password" required autocomplete="off" class="login__input">
                    </div>

                    <a href="#" class="login__forgot">Lupa password?</a>

                    <a href="dashboard.php" class="login__button" type="submit" name="login">Sign In</a>

                    <div>
                        <span class="login__account">Belum punya akun?</span>
                        <span class="login__signin" id="sign-up">Sign Up</span>
                    </div>
                    <!-- <div>
                        <span class="login__account">Apakah anda Admin?</span>
                        <span class="login__signin" id="admin">Admin Login</span>
                    </div> -->
                </form>

                <form name="signup" method="post" onSubmit="return valid();" class="login__create none" id="login-up">
                    <h1 class="login__title">Buat Akun</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Masukan Nama" autocomplete="off" required class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" name="email" onBlur="checkAvailability()" autocomplete="off" required class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-phone-call login__icon'></i>
                        <input type="text" placeholder="Nomor Telepon" maxlength="11" autocomplete="off" required class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" autocomplete="off" required class="login__input">
                    </div>

                    <a href="index.php" class="login__button">Sign Up</a>

                    <div>
                        <span class="login__account">Sudah punya akun ?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>
                </form>

                <!-- <form name="admin" role="form" method="POST" class="login__registre" id="admin-login">
                    <h1 class="login__title">Admin</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Masukan Username Anda" name="username" required autocomplete="off" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" name="password" required autocomplete="off" class="login__input">
                    </div>

                    <a href="admin/dashboard.php" class="login__button" type="submit" name="login">Masuk</a>

                    <div>
                        <span class="login__account">Bukan admin?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>