<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Sign In | Toner eCommerce + Admin HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

    .auth-header{
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
</style>

<body>
    <?php
    include "./dbconfig.php";
    ?>

<?php

if(isset($_SESSION['user'])){

}


    ?>

    <section class="auth-page-wrapper position-relative bg-light d-flex align-items-center justify-content-between">
        <div class="auth-header position-fixed top-0 start-0 end-0 bg-body">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <a class="navbar-brand mb-2 mb-sm-0" href="http://localhost/NewToner/">
                            <img src="logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="22">
                        </a>
                    </div><!---end col-->
                    <div class="col-auto">
                        <ul class="list-unstyled hstack gap-2 mb-0">
                            <li class="me-md-3">
                                <a href="#!" class="text-body fw-medium text-decoration-none">Become a Selling</a>
                            </li>
                            <li class="d-none d-md-block">
                                <a href="#!" class="btn bg-secondary-subtle text-secondary d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-google-play mt-1 me-2"></i> Download App
                                </a>
                            </li>
                            <li class="d-none d-md-block">
                                <a href="#!" class="btn bg-primary-subtle text-primary d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-apple mt-1 me-2"></i> Download App
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--end row-->
            </div><!--end container-fluid-->
        </div>
    </section>
