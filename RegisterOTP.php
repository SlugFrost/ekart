<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>OTP Verify | Toner eCommerce + Admin HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
    * {
        box-sizing: border-box;
    }

    .container {
        width: 100%;
    }

    .container-fluid {
        width: 100%;
        float: left;
    }

    .row {
        margin-right: 0px;
    }

    .auth-header {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    .auth-page-wrapper .auth-header .container-fluid {
        max-width: 90%;
    }

    .auth-page-wrapper {
        padding: 90px 0 0;
    }

    .auth-page-wrapper .auth-header {
        height: 70px;
        display: flex;
        align-items: center;
        z-index: 1001;
    }

    .hstack {
        display: flex;
        flex-direction: row;
        align-items: center;
        align-self: stretch;
    }

    .row {
        margin-right: 0px;
    }

    .auth-card {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }

    .card-header:first-child {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1000' height='350' preserveAspectRatio='none' viewBox='0 0 1000 350'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1157%26quot%3b)' fill=' none'%3e%3cpath d=' M328.58 394.08C431.67 392.73 512.94 277.58 722.85 273.08 932.75 268.58 1010.02 108.53 1117.11 105.08' stroke=' rgba(95%2c 157%2c 255%2c 1)' stroke-width=' 2'%3e%3c/path%3e%3cpath d=' M453.78 394.57C543.12 393.38 614.47 292.66 795.29 289.27 976.11 285.88 1045.21 158.59 1136.8 156.27' stroke=' rgba(95%2c 157%2c 255%2c 1)' stroke-width=' 2'%3e%3c/path%3e%3cpath d=' M121.76 365.13C209.07 363.92 287.72 260.74 455.05 260.68 622.38 260.62 621.7 304.43 788.34 304.43 954.99 304.43 1037.59 260.77 1121.63 260.68' stroke=' rgba(95%2c 157%2c 255%2c 1)' stroke-width=' 2'%3e%3c/path%3e%3cpath d=' M476.17 407.18C572.4 393.77 628.5 169.12 783.24 168.97 937.99 168.82 1003.77 325.19 1090.32 329.97' stroke=' rgba(95%2c 157%2c 255%2c 1)' stroke-width=' 2'%3e%3c/path%3e%3cpath d=' M409.3 365.09C484.19 357.63 470.42 198 659.61 197.82 848.8 197.64 1033.73 271.12 1160.23 271.32' stroke=' rgba(95%2c 157%2c 255%2c 1)' stroke-width=' 2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id=' SvgjsMask1157'%3e%3crect width=' 1000' height=' 350' fill=' white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        width: 100%;
        margin: auto;
        float: left;
    }

    .box {
        display: flex;
        justify-content: center;
        align-items: center !important;
        height: 90vh;
    }

    .form1 {
        width: 350px;
        height: 380px;
        background-color: white;
        border-radius: 10px;
        border: 2px solid black;
    }

    .para p {
        padding: 3px;
        margin: 50px 0px 40px 40px;
        border-style: none;
        background-color: transparent;
        font-size: 25px;
        font-weight: 550;
        cursor: pointer;
    }

    .formGroup {
        display: flex;
        justify-content: center;
    }

    .formGroup input {
        border: 2px solid black;
        border-radius: 30px;
        width: 80%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    input:focus {
        outline: none !important;
        font-size: 17px;
        font-weight: bold;
    }

    ::placeholder {
        color: grey;
    }

    .btn2 {
        padding: 10px;
        width: 150px;
        border-radius: 20px;
        background-color: blue;
        border-style: none;
        color: white;
        font-weight: 600;
        cursor: pointer;
    }

    .btn2:hover {
        background-color: black;
    }

    .nine {
        text-align: center;
        color: red;
        margin-top: 5px;
    }

    .ten {
        text-align: end;
        color: #06be06;
        margin-top: 5px;
    }

    .one {
        text-align: center;
        color: #edab16;
        margin-top: 5px;
    }

    .text-123 {
        float: left;
        margin: 11px 8px;
    }

    .form-label {
        width: 100%;
    }
</style>

<body>

    <?php
    include "./authheader1.php"
    ?>

    <section class="position-relative bg-light d-flex align-items-center justify-content-between">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-4">
                            <div class="card-header bg-primary border-0">
                                <div class="row">
                                    <div class="col-lg-4 col-3">
                                        <img src="https://themesbrand.com/toner/html/assets/images/auth/img-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 col-9">
                                        <h1 class="text-white lh-base fw-lighter">OTP Verification</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted fs-15 text-123">Verify OTP to continue to Toner.</p>
                                <div class="p-2">
                                    <form class="signup" method="POST">
                                        <?php

                                        if (isset($_POST['emailsubmit'])) {
                                            $email = $_POST['email'];
                                            $otp = rand(1111, 2222);

                                            $sql = $db->query("SELECT * FROM `login` WHERE email='{$email}'");
                                            if (mysqli_num_rows($sql) < 1) {

                                                $db->query("INSERT INTO `login`(email, otp) VALUES ('{$email}','{$otp}')");
                                        ?>

                                                <script>
                                                    window.location.href = "http://localhost/NewToner/?auth=login";
                                                </script>
                                        <?php
                                                echo "<h3 class=one>*OTP Registerd*</h3>";
                                            } else {

                                                echo "<h3 class=nine>*alrwady axist*</h3>";
                                            }
                                        }

                                        if (isset($_POST['mobilesubmit'])) {
                                            $mobile = $_POST['mobile'];
                                            $otp = rand(1111, 2222);
        
                                            $sql = $db->query("SELECT * FROM `login` WHERE mobile='{$mobile}'");
                                            if (mysqli_num_rows($sql) < 1) {
        
                                                $db->query("INSERT INTO `login`(mobile, otp) VALUES ('{$mobile}','{$otp}')");
                                        ?>
        
                                                <script>
                                                    window.location.href = "http://localhost/NewToner/?auth=login";
                                                </script>
                                        <?php
                                                echo "<h3 class=one>*OTP Registerd*</h3>";
                                            } else {
        
                                                echo "<h3 class=nine>*Wrong OTP*</h3>";
                                            }
                                        }
                                        ?>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">OTP</label>
                                            <input type="number" name="otp" class="form-control" placeholder="Enter One Time Password">
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit" name="emailsubmit">Verify</button>
                                        </div>

                                        <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div class="pt-2 hstack gap-2 justify-content-center">
                                                <button type="button" class="btn bg-primary-subtle text-primary"><i class="bi bi-facebook fs-16"></i></button>
                                                <button type="button" class="btn bg-danger-subtle text-danger"><i class="bi bi-google fs-16"></i></button>
                                                <button type="button" class="btn bg-dark-subtle text-dark"><i class="bi bi-github fs-16"></i></button>
                                                <button type="button" class="btn bg-info-subtle text-info"><i class="bi bi-twitter fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>


    <?php
    include "./authfooter1.php"
    ?>
</body>

</html>