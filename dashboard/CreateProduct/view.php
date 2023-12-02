<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css" />
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    <title>List View</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .container-fluid {
            width: 100%;
            float: left;
        }

        .row {
            margin-right: 0px;
        }

        .main-content {
            margin-left: 250px;
        }

        .page-content {
            padding: calc(70px + 35px + 1.5rem) calc(1.5rem * .5) 0px calc(1.5rem * .5);
        }

        .page-title-box {
            padding: 0 0 20px;
        }

        .page-title-box h4 {
            font-weight: 700;
            font-size: 15px !important;
            text-transform: uppercase;
        }

        .page-title-box .breadcrumb {
            background-color: transparent;
            padding: 0;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            margin-bottom: 1.5rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e9ebec;
            border-radius: 0.3rem;
        }

        .card-body {
            font-size: .875rem;
        }

        .line {
            position: relative;
            left: 48px;
        }

        .instock {
            width: 100px;
            height: 30px;
            border: 2px solid grey;
            font-weight: 500;
        }

        .cat {
            font-weight: 500;
        }
    </style>
</head>

<body>

    <?php

    $id = $_GET['id'];

    $sql = "SELECT * FROM `products` WHERE id='{$id}'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $pname = $row['pname'];
    $description = $row['description'];
    $category = $row['category'];
    $filename = $row['filename'];
    $instock = $row['instock'];
    $outofstock = $row['outofstock'];
    $price = $row['price'];
    $orders = $row['orders'];

    ?>
    <div class="container-fluid">
        <div class="main-content">
            <div class="page-content">

                <form>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <img class="float-start" src="./pages/<?php echo $filename; ?>" width="500" height="350" alt="">

                                    <div class="d-flex">
                                        <h1 class="ms-5"><?php echo $pname; ?></h1>
                                    </div>
                                    <br>
                                    <div class="d-flex">
                                        <h4 class="ms-5"><?php echo $price; ?></h4>
                                    </div>
                                    <hr class="line w-50">
                                    <div class="d-flex">
                                        <p class="ms-5 fs-6"><?php echo $description; ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="instock ms-5 mb-2 d-flex align-items-center justify-content-center"><?php echo $instock; ?></div>
                                    </div>
                                    <hr class="line w-50">
                                    <div class="ms-5 mb-3 btn btn-dark">ADD TO CART</div>
                                    <div class="d-flex">
                                        <p class="ms-5 fs-5"><span class="cat">Category :- </span><?php echo $category; ?></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>