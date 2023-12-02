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
    <title>Document</title>
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


        .simplebar-wrapper {
            overflow: hidden;
            width: inherit;
            height: inherit;
            max-width: inherit;
            max-height: inherit;
        }

        .simplebar-height-auto-observer-wrapper {
            box-sizing: inherit !important;
            height: 100%;
            width: 100%;
            max-width: 1px;
            position: relative;
            float: left;
            max-height: 1px;
            overflow: hidden;
            z-index: -1;
            padding: 0;
            margin: 0;
            pointer-events: none;


        }

        .simplebar-height-auto-observer {
            box-sizing: inherit;
            display: block;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            height: 1000%;
            width: 1000%;
            min-height: 1px;
            min-width: 1px;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
        }

        .simplebar-offset {
            direction: inherit !important;
            box-sizing: inherit !important;
            resize: none !important;
            position: absolute;
            top: 0;
            left: 0 !important;
            bottom: 0;
            right: 0 !important;
            padding: 0;
            margin: 0;
        }

        .simplebar-content-wrapper {
            direction: inherit;
            box-sizing: border-box !important;
            position: relative;
            display: block;
            width: auto;
            visibility: visible;
            max-width: 100%;
            max-height: 1400px;
            scrollbar-width: none;
            padding: 0 !important;
        }

        .sidebar-background {
            position: absolute;
            z-index: -1;
            height: 100%;
            width: 100%;
            display: block;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: 50%;
            opacity: .07;
        }

        #scrollbar {
            position: relative;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: flex-start;
        }

        .user-name-text {
            font-size: 14px;
            color: #495057;
        }

        .user-name-sub-text {
            font-size: 14px;
            color: #878a99;
            font-weight: 600;
        }

        .menu-link :hover {
            color: #0d6efd;
        }

        .menu-title {
            letter-spacing: .05em;
            cursor: default;
            font-size: 11px;
            text-transform: uppercase;
            color: #919da9;
            font-weight: 600;
        }

        .menu-title span {
            padding: 12px 0px;
            display: inline-block;
        }

        .logo {
            line-height: 70px;
        }

        .logo-dark {
            display: inline-block;
        }



        .navbar-menu {
            width: 250px;
            z-index: 1002;
            background: #fff;
            border-right: #e9ebec;
            bottom: 0;
            margin-top: 0;
            position: fixed;
            top: 35px;
            transition: all .1s ease-out;
        }

        .navbar-nav {
            position: relative;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: flex-start;
        }



        .navbar-menu .navbar-nav .nav-link {
            color: #6d7080;
            font-family: Switzer;
        }



        .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
            content: "\f0142";
            font-family: "Material Design Icons";
            margin-left: auto;
            transition: transform .2s;
            font-size: 1.05rem;
            position: absolute;
            right: 18px;
            color: #919da9;
        }

        .navbar-brand-box {
            text-align: center;
            padding: 22 1.3rem;
            transition: all .1s ease-out;
            border-right: 1px solid #e9ebec;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="http://localhost/NewToner/" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="logo-dark.png" alt="" height="26">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar" data-simplebar="init" class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <div class="container-fluid">

                                        <div id="two-column-menu">
                                        </div>
                                        <ul class="navbar-nav" id="navbar-nav" data-simplebar="init">
                                            <div class="simplebar-wrapper" style="margin: 0px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                            <div class="simplebar-content" style="padding: 0px;">
                                                                <li class="menu-title"><span class="t-menu">Menu</span></li>
                                                                <li class="nav-item">
                                                                    <a href="http://localhost/NewToner/dashboard" class="nav-link menu-link text-primary active"> <i class="bi bi-speedometer2"></i> <span class="t-dashboard ms-2">Dashboard</span> <span class="badge badge-pill badge-soft-danger" class="t-hot">Hot</span></a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                                                        <i class="bi bi-box-seam"></i> <span class="t-products ms-2">Products</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarProducts">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=listview" class="nav-link" class="t-list-view">List View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=gridview" class="nav-link" class="t-grid-view">Grid View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=overview" class="nav-link" class="t-overview">Overview</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=createproduct" class="nav-link" class="t-create-product">Create Product</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=categories" class="nav-link" class="t-categories">Categories</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=subcategories" class="nav-link" class="t-sub-categories">Sub Categories</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                                                        <i class="bi bi-cart4"></i> <span class="t-orders ms-2">Orders</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarOrders">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=orderlistview" class="nav-link" class="t-list-view">List View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/NewToner/dashboard/?page=orderoverview" class="nav-link" class="t-overview">Overview</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"><i class="bi bi-calendar-week"></i> <span class="t-calendar ms-2">Calendar</span> </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                                                        <i class="bi bi-binoculars"></i> <span class="t-sellers ms-2">Sellers</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarSellers">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-list-view">List View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-grid-view">Grid View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-overview">Overview</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                                                        <i class="bi bi-archive"></i> <span class="t-invoice ms-2">Invoice</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarInvoice">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-list-view">List View</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-overview">Overview</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-create-invoice">Create Invoice</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"> <i class="bi bi-person-bounding-box"></i> <span class="t-users-list ms-2">Users List</span> </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarShipping" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarShipping">
                                                                        <i class="bi bi-truck"></i> <span class="t-shipping ms-2">Shipping</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarShipping">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-shipping-list">Shipping List</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-shipments">Shipments</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"> <i class="bi bi-tag"></i> <span class="t-coupons ms-2">Coupons</span> </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"><i class="bi bi-star"></i> <span class="t-reviews-ratings ms-2">Reviews &amp; Ratings</span></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"><i class="bi bi-shop"></i> <span class="t-brands ms-2">Brands</span> </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link menu-link"><i class="bi bi-pie-chart"></i> <span class="t-statistics ms-2">Statistics</span> </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarLocalization" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLocalization">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
</svg> <span class="t-localization ms-2">Localization</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarLocalization">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-transactions">Transactions</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" class="t-currency-rates">Currency Rates</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarAccounts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccounts">
                                                                        <i class="bi bi-person-circle"></i> <span class="t-accounts ms-2">Accounts</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarAccounts">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-my-account">My Account</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-settings">Settings</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/Ecommerce/dashboard/Sign%20Up%20page/Sign%20Up.php" class="nav-link" data-key="t-sign-up">Sign Up</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/Ecommerce/dashboard/Sign%20In%20Page/Sign%20In.php" class="nav-link" data-key="t-sign-in">Sign In</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/Ecommerce/dashboard/Password%20Reset/Password%20Reset.php" class="nav-link" data-key="t-passowrd-reset">Password Reset</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="http://localhost/Ecommerce/dashboard/Password%20Create/Password%20Create.php" class="nav-link" data-key="t-create-password">Password Create</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-success-message">Success Message</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-two-step-verify">Two Step Verify</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-logout">Logout</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-error-404">Error 404</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-error-500">Error 500</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-coming-soon">Coming Soon</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link" href="#" target="_blank">
                                                                        <i class="bi bi-layers"></i> <span class="t-components ms-2">Components</span> <span class="badge badge-pill bg-secondary" data-key="t-v1.0">v1.0</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link menu-link collapsed" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                                                        <i class="bi bi-share"></i> <span class="t-multi-level ms-2">Multi Level</span>
                                                                    </a>
                                                                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                                                        <ul class="nav nav-sm flex-column">
                                                                            <li class="nav-item">
                                                                                <a href="#" class="nav-link" data-key="t-level-1.1">Level 1.1</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#sidebarAccount" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2">Level 1.2</a>
                                                                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                                                                    <ul class="nav nav-sm flex-column">
                                                                                        <li class="nav-item">
                                                                                            <a href="#" class="nav-link" data-key="t-level-2.1">Level 2.1</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a href="#sidebarCrm" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2">Level 2.2</a>
                                                                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                                                                <ul class="nav nav-sm flex-column">
                                                                                                    <li class="nav-item">
                                                                                                        <a href="#" class="nav-link" data-key="t-level-3.1">Level 3.1</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a href="#" class="nav-link" data-key="t-level-3.2">Level 3.2</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" style="width: auto; height: 745px;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                            </div>
                                        </ul>
                                    </div>
                                    <!-- Sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 745px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar" style="height: 206px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </div>

            <div class="sidebar-background"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>