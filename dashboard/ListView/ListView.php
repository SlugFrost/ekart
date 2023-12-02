<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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

        .gridjs-wrapper {
            box-shadow: none;
            border: 1px solid #e9ebec;
            border-radius: 0;
        }

        td.gridjs-td,
        th.gridjs-th {
            border: 1px solid #e9ebec;
            padding: 0.75rem 0.6rem;
        }

        button.gridjs-sort {
            float: none;
            display: inline-block;
            vertical-align: middle;
            width: 10px;
            height: 20px;
        }

        th.gridjs-th .gridjs-th-content {
            float: none;
            display: inline-block;
            vertical-align: middle;
            font-weight: 600;
        }

        th.gridjs-th {
            border: 0;
            padding: 9px 6px;
        }

        .gridjs-border-none td.gridjs-td {
            border-right-width: 0;
            border-left-width: 0;
        }

        .gridjs-footer {
            border: none !important;
            padding: 12px 0 0;
            box-shadow: none;
            background-color: transparent;
        }

        .gridjs-pagination {
            color: #3d4044;
            float: left;
            display: flex;
            justify-content: center;
            gap: 50%;
            width: 100%;
        }

        .gridjs-summary {
            color: #878a99;
            margin-top: 8px !important;
        }

        .gridjs-pages {
            float: right;
        }

        .gridjs-currentPage {
            background-color: #4b93ff;
            color: #fff;
            border-color: #4b93ff;
            font-weight: 500;
        }

        .gridjs-pagination .gridjs-pages button {
            margin-left: 2px;
            border-radius: 0.25rem !important;
            border: 1px solid #fff;
            padding: 3px 13px;
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

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.5rem;
            font-size: 1px;
            color: #0c192c;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            border-radius: 0.15s ease;
        }

        @media (prefers-reduced-motion:reduce) {
            .accordion-button {
                transition: none
            }
        }

        .accordion-button:not(.collapsed) {
            color: #3c76cc;
            background-color: #dbe9ff;
            box-shadow: inset 0 calc(-1 * 1px) 0 #e9ebec;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233c76cc'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transform: rotate(-180deg);
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: 0.75rem;
            height: 0.75rem;
            margin-left: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c192c'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 0.75rem;
            transition: transform 0.2s ease-in-out;
        }

        @media (prefers-reduced-motion:reduce) {
            .accordion-button::after {
                transition: none
            }
        }

        .accordion-button:hover {
            z-index: 2;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: #5d9eff;
            outline: 0;
            box-shadow: 0 0 0 0 rgba(75, 147, 255, 0.1);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item {
            color: #0c192c;
            background-color: #fff;
            border: 1px solid #e9ebec;
        }

        .accordion-item:first-of-type {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0;
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }

        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }

        .accordion-flush .accordion-item:first-child {
            border-top: 0;
        }

        .accordion-flush .accordion-item:last-child {
            border-bottom: 0;
        }

        .accordion-flush .accordion-item .accordion-button,
        .accordion-flush .accordion-item .accordion-button.collapsed {
            border-radius: 0;
        }

        [data-bs-theme=dark] .accordion-button::after {
            --tb-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23dbe9ff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --tb-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23dbe9ff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .noUi-target {
            box-shadow: none;
            background-color: #f3f6f9;
            border-color: #f3f6f9;
            background: #FAFAFA;
            border-radius: 4px;
            border: 1px solid #D3D3D3;
            position: relative;
            touch-action: none;
            user-select: none;
        }

        .noUi-horizontal {
            height: 4px;
        }

        .noUi-base {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .noUi-connects {
            overflow: hidden;
            border-radius: 3px;
            will-change: transform;
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            transform-origin: 0 0;
            transform-style: flat;
            background: #1ea6d3;
        }

        [data-slider-color=info] .noUi-handle {
            background: #1ea6d3;
        }

        .noUi-draggable {
            cursor: ew-resize;
        }

        .noUi-horizontal .noUi-origin {
            height: 0;
        }

        .noUi-horizontal .noUi-handle {
            height: 16px;
            width: 16px;
            border-radius: 50%;
            right: -10px !important;
            top: -7px;
        }

        .noUi-touch-area {
            height: 100%;
            width: 100%;
        }

        .noUi-connect,
        .noUi-origin {
            will-change: transform;
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            transform-origin: 0 0;
            transform-style: flat;
        }

        .noUi-handle {
            backface-visibility: hidden;
            position: absolute;
            cursor: default;
        }

        .form-control-sm {
            min-height: calc(1.5em + 0.5rem + calc(1px * 2));
            padding: 0.25rem 0.6rem;
            font-size: .765625rem;
            border-radius: 0.2rem;
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
                            <h4 class="mb-sm-0">Product List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                                    <li class="breadcrumb-item active">Product List</li>
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
                            <?php

                            $query = "SELECT * FROM products";
                            $query_run = mysqli_query($db, $query);
                            ?>
                            <div class="col-sm-auto">
                                <div>
                                    <a href="http://localhost/Ecommerce/dashboard/?page=createproduct" class="btn btn-success" id="addproduct-btn"><i class="bi bi-plus me-1"></i> Add Product</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Products...">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example" class="table table-striped data-table dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 60px;">ID</th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 201px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 144px;">Category</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66px;">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">In-Stock</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Out-Of-Stock</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Orders</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">View</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                          ?>

                              <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['pname']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><img src="../dashboard/<?php echo $row['filename']; ?>" width="50" height="50"  alt=""></td>
                                <td><?php echo $row['instock']; ?></td>
                                <td><?php echo $row['outofstock']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['orders']; ?></td>
                                
                                

                                <td><a href="<?php $baseurl?>?page=view&id=<?= $row['id']; ?>" class="btn btn-warning">View</a></td>

                                <td><a href="<?php $baseurl?>?page=edit&id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>

                                <?php

                                if(isset($_POST['deletedata'])){
                                    $id = $_POST['delid'];

                                $sql = "DELETE FROM `products` WHERE id='{$id}'";
                                $delete = mysqli_query($db,$sql);
                              
                                }

                                ?>

                                <td>
                                 <form method="POST">
                                    <input type="hidden" value="<?= $row['id']; ?>"  name="delid"/>
                                 <button type="submit" name="deletedata" class="btn btn-danger">Delete</button>

                                 </form>
                                 </td>
                                

                              </tr>

                          <?php
                            }
                          } else {
                            echo "No Record Found";
                          }

                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Category</th>
                            <th rowspan="1" colspan="1">Image</th>
                            <th rowspan="1" colspan="1">In-Stock</th>
                            <th rowspan="1" colspan="1">Out-Of-Stock</th>
                            <th rowspan="1" colspan="1">Price</th>
                            <th rowspan="1" colspan="1">Orders</th>
                            <th rowspan="1" colspan="1">View</th>
                            <th rowspan="1" colspan="1">Edit</th>
                            <th rowspan="1" colspan="1">Delete</th>
                          </tr>
                        </tfoot>
                      </table>
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
    <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>