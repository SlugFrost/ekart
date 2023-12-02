<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Dashboard</title>
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

        .apexcharts-legend {
            display: flex;
            overflow: auto;
            padding: 0 10px;
        }

        .apexcharts-legend.apx-legend-position-bottom,
        .apexcharts-legend.apx-legend-position-top {
            flex-wrap: wrap
        }

        .apexcharts-legend.apx-legend-position-right,
        .apexcharts-legend.apx-legend-position-left {
            flex-direction: column;
            bottom: 0;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
        .apexcharts-legend.apx-legend-position-right,
        .apexcharts-legend.apx-legend-position-left {
            justify-content: flex-start;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
            justify-content: center;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
            justify-content: flex-end;
        }

        .apexcharts-legend-series {
            cursor: pointer;
            line-height: normal;
        }

        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
            display: flex;
            align-items: center;
        }

        .apexcharts-legend-text {
            position: relative;
            font-size: 14px;
        }

        .apexcharts-legend-text *,
        .apexcharts-legend-marker * {
            pointer-events: none;
        }

        .apexcharts-legend-marker {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 3px;
            border-style: solid;
        }

        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
            display: inline-block;
        }

        .apexcharts-legend-series.apexcharts-no-click {
            cursor: auto;
        }

        .apexcharts-legend .apexcharts-hidden-zero-series,
        .apexcharts-legend .apexcharts-hidden-null-series {
            display: none !important;
        }

        .apexcharts-inactive-legend {
            opacity: 0.45;
        }

        .order-last {
            order: 6 !important;
            margin-top: 23px;
            padding-right: 20px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
        }

        .card-header {
            border-bottom: 1px solid #e9ebec;
            padding: 19px;
            background-color: #fff;
        }

        .card-body {
            padding: 21px;
            font-size: 13px;
        }

        .card-title {
            font-size: 16px;
            margin: 0 0 7px 0;
        }

        .order-xxl-last {
            order: 6 !important;
            margin-top: 23px;
            padding-left: 4px;
            padding-right: 23px;
        }

        .mid-box {
            margin-top: 21px;
        }

        .card-height-100 {
            height: calc(100% - 1.0rem);
        }

        h5 {
            font-size: 16px;
            font-weight: 700;
        }

        .box1 {
            padding: 12px 11px;
            font-size: 14px;
        }

        .text-muted {
            margin-bottom: 12px;
        }

        .report-btn {
            font-size: 12px;
            font-weight: 600;
        }

        .text-reset {
            text-decoration: none;
            font-size: 14px;
        }

        svg {
            touch-action: none;
        }

        image,
        text,
        .jvm-zoomin,
        .jvm-zoomout {
            user-select: none
        }

        .jvm-container {
            touch-action: none;
            position: relative;
            overflow: hidden;
            height: 100%;
            width: 100%
        }

        .jvm-tooltip {
            border-radius: 3px;
            background-color: #5c5cff;
            font-family: sans-serif, Verdana;
            font-size: smaller;
            box-shadow: 1px 2px 12px rgba(0, 0, 0, 0.2);
            padding: 3px 5px;
            white-space: nowrap;
            position: absolute;
            display: none;
            color: #FFF
        }

        .jvm-tooltip.active {
            display: block
        }

        .jvm-zoom-btn {
            border-radius: 3px;
            background-color: #292929;
            padding: 3px;
            box-sizing: border-box;
            position: absolute;
            line-height: 10px;
            cursor: pointer;
            color: #FFF;
            height: 15px;
            width: 15px;
            left: 10px
        }

        .jvm-zoom-btn.jvm-zoomout {
            top: 30px
        }

        .jvm-zoom-btn.jvm-zoomin {
            top: 10px
        }

        .jvm-series-container {
            right: 15px;
            position: absolute
        }

        .jvm-series-container.jvm-series-h {
            bottom: 15px
        }

        .jvm-series-container.jvm-series-v {
            top: 15px
        }

        .jvm-series-container .jvm-legend {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            margin-left: .75rem;
            border-radius: .25rem;
            border-color: #e5e7eb;
            padding: .6rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            float: left
        }

        .jvm-series-container .jvm-legend .jvm-legend-title {
            line-height: 1;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: .5rem;
            margin-bottom: .575rem;
            text-align: left
        }

        .jvm-series-container .jvm-legend .jvm-legend-inner {
            overflow: hidden
        }

        .jvm-series-container .jvm-legend .jvm-legend-inner .jvm-legend-tick {
            overflow: hidden;
            min-width: 40px
        }

        .jvm-series-container .jvm-legend .jvm-legend-inner .jvm-legend-tick:not(:first-child) {
            margin-top: .575rem
        }

        .jvm-series-container .jvm-legend .jvm-legend-inner .jvm-legend-tick .jvm-legend-tick-sample {
            border-radius: 4px;
            margin-right: .65rem;
            height: 16px;
            width: 16px;
            float: left
        }

        .jvm-series-container .jvm-legend .jvm-legend-inner .jvm-legend-tick .jvm-legend-tick-text {
            font-size: 12px;
            text-align: center;
            float: left
        }

        .jvm-line[animation="true"] {
            animation: jvm-line-animation 10s linear forwards infinite
        }

        @-webkit-keyframes jvm-line-animation {
            from {
                stroke-dashoffset: 250
            }
        }

        @keyframes jvm-line-animation {
            from {
                stroke-dashoffset: 250
            }
        }

        .photo12 {
            width: 25px;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
        }

        .apexcharts-tooltip-marker {
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-legend {
            display: flex;
            overflow: auto;
            padding: 0 10px;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-light {
            box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
            color: #878a99;
            background: #fff;
            border: 1px solid #e9ebec;
            font-family: var(--tb-font-sans-serif);
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae;
        }

        .bottom-box {
            margin-top: 27px;
        }

        .text-frame {
            font-size: 12px;
            font-weight: 600;
        }

        .photo-23 {
            width: 30px;
        }

        .color-1 {
            color: #7c6bff;
        }

        .photo-123 {
            width: 40px;
        }

        [data-simplebar] {
            position: relative;
        }

        .font-123 {
            font-size: 13px;
        }

        .font1122 {
            font-size: 13px;
        }

        .photo-00 {
            width: 40px;
        }

        .bar-23 {
            display: flex;
            overflow: hidden;
            height: 4px;
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
            height: 100%;
            width: auto;
            visibility: visible;
            overflow: auto;
            max-width: 100%;
            max-height: 100%;
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

        .card-animate {
            transition: ease-in 0.3s, ease-out 0.3s;
            cursor: pointer;
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
            padding: 0 0 calc(45px + 25px) 0;
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
            padding: 0 1.3rem;
            transition: all .1s ease-out;
            border-right: 1px solid #e9ebec;
        }

        .open {
            background-color: #fff9e6;
            font-size: 14px;
            height: 35px;
            display: flex;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
            z-index: 999;
            top: 0;
            width: 100%;
        }

        #page-topbar {
            position: fixed;
            top: 35px;
            right: 0;
            left: 250px;
            z-index: 1002;
            background-color: #fff;
            transition: all .1s ease-out;
            border-bottom: 1px solid #e9ebec;
        }

        .navbar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            height: 70px;
            padding: 0 calc(1.5rem * 1) 0 calc(1.5rem * 1);
        }

        .header-item {
            display: flex;
            align-items: center;
        }

        .hamburger-icon {
            width: 20px;
            height: 14px;
            position: relative;
            cursor: pointer;
            display: inline-block;
        }

        .hamburger-icon span {
            background-color: #878a99;
            position: absolute;
            border-radius: 2px;
            transition: .3s cubic-bezier(.8, .5, .2, 1.4);
            width: 100%;
            height: 2px;
            display: block;
            left: 0;
        }

        .hamburger-icon span:nth-child(1) {
            top: 0;
            width: 80%;
        }

        .hamburger-icon span:nth-child(2) {
            top: 6px;
        }

        .hamburger-icon span:nth-child(3) {
            bottom: 0;
            width: 60%;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu.show {
            display: block;
        }

        .navbar-header .btn-topbar {
            height: 42px;
            width: 42px;
        }

        .header-profile-user {
            width: 32px;
        }

        .small-btn {
            top: 21px;
            left: 32px;
        }

        .user-search {
            color: #495057;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif
        }

        .dropdown-menu-lg {
            width: 320px;
            height: 390px;
        }

        .gridjs-wrapper {
            overflow: auto;
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .gridjs-container {
            color: #0c192c;
            display: inline-block;
            overflow: hidden;
            padding: 2px;
            position: relative;
            z-index: 0;
            color: var(--tb-secondary-color);
            padding: 0;
            display: block;
        }

        table.gridjs-table {
            border-collapse: collapse;
            display: table;
            margin: 0;
            max-width: 100%;
            overflow: auto;
            padding: 0;
            table-layout: fixed;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row open">
            <div class="col-4 d-flex align-items-center"><i class="bi bi-clock me-2"></i><b class="">Mon, Jun 26 | 11:46 AM</b></div>
            <div class="col-2 d-flex align-items-center"><i class="bi bi-envelope mt-1 me-2"></i><b>support@themesbrand.com</b></div>
            <div class="col-4 d-flex align-items-center"><i class="bi bi-globe mt-1 me-2"></i><b>www.themesbrand.com</b></div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center border-end">
                <b class="float-end me-4">Balance:$8451.36</b>
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center"><b class="float-end"><img height="16" class="rounded-circle me-2" src="https://themesbrand.com/toner/html/assets/images/flags/us.svg">English</b></div>
        </div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <button type="button" class="btn btn-sm px-3 fs-15 user-name-text header-item d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <span class="bi bi-search me-2"></span><input type="text">
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search fs-16"></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item dropdown-hover-end">
                            <button class="btn btn-icon btn-topbar bg-secondary-subtle rounded-circle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bi bi-bell fs-18"></i>
                                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger mt-2 ms-1"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <div class="dropdown-head rounded-top">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 fs-16 fw-semibold"> Notifications <span class="badge badge-soft-danger fs-13 notification-badge"> 4</span></h6>
                                                <p class="fs-14 text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                            </div>
                                            <div class="col-auto dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondar2 fs-15"><i class="bi bi-three-dots-vertical"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                    <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                    <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="py-2 ps-2" id="notificationItemsTabContent">
                                    <div data-simplebar="init" style="max-height: 300px;" class="pe-2">
                                        <div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                                                            <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title" style="display: block;">New</h6>
                                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                                <div class="d-flex">
                                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                                            <i class="bx bx-badge-check"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <a href="#!" class="stretched-link">
                                                                            <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                                Optimization <span class="text-secondary">reward</span> is ready!
                                                                            </h6>
                                                                        </a>
                                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="px-2 fs-15">
                                                                        <div class="form-check notification-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                                            <label class="form-check-label" for="all-notification-check01"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                                <div class="d-flex">
                                                                    <div class="position-relative me-3 flex-shrink-0">
                                                                        <img src="../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                                            <span class="visually-hidden">New alerts</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <a href="#!" class="stretched-link">
                                                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                                                        </a>
                                                                        <div class="fs-13 text-muted">
                                                                            <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                                        </div>
                                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="px-2 fs-15">
                                                                        <div class="form-check notification-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                                            <label class="form-check-label" for="all-notification-check02"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                                <div class="d-flex">
                                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                                            <i class="bx bx-message-square-dots"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <a href="#!" class="stretched-link">
                                                                            <h6 class="mt-0 mb-2 fs-14 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                                            </h6>
                                                                        </a>
                                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="px-2 fs-15">
                                                                        <div class="form-check notification-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                                            <label class="form-check-label" for="all-notification-check03"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title" style="display: block;">Read Before</h6>

                                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                <div class="d-flex">

                                                                    <div class="position-relative me-3 flex-shrink-0">
                                                                        <img src="../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                                            <span class="visually-hidden">New alerts</span>
                                                                        </span>
                                                                    </div>

                                                                    <div class="flex-grow-1">
                                                                        <a href="#!" class="stretched-link">
                                                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                                                        </a>
                                                                        <div class="fs-13 text-muted">
                                                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                                                        </div>
                                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="px-2 fs-15">
                                                                        <div class="form-check notification-check">
                                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                                            <label class="form-check-label" for="all-notification-check04"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center align-items-center">
                                            Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>


                        <div class="dropdown ms-sm-3 header-item topbar-user topbar-head-dropdown dropdown-hover-end">
                            <div type="button" class="btn h-100 rounded-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="https://themesbrand.com/toner/html/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Gaurav</span>
                                        <span class="d-none d-xl-block ms-1 fs-13 user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Raquel!</h6>
                                <a class="dropdown-item" href="account.html"><i class="bi bi-person-circle text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="calendar.html"><i class="bi bi-cart4 text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Order Track</span></a>
                                <a class="dropdown-item" href="product-list.html"><i class="bi bi-box-seam text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Products</span></a>
                                <a class="dropdown-item" href=""><span class="badge bg-success-subtle text-success float-end ms-2">New</span><i class="bi bi-cassette text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Frontend</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="account-setting.html"><i class="bi bi-gear text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Settings</span></a>

                                <?php

                                // if (isset($_POST['logout_btn'])) {
                                //     session_destroy();
                                // }

                                ?>

                                <form method="POST" action="header1.php">

                                    <button class="dropdown-item" type="submit" name="logout_btn"><i class="bi bi-box-arrow-right text-muted fs-15 align-middle me-1"></i>Logout</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="C:\xampp\htdocs\Ecommerce\timing.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>