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

        .card-body{
            font-size: .875rem;
        }

        .card-header {
            padding: 12px 12px;
            margin-bottom: 0;
        }

        .card-header:first-child {
            border-radius: calc(0.3rem - (1px)) 0 0;
        }

        .avatar-sm {
            height: 3rem;
            width: 3rem;
        }

        .avatar-title {
            align-items: center;
            background-color: #4b93ff;
            color: #fff;
            display: flex;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }

        .word-1 {
            font-size: 17px;
            font-weight: 600;
        }

        .word-2 {
            font-size: 14px;
            font-weight: 400;
            color: #878a99;
        }

        .ck-reset_all :not(.ck-reset_all-excluded *),
        .ck.ck-reset_all {
            border-collapse: collapse;
            color: #333;
            cursor: auto;
            float: none;
            font: normal normal normal 13px/1.84615 Helvetica, Arial, Tahoma, Verdana, Sans-Serif;
            text-align: left;
            white-space: nowrap;
        }

        .ck-reset_all :not(.ck-reset_all-excluded *),
        .ck.ck-reset,
        .ck.ck-reset_all {
            word-wrap: break-word;
            background: transparent;
            border: 0;
            margin: 0;
            padding: 0;
            text-decoration: none;
            transition: none;
            vertical-align: middle;
        }

        .ck-reset_all :not(.ck-reset_all-excluded *),
        .ck.ck-reset,
        .ck.ck-reset_all {
            box-sizing: border-box;
            height: auto;
            position: static;
            width: auto;
        }

        .ck-rounded-corners .ck.ck-editor__top .ck-sticky-panel .ck-toolbar,
        .ck.ck-editor__top .ck-sticky-panel .ck-toolbar.ck-rounded-corners {
            border-radius: 0.25rem !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .ck.ck-toolbar {
            align-items: center;
            display: flex;
            flex-flow: row nowrap;
            user-select: none;
            padding: 0 calc(0.6em *0.5);
            background: rgba(243, 246, 249, .75) !important;
            border: 1px solid #e9ebec;
        }

        .choices[data-type*=select-one] {
            cursor: pointer;
        }

        .choices:last-child {
            margin-bottom: 0;
        }

        .choices {
            position: relative;
            font-size: 16px;
        }

        .choices__inner {
            display: inline-block;
            vertical-align: middle;
            width: 100%;
            background-color: #fff;
            padding: 0.25rem 3.6rem 0.1rem 0.5rem;
            border: 1px solid #e9ebec;
            border-radius: 0.25rem !important;
            font-size: .875rem;
            min-height: 40.59px;
            overflow: hidden;
        }

        .choices[data-type*=select-one] .choices__input {
            width: 100%;
            padding: 0.6rem 0.9rem;
            background-color: #fff;
            border: 1px solid #e9ebec;
            font-size: .875rem;
            border-radius: 0.25rem;
            color: #0c192c;
            margin-bottom: 10px;

        }

        .choices [hidden] {
            display: none !important;
        }

        .choices__list--single {
            display: inline-block;
            padding: 4px 16px 4px 4px;
            width: 100%;
        }

        .ck-toolbar__items {
            align-items: center;
            display: flex;
            flex-flow: row wrap;
            flex-grow: 1;
        }

        .ck.ck-toolbar>.ck-toolbar__items>:not(.ck-toolbar__line-break),
        .ck.ck-toolbar>.ck.ck-toolbar__grouped-dropdown {
            margin-bottom: calc(0.6em*0.5);
            margin-top: calc(0.6em*0.5);
            margin-right: calc(0.6em*0.5);
        }

        .ck.ck-icon {
            font-size: .8333350694em;
            height: calc(1.84615*1em);
            width: calc(1.84615*1em);
            will-change: transform;
        }

        .ck.ck-button .ck-button__label,
        a.ck.ck-button .ck-button__label {
            display: none;
        }

        .ck.ck-dropdown .ck-dropdown__arrow {
            width: 10px;
            pointer-events: none;
            z-index: 1;
            margin-left: 0.6rem;
            right: 0.6rem;
        }

        .ck.ck-voice-label {
            display: none;
        }

        .ck .ck-reset .ck-list {
            list-style: none
        }

        .ck.ck-dropdown .ck-button.ck-dropdown__button .ck-button__label {
            overflow: hidden;
            text-overflow: ellipsis;
            width: 7em;
        }

        .ck.ck-dropdown {
            display: inline-block;
            position: relative;
            font-size: inherit;
        }

        .ck.ck-dropdown .ck-dropdown__panel {
            display: none;
            max-width: 75vw;
            position: absolute;
            z-index: calc(1+999+1);
        }

        .ck.ck-media-form {
            align-items: flex-start;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }

        .ck.ck-responsive-form {
            padding: calc(0.6em*1.5);
        }

        .ck.ck-button,
        a.ck.ck-button {
            align-items: center;
            display: inline-flex;
            justify-content: left;
            position: relative;
            user-select: none;
            border: 1px solid transparent;
            cursor: default;
            font-size: inherit;
            line-height: 1;
            min-height: 2.3rem;
            min-width: 2.0rem;
            text-align: center;
            transition: box-shadow .2s ease-in-out, border .2s ease-in-out;
            vertical-align: middle;
            white-space: nowrap;
        }

        .ck.ck-button.ck-button_with-text .ck-button__label,
        a.ck.ck-button.ck-button_with-text .ck-button__label {
            display: inline-block;
        }

        .ck-hidden {
            display: none !important;
        }

        .ck.ck-editor__editable_inline {
            border: 1px solid #e9ebec;
            overflow: auto;
            padding: 0 0.6rem;
            border-top: 0 !important;
            
        }

        .ck-editor__editable {
    min-height: 245px!important;
}

.ck p{
    margin-top: calc(0.6em*0.5);
    margin-bottom: 0;
}

.form-label{
    font-size: 14px;
}


.choices__list--dropdown {
    visibility: hidden;
    z-index: 1;
    display: none;
    position: absolute;
    width: 100%;
    background-color: #fff;
    border: 1px solid #e9ebec;
    box-shadow: 0 5px 10px rgba(135,138,153,.12);
    top: 100%;
    margin-top: 0;
    padding: 10px 10px 20px 10px;
    border-bottom-left-radius: 2.5px;
    border-bottom-right-radius: 2.5px;
    overflow: hidden;
    word-break: break-all;
    will-change: visibility;
    animation-duration: .3s;
    animation-fill-mode: both;
    transform: translateY(1px);
}

.choices[data-type*=select-one]:after {
    content: "\f0140";
    position: absolute;
    border: 0;
    border-color: #0b1729 transparent transparent;
    right: 11.5px;
    left: auto;
    font-family: "Material Design Icons";
    width: auto;
    height: auto;
    margin-top: 0;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
}

.choices__list--dropdown .choices__list {
    position: relative;
    max-height: 300px;
    overflow: auto;
    will-change: scroll-position;
}

.choices__list--dropdown .choices__item--selectable:after {
        content:attr(data-select-text);
        font-size: 12px;
        opacity: 0;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%)
    }

