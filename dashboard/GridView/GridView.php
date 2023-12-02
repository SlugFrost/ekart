<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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

        .clothe-colors li input[type=radio] {
            display: none;
        }

        .clothe-size li input[type=radio] {
            display: none;
        }

        .card {
            margin-bottom: 1.5rem;
        }

        .card-header {
            border-bottom: 1px solid #e9ebec;
            padding: 19px;
            background-color: #fff;
            font-size: 13px
        }

        .card-title {
            padding: 10px;
            font-size: 18px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dee2e6;
            appearance: none;
            border-radius: 4px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control::placeholder {
            padding-left: 24px;
        }

        .search-box .search-icon {
            font-size: 14px;
            position: absolute;
            top: 0;
            right: 253px;
            height: 93%;
            display: flex;
            align-items: center;
            color: var(--tb-tertiary-color);
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        .avatar-xs {
            height: 2rem;
            width: 2rem;
        }

        .avatar-sm {
            height: 3rem;
            width: 3rem;
        }

        .avatar-title {
            align-items: center;
            display: flex;
            color: #fff;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }

        .word-23 {
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
        }

        .font-122 {
            font-size: 15px;
            font-weight: 600;
        }


        .form-control-sm {
            min-height: calc(1.5em + 0.5rem + calc(1px * 2));
            padding: 0.25rem 0.6rem;
            font-size: .765625rem;
            border-radius: 0.2rem;
        }

        .ecommerce-product-widgets .action {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .ecommerce-product-widgets .label {
            position: absolute;
            left: 10px;
            top: 10px;
        }

        .title-123 {
            font-size: 11px;
        }

        .font-222 {
            font-size: 17px;
        }

        .font-333 {
            font-size: 14px;
        }

        .star-font {
            font-size: 13px;
            display: flex;
            gap: 3px;
        }

        .border-end-dashed {
            border-right-style: dashed !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-222 {
            font-size: 14px;
            font-weight: 700;
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
                            <h4 class="mb-sm-0">Product Grid</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#" class=" text-decoration-none text-dark">Products</a></li>
                                    <li class="breadcrumb-item active">Product Grid</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Filters</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion accordion-flush filter-accordion">
                                <div class="card-body border-bottom">
                                    <div>
                                        <p class="text-muted text-uppercase fs-13 mb-3">Products</p>
                                        <ul class="list-unstyled mb-0 filter-list">
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Grocery</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Fashion</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">5</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Watches</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Electronics</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">5</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Furniture</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">6</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Automotive Accessories</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Appliances</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">7</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center text-decoration-none text-dark">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Kids</h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <p class="text-muted text-uppercase font-122 m b-4">Price</p>

                                    <div id="product-price-range" data-slider-color="info" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect noUi-draggable" style="transform: translate(0%, 0px) scale(1, 1);"></div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="1980.0" aria-valuenow="0.0" aria-valuetext="$ 0">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="2000.0" aria-valuenow="2000.0" aria-valuetext="$ 2000">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formCost d-flex gap-2 align-items-center mt-3">
                                        <input class="form-control form-control-sm" type="text" id="minCost" value="0"> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000">
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingColors">
                                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseColors" aria-expanded="true" aria-controls="flush-collapseColors">
                                            <span class="text-muted text-uppercase font-122">Colors</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseColors" class="accordion-collapse collapse show" aria-labelledby="flush-headingColors">
                                        <div class="accordion-body text-body pt-0">
                                            <ul class="clothe-colors list-unstyled hstack gap-3 mb-0 flex-wrap" id="color-filter">
                                                <li>
                                                    <input type="radio" name="colors" value="success" id="color-1">
                                                    <label class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="info" id="color-2">
                                                    <label class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-2"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="warning" id="color-3">
                                                    <label class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-3"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="danger" id="color-4">
                                                    <label class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-4"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="primary" id="color-5">
                                                    <label class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-5"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="secondary" id="color-6">
                                                    <label class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-6"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="dark" id="color-7">
                                                    <label class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-7"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="light" id="color-8">
                                                    <label class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-8"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSize">
                                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSize" aria-expanded="true" aria-controls="flush-collapseSize">
                                            <span class="text-muted text-uppercase font-122">Sizes</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseSize" class="accordion-collapse collapse show" aria-labelledby="flush-headingSize">
                                        <div class="accordion-body text-body pt-0">
                                            <ul class="clothe-size list-unstyled hstack gap-3 mb-0 flex-wrap" id="size-filter">
                                                <li>
                                                    <input type="radio" name="sizes" value="xs" id="sizeXs">
                                                    <span class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="sizeXs">XS</span>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="s" id="sizeS">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="sizeS">S</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="m" id="sizeM">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="sizeM">M</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="l" id="sizeL">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="sizeL">L</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="xl" id="sizeXl">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="sizeXl">XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="2xl" id="size2xl">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="size2xl">2XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="3xl" id="size3xl">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="size3xl">3XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="4xl" id="size4xl">
                                                    <label class="avatar-xs btn bg-primary-subtle p-0 d-flex align-items-center justify-content-center rounded-circle text-primary" style="font-size: 13px;" for="size4xl">4XL</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingDiscount">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                                            <span class="text-muted text-uppercase font-122">Discount</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                                        <div class="accordion-body text-body pt-1">
                                            <div class="d-flex flex-column gap-2 filter-check" id="discount-filter">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="50" id="productdiscountRadio6">
                                                    <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="40" id="productdiscountRadio5">
                                                    <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="30" id="productdiscountRadio4">
                                                    <label class="form-check-label" for="productdiscountRadio4">
                                                        30% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="20" id="productdiscountRadio3">
                                                    <label class="form-check-label" for="productdiscountRadio3">
                                                        20% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="10" id="productdiscountRadio2">
                                                    <label class="form-check-label" for="productdiscountRadio2">
                                                        10% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="0" id="productdiscountRadio1">
                                                    <label class="form-check-label" for="productdiscountRadio1">
                                                        Less than 10%
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingRating">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                                            <span class="text-muted text-uppercase font-122">Rating</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                                        <div class="accordion-body text-body">
                                            <div class="d-flex flex-column gap-2 filter-check" id="rating-filter">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4" id="productratingRadio4">
                                                    <label class="form-check-label" for="productratingRadio4">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 4 &amp; Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3" id="productratingRadio3">
                                                    <label class="form-check-label" for="productratingRadio3">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 3 &amp; Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2" id="productratingRadio2">
                                                    <label class="form-check-label" for="productratingRadio2">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 2 &amp; Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" id="productratingRadio1">
                                                    <label class="form-check-label" for="productratingRadio1">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 1
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row g-4 mb-4">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="http://localhost/Ecommerce/dashboard/?page=createproduct" class="btn btn-primary" id="addproduct-btn"><i class="bi bi-plus me-1"></i> Add Product</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Products...">
                                        <i class="bi bi-search search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php

                        $sql = "SELECT * FROM `products`";
                        $result = mysqli_query($db, $sql);

                        ?>

                        <div class="row" id="product-grid">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="card ecommerce-product-widgets overflow-hidden">
                                        <div class="card-body">
                                            <div class="bg-light rounded py-5 position-relative">
                                                <div class="dropdown action"> <button class="btn bg-secondary-subtle btn-sm btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                                <img class=" mx-auto d-block rounded-2" src="../dashboard/<?php echo $row['filename']; ?>" style="max-height: 200px;max-width: 100%;" width="100%" height="500px" alt="">
                                                <div class="avatar-xs label">
                                                    <div class="avatar-title bg-danger rounded-circle title-123">25%</div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                                    <h5 class="text-primary font-222 mb-0"> <?php echo $row['price']; ?></h5> <span class="star-font">4.9 <i class="bi bi-star-half text-warning mt-1"></i></span>
                                                </div> <a href="#!" class=" text-decoration-none text-dark">
                                                    <h6 class="fs-16 text-capitalize lh-base text-truncate mb-0"> <?php echo $row['pname']; ?></h6>
                                                </a>
                                                <p class="text-muted"> <?php echo $row['category']; ?></p>
                                                <div class="row d-none">
                                                    <div class="col-6">
                                                        <ul class="clothe-colors list-unstyled hstack gap-1 d-flex mb-0 flex-wrap mb-3">
                                                            <li> <input type="radio" name="color1" id="product-color-12"> <label class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-12"></label> </li>
                                                            <li> <input type="radio" name="color1" id="product-color-13"> <label class="avatar-xxs border border-2 border-white btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-13"></label> </li>
                                                            <li> <input type="radio" name="color1" id="product-color-14"> <label class="avatar-xxs border border-2 border-white btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-14"></label> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="clothe-size list-unstyled hstack gap-2 d-flex mb-0 flex-wrap mb-3">
                                                            <li> <input type="radio" name="sizes1" id="product-size-15"> <label class="avatar-xxs border border-2 border-white btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-size-15">s</label> </li>
                                                            <li> <input type="radio" name="sizes1" id="product-size-16"> <label class="avatar-xxs border border-2 border-white btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-size-16">m</label> </li>
                                                            <li> <input type="radio" name="sizes1" id="product-size-17"> <label class="avatar-xxs border border-2 border-white btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-size-17">l</label> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row text-center g-0">
                                                    <div class="col-4 border-end border-end-dashed">
                                                        <div class="mt-3">
                                                            <h5 class="text-222 text-truncate mb-1"><?php echo $row['instock']; ?></h5>
                                                            <p class="text-muted mb-0">Stocks</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 border-end border-end-dashed">
                                                        <div class="mt-3">
                                                            <h5 class="text-222 text-truncate mb-1"><?php echo $row['orders']; ?></h5>
                                                            <p class="text-muted mb-0">Orders</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mt-3">
                                                            <h5 class="text-222 text-truncate mb-1"><?php echo $row['outofstock']; ?></h5>
                                                            <p class="text-muted mb-0">Out-Of-Stock</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php  } ?>
                        </div>
                        <div class="row mb-4" id="pagination-element" style="display: flex;">
                            <div class="col-lg-12">
                                <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                    <div class="page-item disabled">
                                        <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                                    </div>
                                    <span id="page-num" class="pagination">
                                        <div class="page-item active"><a class="page-link clickPageNumber" href="javascript:void(0);">1</a></div>
                                        <div class="page-item"><a class="page-link clickPageNumber" href="javascript:void(0);">2</a></div>
                                    </span>
                                    <div class="page-item">
                                        <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</body>

</html>