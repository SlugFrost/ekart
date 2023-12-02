<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Toner Website</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    .row {
        margin-right: 0px;
    }

    a {
        text-decoration: none;
        color: #000;
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

    .container-fluid {
        width: 100%;
        float: left;
    }

    .container {
        width: 1150px;
    }

    b {
        font-weight: 500;
        font-family: var(--tb-body-font-family);
    }

    .dropdown-mega-full .dropdown-menu {
        padding: 20px;
        left: 20px !important;
        right: 20px !important;
        width: 900px;
    }

    .navbar-expand-lg {
        height: 75px;
    }

    .navbar-expand-lg .navbar-nav {
        font-size: 16px;
    }

    .navbar-expand-lg .navbar-nav .first {
        position: absolute;
        width: 98%;
        margin-top: 0;
        padding: 0;
        font-size: 12px;
    }

    .navbar-expand-lg .navbar-nav .second {
        position: absolute;
        width: 41%;
        font-size: 12px;
        margin: auto;
    }

    .navbar-expand-lg .navbar-nav .third {
        position: absolute;
        width: 41%;
        font-size: 12px;
        padding: 0;
        margin: 18px -25px;
    }

    .ecommerce-home {
        position: relative;
        padding: 100px 0px 90px;
        background-position: center;
        min-height: 630px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ecommerce-navbar {
        height: 70px;
        transition: all .5s ease;
        background-color: #fff;
        position: fixed;
        left: 0;
        right: 0;
        top: 34px;
        z-index: 1002;
        padding: 0;
    }

    .text-end {
        text-align: right !important;
    }

    .fs-15 {
        font-size: 15px !important;
    }

    .text-dark {
        opacity: 1;
        color: black;
    }

    .fw-semibold {
        font-weight: 600 !important;
    }

    .fs-15 {
        font-size: 15px !important;
    }

    .btn:hover {
        transition: all .5s ease;
    }

    .section {
        position: relative;
        padding: 80px 0px;
    }

    .avatar-sm {
        height: 3rem;
        width: 3rem;
    }

    .col-lg-6 {
        position: relative;
        width: 50%;
    }

    .product-banner-1 .product-content {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        max-width: 280px;
    }

    .font {
        font-size: 2rem;
    }

    .font2 {
        color: purple;
    }

    .categories-filter .list-inline-item a {
        display: block;
        font-weight: 600;
        padding: 8px 15px;
        margin: 5px;
        cursor: pointer;
        background-color: var(--tb-light);
    }

    .product-lable {
        transform: rotate(-90deg) translateX(-60%);
        position: absolute;
        top: 0;
        left: -32px;
    }

    .wire {
        height: 260px;
    }

    .element-item .product-btn .add-btn {
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
    }

    .mt-lg-n5 {
        margin-top: -3rem !important;
    }

    .bg-cta {
        overflow-x: clip;
    }

    .section .pb-0 {
        top: 104px;
    }

    .swiper-slide {
        flex-shrink: 0;
        height: 100%;
        position: relative;
        transition-property: transform;
    }

    .card {
        margin-bottom: 1.5rem;
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        backface-visibility: hidden;
        transition: transform .6s ease-in-out;
    }

    .carousel {
        padding-right: 0;
    }

    .carousel-cell {
        width: 27%;
        margin-right: 10px
    }

    .carousel-control-prev {
        height: 40px;
        width: 40px;
        background: #4b93ff;
        top: 43%;
        left: 4%;
        border-radius: 0.25rem;
        font-size: 24px;
        transition: all .5s ease;
        transform: rotate(45deg);
    }

    .carousel-control-prev i {
        transform: rotate(-45deg);
    }

    .carousel-control-next {
        height: 40px;
        width: 40px;
        background: #4b93ff;
        top: 43%;
        right: 4%;
        border-radius: 0.25rem;
        font-size: 24px;
        transition: all .5s ease;
        transform: rotate(45deg);
    }

    .carousel-control-next i {
        transform: rotate(-45deg);
    }

    /* cell number */
    .carousel-cell:before {
        display: block;
    }

    .flickity-prev-next-button {
        top: 0%;
        width: 32px;
        height: 32px;
        background-color: #cfe0ff;
        color: #5b82fb;
        border-radius: 26%;
        transform: translateY(-50%);
    }

    .flickity-prev-next-button.next {
        right: 28px;
    }

    .flickity-prev-next-button.previous {
        left: 90%;
    }

    .img-fluid {
        max-width: 100%;
    }

    .photo1 {
        max-width: 70%;
    }

    .photo {
        max-width: 100%;
        height: auto;
    }

    .blog-date {
        width: 60px;
        height: 68px;
        text-align: center;
        position: absolute;
        right: 15px;
        margin-top: -70px;
        padding: 8px 0;
        border-top: 4px solid #4b93ff;
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
    }

    .col {
        display: block;
        overflow: hidden;
        display: block;
        position: relative;
        background-color: #7c6bff;
    }

    .insta-img:hover {
        transform: scale(1.2) rotate(-3deg);
        opacity: 0.5;
        transition: all ease-in 0.5s;
    }

    .insta-img:hover i {
        opacity: 2;
        transform: scale(1) rotate(0deg);
        transition: all ease-in 0.4s;
    }

    .stretched-link {
        position: static;
    }

    .insta-img i {
        opacity: 0;
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all ease-in 0.3s;
        font-size: 25px;
        color: #fff;
        transform: scale(1.5) rotate(-15deg);
    }

    .insta-img i::before {
        content: "\f437";
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }

    .insta-lable {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
    }

    .footer-landing {
        background-color: #0b1729;
        border-top-color: #132846;
    }

    .logo-light {
        display: block;
    }

    .footer-landing .footer-desc {
        color: #758195;
    }

    .footer-landing .footer-title {
        color: #ced4da;
    }

    .footer-landing .footer-social i {
        width: 34px;
        height: 34px;
        background-color: rgba(255, 255, 255, .08);
        color: #fff;
        display: inline-block;
        line-height: 34px;
        font-size: 14px;
        border-radius: 50%;
        text-align: center;
        transition: all .5s;
    }

    .backtotop {
        position: fixed;
        height: 45px;
        padding: 3px 2px;
        width: 45px;
        color: white;
        right: 24px;
        transition: all .5s ease;
        z-index: 1000;
    }

    .simage {
        display: flex;
        justify-content: center;
    }

    .catalog1:hover .dropdown-menu {
        display: block !important;
    }

    @import url(https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap);

    @font-face {
        font-family: Switzer;
        src: url(../fonts/Switzer-Light.woff2) format("woff2"), url(../fonts/Switzer-Light.woff) format("woff"), url(../fonts/Switzer-Light.ttf) format("truetype");
        font-weight: 300;
        font-display: swap;
        font-style: normal
    }

    @font-face {
        font-family: Switzer;
        src: url(../fonts/Switzer-Regular.woff2) format("woff2"), url(../fonts/Switzer-Regular.woff) format("woff"), url(../fonts/Switzer-Regular.ttf) format("truetype");
        font-weight: 400;
        font-display: swap;
        font-style: normal
    }

    @font-face {
        font-family: Switzer;
        src: url(../fonts/Switzer-Medium.woff2) format("woff2"), url(../fonts/Switzer-Medium.woff) format("woff"), url(../fonts/Switzer-Medium.ttf) format("truetype");
        font-weight: 500;
        font-display: swap;
        font-style: normal
    }

    @font-face {
        font-family: Switzer;
        src: url(../fonts/Switzer-Semibold.woff2) format("woff2"), url(../fonts/Switzer-Semibold.woff) format("woff"), url(../fonts/Switzer-Semibold.ttf) format("truetype");
        font-weight: 600;
        font-display: swap;
        font-style: normal
    }

    @font-face {
        font-family: Switzer;
        src: url(../fonts/Switzer-Bold.woff2) format("woff2"), url(../fonts/Switzer-Bold.woff) format("woff"), url(../fonts/Switzer-Bold.ttf) format("truetype");
        font-weight: 700;
        font-display: swap;
        font-style: normal
    }

    .top-tagbar {
        background-color: var(--tb-top-tagbar-bg);
        z-index: 1001;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        height: 35px;
        padding: 0 calc(1.5rem * .5) 0 calc(1.5rem * .5);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .topbar-tag-dropdown {
        height: 35px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .topbar-tag-dropdown .btn-icon {
        height: auto;
        width: auto
    }

    .topbar-tag-dropdown .dropdown-menu {
        top: 4px !important
    }

    #page-topbar {
        position: fixed;
        top: 35px;
        right: 0;
        left: 0;
        z-index: 1002;
        background-color: var(--tb-header-bg);
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out;
        border-bottom: 1px solid var(--tb-border-color-translucent)
    }

    #page-topbar.topbar-shadow {
        -webkit-box-shadow: rgba(0, 0, 0, .18) 0 1px 3px;
        box-shadow: rgba(0, 0, 0, .18) 0 1px 3px
    }

    @media (min-width: 768px) {
        #page-topbar {
            left: 250px
        }
    }

    .navbar-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 0 auto;
        height: 70px;
        padding: 0 calc(1.5rem * 1) 0 calc(1.5rem * 1)
    }

    @media (max-width: 767.98px) {
        .navbar-header {
            padding: 0 calc(1.5rem * .5) 0 calc(1.5rem * .5)
        }
    }

    .navbar-header .topbar-head-dropdown .dropdown-menu.show {
        top: 13px !important
    }

    .navbar-header .topbar-head-dropdown .notification-actions {
        display: none;
        position: absolute;
        background-color: var(--tb-dropdown-bg);
        left: 0;
        right: 0;
        bottom: 0;
        padding: 7px;
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    .navbar-header .btn-topbar {
        height: 42px;
        width: 42px
    }

    @media (max-width: 360px) {
        .navbar-header .btn-topbar {
            height: 36px;
            width: 36px
        }
    }

    .navbar-header .user-name-text {
        color: var(--tb-header-item-color)
    }

    .navbar-header .user-name-sub-text {
        color: var(--tb-header-item-sub-color)
    }

    .app-search {
        padding: calc(32px / 2) 0
    }

    .app-search .form-control {
        border: none;
        height: 38px;
        padding-left: 40px;
        padding-right: 30px;
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: transparent;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .app-search .form-control:active,
    .app-search .form-control:focus,
    .app-search .form-control:hover {
        background-color: #fff
    }

    .app-search span.search-widget-icon {
        position: absolute;
        z-index: 10;
        font-size: 18px;
        line-height: 38px;
        left: 13px;
        top: 0;
        color: #878a99;
        cursor: pointer
    }

    .app-search .search-widget-icon-close {
        right: 7px;
        left: auto !important
    }

    @media (max-width: 1023.99px) {
        .app-search {
            padding-left: calc(1.5rem / 2)
        }
    }

    #searchModal {
        top: 6px
    }

    #searchModal .form-control {
        padding-left: 45px;
        padding-right: 55px
    }

    #searchModal .search-widget-icon {
        position: absolute;
        left: 18px;
        top: 12px
    }

    #searchModal .search-widget-icon-close {
        right: 18px;
        left: auto
    }

    #searchModal .dropdown-menu {
        top: 94px;
        width: 100%
    }

    #searchModal .dropdown-menu .list-group-item {
        border: none !important
    }

    .megamenu-list li {
        position: relative;
        padding: 5px 0
    }

    .megamenu-list li a {
        color: var(--tb-secondary-color)
    }

    @media (max-width: 767.98px) {
        .logo span.logo-lg {
            display: none
        }

        .logo span.logo-sm {
            display: inline-block
        }
    }

    .header-item {
        height: 70px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .header-profile-user {
        height: 32px;
        width: 32px
    }

    .topbar-badge-sm {
        right: 0;
        top: 7px !important
    }

    .topbar-badge {
        right: -9px;
        top: 4px !important
    }

    @media (min-width: 768px) {
        .navbar-header .topbar-user {
            background-color: var(--tb-topbar-user-bg)
        }
    }

    .navbar-header .topbar-user .dropdown-menu.show {
        top: 2px !important
    }

    .notification-item {
        padding: .75rem 1rem;
        white-space: inherit;
        position: relative;
        border-bottom: 1px solid var(--tb-border-color-translucent)
    }

    .notification-item .form-check-input {
        position: relative;
        z-index: 2
    }

    .notification-item .active-badge {
        top: 25px;
        border: 2px solid var(--tb-light)
    }

    .notification-item.unread-message {
        background-color: rgba(var(--tb-light-rgb), 1.5)
    }

    .notification-item.unread-message.active,
    .notification-item.unread-message:active {
        background-color: rgba(var(--tb-light-rgb), 2.5)
    }

    .notification-item:last-child {
        border-bottom: none
    }

    .dropdown-icon-item {
        display: block;
        border-radius: 3px;
        line-height: 34px;
        text-align: center;
        padding: 15px 0 15px;
        border: 1px solid transparent;
        color: var(--tb-dropdown-link-color)
    }

    .dropdown-icon-item img {
        height: 70px
    }

    .dropdown-icon-item span {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .dropdown-icon-item:hover {
        background-color: var(--tb-dropdown-link-hover-bg)
    }

    .fullscreen-enable [data-toggle=fullscreen] .bx-fullscreen::before {
        content: "\eacb"
    }

    [data-layout-mode=dark] .mode-layout .bi-sun::before {
        content: "\f497"
    }

    .mode-auto .mode-layout .bi-sun::before {
        content: "\f496" !important
    }

    @media (max-width: 600px) {
        .navbar-header .dropdown {
            position: static
        }

        .navbar-header .dropdown .dropdown-menu {
            width: 100%
        }
    }

    @media (max-width: 767.98px) {
        #search-dropdown-reponsive {
            top: 54px !important
        }
    }

    @media (min-width: 1024.1px) {
        [data-layout=vertical][data-layout-style=detached] #page-topbar {
            left: 0 !important;
            -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
            box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px
        }

        [data-layout=vertical][data-layout-style=detached] .horizontal-logo {
            display: inline-block;
            padding-left: 0;
            width: auto
        }

        [data-layout=vertical][data-layout-style=detached] .topnav-hamburger {
            visibility: hidden
        }

        [data-layout=vertical][data-layout-style=detached] .layout-width {
            max-width: 95%;
            margin: 0 auto
        }

        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm-hover] .navbar-brand-box,
        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm] .navbar-brand-box {
            background-color: transparent !important;
            position: relative;
            width: auto;
            text-align: left
        }

        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm-hover] .navbar-brand-box .logo-sm,
        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm] .navbar-brand-box .logo-sm {
            display: none
        }

        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm-hover] .navbar-brand-box .logo-lg,
        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm] .navbar-brand-box .logo-lg {
            display: block
        }
    }

    [data-layout=vertical][data-layout-style=detached][data-topbar=brand]:is([data-sidebar=light], [data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-dark,
    [data-layout=vertical][data-layout-style=detached][data-topbar=dark]:is([data-sidebar=light], [data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-dark {
        display: none
    }

    [data-layout=vertical][data-layout-style=detached][data-topbar=brand]:is([data-sidebar=light], [data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-light,
    [data-layout=vertical][data-layout-style=detached][data-topbar=dark]:is([data-sidebar=light], [data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-light {
        display: block
    }

    [data-layout=vertical][data-layout-style=detached]:is([data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-dark {
        display: block
    }

    [data-layout=vertical][data-layout-style=detached]:is([data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .horizontal-logo .logo-light {
        display: none
    }

    [data-layout=horizontal] #page-topbar {
        left: 0;
        border-bottom: 1px solid var(--tb-border-color-translucent)
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal] #page-topbar.topbar-shadow {
            -webkit-box-shadow: none;
            box-shadow: none
        }
    }

    [data-layout=horizontal] .page-content {
        padding: calc(45px + 1.5rem) calc(1.5rem * .5) 60px calc(1.5rem * .5)
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal] .page-content {
            margin-top: calc(70px + 35px)
        }
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal][data-layout-width=boxed] .page-content {
            min-height: calc(100vh - 130px)
        }
    }

    @media (min-width: 768px) {
        [data-layout=vertical]:is([data-sidebar-size=sm], [data-sidebar-size=sm-hover]) #page-topbar {
            left: 70px
        }
    }

    @media (min-width: 768px) {
        [data-layout=vertical][data-sidebar-size=md] #page-topbar {
            left: 180px
        }
    }

    @media (min-width: 768px) {
        [data-layout=twocolumn] #page-topbar {
            left: calc(70px + 220px)
        }
    }

    [data-layout=twocolumn] .horizontal-logo {
        display: none
    }

    .page-wrapper {
        position: relative;
        padding: 80px 0 28px
    }

    .page-title-box {
        padding: 0 0 20px
    }

    .page-title-box .breadcrumb {
        background-color: transparent;
        padding: 0
    }

    .page-title-box h4 {
        font-weight: 700;
        font-size: 15px !important;
        text-transform: uppercase
    }

    [data-layout=horizontal] .page-title-box {
        padding: 1.2rem 0;
        background-color: transparent !important;
        border-bottom: none;
        border-top: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin: 0
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal] .page-title-box {
            margin: -19px 0 0 0
        }
    }

    [data-layout=vertical][data-layout-style=detached] .page-title-box {
        padding: 1.2rem 0;
        background-color: transparent !important;
        border-bottom: none;
        border-top: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin: 0
    }

    @media (min-width: 1024.1px) {
        [data-layout=vertical][data-layout-style=detached] .page-title-box {
            margin: -19px 0 0 0
        }
    }

    .footer {
        bottom: 0;
        padding: 20px calc(1.5rem * .5);
        position: absolute;
        right: 0;
        color: var(--tb-tertiary-color);
        left: 250px;
        height: 60px;
        background-color: var(--tb-secondary-bg);
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    @media (max-width: 991.98px) {
        .footer {
            left: 0
        }
    }

    [data-layout=vertical]:is([data-sidebar-size=sm], [data-sidebar-size=sm-hover]) .footer {
        left: 70px
    }

    @media (max-width: 767.98px) {
        [data-layout=vertical]:is([data-sidebar-size=sm], [data-sidebar-size=sm-hover]) .footer {
            left: 0
        }
    }

    [data-layout=vertical][data-sidebar-size=md] .footer {
        left: 180px
    }

    @media (max-width: 991.98px) {
        [data-layout=vertical][data-sidebar-size=md] .footer {
            left: 0
        }
    }

    [data-layout=horizontal] .footer {
        left: 0 !important
    }

    @media (min-width: 1024.1px) {
        [data-layout=vertical][data-layout-style=detached] .footer {
            left: 0 !important;
            background-color: transparent
        }
    }

    @media (min-width: 768.1px) {
        [data-layout=twocolumn] .footer {
            left: calc(70px + 220px)
        }
    }

    .footer-landing {
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    .footer-landing .footer-desc {
        color: rgba(var(--tb-secondary-color-rgb), .8)
    }

    .footer-landing .logo-light {
        display: var(--tb-card-logo-light)
    }

    .footer-landing .logo-dark {
        display: var(--tb-card-logo-dark)
    }

    .footer-landing .footer-title {
        color: var(--tb-body-color)
    }

    .footer-landing .footer-link a {
        color: rgba(var(--tb-secondary-color-rgb), .8);
        line-height: 38px;
        font-size: 14px;
        -webkit-transition: all .5s;
        transition: all .5s
    }

    .footer-landing .footer-link a:hover {
        color: rgba(var(--tb-secondary-color-rgb), 1);
        text-decoration: underline !important
    }

    .footer-landing .footer-social i {
        width: 34px;
        height: 34px;
        display: inline-block;
        line-height: 34px;
        background-color: rgba(var(--tb-secondary-color-rgb), .1);
        color: rgba(var(--tb-secondary-color-rgb), .6);
        font-size: 14px;
        border-radius: 50%;
        text-align: center;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .footer-landing .footer-social i:hover {
        color: #fff;
        background-color: #4b93ff
    }

    .footer-landing .footer-border-alt {
        padding: 30px 0;
        border-top: 1px solid rgba(var(--tb-secondary-color-rgb), .1);
        color: rgba(var(--tb-secondary-color-rgb), .8)
    }

    [data-footer=dark] .footer-landing {
        background-color: #0b1729;
        border-top-color: #132846
    }

    [data-footer=dark] .footer-landing .logo-light {
        display: block
    }

    [data-footer=dark] .footer-landing .logo-dark {
        display: none
    }

    [data-footer=dark] .footer-landing .footer-link a {
        color: #758195;
        -webkit-transition: all .5s;
        transition: all .5s
    }

    [data-footer=dark] .footer-landing .footer-link a:hover {
        color: rgba(255, 255, 255, .8);
        -webkit-transition: all .5s;
        transition: all .5s;
        text-decoration: underline !important
    }

    [data-footer=dark] .footer-landing .footer-social i {
        background-color: rgba(255, 255, 255, .08);
        color: #fff;
        -webkit-transition: all .5s;
        transition: all .5s
    }

    [data-footer=dark] .footer-landing .footer-social i:hover {
        color: #fff;
        background-color: #7c6bff
    }

    [data-footer=dark] .footer-landing .footer-title {
        color: #ced4da
    }

    [data-footer=dark] .footer-landing .footer-desc {
        color: #758195
    }

    [data-footer=dark] .footer-landing .footer-border-alt {
        border-top: 1px solid rgba(255, 255, 255, .15);
        color: #758195
    }

    .app-content {
        margin-left: 250px;
        overflow: hidden
    }

    .app-content .content {
        padding: 0 15px 10px 15px;
        margin-top: 70px
    }

    .main-content {
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out
    }

    .navbar-menu {
        width: 250px;
        z-index: 1002;
        background: var(--tb-vertical-menu-bg);
        border-right: 1px solid var(--tb-vertical-menu-border);
        bottom: 0;
        margin-top: 0;
        position: fixed;
        top: 35px;
        padding: 0 0 calc(70px + 25px) 0;
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out
    }

    .navbar-menu .navbar-nav .nav-link {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: .625rem 1.5rem;
        color: var(--tb-vertical-menu-item-color);
        font-size: .9063rem;
        font-family: Switzer
    }

    .navbar-menu .navbar-nav .nav-link.active {
        color: var(--tb-vertical-menu-item-active-color)
    }

    .navbar-menu .navbar-nav .nav-link:hover {
        color: var(--tb-vertical-menu-item-hover-color)
    }

    .navbar-menu .navbar-nav .nav-link i {
        display: inline-block;
        min-width: 1.75rem;
        font-size: 16px;
        line-height: inherit
    }

    .navbar-menu .navbar-nav .nav-link svg {
        width: 18px;
        margin-right: .665rem;
        color: var(--tb-vertical-menu-item-color)
    }

    .navbar-menu .navbar-nav .nav-link .badge {
        margin-left: auto;
        margin-right: -2px;
        z-index: 1
    }

    .navbar-menu .navbar-nav .nav-link:hover {
        color: var(--tb-vertical-menu-item-hover-color)
    }

    .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
        display: block;
        content: "\f0142";
        font-family: "Material Design Icons";
        margin-left: auto;
        -webkit-transition: -webkit-transform .2s;
        transition: -webkit-transform .2s;
        transition: transform .2s;
        transition: transform .2s, -webkit-transform .2s;
        font-size: 1.05rem;
        position: absolute;
        right: 18px;
        color: var(--tb-vertical-menu-title-color)
    }

    .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
        color: var(--tb-vertical-menu-item-active-color)
    }

    .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true]:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        color: var(--tb-vertical-menu-item-active-color)
    }

    .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true]:before {
        opacity: 1;
        background-color: var(--tb-vertical-menu-item-active-color)
    }

    .navbar-menu .navbar-nav .nav-link.collapsed.active::after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .navbar-menu .navbar-nav .nav-sm {
        padding-left: 1.75rem
    }

    .navbar-menu .navbar-nav .nav-sm .nav-link {
        padding: .55rem 1.5rem !important;
        color: var(--tb-vertical-menu-sub-item-color);
        white-space: none;
        position: relative;
        font-size: .9063rem;
        font-family: Switzer
    }

    .navbar-menu .navbar-nav .nav-sm .nav-link:hover {
        color: var(--tb-vertical-menu-sub-item-hover-color)
    }

    .navbar-menu .navbar-nav .nav-sm .nav-link.active {
        color: var(--tb-vertical-menu-item-active-color)
    }

    .navbar-menu .navbar-nav .nav-sm .nav-sm {
        padding-left: 15px
    }

    .navbar-menu .navbar-nav .nav-sm .nav-sm .nav-link:before {
        height: 5px;
        width: 5px;
        left: 5px;
        border-radius: 50%;
        background-color: transparent;
        border: 1px solid;
        top: 16px
    }

    .navbar-menu .btn-vertical-sm-hover {
        color: var(--tb-tertiary-color);
        display: none
    }

    .navbar-brand-box {
        text-align: center;
        padding: 0 1.3rem;
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out
    }

    @media (max-width: 767.98px) {
        .navbar-brand-box {
            display: none
        }
    }

    .hamburger-icon {
        width: 20px;
        height: 14px;
        position: relative;
        /* cursor:pointer; */
        /* display:inline-block; */
    }

    .hamburger-icon span {
        background-color: var(--tb-header-item-sub-color);
        position: absolute;
        border-radius: 2px;
        -webkit-transition: .3s cubic-bezier(.8, .5, .2, 1.4);
        transition: .3s cubic-bezier(.8, .5, .2, 1.4);
        width: 100%;
        height: 2px;
        display: block;
        left: 0
    }

    .hamburger-icon span:nth-child(1) {
        top: 0;
        width: 80%
    }

    .hamburger-icon span:nth-child(2) {
        top: 6px
    }

    .hamburger-icon span:nth-child(3) {
        bottom: 0;
        width: 60%
    }

    .vertical-menu-btn:hover .hamburger-icon:not(.open) span:nth-child(1) {
        top: -1px
    }

    .vertical-menu-btn:hover .hamburger-icon:not(.open) span:nth-child(3) {
        bottom: -1px
    }

    .hamburger-icon.open {
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .hamburger-icon.open span:nth-child(1) {
        left: 1px;
        top: 5px;
        width: 20px;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition-delay: 150ms;
        transition-delay: 150ms
    }

    .hamburger-icon.open span:nth-child(2) {
        left: 3px;
        top: 13px;
        width: 10px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition-delay: 50ms;
        transition-delay: 50ms
    }

    .hamburger-icon.open span:nth-child(3) {
        left: 9px;
        top: 13px;
        width: 10px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transition-delay: .1s;
        transition-delay: .1s
    }

    .logo {
        line-height: 70px
    }

    .logo .logo-sm {
        display: none
    }

    [data-layout=vertical] .app-menu .row {
        margin: 0
    }

    [data-layout=vertical] .app-menu .row>* {
        width: 100%;
        padding: 0
    }

    @media (max-width: 767.98px) {
        [data-layout=vertical] .app-menu {
            margin-left: -100%;
            padding: 10px 0 20px 0
        }
    }

    [data-layout=vertical] .navbar-menu .container-fluid {
        padding: 0
    }

    @media (max-width: 767.98px) {
        [data-layout=vertical] .navbar-brand-box {
            display: none
        }
    }

    [data-layout=vertical] .horizontal-logo {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .main-content {
        margin-left: 70px
    }

    @media (max-width: 767.98px) {
        [data-layout=vertical][data-sidebar-size=sm-hover] .main-content {
            margin-left: 0
        }
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .logo span.logo-lg {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .logo span.logo-sm {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .btn-vertical-sm-hover {
        display: inline-block
    }

    @media (min-width: 768px) {
        [data-layout=vertical][data-sidebar-size=sm-hover] .topnav-hamburger {
            display: none
        }
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu {
        width: 70px
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .btn-vertical-sm-hover {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .btn-vertical-sm-hover i.ri-record-circle-line:before {
        content: "\eb7d"
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .badge {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .menu-title {
        text-align: center
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .menu-title span {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .menu-title i {
        display: block;
        line-height: 36px;
        font-size: 1rem
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link span {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link i {
        font-size: 18px
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link i.lab,
    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link i.lar,
    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link i.las {
        font-size: 24px
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link svg {
        margin-right: 0
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link:after,
    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link:before {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .menu-dropdown {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover {
        width: 250px !important;
        border-right: 1px solid #e9ebec
    }

    @media (min-width: 1024.99px) {
        [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .btn-vertical-sm-hover {
            display: inline-block
        }

        [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .navbar-brand-box {
            text-align: left
        }
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .navbar-nav .menu-dropdown.show {
        display: block
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .nav-link i {
        font-size: 18px
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .nav-link span,
    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .nav-link:after,
    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .nav-link:before {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .logo span.logo-lg {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .logo span.logo-sm {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .menu-title {
        text-align: left
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .menu-title span {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover .menu-title i {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover-active] .navbar-brand-box {
        text-align: left
    }

    [data-layout=vertical][data-sidebar-size=sm-hover-active] .topnav-hamburger {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm-hover-active] .btn-vertical-sm-hover {
        display: inline-block
    }

    @media (min-width: 1025px) {
        [data-layout=vertical]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm-hover-active]) .navbar-header {
            padding-left: 1.5rem
        }
    }

    @media (min-width: 768px) {
        [data-layout=vertical][data-sidebar-size=sm] {
            min-height: 1400px
        }

        [data-layout=vertical][data-sidebar-size=sm] .main-content {
            margin-left: 70px
        }
    }

    [data-layout=vertical][data-sidebar-size=sm] #page-topbar {
        z-index: calc(1002 + 1)
    }

    [data-layout=vertical][data-sidebar-size=sm] .logo span.logo-lg {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm] .logo span.logo-sm {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu {
        position: absolute;
        width: 70px !important;
        padding-top: 70px
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .simplebar-content-wrapper,
    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .simplebar-mask {
        overflow: visible !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .simplebar-scrollbar,
    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .vertical-menu-btn {
        display: none !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .simplebar-offset {
        bottom: 0 !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .badge {
        display: none !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .menu-title {
        text-align: center;
        font-size: 1rem
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .menu-title span {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .menu-title i {
        display: block;
        line-height: 36px
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-link span {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-link i {
        font-size: 18px
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-link svg {
        margin-right: 0
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-link:after,
    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-link:before {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .menu-dropdown {
        display: none;
        height: auto !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item {
        position: relative
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.menu-link {
        position: relative;
        width: calc(200px + 70px);
        color: #fff;
        background: var(--tb-vertical-menu-item-hover-bg);
        -webkit-transition: none;
        transition: none
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.menu-link span {
        display: inline-block;
        padding-left: 25px
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.menu-link:after {
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #fff
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.menu-dropdown {
        display: block;
        left: 70px;
        position: absolute;
        width: 200px;
        background: var(--tb-vertical-menu-bg);
        height: auto !important;
        padding: .5rem 0;
        border-radius: 0 0 3px 3px;
        -webkit-box-shadow: 0 2px 4px rgba(15, 34, 58, .12);
        box-shadow: 0 2px 4px rgba(15, 34, 58, .12)
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm {
        padding: 0
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .nav-item:hover>.nav-link {
        color: var(--tb-vertical-menu-item-hover-color)
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .nav-item:hover>.nav-link:after {
        color: inherit
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .nav-link:after {
        display: block !important;
        -webkit-transform: rotate(0) !important;
        transform: rotate(0) !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .menu-dropdown {
        left: 100% !important;
        top: 0;
        border-radius: 3px !important
    }

    [data-layout=vertical][data-sidebar-size=sm] .navbar-brand-box {
        position: fixed;
        padding: 0;
        width: 69px;
        z-index: 1;
        top: 35px;
        background: var(--tb-vertical-menu-bg)
    }

    [data-layout=vertical][data-sidebar-size=sm][data-layout-style=detached] .navbar-brand-box {
        top: auto
    }

    @media (min-width: 768px) {
        [data-layout=vertical][data-sidebar-size=md] .main-content {
            margin-left: 180px
        }
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-brand-box {
        width: 180px
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu {
        width: 180px !important
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link {
        display: block;
        text-align: center;
        padding: .55rem .525rem
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link i {
        display: block
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link svg {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link:before {
        display: none !important
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
        position: relative;
        display: inline-block;
        right: 0;
        top: 3px
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-link.menu-link[data-bs-toggle=collapse]:after {
        display: none
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .badge {
        display: none !important
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .navbar-nav .nav-sm {
        padding-left: 0
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .menu-title {
        text-align: center
    }

    [data-layout=vertical][data-sidebar-size=md] .navbar-menu .menu-title span {
        text-decoration: underline
    }

    [data-layout=vertical]:is([data-sidebar=dark], [data-sidebar=brand])[data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .nav-link:after {
        display: block !important;
        -webkit-transform: rotate(0) !important;
        transform: rotate(0) !important
    }

    [data-layout=vertical]:is([data-sidebar=dark], [data-sidebar=brand])[data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-sm .menu-dropdown {
        left: 100% !important;
        top: 0;
        border-radius: 3px !important
    }

    [data-layout=vertical]:is([data-sidebar=dark], [data-sidebar=brand]) .logo-dark {
        display: none
    }

    [data-layout=vertical]:is([data-sidebar=dark], [data-sidebar=brand]) .logo-light {
        display: inline-block
    }

    [data-layout=vertical]:is([data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .logo-dark {
        display: none
    }

    [data-layout=vertical]:is([data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .logo-light {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar=light] .logo-dark {
        display: inline-block
    }

    [data-layout=vertical][data-sidebar=light] .logo-light {
        display: none
    }

    [data-layout=vertical][data-layout-style=detached] #layout-wrapper,
    [data-layout=vertical][data-layout-style=detached] .main-content {
        min-height: 100vh
    }

    @media (min-width: 1024.1px) {
        [data-layout=vertical][data-layout-style=detached] .main-content {
            position: relative
        }

        [data-layout=vertical][data-layout-style=detached] .top-tagbar .container-fluid {
            width: 95%
        }

        [data-layout=vertical][data-layout-style=detached] #layout-wrapper {
            max-width: 95%;
            margin: 0 auto;
            padding-left: 1.5rem
        }

        [data-layout=vertical][data-layout-style=detached] .navbar-header {
            padding-left: 1.5rem
        }

        [data-layout=vertical][data-layout-style=detached] .navbar-menu {
            top: calc(70px + calc(1.5rem * 2.5));
            bottom: 1.5rem;
            padding: 0;
            border-right: var(--tb-vertical-menu-bg);
            border-radius: 5px;
            padding: 10px 0;
            z-index: 1
        }

        [data-layout=vertical][data-layout-style=detached] .navbar-menu .navbar-brand-box {
            display: none
        }
    }

    [data-layout=vertical][data-layout-style=detached] .footer {
        border-top: 1px dashed #e9ebec
    }

    [data-layout=vertical][data-layout-style=detached] .auth-page-wrapper .footer {
        border-top: none
    }

    @media (min-width: 768px) {

        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm] #layout-wrapper,
        [data-layout=vertical][data-layout-style=detached][data-sidebar-size=sm] .main-content {
            min-height: 1400px
        }
    }

    .menu-title {
        letter-spacing: .05em;
        cursor: default;
        font-size: 11px;
        text-transform: uppercase;
        color: var(--tb-vertical-menu-title-color);
        font-weight: 600
    }

    .menu-title span {
        padding: 12px 20px;
        display: inline-block
    }

    .menu-title i {
        display: none
    }

    .logo-light {
        display: none
    }

    .vertical-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(11, 23, 41, .35);
        z-index: 1003;
        display: none
    }

    .vertical-sidebar-enable .vertical-overlay {
        display: block
    }

    .vertical-sidebar-enable .app-menu {
        margin-left: 0 !important;
        z-index: 1004
    }

    [dir=rtl] .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    [dir=rtl] .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true]:after {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .bg-vertical-gradient {
        background: -webkit-gradient(linear, right top, left top, from(#2d5899), to(#1e3b66));
        background: linear-gradient(to left, #2d5899, #1e3b66)
    }

    .bg-vertical-gradient-2 {
        background: -webkit-gradient(linear, right top, left top, from(#4a4099), to(#322b66));
        background: linear-gradient(to left, #4a4099, #322b66)
    }

    .bg-vertical-gradient-3 {
        background: -webkit-gradient(linear, right top, left top, from(#048060), to(#025640));
        background: linear-gradient(to left, #048060, #025640)
    }

    .bg-vertical-gradient-4 {
        background: -webkit-gradient(linear, right top, left top, from(#12647f), to(#0c4254));
        background: linear-gradient(to left, #12647f, #0c4254)
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
        opacity: .07
    }

    [data-sidebar-image=img-1] .sidebar-background {
        background-image: url(../images/sidebar/img-1.jpg)
    }

    [data-sidebar-image=img-2] .sidebar-background {
        background-image: url(../images/sidebar/img-2.jpg)
    }

    [data-sidebar-image=img-3] .sidebar-background {
        background-image: url(../images/sidebar/img-3.jpg)
    }

    [data-sidebar-image=img-4] .sidebar-background {
        background-image: url(../images/sidebar/img-4.jpg)
    }

    [data-layout-mode=dark][data-sidebar=light] .logo-dark {
        display: none
    }

    [data-layout-mode=dark][data-sidebar=light] .logo-light {
        display: inline-block
    }

    [data-topbar=brand] .btn-ghost-dark,
    [data-topbar=dark] .btn-ghost-dark {
        color: #eff2f7
    }

    [data-topbar=brand] .btn-ghost-dark:active,
    [data-topbar=brand] .btn-ghost-dark:focus,
    [data-topbar=brand] .btn-ghost-dark:hover,
    [data-topbar=dark] .btn-ghost-dark:active,
    [data-topbar=dark] .btn-ghost-dark:focus,
    [data-topbar=dark] .btn-ghost-dark:hover {
        color: #eff2f7;
        background-color: rgba(239, 242, 247, .1)
    }

    .back-btn {
        position: fixed;
        left: 12px;
        bottom: 24px
    }

    [data-layout=horizontal] .main-content {
        margin-left: 0
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal] .top-tagbar {
            max-width: 100% !important
        }

        [data-layout=horizontal] .container-fluid,
        [data-layout=horizontal] .layout-width {
            max-width: 90%;
            margin: 0 auto
        }

        [data-layout=horizontal] .topnav-hamburger {
            visibility: hidden
        }
    }

    [data-layout=horizontal] .horizontal-logo {
        padding-left: calc(1.5rem * .5);
        width: auto
    }

    @media (max-width: 1024.98px) {
        [data-layout=horizontal] .horizontal-logo {
            padding-left: 1.5rem
        }
    }

    [data-layout=horizontal] .navbar-menu {
        background: var(--tb-topnav-bg);
        border-right-color: transparent;
        padding: 0 calc(1.5rem * .5);
        -webkit-box-shadow: 0 2px 4px rgba(15, 34, 58, .12);
        box-shadow: 0 2px 4px rgba(15, 34, 58, .12);
        position: fixed;
        top: calc(35px + 70px);
        left: 0;
        right: 0;
        z-index: 100;
        width: 100%;
        bottom: auto
    }

    @media (max-width: 575.98px) {
        [data-layout=horizontal] .navbar-menu .container-fluid {
            padding: 0
        }
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-sm {
        padding-left: 0
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-sm .nav-link:before {
        opacity: 0 !important
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-sm .nav-link.active,
    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-sm .nav-link:hover {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link {
        color: var(--tb-topnav-item-color);
        padding: .75rem 1.5rem
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link i {
        line-height: 1
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link.active {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link.active:after {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true]:after {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav>.nav-item>.nav-link[data-bs-toggle=collapse]:after {
        right: 0;
        -webkit-transform: rotate(90deg) !important;
        transform: rotate(90deg) !important
    }

    [data-layout=horizontal] .navbar-menu .navbar-nav>li:nth-of-type(2)>.nav-link.menu-link {
        padding-left: 0
    }

    [data-layout=horizontal] .navbar-menu .navbar-brand-box {
        display: none
    }

    [data-layout=horizontal] .navbar-nav .nav-item {
        position: relative
    }

    [data-layout=horizontal] .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
        right: 10px;
        -webkit-transform: rotate(0) !important;
        transform: rotate(0) !important
    }

    [data-layout=horizontal] .navbar-nav .nav-item>.nav-link>.badge {
        display: none
    }

    [data-layout=horizontal] .navbar-nav .nav-item:hover>.nav-link {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .navbar-nav .nav-item:hover>.nav-link:after {
        color: var(--tb-topnav-item-color-active)
    }

    @media (min-width: 1024.1px) {
        [data-layout=horizontal] .navbar-nav .nav-item:hover>.menu-dropdown {
            display: block;
            height: auto !important
        }
    }

    [data-layout=horizontal] .navbar-nav .nav-item.active {
        color: var(--tb-topnav-item-color-active)
    }

    [data-layout=horizontal] .menu-dropdown {
        position: absolute;
        min-width: 12rem;
        padding: .5rem 0;
        -webkit-box-shadow: 0 0 5px rgba(15, 34, 58, .15);
        box-shadow: 0 0 5px rgba(15, 34, 58, .15);
        -webkit-animation-name: DropDownSlide;
        animation-name: DropDownSlide;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        margin: 0;
        z-index: 1000;
        background-color: var(--tb-secondary-bg);
        background-clip: padding-box;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .3rem;
        display: none
    }

    [data-layout=horizontal] .menu-dropdown .menu-dropdown {
        top: 0;
        left: 100%
    }

    [data-layout=horizontal] .mega-dropdown-menu {
        width: 40rem
    }

    [data-layout=horizontal] .menu-title {
        display: none
    }

    [data-layout=horizontal] .dropdown-custom-right {
        left: -100% !important;
        right: 100%
    }

    @media (max-width: 1024px) {
        [data-layout=horizontal] .navbar-menu {
            display: none
        }
    }

    @media (max-width: 1024px) {
        [data-layout=horizontal] .menu .navbar-menu {
            display: block;
            max-height: 360px;
            overflow-y: auto;
            padding-left: 0
        }

        [data-layout=horizontal] .menu .navbar-menu .navbar-nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        [data-layout=horizontal] .menu .navbar-menu .navbar-nav>li:nth-of-type(2)>.nav-link.menu-link {
            padding-left: 1.5rem
        }

        [data-layout=horizontal] .menu .navbar-menu .navbar-nav .nav-sm .nav-link:before {
            opacity: 1 !important
        }

        [data-layout=horizontal] .menu .menu-dropdown {
            position: relative;
            min-width: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding-left: 28px;
            left: 0;
            -webkit-animation: none;
            animation: none;
            padding-top: 0
        }

        [data-layout=horizontal] .menu .menu-dropdown.show {
            display: block
        }

        [data-layout=horizontal] .menu .dropdown-custom-right {
            left: 0 !important
        }

        [data-layout=horizontal] .menu .nav-item .nav-link[data-bs-toggle=collapse]:after {
            right: 0
        }

        [data-layout=horizontal] .menu .mega-dropdown-menu {
            width: 100%
        }
    }

    [data-layout=horizontal]:is([data-topbar=dark], [data-topbar=brand]) .navbar-header .horizontal-logo .logo-dark {
        display: none
    }

    [data-layout=horizontal]:is([data-topbar=dark], [data-topbar=brand]) .navbar-header .horizontal-logo .logo-light {
        display: block
    }

    [data-layout-mode=dark][data-topbar=light] .navbar-header .horizontal-logo .logo-dark {
        display: none
    }

    [data-layout-mode=dark][data-topbar=light] .navbar-header .horizontal-logo .logo-light {
        display: block
    }

    [dir=rtl][data-layout=horizontal] .navbar-menu .navbar-nav>.nav-item>.nav-link[data-bs-toggle=collapse]:after {
        -webkit-transform: rotate(-90deg) !important;
        transform: rotate(-90deg) !important
    }

    [dir=rtl][data-layout=horizontal] .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
        -webkit-transform: rotate(-180deg) !important;
        transform: rotate(-180deg) !important
    }

    [data-layout=twocolumn] .app-menu {
        padding-bottom: 0;
        width: 220px;
        left: 70px
    }

    [data-layout=twocolumn] .app-menu .menu-link {
        letter-spacing: .05em;
        cursor: default;
        font-size: 11px;
        text-transform: uppercase;
        color: var(--tb-vertical-menu-title-color) !important;
        font-weight: 600
    }

    [data-layout=twocolumn] .app-menu .menu-link:after {
        display: none !important
    }

    [data-layout=twocolumn] .app-menu .menu-link i {
        display: none
    }

    [data-layout=twocolumn] .app-menu .navbar-nav {
        height: calc(100vh - 70px)
    }

    @media (max-width: 767.98px) {
        [data-layout=twocolumn] .app-menu .navbar-nav {
            padding-top: 16px
        }
    }

    [data-layout=twocolumn] .app-menu .navbar-nav>li:not(.twocolumn-item-show) {
        display: none
    }

    [data-layout=twocolumn] .app-menu .navbar-nav .twocolumn-item-show>div {
        display: block !important;
        height: auto !important
    }

    [data-layout=twocolumn] .app-menu .navbar-nav>.nav-item>.menu-dropdown {
        display: block !important;
        height: auto !important
    }

    [data-layout=twocolumn] .app-menu .navbar-nav .nav-item .menu-dropdown .row {
        margin: 0
    }

    [data-layout=twocolumn] .app-menu .navbar-nav .nav-item .menu-dropdown .row .col-lg-4 {
        width: 100%;
        padding: 0
    }

    [data-layout=twocolumn] .app-menu .navbar-nav .nav-sm .nav-link {
        color: var(--tb-vertical-menu-item-color)
    }

    [data-layout=twocolumn] .app-menu .navbar-nav .nav-sm .nav-link.active {
        color: var(--tb-vertical-menu-item-active-color)
    }

    [data-layout=twocolumn] .app-menu .container-fluid {
        padding: 0
    }

    [data-layout=twocolumn] .main-content {
        margin-left: calc(220px + 70px)
    }

    @media (max-width: 767.98px) {
        [data-layout=twocolumn] .main-content {
            margin-left: 70px
        }
    }

    [data-layout=twocolumn] .twocolumn-iconview {
        width: 70px;
        background: var(--tb-twocolumn-menu-iconview-bg);
        height: 100%;
        left: -70px;
        -webkit-box-shadow: 0 2px 4px rgba(15, 34, 58, .12);
        box-shadow: 0 2px 4px rgba(15, 34, 58, .12);
        top: 0;
        position: absolute;
        padding: 0;
        text-align: center
    }

    [data-layout=twocolumn] .twocolumn-iconview li {
        position: relative
    }

    [data-layout=twocolumn] .twocolumn-iconview li .nav-icon::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    [data-layout=twocolumn] .twocolumn-iconview .nav-icon {
        width: 42px;
        height: 42px;
        line-height: 42px;
        color: var(--tb-vertical-menu-item-color);
        z-index: 1;
        font-size: 18px;
        text-align: center;
        border-radius: 3px;
        margin: 5px 0;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    [data-layout=twocolumn] .twocolumn-iconview .nav-icon .icon-dual {
        width: 18px;
        color: var(--tb-vertical-menu-item-color)
    }

    [data-layout=twocolumn] .twocolumn-iconview .nav-icon.active {
        background-color: var(--tb-vertical-menu-item-active-bg);
        color: var(--tb-vertical-menu-item-active-color)
    }

    [data-layout=twocolumn] .menu-title {
        display: none
    }

    @media (max-width: 991.98px) {
        [data-layout=twocolumn] .logo span.logo-lg {
            display: block
        }

        [data-layout=twocolumn] .logo span.logo-sm {
            display: none
        }
    }

    [data-layout=twocolumn]:is([data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .app-menu .navbar-brand-box .logo-light {
        display: block
    }

    [data-layout=twocolumn]:is([data-sidebar=dark], [data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) .app-menu .navbar-brand-box .logo-dark {
        display: none
    }

    [data-layout=twocolumn] .twocolumn-panel .app-menu {
        width: 0;
        border-right: 0
    }

    @media (max-width: 575.98px) {
        [data-layout=twocolumn] .twocolumn-panel .app-menu {
            display: none
        }
    }

    [data-layout=twocolumn] .twocolumn-panel .navbar-brand-box,
    [data-layout=twocolumn] .twocolumn-panel .navbar-nav {
        display: none
    }

    [data-layout=twocolumn] .twocolumn-panel .main-content {
        margin-left: 70px
    }

    [data-layout=twocolumn] .twocolumn-panel #page-topbar,
    [data-layout=twocolumn] .twocolumn-panel .footer {
        left: 70px
    }

    @media (max-width: 575.98px) {
        [data-layout=twocolumn] .twocolumn-panel .main-content {
            margin-left: 0
        }

        [data-layout=twocolumn] .twocolumn-panel #page-topbar,
        [data-layout=twocolumn] .twocolumn-panel .footer {
            left: 0
        }
    }

    @media (max-width: 767.98px) {

        [data-layout=twocolumn] #page-topbar,
        [data-layout=twocolumn] .footer {
            left: 70px
        }
    }

    @media (max-width: 575.98px) {
        [data-layout=twocolumn] .main-content {
            margin-left: 0
        }

        [data-layout=twocolumn] #page-topbar,
        [data-layout=twocolumn] .footer {
            left: 0
        }
    }

    [data-layout-width=boxed] body {
        background: var(--tb-body-bg-image)
    }

    [data-layout-width=boxed] body::before {
        content: "";
        position: absolute;
        inset: 0;
        background-color: rgba(var(--tb-body-bg-rgb), .6)
    }

    [data-layout-width=boxed] #layout-wrapper {
        max-width: 1400px;
        margin: 0 auto;
        -webkit-box-shadow: 0 5px 15px rgba(30, 32, 37, .4);
        box-shadow: 0 5px 15px rgba(30, 32, 37, .4);
        background-color: var(--tb-body-bg)
    }

    [data-layout-width=boxed][data-layout=vertical] #layout-wrapper {
        min-height: 100vh
    }

    [data-layout-width=boxed] #page-topbar,
    [data-layout-width=boxed] .footer {
        max-width: 1400px;
        margin: 0 auto;
        left: 0 !important
    }

    @media (min-width: 768px) {
        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm])[data-layout=vertical] #layout-wrapper {
            min-height: 1400px
        }
    }

    @media (max-width: 767.98px) {
        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm])[data-layout=vertical] .main-content {
            margin-left: 0
        }
    }

    [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm]) #page-topbar,
    [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm]) .footer {
        left: 0 !important;
        max-width: calc(1400px - 70px)
    }

    @media (min-width: 768px) {

        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm]) #page-topbar,
        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm]) .footer {
            left: 70px !important
        }
    }

    [data-layout-width=boxed]:is([data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) #page-topbar,
    [data-layout-width=boxed]:is([data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) .footer {
        max-width: calc(1400px - 250px)
    }

    @media (min-width: 768px) {

        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) #page-topbar,
        [data-layout-width=boxed]:is([data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) .footer {
            left: 250px !important
        }
    }

    [data-layout-width=boxed][data-sidebar-size=md] #page-topbar,
    [data-layout-width=boxed][data-sidebar-size=md] .footer {
        max-width: calc(1400px - 180px)
    }

    @media (min-width: 768px) {

        [data-layout-width=boxed][data-sidebar-size=md] #page-topbar,
        [data-layout-width=boxed][data-sidebar-size=md] .footer {
            left: 180px !important
        }
    }

    [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached] body {
        background-color: var(--tb-body-bg)
    }

    @media (min-width: 1024.1px) {
        [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached] #layout-wrapper {
            max-width: 1300px
        }

        [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached] .top-tagbar .container-fluid {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 calc(1.5rem * 1) 0 calc(1.5rem * 1)
        }

        [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached] .layout-width {
            max-width: 1300px
        }
    }

    [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm], [data-sidebar-size=md], [data-sidebar-size=lg]) #page-topbar,
    [data-layout-width=boxed][data-layout=vertical][data-layout-style=detached]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm], [data-sidebar-size=md], [data-sidebar-size=lg]) .footer {
        max-width: 100%;
        left: 0 !important
    }

    [data-layout=horizontal][data-layout-width=boxed] #layout-wrapper,
    [data-layout=horizontal][data-layout-width=boxed] #page-topbar,
    [data-layout=horizontal][data-layout-width=boxed] .footer {
        max-width: 100%
    }

    [data-layout=horizontal][data-layout-width=boxed] .container-fluid,
    [data-layout=horizontal][data-layout-width=boxed] .navbar-header {
        max-width: 1400px
    }

    [data-layout=horizontal][data-layout-width=boxed] .navbar-header {
        padding: 0 calc(1.5rem * .5) 0 0
    }

    [data-layout=horizontal][data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm], [data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) #page-topbar,
    [data-layout=horizontal][data-layout-width=boxed]:is([data-sidebar-size=sm-hover], [data-sidebar-size=sm], [data-sidebar-size=sm-hover-active], [data-sidebar-size=lg]) .footer {
        left: 0 !important
    }

    @media (min-width: 992px) {

        [data-layout-position=scrollable] #page-topbar,
        [data-layout-position=scrollable] .navbar-menu {
            position: absolute
        }
    }

    @media (min-width: 992px) {

        [data-layout-position=scrollable][data-layout=horizontal] #page-topbar,
        [data-layout-position=scrollable][data-layout=horizontal] .topnav {
            position: absolute
        }
    }

    .ecommerce-navbar .navbar-nav .nav-item .nav-link {
        color: #637790;
        font-size: 15px;
        font-weight: 500;
        padding: 0 14px;
        height: 70px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .ecommerce-navbar .navbar-nav .nav-item .nav-link.active,
    .ecommerce-navbar .navbar-nav .nav-item .nav-link:hover {
        color: #4b93ff
    }

    .ecommerce-navbar .dropdown-menu-list .nav-item .nav-link {
        height: auto;
        display: inline-block;
        font-size: 14px;
        padding: .35rem 0;
        background-color: transparent !important;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .ecommerce-navbar .dropdown-menu-list .nav-item .nav-link::before {
        content: "";
        background-color: #4b93ff;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        position: absolute;
        top: 15px;
        left: 2px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        opacity: 0
    }

    .ecommerce-navbar .dropdown-menu-list .nav-item .nav-link:hover {
        padding-left: 13px;
        color: #4b93ff
    }

    .ecommerce-navbar .dropdown-menu-list .nav-item .nav-link:hover::before {
        opacity: 1
    }

    .ecommerce-navbar .dropdown-menu-list.submenu .nav-item .nav-link::before {
        left: 1.45rem
    }

    .ecommerce-navbar .dropdown-menu-list.submenu .nav-item .nav-link:hover {
        padding-left: 37px !important
    }

    .ecommerce-navbar .navbar-collapse {
        height: 100% !important
    }

    .ecommerce-navbar.is-sticky {
        background-color: var(--tb-secondary-bg) !important;
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12)
    }

    .ecommerce-navbar .navbar-brand .logo-light {
        display: var(--tb-card-logo-light)
    }

    .ecommerce-navbar .navbar-brand .logo-dark {
        display: var(--tb-card-logo-dark)
    }

    .dropdown-custom-right {
        left: auto !important;
        right: 100%
    }

    @media (min-width: 992px) {
        .dropdown-hover:hover>.dropdown-menu {
            display: block
        }

        .dropdown-hover:hover .dropdown-toggle::after {
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .dropdown-hover-end:hover>.dropdown-menu {
            display: block;
            top: 70px !important;
            right: 0
        }

        .dropdown-hover-end:hover .dropdown-toggle::after {
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .dropdown-menu.dropdown-menu-center {
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0)
        }

        .navbar-nav .dropdown .dropdown-menu.submenu {
            width: 200px
        }

        .navbar-nav .dropdown .dropdown-menu.submenu.dropdown-custom-right {
            left: -100% !important;
            right: 100%
        }

        .navbar-nav .dropdown .dropdown-menu.submenu .nav-item .nav-link {
            width: 100%;
            padding: .35rem 1.5rem
        }

        .navbar-nav .dropdown .dropdown-menu.submenu .nav-item .nav-link.dropdown-toggle::after {
            float: right;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            margin-top: 3px
        }

        .navbar-nav .dropdown .dropdown-menu.submenu .nav-item.dropdown-hover .dropdown-menu {
            left: 100%;
            top: 0
        }
    }

    .bg-overlay.navbar-overlay {
        position: fixed;
        z-index: 9
    }

    .navbar-collapse:not(.show)+.navbar-overlay {
        display: none
    }

    @media (max-width: 991.98px) {
        .ecommerce-navbar .navbar-collapse {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100vh !important;
            background-color: var(--tb-secondary-bg);
            width: 250px;
            z-index: 999;
            overflow-y: auto;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            -webkit-transition: all .4s;
            transition: all .4s
        }

        .ecommerce-navbar .navbar-collapse:not(.show) {
            -webkit-transform: translateX(-250px);
            transform: translateX(-250px)
        }

        .ecommerce-navbar .navbar-nav .nav-item .nav-link {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            height: 40px;
            width: 100%
        }

        .ecommerce-navbar .navbar-nav .nav-item .nav-link.dropdown-toggle:after {
            margin-left: auto
        }

        .ecommerce-navbar .navbar-nav .dropdown-menu {
            -webkit-box-shadow: none;
            box-shadow: none;
            position: relative;
            left: auto !important;
            right: auto !important;
            width: 100%
        }

        .ecommerce-navbar .navbar-nav .dropdown-menu.submenu {
            padding-left: 12px
        }

        .ecommerce-navbar .dropdown-menu-list .nav-item .nav-link {
            height: auto;
            padding: .35rem 1.2rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .ecommerce-navbar .dropdown-menu-list .menu-title {
            padding: 0 1.2rem
        }
    }

    .dropdown-mega-full {
        position: static !important
    }

    .dropdown-mega-full .dropdown-menu {
        padding: 20px;
        left: 20px !important;
        right: 20px !important
    }

    .avatar-xxs {
        height: 1.5rem;
        width: 1.5rem
    }

    .avatar-xs {
        height: 2rem;
        width: 2rem
    }

    .avatar-sm {
        height: 3rem;
        width: 3rem
    }

    .avatar-md {
        height: 4.5rem;
        width: 4.5rem
    }

    .avatar-lg {
        height: 6rem;
        width: 6rem
    }

    .avatar-xl {
        height: 7.5rem;
        width: 7.5rem
    }

    .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #4b93ff;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%
    }

    .avatar-group {
        padding-left: 12px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .avatar-group .avatar-group-item {
        margin-left: -12px;
        border: 2px solid var(--tb-card-bg-custom);
        border-radius: 50%;
        -webkit-transition: all .2s;
        transition: all .2s
    }

    .avatar-group .avatar-group-item:hover {
        position: relative;
        -webkit-transform: translateY(-2px);
        transform: translateY(-2px);
        z-index: 1
    }

    .accordion .accordion-button {
        font-weight: 500
    }

    .accordion .accordion-body {
        color: var(--tb-tertiary-color)
    }

    .accordion.accordion-icon-none .accordion-button::after {
        content: "";
        background-image: none !important
    }

    .accordion.accordion-icon-none .accordion-button:not(.collapsed)::after {
        content: ""
    }

    .custom-accordionwithicon .accordion-button::after {
        background-image: none !important;
        font-family: "Material Design Icons";
        content: "\f0142";
        font-size: 1.1rem;
        vertical-align: middle;
        line-height: .8
    }

    .custom-accordionwithicon .accordion-button:not(.collapsed)::after {
        background-image: none !important;
        content: "\f0140";
        margin-right: -3px
    }

    .custom-accordionwithicon-plus .accordion-button::after {
        background-image: none !important;
        font-family: "Material Design Icons";
        content: "\f0415";
        font-size: 1.1rem;
        vertical-align: middle;
        line-height: .8
    }

    .custom-accordionwithicon-plus .accordion-button:not(.collapsed)::after {
        background-image: none !important;
        content: "\f0374";
        margin-right: -3px
    }

    .lefticon-accordion .accordion-button {
        padding-left: 2.75rem
    }

    .lefticon-accordion .accordion-button::after {
        position: absolute;
        left: 1.25rem;
        top: 14px
    }

    .lefticon-accordion .accordion-button:not(.collapsed)::after {
        top: 20px
    }

    .accordion-border-box .accordion-item {
        border-top: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: var(--tb-border-radius)
    }

    .accordion-border-box .accordion-item:not(:first-of-type) {
        margin-top: 8px
    }

    .accordion-border-box .accordion-item .accordion-button {
        border-radius: var(--tb-border-radius)
    }

    .accordion-border-box .accordion-item .accordion-button:not(.collapsed) {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .custom-accordion-border .accordion-item {
        border-left: 3px solid var(--tb-border-color-translucent)
    }

    .accordion-primary .accordion-item {
        border-color: rgba(75, 147, 255, .6)
    }

    .accordion-primary .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-primary .accordion-item .accordion-button:not(.collapsed) {
        color: #4b93ff;
        background-color: rgba(75, 147, 255, .1) !important
    }

    .accordion-primary .accordion-item .accordion-button::after {
        color: #4b93ff
    }

    .accordion-fill-primary .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-primary .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #4b93ff !important
    }

    .accordion-secondary .accordion-item {
        border-color: rgba(124, 107, 255, .6)
    }

    .accordion-secondary .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-secondary .accordion-item .accordion-button:not(.collapsed) {
        color: #7c6bff;
        background-color: rgba(124, 107, 255, .1) !important
    }

    .accordion-secondary .accordion-item .accordion-button::after {
        color: #7c6bff
    }

    .accordion-fill-secondary .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-secondary .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #7c6bff !important
    }

    .accordion-success .accordion-item {
        border-color: rgba(6, 214, 160, .6)
    }

    .accordion-success .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-success .accordion-item .accordion-button:not(.collapsed) {
        color: #06d6a0;
        background-color: rgba(6, 214, 160, .1) !important
    }

    .accordion-success .accordion-item .accordion-button::after {
        color: #06d6a0
    }

    .accordion-fill-success .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-success .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #06d6a0 !important
    }

    .accordion-info .accordion-item {
        border-color: rgba(30, 166, 211, .6)
    }

    .accordion-info .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-info .accordion-item .accordion-button:not(.collapsed) {
        color: #1ea6d3;
        background-color: rgba(30, 166, 211, .1) !important
    }

    .accordion-info .accordion-item .accordion-button::after {
        color: #1ea6d3
    }

    .accordion-fill-info .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-info .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #1ea6d3 !important
    }

    .accordion-warning .accordion-item {
        border-color: rgba(241, 190, 70, .6)
    }

    .accordion-warning .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-warning .accordion-item .accordion-button:not(.collapsed) {
        color: #f1be46;
        background-color: rgba(241, 190, 70, .1) !important
    }

    .accordion-warning .accordion-item .accordion-button::after {
        color: #f1be46
    }

    .accordion-fill-warning .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-warning .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #f1be46 !important
    }

    .accordion-danger .accordion-item {
        border-color: rgba(239, 71, 111, .6)
    }

    .accordion-danger .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-danger .accordion-item .accordion-button:not(.collapsed) {
        color: #ef476f;
        background-color: rgba(239, 71, 111, .1) !important
    }

    .accordion-danger .accordion-item .accordion-button::after {
        color: #ef476f
    }

    .accordion-fill-danger .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-danger .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #ef476f !important
    }

    .accordion-light .accordion-item {
        border-color: rgba(243, 246, 249, .6)
    }

    .accordion-light .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-light .accordion-item .accordion-button:not(.collapsed) {
        color: #f3f6f9;
        background-color: rgba(243, 246, 249, .1) !important
    }

    .accordion-light .accordion-item .accordion-button::after {
        color: #f3f6f9
    }

    .accordion-fill-light .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-light .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #f3f6f9 !important
    }

    .accordion-dark .accordion-item {
        border-color: rgba(11, 23, 41, .6)
    }

    .accordion-dark .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-dark .accordion-item .accordion-button:not(.collapsed) {
        color: #0b1729;
        background-color: rgba(11, 23, 41, .1) !important
    }

    .accordion-dark .accordion-item .accordion-button::after {
        color: #0b1729
    }

    .accordion-fill-dark .accordion-item .accordion-button {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .accordion-fill-dark .accordion-item .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #0b1729 !important
    }

    [data-layout-mode=dark] .accordion-button:not(.collapsed) {
        color: var(--tb-accordion-button-active-color)
    }

    [data-layout-mode=dark] .accordion-button:not(.collapsed):after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
    }

    [data-layout-mode=dark] .accordion-button:after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23adb5bd'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
    }

    [dir=rtl] .custom-accordionwithicon .accordion-button::after {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .fs-10 {
        font-size: 10px !important
    }

    .fs-11 {
        font-size: 11px !important
    }

    .fs-12 {
        font-size: 12px !important
    }

    .fs-13 {
        font-size: 13px !important
    }

    .fs-14 {
        font-size: 14px !important
    }

    .fs-15 {
        font-size: 15px !important
    }

    .fs-16 {
        font-size: 16px !important
    }

    .fs-17 {
        font-size: 17px !important
    }

    .fs-18 {
        font-size: 18px !important
    }

    .fs-19 {
        font-size: 19px !important
    }

    .fs-20 {
        font-size: 20px !important
    }

    .fs-21 {
        font-size: 21px !important
    }

    .fs-22 {
        font-size: 22px !important
    }

    .fs-23 {
        font-size: 23px !important
    }

    .fs-24 {
        font-size: 24px !important
    }

    .fs-36 {
        font-size: 36px !important
    }

    .fs-48 {
        font-size: 48px !important
    }

    .border-double {
        border-style: double !important
    }

    .border-top-double {
        border-top-style: double !important
    }

    .border-bottom-double {
        border-bottom-style: double !important
    }

    .border-end-double {
        border-right-style: double !important
    }

    .border-start-double {
        border-left-style: double !important
    }

    .list-group-flush.border-double {
        border: none !important
    }

    .list-group-flush.border-double .list-group-item {
        border-style: double !important
    }

    .border-dashed {
        border-style: dashed !important
    }

    .border-top-dashed {
        border-top-style: dashed !important
    }

    .border-bottom-dashed {
        border-bottom-style: dashed !important
    }

    .border-end-dashed {
        border-right-style: dashed !important
    }

    .border-start-dashed {
        border-left-style: dashed !important
    }

    .list-group-flush.border-dashed {
        border: none !important
    }

    .list-group-flush.border-dashed .list-group-item {
        border-style: dashed !important
    }

    .border-groove {
        border-style: groove !important
    }

    .border-top-groove {
        border-top-style: groove !important
    }

    .border-bottom-groove {
        border-bottom-style: groove !important
    }

    .border-end-groove {
        border-right-style: groove !important
    }

    .border-start-groove {
        border-left-style: groove !important
    }

    .list-group-flush.border-groove {
        border: none !important
    }

    .list-group-flush.border-groove .list-group-item {
        border-style: groove !important
    }

    .border-outset {
        border-style: outset !important
    }

    .border-top-outset {
        border-top-style: outset !important
    }

    .border-bottom-outset {
        border-bottom-style: outset !important
    }

    .border-end-outset {
        border-right-style: outset !important
    }

    .border-start-outset {
        border-left-style: outset !important
    }

    .list-group-flush.border-outset {
        border: none !important
    }

    .list-group-flush.border-outset .list-group-item {
        border-style: outset !important
    }

    .border-ridge {
        border-style: ridge !important
    }

    .border-top-ridge {
        border-top-style: ridge !important
    }

    .border-bottom-ridge {
        border-bottom-style: ridge !important
    }

    .border-end-ridge {
        border-right-style: ridge !important
    }

    .border-start-ridge {
        border-left-style: ridge !important
    }

    .list-group-flush.border-ridge {
        border: none !important
    }

    .list-group-flush.border-ridge .list-group-item {
        border-style: ridge !important
    }

    .border-dotted {
        border-style: dotted !important
    }

    .border-top-dotted {
        border-top-style: dotted !important
    }

    .border-bottom-dotted {
        border-bottom-style: dotted !important
    }

    .border-end-dotted {
        border-right-style: dotted !important
    }

    .border-start-dotted {
        border-left-style: dotted !important
    }

    .list-group-flush.border-dotted {
        border: none !important
    }

    .list-group-flush.border-dotted .list-group-item {
        border-style: dotted !important
    }

    .border-inset {
        border-style: inset !important
    }

    .border-top-inset {
        border-top-style: inset !important
    }

    .border-bottom-inset {
        border-bottom-style: inset !important
    }

    .border-end-inset {
        border-right-style: inset !important
    }

    .border-start-inset {
        border-left-style: inset !important
    }

    .list-group-flush.border-inset {
        border: none !important
    }

    .list-group-flush.border-inset .list-group-item {
        border-style: inset !important
    }

    .ff-base {
        font-family: var(--tb-font-sans-serif)
    }

    .ff-secondary {
        font-family: "Lobster Two", cursive
    }

    .social-list-item {
        height: 2rem;
        width: 2rem;
        line-height: calc(2rem - 4px);
        display: block;
        border: 2px solid #adb5bd;
        border-radius: 50%;
        color: #adb5bd;
        text-align: center;
        -webkit-transition: all .4s;
        transition: all .4s
    }

    .social-list-item:hover {
        color: #878a99;
        background-color: #eff2f7
    }

    .w-xs {
        min-width: 80px
    }

    .w-sm {
        min-width: 95px
    }

    .w-md {
        min-width: 110px
    }

    .w-lg {
        min-width: 140px
    }

    .w-xl {
        min-width: 160px
    }

    .icon-xs {
        height: 16px;
        width: 16px
    }

    .icon-sm {
        height: 18px;
        width: 18px
    }

    .icon-md {
        height: 22px;
        width: 22px
    }

    .icon-lg {
        height: 24px;
        width: 24px
    }

    .icon-xl {
        height: 28px;
        width: 28px
    }

    .icon-xxl {
        height: 32px;
        width: 32px
    }

    .icon-dual {
        color: #adb5bd;
        fill: rgba(173, 181, 189, .16)
    }

    .icon-dual-primary {
        color: #4b93ff;
        fill: rgba(75, 147, 255, .16)
    }

    .icon-dual-secondary {
        color: #7c6bff;
        fill: rgba(124, 107, 255, .16)
    }

    .icon-dual-success {
        color: #06d6a0;
        fill: rgba(6, 214, 160, .16)
    }

    .icon-dual-info {
        color: #1ea6d3;
        fill: rgba(30, 166, 211, .16)
    }

    .icon-dual-warning {
        color: #f1be46;
        fill: rgba(241, 190, 70, .16)
    }

    .icon-dual-danger {
        color: #ef476f;
        fill: rgba(239, 71, 111, .16)
    }

    .icon-dual-light {
        color: #f3f6f9;
        fill: rgba(243, 246, 249, .16)
    }

    .icon-dual-dark {
        color: #0b1729;
        fill: rgba(11, 23, 41, .16)
    }

    .search-box {
        position: relative
    }

    .search-box .form-control {
        padding-left: 40px
    }

    .search-box .search-icon {
        font-size: 14px;
        position: absolute;
        left: 13px;
        top: 0;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: var(--tb-tertiary-color)
    }

    .bg-overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0;
        bottom: 0;
        left: 0;
        top: 0;
        opacity: .7;
        background-color: #000
    }

    .customizer-setting {
        position: fixed;
        bottom: 40px;
        right: 20px;
        z-index: 1000
    }

    code {
        -webkit-user-select: all;
        -moz-user-select: all;
        user-select: all
    }

    .text-truncate-two-lines {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        white-space: normal
    }

    .text-truncate-three-lines {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        white-space: normal
    }

    .card-logo-light {
        display: var(--tb-card-logo-light)
    }

    .card-logo-dark {
        display: var(--tb-card-logo-dark)
    }

    [data-layout-mode=dark] .btn-close {
        -webkit-filter: invert(1) grayscale(100%) brightness(200%);
        filter: invert(1) grayscale(100%) brightness(200%)
    }

    #back-to-top {
        position: fixed;
        bottom: 100px;
        right: 24px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        display: none;
        z-index: 1000
    }

    #back-to-top:hover {
        -webkit-animation: fade-up 1.5s infinite linear;
        animation: fade-up 1.5s infinite linear
    }

    @media (max-width: 767.98px) {
        #back-to-top {
            bottom: 50px
        }
    }

    @-webkit-keyframes fade-up {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        75% {
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
            opacity: 0
        }
    }

    @keyframes fade-up {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        75% {
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px);
            opacity: 0
        }
    }

    .cursor-pointer {
        cursor: pointer
    }

    .section {
        position: relative;
        padding: 80px 0
    }

    .svg-shape {
        position: absolute;
        pointer-events: none;
        right: 0;
        bottom: 0;
        left: 0
    }

    .svg-shape>svg {
        width: 100%;
        height: auto
    }

    @media (min-width: 992px) {
        .container-custom {
            max-width: 90%
        }
    }

    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--tb-secondary-bg);
        z-index: 9999
    }

    [data-preloader=disable] #preloader {
        opacity: 0;
        visibility: hidden
    }

    #status {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -20px 0 0 -20px
    }

    [type=email]::-webkit-input-placeholder,
    [type=number]::-webkit-input-placeholder,
    [type=tel]::-webkit-input-placeholder,
    [type=url]::-webkit-input-placeholder {
        text-align: left
    }

    [type=email]::-moz-placeholder,
    [type=number]::-moz-placeholder,
    [type=tel]::-moz-placeholder,
    [type=url]::-moz-placeholder {
        text-align: left
    }

    [type=email]:-ms-input-placeholder,
    [type=number]:-ms-input-placeholder,
    [type=tel]:-ms-input-placeholder,
    [type=url]:-ms-input-placeholder {
        text-align: left
    }

    [type=email]::-ms-input-placeholder,
    [type=number]::-ms-input-placeholder,
    [type=tel]::-ms-input-placeholder,
    [type=url]::-ms-input-placeholder {
        text-align: left
    }

    [type=email]::placeholder,
    [type=number]::placeholder,
    [type=tel]::placeholder,
    [type=url]::placeholder {
        text-align: left
    }

    .main-chart .chart-border-left {
        border-left: 1.4px solid #e9ebec;
        padding: 2px 20px
    }

    .main-chart .chart-border-left:last-child {
        margin-right: 0
    }

    .activity-feed {
        list-style: none
    }

    .activity-feed .feed-item {
        position: relative;
        padding-bottom: 27px;
        padding-left: 16px;
        border-left: 2px solid #f3f6f9
    }

    .activity-feed .feed-item:after {
        content: "";
        display: block;
        position: absolute;
        top: 4px;
        left: -6px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        border: 2px solid #4b93ff;
        background-color: var(--tb-secondary-bg)
    }

    .activity-feed .feed-item:last-child {
        border-color: transparent
    }

    .mini-stats-wid {
        position: relative
    }

    .mini-stats-wid .mini-stat-icon {
        overflow: hidden;
        position: relative
    }

    .mini-stats-wid .mini-stat-icon:after,
    .mini-stats-wid .mini-stat-icon:before {
        content: "";
        position: absolute;
        width: 8px;
        height: 69px;
        background-color: rgba(6, 214, 160, .1);
        left: 3px;
        -webkit-transform: rotate(32deg);
        transform: rotate(32deg);
        top: -8px;
        -webkit-transition: all .4s;
        transition: all .4s
    }

    .mini-stats-wid .mini-stat-icon::after {
        left: 27px;
        width: 8px;
        -webkit-transition: all .2s;
        transition: all .2s
    }

    .mini-stats-wid:hover .mini-stat-icon::after {
        left: 60px
    }

    .mini-stats-wid:hover .mini-stat-icon::before {
        left: 50px
    }

    .button-items {
        margin-left: -8px;
        margin-bottom: -12px
    }

    .button-items .btn {
        margin-bottom: 12px;
        margin-left: 8px
    }

    .bs-example-modal {
        position: relative;
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        z-index: 1;
        display: block
    }

    [dir=rtl] .modal-open {
        padding-left: 0 !important
    }

    .icon-demo-content {
        color: var(--tb-gray-500)
    }

    .icon-demo-content div {
        -webkit-user-select: all;
        -moz-user-select: all;
        user-select: all
    }

    .icon-demo-content i {
        font-size: 22px;
        margin-right: 10px;
        color: var(--tb-gray-600);
        -webkit-transition: all .4s;
        transition: all .4s;
        vertical-align: middle
    }

    .icon-demo-content svg {
        margin-right: 10px;
        -webkit-transition: all .4s;
        transition: all .4s;
        height: 20px
    }

    .icon-demo-content .col-lg-4 {
        margin-top: 24px
    }

    .icon-demo-content .col-lg-4:hover i,
    .icon-demo-content .col-lg-4:hover svg {
        color: #4b93ff;
        -webkit-transform: scale(1.5);
        transform: scale(1.5)
    }

    .grid-structure .grid-container {
        background-color: #f3f6f9;
        margin-top: 10px;
        font-size: .8rem;
        font-weight: 500;
        padding: 10px 20px
    }

    .img-switch .card-radio .form-check-input {
        display: none
    }

    .img-switch .card-radio .form-check-input:checked+.form-check-label::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(75, 147, 255, .5)
    }

    .img-switch .card-radio .form-check-input:checked+.form-check-label::after {
        content: "\eb80";
        font-family: remixicon;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
        font-size: 18px;
        color: #fff
    }

    [data-bs-target="#collapseBgGradient"].active {
        border-color: #4b93ff !important
    }

    [data-bs-target="#collapseBgGradient"].active::before {
        content: "\eb80";
        font-family: remixicon;
        position: absolute;
        top: 2px;
        right: 6px;
        font-size: 16px;
        color: #4b93ff
    }

    [data-layout-mode=dark] .colorscheme-cardradio .form-check-label {
        background-color: var(--tb-dark)
    }

    [data-layout-mode=dark] .colorscheme-cardradio .bg-light {
        background-color: rgba(var(--tb-light-rgb), .1) !important
    }

    [data-layout-mode=dark] .colorscheme-cardradio .bg-light-subtle {
        background-color: rgba(var(--tb-dark-rgb), .1) !important
    }

    [data-layout-mode=dark] .colorscheme-cardradio .dark .bg-dark {
        background-color: var(--tb-card-bg-custom) !important
    }

    @media print {

        #back-to-top,
        .app-menu,
        .footer,
        .modal-header,
        .navbar-header,
        .page-title-box,
        .page-topbar,
        .right-bar,
        .top-tagbar,
        .vertical-menu {
            display: none !important
        }

        .card-body,
        .main-content,
        .page-content,
        .right-bar,
        body {
            padding: 0;
            margin: 0
        }

        .card {
            border: 0;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        .modal-dialog.modal-custom-size {
            max-width: 100% !important
        }
    }

    .ribbon-box {
        position: relative
    }

    .ribbon-box .ribbon {
        padding: 5px 12px;
        -webkit-box-shadow: 2px 5px 10px rgba(11, 23, 41, .15);
        box-shadow: 2px 5px 10px rgba(11, 23, 41, .15);
        color: #fff;
        font-size: .875rem;
        font-weight: 600;
        position: absolute;
        left: -1px;
        top: 10px;
        z-index: 1
    }

    .ribbon-box .ribbon.round-shape {
        border-radius: 0 30px 30px 0
    }

    .ribbon-box .ribbon.ribbon-shape {
        display: inline-block
    }

    .ribbon-box .ribbon.ribbon-shape::after,
    .ribbon-box .ribbon.ribbon-shape::before {
        content: "";
        position: absolute;
        border-radius: 5px 0 0 5px
    }

    .ribbon-box .ribbon.ribbon-shape::before {
        width: 7px;
        height: 124%;
        top: 0;
        left: -6.5px;
        padding: 0 0 7px
    }

    .ribbon-box .ribbon.ribbon-shape::after {
        width: 5px;
        height: 5px;
        bottom: -5px;
        left: -4.5px
    }

    .ribbon-box .ribbon.vertical-shape {
        position: absolute;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 36px;
        width: 70px;
        top: -2px;
        -webkit-transform: rotate(-90deg) translateX(-27%);
        transform: rotate(-90deg) translateX(-27%);
        font-weight: 500
    }

    .ribbon-box .ribbon.vertical-shape:after {
        content: "";
        border-top: 18px solid #4b93ff;
        border-bottom: 18px solid #4b93ff;
        border-right: 11px solid transparent;
        border-left: 11px solid transparent;
        position: absolute;
        left: -11px;
        top: 0
    }

    .ribbon-box.ribbon-circle .ribbon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        padding: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        left: 20px;
        top: 20px
    }

    .ribbon-box.ribbon-fill {
        overflow: hidden
    }

    .ribbon-box.ribbon-fill .ribbon {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        width: 93px;
        height: 52px;
        left: -36px;
        top: -16px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end
    }

    .ribbon-box.ribbon-fill.ribbon-sm .ribbon {
        padding: 2px 12px;
        width: 78px;
        height: 42px;
        font-size: 12px;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .ribbon-box.right .ribbon {
        position: absolute;
        left: auto;
        right: 0
    }

    .ribbon-box.right .ribbon.round-shape {
        border-radius: 30px 0 0 30px
    }

    .ribbon-box.right .ribbon.ribbon-shape {
        text-align: right
    }

    .ribbon-box.right .ribbon.ribbon-shape::before {
        right: -6.5px;
        left: auto;
        border-radius: 0 5px 5px 0
    }

    .ribbon-box.right .ribbon.ribbon-shape::after {
        right: -4.5px;
        left: auto;
        border-radius: 0 5px 5px 0
    }

    .ribbon-box.right.ribbon-circle .ribbon {
        left: auto;
        right: 20px
    }

    .ribbon-box.right .icon-ribbon {
        right: 24px;
        left: auto
    }

    .ribbon-box.right.ribbon-fill .ribbon {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        right: -38px;
        left: auto
    }

    .ribbon-box.right.ribbon-box .ribbon-two {
        left: auto;
        right: -5px
    }

    .ribbon-box.right.ribbon-box .ribbon-two span {
        left: auto;
        right: -21px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .ribbon-box .ribbon-content {
        clear: both
    }

    .ribbon-box .ribbon-primary {
        background: #4b93ff
    }

    .ribbon-box .ribbon-primary.vertical-shape:after {
        border-top: 18px solid #4b93ff;
        border-bottom: 18px solid #4b93ff
    }

    .ribbon-box .ribbon-primary:before {
        border-color: #1874ff transparent transparent
    }

    .ribbon-box .ribbon-primary.ribbon-shape::before {
        background-color: #4b93ff
    }

    .ribbon-box .ribbon-primary.ribbon-shape::after {
        background-color: #b1d0ff
    }

    .ribbon-box.right .ribbon-primary {
        background: #4b93ff
    }

    .ribbon-box.right .ribbon-primary.ribbon-shape::before {
        border-right-color: #4b93ff;
        border-top-color: #4b93ff
    }

    .ribbon-box.right .ribbon-primary.ribbon-shape::after {
        border-right-color: #4b93ff;
        border-bottom-color: #4b93ff
    }

    .ribbon-box .ribbon-secondary {
        background: #7c6bff
    }

    .ribbon-box .ribbon-secondary.vertical-shape:after {
        border-top: 18px solid #7c6bff;
        border-bottom: 18px solid #7c6bff
    }

    .ribbon-box .ribbon-secondary:before {
        border-color: #4f38ff transparent transparent
    }

    .ribbon-box .ribbon-secondary.ribbon-shape::before {
        background-color: #7c6bff
    }

    .ribbon-box .ribbon-secondary.ribbon-shape::after {
        background-color: #d6d1ff
    }

    .ribbon-box.right .ribbon-secondary {
        background: #7c6bff
    }

    .ribbon-box.right .ribbon-secondary.ribbon-shape::before {
        border-right-color: #7c6bff;
        border-top-color: #7c6bff
    }

    .ribbon-box.right .ribbon-secondary.ribbon-shape::after {
        border-right-color: #7c6bff;
        border-bottom-color: #7c6bff
    }

    .ribbon-box .ribbon-success {
        background: #06d6a0
    }

    .ribbon-box .ribbon-success.vertical-shape:after {
        border-top: 18px solid #06d6a0;
        border-bottom: 18px solid #06d6a0
    }

    .ribbon-box .ribbon-success:before {
        border-color: #05a47b transparent transparent
    }

    .ribbon-box .ribbon-success.ribbon-shape::before {
        background-color: #06d6a0
    }

    .ribbon-box .ribbon-success.ribbon-shape::after {
        background-color: #48facc
    }

    .ribbon-box.right .ribbon-success {
        background: #06d6a0
    }

    .ribbon-box.right .ribbon-success.ribbon-shape::before {
        border-right-color: #06d6a0;
        border-top-color: #06d6a0
    }

    .ribbon-box.right .ribbon-success.ribbon-shape::after {
        border-right-color: #06d6a0;
        border-bottom-color: #06d6a0
    }

    .ribbon-box .ribbon-info {
        background: #1ea6d3
    }

    .ribbon-box .ribbon-info.vertical-shape:after {
        border-top: 18px solid #1ea6d3;
        border-bottom: 18px solid #1ea6d3
    }

    .ribbon-box .ribbon-info:before {
        border-color: #1883a6 transparent transparent
    }

    .ribbon-box .ribbon-info.ribbon-shape::before {
        background-color: #1ea6d3
    }

    .ribbon-box .ribbon-info.ribbon-shape::after {
        background-color: #6dcbea
    }

    .ribbon-box.right .ribbon-info {
        background: #1ea6d3
    }

    .ribbon-box.right .ribbon-info.ribbon-shape::before {
        border-right-color: #1ea6d3;
        border-top-color: #1ea6d3
    }

    .ribbon-box.right .ribbon-info.ribbon-shape::after {
        border-right-color: #1ea6d3;
        border-bottom-color: #1ea6d3
    }

    .ribbon-box .ribbon-warning {
        background: #f1be46
    }

    .ribbon-box .ribbon-warning.vertical-shape:after {
        border-top: 18px solid #f1be46;
        border-bottom: 18px solid #f1be46
    }

    .ribbon-box .ribbon-warning:before {
        border-color: #edad17 transparent transparent
    }

    .ribbon-box .ribbon-warning.ribbon-shape::before {
        background-color: #f1be46
    }

    .ribbon-box .ribbon-warning.ribbon-shape::after {
        background-color: #f8dfa5
    }

    .ribbon-box.right .ribbon-warning {
        background: #f1be46
    }

    .ribbon-box.right .ribbon-warning.ribbon-shape::before {
        border-right-color: #f1be46;
        border-top-color: #f1be46
    }

    .ribbon-box.right .ribbon-warning.ribbon-shape::after {
        border-right-color: #f1be46;
        border-bottom-color: #f1be46
    }

    .ribbon-box .ribbon-danger {
        background: #ef476f
    }

    .ribbon-box .ribbon-danger.vertical-shape:after {
        border-top: 18px solid #ef476f;
        border-bottom: 18px solid #ef476f
    }

    .ribbon-box .ribbon-danger:before {
        border-color: #eb184a transparent transparent
    }

    .ribbon-box .ribbon-danger.ribbon-shape::before {
        background-color: #ef476f
    }

    .ribbon-box .ribbon-danger.ribbon-shape::after {
        background-color: #f7a5b8
    }

    .ribbon-box.right .ribbon-danger {
        background: #ef476f
    }

    .ribbon-box.right .ribbon-danger.ribbon-shape::before {
        border-right-color: #ef476f;
        border-top-color: #ef476f
    }

    .ribbon-box.right .ribbon-danger.ribbon-shape::after {
        border-right-color: #ef476f;
        border-bottom-color: #ef476f
    }

    .ribbon-box .ribbon-light {
        background: #f3f6f9
    }

    .ribbon-box .ribbon-light.vertical-shape:after {
        border-top: 18px solid #f3f6f9;
        border-bottom: 18px solid #f3f6f9
    }

    .ribbon-box .ribbon-light:before {
        border-color: #d1dde8 transparent transparent
    }

    .ribbon-box .ribbon-light.ribbon-shape::before {
        background-color: #f3f6f9
    }

    .ribbon-box .ribbon-light.ribbon-shape::after {
        background-color: #fff
    }

    .ribbon-box.right .ribbon-light {
        background: #f3f6f9
    }

    .ribbon-box.right .ribbon-light.ribbon-shape::before {
        border-right-color: #f3f6f9;
        border-top-color: #f3f6f9
    }

    .ribbon-box.right .ribbon-light.ribbon-shape::after {
        border-right-color: #f3f6f9;
        border-bottom-color: #f3f6f9
    }

    .ribbon-box .ribbon-dark {
        background: #0b1729
    }

    .ribbon-box .ribbon-dark.vertical-shape:after {
        border-top: 18px solid #0b1729;
        border-bottom: 18px solid #0b1729
    }

    .ribbon-box .ribbon-dark:before {
        border-color: #000001 transparent transparent
    }

    .ribbon-box .ribbon-dark.ribbon-shape::before {
        background-color: #0b1729
    }

    .ribbon-box .ribbon-dark.ribbon-shape::after {
        background-color: #214479
    }

    .ribbon-box.right .ribbon-dark {
        background: #0b1729
    }

    .ribbon-box.right .ribbon-dark.ribbon-shape::before {
        border-right-color: #0b1729;
        border-top-color: #0b1729
    }

    .ribbon-box.right .ribbon-dark.ribbon-shape::after {
        border-right-color: #0b1729;
        border-bottom-color: #0b1729
    }

    .ribbon-box .trending-ribbon {
        -webkit-transform: translateX(-50px);
        transform: translateX(-50px);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .ribbon-box .trending-ribbon .trending-ribbon-text {
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        opacity: 0
    }

    .ribbon-box:hover .trending-ribbon {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .ribbon-box:hover .trending-ribbon .trending-ribbon-text {
        opacity: 1
    }

    .ribbon-box.right .trending-ribbon {
        -webkit-transform: translateX(50px);
        transform: translateX(50px);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .ribbon-box.right .trending-ribbon .trending-ribbon-text {
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        opacity: 0
    }

    .ribbon-box.right:hover .trending-ribbon {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .ribbon-box.right:hover .trending-ribbon .trending-ribbon-text {
        opacity: 1
    }

    .toast:not(:last-child) {
        margin-bottom: .75rem
    }

    .toast-border-primary .toast-body {
        color: #4b93ff;
        border-bottom: 3px solid #4b93ff
    }

    .toast-border-secondary .toast-body {
        color: #7c6bff;
        border-bottom: 3px solid #7c6bff
    }

    .toast-border-success .toast-body {
        color: #06d6a0;
        border-bottom: 3px solid #06d6a0
    }

    .toast-border-info .toast-body {
        color: #1ea6d3;
        border-bottom: 3px solid #1ea6d3
    }

    .toast-border-warning .toast-body {
        color: #f1be46;
        border-bottom: 3px solid #f1be46
    }

    .toast-border-danger .toast-body {
        color: #ef476f;
        border-bottom: 3px solid #ef476f
    }

    .toast-border-light .toast-body {
        color: #f3f6f9;
        border-bottom: 3px solid #f3f6f9
    }

    .toast-border-dark .toast-body {
        color: #0b1729;
        border-bottom: 3px solid #0b1729
    }

    .scrollspy-example {
        position: relative;
        height: 200px;
        margin-top: .5rem;
        overflow: auto
    }

    .scrollspy-example-2 {
        position: relative;
        height: 370px;
        overflow: auto
    }

    :root {
        --tb-header-bg: #fff;
        --tb-header-item-color: #495057;
        --tb-top-tagbar-bg: #fff9e6;
        --tb-header-item-sub-color: var(--tb-tertiary-color);
        --tb-card-logo-dark: block;
        --tb-card-logo-light: none;
        --tb-topbar-user-bg: #f3f6f9;
        --tb-topnav-bg: #fff;
        --tb-topnav-item-color: #6d7080;
        --tb-topnav-item-color-active: var(--tb-primary);
        --tb-twocolumn-menu-iconview-bg: #fff;
        --tb-twocolumn-menu-bg: #fff;
        --tb-vertical-menu-bg: #fff;
        --tb-vertical-menu-border: #e9ebec;
        --tb-vertical-menu-item-color: #6d7080;
        --tb-vertical-menu-item-hover-color: var(--tb-primary);
        --tb-vertical-menu-item-hover-bg: var(--tb-primary);
        --tb-vertical-menu-item-active-color: var(--tb-primary);
        --tb-vertical-menu-sub-item-color: #7c7f90;
        --tb-vertical-menu-sub-item-hover-color: var(--tb-primary);
        --tb-vertical-menu-sub-item-active-color: var(--tb-primary);
        --tb-vertical-menu-title-color: #919da9
    }

    :root[data-topbar=dark] {
        --tb-header-bg: #0c192c;
        --tb-header-item-color: #f3f6f9;
        --tb-header-item-sub-color: #8795ab;
        --tb-topbar-user-bg: rgba(239, 242, 247, 0.1)
    }

    :root[data-topbar=brand] {
        --tb-header-bg: #2d5899;
        --tb-header-item-color: #f3f6f9;
        --tb-header-item-sub-color: #e8f1ff;
        --tb-topbar-user-bg: #335fa1
    }

    :root[data-topbar=purple] {
        --tb-header-bg: #4a4099;
        --tb-header-item-color: #f3f6f9;
        --tb-header-item-sub-color: #ece9ff
    }

    :root[data-sidebar=dark] {
        --tb-vertical-menu-bg: #0e203a;
        --tb-vertical-menu-border: #0e203a;
        --tb-vertical-menu-item-color: #9aa5b5;
        --tb-vertical-menu-item-hover-color: #fff;
        --tb-vertical-menu-item-hover-bg: #1c2932;
        --tb-vertical-menu-item-active-color: #fff;
        --tb-vertical-menu-sub-item-color: #9aa5b5;
        --tb-vertical-menu-sub-item-hover-color: #fff;
        --tb-vertical-menu-sub-item-active-color: #fff;
        --tb-vertical-menu-title-color: #9aa5b5;
        --tb-twocolumn-menu-iconview-bg: #112645;
        --tb-twocolumn-menu-bg: #0e203a
    }

    :root[data-sidebar=brand] {
        --tb-vertical-menu-bg: #2d5899;
        --tb-vertical-menu-border: #2d5899;
        --tb-vertical-menu-item-color: #a5bad9;
        --tb-vertical-menu-item-hover-color: #fff;
        --tb-vertical-menu-item-hover-bg: #1c2932;
        --tb-vertical-menu-item-active-color: #fff;
        --tb-vertical-menu-sub-item-color: #a5bad9;
        --tb-vertical-menu-sub-item-hover-color: #fff;
        --tb-vertical-menu-sub-item-active-color: #fff;
        --tb-vertical-menu-title-color: #a5bad9
    }

    :root:is([data-sidebar=gradient], [data-sidebar=gradient-2], [data-sidebar=gradient-3], [data-sidebar=gradient-4]) {
        --tb-vertical-menu-item-color: rgba(255, 255, 255, 0.5);
        --tb-vertical-menu-item-hover-color: #fff;
        --tb-vertical-menu-item-hover-bg: #1c2932;
        --tb-vertical-menu-item-active-color: #fff;
        --tb-vertical-menu-sub-item-color: rgba(255, 255, 255, 0.5);
        --tb-vertical-menu-sub-item-hover-color: #fff;
        --tb-vertical-menu-sub-item-active-color: #fff;
        --tb-vertical-menu-title-color: rgba(255, 255, 255, 0.5)
    }

    :root[data-sidebar=gradient] {
        --tb-vertical-menu-bg: linear-gradient(to left, #2d5899, #1e3b66);
        --tb-vertical-menu-border: #2d5899;
        --tb-twocolumn-menu-iconview-bg: linear-gradient(to left, #2d5899, #1e3b66);
        --tb-twocolumn-menu-bg: linear-gradient(to left, #2d5899, #1e3b66)
    }

    :root[data-sidebar=gradient-2] {
        --tb-vertical-menu-bg: linear-gradient(to left, #4a4099, #322b66);
        --tb-vertical-menu-border: #4a4099;
        --tb-twocolumn-menu-iconview-bg: linear-gradient(to left, #4a4099, #322b66);
        --tb-twocolumn-menu-bg: linear-gradient(to left, #4a4099, #322b66)
    }

    :root[data-sidebar=gradient-3] {
        --tb-vertical-menu-bg: linear-gradient(to left, #048060, #025640);
        --tb-vertical-menu-border: #048060;
        --tb-twocolumn-menu-iconview-bg: linear-gradient(to left, #048060, #025640);
        --tb-twocolumn-menu-bg: linear-gradient(to left, #048060, #025640)
    }

    :root[data-sidebar=gradient-4] {
        --tb-vertical-menu-bg: linear-gradient(to left, #12647f, #0c4254);
        --tb-vertical-menu-border: #12647f;
        --tb-twocolumn-menu-iconview-bg: linear-gradient(to left, #12647f, #0c4254);
        --tb-twocolumn-menu-bg: linear-gradient(to left, #12647f, #0c4254)
    }

    :root[data-body-image=img-1] {
        --tb-body-bg-image: url("../images/sidebar/body-light-1.png")
    }

    :root[data-body-image=img-2] {
        --tb-body-bg-image: url("../images/sidebar/body-light-2.png")
    }

    :root[data-body-image=img-3] {
        --tb-body-bg-image: url("../images/sidebar/body-light-3.png")
    }

    [data-bs-theme=dark] {
        --tb-light: #132846;
        --tb-light-rgb: 19, 40, 70;
        --tb-dark: #132846;
        --tb-dark-rgb: 19, 40, 70;
        --tb-header-bg: #fff;
        --tb-header-item-color: #0c192c;
        --tb-top-tagbar-bg: #3c76cc;
        --tb-header-item-sub-color: var(--tb-tertiary-color);
        --tb-card-logo-dark: none;
        --tb-card-logo-light: block
    }

    [data-bs-theme=dark] .btn-dark {
        --tb-btn-bg: #152b4c;
        --tb-btn-border-color: #152b4c;
        --tb-btn-hover-bg: #173054;
        --tb-btn-hover-border-color: #173054;
        --tb-btn-active-bg: #173054;
        --tb-btn-active-border-color: #173054;
        --tb-btn-disabled-bg: #173054;
        --tb-btn-disabled-border-color: #173054
    }

    [data-bs-theme=dark] .btn-outline-dark {
        --tb-btn-color: #fff;
        --tb-btn-border-color: #152b4c;
        --tb-btn-hover-bg: #152b4c;
        --tb-btn-hover-border-color: #152b4c;
        --tb-btn-active-bg: #152b4c;
        --tb-btn-active-border-color: #152b4c
    }

    html {
        position: relative;
        min-height: 100%
    }

    b,
    strong {
        font-weight: 600
    }

    .blockquote {
        padding: 10px 20px;
        border-left: 4px solid var(--tb-border-color-translucent)
    }

    .blockquote-reverse {
        border-left: 0;
        border-right: 4px solid var(--tb-border-color-translucent);
        text-align: right
    }

    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1140px
        }
    }

    .alert-solid .alert-link {
        color: #fff
    }

    .alert-outline {
        background-color: var(--tb-secondary-bg);
        border-width: 2px
    }

    .alert-borderless {
        border-width: 0
    }

    .alert-label-icon {
        position: relative;
        padding-left: 60px;
        border: 0
    }

    .alert-label-icon .label-icon {
        position: absolute;
        width: 45px;
        height: 100%;
        left: 0;
        top: 0;
        background-color: rgba(255, 255, 255, .15);
        font-size: 16px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .alert-label-icon.label-arrow {
        overflow: hidden
    }

    .alert-label-icon.label-arrow .label-icon:after {
        content: "";
        position: absolute;
        border: 6px solid transparent;
        border-left-color: #4b93ff;
        right: -12px
    }

    .alert-border-left {
        border-left: 3px solid
    }

    .alert-top-border {
        background-color: var(--tb-secondary-bg);
        border-color: var(--tb-border-color-translucent);
        border-top: 2px solid;
        color: var(--tb-secondary-color)
    }

    .alert-additional {
        padding: 0
    }

    .alert-additional .alert-body {
        padding: .8rem 1rem
    }

    .alert-additional .alert-content {
        padding: .8rem 1rem;
        border-bottom-left-radius: .25rem;
        border-bottom-right-radius: .25rem;
        margin: 0 -var(--tb-border-width) -var(--tb-border-width) -var(--tb-border-width)
    }

    .rounded-label .label-icon {
        width: 45px;
        height: 26px;
        left: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        border-radius: 0 30px 30px 0
    }

    .alert-solid.alert-primary {
        --tb-alert-bg: #4b93ff;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #4b93ff
    }

    .alert-outline.alert-primary {
        color: #4b93ff
    }

    .alert-border-left.alert-primary {
        border-left-color: #4b93ff
    }

    .alert-top-border.alert-primary {
        border-top-color: #4b93ff
    }

    .rounded-label.alert-primary .label-icon {
        background-color: #4b93ff;
        color: #fff
    }

    .label-arrow.alert-primary .label-icon {
        color: #fff;
        background-color: #4b93ff
    }

    .label-arrow.alert-primary .label-icon:after {
        border-left-color: #4b93ff !important
    }

    .alert.alert-primary .btn-close::after {
        color: #4b93ff
    }

    .alert-additional.alert-primary .alert-content {
        background-color: #4b93ff;
        color: #fff
    }

    .alert-solid.alert-secondary {
        --tb-alert-bg: #7c6bff;
        --tb-alert-color: #000;
        --tb-alert-border-color: #7c6bff
    }

    .alert-outline.alert-secondary {
        color: #7c6bff
    }

    .alert-border-left.alert-secondary {
        border-left-color: #7c6bff
    }

    .alert-top-border.alert-secondary {
        border-top-color: #7c6bff
    }

    .rounded-label.alert-secondary .label-icon {
        background-color: #7c6bff;
        color: #000
    }

    .label-arrow.alert-secondary .label-icon {
        color: #000;
        background-color: #7c6bff
    }

    .label-arrow.alert-secondary .label-icon:after {
        border-left-color: #7c6bff !important
    }

    .alert.alert-secondary .btn-close::after {
        color: #7c6bff
    }

    .alert-additional.alert-secondary .alert-content {
        background-color: #7c6bff;
        color: #000
    }

    .alert-solid.alert-success {
        --tb-alert-bg: #06d6a0;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #06d6a0
    }

    .alert-outline.alert-success {
        color: #06d6a0
    }

    .alert-border-left.alert-success {
        border-left-color: #06d6a0
    }

    .alert-top-border.alert-success {
        border-top-color: #06d6a0
    }

    .rounded-label.alert-success .label-icon {
        background-color: #06d6a0;
        color: #fff
    }

    .label-arrow.alert-success .label-icon {
        color: #fff;
        background-color: #06d6a0
    }

    .label-arrow.alert-success .label-icon:after {
        border-left-color: #06d6a0 !important
    }

    .alert.alert-success .btn-close::after {
        color: #06d6a0
    }

    .alert-additional.alert-success .alert-content {
        background-color: #06d6a0;
        color: #fff
    }

    .alert-solid.alert-info {
        --tb-alert-bg: #1ea6d3;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #1ea6d3
    }

    .alert-outline.alert-info {
        color: #1ea6d3
    }

    .alert-border-left.alert-info {
        border-left-color: #1ea6d3
    }

    .alert-top-border.alert-info {
        border-top-color: #1ea6d3
    }

    .rounded-label.alert-info .label-icon {
        background-color: #1ea6d3;
        color: #fff
    }

    .label-arrow.alert-info .label-icon {
        color: #fff;
        background-color: #1ea6d3
    }

    .label-arrow.alert-info .label-icon:after {
        border-left-color: #1ea6d3 !important
    }

    .alert.alert-info .btn-close::after {
        color: #1ea6d3
    }

    .alert-additional.alert-info .alert-content {
        background-color: #1ea6d3;
        color: #fff
    }

    .alert-solid.alert-warning {
        --tb-alert-bg: #f1be46;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #f1be46
    }

    .alert-outline.alert-warning {
        color: #f1be46
    }

    .alert-border-left.alert-warning {
        border-left-color: #f1be46
    }

    .alert-top-border.alert-warning {
        border-top-color: #f1be46
    }

    .rounded-label.alert-warning .label-icon {
        background-color: #f1be46;
        color: #fff
    }

    .label-arrow.alert-warning .label-icon {
        color: #fff;
        background-color: #f1be46
    }

    .label-arrow.alert-warning .label-icon:after {
        border-left-color: #f1be46 !important
    }

    .alert.alert-warning .btn-close::after {
        color: #f1be46
    }

    .alert-additional.alert-warning .alert-content {
        background-color: #f1be46;
        color: #fff
    }

    .alert-solid.alert-danger {
        --tb-alert-bg: #ef476f;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #ef476f
    }

    .alert-outline.alert-danger {
        color: #ef476f
    }

    .alert-border-left.alert-danger {
        border-left-color: #ef476f
    }

    .alert-top-border.alert-danger {
        border-top-color: #ef476f
    }

    .rounded-label.alert-danger .label-icon {
        background-color: #ef476f;
        color: #fff
    }

    .label-arrow.alert-danger .label-icon {
        color: #fff;
        background-color: #ef476f
    }

    .label-arrow.alert-danger .label-icon:after {
        border-left-color: #ef476f !important
    }

    .alert.alert-danger .btn-close::after {
        color: #ef476f
    }

    .alert-additional.alert-danger .alert-content {
        background-color: #ef476f;
        color: #fff
    }

    .alert-solid.alert-light {
        --tb-alert-bg: #f3f6f9;
        --tb-alert-color: #000;
        --tb-alert-border-color: #f3f6f9
    }

    .alert-outline.alert-light {
        color: #f3f6f9
    }

    .alert-border-left.alert-light {
        border-left-color: #f3f6f9
    }

    .alert-top-border.alert-light {
        border-top-color: #f3f6f9
    }

    .rounded-label.alert-light .label-icon {
        background-color: #f3f6f9;
        color: #000
    }

    .label-arrow.alert-light .label-icon {
        color: #000;
        background-color: #f3f6f9
    }

    .label-arrow.alert-light .label-icon:after {
        border-left-color: #f3f6f9 !important
    }

    .alert.alert-light .btn-close::after {
        color: #f3f6f9
    }

    .alert-additional.alert-light .alert-content {
        background-color: #f3f6f9;
        color: #000
    }

    .alert-solid.alert-dark {
        --tb-alert-bg: #0B1729;
        --tb-alert-color: #fff;
        --tb-alert-border-color: #0B1729
    }

    .alert-outline.alert-dark {
        color: #0b1729
    }

    .alert-border-left.alert-dark {
        border-left-color: #0b1729
    }

    .alert-top-border.alert-dark {
        border-top-color: #0b1729
    }

    .rounded-label.alert-dark .label-icon {
        background-color: #0b1729;
        color: #fff
    }

    .label-arrow.alert-dark .label-icon {
        color: #fff;
        background-color: #0b1729
    }

    .label-arrow.alert-dark .label-icon:after {
        border-left-color: #0b1729 !important
    }

    .alert.alert-dark .btn-close::after {
        color: #0b1729
    }

    .alert-additional.alert-dark .alert-content {
        background-color: #0b1729;
        color: #fff
    }

    .alert-dismissible .btn-close {
        background: 0 0 !important
    }

    .alert-dismissible .btn-close::after {
        background: 0 0 !important;
        content: "\f0156" !important;
        font-size: 18px;
        line-height: 15px;
        font-family: "Material Design Icons" !important
    }

    .alert-outline.alert-dark {
        color: var(--tb-secondary-color)
    }

    .alert-border-left.alert-dark {
        border-color: var(--tb-dark)
    }

    .alert-border-left.alert-light {
        border-color: var(--tb-light)
    }

    .alert-top-border.alert-light {
        border-top-color: var(--tb-light)
    }

    .alert-top-border.alert-dark {
        border-top-color: var(--tb-dark)
    }

    .alert-modern {
        overflow: hidden;
        position: relative
    }

    .alert-modern .icons {
        position: absolute;
        top: -20px;
        opacity: .08;
        font-size: 60px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .badge-outline-primary {
        color: #4b93ff;
        border: 1px solid #4b93ff;
        background-color: transparent
    }

    .badge-outline-secondary {
        color: #7c6bff;
        border: 1px solid #7c6bff;
        background-color: transparent
    }

    .badge-outline-success {
        color: #06d6a0;
        border: 1px solid #06d6a0;
        background-color: transparent
    }

    .badge-outline-info {
        color: #1ea6d3;
        border: 1px solid #1ea6d3;
        background-color: transparent
    }

    .badge-outline-warning {
        color: #f1be46;
        border: 1px solid #f1be46;
        background-color: transparent
    }

    .badge-outline-danger {
        color: #ef476f;
        border: 1px solid #ef476f;
        background-color: transparent
    }

    .badge-outline-light {
        color: #f3f6f9;
        border: 1px solid #f3f6f9;
        background-color: transparent
    }

    .badge-outline-dark {
        color: #0b1729;
        border: 1px solid #0b1729;
        background-color: transparent
    }

    .badge-outline {
        background-color: var(--tb-card-bg-custom);
        border: 1px solid
    }

    .badge-soft-primary {
        color: #4b93ff;
        background-color: rgba(75, 147, 255, .1)
    }

    .badge-outline.badge-primary {
        color: #4b93ff;
        border: 1px solid #4b93ff;
        background-color: transparent
    }

    .badge-label.bg-primary:before {
        border-right-color: #4b93ff
    }

    .badge-soft-secondary {
        color: #7c6bff;
        background-color: rgba(124, 107, 255, .1)
    }

    .badge-outline.badge-secondary {
        color: #7c6bff;
        border: 1px solid #7c6bff;
        background-color: transparent
    }

    .badge-label.bg-secondary:before {
        border-right-color: #7c6bff
    }

    .badge-soft-success {
        color: #06d6a0;
        background-color: rgba(6, 214, 160, .1)
    }

    .badge-outline.badge-success {
        color: #06d6a0;
        border: 1px solid #06d6a0;
        background-color: transparent
    }

    .badge-label.bg-success:before {
        border-right-color: #06d6a0
    }

    .badge-soft-info {
        color: #1ea6d3;
        background-color: rgba(30, 166, 211, .1)
    }

    .badge-outline.badge-info {
        color: #1ea6d3;
        border: 1px solid #1ea6d3;
        background-color: transparent
    }

    .badge-label.bg-info:before {
        border-right-color: #1ea6d3
    }

    .badge-soft-warning {
        color: #f1be46;
        background-color: rgba(241, 190, 70, .1)
    }

    .badge-outline.badge-warning {
        color: #f1be46;
        border: 1px solid #f1be46;
        background-color: transparent
    }

    .badge-label.bg-warning:before {
        border-right-color: #f1be46
    }

    .badge-soft-danger {
        color: #ef476f;
        background-color: rgba(239, 71, 111, .1)
    }

    .badge-outline.badge-danger {
        color: #ef476f;
        border: 1px solid #ef476f;
        background-color: transparent
    }

    .badge-label.bg-danger:before {
        border-right-color: #ef476f
    }

    .badge-soft-light {
        color: #f3f6f9;
        background-color: rgba(243, 246, 249, .1)
    }

    .badge-outline.badge-light {
        color: #f3f6f9;
        border: 1px solid #f3f6f9;
        background-color: transparent
    }

    .badge-label.bg-light:before {
        border-right-color: #f3f6f9
    }

    .badge-soft-dark {
        color: #0b1729;
        background-color: rgba(11, 23, 41, .1)
    }

    .badge-outline.badge-dark {
        color: #0b1729;
        border: 1px solid #0b1729;
        background-color: transparent
    }

    .badge-label.bg-dark:before {
        border-right-color: #0b1729
    }

    .badge-border {
        border-left: 2px solid
    }

    .badge-label {
        margin-left: 8px;
        position: relative
    }

    .badge-label:before {
        content: "";
        position: absolute;
        border: 8px solid transparent;
        border-right-color: #4b93ff;
        left: -14px;
        top: 0
    }

    .badge-gradient-primary {
        background: linear-gradient(135deg, #4b93ff 0, #06d6a0 100%)
    }

    .badge-gradient-secondary {
        background: linear-gradient(135deg, #7c6bff 0, #1ea6d3 100%)
    }

    .badge-gradient-success {
        background: linear-gradient(135deg, #06d6a0 0, #f1be46 100%)
    }

    .badge-gradient-danger {
        background: linear-gradient(135deg, #ef476f 0, #7c6bff 100%)
    }

    .badge-gradient-warning {
        background: linear-gradient(135deg, #f1be46 0, #da9e10 100%)
    }

    .badge-gradient-info {
        background: linear-gradient(135deg, #1ea6d3 0, #06d6a0 100%)
    }

    .badge-gradient-dark {
        background: linear-gradient(135deg, #0b1729 0, #4b93ff 100%)
    }

    a,
    button {
        outline: 0 !important;
        position: relative
    }

    .btn {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn.btn-hover {
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .btn.btn-hover:hover {
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px)
    }

    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
        border-color: transparent
    }

    .btn-rounded {
        border-radius: 30px
    }

    .btn-icon {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: calc(1.2rem + 1.5em + 2px);
        width: calc(1.2rem + 1.5em + 2px);
        padding: 0
    }

    .btn-icon i,
    .btn-icon img,
    .btn-icon svg {
        vertical-align: middle
    }

    .btn-icon.btn-sm {
        height: calc(.5rem + 1.5em + 2px);
        width: calc(.5rem + 1.5em + 2px)
    }

    .btn-icon.btn-lg {
        height: calc(1.4rem + 1.5em + 2px);
        width: calc(1.4rem + 1.5em + 2px)
    }

    .btn-soft-primary {
        --tb-btn-color: #4b93ff;
        --tb-btn-bg: rgba(75, 147, 255, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #4484e6;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 75, 147, 255;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #3c76cc;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-primary {
        --tb-btn-color: #fff;
        --tb-btn-bg: #1874ff;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #096bff;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 75, 147, 255;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #0065fe;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-secondary {
        --tb-btn-color: #7c6bff;
        --tb-btn-bg: rgba(124, 107, 255, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #7060e6;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 124, 107, 255;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #6356cc;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-secondary {
        --tb-btn-color: #fff;
        --tb-btn-bg: #4f38ff;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #4129ff;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 124, 107, 255;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #381fff;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-success {
        --tb-btn-color: #06d6a0;
        --tb-btn-bg: rgba(6, 214, 160, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #05c190;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 6, 214, 160;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #05ab80;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-success {
        --tb-btn-color: #fff;
        --tb-btn-bg: #05a47b;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #049670;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 6, 214, 160;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #048c68;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-info {
        --tb-btn-color: #1ea6d3;
        --tb-btn-bg: rgba(30, 166, 211, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #1b95be;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 30, 166, 211;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #1885a9;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-info {
        --tb-btn-color: #fff;
        --tb-btn-bg: #1883a6;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #167899;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 30, 166, 211;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #147190;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-warning {
        --tb-btn-color: #f1be46;
        --tb-btn-bg: rgba(241, 190, 70, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #d9ab3f;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 241, 190, 70;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #c19838;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-warning {
        --tb-btn-color: #fff;
        --tb-btn-bg: #edad17;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #e3a511;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 241, 190, 70;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #da9e10;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-danger {
        --tb-btn-color: #ef476f;
        --tb-btn-bg: rgba(239, 71, 111, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #d74064;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 239, 71, 111;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #bf3959;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-danger {
        --tb-btn-color: #fff;
        --tb-btn-bg: #eb184a;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #e01344;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 239, 71, 111;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #d71341;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-light {
        --tb-btn-color: #f3f6f9;
        --tb-btn-bg: rgba(243, 246, 249, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #dbdde0;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 243, 246, 249;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #c2c5c7;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-light {
        --tb-btn-color: #fff;
        --tb-btn-bg: #d1dde8;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #c7d5e3;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 243, 246, 249;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #c0d0e0;
        --tb-btn-active-border-color: transparent
    }

    .btn-soft-dark {
        --tb-btn-color: #0B1729;
        --tb-btn-bg: rgba(11, 23, 41, 0.1);
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: #0a1525;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 11, 23, 41;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: #091221;
        --tb-btn-active-border-color: transparent
    }

    .btn-darken-dark {
        --tb-btn-color: #fff;
        --tb-btn-bg: #000001;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #fff;
        --tb-btn-hover-bg: black;
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 11, 23, 41;
        --tb-btn-active-color: var(--tb-btn-hover-color);
        --tb-btn-active-bg: black;
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-primary {
        --tb-btn-color: #4b93ff;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #4b93ff;
        --tb-btn-hover-bg: rgba(75, 147, 255, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 75, 147, 255;
        --tb-btn-active-color: #4b93ff;
        --tb-btn-active-bg: rgba(75, 147, 255, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-secondary {
        --tb-btn-color: #7c6bff;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #7c6bff;
        --tb-btn-hover-bg: rgba(124, 107, 255, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 124, 107, 255;
        --tb-btn-active-color: #7c6bff;
        --tb-btn-active-bg: rgba(124, 107, 255, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-success {
        --tb-btn-color: #06d6a0;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #06d6a0;
        --tb-btn-hover-bg: rgba(6, 214, 160, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 6, 214, 160;
        --tb-btn-active-color: #06d6a0;
        --tb-btn-active-bg: rgba(6, 214, 160, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-info {
        --tb-btn-color: #1ea6d3;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #1ea6d3;
        --tb-btn-hover-bg: rgba(30, 166, 211, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 30, 166, 211;
        --tb-btn-active-color: #1ea6d3;
        --tb-btn-active-bg: rgba(30, 166, 211, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-warning {
        --tb-btn-color: #f1be46;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #f1be46;
        --tb-btn-hover-bg: rgba(241, 190, 70, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 241, 190, 70;
        --tb-btn-active-color: #f1be46;
        --tb-btn-active-bg: rgba(241, 190, 70, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-danger {
        --tb-btn-color: #ef476f;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #ef476f;
        --tb-btn-hover-bg: rgba(239, 71, 111, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 239, 71, 111;
        --tb-btn-active-color: #ef476f;
        --tb-btn-active-bg: rgba(239, 71, 111, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-light {
        --tb-btn-color: #f3f6f9;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #f3f6f9;
        --tb-btn-hover-bg: rgba(243, 246, 249, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 243, 246, 249;
        --tb-btn-active-color: #f3f6f9;
        --tb-btn-active-bg: rgba(243, 246, 249, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-ghost-dark {
        --tb-btn-color: #0B1729;
        --tb-btn-bg: transparent;
        --tb-btn-border-color: transparent;
        --tb-btn-hover-color: #0B1729;
        --tb-btn-hover-bg: rgba(11, 23, 41, 0.1);
        --tb-btn-hover-border-color: transparent;
        --tb-btn-focus-shadow-rgb: 11, 23, 41;
        --tb-btn-active-color: #0B1729;
        --tb-btn-active-bg: rgba(11, 23, 41, 0.1);
        --tb-btn-active-border-color: transparent
    }

    .btn-label {
        position: relative;
        padding-left: 48px
    }

    .btn-label .label-icon {
        position: absolute;
        width: 40.69px;
        left: -1px;
        top: -1px;
        bottom: -1px;
        background-color: rgba(255, 255, 255, .1);
        font-size: 16px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .btn-label.btn-light .label-icon {
        background-color: rgba(11, 23, 41, .05)
    }

    .btn-label.right {
        padding-left: .9rem;
        padding-right: 44px
    }

    .btn-label.right .label-icon {
        right: -1px;
        left: auto
    }

    .btn-animation {
        overflow: hidden;
        -webkit-transition: border-color .3s, background-color .3s;
        transition: border-color .3s, background-color .3s;
        -webkit-transition-timing-function: cubic-bezier(.2, 1, .3, 1);
        transition-timing-function: cubic-bezier(.2, 1, .3, 1)
    }

    .btn-animation::after {
        content: attr(data-text);
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        -webkit-transform: translate3d(0, 25%, 0);
        transform: translate3d(0, 25%, 0);
        padding: .6rem .9rem;
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: transform .3s, opacity .3s;
        transition: transform .3s, opacity .3s, -webkit-transform .3s;
        -webkit-transition-timing-function: cubic-bezier(.2, 1, .3, 1);
        transition-timing-function: cubic-bezier(.2, 1, .3, 1)
    }

    .btn-animation>span {
        display: block;
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: transform .3s, opacity .3s;
        transition: transform .3s, opacity .3s, -webkit-transform .3s;
        -webkit-transition-timing-function: cubic-bezier(.2, 1, .3, 1);
        transition-timing-function: cubic-bezier(.2, 1, .3, 1)
    }

    .btn-animation:hover::after {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .btn-animation:hover>span {
        opacity: 0;
        -webkit-transform: translate3d(0, -25%, 0);
        transform: translate3d(0, -25%, 0)
    }

    .btn-primary.btn-animation {
        background-color: #4b93ff;
        border-color: #4b93ff
    }

    .btn-primary.btn-animation:active,
    .btn-primary.btn-animation:focus,
    .btn-primary.btn-animation:focus-visible,
    .btn-primary.btn-animation:hover {
        color: #4b93ff;
        background-color: rgba(75, 147, 255, .1)
    }

    .btn-secondary.btn-animation {
        background-color: #7c6bff;
        border-color: #7c6bff
    }

    .btn-secondary.btn-animation:active,
    .btn-secondary.btn-animation:focus,
    .btn-secondary.btn-animation:focus-visible,
    .btn-secondary.btn-animation:hover {
        color: #7c6bff;
        background-color: rgba(124, 107, 255, .1)
    }

    .btn-success.btn-animation {
        background-color: #06d6a0;
        border-color: #06d6a0
    }

    .btn-success.btn-animation:active,
    .btn-success.btn-animation:focus,
    .btn-success.btn-animation:focus-visible,
    .btn-success.btn-animation:hover {
        color: #06d6a0;
        background-color: rgba(6, 214, 160, .1)
    }

    .btn-info.btn-animation {
        background-color: #1ea6d3;
        border-color: #1ea6d3
    }

    .btn-info.btn-animation:active,
    .btn-info.btn-animation:focus,
    .btn-info.btn-animation:focus-visible,
    .btn-info.btn-animation:hover {
        color: #1ea6d3;
        background-color: rgba(30, 166, 211, .1)
    }

    .btn-warning.btn-animation {
        background-color: #f1be46;
        border-color: #f1be46
    }

    .btn-warning.btn-animation:active,
    .btn-warning.btn-animation:focus,
    .btn-warning.btn-animation:focus-visible,
    .btn-warning.btn-animation:hover {
        color: #f1be46;
        background-color: rgba(241, 190, 70, .1)
    }

    .btn-danger.btn-animation {
        background-color: #ef476f;
        border-color: #ef476f
    }

    .btn-danger.btn-animation:active,
    .btn-danger.btn-animation:focus,
    .btn-danger.btn-animation:focus-visible,
    .btn-danger.btn-animation:hover {
        color: #ef476f;
        background-color: rgba(239, 71, 111, .1)
    }

    .btn-light.btn-animation {
        background-color: #f3f6f9;
        border-color: #f3f6f9
    }

    .btn-light.btn-animation:active,
    .btn-light.btn-animation:focus,
    .btn-light.btn-animation:focus-visible,
    .btn-light.btn-animation:hover {
        color: #f3f6f9;
        background-color: rgba(243, 246, 249, .1)
    }

    .btn-dark.btn-animation {
        background-color: #0b1729;
        border-color: #0b1729
    }

    .btn-dark.btn-animation:active,
    .btn-dark.btn-animation:focus,
    .btn-dark.btn-animation:focus-visible,
    .btn-dark.btn-animation:hover {
        color: #0b1729;
        background-color: rgba(11, 23, 41, .1)
    }

    .btn-group-vertical label {
        margin-bottom: 0
    }

    .btn-group.radio .btn {
        border: none
    }

    .btn-group.radio .btn-check:active+.btn-light,
    .btn-group.radio .btn-check:checked+.btn-light,
    .btn-group.radio .btn-light.active,
    .btn-group.radio .btn-light.dropdown-toggle.show,
    .btn-group.radio .btn-light:active {
        background-color: rgba(30, 166, 211, .2);
        color: #1ea6d3
    }

    [data-layout-mode=dark] .btn-check:focus+.btn-light,
    [data-layout-mode=dark] .btn-check:focus+.btn-outline-light,
    [data-layout-mode=dark] .btn-check:focus+.btn-soft-light,
    [data-layout-mode=dark] .btn-soft-light:focus {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-light-rgb), .75);
        border-color: rgba(var(--tb-light-rgb), .75)
    }

    [data-layout-mode=dark] .btn-check:active+.btn-light,
    [data-layout-mode=dark] .btn-check:active+.btn-outline-light,
    [data-layout-mode=dark] .btn-check:active+.btn-soft-light,
    [data-layout-mode=dark] .btn-check:checked+.btn-light,
    [data-layout-mode=dark] .btn-check:checked+.btn-outline-light,
    [data-layout-mode=dark] .btn-check:checked+.btn-soft-light,
    [data-layout-mode=dark] .btn-light.active,
    [data-layout-mode=dark] .btn-light:active,
    [data-layout-mode=dark] .btn-outline-light.active,
    [data-layout-mode=dark] .btn-outline-light:active,
    [data-layout-mode=dark] .btn-soft-light.active,
    [data-layout-mode=dark] .btn-soft-light:active,
    [data-layout-mode=dark] .show>.btn-light.dropdown-toggle,
    [data-layout-mode=dark] .show>.btn-outline-light.dropdown-toggle,
    [data-layout-mode=dark] .show>.btn-soft-light.dropdown-toggle {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-light-rgb), .75);
        border-color: rgba(var(--tb-light-rgb), .75)
    }

    [data-layout-mode=dark] .btn-check:focus+.btn-dark,
    [data-layout-mode=dark] .btn-check:focus+.btn-outline-dark,
    [data-layout-mode=dark] .btn-check:focus+.btn-soft-dark,
    [data-layout-mode=dark] .btn-soft-dark:focus {
        color: var(--tb-light);
        background-color: rgba(var(--tb-dark-rgb), .75);
        border-color: rgba(var(--tb-dark-rgb), .75)
    }

    [data-layout-mode=dark] .btn-check:active+.btn-dark,
    [data-layout-mode=dark] .btn-check:active+.btn-outline-dark,
    [data-layout-mode=dark] .btn-check:active+.btn-soft-dark,
    [data-layout-mode=dark] .btn-check:checked+.btn-dark,
    [data-layout-mode=dark] .btn-check:checked+.btn-outline-dark,
    [data-layout-mode=dark] .btn-check:checked+.btn-soft-dark,
    [data-layout-mode=dark] .btn-dark.active,
    [data-layout-mode=dark] .btn-dark:active,
    [data-layout-mode=dark] .btn-outline-dark.active,
    [data-layout-mode=dark] .btn-outline-dark:active,
    [data-layout-mode=dark] .btn-soft-dark.active,
    [data-layout-mode=dark] .btn-soft-dark:active,
    [data-layout-mode=dark] .show>.btn-dark.dropdown-toggle,
    [data-layout-mode=dark] .show>.btn-outline-dark.dropdown-toggle,
    [data-layout-mode=dark] .show>.btn-soft-dark.dropdown-toggle {
        color: var(--tb-light);
        background-color: rgba(var(--tb-dark-rgb), .75);
        border-color: rgba(var(--tb-dark-rgb), .75)
    }

    [data-layout-mode=dark] .btn-soft-light {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-light-rgb), .1)
    }

    [data-layout-mode=dark] .btn-soft-light:hover {
        color: var(--tb-dark);
        background-color: var(--tb-light)
    }

    [data-layout-mode=dark] .btn-soft-dark {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-dark-rgb), .1)
    }

    [data-layout-mode=dark] .btn-soft-dark:hover {
        color: var(--tb-light);
        background-color: var(--tb-dark)
    }

    [data-layout-mode=dark] .btn-ghost-light {
        color: var(--tb-dark)
    }

    [data-layout-mode=dark] .btn-ghost-light:active,
    [data-layout-mode=dark] .btn-ghost-light:focus,
    [data-layout-mode=dark] .btn-ghost-light:hover {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-light-rgb), .5)
    }

    [data-layout-mode=dark] .btn-ghost-dark {
        color: var(--tb-dark)
    }

    [data-layout-mode=dark] .btn-ghost-dark:active,
    [data-layout-mode=dark] .btn-ghost-dark:focus,
    [data-layout-mode=dark] .btn-ghost-dark:hover {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-dark-rgb), .1)
    }

    [data-layout-mode=dark] .btn-dark.btn-animation {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-dark-rgb), .1);
        border-color: rgba(var(--tb-dark-rgb), .1)
    }

    [data-layout-mode=dark] .btn-dark.btn-animation:hover {
        color: var(--tb-dark);
        background-color: rgba(var(--tb-dark-rgb), .01)
    }

    .btn-load .spinner-border,
    .btn-load .spinner-grow {
        height: 19px;
        width: 19px
    }

    .link-effect {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        padding-bottom: 3px;
        overflow: hidden
    }

    .link-effect::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 1px;
        background: #4b93ff;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .link-effect:hover::before {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .btn-outline-primary.btn-border,
    .btn-primary.btn-border,
    .btn-soft-primary.btn-border {
        border-bottom: 2px solid #227bff
    }

    .link-effect.link-primary::before {
        background-color: #4b93ff
    }

    .btn-outline-secondary.btn-border,
    .btn-secondary.btn-border,
    .btn-soft-secondary.btn-border {
        border-bottom: 2px solid #5842ff
    }

    .link-effect.link-secondary::before {
        background-color: #7c6bff
    }

    .btn-outline-success.btn-border,
    .btn-soft-success.btn-border,
    .btn-success.btn-border {
        border-bottom: 2px solid #05ae82
    }

    .link-effect.link-success::before {
        background-color: #06d6a0
    }

    .btn-info.btn-border,
    .btn-outline-info.btn-border,
    .btn-soft-info.btn-border {
        border-bottom: 2px solid #198aaf
    }

    .link-effect.link-info::before {
        background-color: #1ea6d3
    }

    .btn-outline-warning.btn-border,
    .btn-soft-warning.btn-border,
    .btn-warning.btn-border {
        border-bottom: 2px solid #eeb120
    }

    .link-effect.link-warning::before {
        background-color: #f1be46
    }

    .btn-danger.btn-border,
    .btn-outline-danger.btn-border,
    .btn-soft-danger.btn-border {
        border-bottom: 2px solid #ec2152
    }

    .link-effect.link-danger::before {
        background-color: #ef476f
    }

    .btn-light.btn-border,
    .btn-outline-light.btn-border,
    .btn-soft-light.btn-border {
        border-bottom: 2px solid #d8e2eb
    }

    .link-effect.link-light::before {
        background-color: #f3f6f9
    }

    .btn-dark.btn-border,
    .btn-outline-dark.btn-border,
    .btn-soft-dark.btn-border {
        border-bottom: 2px solid #020509
    }

    .link-effect.link-dark::before {
        background-color: #0b1729
    }

    .custom-toggle.active .icon-on {
        display: none
    }

    .custom-toggle.active .icon-off {
        display: block
    }

    .breadcrumb-item>a {
        color: var(--tb-breadcrumb-divider-color)
    }

    .breadcrumb-item+.breadcrumb-item::before {
        font-family: "Material Design Icons";
        font-size: 15px;
        line-height: 20px
    }

    .breadcrumb-light {
        --tb-breadcrumb-divider-color: rgba(255, 255, 255, 0.75);
        --tb-breadcrumb-item-active-color: #fff
    }

    .card {
        margin-bottom: 1.5rem
    }

    .card-header {
        border-bottom: 1px solid var(--tb-border-color-translucent)
    }

    .card-header-dropdown .dropdown-btn {
        padding: 1.2rem 0
    }

    .card-footer {
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    .card-drop {
        color: var(--tb-secondary-color)
    }

    .card-title {
        font-size: 16px;
        margin: 0 0 7px 0
    }

    .card-title-desc {
        margin-bottom: 24px
    }

    .card-height-100 {
        height: calc(100% - 1.5rem)
    }

    .card-animate {
        -webkit-transition: all .4s;
        transition: all .4s
    }

    .card-animate:hover {
        -webkit-transform: translateY(calc(-1.5rem / 5));
        transform: translateY(calc(-1.5rem / 5));
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12)
    }

    .card-primary {
        color: #fff;
        background-color: #4b93ff
    }

    .card-primary .card-footer,
    .card-primary .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-primary .card-title {
        color: #fff
    }

    .card-secondary {
        color: #fff;
        background-color: #7c6bff
    }

    .card-secondary .card-footer,
    .card-secondary .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-secondary .card-title {
        color: #fff
    }

    .card-success {
        color: #fff;
        background-color: #06d6a0
    }

    .card-success .card-footer,
    .card-success .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-success .card-title {
        color: #fff
    }

    .card-info {
        color: #fff;
        background-color: #1ea6d3
    }

    .card-info .card-footer,
    .card-info .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-info .card-title {
        color: #fff
    }

    .card-warning {
        color: #fff;
        background-color: #f1be46
    }

    .card-warning .card-footer,
    .card-warning .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-warning .card-title {
        color: #fff
    }

    .card-danger {
        color: #fff;
        background-color: #ef476f
    }

    .card-danger .card-footer,
    .card-danger .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-danger .card-title {
        color: #fff
    }

    .card-light {
        color: #fff;
        background-color: #f3f6f9
    }

    .card-light .card-footer,
    .card-light .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-light .card-title {
        color: #fff
    }

    .card-dark {
        color: #fff;
        background-color: #0b1729
    }

    .card-dark .card-footer,
    .card-dark .card-header {
        background-color: rgba(255, 255, 255, .1);
        color: #fff;
        border-color: transparent
    }

    .card-dark .card-title {
        color: #fff
    }

    .card-border-primary {
        border-color: #4b93ff !important
    }

    .card-border-primary .card-footer,
    .card-border-primary .card-header {
        border-color: #4b93ff
    }

    .card-border-secondary {
        border-color: #7c6bff !important
    }

    .card-border-secondary .card-footer,
    .card-border-secondary .card-header {
        border-color: #7c6bff
    }

    .card-border-success {
        border-color: #06d6a0 !important
    }

    .card-border-success .card-footer,
    .card-border-success .card-header {
        border-color: #06d6a0
    }

    .card-border-info {
        border-color: #1ea6d3 !important
    }

    .card-border-info .card-footer,
    .card-border-info .card-header {
        border-color: #1ea6d3
    }

    .card-border-warning {
        border-color: #f1be46 !important
    }

    .card-border-warning .card-footer,
    .card-border-warning .card-header {
        border-color: #f1be46
    }

    .card-border-danger {
        border-color: #ef476f !important
    }

    .card-border-danger .card-footer,
    .card-border-danger .card-header {
        border-color: #ef476f
    }

    .card-border-light {
        border-color: #f3f6f9 !important
    }

    .card-border-light .card-footer,
    .card-border-light .card-header {
        border-color: #f3f6f9
    }

    .card-border-dark {
        border-color: #0b1729 !important
    }

    .card-border-dark .card-footer,
    .card-border-dark .card-header {
        border-color: #0b1729
    }

    .card-light {
        background-color: var(--tb-light)
    }

    .card-light .card-footer,
    .card-light .card-header {
        color: var(--tb-body-color) !important;
        background-color: rgba(var(--tb-dark-rgb), .1)
    }

    .card-light .card-text,
    .card-light .card-title {
        color: var(--tb-body-color) !important
    }

    .stretched-link {
        position: static
    }

    .card-preloader {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(var(--tb-light-rgb), .6);
        z-index: 9999
    }

    .card-status {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%) !important;
        transform: translate(-50%, -50%) !important
    }

    .custom-loader {
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite
    }

    @-webkit-keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes spin {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .card-overlay {
        position: relative;
        overflow: hidden
    }

    .card-overlay:before {
        content: "";
        background-color: rgba(75, 147, 255, .7);
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0
    }

    .card-overlay .card-footer,
    .card-overlay .card-header {
        border-color: rgba(255, 255, 255, .15) !important
    }

    .card-toolbar-menu {
        line-height: .8
    }

    .card-toolbar-menu a {
        font-size: 17px
    }

    .card-toolbar-menu .minimize-card .plus {
        display: none
    }

    .card-toolbar-menu .minimize-card .minus {
        display: block
    }

    .card-toolbar-menu .minimize-card.collapsed .plus {
        display: block
    }

    .card-toolbar-menu .minimize-card.collapsed .minus {
        display: none
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        font-size: 15px;
        line-height: 15px;
        content: "\f0140";
        font-family: "Material Design Icons"
    }

    .dropdown-menu {
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        -webkit-animation-name: DropDownSlide;
        animation-name: DropDownSlide;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        position: absolute;
        z-index: 1000
    }

    .dropdown-menu.dropdown-megamenu {
        padding: 20px;
        left: 0 !important;
        right: 0 !important
    }

    .dropdown-menu[data-popper-placement=top-start] {
        -webkit-animation-name: DropDownSlideDown;
        animation-name: DropDownSlideDown
    }

    @-webkit-keyframes DropDownSlide {
        100% {
            margin-top: -1px
        }

        0% {
            margin-top: 8px
        }
    }

    @keyframes DropDownSlide {
        100% {
            margin-top: -1px
        }

        0% {
            margin-top: 8px
        }
    }

    @-webkit-keyframes DropDownSlideDown {
        100% {
            margin-bottom: 0
        }

        0% {
            margin-bottom: 8px
        }
    }

    @keyframes DropDownSlideDown {
        100% {
            margin-bottom: 0
        }

        0% {
            margin-bottom: 8px
        }
    }

    @media (min-width: 600px) {
        .dropdown-menu-xl {
            width: 420px
        }

        .dropdown-menu-lg {
            width: 320px
        }

        .dropdown-menu-md {
            width: 240px
        }
    }

    .dropdown-toggle-split {
        border-left: none
    }

    .dropdown-toggle-split::after {
        margin-left: 0
    }

    .dropdown-toggle-split:before {
        content: "";
        position: absolute;
        background-color: rgba(255, 255, 255, .12);
        top: -var(--tb-border-width);
        bottom: -var(--tb-border-width);
        right: -var(--tb-border-width);
        left: 0;
        border-radius: 0 .25rem .25rem 0
    }

    .dropdown-mega {
        position: static !important
    }

    .dropdown-mega-menu-xl {
        width: 38rem
    }

    .dropdown-mega-menu-lg {
        width: 26rem
    }

    [dir=ltr] .dropdown-menu-start {
        --bs-position: end
    }

    [dir=ltr] .dropdown-menu-end {
        --bs-position: start
    }

    .dropdown-head .nav-tabs-custom {
        border: 0
    }

    .dropdown-head .nav-tabs-custom .nav-link {
        color: var(--tb-tertiary-color)
    }

    .dropdown-head .nav-tabs-custom .nav-link.active {
        background-color: var(--tb-dropdown-bg)
    }

    .dropdown-head .nav-tabs-custom .nav-link:hover {
        color: #0b1729
    }

    .dropdownmenu-primary .dropdown-item.active,
    .dropdownmenu-primary .dropdown-item:focus,
    .dropdownmenu-primary .dropdown-item:hover {
        background-color: rgba(75, 147, 255, .07);
        color: #4b93ff
    }

    .dropdownmenu-secondary .dropdown-item.active,
    .dropdownmenu-secondary .dropdown-item:focus,
    .dropdownmenu-secondary .dropdown-item:hover {
        background-color: rgba(124, 107, 255, .07);
        color: #7c6bff
    }

    .dropdownmenu-success .dropdown-item.active,
    .dropdownmenu-success .dropdown-item:focus,
    .dropdownmenu-success .dropdown-item:hover {
        background-color: rgba(6, 214, 160, .07);
        color: #06d6a0
    }

    .dropdownmenu-info .dropdown-item.active,
    .dropdownmenu-info .dropdown-item:focus,
    .dropdownmenu-info .dropdown-item:hover {
        background-color: rgba(30, 166, 211, .07);
        color: #1ea6d3
    }

    .dropdownmenu-warning .dropdown-item.active,
    .dropdownmenu-warning .dropdown-item:focus,
    .dropdownmenu-warning .dropdown-item:hover {
        background-color: rgba(241, 190, 70, .07);
        color: #f1be46
    }

    .dropdownmenu-danger .dropdown-item.active,
    .dropdownmenu-danger .dropdown-item:focus,
    .dropdownmenu-danger .dropdown-item:hover {
        background-color: rgba(239, 71, 111, .07);
        color: #ef476f
    }

    .dropdownmenu-light .dropdown-item.active,
    .dropdownmenu-light .dropdown-item:focus,
    .dropdownmenu-light .dropdown-item:hover {
        background-color: rgba(243, 246, 249, .07);
        color: #f3f6f9
    }

    .dropdownmenu-dark .dropdown-item.active,
    .dropdownmenu-dark .dropdown-item:focus,
    .dropdownmenu-dark .dropdown-item:hover {
        background-color: rgba(11, 23, 41, .07);
        color: #0b1729
    }

    .nav-pills>li>a,
    .nav-tabs>li>a {
        color: var(--tb-secondary-color);
        font-weight: 500
    }

    .nav-pills>a {
        color: var(--tb-secondary-color);
        font-weight: 500
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .nav-tabs-custom {
        border-bottom: 1px solid var(--tb-border-color-translucent)
    }

    .nav-tabs-custom .nav-item {
        position: relative
    }

    .nav-tabs-custom .nav-item .nav-link {
        border: none;
        font-weight: 500
    }

    .nav-tabs-custom .nav-item .nav-link::after {
        content: "";
        background: #4b93ff;
        height: 1px;
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 0;
        -webkit-transition: all 250ms ease 0s;
        transition: all 250ms ease 0s;
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    .nav-tabs-custom .nav-item .nav-link.active,
    .nav-tabs-custom .nav-item .nav-link:hover {
        color: #4b93ff
    }

    .nav-tabs-custom .nav-item .nav-link.active:after,
    .nav-tabs-custom .nav-item .nav-link:hover:after {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .nav-tabs-custom.card-header-tabs {
        margin-top: -1rem
    }

    .nav-tabs-custom.card-header-tabs .nav-link {
        padding: 1.2rem 1.2rem
    }

    .vertical-nav .nav .nav-link {
        padding: 24px 16px;
        text-align: center;
        margin-bottom: 8px
    }

    .vertical-nav .nav .nav-link .nav-icon {
        font-size: 24px
    }

    .navtab-bg li>a {
        background-color: #e9ebec;
        margin: 0 5px
    }

    .arrow-navtabs .nav-item .nav-link {
        position: relative;
        text-align: center
    }

    .arrow-navtabs .nav-item .nav-link:before {
        content: "";
        position: absolute;
        border: 6px solid transparent;
        bottom: -12px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .arrow-navtabs .nav-item .nav-link:before {
            -webkit-transition: none;
            transition: none
        }
    }

    .arrow-navtabs .nav-item .nav-link.active:before {
        border-top-color: #4b93ff
    }

    .custom-hover-nav-tabs .nav-item {
        text-align: center;
        overflow: hidden
    }

    .custom-hover-nav-tabs .nav-item .nav-link {
        width: 120px;
        height: 45px;
        position: relative;
        border-radius: 0
    }

    .custom-hover-nav-tabs .nav-item .nav-link .nav-icon {
        font-size: 22px
    }

    .custom-hover-nav-tabs .nav-item .nav-link .nav-titl {
        font-size: 14px
    }

    .custom-hover-nav-tabs .nav-item .nav-link.active .nav-tab-position {
        color: #fff
    }

    .custom-hover-nav-tabs .nav-item .nav-link .nav-tab-position {
        position: absolute;
        left: 0;
        right: 0;
        -webkit-transition: all .4s;
        transition: all .4s
    }

    .custom-hover-nav-tabs .nav-item .nav-link .nav-tab-position.nav-icon {
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .custom-hover-nav-tabs .nav-item .nav-link .nav-tab-position.nav-titl {
        bottom: -20px
    }

    .custom-hover-nav-tabs .nav-item .nav-link:hover .nav-titl {
        bottom: 50%;
        -webkit-transform: translateY(50%);
        transform: translateY(50%)
    }

    .custom-hover-nav-tabs .nav-item .nav-link:hover .nav-icon {
        top: -20px
    }

    .custom-verti-nav-pills .nav-link {
        background-color: var(--tb-light);
        margin-top: 7px;
        position: relative
    }

    @media (min-width: 992px) {
        .custom-verti-nav-pills .nav-link::before {
            content: "";
            position: absolute;
            right: -20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            border: 12px solid transparent;
            border-left-color: transparent;
            -webkit-transition: border-left-color .04 ease;
            transition: border-left-color .04 ease
        }

        .custom-verti-nav-pills .nav-link.active::before {
            border-left-color: #4b93ff
        }
    }

    .animation-nav li {
        position: relative
    }

    .animation-nav li a {
        color: var(--tb-body-color);
        border-radius: 4px;
        position: relative;
        overflow: hidden;
        -webkit-transition: all .4s;
        transition: all .4s;
        z-index: 1
    }

    .animation-nav li a span {
        position: relative
    }

    .animation-nav li a::before {
        content: "";
        position: absolute;
        top: 0;
        width: 0;
        right: 0;
        height: 100%;
        -webkit-transition: width .4s cubic-bezier(.51, .18, 0, .88) .1s;
        transition: width .4s cubic-bezier(.51, .18, 0, .88) .1s;
        background-color: #4b93ff;
        z-index: -1
    }

    .animation-nav li a.active,
    .animation-nav li a:hover {
        color: #fff;
        background-color: transparent !important
    }

    .animation-nav li a.active::before,
    .animation-nav li a:hover::before {
        width: 100%;
        left: 0
    }

    .nav-border-top .nav-link {
        border-top: 3px solid transparent
    }

    .nav-border-top .nav-link.active {
        border-top-color: #4b93ff
    }

    .nav-border-top-primary .nav-link.active {
        color: #4b93ff;
        border-top-color: #4b93ff
    }

    .nav-border-top-secondary .nav-link.active {
        color: #7c6bff;
        border-top-color: #7c6bff
    }

    .nav-border-top-success .nav-link.active {
        color: #06d6a0;
        border-top-color: #06d6a0
    }

    .nav-border-top-info .nav-link.active {
        color: #1ea6d3;
        border-top-color: #1ea6d3
    }

    .nav-border-top-warning .nav-link.active {
        color: #f1be46;
        border-top-color: #f1be46
    }

    .nav-border-top-danger .nav-link.active {
        color: #ef476f;
        border-top-color: #ef476f
    }

    .nav-border-top-light .nav-link.active {
        color: #f3f6f9;
        border-top-color: #f3f6f9
    }

    .nav-border-top-dark .nav-link.active {
        color: #0b1729;
        border-top-color: #0b1729
    }

    .nav-custom {
        background-color: #4b93ff;
        border-radius: var(--tb-border-radius-lg)
    }

    .nav-custom .nav-item .nav-link {
        color: rgba(255, 255, 255, .75)
    }

    .nav-custom .nav-item .nav-link.active {
        color: #fff;
        background-color: rgba(255, 255, 255, .1)
    }

    .nav-custom.nav-custom-light .nav-item .nav-link {
        color: rgba(var(--tb-dark-rgb), .75)
    }

    .nav-custom.nav-custom-light .nav-item .nav-link.active {
        color: #f3f6f9;
        background-color: #4b93ff
    }

    .nav-custom-primary {
        background-color: #4b93ff
    }

    .nav-custom-secondary {
        background-color: #7c6bff
    }

    .nav-custom-success {
        background-color: #06d6a0
    }

    .nav-custom-info {
        background-color: #1ea6d3
    }

    .nav-custom-warning {
        background-color: #f1be46
    }

    .nav-custom-danger {
        background-color: #ef476f
    }

    .nav-custom-light {
        background-color: #f3f6f9
    }

    .nav-custom-dark {
        background-color: #0b1729
    }

    .nav-custom-light {
        background-color: var(--tb-light)
    }

    .nav-primary .nav-link.active {
        color: #fff;
        background-color: #4b93ff
    }

    .nav-primary.nav-tabs .nav-link.active {
        color: #4b93ff;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-primary.nav-tabs-custom .nav-link.active,
    .nav-primary.nav-tabs-custom .nav-link:hover {
        color: #4b93ff;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-primary.nav-tabs-custom .nav-link.active::after,
    .nav-primary.nav-tabs-custom .nav-link:hover::after {
        background-color: #4b93ff
    }

    .nav-primary.arrow-navtabs .nav-link.active::before {
        border-top-color: #4b93ff
    }

    .nav-primary.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #4b93ff
    }

    .nav-secondary .nav-link.active {
        color: #fff;
        background-color: #7c6bff
    }

    .nav-secondary.nav-tabs .nav-link.active {
        color: #7c6bff;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-secondary.nav-tabs-custom .nav-link.active,
    .nav-secondary.nav-tabs-custom .nav-link:hover {
        color: #7c6bff;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-secondary.nav-tabs-custom .nav-link.active::after,
    .nav-secondary.nav-tabs-custom .nav-link:hover::after {
        background-color: #7c6bff
    }

    .nav-secondary.arrow-navtabs .nav-link.active::before {
        border-top-color: #7c6bff
    }

    .nav-secondary.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #7c6bff
    }

    .nav-success .nav-link.active {
        color: #fff;
        background-color: #06d6a0
    }

    .nav-success.nav-tabs .nav-link.active {
        color: #06d6a0;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-success.nav-tabs-custom .nav-link.active,
    .nav-success.nav-tabs-custom .nav-link:hover {
        color: #06d6a0;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-success.nav-tabs-custom .nav-link.active::after,
    .nav-success.nav-tabs-custom .nav-link:hover::after {
        background-color: #06d6a0
    }

    .nav-success.arrow-navtabs .nav-link.active::before {
        border-top-color: #06d6a0
    }

    .nav-success.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #06d6a0
    }

    .nav-info .nav-link.active {
        color: #fff;
        background-color: #1ea6d3
    }

    .nav-info.nav-tabs .nav-link.active {
        color: #1ea6d3;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-info.nav-tabs-custom .nav-link.active,
    .nav-info.nav-tabs-custom .nav-link:hover {
        color: #1ea6d3;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-info.nav-tabs-custom .nav-link.active::after,
    .nav-info.nav-tabs-custom .nav-link:hover::after {
        background-color: #1ea6d3
    }

    .nav-info.arrow-navtabs .nav-link.active::before {
        border-top-color: #1ea6d3
    }

    .nav-info.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #1ea6d3
    }

    .nav-warning .nav-link.active {
        color: #fff;
        background-color: #f1be46
    }

    .nav-warning.nav-tabs .nav-link.active {
        color: #f1be46;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-warning.nav-tabs-custom .nav-link.active,
    .nav-warning.nav-tabs-custom .nav-link:hover {
        color: #f1be46;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-warning.nav-tabs-custom .nav-link.active::after,
    .nav-warning.nav-tabs-custom .nav-link:hover::after {
        background-color: #f1be46
    }

    .nav-warning.arrow-navtabs .nav-link.active::before {
        border-top-color: #f1be46
    }

    .nav-warning.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #f1be46
    }

    .nav-danger .nav-link.active {
        color: #fff;
        background-color: #ef476f
    }

    .nav-danger.nav-tabs .nav-link.active {
        color: #ef476f;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-danger.nav-tabs-custom .nav-link.active,
    .nav-danger.nav-tabs-custom .nav-link:hover {
        color: #ef476f;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-danger.nav-tabs-custom .nav-link.active::after,
    .nav-danger.nav-tabs-custom .nav-link:hover::after {
        background-color: #ef476f
    }

    .nav-danger.arrow-navtabs .nav-link.active::before {
        border-top-color: #ef476f
    }

    .nav-danger.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #ef476f
    }

    .nav-light .nav-link.active {
        color: #fff;
        background-color: #f3f6f9
    }

    .nav-light.nav-tabs .nav-link.active {
        color: #f3f6f9;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-light.nav-tabs-custom .nav-link.active,
    .nav-light.nav-tabs-custom .nav-link:hover {
        color: #f3f6f9;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-light.nav-tabs-custom .nav-link.active::after,
    .nav-light.nav-tabs-custom .nav-link:hover::after {
        background-color: #f3f6f9
    }

    .nav-light.arrow-navtabs .nav-link.active::before {
        border-top-color: #f3f6f9
    }

    .nav-light.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #f3f6f9
    }

    .nav-dark .nav-link.active {
        color: #fff;
        background-color: #0b1729
    }

    .nav-dark.nav-tabs .nav-link.active {
        color: #0b1729;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-dark.nav-tabs-custom .nav-link.active,
    .nav-dark.nav-tabs-custom .nav-link:hover {
        color: #0b1729;
        background-color: var(--tb-card-bg-custom)
    }

    .nav-dark.nav-tabs-custom .nav-link.active::after,
    .nav-dark.nav-tabs-custom .nav-link:hover::after {
        background-color: #0b1729
    }

    .nav-dark.arrow-navtabs .nav-link.active::before {
        border-top-color: #0b1729
    }

    .nav-dark.custom-verti-nav-pills .nav-link.active::before {
        border-left-color: #0b1729
    }

    .progress-nav {
        position: relative;
        margin-right: 1rem;
        margin-left: 1rem
    }

    .progress-nav .progress {
        position: absolute;
        left: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 100%
    }

    .progress-nav .nav {
        margin-right: -1rem;
        margin-left: -1rem;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .progress-nav .nav .nav-link {
        width: 2rem;
        height: 2rem;
        background-color: var(--tb-light);
        padding: 0;
        color: var(--tb-secondary-color);
        font-weight: 500
    }

    .progress-nav .nav .nav-link.active,
    .progress-nav .nav .nav-link.done {
        background-color: #4b93ff;
        color: #fff
    }

    .step-arrow-nav .nav {
        background-color: var(--tb-light)
    }

    .step-arrow-nav .nav .nav-link {
        border-radius: 0;
        position: relative;
        font-weight: 500;
        color: var(--tb-secondary-color)
    }

    .step-arrow-nav .nav .nav-link::before {
        content: "";
        position: absolute;
        border: 7px solid transparent;
        right: -14px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .step-arrow-nav .nav .nav-link.done {
        background-color: rgba(75, 147, 255, .05);
        color: #4b93ff
    }

    .step-arrow-nav .nav .nav-link.done::before {
        border-left-color: transparent
    }

    .step-arrow-nav .nav .nav-link.active {
        background-color: rgba(75, 147, 255, .1);
        color: #4b93ff;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .step-arrow-nav .nav .nav-link.active::before {
        border-left-color: rgba(75, 147, 255, .1)
    }

    .step-arrow-nav .nav .nav-item:last-child .nav-link:before {
        display: none
    }

    .vertical-navs-step .nav {
        gap: 16px
    }

    .vertical-navs-step .nav .nav-link {
        text-align: left;
        background-color: rgba(var(--tb-secondary-bg-rgb), .4);
        border: 1px solid var(--tb-border-color);
        color: var(--tb-secondary-color)
    }

    .vertical-navs-step .nav .nav-link .step-title {
        font-weight: 600
    }

    .vertical-navs-step .nav .nav-link .step-icon {
        color: #ef476f;
        vertical-align: middle;
        font-weight: 500;
        float: left
    }

    .vertical-navs-step .nav .nav-link.active .step-icon,
    .vertical-navs-step .nav .nav-link.done .step-icon {
        color: #06d6a0
    }

    .vertical-navs-step .nav .nav-link.active .step-icon:before,
    .vertical-navs-step .nav .nav-link.done .step-icon:before {
        content: "\eb80"
    }

    .vertical-navs-step .nav .nav-link.active {
        border-color: #4b93ff
    }

    .vertical-navs-step .nav .nav-link.done {
        border-color: #06d6a0
    }

    .nav-custom-outline.nav .nav-link {
        border: 1px solid transparent;
        border-bottom: 2px solid transparent
    }

    .nav-custom-outline.nav .nav-link.active {
        border-color: #4b93ff;
        background-color: transparent;
        color: #4b93ff
    }

    .nav-primary.nav-custom-outline .nav-link.active {
        color: #4b93ff;
        border-color: #4b93ff
    }

    .nav-secondary.nav-custom-outline .nav-link.active {
        color: #7c6bff;
        border-color: #7c6bff
    }

    .nav-success.nav-custom-outline .nav-link.active {
        color: #06d6a0;
        border-color: #06d6a0
    }

    .nav-info.nav-custom-outline .nav-link.active {
        color: #1ea6d3;
        border-color: #1ea6d3
    }

    .nav-warning.nav-custom-outline .nav-link.active {
        color: #f1be46;
        border-color: #f1be46
    }

    .nav-danger.nav-custom-outline .nav-link.active {
        color: #ef476f;
        border-color: #ef476f
    }

    .nav-light.nav-custom-outline .nav-link.active {
        color: #f3f6f9;
        border-color: #f3f6f9
    }

    .nav-dark.nav-custom-outline .nav-link.active {
        color: #0b1729;
        border-color: #0b1729
    }

    .nav-customs.nav {
        padding-left: 34px;
        overflow: hidden
    }

    .nav-customs.nav .nav-link {
        position: relative;
        display: block;
        float: right;
        background-color: var(--tb-secondary-bg);
        margin-right: 46px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .nav-customs.nav .nav-link::after,
    .nav-customs.nav .nav-link::before {
        display: block;
        content: " ";
        position: absolute;
        top: -1px;
        bottom: -1px;
        width: 37px;
        background-color: var(--tb-secondary-bg);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .nav-customs.nav .nav-link::before {
        border-radius: 0 8px 0 0;
        right: -24px;
        -webkit-transform: skew(30deg, 0deg);
        transform: skew(30deg, 0deg)
    }

    .nav-customs.nav .nav-link::after {
        border-radius: 8px 0 0 0;
        left: -24px;
        -webkit-transform: skew(-30deg, 0deg);
        transform: skew(-30deg, 0deg)
    }

    .nav-customs.nav .nav-link.active,
    .nav-customs.nav .nav-link.active:after,
    .nav-customs.nav .nav-link.active:before {
        background-color: #4b93ff;
        color: #fff
    }

    .nav-customs.nav .nav-link.active {
        z-index: 1
    }

    .table>thead {
        border-color: var(--tb-border-color-translucent)
    }

    .table>:not(:first-child) {
        border-top-width: var(--tb-border-width)
    }

    .table-nowrap td,
    .table-nowrap th {
        white-space: nowrap
    }

    .table-card {
        margin: -1.2rem -1.2rem
    }

    .table-card td:first-child,
    .table-card th:first-child {
        padding-left: 16px
    }

    .table-card td:last-child,
    .table-card th:last-child {
        padding-right: 16px
    }

    .table-card .table>:not(:first-child) {
        border-top-width: var(--tb-border-width)
    }

    .border-primary.table>thead {
        border-color: #4b93ff !important
    }

    .table-primary.table>thead {
        border-bottom-color: #7eb2ff !important
    }

    .border-secondary.table>thead {
        border-color: #7c6bff !important
    }

    .table-secondary.table>thead {
        border-bottom-color: #a99eff !important
    }

    .border-success.table>thead {
        border-color: #06d6a0 !important
    }

    .table-success.table>thead {
        border-bottom-color: #17f8be !important
    }

    .border-info.table>thead {
        border-color: #1ea6d3 !important
    }

    .table-info.table>thead {
        border-bottom-color: #40bbe4 !important
    }

    .border-warning.table>thead {
        border-color: #f1be46 !important
    }

    .table-warning.table>thead {
        border-bottom-color: #f5cf75 !important
    }

    .border-danger.table>thead {
        border-color: #ef476f !important
    }

    .table-danger.table>thead {
        border-bottom-color: #f37694 !important
    }

    .border-light.table>thead {
        border-color: #f3f6f9 !important
    }

    .table-light.table>thead {
        border-bottom-color: #fff !important
    }

    .border-dark.table>thead {
        border-color: #0b1729 !important
    }

    .table-dark.table>thead {
        border-bottom-color: #162e51 !important
    }

    .table .form-check {
        padding-left: 0;
        margin-bottom: 0
    }

    .table .form-check .form-check-input {
        margin-left: 0;
        margin-top: 0;
        float: none;
        vertical-align: middle
    }

    .table .sort {
        position: relative
    }

    .table .sort::before {
        content: "\f035d";
        position: absolute;
        right: .5rem;
        top: 18px;
        font-size: .8rem;
        font-family: "Material Design Icons"
    }

    .table .sort::after {
        position: absolute;
        right: .5rem;
        content: "\f0360";
        font-family: "Material Design Icons";
        font-size: .8rem;
        top: 12px
    }

    .table-light {
        --tb-table-bg: var(--tb-light);
        --tb-table-color: var(--tb-secondary-color);
        --tb-table-border-color: var(--tb-border-color-translucent)
    }

    .modal-title {
        font-weight: 600
    }

    .modal-dialog:not(.modal-dialog-scrollable) .modal-header {
        padding-bottom: 0
    }

    .modal-dialog:not(.modal-dialog-scrollable) .modal-header .btn-close {
        margin-top: -1.25rem 1.25rem
    }

    .modal-dialog:not(.modal-dialog-scrollable) .modal-footer {
        padding-top: 0
    }

    .modal.fadeInRight .modal-dialog {
        opacity: 0;
        -webkit-transform: translateX(20%);
        transform: translateX(20%);
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .modal.fadeInRight.show .modal-dialog {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .modal.fadeInLeft .modal-dialog {
        -webkit-animation: fadeInLeft .3s ease-in-out;
        animation: fadeInLeft .3s ease-in-out;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0)
    }

    .modal.fadeInLeft.show .modal-dialog {
        -webkit-transform: none;
        transform: none
    }

    .modal.fadeInUp .modal-dialog {
        -webkit-animation: fadeInUp .3s ease-in-out;
        animation: fadeInUp .3s ease-in-out;
        -webkit-transform: translate(0, 30%);
        transform: translate(0, 30%)
    }

    .modal.fadeInUp.show .modal-dialog {
        -webkit-transform: none;
        transform: none
    }

    .modal.flip {
        -webkit-perspective: 1300px;
        perspective: 1300px
    }

    .modal.flip .modal-dialog {
        opacity: 0;
        -webkit-transform: rotateY(-70deg);
        transform: rotateY(-70deg);
        -webkit-transition: all .3s;
        transition: all .3s
    }

    .modal.flip.show .modal-dialog {
        opacity: 1;
        -webkit-transform: rotateY(0);
        transform: rotateY(0)
    }

    .modal.zoomIn .modal-dialog {
        opacity: 0;
        -webkit-transform: scale(.7);
        transform: scale(.7);
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .modal.zoomIn.show .modal-dialog {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .modal-dialog-right {
        margin-right: 1.75rem
    }

    .modal-dialog-bottom {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        min-height: calc(100% - 1.75rem)
    }

    @media (min-width: 576px) {
        .modal-dialog-bottom {
            min-height: calc(100% - 3.5rem)
        }
    }

    .modal-dialog-bottom-right {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        min-height: calc(100% - 1.75rem);
        margin-right: 1.75rem
    }

    @media (min-width: 576px) {
        .modal-dialog-bottom-right {
            min-height: calc(100% - 3.5rem)
        }
    }

    @-webkit-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(-30%, 0, 0);
            transform: translate3d(-30%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(-30%, 0, 0);
            transform: translate3d(-30%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
    }

    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 30%, 0);
            transform: translate3d(0, 30%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 30%, 0);
            transform: translate3d(0, 30%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
    }

    @-webkit-keyframes zoomIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    @keyframes zoomIn {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    .login-modal {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1016%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(64%2c 81%2c 137%2c 1)'%3e%3c/rect%3e%3cpath d='M0%2c650.704C122.328%2c648.746%2c159.175%2c473.043%2c255.674%2c397.837C339.724%2c332.333%2c461.529%2c324.924%2c526.449%2c240.421C598.428%2c146.73%2c655.546%2c24.847%2c631.015%2c-90.726C606.666%2c-205.444%2c482.926%2c-263.497%2c401.565%2c-347.958C325.215%2c-427.217%2c275.543%2c-549.012%2c167.826%2c-571.563C60.344%2c-594.065%2c-27.703%2c-482.932%2c-135.163%2c-460.325C-256.336%2c-434.833%2c-401.929%2c-509.651%2c-497.972%2c-431.495C-592.807%2c-354.321%2c-579.865%2c-206.886%2c-595.603%2c-85.635C-611.133%2c34.016%2c-656.761%2c169.183%2c-588.884%2c268.934C-520.854%2c368.909%2c-362.458%2c340.324%2c-260.989%2c406.106C-158.875%2c472.306%2c-121.679%2c652.651%2c0%2c650.704' fill='%2333416e'%3e%3c/path%3e%3cpath d='M1440 995.672C1519.728 984.741 1563.12 899.779 1626.466 850.1469999999999 1682.6390000000001 806.135 1756.261 782.602 1791.2939999999999 720.431 1827.571 656.052 1835.537 577.6610000000001 1820.814 505.247 1806.518 434.933 1753.2640000000001 383.16999999999996 1710.941 325.228 1664.475 261.614 1634.992 175.16000000000003 1560.657 149.07999999999998 1485.96 122.87299999999999 1402.146 155.543 1332.03 192.289 1269.541 225.038 1232.754 287.251 1189.969 343.347 1149.925 395.849 1115.781 448.9 1089.96 509.672 1056 589.599 988.9680000000001 671.1659999999999 1015.557 753.837 1041.91 835.774 1142.714 863.61 1217.498 906.22 1288.388 946.611 1359.167 1006.755 1440 995.672' fill='%234d61a4'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1016'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        background-position: center
    }

    @media (min-width: 576px) {
        .modal-dialog.modal-custom-size {
            max-width: 70%
        }
    }

    .pagination-separated .page-item .page-link {
        margin-left: .35rem;
        border-radius: .25rem
    }

    .pagination-rounded .page-link {
        border-radius: 30px !important;
        margin: 0 3px !important;
        border: none;
        min-width: 32px;
        min-height: 32px;
        text-align: center
    }

    .pagination-rounded.pagination-sm .page-link {
        min-width: 25px;
        min-height: 25px
    }

    .page-item.active .page-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .progress-sm {
        height: 5px
    }

    .progress-lg {
        height: 12px
    }

    .progress-xl {
        height: 16px
    }

    .custom-progess {
        position: relative
    }

    .custom-progess .progress-icon {
        position: absolute;
        top: -12px
    }

    .custom-progess .progress-icon .avatar-title {
        background: var(--tb-card-bg-custom)
    }

    .animated-progress {
        position: relative
    }

    .animated-progress .progress-bar {
        position: relative;
        border-radius: 6px;
        -webkit-animation: animate-positive 2s;
        animation: animate-positive 2s
    }

    @-webkit-keyframes animate-positive {
        0% {
            width: 0
        }
    }

    @keyframes animate-positive {
        0% {
            width: 0
        }
    }

    .custom-progress {
        height: 15px;
        padding: 4px;
        border-radius: 30px
    }

    .custom-progress .progress-bar {
        position: relative;
        border-radius: 30px
    }

    .custom-progress .progress-bar::before {
        content: "";
        position: absolute;
        width: 4px;
        height: 4px;
        background-color: #fff;
        border-radius: 7px;
        right: 2px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .progress-label {
        overflow: visible
    }

    .progress-label .progress-bar {
        position: relative;
        overflow: visible
    }

    .progress-label .progress-bar .label {
        position: absolute;
        top: -25px;
        right: -9px;
        background-color: #4b93ff;
        color: #fff;
        display: inline-block;
        line-height: 18px;
        padding: 0 4px;
        border-radius: 4px
    }

    .progress-label .progress-bar .label:after {
        content: "";
        position: absolute;
        border: 4px solid transparent;
        border-top-color: #4b93ff;
        bottom: -7px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .progress-step-arrow {
        height: 3.25rem
    }

    .progress-step-arrow .progress-bar {
        position: relative;
        overflow: initial;
        font-size: .875rem;
        color: #fff
    }

    .progress-step-arrow .progress-bar::after {
        content: "";
        position: absolute;
        border: 10px solid transparent;
        bottom: 15px;
        right: -20px;
        z-index: 1
    }

    .progress-primary .progress-bar {
        background-color: #4b93ff
    }

    .progress-primary .progress-bar::after {
        border-left-color: #4b93ff
    }

    .progress-primary .progress-bar:nth-child(2) {
        background-color: rgba(75, 147, 255, .1) !important;
        color: #4b93ff !important
    }

    .progress-primary .progress-bar:nth-child(2)::after {
        border-left-color: rgba(75, 147, 255, .1)
    }

    .progress-secondary .progress-bar {
        background-color: #7c6bff
    }

    .progress-secondary .progress-bar::after {
        border-left-color: #7c6bff
    }

    .progress-secondary .progress-bar:nth-child(2) {
        background-color: rgba(124, 107, 255, .1) !important;
        color: #7c6bff !important
    }

    .progress-secondary .progress-bar:nth-child(2)::after {
        border-left-color: rgba(124, 107, 255, .1)
    }

    .progress-success .progress-bar {
        background-color: #06d6a0
    }

    .progress-success .progress-bar::after {
        border-left-color: #06d6a0
    }

    .progress-success .progress-bar:nth-child(2) {
        background-color: rgba(6, 214, 160, .1) !important;
        color: #06d6a0 !important
    }

    .progress-success .progress-bar:nth-child(2)::after {
        border-left-color: rgba(6, 214, 160, .1)
    }

    .progress-info .progress-bar {
        background-color: #1ea6d3
    }

    .progress-info .progress-bar::after {
        border-left-color: #1ea6d3
    }

    .progress-info .progress-bar:nth-child(2) {
        background-color: rgba(30, 166, 211, .1) !important;
        color: #1ea6d3 !important
    }

    .progress-info .progress-bar:nth-child(2)::after {
        border-left-color: rgba(30, 166, 211, .1)
    }

    .progress-warning .progress-bar {
        background-color: #f1be46
    }

    .progress-warning .progress-bar::after {
        border-left-color: #f1be46
    }

    .progress-warning .progress-bar:nth-child(2) {
        background-color: rgba(241, 190, 70, .1) !important;
        color: #f1be46 !important
    }

    .progress-warning .progress-bar:nth-child(2)::after {
        border-left-color: rgba(241, 190, 70, .1)
    }

    .progress-danger .progress-bar {
        background-color: #ef476f
    }

    .progress-danger .progress-bar::after {
        border-left-color: #ef476f
    }

    .progress-danger .progress-bar:nth-child(2) {
        background-color: rgba(239, 71, 111, .1) !important;
        color: #ef476f !important
    }

    .progress-danger .progress-bar:nth-child(2)::after {
        border-left-color: rgba(239, 71, 111, .1)
    }

    .progress-light .progress-bar {
        background-color: #f3f6f9
    }

    .progress-light .progress-bar::after {
        border-left-color: #f3f6f9
    }

    .progress-light .progress-bar:nth-child(2) {
        background-color: rgba(243, 246, 249, .1) !important;
        color: #f3f6f9 !important
    }

    .progress-light .progress-bar:nth-child(2)::after {
        border-left-color: rgba(243, 246, 249, .1)
    }

    .progress-dark .progress-bar {
        background-color: #0b1729
    }

    .progress-dark .progress-bar::after {
        border-left-color: #0b1729
    }

    .progress-dark .progress-bar:nth-child(2) {
        background-color: rgba(11, 23, 41, .1) !important;
        color: #0b1729 !important
    }

    .progress-dark .progress-bar:nth-child(2)::after {
        border-left-color: rgba(11, 23, 41, .1)
    }

    .popover {
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12)
    }

    .text-white-75 {
        color: rgba(255, 255, 255, .75) !important
    }

    .custom-blockquote.blockquote {
        padding: 16px;
        border-left: 3px solid
    }

    .custom-blockquote.blockquote.blockquote-outline {
        background-color: var(--tb-secondary-bg) !important;
        border: 1px solid;
        border-left: 3px solid
    }

    .custom-blockquote.blockquote.blockquote-primary {
        color: #4b93ff;
        border-color: #4b93ff;
        background-color: rgba(75, 147, 255, .15)
    }

    .custom-blockquote.blockquote.blockquote-primary .blockquote-footer {
        color: #4b93ff
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-primary {
        border-color: #4b93ff
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-primary .blockquote-footer {
        color: #4b93ff
    }

    .custom-blockquote.blockquote.blockquote-secondary {
        color: #7c6bff;
        border-color: #7c6bff;
        background-color: rgba(124, 107, 255, .15)
    }

    .custom-blockquote.blockquote.blockquote-secondary .blockquote-footer {
        color: #7c6bff
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-secondary {
        border-color: #7c6bff
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-secondary .blockquote-footer {
        color: #7c6bff
    }

    .custom-blockquote.blockquote.blockquote-success {
        color: #06d6a0;
        border-color: #06d6a0;
        background-color: rgba(6, 214, 160, .15)
    }

    .custom-blockquote.blockquote.blockquote-success .blockquote-footer {
        color: #06d6a0
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-success {
        border-color: #06d6a0
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-success .blockquote-footer {
        color: #06d6a0
    }

    .custom-blockquote.blockquote.blockquote-info {
        color: #1ea6d3;
        border-color: #1ea6d3;
        background-color: rgba(30, 166, 211, .15)
    }

    .custom-blockquote.blockquote.blockquote-info .blockquote-footer {
        color: #1ea6d3
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-info {
        border-color: #1ea6d3
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-info .blockquote-footer {
        color: #1ea6d3
    }

    .custom-blockquote.blockquote.blockquote-warning {
        color: #f1be46;
        border-color: #f1be46;
        background-color: rgba(241, 190, 70, .15)
    }

    .custom-blockquote.blockquote.blockquote-warning .blockquote-footer {
        color: #f1be46
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-warning {
        border-color: #f1be46
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-warning .blockquote-footer {
        color: #f1be46
    }

    .custom-blockquote.blockquote.blockquote-danger {
        color: #ef476f;
        border-color: #ef476f;
        background-color: rgba(239, 71, 111, .15)
    }

    .custom-blockquote.blockquote.blockquote-danger .blockquote-footer {
        color: #ef476f
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-danger {
        border-color: #ef476f
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-danger .blockquote-footer {
        color: #ef476f
    }

    .custom-blockquote.blockquote.blockquote-light {
        color: #f3f6f9;
        border-color: #f3f6f9;
        background-color: rgba(243, 246, 249, .15)
    }

    .custom-blockquote.blockquote.blockquote-light .blockquote-footer {
        color: #f3f6f9
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-light {
        border-color: #f3f6f9
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-light .blockquote-footer {
        color: #f3f6f9
    }

    .custom-blockquote.blockquote.blockquote-dark {
        color: #0b1729;
        border-color: #0b1729;
        background-color: rgba(11, 23, 41, .15)
    }

    .custom-blockquote.blockquote.blockquote-dark .blockquote-footer {
        color: #0b1729
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-dark {
        border-color: #0b1729
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-dark .blockquote-footer {
        color: #0b1729
    }

    .custom-blockquote.blockquote.blockquote-dark {
        color: var(--tb-dark);
        border-color: var(--tb-dark);
        background-color: rgba(var(--tb-dark-rgb), .15)
    }

    .custom-blockquote.blockquote.blockquote-dark .blockquote-footer {
        color: var(--tb-dark)
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-dark {
        border-color: var(--tb-dark)
    }

    .custom-blockquote.blockquote.blockquote-outline.blockquote-dark .blockquote-footer {
        color: var(--tb-dark)
    }

    .form-check {
        position: relative;
        text-align: left
    }

    .form-check .form-check-input {
        cursor: pointer
    }

    .form-check-primary .form-check-input:checked {
        background-color: #4b93ff;
        border-color: #4b93ff
    }

    .form-radio-primary .form-check-input:checked {
        border-color: #4b93ff;
        background-color: #4b93ff
    }

    .form-radio-primary .form-check-input:checked:after {
        background-color: #4b93ff
    }

    .form-check-secondary .form-check-input:checked {
        background-color: #7c6bff;
        border-color: #7c6bff
    }

    .form-radio-secondary .form-check-input:checked {
        border-color: #7c6bff;
        background-color: #7c6bff
    }

    .form-radio-secondary .form-check-input:checked:after {
        background-color: #7c6bff
    }

    .form-check-success .form-check-input:checked {
        background-color: #06d6a0;
        border-color: #06d6a0
    }

    .form-radio-success .form-check-input:checked {
        border-color: #06d6a0;
        background-color: #06d6a0
    }

    .form-radio-success .form-check-input:checked:after {
        background-color: #06d6a0
    }

    .form-check-info .form-check-input:checked {
        background-color: #1ea6d3;
        border-color: #1ea6d3
    }

    .form-radio-info .form-check-input:checked {
        border-color: #1ea6d3;
        background-color: #1ea6d3
    }

    .form-radio-info .form-check-input:checked:after {
        background-color: #1ea6d3
    }

    .form-check-warning .form-check-input:checked {
        background-color: #f1be46;
        border-color: #f1be46
    }

    .form-radio-warning .form-check-input:checked {
        border-color: #f1be46;
        background-color: #f1be46
    }

    .form-radio-warning .form-check-input:checked:after {
        background-color: #f1be46
    }

    .form-check-danger .form-check-input:checked {
        background-color: #ef476f;
        border-color: #ef476f
    }

    .form-radio-danger .form-check-input:checked {
        border-color: #ef476f;
        background-color: #ef476f
    }

    .form-radio-danger .form-check-input:checked:after {
        background-color: #ef476f
    }

    .form-check-light .form-check-input:checked {
        background-color: #f3f6f9;
        border-color: #f3f6f9
    }

    .form-radio-light .form-check-input:checked {
        border-color: #f3f6f9;
        background-color: #f3f6f9
    }

    .form-radio-light .form-check-input:checked:after {
        background-color: #f3f6f9
    }

    .form-check-dark .form-check-input:checked {
        background-color: #0b1729;
        border-color: #0b1729
    }

    .form-radio-dark .form-check-input:checked {
        border-color: #0b1729;
        background-color: #0b1729
    }

    .form-radio-dark .form-check-input:checked:after {
        background-color: #0b1729
    }

    .form-check-label {
        cursor: pointer;
        margin-bottom: 0
    }

    .form-check-right {
        padding-left: 0;
        display: inline-block
    }

    .form-check-right .form-check-input {
        float: right;
        margin-left: 0;
        margin-right: -1.6em
    }

    .form-check-right .form-check-label {
        display: block
    }

    .form-check-right.form-switch .form-check-input {
        margin-right: -2.56em
    }

    .form-check-outline.form-check-primary .form-check-input:checked[type=checkbox] {
        color: #4b93ff;
        background-color: transparent;
        border-color: #4b93ff
    }

    .form-check-outline.form-check-secondary .form-check-input:checked[type=checkbox] {
        color: #7c6bff;
        background-color: transparent;
        border-color: #7c6bff
    }

    .form-check-outline.form-check-success .form-check-input:checked[type=checkbox] {
        color: #06d6a0;
        background-color: transparent;
        border-color: #06d6a0
    }

    .form-check-outline.form-check-info .form-check-input:checked[type=checkbox] {
        color: #1ea6d3;
        background-color: transparent;
        border-color: #1ea6d3
    }

    .form-check-outline.form-check-warning .form-check-input:checked[type=checkbox] {
        color: #f1be46;
        background-color: transparent;
        border-color: #f1be46
    }

    .form-check-outline.form-check-danger .form-check-input:checked[type=checkbox] {
        color: #ef476f;
        background-color: transparent;
        border-color: #ef476f
    }

    .form-check-outline.form-check-light .form-check-input:checked[type=checkbox] {
        color: #f3f6f9;
        background-color: transparent;
        border-color: #f3f6f9
    }

    .form-check-outline.form-check-dark .form-check-input:checked[type=checkbox] {
        color: #0b1729;
        background-color: transparent;
        border-color: #0b1729
    }

    .form-check-outline .form-check-input {
        position: relative
    }

    .form-check-outline .form-check-input:checked[type=checkbox] {
        background-image: none
    }

    .form-check-outline .form-check-input:checked[type=checkbox]::before {
        content: "\f012c";
        font-family: "Material Design Icons";
        top: -2px;
        position: absolute;
        font-weight: 700;
        font-size: 11px;
        left: 1px
    }

    .form-radio-outline.form-radio-primary .form-check-input:checked[type=radio] {
        color: #4b93ff;
        background-color: transparent;
        border-color: #4b93ff
    }

    .form-radio-outline.form-radio-secondary .form-check-input:checked[type=radio] {
        color: #7c6bff;
        background-color: transparent;
        border-color: #7c6bff
    }

    .form-radio-outline.form-radio-success .form-check-input:checked[type=radio] {
        color: #06d6a0;
        background-color: transparent;
        border-color: #06d6a0
    }

    .form-radio-outline.form-radio-info .form-check-input:checked[type=radio] {
        color: #1ea6d3;
        background-color: transparent;
        border-color: #1ea6d3
    }

    .form-radio-outline.form-radio-warning .form-check-input:checked[type=radio] {
        color: #f1be46;
        background-color: transparent;
        border-color: #f1be46
    }

    .form-radio-outline.form-radio-danger .form-check-input:checked[type=radio] {
        color: #ef476f;
        background-color: transparent;
        border-color: #ef476f
    }

    .form-radio-outline.form-radio-light .form-check-input:checked[type=radio] {
        color: #f3f6f9;
        background-color: transparent;
        border-color: #f3f6f9
    }

    .form-radio-outline.form-radio-dark .form-check-input:checked[type=radio] {
        color: #0b1729;
        background-color: transparent;
        border-color: #0b1729
    }

    .form-radio-outline .form-check-input {
        position: relative
    }

    .form-radio-outline .form-check-input:checked[type=radio] {
        background-image: none
    }

    .form-radio-outline .form-check-input:checked[type=radio]::before {
        content: "\f0765";
        font-family: "Material Design Icons";
        top: 0;
        position: absolute;
        font-size: 8px;
        left: 2.2px
    }

    .form-switch-md {
        padding-left: 2.5rem;
        min-height: 22px;
        line-height: 22px
    }

    .form-switch-md .form-check-input {
        width: 40px;
        height: 20px;
        left: -.5rem;
        position: relative
    }

    .form-switch-md .form-check-label {
        vertical-align: middle
    }

    .form-switch-lg {
        padding-left: 2.75rem;
        min-height: 28px;
        line-height: 28px
    }

    .form-switch-lg .form-check-input {
        width: 48px;
        height: 24px;
        left: -.75rem;
        position: relative
    }

    .input-group-text {
        margin-bottom: 0
    }

    .form-switch-primary .form-check-input:checked {
        background-color: #4b93ff;
        border-color: #4b93ff
    }

    .form-switch-custom.form-switch-primary .form-check-input:checked::before {
        color: #4b93ff
    }

    .form-switch-secondary .form-check-input:checked {
        background-color: #7c6bff;
        border-color: #7c6bff
    }

    .form-switch-custom.form-switch-secondary .form-check-input:checked::before {
        color: #7c6bff
    }

    .form-switch-success .form-check-input:checked {
        background-color: #06d6a0;
        border-color: #06d6a0
    }

    .form-switch-custom.form-switch-success .form-check-input:checked::before {
        color: #06d6a0
    }

    .form-switch-info .form-check-input:checked {
        background-color: #1ea6d3;
        border-color: #1ea6d3
    }

    .form-switch-custom.form-switch-info .form-check-input:checked::before {
        color: #1ea6d3
    }

    .form-switch-warning .form-check-input:checked {
        background-color: #f1be46;
        border-color: #f1be46
    }

    .form-switch-custom.form-switch-warning .form-check-input:checked::before {
        color: #f1be46
    }

    .form-switch-danger .form-check-input:checked {
        background-color: #ef476f;
        border-color: #ef476f
    }

    .form-switch-custom.form-switch-danger .form-check-input:checked::before {
        color: #ef476f
    }

    .form-switch-light .form-check-input:checked {
        background-color: #f3f6f9;
        border-color: #f3f6f9
    }

    .form-switch-custom.form-switch-light .form-check-input:checked::before {
        color: #f3f6f9
    }

    .form-switch-dark .form-check-input:checked {
        background-color: #0b1729;
        border-color: #0b1729
    }

    .form-switch-custom.form-switch-dark .form-check-input:checked::before {
        color: #0b1729
    }

    .form-switch-custom .form-check-input {
        position: relative;
        background-image: none
    }

    .form-switch-custom .form-check-input::before {
        content: "\f0765";
        font-family: "Material Design Icons";
        top: -9px;
        position: absolute;
        font-size: 20px;
        left: -3px;
        color: var(--tb-tertiary-color);
        -webkit-transition: background-position .15s ease-in-out;
        transition: background-position .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .form-switch-custom .form-check-input::before {
            -webkit-transition: none;
            transition: none
        }
    }

    .form-switch-custom .form-check-input:checked {
        background-image: none;
        background-color: var(--tb-secondary-bg);
        -webkit-transition: background-position .15s ease-in-out;
        transition: background-position .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .form-switch-custom .form-check-input:checked {
            -webkit-transition: none;
            transition: none
        }
    }

    .form-switch-custom .form-check-input:checked::before {
        right: -3px;
        left: auto
    }

    .form-switch-custom .form-check-input:focus {
        background-image: none
    }

    .form-switch-right {
        display: inline-block;
        padding-right: .8em;
        margin-bottom: 0;
        padding-left: 0 !important
    }

    .form-switch-right .form-check-input {
        float: right;
        margin-left: 0;
        margin-right: -1.6em;
        margin-top: .1em !important
    }

    .form-switch-right label {
        margin-bottom: 0;
        margin-right: 1rem
    }

    .card-radio {
        padding: 0
    }

    .card-radio .form-check-label {
        background-color: var(--tb-secondary-bg);
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem;
        padding: 1rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        position: relative;
        padding-right: 32px
    }

    .card-radio .form-check-label:hover {
        cursor: pointer
    }

    .card-radio .form-check-input {
        display: none
    }

    .card-radio .form-check-input:checked+.form-check-label {
        border-color: #4b93ff !important
    }

    .card-radio .form-check-input:checked+.form-check-label:before {
        content: "\eb80";
        font-family: remixicon;
        position: absolute;
        top: 2px;
        right: 6px;
        font-size: 16px;
        color: #4b93ff
    }

    .card-radio.dark .form-check-input:checked+.form-check-label:before {
        color: #fff
    }

    .customize-widget .customize-penal-main {
        background-color: #3b5376;
        height: 15px;
        line-height: 15px
    }

    .customize-widget .customize-penal-main .badge {
        height: 6px;
        width: 6px
    }

    [data-layout-mode=dark] .form-switch .form-check-input,
    [data-layout-mode=dark] .form-switch .form-check-input:focus {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ced4da'/%3e%3c/svg%3e")
    }

    .form-icon {
        position: relative
    }

    .form-icon .form-control-icon {
        padding-left: 2.7rem;
        position: relative
    }

    .form-icon i {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 18px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .form-icon.right .form-control-icon {
        padding-right: 2.7rem;
        padding-left: .9rem;
        position: relative
    }

    .form-icon.right i {
        left: auto;
        right: 18px
    }

    [data-layout-mode=dark] .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ced4da' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e")
    }

    .list-group .list-group-fill-primary {
        --tb-list-group-bg: #4b93ff;
        --tb-list-group-border-color: #4b93ff
    }

    .list-group .list-group-fill-secondary {
        --tb-list-group-bg: #7c6bff;
        --tb-list-group-border-color: #7c6bff
    }

    .list-group .list-group-fill-success {
        --tb-list-group-bg: #06d6a0;
        --tb-list-group-border-color: #06d6a0
    }

    .list-group .list-group-fill-info {
        --tb-list-group-bg: #1ea6d3;
        --tb-list-group-border-color: #1ea6d3
    }

    .list-group .list-group-fill-warning {
        --tb-list-group-bg: #f1be46;
        --tb-list-group-border-color: #f1be46
    }

    .list-group .list-group-fill-danger {
        --tb-list-group-bg: #ef476f;
        --tb-list-group-border-color: #ef476f
    }

    .list-group .list-group-fill-light {
        --tb-list-group-bg: #f3f6f9;
        --tb-list-group-border-color: #f3f6f9
    }

    .list-group .list-group-fill-dark {
        --tb-list-group-bg: #0B1729;
        --tb-list-group-border-color: #0B1729
    }

    .list-group-item {
        margin-bottom: 0
    }

    .list-group-item .list-text {
        color: var(--tb-tertiary-color)
    }

    .list-group-item.active {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .list-group-item.active .list-title {
        color: #fff
    }

    .list-group-item.active .list-text {
        color: rgba(255, 255, 255, .5)
    }

    [data-simplebar] {
        position: relative;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -ms-flex-line-pack: start;
        align-content: flex-start;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .simplebar-wrapper {
        overflow: hidden;
        width: inherit;
        height: inherit;
        max-width: inherit;
        max-height: inherit
    }

    .simplebar-mask {
        direction: inherit;
        position: absolute;
        overflow: hidden;
        padding: 0;
        margin: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        width: auto !important;
        height: auto !important;
        z-index: 0
    }

    .simplebar-offset {
        direction: inherit !important;
        -webkit-box-sizing: inherit !important;
        box-sizing: inherit !important;
        resize: none !important;
        position: absolute;
        top: 0;
        left: 0 !important;
        bottom: 0;
        right: 0 !important;
        padding: 0;
        margin: 0;
        -webkit-overflow-scrolling: touch
    }

    .simplebar-content-wrapper {
        direction: inherit;
        -webkit-box-sizing: border-box !important;
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
        padding: 0 !important
    }

    .simplebar-content-wrapper::-webkit-scrollbar,
    .simplebar-hide-scrollbar::-webkit-scrollbar {
        display: none
    }

    .simplebar-content:after,
    .simplebar-content:before {
        content: " ";
        display: table
    }

    .simplebar-placeholder {
        max-height: 100%;
        max-width: 100%;
        width: 100%;
        pointer-events: none
    }

    .simplebar-height-auto-observer-wrapper {
        -webkit-box-sizing: inherit !important;
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
        -webkit-box-flex: inherit;
        -ms-flex-positive: inherit;
        flex-grow: inherit;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        -ms-flex-preferred-size: 0;
        flex-basis: 0
    }

    .simplebar-height-auto-observer {
        -webkit-box-sizing: inherit;
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
        z-index: -1
    }

    .simplebar-track {
        z-index: 1;
        position: absolute;
        right: 0;
        bottom: 0;
        pointer-events: none;
        overflow: hidden
    }

    [data-simplebar].simplebar-dragging .simplebar-content {
        pointer-events: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-user-select: none
    }

    [data-simplebar].simplebar-dragging .simplebar-track {
        pointer-events: all
    }

    .simplebar-scrollbar {
        position: absolute;
        right: 2px;
        width: 6px;
        min-height: 10px
    }

    .simplebar-scrollbar:before {
        position: absolute;
        content: "";
        background: #a2adb7;
        border-radius: 7px;
        left: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: opacity .2s linear;
        transition: opacity .2s linear
    }

    .simplebar-scrollbar.simplebar-visible:before {
        opacity: .5;
        -webkit-transition: opacity 0s linear;
        transition: opacity 0s linear
    }

    .simplebar-track.simplebar-vertical {
        top: 0;
        width: 11px
    }

    .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
        top: 2px;
        bottom: 2px
    }

    .simplebar-track.simplebar-horizontal {
        left: 0;
        height: 11px
    }

    .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
        height: 100%;
        left: 2px;
        right: 2px
    }

    .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
        right: auto;
        left: 0;
        top: 2px;
        height: 7px;
        min-height: 0;
        min-width: 10px;
        width: auto
    }

    [data-simplebar-direction=rtl] .simplebar-track.simplebar-vertical {
        right: auto;
        left: 0
    }

    .hs-dummy-scrollbar-size {
        direction: rtl;
        position: fixed;
        opacity: 0;
        visibility: hidden;
        height: 500px;
        width: 500px;
        overflow-y: hidden;
        overflow-x: scroll
    }

    .simplebar-hide-scrollbar {
        position: fixed;
        left: 0;
        visibility: hidden;
        overflow-y: scroll;
        scrollbar-width: none
    }

    .custom-scroll {
        height: 100%
    }

    [data-simplebar-track=primary] .simplebar-scrollbar:before {
        background: #4b93ff
    }

    [data-simplebar-track=secondary] .simplebar-scrollbar:before {
        background: #7c6bff
    }

    [data-simplebar-track=success] .simplebar-scrollbar:before {
        background: #06d6a0
    }

    [data-simplebar-track=info] .simplebar-scrollbar:before {
        background: #1ea6d3
    }

    [data-simplebar-track=warning] .simplebar-scrollbar:before {
        background: #f1be46
    }

    [data-simplebar-track=danger] .simplebar-scrollbar:before {
        background: #ef476f
    }

    [data-simplebar-track=light] .simplebar-scrollbar:before {
        background: #f3f6f9
    }

    [data-simplebar-track=dark] .simplebar-scrollbar:before {
        background: #0b1729
    }

    code[class*=language-],
    pre[class*=language-] {
        color: #000;
        background: 0 0;
        text-shadow: 0 1px #fff;
        font-family: Consolas, Monaco, "Andale Mono", "Ubuntu Mono", monospace;
        font-size: 1em;
        text-align: left;
        white-space: pre;
        word-spacing: normal;
        word-break: normal;
        word-wrap: normal;
        line-height: 1.5;
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4;
        -webkit-hyphens: none;
        -ms-hyphens: none;
        hyphens: none
    }

    code[class*=language-] ::-moz-selection,
    code[class*=language-]::-moz-selection,
    pre[class*=language-] ::-moz-selection,
    pre[class*=language-]::-moz-selection {
        text-shadow: none;
        background: #b3d4fc
    }

    code[class*=language-] ::-moz-selection,
    code[class*=language-]::-moz-selection,
    pre[class*=language-] ::-moz-selection,
    pre[class*=language-]::-moz-selection {
        text-shadow: none;
        background: #b3d4fc
    }

    code[class*=language-] ::selection,
    code[class*=language-]::selection,
    pre[class*=language-] ::selection,
    pre[class*=language-]::selection {
        text-shadow: none;
        background: #b3d4fc
    }

    @media print {

        code[class*=language-],
        pre[class*=language-] {
            text-shadow: none
        }
    }

    pre[class*=language-] {
        margin: 0;
        overflow: auto
    }

    :not(pre)>code[class*=language-],
    pre[class*=language-] {
        background: var(--tb-card-bg-custom) !important
    }

    :not(pre)>code[class*=language-] {
        padding: .1em;
        border-radius: .3em;
        white-space: normal
    }

    .token.cdata,
    .token.comment,
    .token.doctype,
    .token.prolog {
        color: #708090
    }

    .token.punctuation {
        color: #999
    }

    .token.namespace {
        opacity: .7
    }

    .token.boolean,
    .token.constant,
    .token.deleted,
    .token.number,
    .token.property,
    .token.symbol,
    .token.tag {
        color: #ef476f
    }

    .token.attr-name,
    .token.builtin,
    .token.char,
    .token.inserted,
    .token.selector,
    .token.string {
        color: #690
    }

    .language-css .token.string,
    .style .token.string,
    .token.entity,
    .token.operator,
    .token.url {
        color: #9a6e3a;
        background: hsla(0, 0%, 100%, .5)
    }

    .token.atrule,
    .token.attr-value,
    .token.keyword {
        color: #07a
    }

    .token.class-name,
    .token.function {
        color: #d63284
    }

    .token.important,
    .token.regex,
    .token.variable {
        color: #e90
    }

    .token.bold,
    .token.important {
        font-weight: 700
    }

    .token.italic {
        font-style: italic
    }

    .token.entity {
        cursor: help
    }

    :not(pre)>code[class*=language-],
    pre[class*=language-] {
        background: #eff2f7
    }

    code[class*=language-],
    pre[class*=language-] {
        color: #878a99;
        text-shadow: none
    }

    .language-js::-webkit-scrollbar,
    .language-markup::-webkit-scrollbar {
        -webkit-appearance: none
    }

    .language-js::-webkit-scrollbar:vertical,
    .language-markup::-webkit-scrollbar:vertical {
        width: 10px
    }

    .language-js::-webkit-scrollbar:horizontal,
    .language-markup::-webkit-scrollbar:horizontal {
        height: 10px
    }

    .language-js::-webkit-scrollbar-thumb,
    .language-markup::-webkit-scrollbar-thumb {
        background-color: rgba(var(--tb-dark-rgb), .1);
        border-radius: 10px;
        border: 2px solid var(--tb-light)
    }

    .language-js::-webkit-scrollbar-track,
    .language-markup::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: var(--tb-light)
    }

    #scroll-top {
        width: 30px;
        height: 30px;
        position: fixed;
        bottom: 65px;
        right: 30px;
        background: #343a40;
        border-color: transparent;
        border-radius: 3px;
        color: #fff;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .btn-clipboard {
        position: absolute !important;
        right: 15px !important;
        z-index: 1 !important
    }

    div.code-toolbar>.toolbar {
        opacity: 1 !important
    }

    div.code-toolbar>.toolbar button {
        display: inline-block !important;
        margin: .375rem .5rem !important;
        padding: .25rem .75rem !important;
        -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out !important;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out !important;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out !important;
        border-radius: .2rem !important;
        border: 1px solid rgba(var(--tb-primary-rgb), .35) !important;
        background-color: transparent;
        color: var(--tb-primary) !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    div.code-toolbar>.toolbar button:focus {
        outline: 0 !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    div.code-toolbar>.toolbar button:hover {
        background-color: var(--tb-primary) !important;
        color: #fff !important
    }

    .swal2-container .swal2-title {
        padding: 24px 24px 0;
        font-size: 20px;
        font-weight: 500
    }

    .swal2-popup {
        padding-bottom: 24px;
        border-radius: var(--tb-border-radius-lg);
        background-color: var(--tb-secondary-bg);
        color: var(--tb-body-color)
    }

    .swal2-popup .swal2-title {
        color: var(--tb-heading-color)
    }

    .swal2-popup .swal2-html-container {
        color: var(--tb-body-color)
    }

    .swal2-footer {
        border-top: 1px solid var(--tb-border-color);
        color: var(--tb-body-color)
    }

    .swal2-html-container {
        font-size: 16px
    }

    .swal2-icon.swal2-question {
        border-color: #1ea6d3;
        color: #1ea6d3
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
        background-color: #06d6a0
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        border-color: rgba(6, 214, 160, .3)
    }

    .swal2-icon.swal2-warning {
        border-color: #f1be46;
        color: #f1be46
    }

    .swal2-styled:focus {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .swal2-loader {
        border-color: var(--tb-primary) transparent var(--tb-primary) transparent
    }

    .swal2-timer-progress-bar {
        background-color: rgba(6, 214, 160, .4)
    }

    .swal2-progress-steps .swal2-progress-step {
        background: var(--tb-primary)
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: var(--tb-primary)
    }

    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step,
    .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
        background: rgba(var(--tb-primary-rgb), .3)
    }

    .swal2-progress-steps .swal2-progress-step-line {
        background: var(--tb-primary)
    }

    .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
        border-left-color: var(--tb-primary) !important;
        border-right-color: var(--tb-primary) !important
    }

    .swal2-file,
    .swal2-input,
    .swal2-textarea {
        border: 1px solid var(--tb-border-color-translucent)
    }

    .swal2-file:focus,
    .swal2-input:focus,
    .swal2-textarea:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #5d9eff
    }

    .swal2-input {
        height: auto;
        display: block;
        padding: .6rem .9rem;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--tb-secondary-color);
        background-color: var(--tb-secondary-bg);
        background-clip: padding-box;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent)
    }

    .swal2-close {
        font-family: var(--tb-font-sans-serif);
        font-weight: 300;
        font-size: 28px
    }

    .swal2-close:focus {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .swal2-close:hover {
        color: var(--tb-primary)
    }

    .swal2-validation-message {
        background-color: transparent
    }

    .dropzone {
        min-height: 230px;
        border: 2px dashed var(--tb-border-color);
        background: var(--tb-card-bg-custom);
        border-radius: 6px
    }

    .dropzone .dz-message {
        font-size: 24px;
        width: 100%;
        margin: 1em 0
    }

    [data-dz-thumbnail] {
        width: 100%;
        height: 100%
    }

    .nested-list .list-group-item {
        background-color: rgba(var(--tb-primary-rgb), .05);
        border-color: rgba(var(--tb-primary-rgb), .05)
    }

    .nested-1,
    .nested-2,
    .nested-3,
    .nested-list {
        margin-top: 5px
    }

    .nested-sortable-handle .handle {
        position: absolute;
        left: 0;
        top: 0;
        width: 42px;
        height: 42px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        cursor: -webkit-grab;
        cursor: grab
    }

    .nested-sortable-handle .list-group-item {
        padding-left: 42px
    }

    .shepherd-element {
        background: var(--tb-card-bg-custom);
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px
    }

    .shepherd-has-title .shepherd-content .shepherd-header {
        background-color: var(--tb-light);
        padding: .5rem .75rem
    }

    .shepherd-has-title .shepherd-content .shepherd-cancel-icon {
        color: rgba(var(--tb-dark-rgb), .75)
    }

    .shepherd-has-title .shepherd-content .shepherd-cancel-icon:hover {
        color: rgba(var(--tb-dark-rgb), .75)
    }

    .shepherd-element.shepherd-has-title[data-popper-placement^=bottom]>.shepherd-arrow:before {
        background-color: var(--tb-light)
    }

    .shepherd-title {
        font-size: 15px;
        font-weight: 500;
        color: var(--tb-body-color)
    }

    .shepherd-text {
        padding: .75rem;
        font-size: .875rem;
        color: var(--tb-body-color)
    }

    .shepherd-button.btn-success:not(:disabled):hover {
        background: #06ca97;
        color: #fff
    }

    .shepherd-button.btn-light:not(:disabled):hover {
        background: rgba(var(--tb-light-rgb), .75);
        color: var(--tb-dark)
    }

    .shepherd-button.btn-primary:not(:disabled):hover {
        background: #3e8bff;
        color: #fff
    }

    .shepherd-footer {
        padding: 0 .75rem .75rem
    }

    .shepherd-arrow,
    .shepherd-arrow:before {
        content: "\ea75";
        font-family: remixicon;
        font-size: 24px;
        z-index: 1;
        background-color: transparent !important;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        color: var(--tb-primary)
    }

    .shepherd-element[data-popper-placement^=bottom]>.shepherd-arrow {
        top: -18px
    }

    .shepherd-button {
        margin-right: .5rem
    }

    .swiper-button-next,
    .swiper-button-prev {
        height: 32px;
        width: 32px;
        background-color: rgba(var(--tb-primary-rgb), .2);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
        border-radius: 8px
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-family: remixicon;
        font-size: 28px;
        color: rgba(var(--tb-primary-rgb), 1);
        -webkit-transition: all .3s ease;
        transition: all .3s ease
    }

    .swiper-button-prev::after {
        content: "\ea64" !important
    }

    .swiper-button-next::after {
        content: "\ea6e" !important
    }

    .swiper-pagination-bullet {
        width: 22px;
        height: 5px;
        background-color: #fff;
        border-radius: 50px;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .swiper-pagination-bullet .swiper-pagination-bullet-active {
        opacity: 1
    }

    .dynamic-pagination .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background-color: #fff;
        opacity: .5;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .dynamic-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
        opacity: 1;
        width: 20px
    }

    .swiper-pagination-fraction {
        color: #fff;
        font-size: 16px;
        background-color: rgba(0, 0, 0, .3);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px)
    }

    .pagination-custom .swiper-pagination-bullet {
        height: 25px;
        width: 25px;
        line-height: 25px;
        border-radius: 8px;
        background-color: #fff;
        opacity: .5;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .pagination-custom .swiper-pagination-bullet.swiper-pagination-bullet-active {
        color: #7c6bff;
        opacity: 1
    }

    .swiper-pagination-progressbar {
        height: 6px !important;
        background-color: rgba(6, 214, 160, .25)
    }

    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
        background-color: #06d6a0
    }

    .swiper-scrollbar {
        background-color: rgba(255, 255, 255, .35);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
        padding: 1.2px;
        height: 6px !important
    }

    .swiper-scrollbar .swiper-scrollbar-drag {
        background-color: #fff
    }

    .swiper-pagination-dark .swiper-pagination-bullet {
        background-color: #7c6bff
    }

    .swiper-pagination-dark .dynamic-pagination .swiper-pagination-bullet {
        background-color: #7c6bff
    }

    .swiper-pagination-dark.pagination-custom .swiper-pagination-bullet {
        color: #fff
    }

    .swiper-pagination-dark.pagination-custom .swiper-pagination-bullet.swiper-pagination-bullet-active {
        opacity: 1
    }

    .swiper-pagination-dark.swiper-scrollbar {
        background-color: rgba(11, 23, 41, .35)
    }

    .multi-wrapper {
        border: none;
        position: relative
    }

    .multi-wrapper::before {
        content: "\ea61";
        position: absolute;
        font-family: remixicon;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        bottom: 86px;
        width: 32px;
        height: 32px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 16px;
        border-radius: 50%;
        color: var(--tb-tertiary-color);
        background-color: var(--tb-tertiary-bg);
        z-index: 1
    }

    .multi-wrapper .non-selected-wrapper {
        border: 1px solid var(--tb-border-color-translucent);
        background-color: var(--tb-secondary-bg);
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .multi-wrapper .non-selected-wrapper::-webkit-scrollbar,
    .multi-wrapper .selected-wrapper::-webkit-scrollbar {
        -webkit-appearance: none
    }

    .multi-wrapper .non-selected-wrapper::-webkit-scrollbar:vertical,
    .multi-wrapper .selected-wrapper::-webkit-scrollbar:vertical {
        width: 10px
    }

    .multi-wrapper .non-selected-wrapper::-webkit-scrollbar:horizontal,
    .multi-wrapper .selected-wrapper::-webkit-scrollbar:horizontal {
        height: 9px
    }

    .multi-wrapper .non-selected-wrapper::-webkit-scrollbar-thumb,
    .multi-wrapper .selected-wrapper::-webkit-scrollbar-thumb {
        background-color: rgba(var(--tb-dark-rgb), .2);
        border-radius: 10px;
        border: 2px solid var(--tb-secondary-bg)
    }

    .multi-wrapper .non-selected-wrapper::-webkit-scrollbar-track,
    .multi-wrapper .selected-wrapper::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: var(--tb-secondary-bg)
    }

    .multi-wrapper .item-group .group-label {
        font-size: 12px
    }

    .multi-wrapper .item {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .item:hover {
        background-color: rgba(var(--tb-primary-rgb), .1)
    }

    .multi-wrapper .selected-wrapper {
        border: 1px solid var(--tb-border-color-translucent);
        background: var(--tb-secondary-bg);
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem
    }

    .multi-wrapper .search-input {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        padding: .6rem .9rem;
        font-size: .875rem;
        color: var(--tb-secondary-color);
        background-color: var(--tb-secondary-bg);
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem;
        margin-bottom: 16px
    }

    .multi-wrapper .search-input::-webkit-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .search-input::-moz-placeholder {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .search-input:-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .search-input::-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .search-input::placeholder {
        color: var(--tb-secondary-color)
    }

    .multi-wrapper .header {
        font-weight: 600;
        color: var(--tb-tertiary-color)
    }

    .pcr-app {
        background: var(--tb-secondary-bg);
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        border-radius: 4px;
        border: 1px solid var(--tb-border-color-translucent)
    }

    .pickr .pcr-button {
        height: 60px;
        width: 150px;
        border-radius: .25rem;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .pickr .pcr-button::after,
    .pickr .pcr-button::before {
        border-radius: .25rem
    }

    .pcr-app[data-theme=classic] .pcr-selection .pcr-color-preview {
        margin-right: .75em;
        margin-left: 0
    }

    .pcr-app[data-theme=classic] .pcr-selection .pcr-color-chooser,
    .pcr-app[data-theme=classic] .pcr-selection .pcr-color-opacity {
        margin-left: .75em;
        margin-right: 0
    }

    .pcr-app[data-theme=monolith] .pcr-result {
        min-width: 100%
    }

    .pcr-app .pcr-interaction .pcr-type.active {
        background: var(--tb-primary)
    }

    .pcr-app .pcr-interaction .pcr-result {
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color);
        border: 1px solid var(--tb-border-color-translucent);
        border-radius: .25rem
    }

    .pcr-app .pcr-interaction input {
        border-radius: .25rem !important
    }

    .pcr-app .pcr-interaction input:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: var(--tb-secondary-bg);
        border-color: #5d9eff
    }

    .pcr-app .pcr-interaction .pcr-save {
        background: #06d6a0 !important
    }

    .pcr-app .pcr-interaction .pcr-cancel,
    .pcr-app .pcr-interaction .pcr-clear {
        background: #ef476f !important
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        height: auto
    }

    .input-step {
        border: 1px solid var(--tb-border-color-translucent);
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        overflow: visible;
        height: 37.5px;
        border-radius: .25rem;
        background: var(--tb-secondary-bg);
        padding: 4px
    }

    .input-step input {
        width: 4em;
        height: 100%;
        text-align: center;
        border: 0;
        background: 0 0;
        color: var(--tb-secondary-color);
        border-radius: .25rem
    }

    .input-step input:focus-visible {
        outline: 0
    }

    .input-step button {
        width: 1.4em;
        font-weight: 300;
        height: 100%;
        line-height: .1em;
        font-size: 1.4em;
        padding: .2em !important;
        background: var(--tb-light);
        color: var(--tb-secondary-color);
        border: none;
        border-radius: .25rem
    }

    .input-step.light {
        background: var(--tb-light)
    }

    .input-step.light button {
        background-color: var(--tb-secondary-bg)
    }

    .input-step.light-input {
        background: var(--tb-light)
    }

    .input-step.light-input input {
        background-color: var(--tb-secondary-bg)
    }

    .input-step.full-width {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .input-step.full-width button {
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .input-step.full-width input {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1
    }

    .input-step.step-primary button {
        background-color: #4b93ff;
        color: #fff
    }

    .input-step.step-secondary button {
        background-color: #7c6bff;
        color: #fff
    }

    .input-step.step-success button {
        background-color: #06d6a0;
        color: #fff
    }

    .input-step.step-info button {
        background-color: #1ea6d3;
        color: #fff
    }

    .input-step.step-warning button {
        background-color: #f1be46;
        color: #fff
    }

    .input-step.step-danger button {
        background-color: #ef476f;
        color: #fff
    }

    .input-step.step-light button {
        background-color: #f3f6f9;
        color: #fff
    }

    .input-step.step-dark button {
        background-color: #0b1729;
        color: #fff
    }

    .ck {
        font-family: var(--tb-font-sans-serif) !important
    }

    .ck.ck-reset_all,
    .ck.ck-reset_all * {
        color: var(--tb-secondary-color) !important
    }

    .ck.ck-toolbar {
        background: rgba(var(--tb-light-rgb), .75) !important
    }

    .ck p {
        margin-bottom: 0
    }

    .ck.ck-toolbar {
        border: 1px solid var(--tb-border-color-translucent) !important
    }

    .ck.ck-toolbar.ck-toolbar_grouping>.ck-toolbar__items {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .ck.ck-toolbar .ck.ck-toolbar__separator {
        background: 0 0 !important
    }

    .ck.ck-editor__main>.ck-editor__editable {
        border-top: 0 !important;
        background-color: var(--tb-secondary-bg) !important;
        border-color: var(--tb-border-color-translucent) !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .ck.ck-dropdown__panel {
        background: var(--tb-secondary-bg) !important;
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        -webkit-animation-name: DropDownSlide;
        animation-name: DropDownSlide;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        border-radius: .3rem
    }

    .ck.ck-list {
        background: var(--tb-secondary-bg) !important
    }

    .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_ne,
    .ck.ck-dropdown .ck-dropdown__panel.ck-dropdown__panel_se {
        left: 0;
        right: auto !important
    }

    .ck.ck-editor__editable_inline[dir=ltr] {
        text-align: left !important
    }

    .ck.ck-dropdown__panel {
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12) !important;
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12) !important;
        border-radius: .3rem !important;
        border: 1px solid var(--tb-border-color-translucent) !important
    }

    .ck.ck-button:active,
    .ck.ck-button:focus,
    a.ck.ck-button:active,
    a.ck.ck-button:focus {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid var(--tb-light) !important
    }

    .ck.ck-button:not(.ck-disabled):hover,
    a.ck.ck-button:not(.ck-disabled):hover {
        background: var(--tb-light) !important
    }

    .ck.ck-button.ck-on,
    a.ck.ck-button.ck-on {
        background: var(--tb-light) !important
    }

    .ck-rounded-corners .ck.ck-editor__top .ck-sticky-panel .ck-toolbar,
    .ck.ck-editor__top .ck-sticky-panel .ck-toolbar.ck-rounded-corners {
        border-radius: .25rem !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important
    }

    .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable,
    .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
        border-radius: .25rem !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important
    }

    .ck-editor__editable {
        min-height: 245px !important
    }

    .ck[class*=ck-heading_heading] {
        font-weight: 500 !important
    }

    .ck.ck-button.ck-on:not(.ck-disabled):active,
    .ck.ck-button.ck-on:not(.ck-disabled):hover,
    a.ck.ck-button.ck-on:not(.ck-disabled):active,
    a.ck.ck-button.ck-on:not(.ck-disabled):hover {
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .ck.ck-tooltip .ck-tooltip__text {
        background: #0b1729 !important;
        color: #f3f6f9 !important
    }

    .ck.ck-input-text {
        background: var(--tb-secondary-bg) !important;
        border: 1px solid var(--tb-border-color-translucent) !important
    }

    .ck.ck-input-text:focus {
        border: 1px solid #5d9eff !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .ck.ck-balloon-panel {
        background: var(--tb-secondary-bg) !important;
        border: 1px solid var(--tb-border-color-translucent) !important
    }

    .ck.ck-balloon-panel[class*=arrow_n]:after {
        border-bottom-color: var(--tb-secondary-bg) !important
    }

    .ck.ck-balloon-panel[class*=arrow_n]::before {
        border-bottom-color: var(--tb-border-color-translucent) !important
    }

    .ck.ck-labeled-field-view>.ck.ck-labeled-field-view__input-wrapper>.ck.ck-label {
        background: var(--tb-secondary-bg) !important
    }

    .ck-editor-reverse .ck-editor {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse
    }

    .ck-editor-reverse .ck.ck-editor__main>.ck-editor__editable {
        border: 1px solid var(--tb-border-color-translucent) !important;
        border-bottom: 0 !important
    }

    .ck-editor-reverse .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable,
    .ck-editor-reverse .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
        border-radius: .25rem !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important
    }

    .ck-editor-reverse .ck-rounded-corners .ck.ck-editor__top .ck-sticky-panel .ck-toolbar,
    .ck-editor-reverse .ck.ck-editor__top .ck-sticky-panel .ck-toolbar.ck-rounded-corners {
        border-radius: .25rem !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important
    }

    [dir=rtl] .ck.ck-toolbar>.ck-toolbar__items {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse
    }

    .gridjs-container {
        color: var(--tb-secondary-color);
        padding: 0;
        display: block
    }

    .gridjs-wrapper {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid var(--tb-border-color-translucent);
        border-radius: 0
    }

    .gridjs-wrapper::-webkit-scrollbar {
        -webkit-appearance: none
    }

    .gridjs-wrapper::-webkit-scrollbar:vertical {
        width: 12px
    }

    .gridjs-wrapper::-webkit-scrollbar:horizontal {
        height: 12px
    }

    .gridjs-wrapper::-webkit-scrollbar-thumb {
        background-color: rgba(var(--tb-dark-rgb), .075);
        border-radius: 10px;
        border: 2px solid var(--tb-card-bg-custom)
    }

    .gridjs-wrapper::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: var(--tb-card-bg-custom)
    }

    .gridjs-footer {
        border: none !important;
        padding: 12px 0 0
    }

    .gridjs-table {
        width: 100%
    }

    .gridjs-tbody,
    td.gridjs-td {
        background-color: transparent
    }

    td.gridjs-td,
    th.gridjs-th {
        border: 1px solid var(--tb-border-color-translucent);
        padding: .75rem .6rem
    }

    th.gridjs-th {
        border-top: 0;
        color: var(--tb-secondary-color);
        background-color: rgba(var(--tb-light-rgb), .75)
    }

    th.gridjs-th-sort:focus,
    th.gridjs-th-sort:hover {
        background-color: rgba(var(--tb-light-rgb), .85)
    }

    .gridjs-head {
        padding-top: 0
    }

    .gridjs-footer {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid var(--tb-border-color-translucent);
        border-top: 0;
        background-color: transparent
    }

    .gridjs-summary {
        color: var(--tb-tertiary-color);
        margin-top: 8px !important
    }

    .gridjs-pagination .gridjs-pages button {
        margin-left: .3rem;
        border-radius: .25rem !important;
        border: 1px solid var(--tb-border-color-translucent);
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color)
    }

    .gridjs-pagination .gridjs-pages button:last-child {
        border-right: 1px solid var(--tb-border-color-translucent)
    }

    .gridjs-pagination .gridjs-pages button:disabled,
    .gridjs-pagination .gridjs-pages button:hover:disabled,
    .gridjs-pagination .gridjs-pages button[disabled] {
        color: var(--tb-secondary-color);
        background-color: var(--tb-secondary-bg)
    }

    .gridjs-pagination .gridjs-pages button:hover {
        background-color: var(--tb-tertiary-bg);
        color: var(--tb-link-hover-color)
    }

    .gridjs-pagination .gridjs-pages button:focus {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .gridjs-pagination .gridjs-pages button:first-child:hover,
    .gridjs-pagination .gridjs-pages button:last-child:hover {
        background-color: transparent
    }

    .gridjs-pagination .gridjs-pages button.gridjs-currentPage {
        background-color: #4b93ff;
        color: #fff;
        border-color: #4b93ff;
        font-weight: 500
    }

    @media (max-width: 767.98px) {
        .gridjs-pagination .gridjs-pages {
            float: left !important;
            margin-top: 10px
        }

        .gridjs-pagination .gridjs-pages button {
            margin-left: 0
        }
    }

    .gridjs-search {
        position: relative;
        float: left
    }

    .gridjs-search::before {
        content: "\f0d1";
        font-family: remixicon;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 10px;
        font-size: 14px;
        color: var(--tb-tertiary-color)
    }

    input.gridjs-input {
        border-color: var(--tb-border-color-translucent);
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color);
        line-height: 1.5;
        padding: .6rem .9rem .6rem 2.025rem;
        border-radius: .25rem;
        font-size: .875rem
    }

    input.gridjs-input:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: #5d9eff;
        background-color: var(--tb-secondary-bg)
    }

    input.gridjs-input::-webkit-input-placeholder {
        color: var(--tb-secondary-color)
    }

    input.gridjs-input::-moz-placeholder {
        color: var(--tb-secondary-color)
    }

    input.gridjs-input:-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    input.gridjs-input::-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    input.gridjs-input::placeholder {
        color: var(--tb-secondary-color)
    }

    th.gridjs-th .gridjs-th-content {
        float: none;
        display: inline-block;
        vertical-align: middle;
        font-weight: 600
    }

    button.gridjs-sort {
        float: none;
        display: inline-block;
        vertical-align: middle;
        width: 10px;
        height: 20px
    }

    th.gridjs-th-sort .gridjs-th-content {
        width: calc(100% - 10px)
    }

    button.gridjs-sort-asc,
    button.gridjs-sort-desc {
        background-size: 7px
    }

    .table-card .gridjs-head {
        padding: 16px 16px 5px
    }

    .table-card .gridjs-wrapper {
        border-top: 0;
        border-radius: 0;
        border-width: 1px 0
    }

    .table-card .gridjs-footer {
        padding: 8px 16px
    }

    .gridjs-tr-selected td {
        background-color: rgba(var(--tb-tertiary-bg-rgb), 1)
    }

    .gridjs-tr-selected .gridjs-td .gridjs-checkbox[type=checkbox] {
        background-color: #4b93ff;
        border-color: #4b93ff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")
    }

    .gridjs-td .gridjs-checkbox {
        width: 1.1em;
        height: 1.1em;
        vertical-align: top;
        background-color: var(--tb-secondary-bg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .gridjs-td .gridjs-checkbox[type=checkbox] {
        border-radius: .25em
    }

    .gridjs-border-none td.gridjs-td,
    .gridjs-border-none th.gridjs-th {
        border-right-width: 0;
        border-left-width: 0
    }

    .gridjs-loading-bar {
        background-color: var(--tb-card-bg-custom)
    }

    [data-layout-mode=dark] button.gridjs-sort-asc,
    [data-layout-mode=dark] button.gridjs-sort-desc,
    [data-layout-mode=dark] button.gridjs-sort-neutral {
        -webkit-filter: invert(1) grayscale(100%) brightness(200%);
        filter: invert(1) grayscale(100%) brightness(200%)
    }

    .listjs-pagination {
        margin-bottom: 0;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        gap: 8px
    }

    .listjs-pagination li .page {
        display: block;
        padding: .375rem .75rem;
        color: var(--tb-secondary-color);
        background-color: var(--tb-secondary-bg);
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem
    }

    .listjs-pagination li.active .page {
        color: #fff;
        background-color: #4b93ff;
        border-color: #4b93ff
    }

    .pagination-wrap {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .pagination-wrap a {
        text-decoration: none;
        display: inline-block
    }

    .pagination-next,
    .pagination-prev {
        color: var(--tb-primary);
        font-weight: 500;
        padding: .375rem .75rem;
        background-color: var(--tb-secondary-bg);
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem
    }

    .pagination-next:hover,
    .pagination-prev:hover {
        color: #b1d0ff
    }

    .pagination-next.disabled,
    .pagination-prev.disabled {
        color: var(--tb-tertiary-color);
        cursor: default
    }

    .pagination-next.disabled:hover,
    .pagination-prev.disabled:hover {
        color: var(--tb-tertiary-color)
    }

    .apex-charts {
        min-height: 10px !important
    }

    .apex-charts text {
        font-family: var(--tb-font-sans-serif) !important
    }

    .apex-charts .apexcharts-canvas {
        margin: 0 auto
    }

    .apexcharts-tooltip-text,
    .apexcharts-tooltip-title {
        color: var(--tb-primary);
        font-family: var(--tb-font-sans-serif) !important
    }

    .apexcharts-tooltip {
        border: 1px solid var(--tb-border-color-translucent) !important;
        background-color: var(--tb-secondary-bg) !important;
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px !important;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px !important
    }

    .apexcharts-tooltip * {
        font-family: var(--tb-font-sans-serif) !important;
        color: #878a99 !important
    }

    .apexcharts-tooltip .apexcharts-tooltip-title {
        background-color: rgba(var(--tb-light-rgb), .75) !important;
        border-bottom: 1px solid var(--tb-border-color-translucent) !important
    }

    .apexcharts-tooltip.apexcharts-theme-dark * {
        color: #fff !important
    }

    .apexcharts-legend-series {
        font-weight: 500
    }

    .apexcharts-gridline {
        pointer-events: none;
        stroke: rgba(var(--tb-light-rgb), .75)
    }

    .apexcharts-legend-text {
        color: #878a99 !important;
        font-family: var(--tb-font-sans-serif) !important;
        font-size: 13px !important
    }

    .apexcharts-pie-label {
        fill: #fff !important
    }

    .apexcharts-subtitle-text,
    .apexcharts-title-text {
        fill: #adb5bd
    }

    .apexcharts-xaxis text,
    .apexcharts-yaxis text {
        font-size: 12px;
        font-weight: 600;
        font-family: var(--tb-font-sans-serif) !important;
        fill: #adb5bd
    }

    .apexcharts-yaxis-title {
        font-weight: 500
    }

    #dynamicloadedchart-wrap {
        margin: 0 auto;
        max-width: 800px;
        position: relative
    }

    .chart-box {
        padding-left: 0
    }

    #chart-quarter,
    #chart-year {
        width: 96%;
        max-width: 48%;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 0;
        padding-top: 20px;
        background: var(--tb-secondary-bg);
        border: 1px solid var(--tb-border-color-translucent)
    }

    #chart-year {
        float: left;
        position: relative;
        -webkit-transition: 1s ease transform;
        transition: 1s ease transform;
        z-index: 3
    }

    #chart-year.chart-quarter-activated {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        -webkit-transition: 1s ease transform;
        transition: 1s ease transform
    }

    #chart-quarter {
        float: left;
        position: relative;
        z-index: -2;
        -webkit-transition: 1s ease transform;
        transition: 1s ease transform
    }

    #chart-quarter.active {
        -webkit-transition: 1.1s ease-in-out transform;
        transition: 1.1s ease-in-out transform;
        -webkit-transform: translateX(0);
        transform: translateX(0);
        z-index: 1
    }

    @media screen and (min-width: 480px) {
        #chart-year {
            -webkit-transform: translateX(50%);
            transform: translateX(50%)
        }

        #chart-quarter {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
    }

    .apexcharts-radar-series line,
    .apexcharts-radar-series polygon {
        stroke: var(--tb-border-color-translucent)
    }

    .apexcharts-pie circle,
    .apexcharts-pie line {
        stroke: var(--tb-border-color-translucent)
    }

    .apexcharts-pie text {
        fill: var(--tb-secondary-color)
    }

    .apex-charts .apexcharts-xaxis line,
    .apex-charts .apexcharts-yaxis line {
        stroke: var(--tb-border-color-translucent)
    }

    .apex-charts .apexcharts-xaxis-tick {
        stroke: var(--tb-border-color-translucent)
    }

    .apex-charts .apexcharts-bar-series path,
    .apex-charts .apexcharts-pie-series path {
        stroke: var(--tb-secondary-bg)
    }

    .apex-charts .apexcharts-radialbar-track path {
        stroke: var(--tb-light)
    }

    .apex-charts .apexcharts-boxPlot-series path {
        stroke: var(--tb-border-color-translucent)
    }

    .apex-charts .apexcharts-heatmap-series rect,
    .apex-charts .apexcharts-treemap rect {
        stroke: var(--tb-secondary-bg)
    }

    .apexcharts-xaxistooltip.apexcharts-theme-light {
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
        color: var(--tb-tertiary-color);
        background: var(--tb-secondary-bg);
        border: 1px solid var(--tb-border-color-translucent);
        font-family: var(--tb-font-sans-serif)
    }

    .apexcharts-xaxistooltip.apexcharts-theme-light::before {
        border-bottom-color: var(--tb-border-color-translucent)
    }

    .gmaps,
    .gmaps-panaroma {
        height: 300px;
        background: #f3f6f9;
        border-radius: 3px
    }

    .gmaps-overlay {
        display: block;
        text-align: center;
        color: #fff;
        font-size: 16px;
        line-height: 40px;
        background: var(--tb-primary);
        border-radius: 4px;
        padding: 10px 20px
    }

    .gmaps-overlay_arrow {
        left: 50%;
        margin-left: -16px;
        width: 0;
        height: 0;
        position: absolute
    }

    .gmaps-overlay_arrow.above {
        bottom: -15px;
        border-left: 16px solid transparent;
        border-right: 16px solid transparent;
        border-top: 16px solid var(--tb-primary)
    }

    .gmaps-overlay_arrow.below {
        top: -15px;
        border-left: 16px solid transparent;
        border-right: 16px solid transparent;
        border-bottom: 16px solid var(--tb-primary)
    }

    .autoComplete_wrapper {
        display: block
    }

    .autoComplete_wrapper>input {
        display: block;
        width: 100%;
        height: auto;
        padding: .6rem .9rem;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--tb-secondary-color);
        background-color: var(--tb-secondary-bg);
        background-clip: padding-box;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem;
        background-image: none
    }

    .autoComplete_wrapper>input::-webkit-input-placeholder {
        padding: 0 !important;
        color: var(--tb-secondary-color) !important;
        font-size: .875rem !important
    }

    .autoComplete_wrapper>input::-moz-placeholder {
        padding: 0 !important;
        color: var(--tb-secondary-color) !important;
        font-size: .875rem !important
    }

    .autoComplete_wrapper>input:-ms-input-placeholder {
        padding: 0 !important;
        color: var(--tb-secondary-color) !important;
        font-size: .875rem !important
    }

    .autoComplete_wrapper>input::-ms-input-placeholder {
        padding: 0 !important;
        color: var(--tb-secondary-color) !important;
        font-size: .875rem !important
    }

    .autoComplete_wrapper>input::placeholder {
        padding: 0 !important;
        color: var(--tb-secondary-color) !important;
        font-size: .875rem !important
    }

    .autoComplete_wrapper>input:focus {
        border: var(--tb-border-width) solid #5d9eff;
        color: var(--tb-secondary-color)
    }

    .autoComplete_wrapper>input:hover {
        color: var(--tb-secondary-color)
    }

    .autoComplete_wrapper>ul {
        border-radius: .25rem;
        border-color: var(--tb-border-color-translucent);
        background-color: var(--tb-secondary-bg);
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        padding: 0;
        overflow: auto;
        max-height: 160px;
        margin: 0;
        -webkit-animation-name: DropDownSlide;
        animation-name: DropDownSlide;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .autoComplete_wrapper>ul>li {
        font-size: .875rem;
        margin: 0;
        padding: .35rem 1.2rem;
        border-radius: 0;
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color)
    }

    .autoComplete_wrapper>ul>li mark {
        color: #ef476f;
        font-weight: 600;
        padding: 1px
    }

    .autoComplete_wrapper>ul>li:hover,
    .autoComplete_wrapper>ul>li[aria-selected=true] {
        color: var(--tb-body-color);
        background-color: var(--tb-tertiary-bg)
    }

    .autoComplete_wrapper>ul .no_result {
        padding: .7rem 1.2rem;
        font-style: italic;
        font-weight: 500
    }

    .jvm-tooltip {
        border-radius: 3px;
        background-color: var(--tb-primary);
        font-family: var(--tb-font-sans-serif);
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        padding: 5px 9px
    }

    .jvm-container text {
        font-family: var(--tb-font-sans-serif);
        font-size: .875rem;
        fill: var(--tb-gray-700)
    }

    .jvm-zoom-btn {
        background-color: var(--tb-primary)
    }

    #jvm-markers-group .jvm-marker {
        width: 18px;
        height: 18px;
        border-radius: 50%
    }

    #SvgjsLine1040 {
        stroke: #4b93ff;
        fill: #1172fa
    }

    .leaflet-map {
        height: 300px
    }

    .leaflet-map.leaflet-container {
        z-index: 0;
        font-family: Switzer
    }

    .fc td,
    .fc th {
        border: var(--tb-border-width) solid var(--tb-border-color-translucent)
    }

    .fc .fc-toolbar h2 {
        font-size: 16px;
        line-height: 30px;
        text-transform: uppercase
    }

    @media (max-width: 767.98px) {

        .fc .fc-toolbar .fc-center,
        .fc .fc-toolbar .fc-left,
        .fc .fc-toolbar .fc-right {
            float: none;
            display: block;
            text-align: center;
            clear: both;
            margin: 10px 0
        }

        .fc .fc-toolbar>*>* {
            float: none
        }

        .fc .fc-toolbar .fc-today-button {
            display: none
        }
    }

    .fc .fc-toolbar .btn {
        text-transform: capitalize
    }

    .fc .fc-col-header-cell {
        background-color: var(--tb-light)
    }

    .fc .fc-col-header-cell-cushion {
        display: block;
        padding: 8px 4px
    }

    .fc .fc-daygrid-day-number {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        padding: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 500;
        margin: 2px
    }

    .fc .fc-daygrid-day.fc-day-today {
        background-color: rgba(var(--tb-primary-rgb), .1)
    }

    .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number {
        background-color: var(--tb-primary);
        color: #fff
    }

    .fc .fc-daygrid-day.fc-day-today {
        background-color: rgba(var(--tb-primary-rgb), .1)
    }

    .fc .fc-timegrid-col.fc-day-today {
        background-color: rgba(var(--tb-primary-rgb), .1)
    }

    .fc .fc-list-event:hover td {
        background: 0 0
    }

    .fc .fc-list-event-title a {
        color: #fff !important
    }

    .fc .fc-col-header,
    .fc .fc-daygrid-body,
    .fc .fc-scrollgrid-sync-table {
        width: 100% !important
    }

    .fc .fc-scrollgrid-section>* {
        border-left: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-top: var(--tb-border-width) solid var(--tb-border-color-translucent)
    }

    .fc .fc-scrollgrid-section-liquid>td {
        border-top: 0
    }

    .fc-theme-bootstrap a:not([href]) {
        color: var(--tb-body-color)
    }

    .fc-event {
        color: #fff
    }

    .fc th.fc-widget-header {
        background: #e9ebec;
        line-height: 20px;
        padding: 10px 0;
        text-transform: uppercase;
        font-weight: 700
    }

    .fc-unthemed .fc-content,
    .fc-unthemed .fc-divider,
    .fc-unthemed .fc-list-heading td,
    .fc-unthemed .fc-list-view,
    .fc-unthemed .fc-popover,
    .fc-unthemed .fc-row,
    .fc-unthemed tbody,
    .fc-unthemed td,
    .fc-unthemed th,
    .fc-unthemed thead {
        border-color: #e9ebec
    }

    .fc-unthemed td.fc-today {
        background: #f6f8fa
    }

    .fc-button {
        background: var(--tb-card-bg-custom);
        border-color: #e9ebec;
        color: #132846;
        text-transform: capitalize;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding: 6px 12px !important;
        height: auto !important
    }

    .fc-state-active,
    .fc-state-disabled,
    .fc-state-down {
        background-color: var(--tb-primary);
        color: #fff;
        text-shadow: none
    }

    .fc-event {
        border-radius: 2px;
        border: none;
        cursor: move;
        font-size: .8125rem;
        margin: 5px 7px;
        padding: 5px 5px;
        text-align: center
    }

    .fc-event,
    .fc-event-dot {
        background-color: var(--tb-primary)
    }

    .fc-daygrid-dot-event.fc-event-mirror,
    .fc-daygrid-dot-event:hover {
        background-color: var(--tb-primary)
    }

    .fc-event-title,
    .fc-sticky {
        font-weight: 600 !important;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .fc-daygrid-event-dot {
        border-color: #fff !important;
        display: none
    }

    .fc-event-time {
        display: none
    }

    .fc-event .fc-content {
        color: #fff
    }

    #external-events .external-event {
        text-align: left;
        padding: 8px 16px;
        margin: 6px 0
    }

    .fc-day-grid-event.fc-h-event.fc-event.fc-start.fc-end.bg-dark .fc-content {
        color: #f3f6f9
    }

    .fc-next-button,
    .fc-prev-button {
        position: relative;
        height: 37.5px;
        width: 37.5px
    }

    .fc-next-button::before,
    .fc-prev-button::before {
        position: absolute;
        font-family: remixicon !important;
        font-size: 20px;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .fc-prev-button::before {
        content: "\ea64"
    }

    .fc-next-button::before {
        content: "\ea6e"
    }

    .fc-toolbar-chunk .btn-group {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .fc-toolbar-chunk .btn-group .btn {
        color: #7c6bff;
        background-color: rgba(124, 107, 255, .15);
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .fc-toolbar-chunk .btn-group .btn.active,
    .fc-toolbar-chunk .btn-group .btn:hover {
        color: #fff;
        background-color: #7c6bff
    }

    .fc-toolbar-chunk .fc-today-button {
        background-color: #7c6bff !important;
        border: #7c6bff
    }

    @media (max-width: 575.98px) {
        .fc-toolbar {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 16px
        }
    }

    #upcoming-event-list .card:last-child {
        margin-bottom: 6px !important
    }

    #event-modal .event-details {
        display: none
    }

    #event-modal .view-event .event-form {
        display: none
    }

    #event-modal .view-event #event-category-tag {
        display: none
    }

    #event-modal .view-event .event-details {
        display: block
    }

    .fc-daygrid-event-harness .fc-daygrid-event {
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px)
    }

    .fc-timegrid-event-harness .fc-timegrid-event {
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px)
    }

    .fc-timegrid-slots table tr {
        border-color: #e9ebec !important
    }

    .fc-list-table {
        border-color: #e9ebec
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-primary-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-primary-subtle .fc-event-title {
        color: #4b93ff !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-primary-subtle .fc-event-title {
        color: #4b93ff !important
    }

    .fc-list-table .fc-list-event.bg-primary-subtle {
        color: #4b93ff !important
    }

    .fc-list-table .fc-list-event.bg-primary-subtle .fc-list-event-title>a {
        color: #4b93ff !important
    }

    .fc-list-table .fc-list-event.bg-primary-subtle .fc-list-event-dot {
        border-color: #4b93ff
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-secondary-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-secondary-subtle .fc-event-title {
        color: #7c6bff !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-secondary-subtle .fc-event-title {
        color: #7c6bff !important
    }

    .fc-list-table .fc-list-event.bg-secondary-subtle {
        color: #7c6bff !important
    }

    .fc-list-table .fc-list-event.bg-secondary-subtle .fc-list-event-title>a {
        color: #7c6bff !important
    }

    .fc-list-table .fc-list-event.bg-secondary-subtle .fc-list-event-dot {
        border-color: #7c6bff
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-success-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-success-subtle .fc-event-title {
        color: #06d6a0 !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-success-subtle .fc-event-title {
        color: #06d6a0 !important
    }

    .fc-list-table .fc-list-event.bg-success-subtle {
        color: #06d6a0 !important
    }

    .fc-list-table .fc-list-event.bg-success-subtle .fc-list-event-title>a {
        color: #06d6a0 !important
    }

    .fc-list-table .fc-list-event.bg-success-subtle .fc-list-event-dot {
        border-color: #06d6a0
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-info-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-info-subtle .fc-event-title {
        color: #1ea6d3 !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-info-subtle .fc-event-title {
        color: #1ea6d3 !important
    }

    .fc-list-table .fc-list-event.bg-info-subtle {
        color: #1ea6d3 !important
    }

    .fc-list-table .fc-list-event.bg-info-subtle .fc-list-event-title>a {
        color: #1ea6d3 !important
    }

    .fc-list-table .fc-list-event.bg-info-subtle .fc-list-event-dot {
        border-color: #1ea6d3
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-warning-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-warning-subtle .fc-event-title {
        color: #f1be46 !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-warning-subtle .fc-event-title {
        color: #f1be46 !important
    }

    .fc-list-table .fc-list-event.bg-warning-subtle {
        color: #f1be46 !important
    }

    .fc-list-table .fc-list-event.bg-warning-subtle .fc-list-event-title>a {
        color: #f1be46 !important
    }

    .fc-list-table .fc-list-event.bg-warning-subtle .fc-list-event-dot {
        border-color: #f1be46
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-danger-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-danger-subtle .fc-event-title {
        color: #ef476f !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-danger-subtle .fc-event-title {
        color: #ef476f !important
    }

    .fc-list-table .fc-list-event.bg-danger-subtle {
        color: #ef476f !important
    }

    .fc-list-table .fc-list-event.bg-danger-subtle .fc-list-event-title>a {
        color: #ef476f !important
    }

    .fc-list-table .fc-list-event.bg-danger-subtle .fc-list-event-dot {
        border-color: #ef476f
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-light-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-light-subtle .fc-event-title {
        color: #f3f6f9 !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-light-subtle .fc-event-title {
        color: #f3f6f9 !important
    }

    .fc-list-table .fc-list-event.bg-light-subtle {
        color: #f3f6f9 !important
    }

    .fc-list-table .fc-list-event.bg-light-subtle .fc-list-event-title>a {
        color: #f3f6f9 !important
    }

    .fc-list-table .fc-list-event.bg-light-subtle .fc-list-event-dot {
        border-color: #f3f6f9
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-dark-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-dark-subtle .fc-event-title {
        color: #0b1729 !important
    }

    .fc-timegrid-event-harness .fc-timegrid-event.bg-dark-subtle .fc-event-title {
        color: #0b1729 !important
    }

    .fc-list-table .fc-list-event.bg-dark-subtle {
        color: #0b1729 !important
    }

    .fc-list-table .fc-list-event.bg-dark-subtle .fc-list-event-title>a {
        color: #0b1729 !important
    }

    .fc-list-table .fc-list-event.bg-dark-subtle .fc-list-event-dot {
        border-color: #0b1729
    }

    .fc-daygrid-event-harness .fc-daygrid-event.bg-dark-subtle .fc-event-main,
    .fc-daygrid-event-harness .fc-daygrid-event.bg-dark-subtle .fc-event-title {
        color: var(--tb-dark) !important
    }

    .fc-direction-ltr {
        direction: ltr
    }

    .fc-direction-ltr .fc-toolbar>*>:not(:first-child) {
        margin-left: .75em
    }

    .fg-emoji-picker {
        width: 250px !important;
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px !important;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px !important;
        top: auto !important;
        bottom: 130px
    }

    .fg-emoji-picker * {
        font-family: var(--tb-font-sans-serif) !important;
        color: var(--tb-body-color) !important
    }

    @media (max-width: 991.98px) {
        .fg-emoji-picker {
            left: 14px !important;
            top: auto !important;
            bottom: 118px
        }
    }

    .fg-emoji-picker .fg-emoji-picker-container-title {
        color: #0b1729 !important
    }

    .fg-emoji-picker .fg-emoji-picker-search {
        height: 40px !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input {
        background-color: var(--tb-secondary-bg) !important;
        color: var(--tb-secondary-color) !important;
        padding: .6rem .9rem !important;
        font-size: .875rem !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input::-webkit-input-placeholder {
        color: var(--tb-secondary-color) !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input::-moz-placeholder {
        color: var(--tb-secondary-color) !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input:-ms-input-placeholder {
        color: var(--tb-secondary-color) !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input::-ms-input-placeholder {
        color: var(--tb-secondary-color) !important
    }

    .fg-emoji-picker .fg-emoji-picker-search input::placeholder {
        color: var(--tb-secondary-color) !important
    }

    .fg-emoji-picker .fg-emoji-picker-search svg {
        fill: var(--tb-body-color) !important;
        right: 11px;
        top: 12px
    }

    .fg-emoji-picker .fg-emoji-picker-categories {
        background-color: #f3f6f9 !important
    }

    .fg-emoji-picker .fg-emoji-picker-categories li.active {
        background-color: rgba(var(--bs-primary-rgb), .2)
    }

    .fg-emoji-picker .fg-emoji-picker-categories a:hover {
        background-color: rgba(var(--bs-primary-rgb), .2)
    }

    .fg-emoji-picker-grid>li:hover {
        background-color: rgba(var(--bs-primary-rgb), .2) !important
    }

    a.fg-emoji-picker-close-button {
        background-color: #e5ecf2 !important
    }

    table.dataTable td.dataTables_empty,
    table.dataTable th.dataTables_empty {
        text-align: center;
        padding: 50px;
        font-weight: 600;
        --tb-table-accent-bg: var(--tb-card-bg-custom)
    }

    table.dataTable>thead .sorting:before,
    table.dataTable>thead .sorting_asc:before,
    table.dataTable>thead .sorting_asc_disabled:before,
    table.dataTable>thead .sorting_desc:before,
    table.dataTable>thead .sorting_desc_disabled:before {
        content: "\f0360";
        position: absolute;
        right: .5rem;
        top: 12px;
        font-size: .8rem;
        font-family: "Material Design Icons"
    }

    table.dataTable>thead .sorting:after,
    table.dataTable>thead .sorting_asc:after,
    table.dataTable>thead .sorting_asc_disabled:after,
    table.dataTable>thead .sorting_desc:after,
    table.dataTable>thead .sorting_desc_disabled:after {
        content: "\f035d";
        position: absolute;
        right: .5rem;
        top: 18px;
        font-size: .8rem;
        font-family: "Material Design Icons"
    }

    table.dataTable>tbody>tr.child span.dtr-title {
        font-weight: 600;
        min-width: 150px
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control::before,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control::before {
        background-color: var(--tb-primary);
        border-color: var(--tb-card-bg-custom)
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr.parent.parent>th.dtr-control::before {
        background-color: #ef476f
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control::before {
        background-color: #ef476f
    }

    table.dataTable>tbody>tr.child span.dtr-title {
        min-width: 135px
    }

    .table-card .dataTables_filter,
    .table-card .dataTables_length {
        padding: 1.2rem 1.2rem;
        padding-bottom: 0
    }

    .table-card .dataTables_info,
    .table-card .dataTables_paginate {
        padding: 1.2rem 1.2rem
    }

    .table-card div.dataTables_wrapper .col-md-6 {
        width: 100%
    }

    .table-card div.dataTables_wrapper div.dataTables_filter input {
        width: calc(100% - 52px)
    }

    .table-card div.dataTables_wrapper div.dataTables_filter label {
        display: block
    }

    div.dtr-modal div.dtr-modal-display {
        background-color: var(--tb-secondary-bg);
        border-color: #e9ebec;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 70%
    }

    div.dtr-modal div.dtr-modal-content {
        padding: 1.25rem
    }

    div.dtr-modal div.dtr-modal-content h2 {
        font-size: 1.09375rem;
        font-weight: 600;
        margin-bottom: 15px
    }

    div.dtr-modal div.dtr-modal-content .dtr-details tr td {
        padding: .75rem .6rem
    }

    div.dtr-modal div.dtr-modal-close {
        font-size: 24px;
        top: 9px;
        right: 11px;
        width: 30px;
        height: 30px;
        line-height: 30px;
        background-color: var(--tb-card-bg-custom);
        border-color: #e9ebec
    }

    div.dtr-modal div.dtr-modal-close:hover {
        background-color: var(--tb-light)
    }

    .dt-buttons a.dt-button,
    .dt-buttons button.dt-button,
    .dt-buttons div.dt-button,
    .dt-buttons input.dt-button {
        border-color: var(--tb-border-color-translucent);
        background: var(--tb-secondary-bg);
        color: var(--tb-secondary-color)
    }

    .toastify {
        padding: 12px 16px;
        color: #fff;
        display: inline-block;
        -webkit-box-shadow: 0 3px 6px -1px rgba(0, 0, 0, .12), 0 10px 36px -4px rgba(77, 96, 232, .3);
        box-shadow: 0 3px 6px -1px rgba(0, 0, 0, .12), 0 10px 36px -4px rgba(77, 96, 232, .3);
        background: #06d6a0;
        position: fixed;
        opacity: 0;
        -webkit-transition: all .4s cubic-bezier(.215, .61, .355, 1);
        transition: all .4s cubic-bezier(.215, .61, .355, 1);
        border-radius: 2px;
        cursor: pointer;
        text-decoration: none;
        max-width: calc(50% - 20px);
        z-index: 2147483647
    }

    .toastify.on {
        opacity: 1
    }

    .toast-close {
        opacity: .4;
        padding: 0 5px;
        position: relative;
        left: 4px;
        margin-left: 4px;
        border: none;
        background: 0 0
    }

    .toastify-right {
        right: 15px
    }

    .toastify-left {
        left: 15px
    }

    .toastify-left .toast-close {
        left: -4px;
        margin-left: 0;
        margin-right: 4px
    }

    .toastify-top {
        top: -150px
    }

    .toastify-bottom {
        bottom: -150px
    }

    .toastify-rounded {
        border-radius: 25px
    }

    .toastify-avatar {
        width: 1.5em;
        height: 1.5em;
        margin: -7px 5px;
        border-radius: 2px
    }

    .toastify-center {
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        max-width: -webkit-fit-content;
        max-width: fit-content;
        max-width: -moz-fit-content
    }

    @media only screen and (max-width: 360px) {

        .toastify-left,
        .toastify-right {
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            max-width: -webkit-fit-content;
            max-width: -moz-fit-content;
            max-width: fit-content
        }
    }

    .flatpickr-calendar {
        background: 0 0;
        opacity: 0;
        display: none;
        text-align: center;
        visibility: hidden;
        padding: 0;
        -webkit-animation: none;
        animation: none;
        direction: ltr;
        border: 0;
        font-size: 14px;
        line-height: 24px;
        border-radius: 5px;
        position: absolute;
        width: 307.875px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        background: var(--tb-secondary-bg);
        -webkit-box-shadow: 1px 0 0 var(--tb-border-color-translucent), -1px 0 0 var(--tb-border-color-translucent), 0 1px 0 var(--tb-border-color-translucent), 0 -1px 0 var(--tb-border-color-translucent), 0 3px 13px rgba(0, 0, 0, .08);
        box-shadow: 1px 0 0 var(--tb-border-color-translucent), -1px 0 0 var(--tb-border-color-translucent), 0 1px 0 var(--tb-border-color-translucent), 0 -1px 0 var(--tb-border-color-translucent), 0 3px 13px rgba(0, 0, 0, .08)
    }

    .flatpickr-calendar.inline,
    .flatpickr-calendar.open {
        opacity: 1;
        max-height: 640px;
        visibility: visible
    }

    .flatpickr-calendar.open {
        display: inline-block;
        z-index: 1056
    }

    .flatpickr-calendar.animate.open {
        -webkit-animation: fpFadeInDown .3s cubic-bezier(.23, 1, .32, 1);
        animation: fpFadeInDown .3s cubic-bezier(.23, 1, .32, 1)
    }

    .flatpickr-calendar.inline {
        display: block;
        position: relative;
        top: 2px;
        width: 100%;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .flatpickr-calendar.inline .flatpickr-rContainer {
        display: block;
        width: 100%
    }

    .flatpickr-calendar.inline .flatpickr-rContainer .flatpickr-days {
        width: 100%;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-top: none;
        border-radius: 0 0 5px 5px
    }

    .flatpickr-calendar.inline .flatpickr-rContainer .flatpickr-days .dayContainer {
        width: 100%;
        min-width: 100%;
        max-width: 100%
    }

    .flatpickr-calendar.inline .flatpickr-rContainer .flatpickr-days .dayContainer .flatpickr-day {
        max-width: 100%;
        border-radius: 4px
    }

    .flatpickr-calendar.inline .flatpickr-time {
        border: var(--tb-border-width) solid var(--tb-border-color-translucent) !important;
        border-radius: .25rem
    }

    .flatpickr-calendar.static {
        position: absolute;
        top: calc(100% + 2px)
    }

    .flatpickr-calendar.static.open {
        z-index: 999;
        display: block
    }

    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
        -webkit-box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
        box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6
    }

    .flatpickr-calendar .hasTime .dayContainer,
    .flatpickr-calendar .hasWeeks .dayContainer {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .flatpickr-calendar .hasWeeks .dayContainer {
        border-left: 0
    }

    .flatpickr-calendar.hasTime .flatpickr-time {
        height: 40px;
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
        height: auto
    }

    .flatpickr-calendar::after,
    .flatpickr-calendar::before {
        position: absolute;
        display: block;
        pointer-events: none;
        border: solid transparent;
        content: "";
        height: 0;
        width: 0;
        left: 22px
    }

    .flatpickr-calendar.arrowRight::after,
    .flatpickr-calendar.arrowRight::before,
    .flatpickr-calendar.rightMost::after,
    .flatpickr-calendar.rightMost::before {
        left: auto;
        right: 22px
    }

    .flatpickr-calendar.arrowCenter::after,
    .flatpickr-calendar.arrowCenter::before {
        left: 50%;
        right: 50%
    }

    .flatpickr-calendar::before {
        border-width: 5px;
        margin: 0 -5px
    }

    .flatpickr-calendar::after {
        border-width: 4px;
        margin: 0 -4px
    }

    .flatpickr-calendar.arrowTop::after,
    .flatpickr-calendar.arrowTop::before {
        bottom: 100%
    }

    .flatpickr-calendar.arrowTop::before {
        border-bottom-color: var(--tb-primary)
    }

    .flatpickr-calendar.arrowTop::after {
        border-bottom-color: var(--tb-primary)
    }

    .flatpickr-calendar.arrowBottom::after,
    .flatpickr-calendar.arrowBottom::before {
        top: 100%
    }

    .flatpickr-calendar.arrowBottom::before {
        border-top-color: var(--tb-primary)
    }

    .flatpickr-calendar.arrowBottom::after {
        border-top-color: var(--tb-primary)
    }

    .flatpickr-calendar:focus {
        outline: 0
    }

    .flatpickr-wrapper {
        position: relative;
        display: inline-block
    }

    .flatpickr-months {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-color: var(--tb-primary);
        border-radius: 5px 5px 0 0
    }

    .flatpickr-months .flatpickr-month {
        background: 0 0;
        color: rgba(255, 255, 255, .9);
        fill: rgba(255, 255, 255, .9);
        height: 34px;
        line-height: 1;
        text-align: center;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        overflow: hidden;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1
    }

    .flatpickr-months .flatpickr-next-month,
    .flatpickr-months .flatpickr-prev-month {
        text-decoration: none;
        cursor: pointer;
        position: absolute;
        top: -5px;
        height: 34px;
        padding: 10px;
        z-index: 3;
        color: rgba(255, 255, 255, .9);
        fill: rgba(255, 255, 255, .9)
    }

    .flatpickr-months .flatpickr-next-month.flatpickr-disabled,
    .flatpickr-months .flatpickr-prev-month.flatpickr-disabled {
        display: none
    }

    .flatpickr-months .flatpickr-next-month i,
    .flatpickr-months .flatpickr-prev-month i {
        position: relative
    }

    .flatpickr-months .flatpickr-next-month.flatpickr-prev-month,
    .flatpickr-months .flatpickr-prev-month.flatpickr-prev-month {
        left: 0
    }

    .flatpickr-months .flatpickr-next-month.flatpickr-next-month,
    .flatpickr-months .flatpickr-prev-month.flatpickr-next-month {
        right: 0
    }

    .flatpickr-months .flatpickr-next-month:hover,
    .flatpickr-months .flatpickr-prev-month:hover {
        color: #959ea9
    }

    .flatpickr-months .flatpickr-next-month:hover svg,
    .flatpickr-months .flatpickr-prev-month:hover svg {
        fill: rgba(255, 255, 255, .9)
    }

    .flatpickr-months .flatpickr-next-month svg,
    .flatpickr-months .flatpickr-prev-month svg {
        width: 14px;
        height: 14px
    }

    .flatpickr-months .flatpickr-next-month svg path,
    .flatpickr-months .flatpickr-prev-month svg path {
        -webkit-transition: fill .1s;
        transition: fill .1s;
        fill: inherit
    }

    .numInputWrapper {
        position: relative;
        height: auto
    }

    .numInputWrapper input,
    .numInputWrapper span {
        display: inline-block
    }

    .numInputWrapper input {
        width: 100%
    }

    .numInputWrapper input::-ms-clear {
        display: none
    }

    .numInputWrapper input::-webkit-inner-spin-button,
    .numInputWrapper input::-webkit-outer-spin-button {
        margin: 0;
        -webkit-appearance: none
    }

    .numInputWrapper span {
        position: absolute;
        right: 0;
        width: 14px;
        padding: 0 4px 0 2px;
        height: 50%;
        line-height: 50%;
        opacity: 0;
        cursor: pointer;
        border: 1px solid rgba(var(--tb-dark-rgb), .15);
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .numInputWrapper span:hover {
        background: rgba(0, 0, 0, .1)
    }

    .numInputWrapper span:active {
        background: rgba(0, 0, 0, .2)
    }

    .numInputWrapper span:after {
        display: block;
        content: "";
        position: absolute
    }

    .numInputWrapper span.arrowUp {
        top: 0;
        border-bottom: 0
    }

    .numInputWrapper span.arrowUp:after {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-bottom: 4px solid rgba(57, 57, 57, .6);
        top: 26%
    }

    .numInputWrapper span.arrowDown {
        top: 50%
    }

    .numInputWrapper span.arrowDown:after {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid rgba(57, 57, 57, .6);
        top: 40%
    }

    .numInputWrapper span svg {
        width: inherit;
        height: auto
    }

    .numInputWrapper span svg path {
        fill: rgba(0, 0, 0, .5)
    }

    .numInputWrapper:hover {
        background: rgba(0, 0, 0, .05)
    }

    .numInputWrapper:hover span {
        opacity: 1
    }

    .flatpickr-current-month {
        font-size: 100%;
        line-height: inherit;
        font-weight: 300;
        color: inherit;
        position: absolute;
        width: 75%;
        left: 12.5%;
        padding: 10.48px 0 0 0;
        line-height: 1;
        height: 34px;
        display: inline-block;
        text-align: center;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .flatpickr-current-month span.cur-month {
        font-family: inherit;
        font-weight: 700;
        color: inherit;
        display: inline-block;
        margin-left: .5ch;
        padding: 0
    }

    .flatpickr-current-month span.cur-month:hover {
        background: rgba(0, 0, 0, .05)
    }

    .flatpickr-current-month .numInputWrapper {
        width: 6ch;
        display: inline-block
    }

    .flatpickr-current-month span.arrowUp::after {
        border-bottom-color: rgba(0, 0, 0, .9)
    }

    .flatpickr-current-month span.arrowDown:after {
        border-top-color: rgba(0, 0, 0, .9)
    }

    .flatpickr-current-month input.cur-year {
        background: 0 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: inherit;
        cursor: text;
        padding: 0 0 0 .5ch;
        margin: 0;
        display: inline-block;
        font-size: inherit;
        font-family: inherit;
        font-weight: 600;
        line-height: inherit;
        height: auto;
        border: 0;
        border-radius: 0;
        vertical-align: initial;
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield
    }

    .flatpickr-current-month input.cur-year:focus {
        outline: 0
    }

    .flatpickr-current-month input.cur-year[disabled],
    .flatpickr-current-month input.cur-year[disabled]:hover {
        font-size: 100%;
        color: rgba(255, 255, 255, .9);
        background: 0 0;
        pointer-events: none
    }

    .flatpickr-current-month .flatpickr-monthDropdown-months {
        -webkit-appearance: menulist;
        -moz-appearance: menulist;
        appearance: menulist;
        background: 0 0;
        border: none;
        border-radius: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: inherit;
        cursor: pointer;
        font-size: inherit;
        font-family: inherit;
        font-weight: 600;
        height: auto;
        line-height: inherit;
        margin: -1px 0 0 0;
        outline: 0;
        padding: 0 0 0 .5ch;
        position: relative;
        vertical-align: initial;
        width: auto
    }

    .flatpickr-current-month .flatpickr-monthDropdown-months:active,
    .flatpickr-current-month .flatpickr-monthDropdown-months:focus {
        outline: 0
    }

    .flatpickr-current-month .flatpickr-monthDropdown-months:hover {
        background-color: transparent
    }

    .flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
        background-color: transparent;
        outline: 0;
        padding: 0;
        color: rgba(0, 0, 0, .8)
    }

    .flatpickr-weekdays {
        background-color: var(--tb-light);
        text-align: center;
        overflow: hidden;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 36px
    }

    .flatpickr-weekdays .flatpickr-weekdaycontainer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1
    }

    span.flatpickr-weekday {
        cursor: default;
        font-size: 90%;
        background: var(--tb-light);
        color: var(--tb-secondary-color);
        line-height: 1;
        margin: 0;
        text-align: center;
        display: block;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        font-weight: 500
    }

    .dayContainer,
    .flatpickr-weeks {
        padding: 1px 0 0 0
    }

    .flatpickr-days {
        position: relative;
        overflow: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        width: 307.875px
    }

    .flatpickr-days:focus {
        outline: 0
    }

    .dayContainer {
        padding: 0;
        outline: 0;
        text-align: left;
        width: 307.875px;
        min-width: 307.875px;
        max-width: 307.875px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: inline-block;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .dayContainer+.dayContainer {
        -webkit-box-shadow: -1px 0 0 #e6e6e6;
        box-shadow: -1px 0 0 #e6e6e6
    }

    .flatpickr-day {
        background: 0 0;
        border: 1px solid transparent;
        border-radius: 150px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: var(--tb-secondary-color);
        cursor: pointer;
        font-weight: 400;
        width: 14.2857143%;
        -ms-flex-preferred-size: 14.2857143%;
        flex-basis: 14.2857143%;
        max-width: 39px;
        height: 39px;
        line-height: 39px;
        margin: 0;
        display: inline-block;
        position: relative;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center
    }

    .flatpickr-day:focus,
    .flatpickr-day:hover {
        background-color: rgba(var(--tb-light-rgb), .7)
    }

    .flatpickr-day.inRange,
    .flatpickr-day.nextMonthDay.inRange,
    .flatpickr-day.nextMonthDay.today.inRange,
    .flatpickr-day.nextMonthDay:focus,
    .flatpickr-day.nextMonthDay:hover,
    .flatpickr-day.prevMonthDay.inRange,
    .flatpickr-day.prevMonthDay.today.inRange,
    .flatpickr-day.prevMonthDay:focus,
    .flatpickr-day.prevMonthDay:hover,
    .flatpickr-day.today.inRange,
    .flatpickr-day:focus,
    .flatpickr-day:hover {
        cursor: pointer;
        outline: 0;
        background-color: rgba(var(--tb-primary-rgb), .06);
        border-color: transparent
    }

    .flatpickr-day.today {
        color: var(--tb-primary);
        font-weight: 500;
        background-color: rgba(var(--tb-primary-rgb), .1);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .flatpickr-day.today:focus,
    .flatpickr-day.today:hover {
        color: #fff;
        border-color: var(--tb-primary);
        background-color: rgba(var(--tb-primary-rgb), 1)
    }

    .flatpickr-day.endRange,
    .flatpickr-day.endRange.inRange,
    .flatpickr-day.endRange.nextMonthDay,
    .flatpickr-day.endRange.prevMonthDay,
    .flatpickr-day.endRange:focus,
    .flatpickr-day.endRange:hover,
    .flatpickr-day.selected,
    .flatpickr-day.selected.inRange,
    .flatpickr-day.selected.nextMonthDay,
    .flatpickr-day.selected.prevMonthDay,
    .flatpickr-day.selected:focus,
    .flatpickr-day.selected:hover,
    .flatpickr-day.startRange,
    .flatpickr-day.startRange.inRange,
    .flatpickr-day.startRange.nextMonthDay,
    .flatpickr-day.startRange.prevMonthDay,
    .flatpickr-day.startRange:focus,
    .flatpickr-day.startRange:hover {
        background: var(--tb-primary);
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff;
        border-color: var(--tb-primary)
    }

    .flatpickr-day.endRange.startRange,
    .flatpickr-day.selected.startRange,
    .flatpickr-day.startRange.startRange {
        border-radius: 50px 0 0 50px
    }

    .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)) {
        -webkit-box-shadow: -10px 0 0 var(--tb-primary);
        box-shadow: -10px 0 0 var(--tb-primary)
    }

    .flatpickr-day.endRange.startRange .endRange,
    .flatpickr-day.selected.startRange .endRange,
    .flatpickr-day.startRange.startRange .endRange {
        border-radius: 50px
    }

    .flatpickr-day.endRange.endRange,
    .flatpickr-day.selected.endRange,
    .flatpickr-day.startRange.endRange {
        border-radius: 0 50px 50px 0
    }

    .flatpickr-day.inRange {
        border-radius: 0;
        -webkit-box-shadow: -5px 0 0 rgba(var(--tb-primary-rgb), .02), 5px 0 0 rgba(var(--tb-primary-rgb), .02);
        box-shadow: -5px 0 0 rgba(var(--tb-primary-rgb), .02), 5px 0 0 rgba(var(--tb-primary-rgb), .02)
    }

    .flatpickr-day.flatpickr-disabled,
    .flatpickr-day.flatpickr-disabled:hover,
    .flatpickr-day.nextMonthDay,
    .flatpickr-day.notAllowed,
    .flatpickr-day.notAllowed.nextMonthDay,
    .flatpickr-day.notAllowed.prevMonthDay,
    .flatpickr-day.prevMonthDay {
        color: rgba(var(--tb-secondary-color-rgb), .3);
        background: 0 0;
        border-color: transparent;
        cursor: default
    }

    .flatpickr-day.flatpickr-disabled,
    .flatpickr-day.flatpickr-disabled:hover {
        cursor: not-allowed;
        color: rgba(var(--tb-secondary-color-rgb), .3)
    }

    .flatpickr-day.week.selected {
        border-radius: 0;
        -webkit-box-shadow: -5px 0 0 var(--tb-primary), 5px 0 0 var(--tb-primary);
        box-shadow: -5px 0 0 var(--tb-primary), 5px 0 0 var(--tb-primary)
    }

    .flatpickr-day.hidden {
        visibility: hidden
    }

    .rangeMode .flatpickr-day {
        margin-top: 1px
    }

    .flatpickr-weekwrapper {
        float: left
    }

    .flatpickr-weekwrapper .flatpickr-weeks {
        padding: 0 12px;
        -webkit-box-shadow: 1px 0 0 var(--tb-border-color-translucent);
        box-shadow: 1px 0 0 var(--tb-border-color-translucent)
    }

    .flatpickr-weekwrapper .flatpickr-weekday {
        float: none;
        width: 100%;
        line-height: 35px
    }

    .flatpickr-weekwrapper span.flatpickr-day,
    .flatpickr-weekwrapper span.flatpickr-day:hover {
        display: block;
        width: 100%;
        max-width: none;
        color: rgba(var(--tb-secondary-color-rgb), .3);
        background: 0 0;
        cursor: default;
        border: none
    }

    .flatpickr-innerContainer {
        display: block;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        overflow: hidden
    }

    .flatpickr-rContainer {
        display: inline-block;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .flatpickr-time {
        text-align: center;
        outline: 0;
        display: block;
        height: 0;
        line-height: 40.59px;
        max-height: 40.59px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        overflow: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .flatpickr-time:after {
        content: "";
        display: table;
        clear: both
    }

    .flatpickr-time .numInputWrapper {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        width: 40%;
        height: 40.59px;
        float: left
    }

    .flatpickr-time .numInputWrapper span.arrowDown:after,
    .flatpickr-time .numInputWrapper span.arrowUp:after {
        border-bottom-color: var(--tb-border-color-translucent)
    }

    .flatpickr-time.hasSeconds .numInputWrapper {
        width: 26%
    }

    .flatpickr-time.time24hr .numInputWrapper {
        width: 49%
    }

    .flatpickr-time input {
        background: 0 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 0;
        border-radius: 0;
        text-align: center;
        margin: 0;
        padding: 0;
        height: inherit;
        line-height: inherit;
        color: var(--tb-secondary-color);
        font-size: 14px;
        position: relative;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield
    }

    .flatpickr-time input.flatpickr-hour {
        font-weight: 700
    }

    .flatpickr-time input.flatpickr-minute,
    .flatpickr-time input.flatpickr-second {
        font-weight: 400
    }

    .flatpickr-time input:focus {
        outline: 0;
        border: 0
    }

    .flatpickr-time .flatpickr-am-pm,
    .flatpickr-time .flatpickr-time-separator {
        height: inherit;
        float: left;
        line-height: inherit;
        color: var(--tb-secondary-color);
        font-weight: 700;
        width: 2%;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -ms-flex-item-align: center;
        align-self: center
    }

    .flatpickr-time .flatpickr-am-pm {
        outline: 0;
        width: 18%;
        cursor: pointer;
        text-align: center;
        font-weight: 400
    }

    .flatpickr-time .flatpickr-am-pm:focus,
    .flatpickr-time .flatpickr-am-pm:hover,
    .flatpickr-time input:focus,
    .flatpickr-time input:hover {
        background: rgba(var(--tb-primary-rgb), .04)
    }

    .flatpickr-am-pm:focus,
    .flatpickr-am-pm:hover,
    .numInput:focus,
    .numInput:hover,
    .numInputWrapper:focus,
    .numInputWrapper:hover {
        background-color: transparent
    }

    .flatpickr-input[readonly] {
        cursor: pointer;
        background-color: var(--tb-secondary-bg)
    }

    [data-inline-date=true],
    [data-time-inline] {
        display: none
    }

    @-webkit-keyframes fpFadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fpFadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    [datepicker-inline],
    [timepicker-inline] {
        display: none
    }

    [data-input-flag] {
        position: relative
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list {
        max-height: 158px;
        overflow-y: auto
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list::-webkit-scrollbar {
        -webkit-appearance: none
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list::-webkit-scrollbar:vertical {
        width: 8px
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list::-webkit-scrollbar:horizontal {
        height: 10px
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list::-webkit-scrollbar-thumb {
        background-color: rgba(var(--tb-dark-rgb), .075);
        border-radius: 8px
    }

    [data-input-flag] .dropdown-menu .dropdown-menu-list::-webkit-scrollbar-track {
        border-radius: 8px
    }

    [data-option-flag-img-name] .flag-input {
        padding-left: 45px;
        background-image: url(../images/flags/us.svg);
        background-repeat: no-repeat;
        background-position: 14px 8px;
        background-size: 18px
    }

    [data-option-flag-img-name]::before,
    [data-option-flag-name]::before {
        content: "\f0140";
        font-family: "Material Design Icons";
        position: absolute;
        right: .9rem;
        top: .6rem;
        font-size: 16px
    }

    [data-option-countrycode=false] .country-codeno {
        display: none
    }

    [data-search-input=false] .searchlist-input {
        display: none
    }

    .choices {
        position: relative;
        margin-bottom: 24px;
        font-size: 16px
    }

    .choices:focus {
        outline: 0
    }

    .choices:last-child {
        margin-bottom: 0
    }

    .choices.is-disabled .choices__inner,
    .choices.is-disabled .choices__input {
        background-color: rgba(var(--tb-light-rgb), .75);
        cursor: not-allowed;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .choices.is-disabled .choices__item {
        cursor: not-allowed
    }

    .choices [hidden] {
        display: none !important
    }

    .choices[data-type*=select-one] {
        cursor: pointer
    }

    .choices[data-type*=select-one] .choices__inner {
        padding-bottom: .25rem
    }

    .choices[data-type*=select-one] .choices__input {
        display: block;
        width: 100%;
        padding: .6rem .9rem;
        background-color: var(--tb-secondary-bg);
        border: 1px solid var(--tb-border-color-translucent);
        font-size: .875rem;
        border-radius: .25rem;
        color: var(--tb-secondary-color);
        margin-bottom: 10px
    }

    .choices[data-type*=select-one] .choices__button {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
        padding: 0;
        background-size: 8px;
        position: absolute;
        top: 50%;
        right: 0;
        left: auto;
        margin-top: -10px;
        margin-right: 25px;
        margin-left: 0;
        height: 20px;
        width: 20px;
        border-radius: 10em;
        opacity: .5
    }

    .choices[data-type*=select-one] .choices__button:focus,
    .choices[data-type*=select-one] .choices__button:hover {
        opacity: 1
    }

    .choices[data-type*=select-one] .choices__button:focus {
        -webkit-box-shadow: 0 0 0 2px #00bcd4;
        box-shadow: 0 0 0 2px #00bcd4
    }

    .choices[data-type*=select-one] .choices__item[data-value=""] .choices__button {
        display: none
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
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        pointer-events: none
    }

    .choices[data-type*=select-one].is-open:after {
        margin-top: 0;
        -webkit-transform: translateY(-50%) rotate(-180deg);
        transform: translateY(-50%) rotate(-180deg)
    }

    .choices[data-type*=select-multiple] .choices__inner,
    .choices[data-type*=text] .choices__inner {
        cursor: text;
        padding-right: .9rem
    }

    .choices[data-type*=select-multiple] .choices__button,
    .choices[data-type*=text] .choices__button {
        position: relative;
        display: inline-block;
        margin-top: 0;
        margin-right: -4px;
        margin-bottom: 0;
        margin-left: 8px;
        padding-left: 16px;
        border-left: 1px solid rgba(255, 255, 255, .5);
        border-right: 0;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
        background-size: 8px;
        width: 8px;
        line-height: 1;
        opacity: .75;
        border-radius: 0
    }

    .choices[data-type*=select-multiple] .choices__button:focus,
    .choices[data-type*=select-multiple] .choices__button:hover,
    .choices[data-type*=text] .choices__button:focus,
    .choices[data-type*=text] .choices__button:hover {
        opacity: 1
    }

    .choices[data-type*=select-multiple] .choices__list--dropdown,
    .choices[data-type*=text] .choices__list--dropdown {
        padding-bottom: 10px
    }

    .choices[data-type*=select-multiple] .choices__list--dropdown .choices__list,
    .choices[data-type*=text] .choices__list--dropdown .choices__list {
        margin-bottom: 0
    }

    .choices[data-type*=select-multiple] .choices__input {
        padding-top: 3px
    }

    .input-light .choices__inner {
        background-color: var(--tb-light);
        border: none
    }

    .choices__inner {
        display: inline-block;
        vertical-align: middle;
        width: 100%;
        background-color: var(--tb-secondary-bg);
        padding: .25rem 3.6rem .1rem .5rem;
        border: var(--tb-border-width) solid var(--tb-border-color-translucent);
        border-radius: .25rem !important;
        font-size: .875rem;
        min-height: 40.59px;
        overflow: hidden
    }

    .is-focused .choices__inner,
    .is-open .choices__inner {
        border-color: #5d9eff
    }

    .choices__list {
        margin: 0;
        padding-left: 0;
        list-style: none
    }

    .choices__list--single {
        display: inline-block;
        padding: 4px 16px 4px 4px;
        width: 100%
    }

    .choices__list--single .choices__item {
        width: 100%
    }

    .choices__list--multiple {
        display: inline
    }

    .choices__list--multiple .choices__item {
        display: inline-block;
        vertical-align: initial;
        border-radius: 7px;
        padding: 2px 7px;
        font-size: 11px;
        font-weight: 400;
        margin-right: 3.75px;
        margin-bottom: 3.75px;
        margin-top: 2px;
        background-color: var(--tb-primary);
        border: 1px solid var(--tb-primary);
        word-break: break-all;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #fff;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .choices__list--multiple .choices__item[data-deletable] {
        padding-right: 5px
    }

    .choices__list--multiple .choices__item.is-highlighted {
        background-color: var(--tb-primary);
        border: 1px solid var(--tb-primary)
    }

    .is-disabled .choices__list--multiple .choices__item {
        background-color: #7c6bff;
        border: 1px solid #7c6bff
    }

    .choices__list--dropdown {
        visibility: hidden;
        z-index: 1;
        position: absolute;
        width: 100%;
        background-color: var(--tb-secondary-bg);
        border: 1px solid var(--tb-border-color-translucent);
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        top: 100%;
        margin-top: 0;
        padding: 10px 10px 20px 10px;
        border-bottom-left-radius: 2.5px;
        border-bottom-right-radius: 2.5px;
        overflow: hidden;
        word-break: break-all;
        will-change: visibility;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-transform: translateY(1px);
        transform: translateY(1px)
    }

    .choices__list--dropdown.is-active {
        visibility: visible;
        -webkit-animation-name: DropDownSlide;
        animation-name: DropDownSlide
    }

    .choices__list--dropdown .choices__item--selectable.is-highlighted {
        background-color: var(--tb-tertiary-bg)
    }

    .choices__list--dropdown .choices__list {
        margin: 0 -16px -16px
    }

    .choices__list--dropdown .has-no-results {
        font-style: italic;
        font-weight: 500
    }

    .choices__list--dropdown .choices__item--selectable:after {
        display: none
    }

    .is-open .choices__list--dropdown {
        border-color: var(--tb-border-color-translucent)
    }

    .is-flipped .choices__list--dropdown {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: -1px;
        border-radius: .25rem .25rem 0 0
    }

    .is-flipped .choices__list--dropdown.is-active {
        -webkit-animation-name: DropDownSlideDown;
        animation-name: DropDownSlideDown;
        -webkit-transform: translateY(-1px);
        transform: translateY(-1px)
    }

    .choices__list--dropdown .choices__list {
        position: relative;
        max-height: 300px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position
    }

    .choices__list--dropdown .choices__item {
        position: relative;
        font-size: .875rem;
        padding: .35rem 1.2rem .35rem 16px
    }

    @media (min-width: 640px) {
        .choices__list--dropdown .choices__item--selectable:after {
            content: attr(data-select-text);
            font-size: 12px;
            opacity: 0;
            position: absolute;
            right: 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .choices__list--dropdown .choices__item--selectable.is-highlighted:after {
            opacity: .5
        }
    }

    .choices__item {
        cursor: default
    }

    .choices__item--selectable {
        cursor: pointer
    }

    .choices__item--disabled {
        cursor: not-allowed;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        opacity: .5
    }

    .choices__heading {
        font-weight: 600;
        font-size: 12px;
        padding: 10px 16px;
        border-bottom: 1px solid var(--tb-border-color-translucent);
        color: var(--tb-tertiary-color)
    }

    .choices__button {
        text-indent: -9999px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 0;
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center;
        cursor: pointer
    }

    .choices__button:focus {
        outline: 0
    }

    .choices__input {
        display: inline-block;
        vertical-align: baseline;
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color);
        font-size: .875rem;
        margin-bottom: 0;
        border: 0;
        border-radius: 0;
        max-width: 100%;
        padding: 2px 0 2px 2px
    }

    .choices__input:focus {
        outline: 0
    }

    .choices__input::-webkit-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .choices__input::-moz-placeholder {
        color: var(--tb-secondary-color)
    }

    .choices__input:-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .choices__input::-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .choices__input::placeholder {
        color: var(--tb-secondary-color)
    }

    .choices__placeholder {
        color: var(--tb-secondary-color);
        opacity: 1
    }

    [data-layout-mode=dark] .choices[data-type*=select-one] .choices__button {
        -webkit-filter: invert(1) grayscale(100%) brightness(200%);
        filter: invert(1) grayscale(100%) brightness(200%)
    }

    .ts-wrapper .ts-control {
        background-color: var(--tb-secondary-bg);
        border-color: var(--tb-border-color-translucent);
        padding: .6rem .9rem
    }

    .ts-wrapper .ts-control input {
        color: var(--tb-body-color)
    }

    .ts-wrapper .ts-control input::-webkit-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .ts-wrapper .ts-control input::-moz-placeholder {
        color: var(--tb-secondary-color)
    }

    .ts-wrapper .ts-control input:-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .ts-wrapper .ts-control input::-ms-input-placeholder {
        color: var(--tb-secondary-color)
    }

    .ts-wrapper .ts-control input::placeholder {
        color: var(--tb-secondary-color)
    }

    .ts-wrapper.multi.has-items .ts-control {
        padding: calc(.6rem - 1px) .9rem calc(.6rem - 4px)
    }

    .ts-wrapper.multi .ts-control>div {
        background-color: var(--tb-light);
        color: var(--tb-secondary-color)
    }

    .ts-wrapper.focus .ts-control {
        color: var(--tb-body-color);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .ts-wrapper .ts-control,
    .ts-wrapper .ts-control input,
    .ts-wrapper .ts-dropdown {
        color: var(--tb-body-color)
    }

    .ts-wrapper .ts-control,
    .ts-wrapper .ts-wrapper.single.input-active .ts-control {
        background-color: var(--tb-secondary-bg) !important
    }

    .ts-wrapper .ts-dropdown,
    .ts-wrapper .ts-dropdown.form-control,
    .ts-wrapper .ts-dropdown.form-select {
        background-color: var(--tb-secondary-bg)
    }

    .ts-wrapper .ts-dropdown .active {
        background-color: var(--tb-tertiary-bg);
        color: var(--tb-body-color)
    }

    .ts-wrapper .ts-dropdown .create,
    .ts-wrapper .ts-dropdown .no-results,
    .ts-wrapper .ts-dropdown .optgroup-header,
    .ts-wrapper .ts-dropdown .option {
        padding: .35rem 1.2rem
    }

    .ts-wrapper .option .title {
        display: block
    }

    .ts-wrapper .option .url {
        font-size: 12px;
        display: block;
        color: var(--tb-tertiary-color)
    }

    .ts-wrapper.contacts .ts-control>div .email {
        opacity: .7
    }

    .ts-wrapper.contacts .ts-control>div .name+.email {
        margin-left: 5px
    }

    .ts-wrapper.contacts .ts-control>div .email:before {
        content: "<"
    }

    .ts-wrapper.contacts .ts-control>div .email:after {
        content: ">"
    }

    .ts-wrapper.contacts .ts-dropdown .caption {
        font-size: 12px;
        display: block;
        color: var(--tb-tertiary-color)
    }

    .noUi-connect {
        background: #06d6a0
    }

    .noUi-handle {
        background: #06d6a0;
        border: 2px solid var(--tb-secondary-bg);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .noUi-horizontal {
        height: 4px
    }

    .noUi-horizontal .noUi-handle {
        height: 16px;
        width: 16px;
        border-radius: 50%;
        right: -10px !important;
        top: -7px
    }

    .noUi-horizontal .noUi-handle::after,
    .noUi-horizontal .noUi-handle::before {
        display: none
    }

    .noUi-horizontal .noUi-handle:focus {
        outline: 0
    }

    .noUi-pips-horizontal {
        height: 50px
    }

    .noUi-tooltip {
        padding: .4rem .7rem;
        border-color: var(--tb-border-color-translucent);
        border-radius: var(--tb-border-radius-sm);
        background-color: var(--tb-secondary-bg);
        color: var(--tb-secondary-color)
    }

    .noUi-vertical {
        width: 4px
    }

    .noUi-vertical .noUi-handle {
        height: 16px;
        width: 16px;
        right: -8px;
        top: -12px;
        left: auto;
        border-radius: 50%
    }

    .noUi-vertical .noUi-handle::after,
    .noUi-vertical .noUi-handle::before {
        display: none
    }

    .noUi-vertical .noUi-handle:focus {
        outline: 0
    }

    .noUi-vertical .noUi-origin {
        top: 0
    }

    .noUi-value {
        font-size: 12px
    }

    .noUi-marker-horizontal.noUi-marker-large {
        height: 12px
    }

    .noUi-value-horizontal {
        padding-top: 4px
    }

    .noUi-target {
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: var(--tb-light);
        border-color: var(--tb-light)
    }

    .noUi-touch-area:focus {
        outline: 0
    }

    #blue,
    #green,
    #red {
        margin: 10px;
        display: inline-block;
        height: 200px
    }

    #colorpicker {
        height: 240px;
        width: 310px;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid var(--tb-border-color-translucent)
    }

    #result {
        margin: 60px 26px;
        height: 100px;
        width: 100px;
        display: inline-block;
        vertical-align: top;
        border: 1px solid var(--tb-border-color-translucent);
        -webkit-box-shadow: 0 0 3px;
        box-shadow: 0 0 3px;
        border-radius: 7px
    }

    #red .noUi-connect {
        background: #ef476f
    }

    #green .noUi-connect {
        background: #06d6a0
    }

    #blue .noUi-connect {
        background: var(--tb-primary)
    }

    .form-control.keyboard {
        max-width: 340px !important
    }

    .example-val {
        font-size: 12px;
        color: var(--tb-tertiary-color);
        display: block;
        margin: 15px 0
    }

    .example-val:before {
        content: "Value: ";
        font-size: 12px;
        font-weight: 600
    }

    .noUi-tooltip {
        display: none
    }

    .noUi-active .noUi-tooltip {
        display: block
    }

    .c-1-color {
        background: #ef476f
    }

    .c-2-color {
        background: #f1be46
    }

    .c-3-color {
        background: #06d6a0
    }

    .c-4-color {
        background: var(--tb-primary)
    }

    .c-5-color {
        background: #7c6bff
    }

    #slider-toggle {
        height: 50px
    }

    #slider-toggle.off .noUi-handle {
        border-color: #ef476f
    }

    [data-slider-color=primary] .noUi-connect {
        background: #4b93ff
    }

    [data-slider-color=primary] .noUi-handle {
        background: #4b93ff
    }

    [data-slider-color=primary][data-slider-style=border] .noUi-handle,
    [data-slider-color=primary][data-slider-style=square] .noUi-handle {
        border-color: #4b93ff
    }

    [data-slider-color=secondary] .noUi-connect {
        background: #7c6bff
    }

    [data-slider-color=secondary] .noUi-handle {
        background: #7c6bff
    }

    [data-slider-color=secondary][data-slider-style=border] .noUi-handle,
    [data-slider-color=secondary][data-slider-style=square] .noUi-handle {
        border-color: #7c6bff
    }

    [data-slider-color=success] .noUi-connect {
        background: #06d6a0
    }

    [data-slider-color=success] .noUi-handle {
        background: #06d6a0
    }

    [data-slider-color=success][data-slider-style=border] .noUi-handle,
    [data-slider-color=success][data-slider-style=square] .noUi-handle {
        border-color: #06d6a0
    }

    [data-slider-color=info] .noUi-connect {
        background: #1ea6d3
    }

    [data-slider-color=info] .noUi-handle {
        background: #1ea6d3
    }

    [data-slider-color=info][data-slider-style=border] .noUi-handle,
    [data-slider-color=info][data-slider-style=square] .noUi-handle {
        border-color: #1ea6d3
    }

    [data-slider-color=warning] .noUi-connect {
        background: #f1be46
    }

    [data-slider-color=warning] .noUi-handle {
        background: #f1be46
    }

    [data-slider-color=warning][data-slider-style=border] .noUi-handle,
    [data-slider-color=warning][data-slider-style=square] .noUi-handle {
        border-color: #f1be46
    }

    [data-slider-color=danger] .noUi-connect {
        background: #ef476f
    }

    [data-slider-color=danger] .noUi-handle {
        background: #ef476f
    }

    [data-slider-color=danger][data-slider-style=border] .noUi-handle,
    [data-slider-color=danger][data-slider-style=square] .noUi-handle {
        border-color: #ef476f
    }

    [data-slider-color=light] .noUi-connect {
        background: #f3f6f9
    }

    [data-slider-color=light] .noUi-handle {
        background: #f3f6f9
    }

    [data-slider-color=light][data-slider-style=border] .noUi-handle,
    [data-slider-color=light][data-slider-style=square] .noUi-handle {
        border-color: #f3f6f9
    }

    [data-slider-color=dark] .noUi-connect {
        background: #0b1729
    }

    [data-slider-color=dark] .noUi-handle {
        background: #0b1729
    }

    [data-slider-color=dark][data-slider-style=border] .noUi-handle,
    [data-slider-color=dark][data-slider-style=square] .noUi-handle {
        border-color: #0b1729
    }

    [data-slider-size=lg].noUi-horizontal {
        height: 12px
    }

    [data-slider-size=lg].noUi-horizontal .noUi-handle {
        width: 24px;
        height: 24px
    }

    [data-slider-size=md].noUi-horizontal {
        height: 8px
    }

    [data-slider-size=md].noUi-horizontal .noUi-handle {
        width: 20px;
        height: 20px
    }

    [data-slider-size=sm].noUi-horizontal {
        height: 4px
    }

    [data-slider-size=sm].noUi-horizontal .noUi-handle {
        width: 16px;
        height: 16px
    }

    [data-slider-style=line].noUi-horizontal .noUi-handle {
        width: 8px;
        border-radius: 4px;
        right: -8px
    }

    [data-slider-style=line].noUi-vertical .noUi-handle {
        height: 8px;
        border-radius: 4px;
        top: -3px
    }

    [data-slider-style=border] .noUi-handle {
        border-color: #06d6a0;
        background-color: var(--tb-secondary-bg)
    }

    [data-slider-style=square] .noUi-handle {
        border-radius: 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        height: 10px;
        width: 10px;
        top: -4px;
        border-color: #06d6a0;
        background-color: var(--tb-secondary-bg)
    }

    .auth-page-wrapper {
        padding: 90px 0 80px
    }

    .auth-page-wrapper .auth-header {
        height: 70px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        z-index: 1001
    }

    .auth-page-wrapper .auth-header .container-fluid {
        max-width: 90%
    }

    .auth-page-wrapper .auth-card {
        z-index: 1
    }

    .auth-page-wrapper .auth-card .card-header {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1000' height='350' preserveAspectRatio='none' viewBox='0 0 1000 350'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1157%26quot%3b)' fill='none'%3e%3cpath d='M328.58 394.08C431.67 392.73 512.94 277.58 722.85 273.08 932.75 268.58 1010.02 108.53 1117.11 105.08' stroke='rgba(95%2c 157%2c 255%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M453.78 394.57C543.12 393.38 614.47 292.66 795.29 289.27 976.11 285.88 1045.21 158.59 1136.8 156.27' stroke='rgba(95%2c 157%2c 255%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M121.76 365.13C209.07 363.92 287.72 260.74 455.05 260.68 622.38 260.62 621.7 304.43 788.34 304.43 954.99 304.43 1037.59 260.77 1121.63 260.68' stroke='rgba(95%2c 157%2c 255%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M476.17 407.18C572.4 393.77 628.5 169.12 783.24 168.97 937.99 168.82 1003.77 325.19 1090.32 329.97' stroke='rgba(95%2c 157%2c 255%2c 1)' stroke-width='2'%3e%3c/path%3e%3cpath d='M409.3 365.09C484.19 357.63 470.42 198 659.61 197.82 848.8 197.64 1033.73 271.12 1160.23 271.32' stroke='rgba(95%2c 157%2c 255%2c 1)' stroke-width='2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1157'%3e%3crect width='1000' height='350' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover
    }

    .auth-page-wrapper .footer {
        left: 0;
        background-color: transparent;
        color: var(--tb-body-color)
    }

    .auth-pass-inputgroup input[type=text]+.btn .ri-eye-fill:before {
        content: "\ecb6"
    }

    .signin-other-title {
        position: relative
    }

    .signin-other-title:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 1px;
        left: 0;
        right: 0;
        border-top: 1px dashed var(--tb-border-color);
        top: 10px
    }

    .signin-other-title .title {
        display: inline-block;
        position: relative;
        z-index: 9;
        background-color: var(--tb-secondary-bg);
        padding: 2px 16px
    }

    #password-contain {
        display: none
    }

    #password-contain p {
        padding-left: 13px
    }

    #password-contain p.valid {
        color: #06d6a0
    }

    #password-contain p.valid::before {
        position: relative;
        left: -8px;
        content: "✔"
    }

    #password-contain p.invalid {
        color: #ef476f
    }

    #password-contain p.invalid::before {
        position: relative;
        left: -8px;
        content: "✖"
    }

    .password-addon {
        z-index: 5
    }

    .jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
        width: 32px;
        height: 32px;
        display: inline-block;
        vertical-align: middle
    }

    .dash-avatar {
        height: 40px;
        width: 40px
    }

    @media (min-width: 1200px) and (max-width:1440px) {
        .widget-responsive-fullscreen .col-xxl-9 {
            width: 100%
        }

        .widget-responsive-fullscreen .col-xxl-3 {
            width: 33.33%
        }

        .widget-responsive-fullscreen .col-xxl-3:first-child {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important
        }
    }

    .error-basic-img {
        max-width: 450px
    }

    .error-500 .title {
        font-size: 250px
    }

    .error-500 .error-500-img {
        position: absolute;
        top: 57px;
        left: 0;
        right: 0;
        margin: 0 auto
    }

    @media (min-width: 768px) and (max-width:991.98px) {
        .error-500 .title {
            font-size: 150px
        }

        .error-500 .error-500-img {
            width: 20% !important;
            top: 43px
        }
    }

    @media (max-width: 767.98px) {
        .error-500 .title {
            font-size: 68px;
            margin-top: 35px
        }

        .error-500 .error-500-img {
            position: relative;
            top: 0
        }
    }

    .profile-user {
        position: relative;
        display: inline-block
    }

    .profile-user .profile-photo-edit {
        position: absolute;
        right: 1.2rem;
        left: auto;
        top: 1.2rem;
        cursor: pointer
    }

    .profile-user .user-profile-image {
        -o-object-fit: cover;
        object-fit: cover
    }

    .profile-user .profile-img-file-input {
        display: none
    }

    .profile-basic {
        height: 180px
    }

    .profile-user-img img {
        height: 285px;
        width: 100%
    }

    .acitivity-timeline {
        position: relative;
        overflow: hidden
    }

    .acitivity-timeline .acitivity-item {
        position: relative
    }

    .acitivity-timeline .acitivity-item .flex-shrink-0 {
        z-index: 2
    }

    .acitivity-timeline .acitivity-item .acitivity-avatar {
        height: 10px;
        width: 10px;
        border-radius: 50%;
        margin-top: 8px;
        background-color: #fff;
        border: 1px solid #4b93ff;
        -webkit-box-shadow: rgba(75, 147, 255, .2) 2px 2px, rgba(75, 147, 255, .1) 4px 4px, rgba(75, 147, 255, .05) 6px 6px;
        box-shadow: rgba(75, 147, 255, .2) 2px 2px, rgba(75, 147, 255, .1) 4px 4px, rgba(75, 147, 255, .05) 6px 6px
    }

    .acitivity-timeline .acitivity-item:before {
        content: "";
        position: absolute;
        border-left: 1px dashed #e9ebec;
        left: 4px;
        height: 100%;
        top: 8px;
        z-index: 0
    }

    .acitivity-timeline .acitivity-item:last-child::before {
        border-color: transparent
    }

    .countdownlist {
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        gap: 24px
    }

    .countdownlist .countdownlist-item {
        width: 25%
    }

    .countdownlist .countdownlist-item:last-of-type .count-num::after {
        display: none
    }

    .countdownlist .count-title {
        font-size: 13px;
        font-weight: 600;
        display: block;
        margin-bottom: 8px;
        color: rgba(var(--tb-dark-rgb), .5);
        text-transform: uppercase
    }

    .countdownlist .count-num {
        background-color: var(--tb-light);
        padding: 16px 10px;
        position: relative;
        border-radius: var(--tb-border-radius-lg);
        font-weight: 600;
        font-size: 32px
    }

    @media (max-width: 575.98px) {
        .countdownlist .count-num {
            font-size: 18px
        }
    }

    .countdownlist .count-num::after {
        content: ":";
        font-size: 20px;
        position: absolute;
        right: -16px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        color: var(--tb-dark)
    }

    .move-animation {
        -webkit-animation: mover 1s infinite alternate;
        animation: mover 1s infinite alternate
    }

    @-webkit-keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        100% {
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px)
        }
    }

    @keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        100% {
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px)
        }
    }

    .countdown-input-subscribe {
        position: relative
    }

    .countdown-input-subscribe input {
        height: 50px;
        padding-right: 95px
    }

    .countdown-input-subscribe .btn {
        position: absolute;
        right: 4px;
        top: 5px
    }

    .countdown li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    #ecommerceHero .carousel-control-next,
    #ecommerceHero .carousel-control-prev {
        opacity: 0;
        height: 40px;
        width: 40px;
        background: #4b93ff;
        top: 43%;
        border-radius: .25rem;
        font-size: 24px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    #ecommerceHero .carousel-control-next i,
    #ecommerceHero .carousel-control-prev i {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    #ecommerceHero .carousel-control-next {
        right: 45px
    }

    #ecommerceHero .carousel-control-prev {
        left: 45px
    }

    #ecommerceHero:hover .carousel-control-next,
    #ecommerceHero:hover .carousel-control-prev {
        opacity: .85
    }

    .ecommerce-home {
        position: relative;
        padding: 160px 0 90px;
        background-size: cover;
        background-position: center;
        min-height: 710px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    @media (max-width: 1200px) {
        .ecommerce-home {
            min-width: 100%
        }
    }

    .product-banner-1 {
        position: relative
    }

    .product-banner-1 .product-content {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        max-width: 350px
    }

    .product-banner-1 .bg-overlay {
        background: -webkit-gradient(linear, right top, left top, from(#000), to(transparent));
        background: linear-gradient(270deg, #000, transparent)
    }

    .product-banner-1 .blue.bg-overlay {
        background: linear-gradient(45deg, rgba(7, 100, 97, .6117647059), transparent)
    }

    .product-banner-1.right .product-content {
        right: 0
    }

    .ecommerce-about {
        padding: 180px 0 85px;
        position: relative
    }

    .effect .ecommerce-effect {
        position: absolute;
        height: 15rem;
        width: 15rem;
        -webkit-filter: grayscale(33%) blur(40px);
        filter: grayscale(33%) blur(40px);
        opacity: .1;
        border-radius: 50%;
        top: 0;
        left: 150px
    }

    .effect .ecommerce-effect:last-child {
        bottom: 20px;
        top: auto
    }

    .ecommerce-about-team {
        position: relative;
        padding: 150px 0 100px
    }

    .ecommerce-about-team .team-box .team-img {
        position: relative;
        border-radius: 50%
    }

    .ecommerce-about-team .team-box .team-img img {
        padding: 14px
    }

    .ecommerce-about-team .team-box .team-img::after,
    .ecommerce-about-team .team-box .team-img::before {
        content: "";
        position: absolute;
        height: 8px;
        width: 8px;
        border-radius: 50%
    }

    .ecommerce-about-team .team-box .team-img::before {
        background-color: #06d6a0;
        left: 60%
    }

    .ecommerce-about-team .team-box .team-img::after {
        background-color: #ef476f;
        left: 38%;
        bottom: 0
    }

    .ecommerce-about-cta {
        position: relative;
        z-index: 1;
        margin-bottom: -100px
    }

    .ecommerce-subscript input {
        padding: 15px 105px 15px 24px
    }

    .ecommerce-subscript .btn {
        position: absolute;
        right: 4px;
        top: 4px
    }

    .ecommerce-product {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .ecommerce-product .sidebar {
        width: 350px
    }

    .ecommerce-product .sidebar.small-sidebar {
        width: 280px
    }

    .ecommerce-product .offer-bar {
        width: 350px
    }

    .ecommerce-product .offer-bar .offer-banner {
        height: 520px
    }

    @media (max-width: 1200px) {
        .ecommerce-product {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .ecommerce-product .offer-bar,
        .ecommerce-product .sidebar,
        .ecommerce-product .sidebar.small-sidebar {
            width: 100%
        }
    }

    @media (max-width: 1440px) {
        .ecommerce-product .offer-bar {
            display: none
        }
    }

    .clothe-colors li input[type=checkbox],
    .clothe-colors li input[type=radio] {
        display: none
    }

    .clothe-colors li label {
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        text-transform: none;
        letter-spacing: 0;
        position: relative
    }

    .clothe-colors li input[type=checkbox]:checked+label::after,
    .clothe-colors li input[type=radio]:checked+label::after {
        content: "\f33e";
        font-family: Phosphor;
        position: absolute;
        inset: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff
    }

    .clothe-size li input[type=checkbox],
    .clothe-size li input[type=radio] {
        display: none
    }

    .clothe-size li label {
        display: inline-block;
        font-size: .765625rem;
        border-radius: 5px;
        text-transform: none;
        letter-spacing: 0;
        position: relative
    }

    .clothe-size li input[type=checkbox]:checked+label,
    .clothe-size li input[type=radio]:checked+label {
        border-color: #e9ebec;
        background-color: #4b93ff;
        color: #fff
    }

    .product-banner-2 .product-content {
        position: absolute;
        right: 102px;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        top: 50%
    }

    @media (max-width: 425px) {
        .product-banner-2 .product-content {
            right: 30px;
            margin-top: 10px
        }
    }

    .error-msg {
        display: none;
        color: var(--tb-danger-text);
        font-size: .875em
    }

    .was-validated .error-msg {
        display: block
    }

    .categories-filter .list-inline-item {
        position: relative;
        margin-right: 0
    }

    .categories-filter .list-inline-item a {
        display: block;
        color: var(--tb-secondary-color);
        font-weight: 600;
        padding: 8px 15px;
        margin: 5px;
        cursor: pointer;
        background-color: var(--tb-light)
    }

    .product-lable {
        -webkit-transform: rotate(-90deg) translateX(-60%);
        transform: rotate(-90deg) translateX(-60%);
        position: absolute;
        top: 0;
        left: -32px
    }

    .element-item {
        -webkit-transition: all .5s;
        transition: all .5s
    }

    .element-item .gallery-product img {
        transition: all .5s
    }

    .element-item .product-btn {
        -webkit-transition: all .5s;
        transition: all .5s;
        opacity: 0;
        position: relative
    }

    .element-item .product-btn .add-btn {
        position: absolute;
        left: 0;
        right: 0;
        top: 245px;
        margin: 0 auto
    }

    .element-item .gallery-product-actions {
        position: absolute;
        top: 15px;
        right: 15px;
        opacity: 0
    }

    .element-item .gallery-product-actions .product-action {
        width: 34px;
        height: 34px
    }

    .element-item:hover .gallery-product img {
        -webkit-transform: scale(1.08);
        transform: scale(1.08)
    }

    .element-item:hover .gallery-product-actions {
        -webkit-transition: all .5s;
        transition: all .5s;
        opacity: 1
    }

    .element-item:hover .product-btn {
        -webkit-transform: translateY(-27px);
        transform: translateY(-27px);
        opacity: 1
    }

    .ecommerce-product-widgets {
        background-color: var(--tb-body-bg)
    }

    .ecommerce-product-widgets .action {
        position: absolute;
        top: 10px;
        right: 10px
    }

    .ecommerce-product-widgets .label {
        position: absolute;
        left: 10px;
        top: 10px
    }

    .ecommerce-deals-widgets .gallery-product img {
        height: 300px;
        width: 100%
    }

    .ecommerce-deals-widgets .countdown-deals .count-title {
        display: none
    }

    .ecommerce-deals-widgets .countdown-deals .count-num {
        font-size: 18px;
        background-color: rgba(255, 255, 255, .6);
        -webkit-filter: blur(15%);
        filter: blur(15%)
    }

    .ecommerce-deals-widgets .content {
        margin-top: -120px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .ecommerce-deals-widgets:hover .content {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px)
    }

    .latest-slider .swiper-button-next,
    .latest-slider .swiper-button-prev {
        top: 22px
    }

    .latest-slider .swiper-button-prev {
        right: 55px;
        left: auto
    }

    .testi-slider .swiper-pagination {
        bottom: 0
    }

    .testi-slider .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        margin: 0 7px !important;
        position: relative
    }

    .testi-slider .swiper-pagination-bullet-active:before {
        position: absolute;
        content: "";
        left: -5px;
        right: 0;
        border: 2px solid #7c6bff;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: -5px
    }

    .client-box .client-desc {
        position: relative
    }

    .client-box .client-desc:before {
        content: "";
        position: absolute;
        width: 25px;
        height: 60px;
        background-color: var(--tb-body-bg);
        border: 1px solid var(--tb-border-color);
        -webkit-transform: rotate(67deg);
        transform: rotate(67deg);
        border-color: transparent var(--tb-border-color) var(--tb-border-color) transparent;
        bottom: -30px;
        left: 80px;
        margin-top: 10px
    }

    .client-images {
        display: inline-block
    }

    .client-images img {
        max-height: 40px;
        width: 200px;
        margin: 6px auto;
        -webkit-transition: all .4s;
        transition: all .4s
    }

    .ecommerce-land-countdown .countdownlist .count-num {
        background-color: rgba(239, 71, 111, .1);
        padding: 16px 8px;
        font-size: 22px
    }

    @media (max-width: 575.98px) {
        .ecommerce-land-countdown .countdownlist .count-num {
            font-size: 16px;
            padding: 8px 6px
        }
    }

    .ecommerce-land-countdown .countdownlist .count-title {
        display: none
    }

    @media (max-width: 575.98px) {
        .ecommerce-land-countdown .countdownlist .count-title {
            font-size: 10px
        }
    }

    .insta-img {
        background-color: #7c6bff;
        display: block;
        overflow: hidden;
        position: relative
    }

    .insta-img img {
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .insta-img i {
        opacity: 0;
        position: absolute;
        inset: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        font-size: 35px;
        color: #fff;
        -webkit-transform: scale(1.5) rotate(-15deg);
        transform: scale(1.5) rotate(-15deg)
    }

    .insta-img:hover img {
        -webkit-transform: scale(1.2) rotate(-3deg);
        transform: scale(1.2) rotate(-3deg);
        opacity: .4
    }

    .insta-img:hover i {
        opacity: 1;
        -webkit-transform: scale(1) rotate(0);
        transform: scale(1) rotate(0)
    }

    .blog-date {
        width: 60px;
        height: 68px;
        text-align: center;
        position: absolute;
        right: 15px;
        margin-top: -70px;
        padding: 8px 0;
        border-top: 4px solid #4b93ff;
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12)
    }

    .insta-lable {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .categrory-box {
        position: relative
    }

    .categrory-box .categrory-content {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: none;
        -webkit-transition: all .5s ease-in;
        transition: all .5s ease-in;
        z-index: 1
    }

    .categrory-box:hover .categrory-content {
        display: inline
    }

    @media (min-width: 992px) {
        .sticky-side-div {
            position: sticky;
            top: calc(70px + 3.5rem)
        }
    }

    @media (min-width: 768px) {
        .productSwiper .swiper-slide {
            height: 80px !important;
            margin-bottom: 15px
        }
    }

    .productSwiper .swiper-slide .product-thumb {
        border: 1px solid var(--tb-border-color-translucent)
    }

    .productSwiper .swiper-slide.swiper-slide-thumb-active .product-thumb {
        border-color: #4b93ff
    }

    .term-condition {
        position: relative;
        padding: 160px 0 300px 0
    }

    .term-card {
        position: relative;
        margin-top: -215px
    }

    .map {
        line-height: 0;
        margin-bottom: -1px
    }

    .productswiper-2 .swiper-wrapper {
        position: relative;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .brand-widget .brand-img {
        max-height: 100px
    }

    .chat-button {
        position: fixed;
        bottom: 0;
        right: 135px;
        min-width: 200px;
        z-index: 1001
    }

    .chat-box {
        position: fixed;
        bottom: 0;
        right: 135px;
        width: 360px;
        z-index: 1001
    }

    .chat-conversation {
        height: calc(100vh - 299px)
    }

    @media (max-width: 991.98px) {
        .chat-conversation {
            height: calc(100vh - 275px)
        }
    }

    .chat-conversation .simplebar-content-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .chat-conversation .simplebar-content-wrapper .simplebar-content {
        margin-top: auto
    }

    .chat-conversation .chat-conversation-list {
        padding-top: 10px;
        margin-bottom: 0
    }

    .chat-conversation .chat-conversation-list>li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .chat-conversation li:last-of-type .conversation-list {
        margin-bottom: 0
    }

    .chat-conversation .chat-list.left .check-message-icon {
        display: none
    }

    .chat-conversation .chat-list .message-box-drop {
        visibility: hidden
    }

    .chat-conversation .chat-list:hover .message-box-drop {
        visibility: visible
    }

    .chat-conversation .chat-avatar {
        margin: 0 16px 0 0
    }

    .chat-conversation .chat-avatar img {
        width: 28px;
        height: 28px;
        border-radius: 50%
    }

    .chat-conversation .chat-day-title {
        position: relative;
        text-align: center;
        margin-bottom: 24px;
        margin-top: 12px;
        width: 100%
    }

    .chat-conversation .chat-day-title .title {
        background-color: #fff;
        position: relative;
        font-size: 13px;
        z-index: 1;
        padding: 6px 12px;
        border-radius: 5px
    }

    .chat-conversation .chat-day-title:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 1px;
        left: 0;
        right: 0;
        background-color: rgba(75, 147, 255, .2);
        top: 10px
    }

    .chat-conversation .chat-day-title .badge {
        font-size: 12px
    }

    .chat-conversation .conversation-list {
        margin-bottom: 24px;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        position: relative;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        max-width: 85%
    }

    @media (max-width: 575.98px) {
        .chat-conversation .conversation-list {
            max-width: 90%
        }
    }

    .chat-conversation .conversation-list .ctext-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 10px
    }

    .chat-conversation .conversation-list .ctext-content {
        word-wrap: break-word;
        word-break: break-word
    }

    .chat-conversation .conversation-list .ctext-wrap-content {
        padding: 12px 20px;
        background-color: var(--tb-light);
        position: relative;
        border-radius: 3px;
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px
    }

    @media (max-width: 575.98px) {
        .chat-conversation .conversation-list .ctext-wrap-content .attached-file .attached-file-avatar {
            display: none
        }

        .chat-conversation .conversation-list .ctext-wrap-content .attached-file .dropdown .dropdown-toggle {
            display: block
        }
    }

    .chat-conversation .conversation-list .conversation-name {
        font-weight: 500;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        gap: 8px
    }

    .chat-conversation .conversation-list .dropdown .dropdown-toggle {
        font-size: 18px;
        padding: 4px;
        color: #878a99
    }

    .chat-conversation .conversation-list .dropdown .dropdown-toggle::after {
        display: none
    }

    @media (max-width: 575.98px) {
        .chat-conversation .conversation-list .dropdown .dropdown-toggle {
            display: none
        }
    }

    .chat-conversation .conversation-list .chat-time {
        font-size: 12px;
        margin-top: 4px;
        text-align: right
    }

    .chat-conversation .conversation-list .message-img {
        border-radius: .2rem;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        gap: 8px
    }

    .chat-conversation .conversation-list .message-img .message-img-list {
        position: relative
    }

    .chat-conversation .conversation-list .message-img img {
        max-width: 150px
    }

    .chat-conversation .conversation-list .message-img .message-img-link {
        position: absolute;
        right: 10px;
        left: auto;
        bottom: 10px
    }

    .chat-conversation .conversation-list .message-img .message-img-link li>a {
        font-size: 18px;
        color: #fff;
        display: inline-block;
        line-height: 20px;
        width: 26px;
        height: 24px;
        border-radius: 3px;
        background-color: rgba(var(--tb-dark-rgb), .7);
        text-align: center
    }

    .chat-conversation .right {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .chat-conversation .right .chat-avatar {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
        margin-right: 0;
        margin-left: 16px
    }

    .chat-conversation .right .chat-time {
        text-align: left;
        color: #878a99
    }

    .chat-conversation .right .conversation-list {
        text-align: right
    }

    .chat-conversation .right .conversation-list .ctext-wrap {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .chat-conversation .right .conversation-list .ctext-wrap .ctext-wrap-content {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
        background-color: rgba(75, 147, 255, .2);
        color: #4b93ff;
        text-align: right;
        -webkit-box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px;
        box-shadow: rgba(135, 138, 153, .1) 0 5px 20px -6px
    }

    .chat-conversation .right .conversation-list .ctext-wrap .ctext-wrap-content .replymessage-block {
        background-color: rgba(255, 255, 255, .5);
        border-color: rgba(var(--vz-success-rgb), 1);
        color: #0c192c
    }

    .chat-conversation .right .conversation-list .ctext-wrap .ctext-wrap-content .replymessage-block .conversation-name {
        color: rgba(var(--vz-success-rgb), 1)
    }

    .chat-conversation .right .conversation-list .conversation-name {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end
    }

    .chat-conversation .right .conversation-list .conversation-name .check-message-icon {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .chat-conversation .right .conversation-list .conversation-name .time {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .chat-conversation .right .conversation-list .conversation-name .name {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .chat-conversation .right .conversation-list .dropdown {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .chat-conversation .right .dot {
        background-color: #0b1729
    }

    @media (min-width: 992px) {
        #subscribeModal img {
            margin-top: -140px
        }
    }

    .bg-cta {
        overflow-x: clip
    }

    @media (max-width: 991.98px) {
        .bg-cta img {
            max-width: 100%;
            height: auto
        }
    }

    .categrory-widgets {
        position: relative
    }

    .categrory-widgets .category-img {
        position: absolute;
        right: -20px;
        bottom: 0;
        max-width: 120px;
        opacity: .25
    }

    #remove-actions {
        display: none
    }

    .seller-search-box .form-control {
        height: 50px;
        padding-left: 40px;
        padding-right: 110px;
        font-size: 16px
    }

    .seller-search-box button {
        right: 6px;
        top: 6px
    }

    .seller-search-box i {
        left: 12px;
        bottom: 0;
        top: 0;
        height: 50px
    }

    .order-tracking .is-complete {
        display: block;
        position: relative;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        outline: 6px solid var(--tb-body-bg);
        background-color: var(--tb-light);
        margin: 0 auto;
        transition: background .25s linear;
        -webkit-transition: background .25s linear;
        z-index: 2
    }

    .order-tracking .is-complete::after {
        display: block;
        position: absolute;
        content: "";
        height: 14px;
        width: 7px;
        top: -2px;
        bottom: 0;
        left: 11px;
        margin: auto 0;
        border: 0 solid var(--tb-tertiary-color);
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: .6
    }

    .order-tracking.completed .is-complete {
        border-color: #06d6a0;
        background-color: #06d6a0
    }

    .order-tracking.completed .is-complete::after {
        border-color: #fff;
        border-width: 0 2px 2px 0;
        width: 7px;
        left: 11px;
        opacity: 1
    }

    .order-tracking.completed::before {
        background-color: #06d6a0
    }

    .order-tracking::before {
        content: "";
        display: block;
        height: 1px;
        width: 115%;
        background-color: var(--tb-border-color);
        top: 15px;
        position: absolute;
        right: -70%;
        z-index: 0
    }

    .order-tracking:last-child:before {
        display: none
    }

    .track-orders .order-tracking::before {
        width: 150%;
        right: -104%
    }

    .invoice-table tbody:last-child {
        border: none
    }

    .currency-select .choices__inner {
        padding: 0;
        padding-right: 15px;
        min-height: 0
    }

    .currency-select .choices__list--single {
        padding: 0 16px 0 4px
    }

    .currency-select .choices[data-type*=select-one] {
        bottom: 0
    }

    .currency-select .choices[data-type*=select-one] :after {
        top: 4px
    }

    .currency-select .choices[data-type*=select-one] .choices__inner {
        padding-bottom: 0
    }

    .watch-layout {
        position: relative;
        padding: 175px 0 130px;
        min-height: 80vh;
        background-image: url(../images/watch/home.jpg);
        background-size: cover;
        background-position: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .watch-category-widgets .category-btn {
        margin-top: -3.8rem;
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .watch-category-widgets:hover .category-btn {
        opacity: 1
    }

    .about-watch {
        position: relative
    }

    .about-watch::after {
        content: "";
        position: absolute;
        inset: 0;
        height: 450px;
        width: 450px;
        border-radius: 50%;
        background-color: rgba(75, 147, 255, .04);
        z-index: -1
    }

    @media (max-width: 991.98px) {
        .about-watch img {
            max-width: 100%;
            height: auto
        }

        .about-watch::after {
            height: 150px;
            width: 150px
        }
    }

    .watch-cta {
        padding: 100px 0 185px;
        background-image: url(../images/watch/cta.jpg);
        background-size: cover;
        background-position: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .video-card {
        position: relative;
        margin-top: -6.5rem
    }

    .video-main {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .video-main .waves {
        position: absolute;
        width: 110px;
        height: 110px;
        background: rgba(11, 23, 41, .3);
        opacity: 0;
        border-radius: 100%;
        right: -34px;
        bottom: -34px;
        z-index: 0;
        -webkit-animation: waves 3s ease-in-out infinite;
        animation: waves 3s ease-in-out infinite
    }

    .video-main .wave-1 {
        -webkit-animation-delay: 0s;
        animation-delay: 0s
    }

    .video-main .wave-2 {
        -webkit-animation-delay: 1s;
        animation-delay: 1s
    }

    .video-main .wave-3 {
        -webkit-animation-delay: 2s;
        animation-delay: 2s
    }

    @-webkit-keyframes waves {
        0% {
            -webkit-transform: scale(.2, .2);
            transform: scale(.2, .2);
            opacity: 0
        }

        50% {
            opacity: .9
        }

        100% {
            -webkit-transform: scale(.9, .9);
            transform: scale(.9, .9);
            opacity: 0
        }
    }

    @keyframes waves {
        0% {
            -webkit-transform: scale(.2, .2);
            transform: scale(.2, .2);
            opacity: 0
        }

        50% {
            opacity: .9
        }

        100% {
            -webkit-transform: scale(.9, .9);
            transform: scale(.9, .9);
            opacity: 0
        }
    }

    .watch-product .watch-widgets-menu {
        position: absolute;
        bottom: 60px;
        left: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .watch-product:hover .watch-widgets-menu {
        opacity: 1;
        bottom: 90px
    }

    .watch-widgets-menu a {
        height: 42px;
        width: 42px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #0c192c;
        background-color: var(--tb-tertiary-bg);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .watch-widgets-menu a:hover {
        color: #4b93ff
    }

    .watch-widgets-menu .bookmark:hover {
        color: #f1be46
    }

    .watch-widgets-menu .bookmark.active {
        color: #f1be46
    }

    .watch-widgets-menu .bookmark.active i::before {
        content: "\f586"
    }

    .modern-fashion-home .font-effect {
        font-size: 14rem;
        opacity: .04;
        top: 50px
    }

    @media (max-width: 991.98px) {
        .modern-fashion-home .font-effect {
            font-size: 5rem
        }
    }

    @media (max-width: 991.98px) {
        .modern-fashion-home .main-home-img img {
            height: 100%;
            max-width: 100%
        }
    }

    .feedback-slider :is(.swiper-button-next, .swiper-button-prev) {
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .feedback-slider:hover :is(.swiper-button-next, .swiper-button-prev) {
        opacity: 1
    }

    .subscribe-input input {
        padding: .66rem .99rem;
        padding-right: 145px
    }

    .subscribe-input .btn {
        position: absolute;
        top: 1px;
        right: 1px
    }

    .modern-fashion-home {
        position: relative;
        padding: 170px 0 80px
    }

    .modern-fashion-home::after,
    .modern-fashion-home::before {
        content: "";
        position: absolute;
        border: 50px solid #f1be46;
        opacity: .1;
        border-radius: 50%
    }

    .modern-fashion-home::before {
        right: -90px;
        top: -90px;
        height: 250px;
        width: 250px
    }

    .modern-fashion-home::after {
        left: -120px;
        bottom: -120px;
        height: 350px;
        width: 350px
    }

    .fashion-offer-widgets {
        height: 250px;
        background-repeat: no-repeat;
        background-position: right
    }

    .cta-section {
        position: relative;
        padding: 150px 0;
        background-size: cover
    }

    .product-widget {
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .product-widget .product-menu {
        position: absolute;
        right: -.6rem;
        top: .6rem;
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .product-widget .product-menu li a {
        height: 42px;
        width: 42px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: var(--tb-body-color);
        background-color: var(--tb-secondary-bg);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .product-widget .product-menu li a:hover {
        color: #4b93ff
    }

    .product-widget .product-menu li .bookmark:hover {
        color: #f1be46
    }

    .product-widget .product-menu li .bookmark.active {
        color: #f1be46
    }

    .product-widget .product-menu li .bookmark.active i::before {
        content: "\f586"
    }

    .product-widget .product-btn {
        position: absolute;
        bottom: -.6rem;
        left: .6rem;
        right: .6rem;
        opacity: 0;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .product-widget .product-img-2 {
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        opacity: 0;
        display: none
    }

    .product-widget:hover {
        -webkit-box-shadow: 0 5px 10px rgba(135, 138, 153, .12);
        box-shadow: 0 5px 10px rgba(135, 138, 153, .12)
    }

    .product-widget:hover .product-menu {
        right: .6rem;
        opacity: 1
    }

    .product-widget:hover .product-btn {
        opacity: 1;
        bottom: .6rem
    }

    .product-widget:hover .product-img-main {
        display: none
    }

    .product-widget:hover .product-img-2 {
        opacity: 1;
        display: inline-block;
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .hidden-product {
        display: none
    }

    .category-widgets-main {
        overflow: hidden
    }

    .category-widgets-main img {
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .category-widgets-main .widgets-wrapper {
        inset: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-bottom: 25px
    }

    .category-widgets-main:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .category-widgets-main::before {
        content: "";
        width: 0;
        height: 2px;
        position: absolute;
        -webkit-transition: all .2s linear;
        transition: all .2s linear;
        background: rgba(11, 23, 41, .1);
        left: 50%;
        top: 10px;
        -webkit-transition-duration: .4s;
        transition-duration: .4s
    }

    .category-widgets-main::after {
        content: "";
        width: 0;
        height: 2px;
        position: absolute;
        -webkit-transition: all .2s linear;
        transition: all .2s linear;
        background: rgba(11, 23, 41, .1);
        left: 50%;
        bottom: 10px;
        -webkit-transition-duration: .4s;
        transition-duration: .4s
    }

    .category-widgets-main .effect::after,
    .category-widgets-main .effect::before {
        content: "";
        width: 2px;
        height: 0;
        position: absolute;
        -webkit-transition: all .2s linear;
        transition: all .2s linear;
        background: rgba(11, 23, 41, .1)
    }

    .category-widgets-main .effect::before {
        left: 10px;
        top: 50%;
        -webkit-transition-duration: .4s;
        transition-duration: .4s
    }

    .category-widgets-main .effect::after {
        right: 10px;
        top: 50%;
        -webkit-transition-duration: .4s;
        transition-duration: .4s
    }

    .category-widgets-main:hover::after,
    .category-widgets-main:hover::before {
        width: calc(100% - 20px);
        left: 10px
    }

    .category-widgets-main:hover .effect::after,
    .category-widgets-main:hover .effect::before {
        top: 10px;
        height: calc(100% - 20px)
    }

    .trend-fashion-home {
        position: relative;
        padding: 105px 0 60px
    }

    .home-widgets {
        min-height: 85vh;
        height: 400px
    }

    /*# sourceMappingURL=app.min.css.map */
</style>

<?php include "./dbconfig.php"; ?>

<body>

    <a href="#" class="btn btn-info btn-icon backtotop" style="bottom: 50px;">
        <i class="bi bi-arrow-up-short fs-4"></i>
    </a>
    <div class="container-fluid">
        <div class="row open">
            <div class="col-5 d-flex align-items-center"><i class="bi bi-geo-alt me-2"></i><b class="">Phoenix,USA</b></div>
            <div class="col-4 d-flex align-items-center"><i class="bi bi-envelope mt-1 me-2"></i><b>support@themesbrand.com</b></div>
            <div class="col-sm-2 d-flex align-items-center justify-content-center border-end"><i class="bi bi-telephone-outbound mt-1 me-2"></i><b class="float-end">+(235) 01234 5678</b></div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center"><b class="float-end"><img height="16" class="rounded-circle me-2" src="https://themesbrand.com/toner/html/assets/images/flags/us.svg">English</b></div>
        </div>
    </div>


    <div class="row">
        <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
            <div class="container">
                <a class="navbar-brand d-none d-lg-block" href="http://localhost/NewToner/">
                    <div class="logo-dark">
                        <img src="https://themesbrand.com/toner/html/assets/images/logo-dark.png" alt="" height="25">
                    </div>
                </a>
                <button class="btn btn-soft-primary btn-icon d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list fs-20"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0 fw-medium" id="navigation-menu">
                        <li class="nav-item d-block d-lg-none">
                            <a class="d-block p-3 h-auto text-center" href="#">
                                <img src="../assets/images/logo-dark.png" alt="" height="25">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#" data-key="t-home">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover dropdown-mega-full" style="position: inherit;">
                            <a class="nav-link catalog1" href="#" role="button">Catalog</a>
                            <div class="first dropdown-menu">
                                <div class="row g-0 g-lg-4">
                                    <div class="col-lg-2 d-none d-lg-block">
                                        <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('https://themesbrand.com/toner/html/assets/images/ecommerce/img-1.jpg');background-size: cover;">
                                            <div class="bg-overlay bg-light bg-opacity-25"></div>
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-hover text-white fw-medium" style="display: flex; background-color: #7c6bff;"><i class="bi bi-shop align-middle me-1"></i> <span data-key="t-shop-now">Shop Now</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 fw-medium">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-6 text-muted menu-title" data-key="t-men">Men</p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-clothing">Clothing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-watches">Watches</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-bags-Luggage">Bags &amp; Luggage</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-footwear">Footwear</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-innerwear">Innerwear</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-other-accessories">Other Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 fw-medium">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-6 text-muted menu-title" data-key="t-women">Women</p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-list-defualt.html" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-list-left.html" class="nav-link" data-key="t-handbags-clutches">Handbags &amp; Clutches</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-grid-right.html" class="nav-link" data-key="t-lingerie-nightwear">Lingerie &amp; Nightwear</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-grid-sidebar-banner.html" class="nav-link" data-key="t-footwear">Footwear</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-grid-defualt.html" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion &amp; Silver Jewellery</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 fw-medium">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-6 text-muted menu-title" data-key="t-accessories-others">Accessories &amp; Others</p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-grid-right.html" class="nav-link" data-key="t-home-kitchen-pets">Home, Kitchen, Pets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-list-left.html" class="nav-link" data-key="t-beauty-health-grocery">Beauty, Health, Grocery</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-grid-sidebar-banner.html" class="nav-link" data-key="t-sports-fitness-bags-luggage">Sports, Fitness, Bags, Luggage</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-list.html" class="nav-link" data-key="t-car-motorbike-industrial">Car, Motorbike, Industrial</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-list-right.html" class="nav-link" data-key="t-books">Books</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 fw-medium">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-6 text-muted menu-title" data-key="t-others">Others</p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-sign-up">Sign Up</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-sign-in">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-passowrd-reset">Password Reset</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-cover.html" class="nav-link" data-key="t-error-404">Error 404</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 d-none d-lg-block fw-medium">
                                        <div class="p-3">
                                            <p class="mb-3 text-uppercase fs-6 text-muted" data-key="t-top-brands">Top Brands</p>
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-8.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-2.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-3.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-4.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-5.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#!" class="d-block p-2 border border-dashed text-center rounded-3">
                                                        <img src="https://themesbrand.com/toner/html/assets/images/brands/img-6.png" alt="" class="avatar-sm">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-hover dropdown-mega-full" style="position: inherit;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-shop">Shop</a>
                            <div class="second dropdown-menu dropdown-mega-menu-xl dropdown-menu-center p-0">
                                <div class="row g-0 g-lg-4">
                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('https://themesbrand.com/toner/html/assets/images/ecommerce/img-2.jpg'); background-size: cover;">
                                            <div class="bg-overlay bg-primary" style="opacity: 0.90;"></div>
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div class="text-center">
                                                    <h6 class="card-title text-white">Welcome to Toner</h6>
                                                    <p class="text-white-75">See all the products at once.</p>
                                                    <a href="#!" class="btn btn-light btn-sm btn-hover">Shop Now <i class="ph-arrow-right align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row g-0 g-lg-4">
                                            <div class="col-lg-6">
                                                <div class="py-3">
                                                    <ul class="dropdown-menu-list list-unstyled mb-0">
                                                        <li>
                                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-checkout-pages">Checkout Pages</p>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="address.html" class="nav-link" data-key="t-address">Address</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="track-order.html" class="nav-link" data-key="t-track-order">Track Order</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="payment.html" class="nav-link" data-key="t-payment">Payment</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="review.html" class="nav-link" data-key="t-review">Review</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="confirmation.html" class="nav-link" data-key="t-confirmation">Confirmation</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="order-history.html" class="nav-link" data-key="t-my-orders-order-history">My Orders / Order History</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                                    <li>
                                                        <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-support">Support</p>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="shop-cart.html" class="nav-link" data-key="t-shopping-cart">Shopping Cart</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="checkout.html" class="nav-link" data-key="t-checkout">Checkout</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="wishlist.html" class="nav-link" data-key="t-wishlist">Wishlist</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" data-key="t-pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="third dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                                <li class="nav-item dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-products">Products</a>
                                    <ul class="dropdown-menu submenu">
                                        <li class="dropdown dropdown-hover">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-grid-view">Grid View</a>
                                            <ul class="dropdown-menu submenu">
                                                <li><a class="nav-link" href="product-grid-defualt.html" data-key="t-defualt">Defualt</a></li>
                                                <li><a class="nav-link" href="product-grid-sidebar-banner.html" data-key="t-sidebar-with-banner">Sidebar with Banner</a></li>
                                                <li><a class="nav-link" href="product-grid-right.html" data-key="t-right-sidebar">Right Sidebar</a></li>
                                                <li><a class="nav-link" href="product-grid.html" data-key="t-no-sidebar">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-hover">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-list-view">List View</a>
                                            <ul class="dropdown-menu submenu">
                                                <li><a class="nav-link" href="product-list-defualt.html" data-key="t-defualt">Defualt</a></li>
                                                <li><a class="nav-link" href="product-list-left.html" data-key="t-left-sidebar">Left Sidebar</a></li>
                                                <li><a class="nav-link" href="product-list-right.html" data-key="t-right-sidebar">Right Sidebar</a></li>
                                                <li><a class="nav-link" href="product-list.html" data-key="t-no-sidebar">No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="product-details.html" data-key="t-product-details">Product Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-users">Users</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="nav-link" href="account.html" data-key="t-my-account">My Account</a></li>
                                        <li><a class="nav-link" href="auth-signin-basic.html" data-key="t-sign-in">Sign In</a></li>
                                        <li><a class="nav-link" href="auth-signup-basic.html" data-key="t-sign-up">Sign Up</a></li>
                                        <li><a class="nav-link" href="auth-pass-reset-basic.html" data-key="t-passowrd-reset">Password Reset</a></li>
                                        <li><a class="nav-link" href="auth-pass-change-basic.html" data-key="t-create-password">Password Create</a></li>
                                        <li><a class="nav-link" href="auth-success-msg-basic.html" data-key="t-success-message">Success Message</a></li>
                                        <li><a class="nav-link" href="auth-twostep-basic.html" data-key="t-two-step-verify">Two Step Verify</a></li>
                                        <li><a class="nav-link" href="auth-logout-basic.html" data-key="t-logout">Logout</a></li>
                                        <li><a class="nav-link" href="auth-404.html" data-key="t-error-404">Error 404</a></li>
                                        <li><a class="nav-link" href="auth-500.html" data-key="t-error-500">Error 500</a></li>
                                        <li><a class="nav-link" href="coming-soon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="products-category.html" class="nav-link" data-key="t-categories">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about-us.html" class="nav-link" data-key="t-about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="purchase-guide.html" class="nav-link" data-key="t-purchase-guide">Purchase Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link" data-key="t-terms-of-service">Terms of Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link" data-key="t-privacy-policy">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="store-locator.html" class="nav-link" data-key="t-store-locator">Store Locator</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ecommerce-faq.html" class="nav-link" data-key="t-faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="invoice.html" class="nav-link" data-key="t-invoice">Invoice</a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-email-template">Email Template</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="nav-link" href="email-black-friday.html" data-key="t-black-friday">Black Friday</a></li>
                                        <li><a class="nav-link" href="email-flash-sale.html" data-key="t-flash-sale">Flash Sale</a></li>
                                        <li><a class="nav-link" href="email-order-success.html" data-key="t-order-success">Order Success</a></li>
                                        <li><a class="nav-link" href="email-order-success-2.html" data-key="t-order-success-2">Order Success 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="../components/index.html" class="nav-link" target="_blank" data-key="t-components">Components</a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-multi-level">Multi Level</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="nav-link" href="#" data-key="t-level-1.1">Level 1.1</a></li>
                                        <li><a class="nav-link" href="#" data-key="t-level-1.2">Level 1.2</a></li>
                                        <li class="dropdown dropdown-hover">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-1.3">Level 1.3</a>
                                            <ul class="dropdown-menu submenu">
                                                <li><a class="nav-link" href="#" data-key="t-level-2.1">Level 2.1</a></li>
                                                <li><a class="nav-link" href="#" data-key="t-level-2.2">Level 2.2</a></li>
                                                <li class="dropdown dropdown-hover">
                                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-2.3">Level 2.3</a>
                                                    <ul class="dropdown-menu submenu">
                                                        <li><a class="nav-link" href="#" data-key="t-level-3.1">Level 3.1</a></li>
                                                        <li><a class="nav-link" href="#" data-key="t-level-3.2">Level 3.2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html" data-key="t-contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

                <div class="d-flex align-items-center">

                    <div class="d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bi bi-search fs-16"></i>
                        </button>
                    </div>


                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted mt-1" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bi bi-search"></i>
                        </button>

                        <div class="dropdown topbar-head-dropdown header-item dropdown-hover-end">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-sun align-middle fs-20"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                                <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                            </div>
                        </div>

                        <div class="">
                            
                                <button type="button"  class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted">
                                <a href="Cart.php" >
                                    <i class="bi bi-cart3 align-middle text-secondary fs-20"></i>
                                    </a>
                                </button>
                           

                        </div>


                        <div class="dropdown header-item topbar-user topbar-head-dropdown dropdown-hover-end">
                            <div type="button" class="btn h-100 rounded-0 mt-2 pt-3" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="https://themesbrand.com/toner/html/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                    </span>
                                </span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Gaurav!</h6>
                                <a class="dropdown-item" href=""><i class="bi bi-person-circle text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href=""><i class="bi bi-cart4 text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Order Track</span></a>
                                <a class="dropdown-item" href=""><span class="badge bg-success-subtle text-success float-end ms-1 mt-1">New</span><i class="bi bi-disc text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Frontend</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=""><i class="bi bi-gear text-muted fs-15 align-middle me-1"></i> <span class="align-middle">Settings</span></a>


                                <form method="POST">
                                    <?php if (!isset($_SESSION['user'])) {
                                    ?>
                                        <a class="dropdown-item" href="http://localhost/NewToner/?auth=login"><i class="bi bi-box-arrow-right text-muted fs-15 align-middle me-1"></i> <span class="align-middle">LogIn</span></a>

                                    <?php
                                    } ?>
                                </form>

                                <form method="POST">

                                        <button class="dropdown-item" type="submit" name="logout_btn"><i class="bi bi-box-arrow-left text-muted fs-15 align-middle me-2"></i>Logout</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </div>