.choices__list--dropdown .choices__item {
    position: relative;
    font-size: .875rem;
    padding: 0.35rem 1.2rem 0.35rem 16px;
}

.error-msg {
    display: none;
    color: #bf3959;
    font-size: .875em;
}

.choices__list--dropdown.is-active {
    visibility: visible;
    animation-name: DropDownSlide;
}

.dropzone {
    min-height: 230px;
    border: 2px dashed #e9ebec;
    background: #fff;
    border-radius: 6px;
}

.image-clickable {
    cursor: pointer;
    display: block;
}

.dropzone .dz-message {
    font-size: 24px;
    width: 100%;
    margin: 1em 0;
    text-align: center;
}

.uploadlabel span{
    font-size: 70px;
    color: #18a7ff;
}

.uploadlabel p{
    color: #18a7ff;
    font-size: 20px;
    font-weight: 800;
    font-family: cursive;
}

.uploaded{
    margin: 30px 0;
    font-size: 16px;
    font-weight: 700;
    color: #a5a5a5;
}

.showfilebox{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0;
    padding: 10px 15px;
    box-shadow: #0000000d 0px 0px 0px 1px, #d1d5db3d 0px 0px 0px 1px inset;
}

.showfilebox .left{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filetype{
    background: #18a7ff;
    color: #fff;
    padding: 5px 15px;
    font-size: 20px;
    text-transform: capitalize;
    font-weight: 700;
    border-radius: 3px;
}

.left h3{
    font-weight: 600;
    font-size: 18px;
    color: #292F42;
    margin: 0;
}

.right span{
    background: #18a7ff;
    color: #fff;
    width: 30px;
    height: 30px;
    font-size: 25px;
    line-height: 25px;
    display: inline-block;
    text-align: center;
    font-weight: 600;
    cursor: pointer;
    border-radius: 50%;

}

.clothe-colors li label {
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    text-transform: none;
    letter-spacing: 0;
    position: relative;
}

.hstack {
    display: flex;
    flex-direction: row;
    align-items: center;
    align-self: stretch;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.clothe-colors li input[type=checkbox], .clothe-colors li input[type=radio] {
    display: none;
}

.clothe-size li input[type=checkbox], .clothe-size li input[type=radio] {
    display: none;
}

.avatar-xs {
    height: 2rem;
    width: 2rem;
}



    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="main-content">
            <div class="page-content">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Create Orders</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#" class=" text-decoration-none">Orders</a></li>
                                <li class="breadcrumb-item active">Create Orders</li>
                               
                                    
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <?php

                $con = new mysqli("localhost", "root", "", "toner login");

                if (isset($_POST['submit'])) {
                    $cname = $_POST['cname'];
                    $pname = $_POST['pname'];
                    $amount = $_POST['amount'];
                    $orderdate = $_POST['orderdate'];
                    $deliverydate = $_POST['deliverydate'];
                    $paymethod = $_POST['paymethod'];
                    $status = $_POST['status'];

                    $sql = $con->query("SELECT * FROM `orders` WHERE cname='{$cname}' ");
                    if (mysqli_num_rows($sql) < 1) {

                        $insertquery = $con->query("INSERT INTO `orders`(cname, pname, amount, orderdate, deliverydate, paymethod, status) VALUES ('{$cname}','{$pname}','{$amount}','{$orderdate}', '{$deliverydate}', '{$paymethod}', '{$status}')");
                        

                    }
                        if ($con) {
                            echo "<h2 class=ten>*REGISTERED*</h2>";
                        }
                    else {
                        echo "<h2 class=nine>*USER ALREADY EXIST*</h2>";
                    }
                }
                ?>

                <form method="POST" action="" class="needs-validation">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header p-3 bg-white">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-primary-subtle text-primary fs-20">
                                                    <i class="bi bi-box-seam"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1 word-1">Order Information</h5>
                                            <p class="text-muted mb-0 word-2">Fill all information below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-medium" >Customer Name</label>
                                        <input type="text" class="form-control" name="cname" placeholder="Enter Customer Name" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-medium">Product Name</label>
                                        <input type="text" class="form-control" name="pname" placeholder="Enter product Name" required="">
                                    </div>

                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div class="mb-3 w-100">
                                            <label class="form-label fw-medium">Amount</label>
                                            <input type="text" class="form-control" name="amount" placeholder="Enter Amount" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div class="mb-3 w-100">
                                            <label class="form-label fw-medium">Order Date</label>
                                            <input type="date" class="form-control" name="orderdate" placeholder="Enter Order Date" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div class="mb-3 w-100">
                                            <label class="form-label fw-medium">Delivery Date</label>
                                            <input type="date" class="form-control" name="deliverydate" placeholder="Enter Delivery Date" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div class="mb-3 w-100">
                                            <label class="form-label fw-medium">Payment Method</label>
                                            <input type="text" class="form-control" name="paymethod" placeholder="Enter Payment Method" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start">
                                            <div class="mb-3 w-100">
                                            <label class="form-label fw-medium">Status</label>
                                            <input type="text" class="form-control" name="status" placeholder="Enter Status" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- end card -->
                            <div class="text-end mb-3">
                                <button type="submit" name="submit" class="btn btn-success w-sm">Submit</button>
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