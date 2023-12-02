<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Sign Up | Toner eCommerce + Admin HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
</style>

<body>
<?php
    include "./authheader1.php"
    ?>
    <?php

    if (isset($_POST['emailsubmit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $otp = rand(1111, 2222);

        $sql = $db->query("SELECT * FROM `login` WHERE email='{$email}' ");

        if (mysqli_num_rows($sql) < 1) {

            $db->query("INSERT INTO `login`(firstname, lastname, username, email, password,otp) VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password}','{$otp}')");

            //Import PHPMailer classes into the global namespace
            //These must be at the top of your script, not inside a function
            //Load Composer's autoloader
            require '../vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'hvsain12@gmail.com';                     //SMTP username
                $mail->Password   = 'Bhm8TsR4P76aEVgr';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress($email);     //Add a recipient


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    =  "Your Register OTP" . $otp;

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

    ?>


            <script>
                window.location.href = "http://localhost/NewToner/RegisterOTP.php?email=<?= $email ?>";
            </script>

        <?php
            echo "<h2 class=ten>*REGISTERED*</h2>";
        } else {
            echo "<h2 class=ten>*NOT REGISTERED*</h2>";
        }
    }


    if (isset($_POST['mobilesubmit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $otp = rand(1111, 2222);


        $sql = $db->query("SELECT * FROM `login` WHERE mobile='{$mobile}' ");


        if (mysqli_num_rows($sql) < 1) {

            $db->query("INSERT INTO `login`(firstname, lastname, username, mobile, password,otp) VALUES ('{$firstname}','{$lastname}','{$username}','{$mobile}','{$password}','{$otp}')");




            require  '../../vendor/autoload.php';

            // Your Account SID and Auth Token from console.twilio.com
            $sid = "AC96804fc48974f2abf9b8d46258782f1b";
            $token = "7cf3d71a21c69462ad6df7d0b0aeda37";
            $client = new Twilio\Rest\Client($sid, $token);

            // Use the Client to make requests to the Twilio REST API
            $client->messages->create(
                // The number you'd like to send the message to
                '+91' . $mobile,
                [
                    // A Twilio phone number you purchased at https://console.twilio.com
                    'from' => '+19208807092',
                    // The body of the text message you'd like to send
                    'body' => "Your Register OTP" . $otp
                ]
            );
        ?>


            <script>
                window.location.href = "http://localhost/NewToner/RegisterOTP.php?mobile=<?= $mobile ?>";
            </script>

    <?php
            echo "<h2 class=ten>*REGISTERED*</h2>";
        } else {

            echo "<h2 class=nine>*USER Already Found*</h2>";
        }
    }
    ?>




    <section class="position-relative bg-light d-flex align-items-center justify-content-between">

        <div class="w-100">
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
                                            <h1 class="text-white lh-base fw-lighter">Let's Get Started With Toner Store</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted fs-15">Get your free Toner account now</p>
                                    <div class="p-2">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button" role="tab" aria-controls="email-tab-pane" aria-selected="true">Email</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile-tab-pane" type="button" role="tab" aria-controls="mobile-tab-pane" aria-selected="false">Mobile</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="email-tab-pane" role="tabpanel" aria-labelledby="email-tab" tabindex="0">
                                                <br>
                                                <form class="needs-validation" method="POST" onsubmit="return formsubmit()">

                                                    <div class="mb-3">
                                                        <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter first name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter last name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter username
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" name="email" placeholder="Enter email address" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter email
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="password" placeholder="Enter password" aria-describedby="passwordInput" required="">
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="bi bi-eye-fill align-middle"></i></button>
                                                            <div class="invalid-feedback">
                                                                Please enter password
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Toner <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit" name="emailsubmit">Sign Up</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button" class="btn bg-primary-subtle text-primary"><i class="bi bi-facebook fs-16"></i></button>
                                                            <button type="button" class="btn bg-danger-subtle text-danger"><i class="bi bi-google fs-16"></i></button>
                                                            <button type="button" class="btn bg-dark-subtle text-dark"><i class="bi bi-github fs-16"></i></button>
                                                            <button type="button" class="btn bg-info-subtle text-info"><i class="bi bi-twitter fs-16"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- email tab closed -->

                                            <div class="tab-pane fade" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">
                                                <br>
                                                <form class="needs-validation" method="POST" onsubmit="return formsubmit()">

                                                    <div class="mb-3">
                                                        <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter first name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter last name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter username
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="usermobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                                        <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter mobile
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="password" placeholder="Enter password" aria-describedby="passwordInput" required="">
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="bi bi-eye-fill align-middle"></i></button>
                                                            <div class="invalid-feedback">
                                                                Please enter password
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Toner <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit" name="mobilesubmit">Sign Up</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button" class="btn bg-primary-subtle text-primary"><i class="bi bi-facebook fs-16"></i></button>
                                                            <button type="button" class="btn bg-danger-subtle text-danger"><i class="bi bi-google fs-16"></i></button>
                                                            <button type="button" class="btn bg-dark-subtle text-dark"><i class="bi bi-github fs-16"></i></button>
                                                            <button type="button" class="btn bg-info-subtle text-info"><i class="bi bi-twitter fs-16"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- mobile tab closed -->

                                        </div>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Already have an account ? <a href="http://localhost/NewToner/login.php" class="fw-semibold text-primary text-decoration-underline"> Login </a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </section>

    <?php
    include "./authfooter1.php"
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>