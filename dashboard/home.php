<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <title>Toner Dashboard</title>
</head>
<style>
    .maincontent {
        margin-left: 0px;
    }
</style>

<body>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12 col-lg-6 order-first">
                        <div class="row row-cols-xxl-4 row-cols-1">
                            <div class="col">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Earnings</p>
                                                <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value" data-target="98851.35">98,851.35</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="badge badge-soft-success mb-0">
                                                        <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-secondary-subtle text-secondary rounded fs-4">
                                                    <i class="bi bi-wallet"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="vr rounded bg-info opacity-50" style="width: 4px;"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Orders</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="65802">65,802</span> </h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="badge badge-soft-danger mb-0">
                                                        <i class="ri-arrow-right-down-line align-bottom"></i> -2.74 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded fs-4">
                                                    <i class="bi bi-shop-window"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="vr rounded bg-warning opacity-50" style="width: 4px;"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Customers</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="79958">79,958</span> </h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="badge badge-soft-success mb-0">
                                                        <i class="ri-arrow-right-up-line align-bottom"></i> +29.08 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-4">
                                                    <i class="bi bi-person-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="vr rounded bg-primary opacity-50" style="width: 4px;"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Products</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="36758">36,758</span> </h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="badge badge-soft-success mb-0">
                                                        <i class="ri-arrow-right-up-line align-bottom"></i> +1.67 %
                                                    </h5>
                                                    <p class="text-muted mb-0">than last week</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-primary-subtle text-primary rounded fs-4">
                                                    <i class="bi bi-gem"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div> <!-- end row-->
                    </div>
                    <div class="col-xxl-9 order-last mt-4" style="width:916px;">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-8">
                                        <div id="line_chart_datalabel" data-colors="[&quot;--tb-secondary&quot;, &quot;--tb-danger&quot;, &quot;--tb-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 420px;">
                                            <div id="apexchartsrw6ewt5t" class="apexcharts-canvas apexchartsrw6ewt5t apexcharts-theme-light" style="width: 572px; height: 405px;"><svg id="SvgjsSvg1997" width="500" height="405" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">

                                                    <g id="SvgjsG1999" class="apexcharts-inner apexcharts-graphical" transform="translate(52.40798377990723, 30)">
                                                        <defs id="SvgjsDefs1998">
                                                            <clipPath id="gridRectMaskrw6ewt5t">
                                                                <rect id="SvgjsRect2005" width="503.6607656478882" height="337.406400308609" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskrw6ewt5t"></clipPath>
                                                            <clipPath id="nonForecastMaskrw6ewt5t"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskrw6ewt5t">
                                                                <rect id="SvgjsRect2006" width="501.6607656478882" height="339.406400308609" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient2011" x1="0" y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop2012" stop-opacity="0.3" stop-color="rgba(239,71,111,0.3)" offset="0.2"></stop>
                                                                <stop id="SvgjsStop2013" stop-opacity="0" stop-color="rgba(0,0,0,0)" offset="0.8"></stop>
                                                                <stop id="SvgjsStop2014" stop-opacity="0" stop-color="rgba(0,0,0,0)" offset="1"></stop>
                                                                <stop id="SvgjsStop2015" stop-opacity="0.3" stop-color="rgba(239,71,111,0.3)" offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine2004" x1="0" y1="0" x2="0" y2="335.406400308609" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="335.406400308609" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG2044" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g id="SvgjsG2045" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2047" font-family="Helvetica, Arial, sans-serif" x="0" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2048">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText2050" font-family="Helvetica, Arial, sans-serif" x="45.24188778617166" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2051">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text id="SvgjsText2053" font-family="Helvetica, Arial, sans-serif" x="90.4837755723433" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2054">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text id="SvgjsText2056" font-family="Helvetica, Arial, sans-serif" x="135.72566335851494" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2057">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText2059" font-family="Helvetica, Arial, sans-serif" x="180.96755114468658" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2060">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText2062" font-family="Helvetica, Arial, sans-serif" x="226.20943893085823" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2063">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText2065" font-family="Helvetica, Arial, sans-serif" x="271.4513267170299" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2066">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text id="SvgjsText2068" font-family="Helvetica, Arial, sans-serif" x="316.69321450320155" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2069">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text id="SvgjsText2071" font-family="Helvetica, Arial, sans-serif" x="361.9351022893732" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2072">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text id="SvgjsText2074" font-family="Helvetica, Arial, sans-serif" x="407.1769900755449" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2075">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text id="SvgjsText2077" font-family="Helvetica, Arial, sans-serif" x="452.41887786171657" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2078">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text id="SvgjsText2080" font-family="Helvetica, Arial, sans-serif" x="497.6607656478882" y="364.406400308609" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan2081">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG2027" class="apexcharts-grid">
                                                            <g id="SvgjsG2028" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine2032" x1="0" y1="67.0812800617218" x2="497.6607656478882" y2="67.0812800617218" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2033" x1="0" y1="134.1625601234436" x2="497.6607656478882" y2="134.1625601234436" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2034" x1="0" y1="201.2438401851654" x2="497.6607656478882" y2="201.2438401851654" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2035" x1="0" y1="268.3251202468872" x2="497.6607656478882" y2="268.3251202468872" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2029" class="apexcharts-gridlines-vertical"></g>
                                                            <rect id="SvgjsRect2037" width="497.6607656478882" height="67.0812800617218" x="0" y="0" rx="0" ry="0" opacity="0.2" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskrw6ewt5t)" class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2038" width="497.6607656478882" height="67.0812800617218" x="0" y="67.0812800617218" rx="0" ry="0" opacity="0.2" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskrw6ewt5t)" class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2039" width="497.6607656478882" height="67.0812800617218" x="0" y="134.1625601234436" rx="0" ry="0" opacity="0.2" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskrw6ewt5t)" class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2040" width="497.6607656478882" height="67.0812800617218" x="0" y="201.2438401851654" rx="0" ry="0" opacity="0.2" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskrw6ewt5t)" class="apexcharts-grid-row"></rect>
                                                            <rect id="SvgjsRect2041" width="497.6607656478882" height="67.0812800617218" x="0" y="268.3251202468872" rx="0" ry="0" opacity="0.2" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskrw6ewt5t)" class="apexcharts-grid-row"></rect>
                                                            <line id="SvgjsLine2043" x1="0" y1="335.406400308609" x2="497.6607656478882" y2="335.406400308609" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2042" x1="0" y1="1" x2="0" y2="335.406400308609" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2007" class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2008" class="apexcharts-series" seriesName="Refunds" data:longestSeries="true" rel="1" data:realIndex="1">
                                                                <path id="SvgjsPath2016" d="M 0 335.406400308609 L 0 301.8657602777481C 15.834660725160077 301.8657602777481 29.407227061011575 283.75381466108325 45.24188778617165 283.75381466108325C 61.07654851133173 283.75381466108325 74.64911484718323 234.1136674154091 90.4837755723433 234.1136674154091C 106.31843629750338 234.1136674154091 119.89100263335489 197.5543697817707 135.72566335851496 197.5543697817707C 151.56032408367503 197.5543697817707 165.13289041952655 234.7844802160263 180.9675511446866 234.7844802160263C 196.8022118698467 234.7844802160263 210.3747782056982 240.15098262096404 226.20943893085828 240.15098262096404C 242.04409965601835 240.15098262096404 255.61666599186987 243.84045302435874 271.45132671702993 243.84045302435874C 287.28598744219 243.84045302435874 300.85855377804154 257.5921154370117 316.6932145032016 257.5921154370117C 332.52787522836167 257.5921154370117 346.10044156421316 272.6854034508991 361.9351022893732 272.6854034508991C 377.7697630145333 272.6854034508991 391.34232935038483 277.04568665491104 407.1769900755449 277.04568665491104C 423.01165080070496 277.04568665491104 436.5842171365565 284.4246274617004 452.41887786171657 284.4246274617004C 468.25353858687663 284.4246274617004 481.8261049227282 294.4868194709587 497.66076564788824 294.4868194709587C 497.66076564788824 294.4868194709587 497.66076564788824 294.4868194709587 497.66076564788824 335.406400308609M 497.66076564788824 294.4868194709587z" fill="url(#SvgjsLinearGradient2011)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrw6ewt5t)" pathTo="M 0 335.406400308609 L 0 301.8657602777481C 15.834660725160077 301.8657602777481 29.407227061011575 283.75381466108325 45.24188778617165 283.75381466108325C 61.07654851133173 283.75381466108325 74.64911484718323 234.1136674154091 90.4837755723433 234.1136674154091C 106.31843629750338 234.1136674154091 119.89100263335489 197.5543697817707 135.72566335851496 197.5543697817707C 151.56032408367503 197.5543697817707 165.13289041952655 234.7844802160263 180.9675511446866 234.7844802160263C 196.8022118698467 234.7844802160263 210.3747782056982 240.15098262096404 226.20943893085828 240.15098262096404C 242.04409965601835 240.15098262096404 255.61666599186987 243.84045302435874 271.45132671702993 243.84045302435874C 287.28598744219 243.84045302435874 300.85855377804154 257.5921154370117 316.6932145032016 257.5921154370117C 332.52787522836167 257.5921154370117 346.10044156421316 272.6854034508991 361.9351022893732 272.6854034508991C 377.7697630145333 272.6854034508991 391.34232935038483 277.04568665491104 407.1769900755449 277.04568665491104C 423.01165080070496 277.04568665491104 436.5842171365565 284.4246274617004 452.41887786171657 284.4246274617004C 468.25353858687663 284.4246274617004 481.8261049227282 294.4868194709587 497.66076564788824 294.4868194709587C 497.66076564788824 294.4868194709587 497.66076564788824 294.4868194709587 497.66076564788824 335.406400308609M 497.66076564788824 294.4868194709587z" pathFrom="M -1 335.406400308609 L -1 335.406400308609 L 45.24188778617165 335.406400308609 L 90.4837755723433 335.406400308609 L 135.72566335851496 335.406400308609 L 180.9675511446866 335.406400308609 L 226.20943893085828 335.406400308609 L 271.45132671702993 335.406400308609 L 316.6932145032016 335.406400308609 L 361.9351022893732 335.406400308609 L 407.1769900755449 335.406400308609 L 452.41887786171657 335.406400308609 L 497.66076564788824 335.406400308609"></path>
                                                                <path id="SvgjsPath2017" d="M 0 301.8657602777481C 15.834660725160077 301.8657602777481 29.407227061011575 283.75381466108325 45.24188778617165 283.75381466108325C 61.07654851133173 283.75381466108325 74.64911484718323 234.1136674154091 90.4837755723433 234.1136674154091C 106.31843629750338 234.1136674154091 119.89100263335489 197.5543697817707 135.72566335851496 197.5543697817707C 151.56032408367503 197.5543697817707 165.13289041952655 234.7844802160263 180.9675511446866 234.7844802160263C 196.8022118698467 234.7844802160263 210.3747782056982 240.15098262096404 226.20943893085828 240.15098262096404C 242.04409965601835 240.15098262096404 255.61666599186987 243.84045302435874 271.45132671702993 243.84045302435874C 287.28598744219 243.84045302435874 300.85855377804154 257.5921154370117 316.6932145032016 257.5921154370117C 332.52787522836167 257.5921154370117 346.10044156421316 272.6854034508991 361.9351022893732 272.6854034508991C 377.7697630145333 272.6854034508991 391.34232935038483 277.04568665491104 407.1769900755449 277.04568665491104C 423.01165080070496 277.04568665491104 436.5842171365565 284.4246274617004 452.41887786171657 284.4246274617004C 468.25353858687663 284.4246274617004 481.8261049227282 294.4868194709587 497.66076564788824 294.4868194709587" fill="none" fill-opacity="1" stroke="#ef476f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrw6ewt5t)" pathTo="M 0 301.8657602777481C 15.834660725160077 301.8657602777481 29.407227061011575 283.75381466108325 45.24188778617165 283.75381466108325C 61.07654851133173 283.75381466108325 74.64911484718323 234.1136674154091 90.4837755723433 234.1136674154091C 106.31843629750338 234.1136674154091 119.89100263335489 197.5543697817707 135.72566335851496 197.5543697817707C 151.56032408367503 197.5543697817707 165.13289041952655 234.7844802160263 180.9675511446866 234.7844802160263C 196.8022118698467 234.7844802160263 210.3747782056982 240.15098262096404 226.20943893085828 240.15098262096404C 242.04409965601835 240.15098262096404 255.61666599186987 243.84045302435874 271.45132671702993 243.84045302435874C 287.28598744219 243.84045302435874 300.85855377804154 257.5921154370117 316.6932145032016 257.5921154370117C 332.52787522836167 257.5921154370117 346.10044156421316 272.6854034508991 361.9351022893732 272.6854034508991C 377.7697630145333 272.6854034508991 391.34232935038483 277.04568665491104 407.1769900755449 277.04568665491104C 423.01165080070496 277.04568665491104 436.5842171365565 284.4246274617004 452.41887786171657 284.4246274617004C 468.25353858687663 284.4246274617004 481.8261049227282 294.4868194709587 497.66076564788824 294.4868194709587" pathFrom="M -1 335.406400308609 L -1 335.406400308609 L 45.24188778617165 335.406400308609 L 90.4837755723433 335.406400308609 L 135.72566335851496 335.406400308609 L 180.9675511446866 335.406400308609 L 226.20943893085828 335.406400308609 L 271.45132671702993 335.406400308609 L 316.6932145032016 335.406400308609 L 361.9351022893732 335.406400308609 L 407.1769900755449 335.406400308609 L 452.41887786171657 335.406400308609 L 497.66076564788824 335.406400308609" fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2009" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2108" r="0" cx="0" cy="0" class="apexcharts-marker w01a1kr0n" stroke="#ef476f" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2018" class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG2019" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2022" d="M 0 275.0332482530594C 15.834660725160077 275.0332482530594 29.407227061011575 243.50504662405015 45.24188778617165 243.50504662405015C 61.07654851133173 243.50504662405015 74.64911484718323 219.35578580183028 90.4837755723433 219.35578580183028C 106.31843629750338 219.35578580183028 119.89100263335489 238.13854421911242 135.72566335851496 238.13854421911242C 151.56032408367503 238.13854421911242 165.13289041952655 211.30603219442366 180.9675511446866 211.30603219442366C 196.8022118698467 211.30603219442366 210.3747782056982 194.53571217899324 226.20943893085828 194.53571217899324C 242.04409965601835 194.53571217899324 255.61666599186987 171.0572641573906 271.45132671702993 171.0572641573906C 287.28598744219 171.0572641573906 300.85855377804154 153.61613134134294 316.6932145032016 153.61613134134294C 332.52787522836167 153.61613134134294 346.10044156421316 164.34913615121843 361.9351022893732 164.34913615121843C 377.7697630145333 164.34913615121843 391.34232935038483 140.8706881296158 407.1769900755449 140.8706881296158C 423.01165080070496 140.8706881296158 436.5842171365565 122.08792971233368 452.41887786171657 122.08792971233368C 468.25353858687663 122.08792971233368 481.8261049227282 85.5286320786953 497.66076564788824 85.5286320786953" fill="none" fill-opacity="1" stroke="rgba(124,107,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskrw6ewt5t)" pathTo="M 0 275.0332482530594C 15.834660725160077 275.0332482530594 29.407227061011575 243.50504662405015 45.24188778617165 243.50504662405015C 61.07654851133173 243.50504662405015 74.64911484718323 219.35578580183028 90.4837755723433 219.35578580183028C 106.31843629750338 219.35578580183028 119.89100263335489 238.13854421911242 135.72566335851496 238.13854421911242C 151.56032408367503 238.13854421911242 165.13289041952655 211.30603219442366 180.9675511446866 211.30603219442366C 196.8022118698467 211.30603219442366 210.3747782056982 194.53571217899324 226.20943893085828 194.53571217899324C 242.04409965601835 194.53571217899324 255.61666599186987 171.0572641573906 271.45132671702993 171.0572641573906C 287.28598744219 171.0572641573906 300.85855377804154 153.61613134134294 316.6932145032016 153.61613134134294C 332.52787522836167 153.61613134134294 346.10044156421316 164.34913615121843 361.9351022893732 164.34913615121843C 377.7697630145333 164.34913615121843 391.34232935038483 140.8706881296158 407.1769900755449 140.8706881296158C 423.01165080070496 140.8706881296158 436.5842171365565 122.08792971233368 452.41887786171657 122.08792971233368C 468.25353858687663 122.08792971233368 481.8261049227282 85.5286320786953 497.66076564788824 85.5286320786953" pathFrom="M -1 335.406400308609 L -1 335.406400308609 L 45.24188778617165 335.406400308609 L 90.4837755723433 335.406400308609 L 135.72566335851496 335.406400308609 L 180.9675511446866 335.406400308609 L 226.20943893085828 335.406400308609 L 271.45132671702993 335.406400308609 L 316.6932145032016 335.406400308609 L 361.9351022893732 335.406400308609 L 407.1769900755449 335.406400308609 L 452.41887786171657 335.406400308609 L 497.66076564788824 335.406400308609" fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2020" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2109" r="0" cx="0" cy="0" class="apexcharts-marker we3vsbblx" stroke="#7c6bff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2023" class="apexcharts-series" seriesName="Earnings" data:longestSeries="true" rel="2" data:realIndex="2">
                                                                <path id="SvgjsPath2026" d="M 0 248.20073622837066C 15.834660725160077 248.20073622837066 29.407227061011575 214.66009619750977 45.24188778617165 214.66009619750977C 61.07654851133173 214.66009619750977 74.64911484718323 228.07635220985412 90.4837755723433 228.07635220985412C 106.31843629750338 228.07635220985412 119.89100263335489 219.6911922021389 135.72566335851496 219.6911922021389C 151.56032408367503 219.6911922021389 165.13289041952655 189.16920977405547 180.9675511446866 189.16920977405547C 196.8022118698467 189.16920977405547 210.3747782056982 158.64722734597206 226.20943893085828 158.64722734597206C 242.04409965601835 158.64722734597206 255.61666599186987 120.41089771079064 271.45132671702993 120.41089771079064C 287.28598744219 120.41089771079064 300.85855377804154 95.59082408795356 316.6932145032016 95.59082408795356C 332.52787522836167 95.59082408795356 346.10044156421316 56.3482752518463 361.9351022893732 56.3482752518463C 377.7697630145333 56.3482752518463 391.34232935038483 69.09371846357345 407.1769900755449 69.09371846357345C 423.01165080070496 69.09371846357345 436.5842171365565 45.27986404166222 452.41887786171657 45.27986404166222C 468.25353858687663 45.27986404166222 481.8261049227282 22.472228820676776 497.66076564788824 22.472228820676776" fill="none" fill-opacity="1" stroke="rgba(6,214,160,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskrw6ewt5t)" pathTo="M 0 248.20073622837066C 15.834660725160077 248.20073622837066 29.407227061011575 214.66009619750977 45.24188778617165 214.66009619750977C 61.07654851133173 214.66009619750977 74.64911484718323 228.07635220985412 90.4837755723433 228.07635220985412C 106.31843629750338 228.07635220985412 119.89100263335489 219.6911922021389 135.72566335851496 219.6911922021389C 151.56032408367503 219.6911922021389 165.13289041952655 189.16920977405547 180.9675511446866 189.16920977405547C 196.8022118698467 189.16920977405547 210.3747782056982 158.64722734597206 226.20943893085828 158.64722734597206C 242.04409965601835 158.64722734597206 255.61666599186987 120.41089771079064 271.45132671702993 120.41089771079064C 287.28598744219 120.41089771079064 300.85855377804154 95.59082408795356 316.6932145032016 95.59082408795356C 332.52787522836167 95.59082408795356 346.10044156421316 56.3482752518463 361.9351022893732 56.3482752518463C 377.7697630145333 56.3482752518463 391.34232935038483 69.09371846357345 407.1769900755449 69.09371846357345C 423.01165080070496 69.09371846357345 436.5842171365565 45.27986404166222 452.41887786171657 45.27986404166222C 468.25353858687663 45.27986404166222 481.8261049227282 22.472228820676776 497.66076564788824 22.472228820676776" pathFrom="M -1 335.406400308609 L -1 335.406400308609 L 45.24188778617165 335.406400308609 L 90.4837755723433 335.406400308609 L 135.72566335851496 335.406400308609 L 180.9675511446866 335.406400308609 L 226.20943893085828 335.406400308609 L 271.45132671702993 335.406400308609 L 316.6932145032016 335.406400308609 L 361.9351022893732 335.406400308609 L 407.1769900755449 335.406400308609 L 452.41887786171657 335.406400308609 L 497.66076564788824 335.406400308609" fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2024" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle2110" r="0" cx="0" cy="0" class="apexcharts-marker wou696o1xj" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2010" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                            <g id="SvgjsG2021" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            <g id="SvgjsG2025" class="apexcharts-datalabels" data:realIndex="2"></g>
                                                        </g>
                                                        <g id="SvgjsG2030" class="apexcharts-grid-borders">
                                                            <line id="SvgjsLine2031" x1="0" y1="0" x2="497.6607656478882" y2="0" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2036" x1="0" y1="335.406400308609" x2="497.6607656478882" y2="335.406400308609" stroke="#f1f1f1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2082" x1="0" y1="336.406400308609" x2="497.6607656478882" y2="336.406400308609" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                                        </g>
                                                        <line id="SvgjsLine2103" x1="0" y1="0" x2="497.6607656478882" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2104" x1="0" y1="0" x2="497.6607656478882" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2105" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2106" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2107" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect2111" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect2112" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect2003" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG2083" class="apexcharts-yaxis" rel="0" transform="translate(22.407983779907227, 0)">
                                                        <g id="SvgjsG2084" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2086" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2087">1000</tspan>
                                                                <title>1000</title>
                                                            </text><text id="SvgjsText2089" font-family="Helvetica, Arial, sans-serif" x="20" y="98.5812800617218" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2090">800</tspan>
                                                                <title>800</title>
                                                            </text><text id="SvgjsText2092" font-family="Helvetica, Arial, sans-serif" x="20" y="165.6625601234436" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2093">600</tspan>
                                                                <title>600</title>
                                                            </text><text id="SvgjsText2095" font-family="Helvetica, Arial, sans-serif" x="20" y="232.7438401851654" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2096">400</tspan>
                                                                <title>400</title>
                                                            </text><text id="SvgjsText2098" font-family="Helvetica, Arial, sans-serif" x="20" y="299.8251202468872" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2099">200</tspan>
                                                                <title>200</title>
                                                            </text><text id="SvgjsText2101" font-family="Helvetica, Arial, sans-serif" x="20" y="366.906400308609" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2102">0</tspan>
                                                                <title>0</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG2000" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(124, 107, 255);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(239, 71, 111);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(6, 214, 160);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="d-flex align-items-center gap-3 mb-4 mt-3 mt-xxl-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022" readonly="readonly">
                                                <div class="input-group-text bg-primary border-primary text-white">
                                                    <i class="bi bi-calendar4-week"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown flex-shrink-0">
                                                <a class="text-reset dropdown-btn d-inline-block" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-secondary text-decor">Report<i class="bi bi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Download Report</a>
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Import</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 text-center">
                                            <div class="col-6 col-sm-6">
                                                <div class="p-3 border border-dashed border-bottom-0 border-end-0">
                                                    <h5 class="mb-1"><span class="counter-value" data-target="65802">65,802</span></h5>
                                                    <p class="text-muted mb-0">Orders</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-6">
                                                <div class="p-3 border border-dashed border-bottom-0">
                                                    <h5 class="mb-1">$<span class="counter-value" data-target="98851.35">98,851.35</span>k</h5>
                                                    <p class="text-muted mb-0">Earnings</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-6">
                                                <div class="p-3 border border-dashed border-end-0">
                                                    <h5 class="mb-1"><span class="counter-value" data-target="2450">2,450</span></h5>
                                                    <p class="text-muted mb-0">Refunds</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-sm-6">
                                                <div class="p-3 border border-dashed">
                                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">18.92</span>%</h5>
                                                    <p class="text-muted mb-0">Conversation Ratio</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div><!--end row-->

                                        <div class="card mt-4 mb-0 bg-info-subtle border-0">
                                            <div class="card-body box1">
                                                <h5 class="fs-16">Reached 5k Customers</h5>
                                                <p class="text-muted">Hey! Awesome products! Can you share the best product name ?</p>
                                                <a href="statistics.html" class="btn btn-primary btn-sm text-white report-btn">See Report <i class="bi bi-arrow-right ms-1 align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <div class="card overflow-hidden mid-box">
                            <div class="position-absolute opacity-50 start-0 end-0 top-0 bottom-0" style="background-image: url('../assets/images/sidebar/body-light-1.png');"></div>
                            <div class="card-body d-flex justify-content-between align-items-center z-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-shop fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title fw-medium fs-17 mb-1">Have you tried new <b>Toner eCommerce Templates</b> ?</h5>
                                        <p class="mb-0">That allows customers to browse and purchase items from an online store.</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="product-create.html" class="btn btn-success btn-label btn-hover rounded-pill"><i class="bi bi-box-seam label-icon align-middle rounded-pill fs-16 me-2"></i> Add New Product</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-xxl-3 col-lg-6 order-0 order-xxl-last mt-4">
                        <div class="card card-height-100">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Top Sales Location</h6>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Download Report</a>
                                                <a class="dropdown-item" href="#">Export</a>
                                                <a class="dropdown-item" href="#">Import</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="world-map-line-markers" data-colors="[&quot;--tb-light&quot;]" style="height: 255px" class="jvm-container"><svg width="247" height="255">
                                        <defs></defs>
                                        <g id="jvm-regions-group" transform="scale(0.27444444444444444) translate(0, 173.0347727394554)">
                                            <path d="M651.84,359.63l-0.6,-2.05l-1.36,-1.76l-2.31,-0.11l-0.41,0.48l0.2,0.98l-0.54,1.03l-0.71,-0.37l-0.68,0.36l-1.19,-0.37l-0.37,-2.06l-0.81,-1.92l0.39,-1.52l-0.21,-0.46l-1.16,-0.55l0.3,-0.55l1.48,-0.98l0.03,-0.64l-1.56,-1.27l0.56,-1.2l1.6,0.97l1.04,0.16l0.18,1.62l0.33,0.35l5.65,0.65l-0.86,1.73l-1.21,0.35l-0.77,1.56l0.07,0.46l1.37,1.41l0.68,-0.19l0.42,-1.44l1.21,3.96l-0.03,1.26l-0.32,-0.15l-0.41,0.28Z" data-code="BD" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M429.3,264.88l1.93,0.28l2.07,-0.74l1.41,1.55l1.25,0.86l-0.23,2.13l-0.68,0.42l-0.18,1.46l-1.63,-1.32l-1.4,0.17l-2.72,-3.22l-1.17,-0.21l-0.2,-0.77l1.57,-0.62Z" data-code="BE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M421.42,377.38l-0.11,0.96l0.34,1.18l1.4,1.73l0.07,1.11l0.32,0.37l2.56,0.52l-0.04,1.3l-0.38,0.54l-1.07,0.21l-0.73,1.19l-0.63,0.21l-3.22,-0.25l-0.94,0.39l-5.4,-0.05l-0.39,0.38l0.16,2.75l-1.23,-0.43l-1.17,0.1l-0.89,0.57l-2.27,-1.73l-0.13,-1.12l0.61,-0.96l0.01,-0.93l1.87,-2.0l0.44,-1.83l0.43,-0.39l1.28,0.26l1.05,-0.52l0.47,-0.73l1.84,-1.1l0.55,-0.84l2.2,-1.01l1.15,-0.31l0.72,0.46l1.13,-0.01Z" data-code="BF" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M491.72,293.09l-0.93,1.06l-0.91,2.45l0.52,1.52l-1.65,-0.27l-2.55,1.06l-0.27,1.69l-1.79,0.25l-2.03,-1.11l-1.92,0.88l-1.4,-0.07l-0.15,-1.87l-1.09,-1.09l0.34,-1.71l0.91,-1.02l0.01,-0.52l-1.15,-1.41l-0.06,-1.14l0.44,0.87l0.46,0.21l0.87,-0.23l1.91,0.53l3.68,0.18l1.44,-0.92l2.7,-0.74l1.67,1.16l0.95,0.26Z" data-code="BG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M463.49,287.91l2.09,0.57l1.72,-0.03l1.56,0.78l-0.4,0.99l1.14,1.61l-0.27,1.19l-1.82,1.31l-0.37,1.54l-1.65,-0.96l-0.89,-1.36l-2.11,-2.07l-1.65,-2.57l0.25,-0.7l0.45,0.41l0.59,-0.06l0.43,-0.59l0.92,-0.06Z" data-code="BA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M707.48,403.47l0.69,-0.65l1.41,-0.91l-0.15,1.64l-0.81,-0.05l-0.61,0.58l-0.53,-0.6Z" data-code="BN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M263.83,471.11l-3.09,-0.24l-0.38,0.24l-0.7,1.56l-1.31,-1.57l-3.28,-0.66l-2.38,2.47l-1.3,0.27l-0.88,-3.36l-1.31,-2.93l0.74,-2.43l-0.12,-0.42l-1.2,-1.03l-0.37,-1.92l-1.09,-1.59l1.46,-2.61l-0.97,-2.36l0.48,-1.07l-0.35,-0.74l0.91,-1.33l0.16,-3.89l0.5,-1.18l-1.81,-3.45l2.46,0.08l0.8,-0.85l3.4,-1.92l2.66,-0.35l-0.19,1.39l0.3,1.07l-0.05,1.98l2.72,2.29l2.88,0.49l0.89,0.87l1.79,0.59l0.98,0.71l1.71,0.05l1.17,0.61l0.6,2.74l-0.7,0.54l0.96,3.03l0.37,0.28l4.3,0.1l-0.25,1.22l0.27,1.03l1.43,0.92l0.5,1.38l-0.41,1.9l-0.65,1.11l0.13,1.37l-2.69,-1.68l-2.4,-0.03l-4.36,0.77l-1.49,2.56l-0.1,1.55l-0.75,2.44Z" data-code="BO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M781.1,291.58l1.81,0.77l1.63,-1.08l0.4,2.83l-3.6,1.02l-1.98,3.05l-3.61,-2.12l-0.58,0.21l-1.27,3.44l-2.14,0.04l-0.3,-2.88l1.09,-2.32l2.44,-0.17l0.37,-0.34l1.26,-6.78l2.45,3.07l2.03,1.27ZM773.56,314.42l-0.92,2.42l0.38,1.64l-1.15,1.91l-3.02,1.35l-4.59,0.3l-3.33,3.22l-1.25,-0.86l-0.09,-2.06l-0.46,-0.38l-4.35,0.67l-3.0,1.42l-2.84,0.06l-0.37,0.26l0.11,0.44l2.34,2.04l-1.55,4.67l-1.25,0.95l-0.8,-0.75l0.56,-2.43l-0.2,-0.44l-1.47,-0.8l-0.77,-1.54l2.14,-0.91l1.27,-1.83l2.45,-1.53l1.83,-2.06l4.77,-0.88l2.6,0.61l0.45,-0.22l2.39,-5.05l1.27,1.14l0.53,0.01l5.1,-4.39l1.68,-4.08l-0.39,-3.75l0.92,-1.82l2.11,-0.49l1.24,4.16l-0.07,2.45l-2.25,3.13l-0.03,3.43ZM757.77,324.02l0.2,0.64l-1.01,1.31l-1.17,-0.72l-1.28,0.7l-0.69,1.54l-1.01,-0.53l0.01,-1.04l1.14,-1.49l1.58,0.15l0.85,-1.05l1.38,0.49Z" data-code="JP" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M495.45,425.39l-1.08,-2.99l1.14,-0.11l0.64,-1.19l0.76,0.09l0.65,1.83l-2.1,2.37Z" data-code="BI" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M429.57,385.57l-0.05,0.81l0.5,1.35l-0.42,0.87l0.17,0.79l-1.82,2.14l-0.57,1.77l-0.08,5.44l-1.41,0.2l-0.48,-1.36l0.11,-5.73l-0.52,-0.7l-0.2,-1.35l-1.48,-1.49l0.22,-0.91l0.89,-0.43l0.42,-0.93l1.27,-0.36l1.22,-1.35l0.61,-0.0l1.62,1.25Z" data-code="BJ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M650.32,342.67l0.85,0.75l-0.12,1.18l-3.76,-0.12l-1.57,0.41l-1.93,-0.91l1.49,-2.09l1.12,-0.6l1.62,0.6l1.33,0.09l0.98,0.68Z" data-code="BT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M228.38,368.9l-0.8,0.41l-2.27,-1.09l0.84,-0.25l2.14,0.31l1.18,0.59l-1.09,0.03Z" data-code="JM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M483.92,460.24l2.27,4.08l2.83,2.92l0.96,0.32l0.77,2.5l2.13,0.63l1.04,0.8l-3.01,1.7l-2.32,2.09l-1.54,2.79l-1.52,0.46l-0.64,2.01l-1.34,0.54l-1.84,-0.12l-1.21,-0.77l-1.36,-0.31l-1.22,0.64l-0.75,1.42l-2.31,1.98l-1.39,0.22l-0.36,-0.63l0.16,-1.82l-1.48,-2.63l-0.62,-0.44l-0.0,-7.35l2.08,-0.08l0.38,-0.4l0.07,-9.12l1.56,-0.08l3.63,-0.87l0.8,0.91l0.52,0.07l1.5,-0.97l2.2,-0.5Z" data-code="BW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M259.98,404.95l3.24,0.7l0.65,-0.53l4.55,-1.32l1.08,-1.06l-0.02,-0.64l0.55,-0.05l0.28,0.28l-0.26,0.87l0.22,0.48l0.73,0.32l0.4,0.81l-0.62,0.86l-0.4,2.13l0.82,2.56l1.69,1.43l1.43,0.2l3.17,-1.68l3.18,0.3l0.65,-0.75l-0.27,-0.92l1.9,-0.09l2.39,0.99l1.06,-0.61l0.84,0.78l1.2,-0.18l1.18,-1.06l0.84,-1.94l1.36,-2.11l0.37,-0.05l1.89,5.46l1.33,0.59l0.05,1.28l-1.77,1.94l0.02,0.56l1.02,0.87l4.07,0.36l0.08,2.16l0.66,0.29l1.74,-1.5l6.97,2.32l1.02,1.22l-0.35,1.18l0.49,0.5l2.81,-0.74l4.77,1.3l3.75,-0.08l3.57,2.0l3.29,2.86l1.93,0.73l2.12,0.12l0.71,0.62l1.21,4.52l-0.95,4.0l-4.72,5.09l-1.64,2.95l-1.72,2.07l-0.8,0.3l-0.72,2.05l0.18,4.81l-0.94,5.62l-0.81,1.15l-0.43,3.44l-2.55,3.58l-0.4,2.59l-1.86,1.08l-0.67,1.57l-2.54,0.01l-3.94,1.05l-1.83,1.24l-2.87,0.85l-3.03,2.27l-2.2,2.92l-0.36,2.08l0.4,1.64l-0.45,2.73l-0.52,1.26l-1.77,1.62l-2.75,5.05l-3.83,3.63l-1.23,2.92l-1.18,1.22l-0.37,-0.92l0.96,-1.23l0.01,-0.48l-1.52,-2.09l-4.56,-3.52l-1.03,-0.01l-2.38,-2.13l-0.85,0.0l5.38,-5.77l3.77,-2.69l0.21,-2.55l-1.34,-1.86l-0.92,0.07l0.59,-2.44l0.01,-1.59l-1.11,-0.85l-1.75,0.31l-0.44,-3.22l-0.52,-0.97l-1.88,-0.9l-1.24,0.48l-2.17,-0.43l0.15,-3.31l-0.63,-1.37l0.67,-0.74l-0.22,-1.37l0.66,-1.16l0.44,-2.08l-0.61,-1.86l-1.4,-0.87l-0.2,-0.77l0.34,-1.41l-0.38,-0.49l-4.52,-0.1l-0.72,-2.27l0.59,-0.42l-0.03,-1.12l-0.5,-0.87l-0.32,-1.71l-1.45,-0.76l-1.63,-0.02l-1.05,-0.73l-1.6,-0.48l-1.13,-1.0l-2.69,-0.41l-2.47,-2.08l0.13,-4.38l-0.45,-0.45l-3.46,0.5l-3.44,1.95l-0.6,0.74l-2.89,-0.17l-1.47,0.42l-0.72,-0.18l0.15,-3.54l-0.64,-0.34l-1.94,1.42l-1.87,-0.06l-0.83,-1.19l-1.38,-0.27l0.21,-1.01l-1.35,-1.5l-0.88,-1.92l0.56,-0.6l-0.0,-0.81l1.29,-0.62l0.22,-0.43l-0.22,-1.19l0.61,-0.91l0.15,-0.99l2.65,-1.58l1.99,-0.47l0.42,-0.36l2.06,0.11l0.42,-0.33l1.19,-8.0l-0.41,-1.56l-1.1,-1.0l0.01,-1.33l1.91,-0.42l0.08,-0.96l-0.33,-0.43l-1.14,-0.2l-0.02,-0.83l4.47,0.05l0.82,-0.67l0.82,1.81l0.8,0.07l1.15,1.1l2.26,-0.05l0.71,-0.83l2.78,-0.96l0.48,-1.13l1.6,-0.64l0.24,-0.47l-0.48,-0.83l-1.83,-0.19l-0.36,-3.22Z" data-code="BR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M227.69,345.88l0.0,-0.01l0.0,0.0l-0.0,0.01ZM226.4,353.1l-0.48,-1.18l-0.85,-0.78l0.36,-1.17l0.95,2.03l0.01,1.1ZM225.65,345.38l-1.96,0.32l-0.04,-0.26l0.74,-0.14l1.26,0.08Z" data-code="BS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M493.82,245.43l0.3,0.93l0.53,0.25l1.16,-0.47l2.08,0.9l0.2,1.73l-0.48,1.43l1.57,2.82l0.93,0.75l0.13,0.97l1.58,0.7l0.48,0.74l-0.6,0.57l-1.85,-0.13l-0.76,0.48l-0.12,0.47l1.08,3.5l-1.96,0.33l-0.87,1.12l-0.12,1.49l-0.67,-0.22l-2.03,0.17l-0.52,-0.75l-0.57,-0.09l-0.72,0.54l-0.9,-0.5l-1.91,-0.08l-2.74,-0.95l-2.61,-0.34l-2.01,0.09l-1.52,1.11l-0.65,0.08l-0.07,-1.5l-0.64,-1.57l1.4,-1.01l0.01,-1.65l-0.7,-1.69l-0.08,-1.37l2.2,-0.03l2.72,-1.61l0.73,-2.54l2.1,-1.69l-0.2,-1.69l3.82,-2.26l2.27,0.97Z" data-code="BY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M198.03,374.09l0.1,-4.57l0.69,-0.06l0.74,-1.32l0.34,0.28l-0.4,1.33l0.17,0.59l-0.34,2.3l-1.3,1.44Z" data-code="BZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M491.5,228.55l2.65,-2.55l-0.01,-0.58l-2.35,-2.15l7.46,-9.43l1.0,-2.89l-0.09,-0.41l-3.55,-3.64l0.93,-3.78l-2.18,-4.19l1.62,-5.27l-2.85,-6.95l2.24,-4.74l-0.06,-0.43l-3.73,-4.33l0.33,-4.4l1.87,-0.61l4.26,-2.85l2.35,-2.28l3.83,4.05l6.96,1.77l9.34,7.63l1.83,2.99l0.16,4.03l-2.62,3.11l-3.84,1.55l-11.03,-4.69l-2.16,0.81l-0.14,0.63l3.99,4.45l0.31,8.71l5.34,3.55l0.64,-0.27l0.32,-2.78l-1.43,-2.53l1.23,-1.72l5.74,3.47l0.43,-0.01l2.11,-1.42l0.15,-0.48l-1.59,-4.12l5.51,-5.69l1.99,0.31l2.25,2.09l0.65,-0.16l1.46,-4.3l-2.03,-4.0l1.18,-3.78l-1.5,-3.67l5.98,1.86l1.2,3.14l-2.74,0.7l-0.3,0.39l0.02,3.61l2.07,2.45l0.43,0.11l3.87,-1.38l0.85,-4.25l13.69,-8.82l1.16,0.21l-2.17,3.65l0.26,0.59l3.11,0.7l0.4,-0.14l1.68,-2.16l4.51,-0.18l3.61,-2.68l2.61,3.78l0.67,-0.02l2.85,-4.55l-0.0,-0.43l-2.5,-3.89l1.03,-1.89l7.03,2.08l3.39,2.18l9.05,7.85l0.62,-0.13l1.64,-3.95l-2.48,-3.58l-0.07,-1.39l-0.31,-0.37l-2.62,-0.61l0.73,-3.21l-1.33,-5.76l-0.07,-2.28l4.55,-7.04l1.67,-7.53l1.59,-1.44l6.17,2.09l0.48,4.29l-2.34,6.42l1.55,2.76l0.79,5.18l-0.57,9.85l2.73,4.33l-1.02,4.26l-4.88,9.07l0.23,0.57l2.86,0.92l0.49,-0.22l0.94,-2.13l2.83,-1.82l0.65,-3.1l2.12,-3.05l-1.37,-4.06l1.14,-4.42l-0.31,-0.49l-2.47,-0.52l-0.55,-3.59l1.95,-7.61l-3.13,-6.05l4.31,-5.2l-0.45,-5.83l0.53,-0.08l1.2,4.22l-0.98,7.66l0.21,0.4l2.68,1.42l0.58,-0.43l-1.09,-5.45l3.9,-2.98l4.9,-0.41l4.5,4.5l0.49,0.06l0.17,-0.47l-2.21,-6.76l-0.24,-8.85l4.01,-1.66l5.93,0.39l5.54,-1.19l0.28,-0.55l-1.97,-4.64l2.73,-5.9l2.89,-0.36l4.78,-4.84l6.49,-1.33l1.07,-2.85l6.11,-0.9l1.91,2.17l0.58,0.02l5.5,-5.45l4.43,0.17l0.41,-0.34l0.68,-4.62l2.32,-4.63l5.58,-4.48l3.69,3.23l-3.04,2.5l0.14,0.69l5.42,1.64l0.64,5.13l0.7,0.21l2.17,-2.49l6.98,0.14l5.48,5.07l1.92,3.72l-0.59,4.98l-2.66,2.78l-6.56,5.27l-1.96,2.84l0.18,0.6l3.08,1.27l3.68,2.26l0.45,-0.02l1.76,-1.33l1.14,5.11l0.34,0.31l0.41,-0.22l1.03,-2.14l3.75,-1.32l7.65,1.4l0.57,3.81l0.35,0.34l10.47,1.28l0.45,-0.39l0.13,-6.16l4.81,1.41l3.93,-0.03l3.85,4.37l1.1,5.17l-1.42,3.65l3.15,6.24l4.05,3.25l0.63,-0.2l2.24,-7.6l3.55,3.15l0.44,0.06l4.09,-2.03l4.67,2.34l0.49,-0.1l1.68,-2.01l3.85,1.04l0.49,-0.48l-1.76,-7.3l3.0,-3.3l22.19,5.31l2.15,4.74l6.55,5.95l10.36,-1.34l4.76,1.21l1.93,2.89l-0.3,5.24l3.26,2.4l3.66,-1.4l4.3,-0.18l4.84,1.4l4.5,-0.75l4.22,6.04l0.56,0.1l3.1,-2.22l0.13,-0.49l-1.96,-4.39l0.94,-2.74l7.63,1.95l5.23,-0.41l7.05,3.36l9.59,8.27l6.43,6.42l-0.21,3.79l1.82,1.88l0.45,0.06l0.21,-0.41l-0.52,-4.08l6.13,0.86l4.58,5.48l-2.15,2.3l-3.97,0.6l-0.34,0.39l-0.06,5.64l-0.78,0.94l-1.98,-0.15l-1.91,-1.99l-3.16,-1.63l-0.77,-2.69l-2.54,-0.99l-2.81,0.69l-1.11,-1.73l0.5,-2.12l-0.56,-0.45l-3.0,1.46l-0.2,0.51l1.06,2.68l-1.31,2.33l-3.03,2.42l-3.08,-0.41l-0.37,0.63l2.22,3.03l1.47,4.59l1.16,1.53l0.26,2.04l-0.46,1.02l-4.64,-1.05l-6.95,4.01l-2.18,0.6l-7.62,6.88l-0.81,1.88l-3.15,-3.07l-0.49,-0.06l-6.18,3.75l-0.93,-1.52l-0.61,-0.09l-2.26,2.01l-3.15,-0.64l-0.47,0.3l-0.79,3.18l-3.03,4.85l0.09,1.91l0.26,0.36l2.58,0.95l-0.3,6.03l-1.97,0.14l-0.36,0.29l-1.07,3.72l0.87,1.82l-4.01,2.02l-1.04,4.88l-3.49,0.95l-0.29,0.32l-0.73,4.06l-3.07,3.18l-0.71,-2.11l-2.45,-15.41l1.17,-6.06l2.06,-2.67l0.2,-2.12l3.83,-1.13l4.47,-6.06l4.28,-5.09l4.48,-4.07l2.13,-7.67l-0.45,-0.5l-3.36,0.72l-1.47,4.3l-5.81,5.21l-1.86,-5.8l-0.49,-0.26l-6.68,1.94l-6.27,8.55l-0.01,0.46l1.74,2.54l-8.37,1.57l0.16,-3.05l-0.32,-0.41l-3.89,-0.75l-3.3,2.39l-7.61,-0.82l-8.47,1.58l-17.7,19.78l0.24,0.67l3.73,0.52l1.14,2.49l2.65,1.15l0.46,-0.13l1.47,-1.95l2.35,0.24l3.43,4.41l0.08,3.28l-1.96,4.11l-0.21,4.69l-1.11,6.02l-3.72,5.32l-0.87,2.56l-8.3,10.17l-3.18,1.92l-1.29,0.04l-1.45,-1.54l-0.53,-0.05l-2.48,1.84l0.28,-0.27l0.36,-4.08l-0.6,-2.85l1.77,-1.03l2.89,0.6l0.44,-0.22l1.71,-3.57l0.84,-3.92l0.97,-1.37l1.32,-3.37l-0.48,-0.53l-4.14,1.11l-2.19,1.46l-3.38,-0.0l-1.05,-3.43l-2.97,-2.72l-4.29,-1.26l-1.76,-6.1l-2.63,-6.06l-2.3,-1.58l-3.75,-1.25l-3.46,0.09l-3.19,0.77l-2.26,2.18l0.05,0.61l1.21,0.86l0.03,1.88l-1.34,1.28l-2.26,4.23l-0.03,1.71l-3.16,2.2l-2.8,-1.36l-3.02,0.27l-1.18,-1.17l-1.68,-0.52l-3.94,2.75l-3.21,0.62l-2.27,0.93l-3.04,-0.6l-2.21,0.03l-1.47,-1.89l-2.61,-1.95l-2.65,-0.52l-5.44,1.21l-3.23,-1.49l-0.71,-3.08l-5.2,-1.5l-2.75,-1.64l-0.54,0.13l-2.59,4.17l0.89,2.46l-2.1,2.34l-3.38,-0.91l-2.42,-0.14l-1.85,-1.84l-2.51,-0.06l-2.46,-1.17l-3.86,1.89l-4.72,3.31l-3.26,0.87l-1.17,-2.07l-0.41,-0.2l-2.97,0.48l-1.1,-1.58l-1.62,-0.7l-1.31,-2.32l-1.38,-0.72l-3.71,0.94l-3.3,-2.2l-0.56,0.12l-0.97,1.52l-5.27,-9.77l-3.03,-3.13l0.73,-1.08l-0.04,-0.5l-0.5,-0.06l-6.2,3.97l-1.82,0.18l0.16,-1.83l-0.23,-0.4l-3.22,-1.46l-2.47,0.85l-0.7,-4.0l-0.31,-0.32l-4.5,-0.95l-2.52,1.84l-6.18,1.58l-1.3,1.08l-9.51,1.62l-1.15,1.45l-0.03,0.46l1.56,2.48l-1.98,0.89l-0.21,0.52l0.35,0.85l-2.18,1.8l0.03,0.64l3.81,2.6l-0.44,1.31l-3.21,-0.16l-0.87,1.02l-3.08,-1.9l-3.97,0.08l-2.66,1.61l-8.29,-4.28l-4.1,0.06l-5.42,4.44l-0.37,2.36l-2.0,-1.76l-0.63,0.13l-2.0,4.27l0.61,1.02l-1.32,2.63l0.05,0.44l2.13,2.54l1.95,0.05l1.39,2.15l-0.23,1.74l1.12,0.83l-0.86,1.61l-2.49,0.71l-2.49,3.66l0.0,0.45l2.19,3.19l-0.16,2.44l2.54,3.7l-1.62,1.81l-0.67,-0.14l-1.63,-1.93l-2.29,-0.94l-0.94,-1.47l-2.34,-0.71l-1.48,0.44l-0.42,-0.51l-3.52,-1.68l-5.76,-1.14l-0.47,0.2l-2.87,-2.64l-2.9,-1.36l-1.63,-1.56l1.39,-0.52l2.08,-3.01l-0.04,-0.51l-0.98,-1.01l3.14,-1.27l0.25,-0.4l-0.07,-0.8l-0.5,-0.35l-1.72,0.45l0.04,-0.92l1.06,-0.85l2.31,-0.26l0.34,-0.28l0.4,-1.47l-0.51,-1.94l0.95,-1.86l0.01,-1.32l-0.27,-0.37l-3.69,-1.26l-1.41,0.02l-1.42,-1.68l-0.43,-0.12l-1.78,0.57l-2.78,-1.21l-0.01,-0.71l-0.89,-1.73l-2.01,-0.38l-0.13,-0.77l0.53,-1.15l-1.6,-2.31l-3.58,0.03l-0.92,0.88l-0.42,-0.07l-1.05,-3.54l2.29,-0.07l0.97,-0.92l0.06,-0.51l-0.9,-1.27l-1.4,-0.62l-0.06,-0.85l-0.95,-0.73l-1.43,-2.57l0.49,-1.21l-0.25,-2.07l-2.69,-1.38l-1.22,0.37l-0.45,-0.94l-2.46,-1.05l-0.74,-2.46l-0.21,-2.19l-1.07,-1.09l0.93,-1.49l-0.72,-4.29l1.7,-2.67l-0.24,-0.98ZM749.34,295.94l-0.76,0.56l-0.11,0.15l-0.01,-0.65l0.87,-0.06ZM871.96,154.57l2.04,-0.2l3.29,2.04l-0.13,0.64l-2.37,1.7l-5.54,0.79l-0.34,-1.85l3.05,-3.11ZM797.75,123.25l-2.42,3.18l-3.66,-0.78l-4.39,-3.6l0.47,-2.52l10.01,3.72ZM783.79,118.53l-1.81,6.68l-8.92,-0.26l-4.06,2.13l-4.64,-5.86l1.28,-6.57l3.04,-1.79l6.39,0.44l8.71,5.22ZM778.23,253.99l-0.64,-1.28l0.31,-0.17l0.33,1.45ZM778.36,254.55l0.92,4.28l-0.05,4.08l1.05,4.08l2.23,6.09l-2.91,-0.99l-0.51,0.27l-1.54,5.47l2.42,4.01l-0.04,1.39l-1.22,-1.41l-0.65,0.06l-1.07,1.83l-0.29,-1.88l0.28,-3.61l-0.28,-4.01l0.58,-2.92l0.11,-5.24l-1.46,-4.02l0.21,-5.38l2.23,-2.09ZM780.09,139.86l-3.31,0.05l-5.09,-1.07l2.11,-3.11l2.77,-0.74l3.29,3.15l0.23,1.71ZM683.7,87.54l-13.17,4.38l4.34,-15.76l1.75,-1.29l1.59,0.74l6.17,7.25l-0.68,4.69ZM670.82,80.26l-5.03,1.48l-6.76,-3.64l-4.04,-4.98l-1.9,-10.03l-3.29,-2.93l6.28,-10.21l5.0,-3.39l4.63,7.67l5.72,14.22l-0.6,11.8ZM564.4,160.28l-0.92,0.41l-7.78,-0.94l-0.83,-3.41l-4.32,-2.0l-0.33,-3.85l2.54,-1.96l-0.08,-4.42l4.9,-7.29l-0.16,-0.58l-1.86,-0.88l5.7,-7.68l-0.57,-4.44l5.43,-5.07l8.18,-6.55l8.25,-1.96l4.4,-4.05l4.43,-1.3l1.54,3.81l-1.55,3.04l-16.43,9.84l-7.93,9.27l-7.69,17.13l0.59,6.93l4.49,5.95ZM548.68,56.87l-5.47,3.05l-0.54,2.57l-2.49,2.05l-2.33,-2.98l1.37,-4.49l-0.35,-0.52l-4.3,-0.36l3.7,-2.13l3.34,-0.17l0.47,3.78l0.35,0.35l0.42,-0.25l1.41,-3.62l2.04,-2.24l3.21,2.97l-0.81,1.96ZM477.39,251.71l-4.1,0.06l-2.6,-0.41l0.38,-1.28l3.15,-1.29l3.25,1.22l-0.09,1.7Z" data-code="RU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M497.0,418.15l0.71,1.01l-0.11,1.09l-1.63,0.03l-1.04,1.39l-0.83,-0.11l0.51,-1.2l0.08,-1.34l0.42,-0.41l0.7,0.14l1.19,-0.61Z" data-code="RW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M469.33,288.43l0.49,-1.17l-1.2,-1.97l1.47,-0.73l1.3,0.13l1.18,1.23l0.45,1.29l1.35,0.74l0.34,1.53l1.46,1.02l0.76,-0.3l0.25,0.82l-0.51,0.87l0.22,1.27l1.08,1.41l-0.8,0.94l-0.38,1.72l-1.22,0.09l0.27,-0.81l-2.46,-2.38l-0.93,0.06l-0.47,1.05l-2.15,-1.58l0.57,-1.85l-1.13,-1.51l0.53,-1.32l-0.49,-0.55Z" data-code="RS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M734.55,437.87l-0.09,-0.98l4.5,-0.86l-2.82,1.28l-1.59,0.55Z" data-code="TL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M553.03,299.38l-0.05,0.44l-0.1,-0.29l0.15,-0.15ZM555.85,298.15l0.46,-0.11l1.47,0.82l2.08,2.72l4.07,-0.21l0.38,-0.49l-0.34,-1.39l1.95,-1.07l1.9,-1.78l2.93,1.56l0.41,2.75l1.21,0.76l2.57,-0.15l0.62,0.45l1.32,3.46l4.54,3.8l2.67,1.6l3.07,1.26l-0.04,1.22l-1.32,-0.81l-0.61,0.19l-0.32,0.93l-2.19,0.86l-0.47,2.34l-1.21,0.81l-1.91,0.45l-0.73,1.44l-1.54,0.33l-2.22,-1.01l-0.2,-2.37l-0.37,-0.37l-1.72,-0.1l-2.76,-2.67l-2.14,-0.44l-2.84,-1.62l-1.78,-0.29l-1.25,0.58l-1.56,-0.09l-2.01,1.85l-1.69,0.47l-0.37,-1.75l0.36,-3.28l-0.2,-0.39l-1.68,-0.94l0.55,-1.92l-0.34,-0.51l-1.23,-0.14l0.38,-1.9l2.23,0.64l2.2,-1.06l0.12,-0.63l-1.77,-1.94l-0.69,-1.85Z" data-code="TM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M597.8,305.02l-0.08,0.09l-2.5,-0.5l-0.48,0.34l-0.24,1.88l0.43,0.45l2.63,-0.24l3.18,1.04l4.38,-0.45l0.56,2.63l0.54,0.29l0.66,-0.26l1.12,0.54l0.21,2.4l-3.76,-0.23l-1.81,1.45l-1.74,0.8l-0.62,-0.64l0.22,-2.47l-0.65,-0.49l-0.04,-1.02l-1.36,-0.73l-0.48,0.07l-1.08,1.11l-0.54,1.62l-1.3,-0.06l-0.96,1.26l-0.91,-0.37l-1.63,0.91l-0.24,-0.12l1.28,-3.1l-0.54,-2.38l-1.69,-0.89l0.36,-0.8l2.18,-0.05l1.19,-1.8l0.76,-1.99l2.44,-0.56l-0.28,1.13l0.36,0.91l0.43,0.25Z" data-code="TJ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M487.52,276.99l0.59,0.28l2.89,4.68l-0.18,3.12l0.45,1.64l1.3,0.9l1.37,-0.47l0.76,0.41l0.03,0.46l-0.83,0.52l-0.57,-0.25l-0.55,0.3l-0.63,3.8l-0.98,-0.24l-2.1,-1.28l-2.95,0.81l-1.25,0.86l-3.49,-0.17l-1.88,-0.53l-0.87,0.17l-0.86,-1.54l0.34,-0.35l-0.05,-0.61l-0.62,-0.44l-0.51,0.04l-0.55,0.55l-1.04,-0.73l-0.17,-1.29l-1.58,-1.05l-0.34,-1.15l-0.92,-0.96l1.63,-0.65l2.66,-4.89l2.39,-1.44l2.93,0.39l1.06,0.83l0.47,0.02l0.79,-0.53l1.77,-0.34l0.76,-0.87l0.76,0.0Z" data-code="RO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M386.23,383.41l-0.29,0.84l0.15,0.61l-2.21,0.6l-0.86,0.96l-1.04,-0.83l-1.09,-0.23l-0.54,-1.07l-0.66,-0.5l2.41,-0.49l4.13,0.1Z" data-code="GW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M195.08,379.54l-2.48,-0.37l-1.03,-0.46l-1.14,-0.9l0.3,-1.01l-0.24,-0.68l0.96,-1.69l2.98,-0.01l0.4,-0.37l-0.19,-1.29l-1.68,-1.44l0.53,-0.4l0.0,-1.08l3.85,0.02l-0.21,4.61l0.4,0.43l1.48,0.38l-1.5,1.01l-0.34,0.71l0.12,0.57l-2.2,1.98Z" data-code="GT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M487.09,300.31l-0.62,1.67l-0.37,0.23l-2.84,-0.38l-3.03,0.86l-0.18,0.66l1.34,1.43l-0.67,0.28l-1.12,0.0l-1.2,-1.54l-0.65,0.03l-0.52,1.05l0.56,1.95l1.06,1.34l-0.61,0.46l-0.05,0.59l2.53,2.34l0.02,1.02l-1.77,-0.64l-0.5,0.54l0.53,1.16l-1.1,0.23l-0.3,0.52l0.77,2.24l-0.99,0.02l-1.84,-1.22l-1.37,-4.59l-2.21,-3.25l-0.12,-0.67l1.06,-1.44l0.2,-1.06l0.84,-0.7l0.03,-0.55l1.33,-0.24l1.01,-0.71l1.21,0.06l0.67,-0.62l2.26,-0.01l1.8,-0.83l1.85,1.11l2.28,-0.31l0.35,-0.39l0.01,-0.9l0.35,0.26ZM480.49,319.61l0.67,0.51l-0.8,-0.16l0.13,-0.35ZM482.3,320.35l2.74,0.05l0.29,0.4l-2.04,0.15l-0.32,-0.47l-0.67,-0.13Z" data-code="GR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M448.79,409.52l0.02,2.22l-4.09,0.0l0.69,-2.27l3.38,0.05Z" data-code="GQ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M277.42,399.96l-0.32,1.83l-1.32,0.57l-0.23,0.46l-0.28,2.01l1.11,1.82l0.83,0.19l0.32,1.25l1.13,1.62l-1.21,-0.19l-1.08,0.71l-1.77,0.5l-0.44,0.46l-0.86,-0.09l-1.32,-1.01l-0.77,-2.27l0.36,-1.91l0.68,-1.23l-0.57,-1.17l-0.74,-0.43l0.12,-1.16l-0.9,-0.69l-1.1,0.09l-1.31,-1.48l0.53,-0.72l-0.04,-0.84l1.99,-0.86l0.05,-0.59l-0.71,-0.78l0.14,-0.57l1.66,-1.24l1.36,0.77l1.41,1.5l0.06,1.15l0.37,0.38l0.8,0.05l2.06,1.87Z" data-code="GY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M521.61,293.9l5.38,1.03l3.26,1.57l0.84,0.7l1.39,-0.49l2.05,0.63l0.69,1.25l1.15,0.65l-0.2,0.63l1.05,1.54l-1.06,-0.15l-1.81,-0.93l-0.97,0.52l-3.21,0.48l-2.28,-1.55l-2.37,0.06l0.23,-1.11l-0.75,-2.51l-1.45,-1.26l-1.43,-0.44l-0.53,-0.61Z" data-code="GE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M412.72,233.04l-2.32,4.44l0.45,0.57l2.5,-0.63l2.22,0.02l-0.56,3.24l-2.22,4.0l0.31,0.59l2.36,0.26l2.34,5.43l1.76,0.84l2.21,6.35l2.96,0.93l-0.25,2.13l-1.17,1.09l-0.09,0.47l0.87,1.82l-1.92,1.78l-3.29,-0.02l-4.09,1.04l-1.02,-0.68l-0.52,0.07l-1.5,1.67l-2.09,-0.4l-1.88,1.4l-0.67,-0.39l3.29,-3.71l2.15,-0.83l0.25,-0.41l-0.33,-0.35l-3.72,-0.64l-0.47,-1.06l2.27,-1.1l0.17,-0.57l-1.29,-2.09l0.39,-2.22l3.35,0.34l0.44,-0.34l0.37,-2.46l-1.77,-2.98l-3.1,-0.89l-0.43,-0.84l0.8,-2.18l-0.82,-1.22l-0.67,0.01l-0.66,1.02l-0.1,-3.02l-1.24,-2.37l0.87,-4.6l1.78,-3.54l1.83,0.33l2.26,-0.3ZM406.3,251.21l-1.06,2.32l-1.53,-0.71l-1.21,0.0l0.4,-1.97l-0.42,-1.89l1.46,-0.13l2.36,2.36Z" data-code="GB" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M453.24,409.42l-0.08,0.98l0.7,1.29l2.36,0.24l-0.98,2.63l1.18,1.79l0.25,1.78l-0.29,1.52l-0.6,0.93l-1.84,-0.09l-1.23,-1.11l-0.66,0.23l-0.15,0.84l-1.42,0.26l-1.02,0.7l-0.11,0.52l0.77,1.35l-1.34,0.98l-3.94,-4.31l-1.44,-2.45l0.06,-0.6l0.54,-0.81l1.05,-3.46l4.17,-0.07l0.4,-0.4l-0.02,-2.66l2.39,0.21l1.25,-0.27Z" data-code="GA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M391.8,383.91l0.47,0.81l1.11,-0.32l0.98,0.71l1.07,0.2l2.26,-1.23l0.63,0.44l1.13,1.58l-0.48,1.41l0.8,0.3l-0.08,0.48l0.46,0.69l-0.35,1.37l1.05,2.63l-1.0,0.69l0.03,1.42l-0.72,-0.06l-1.07,1.01l-0.24,-0.27l0.07,-1.11l-1.05,-1.55l-0.49,-0.14l-1.3,0.36l-0.35,-2.01l-1.6,-2.19l-2.0,-0.0l-1.31,0.54l-1.95,2.19l-1.86,-2.2l-1.2,-0.78l-0.3,-1.12l-0.8,-0.86l0.65,-0.73l0.81,-0.03l1.64,-0.8l0.23,-1.88l2.67,0.64l0.89,-0.31l1.21,0.15Z" data-code="GN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M379.31,381.18l0.1,-0.36l2.43,-0.07l0.74,-0.62l0.5,-0.03l0.83,0.53l-1.08,-0.33l-1.87,0.91l-1.65,-0.04ZM384.0,380.68l0.95,0.06l0.76,-0.23l-0.59,0.32l-1.11,-0.15Z" data-code="GM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M352.9,3.19l15.35,16.28l-4.35,6.99l-9.4,0.81l-13.48,1.81l-0.32,0.54l1.26,3.26l0.46,0.25l8.67,-1.96l7.39,6.05l0.55,-0.04l4.4,-4.95l1.83,5.61l-2.72,9.68l0.18,0.45l0.48,-0.06l6.34,-6.15l11.94,-6.62l7.14,3.24l1.33,6.85l-10.07,11.17l-1.42,3.42l-7.83,2.5l-0.28,0.42l0.35,0.36l5.33,0.65l-2.8,9.83l-2.03,8.69l0.08,13.63l2.84,7.11l-3.6,0.49l-4.12,3.47l-0.05,0.56l4.54,5.53l0.56,8.17l-2.39,0.81l-0.24,0.53l3.05,7.7l-5.05,0.6l-0.27,0.64l2.78,3.54l-0.72,2.75l-3.27,1.26l-3.42,0.02l-0.35,0.59l3.09,5.7l0.03,2.82l-4.32,-2.99l-0.57,0.13l-1.29,2.22l0.14,0.54l3.3,2.0l3.18,4.75l0.88,5.79l-3.85,1.25l-4.86,-7.12l-0.48,-0.14l-0.24,0.44l0.83,5.08l-2.81,3.81l0.3,0.64l9.17,0.61l-6.07,5.68l-6.74,5.42l-7.2,2.3l-2.98,0.14l-2.66,2.67l-3.44,6.75l-5.23,4.25l-1.73,0.27l-7.11,3.08l-2.15,3.69l-0.09,4.21l-1.22,3.58l-4.03,4.36l0.89,4.48l-2.31,8.95l-3.05,0.26l-3.56,-4.0l-5.12,-0.16l-2.26,-2.64l-1.69,-5.21l-4.31,-6.82l-1.24,-3.62l-0.4,-5.4l-3.39,-5.47l0.87,-4.47l-1.62,-2.41l2.37,-7.41l3.81,-2.67l1.01,-3.01l0.52,-5.6l-0.22,-0.39l-0.45,0.06l-4.16,3.58l-1.99,0.9l-2.73,-2.07l-0.16,-4.72l0.9,-3.66l1.94,-0.09l5.03,1.98l0.47,-0.14l-0.03,-0.49l-6.54,-7.53l-0.47,-0.11l-2.25,1.0l-1.7,-1.6l2.69,-7.67l-1.51,-3.12l-4.99,-15.74l-3.17,-3.76l-0.11,-4.29l-6.93,-6.07l-5.4,-0.76l-12.62,1.16l-2.75,-3.16l-4.1,-6.46l6.13,-3.31l4.96,-0.6l0.35,-0.37l-0.29,-0.42l-10.63,-2.99l-5.42,-4.66l0.32,-4.37l9.32,-6.03l9.34,-6.65l0.97,-5.04l-0.15,-0.39l-6.52,-4.97l2.06,-5.6l8.57,-10.89l3.56,-1.73l0.22,-0.41l-1.01,-7.43l5.7,-4.5l7.58,-2.82l7.37,-0.16l2.62,5.4l0.69,0.04l6.35,-9.67l5.63,6.55l3.58,1.5l5.14,5.66l0.54,0.05l0.1,-0.53l-5.89,-9.52l0.33,-7.89l8.21,-11.86l8.55,0.93l0.41,-0.25l3.12,-7.8l8.58,-2.09l19.79,2.78Z" data-code="GL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M420.53,387.35l-0.01,0.72l0.96,1.2l0.24,3.75l0.59,0.95l-0.51,2.1l0.19,1.41l1.02,2.22l-6.97,2.85l-1.8,-0.57l0.04,-0.89l-1.02,-2.04l0.61,-2.66l1.07,-2.33l-0.96,-6.5l5.01,0.07l0.94,-0.39l0.61,0.11Z" data-code="GH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M568.09,360.37l-0.91,1.71l-1.22,0.04l-0.59,0.78l-0.41,1.53l0.26,1.63l-1.16,0.05l-1.56,0.99l-0.76,1.78l-1.62,0.05l-0.98,0.66l-0.17,1.17l-0.89,0.53l-1.49,-0.18l-2.4,0.95l-2.48,-5.51l7.35,-2.77l1.67,-5.36l-1.12,-2.14l0.05,-0.87l0.67,-1.04l0.07,-1.08l0.91,-0.43l-0.05,-2.14l0.7,-0.01l1.01,1.68l1.51,1.12l3.3,0.87l1.73,2.37l0.81,0.38l-1.23,2.44l-0.99,0.81ZM561.83,347.23l-0.0,-0.01l0.01,-0.01l-0.0,0.02Z" data-code="OM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M448.18,315.32l-1.08,1.46l-0.02,1.43l0.84,0.93l-0.29,2.3l-1.65,1.83l0.48,1.65l1.41,0.33l0.53,1.2l0.9,0.55l-0.11,1.83l-3.54,2.81l-0.09,2.52l-0.58,0.32l-0.96,-4.72l-1.54,-1.32l-0.15,-0.82l-1.93,-1.68l-0.19,-1.93l1.52,-1.74l0.59,-2.52l-0.38,-3.0l0.43,-1.35l2.45,-1.14l1.29,0.28l-0.06,1.25l0.59,0.37l1.54,-0.84Z" data-code="TN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M518.65,329.54l-5.15,1.67l-0.19,0.64l2.19,2.56l-0.58,0.44l-0.33,0.78l-1.71,0.36l-1.71,1.89l-2.34,-0.38l1.21,-4.6l0.56,-4.33l2.81,0.99l4.45,-2.88l0.8,2.87Z" data-code="JO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M455.59,286.98l1.42,0.1l0.57,-0.46l0.74,0.44l0.98,0.07l0.43,-0.4l-0.01,-0.73l0.86,-0.57l0.21,-1.25l1.62,-0.78l2.55,1.93l2.07,0.69l0.88,-0.35l1.09,1.85l-0.56,0.77l-1.05,-0.63l-1.67,0.05l-2.1,-0.57l-1.3,0.07l-0.58,0.54l-0.57,-0.52l-0.65,0.16l-0.47,1.84l1.79,2.75l2.11,2.07l0.81,1.23l-1.27,-1.06l-2.2,-0.99l-1.73,-2.1l0.2,-0.63l-1.06,-1.38l-0.31,-1.43l-1.61,-0.56l-0.49,0.2l-0.45,0.89l-0.26,-1.24Z" data-code="HR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M238.65,368.15l-1.58,-0.17l-1.19,0.44l-0.91,-0.56l0.06,-0.21l3.62,0.5ZM239.22,368.07l0.82,-0.54l0.06,-0.62l-1.02,-1.03l0.02,-0.84l-0.3,-0.39l-0.93,-0.35l3.16,0.46l0.02,1.9l-0.48,0.35l-0.07,0.58l0.54,0.74l-1.81,-0.26Z" data-code="HT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M462.05,281.37l0.68,-1.93l-0.16,-0.54l0.71,-0.0l0.39,-0.35l0.1,-0.84l1.72,1.0l2.35,-0.43l0.43,-0.77l3.49,-0.92l0.69,-0.91l0.54,-0.15l2.55,1.09l0.69,-0.26l1.03,0.76l0.1,0.55l-1.45,0.83l-2.6,4.82l-1.79,0.61l-1.69,-0.11l-2.72,1.41l-1.83,-0.61l-2.55,-1.92l-0.7,-1.3Z" data-code="HU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M199.6,379.29l-1.71,-1.22l0.07,-0.96l3.04,-2.17l2.37,0.29l1.27,-0.09l1.1,-0.53l1.3,0.28l1.14,-0.26l1.37,0.37l2.25,1.39l-2.37,0.95l-1.23,-0.4l-0.88,1.31l-1.28,1.0l-0.43,-0.3l-0.55,0.08l-0.42,0.53l-0.96,0.05l-0.36,0.41l0.04,0.89l-0.52,0.6l-0.3,0.04l-0.3,-0.56l-0.66,-0.32l0.12,-0.68l-0.48,-0.66l-0.63,-0.25l-0.97,0.2Z" data-code="HN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M256.17,368.34l-0.27,0.28l-2.83,0.06l-0.07,-0.57l1.95,-0.1l1.23,0.34Z" data-code="PR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M509.06,331.4l0.27,-0.17l-0.04,0.09l-0.23,0.08ZM509.37,331.14l-0.03,-0.63l-0.35,-0.18l0.32,-1.21l0.24,0.11l-0.19,1.91Z" data-code="PS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M401.85,314.47l-0.65,0.52l-1.11,-0.37l-0.93,0.18l0.29,-1.97l-0.24,-1.95l-1.24,-0.59l-0.47,-0.95l0.18,-1.87l1.01,-1.29l0.69,-3.25l-0.04,-1.52l-0.59,-2.16l1.29,-0.96l0.85,1.5l3.09,-0.33l0.49,1.17l-1.07,1.02l-0.03,2.43l-0.41,0.6l-0.08,1.25l-0.8,0.2l-0.26,0.57l0.93,1.79l-0.64,1.95l0.78,1.16l-1.12,1.72l0.08,1.13Z" data-code="PT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M274.9,466.41l0.74,1.55l-0.16,3.55l0.32,0.41l2.64,0.52l1.11,-0.48l1.4,0.6l0.36,0.62l0.53,3.53l1.27,0.41l0.98,-0.39l0.52,0.28l-0.0,1.23l-1.21,5.54l-2.09,1.99l-1.8,0.41l-4.72,-1.03l2.21,-3.81l-0.32,-1.54l-2.77,-1.32l-3.03,-2.01l-2.07,-0.45l-4.34,-4.19l0.91,-2.99l0.08,-1.45l1.07,-2.09l4.13,-0.73l2.18,0.04l2.06,1.2l0.03,0.61Z" data-code="PY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M213.79,393.56l0.26,-1.53l-0.36,-0.26l-0.01,-0.5l0.44,-0.1l0.93,1.4l1.26,0.03l0.77,0.5l1.38,-0.24l2.51,-1.12l0.86,-0.72l3.45,0.85l1.4,1.19l0.41,1.75l-0.21,0.34l-0.53,-0.12l-0.47,0.29l-0.16,0.6l-0.68,-1.28l0.45,-0.49l-0.19,-0.66l-0.47,-0.13l-0.54,-0.84l-1.5,-0.75l-1.1,0.16l-0.75,0.99l-1.62,0.84l-0.18,0.96l0.85,0.97l-0.58,0.45l-0.69,0.08l-0.34,-1.18l-1.27,0.03l-0.71,-1.05l-2.59,-0.47Z" data-code="PA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M808.58,428.76l2.54,2.57l-0.13,0.26l-0.33,0.12l-0.87,-0.78l-1.22,-2.17ZM801.41,422.94l0.51,0.29l0.26,0.27l-0.49,-0.36l-0.28,-0.21ZM803.17,424.48l0.59,0.5l0.08,1.06l-0.29,-0.91l-0.38,-0.65ZM796.68,428.31l0.52,0.75l1.43,-0.19l2.27,-1.82l-0.01,-1.43l1.12,0.16l-0.04,1.1l-0.7,1.28l-1.12,0.18l-0.62,0.79l-2.46,1.11l-1.17,-0.0l-3.08,-1.25l3.41,0.0l0.45,-0.68ZM789.15,433.47l2.31,1.81l1.59,2.62l1.34,0.14l-0.06,0.66l0.31,0.43l1.06,0.24l0.06,0.66l2.25,1.06l-1.21,0.13l-0.72,-0.64l-4.56,-0.65l-3.22,-2.89l-1.49,-2.35l-3.27,-1.11l-2.38,0.72l-1.59,0.86l-0.2,0.42l0.27,1.56l-1.55,0.69l-1.36,-0.4l-2.21,-0.09l-0.08,-15.44l8.39,2.93l2.95,2.4l0.6,1.64l4.02,1.5l0.31,0.69l-1.76,0.21l-0.33,0.52l0.55,1.68Z" data-code="PG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M244.97,425.11l-1.26,-0.07l-0.57,0.42l-1.93,0.45l-2.98,1.76l-0.36,1.36l-0.58,0.8l0.12,1.37l-1.24,0.6l-0.22,1.22l-0.62,0.84l1.04,2.28l1.28,1.44l-0.41,0.85l0.32,0.57l1.48,0.13l1.16,1.37l2.21,0.07l1.63,-1.08l-0.13,3.04l0.3,0.4l1.14,0.29l1.31,-0.35l1.9,3.62l-0.48,0.86l-0.17,3.89l-0.94,1.6l0.35,0.76l-0.48,1.08l0.98,2.0l-2.1,3.89l-0.97,0.51l-2.17,-1.31l-0.39,-1.18l-4.95,-2.62l-4.46,-2.82l-1.85,-1.53l-0.91,-1.87l0.3,-0.97l-2.11,-3.36l-4.82,-9.74l-1.04,-1.2l-0.87,-1.95l-3.4,-2.49l0.58,-1.18l-1.13,-2.23l0.66,-1.5l1.45,-1.15l-0.6,0.99l0.07,0.92l0.47,0.36l1.74,0.03l0.97,1.17l0.54,0.07l1.42,-1.03l0.6,-1.84l1.42,-2.02l3.04,-1.04l2.73,-2.62l0.86,-1.74l-0.1,-1.87l1.44,1.02l0.9,1.25l1.06,0.59l1.7,2.73l1.86,0.31l1.45,-0.61l0.96,0.39l1.36,-0.19l1.45,0.89l-1.4,2.21l0.31,0.61l0.59,0.05l0.47,0.5Z" data-code="PE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M615.13,319.81l-1.88,2.0l-2.59,0.42l-3.73,-0.73l-1.6,1.43l-0.09,0.4l1.77,4.7l1.73,1.32l-1.73,1.38l-0.11,2.26l-2.34,2.8l-1.59,2.95l-2.46,2.8l-3.03,-0.07l-2.76,2.96l0.05,0.59l1.51,1.16l0.26,1.98l1.44,1.55l0.37,1.77l-5.02,-0.01l-1.78,1.76l-1.41,-0.53l-0.76,-1.94l-2.27,-2.23l-11.61,0.89l0.72,-2.47l3.43,-1.37l0.25,-0.43l-0.21,-1.29l-1.2,-0.67l-0.28,-2.57l-2.29,-1.2l-1.32,-2.09l2.85,1.0l2.62,-0.4l1.42,0.35l0.77,-0.59l1.71,0.2l3.25,-1.2l0.26,-0.36l0.08,-2.33l1.19,-1.41l1.68,0.0l0.58,-0.87l1.59,-0.32l1.2,0.17l0.98,-0.83l0.01,-1.99l0.94,-1.58l1.48,-0.71l0.19,-0.54l-0.69,-1.39l2.06,-0.12l0.69,-1.09l-0.03,-1.23l1.12,-1.15l-0.18,-1.88l-0.5,-1.14l1.17,-1.09l5.42,-0.99l2.59,-0.89l1.6,1.26l0.97,2.53l3.5,1.06Z" data-code="PK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M737.01,393.71l0.39,2.98l-0.44,1.19l-0.55,-1.53l-0.67,-0.14l-1.17,1.28l0.65,2.1l-0.42,0.69l-2.48,-1.23l-0.58,-1.49l0.66,-1.03l-0.1,-0.53l-1.59,-1.19l-0.56,0.08l-0.65,0.87l-1.23,0.0l-1.58,0.97l0.83,-1.81l2.56,-1.42l0.65,0.84l0.45,0.13l1.9,-0.69l0.56,-1.12l1.5,-0.06l0.38,-0.43l-0.09,-1.2l1.21,0.72l0.36,2.03ZM733.59,386.41l0.05,0.76l0.08,0.27l-0.8,-0.42l-0.18,-0.72l0.85,0.12ZM734.08,385.93l-0.12,-1.13l-1.01,-1.29l1.36,0.03l0.53,0.73l0.51,2.06l-1.27,-0.4ZM733.76,387.52l0.39,0.99l-0.32,0.15l-0.07,-1.14ZM724.65,368.03l1.46,0.71l0.72,-0.31l-0.32,1.19l0.79,1.74l-0.57,1.88l-1.53,1.06l-0.39,2.27l0.56,2.06l1.63,0.57l1.16,-0.27l2.72,1.24l-0.19,1.1l0.77,0.85l-0.08,0.37l-1.4,-0.9l-0.88,-1.29l-0.66,0.0l-0.38,0.55l-1.6,-1.32l-2.15,0.36l-0.87,-0.4l0.07,-0.62l0.66,-0.56l-0.01,-0.62l-0.75,-0.6l-0.72,0.44l-0.73,-0.88l-0.39,-2.53l0.32,0.27l0.66,-0.28l0.26,-4.04l0.71,-2.06l1.14,0.0ZM731.03,388.72l-0.88,0.85l-1.19,1.95l-1.05,-1.2l0.93,-1.11l0.32,-1.48l0.52,-0.06l-0.27,1.16l0.22,0.45l0.49,-0.12l1.0,-1.32l-0.08,0.86ZM726.83,385.61l0.83,0.38l1.17,-0.0l-0.02,0.48l-2.0,1.41l0.02,-2.28ZM724.81,381.88l-0.39,1.29l-1.42,-1.98l1.2,0.05l0.6,0.64ZM716.54,391.7l1.12,-0.97l0.03,-0.03l-0.28,0.38l-0.87,0.63ZM719.21,388.91l0.04,-0.07l0.8,-1.54l0.16,0.76l-1.01,0.85Z" data-code="PH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M468.45,271.45l-1.1,-1.82l-1.87,-0.39l-0.48,-1.25l-1.72,-0.44l-0.47,0.25l-0.21,0.56l-0.72,-0.43l0.12,-0.82l-0.32,-0.45l-1.74,-0.32l-1.05,-1.13l-0.96,-2.4l0.17,-1.46l-0.62,-2.19l-0.82,-1.37l0.61,-1.22l-0.51,-1.88l1.46,-1.07l6.88,-3.37l2.12,0.62l0.15,0.81l0.38,0.33l5.51,0.54l4.53,-0.06l1.06,0.38l0.5,1.09l0.14,1.93l0.66,1.51l-0.01,1.34l-1.3,0.73l-0.17,0.5l0.74,1.83l0.07,1.86l1.22,3.37l-0.19,0.78l-1.23,0.53l-2.27,3.23l0.24,1.15l-1.99,-1.23l-2.01,0.46l-1.38,-0.32l-1.2,0.67l-1.05,-1.13l-1.17,0.27Z" data-code="PL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M481.47,443.27l0.39,0.31l2.52,0.15l0.99,1.18l2.01,0.36l1.4,-0.64l0.69,1.18l1.78,0.33l1.84,2.38l2.24,0.19l0.4,-0.43l-0.21,-2.77l-0.62,-0.3l-0.48,0.33l-1.98,-1.18l0.72,-5.32l-0.51,-1.19l0.58,-1.31l3.68,-0.62l0.26,0.64l1.21,0.63l0.9,-0.22l2.16,0.67l1.33,0.71l1.07,1.02l0.56,1.89l-0.88,2.72l0.43,2.1l-0.73,0.88l-0.76,2.39l0.6,0.68l-6.61,1.85l-0.29,0.44l0.19,1.47l-1.69,0.36l-1.43,1.04l-0.38,0.89l-0.87,0.26l-3.48,3.75l-4.15,-0.54l-1.52,-1.01l-1.77,-0.14l-1.82,0.53l-3.04,-3.46l0.11,-7.69l4.82,0.03l0.39,-0.49l-0.18,-0.76l0.33,-0.84l-0.4,-1.37l0.24,-1.06Z" data-code="ZM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M384.42,359.7l0.26,-0.83l1.06,-1.32l0.8,-3.63l3.38,-2.88l0.69,-1.87l0.06,5.03l-1.98,0.21l-0.94,1.63l0.39,3.66l-3.71,-0.01ZM392.0,347.13l0.72,-1.91l1.77,-0.25l2.09,0.35l0.96,-0.65l1.27,-0.07l-0.0,2.65l-6.8,-0.12Z" data-code="EH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M485.7,228.2l2.62,0.79l2.44,-0.11l0.18,0.41l-1.67,2.62l0.66,4.56l-0.85,1.18l-1.72,-0.01l-3.21,-2.27l-1.85,0.58l0.22,-2.14l-0.62,-0.38l-0.64,0.42l-1.26,-1.35l-0.18,-2.36l2.87,-1.24l3.02,-0.69Z" data-code="EE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M492.06,333.38l1.47,0.44l2.95,-1.74l2.03,-0.22l1.52,0.32l0.6,1.27l0.7,0.04l0.41,-0.68l1.8,0.61l1.95,0.17l1.04,-0.54l1.43,4.34l-2.03,4.78l-1.66,-1.85l-1.76,-4.05l-0.65,-0.12l-0.35,0.67l1.04,3.03l3.44,7.26l1.77,3.16l2.04,2.76l-0.37,0.54l0.22,2.06l2.73,2.28l-28.43,0.0l0.0,-19.72l-0.73,-2.31l0.6,-1.66l-0.33,-1.32l0.69,-1.07l3.05,-0.04l4.82,1.62Z" data-code="EG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M467.15,505.21l-0.13,-2.11l-0.69,-1.7l0.71,-0.7l-0.12,-2.46l-4.57,-8.67l0.78,-0.92l0.59,0.47l0.69,1.37l2.83,0.75l1.5,-0.27l2.24,-1.46l0.18,-9.94l1.35,2.39l-0.21,1.57l0.61,1.24l0.41,0.2l1.79,-0.29l2.61,-2.16l0.69,-1.37l0.95,-0.5l2.19,1.08l2.04,0.14l1.78,-0.67l0.85,-2.2l1.38,-0.34l1.59,-2.85l2.15,-1.95l3.41,-1.92l1.99,0.46l1.02,-0.28l0.99,0.2l1.75,5.47l-0.37,3.39l-0.82,-0.24l-1.0,0.47l-0.87,1.75l-0.04,1.2l1.98,1.91l1.47,-0.3l0.7,-1.24l1.09,0.01l-0.77,3.89l-0.58,1.15l-2.2,1.88l-3.17,5.02l-2.8,3.01l-3.57,3.07l-2.53,1.12l-1.22,0.15l-0.51,0.75l-1.17,-0.34l-1.4,0.54l-2.58,-0.55l-1.62,0.35l-1.19,-0.11l-2.54,1.18l-2.1,0.47l-1.6,1.15l-0.84,0.05l-0.93,-0.95l-0.93,-0.16l-0.97,-1.21l-0.25,0.05ZM491.46,495.56l0.62,-0.98l1.48,-0.62l1.18,-2.31l-0.07,-0.48l-1.99,-1.77l-1.68,0.59l-1.42,1.19l-1.34,1.82l0.02,0.49l1.88,2.23l1.32,-0.17Z" data-code="ZA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M231.86,415.43l0.29,1.59l-0.69,1.45l-2.61,2.51l-3.13,1.11l-1.53,2.18l-0.49,1.68l-1.0,0.73l-1.02,-1.11l-1.78,-0.16l0.67,-1.15l-0.24,-0.86l1.25,-2.13l-0.54,-1.09l-0.67,-0.08l-0.72,0.87l-0.87,-0.64l0.35,-0.69l-0.36,-1.96l0.81,-0.51l0.45,-1.51l0.92,-1.57l-0.07,-0.97l2.65,-1.33l2.75,1.35l0.77,1.05l2.12,0.35l0.76,-0.32l1.96,1.21Z" data-code="EC" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M451.58,282.14l3.5,1.08l-0.22,1.43l0.34,1.0l-1.55,-0.28l-2.22,1.64l0.13,1.69l-0.27,1.22l0.82,1.78l2.39,1.84l1.3,2.87l2.79,2.73l2.05,0.1l0.25,0.31l-0.43,0.41l0.09,0.64l4.05,2.19l2.2,2.0l-0.17,0.42l-1.16,-1.17l-2.18,-0.54l-0.45,0.21l-1.05,2.12l0.14,0.51l1.59,1.06l-0.2,1.15l-1.06,0.36l-1.25,2.57l-0.36,0.08l0.0,-0.41l1.01,-2.65l-1.73,-3.5l-1.12,-0.56l-0.67,-1.29l-1.72,-0.75l-1.01,-1.25l-2.01,-0.35l-4.11,-3.59l-1.63,-1.87l-1.03,-3.6l-3.56,-1.55l-1.3,0.58l-1.68,1.6l0.17,-0.9l-0.27,-0.45l-1.14,-0.37l-0.55,-2.31l0.78,-1.37l-0.66,-1.44l0.81,0.44l1.41,-0.27l1.08,-0.94l0.53,0.39l1.19,-0.11l0.75,-1.38l1.51,0.37l1.39,-0.65l0.34,-1.31l1.06,0.36l0.5,-0.22l0.21,-0.51l1.95,-0.5l0.42,0.96ZM459.21,311.54l-0.67,1.87l0.33,1.12l-0.32,0.99l-1.48,-0.91l-4.52,-1.83l0.21,-0.97l2.67,0.25l3.8,-0.53ZM443.92,301.94l1.19,1.86l-0.3,3.74l-1.07,-0.01l-0.75,0.79l-0.53,-0.48l-0.1,-3.76l-0.41,-1.41l1.07,0.0l0.9,-0.74Z" data-code="IT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M690.58,359.66l-2.72,1.89l-2.09,2.52l-0.63,1.98l4.31,6.55l2.32,1.68l1.44,1.97l1.11,4.65l-0.32,4.28l-1.93,1.55l-2.84,1.62l-2.11,2.17l-2.73,2.07l-0.59,-1.06l0.63,-1.54l-0.12,-0.47l-1.34,-1.05l1.51,-0.72l2.55,-0.18l0.3,-0.63l-0.82,-1.16l4.0,-2.09l0.31,-3.08l-0.57,-1.79l0.42,-2.69l-0.73,-1.99l-1.86,-1.79l-3.63,-5.38l-2.73,-1.5l0.37,-0.5l1.5,-0.65l0.21,-0.52l-0.97,-2.33l-0.37,-0.25l-2.83,-0.02l-2.25,-4.02l0.84,-0.42l4.39,-0.3l2.06,-1.35l1.15,0.91l1.88,0.41l-0.18,1.55l1.36,1.19l1.69,0.47Z" data-code="VN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M826.68,441.55l-0.6,0.09l-0.2,-0.34l0.37,0.15l0.44,0.09ZM824.18,437.32l-0.26,-0.31l-0.31,-0.91l0.03,0.0l0.54,1.22ZM823.04,439.28l-1.66,-0.22l-0.2,-0.53l1.16,0.28l0.7,0.47ZM819.26,434.58l1.17,0.66l0.03,0.04l-0.82,-0.45l-0.38,-0.25Z" data-code="SB" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M516.04,377.54l1.1,0.85l1.63,-0.46l0.68,0.48l1.63,0.03l2.01,0.96l1.73,1.68l1.64,2.1l-1.52,2.06l0.16,1.73l0.39,0.38l2.05,0.01l-0.36,1.03l2.86,3.6l8.32,3.09l1.32,0.02l-6.33,6.76l-3.1,0.11l-2.36,1.77l-1.47,0.04l-0.86,0.79l-1.38,-0.0l-1.32,-0.81l-2.29,1.05l-0.76,0.98l-3.29,-0.41l-3.07,-2.07l-1.8,-0.07l-0.62,-0.6l0.0,-1.24l-0.28,-0.38l-1.15,-0.37l-1.4,-2.6l-1.19,-0.69l-0.47,-1.01l-1.27,-1.23l-1.16,-0.22l0.43,-0.73l1.45,-0.28l0.41,-0.95l-0.03,-2.22l0.68,-2.45l1.05,-0.63l1.43,-3.08l1.57,-1.38l1.02,-2.53l0.35,-1.9l2.52,0.47l0.44,-0.24l0.58,-1.44Z" data-code="ET" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M525.13,418.38l-1.13,-1.57l-0.03,-8.86l2.66,-3.38l1.67,-0.13l2.13,-1.69l3.41,-0.23l7.08,-7.57l2.91,-3.71l0.08,-4.85l2.98,-0.67l1.24,-0.87l0.45,-0.0l-0.2,3.03l-1.21,3.64l-2.73,6.0l-2.13,3.66l-5.03,6.17l-8.56,6.4l-2.78,3.08l-0.8,1.56Z" data-code="SO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M498.91,471.53l-1.1,-0.22l-0.92,0.29l-2.09,-0.46l-1.49,-1.14l-1.89,-0.44l-0.62,-1.44l-0.01,-0.86l-0.3,-0.38l-0.97,-0.26l-2.72,-2.8l-1.93,-3.41l3.83,0.46l3.74,-3.89l1.08,-0.44l0.26,-0.78l1.25,-0.91l1.41,-0.26l0.5,0.9l1.99,-0.05l1.72,1.19l1.11,0.18l1.05,0.68l0.01,3.05l-0.59,3.84l0.38,0.87l-0.23,1.26l-0.39,0.36l-0.64,1.86l-2.43,2.82Z" data-code="ZW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M415.99,294.24l1.08,1.32l4.61,1.55l1.08,-0.64l2.58,1.41l2.72,-0.33l0.09,1.34l-2.15,2.02l-3.1,0.68l-0.31,0.31l-0.2,1.01l-1.54,1.87l-0.97,2.65l0.86,1.9l-1.34,1.4l-0.49,1.86l-1.88,0.7l-1.66,2.25l-5.35,-0.01l-1.81,1.17l-0.88,1.06l-0.86,-0.18l-0.79,-0.9l-0.68,-1.73l-2.37,-0.68l-0.12,-0.6l1.21,-2.0l-0.78,-1.19l0.62,-1.89l-0.8,-1.8l0.89,-0.51l0.09,-1.41l0.42,-0.63l0.03,-2.39l1.01,-0.78l0.12,-0.47l-1.04,-1.93l-1.46,-0.12l-0.63,0.42l-1.04,0.0l-0.53,-1.39l-0.55,-0.22l-1.31,0.73l0.07,-1.41l-0.87,-1.4l3.08,-2.16l2.98,0.6l3.32,-0.02l2.62,0.58l6.01,-0.06Z" data-code="ES" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M520.38,375.96l3.42,2.46l3.5,3.81l0.85,0.55l-0.95,-0.01l-3.51,-3.92l-2.33,-1.16l-1.73,-0.07l-0.91,-0.51l-1.25,0.52l-1.34,-1.03l-0.62,0.17l-0.66,1.63l-2.34,-0.43l-0.18,-0.68l1.29,-5.37l0.62,-0.63l1.95,-0.54l0.87,-1.03l1.17,2.45l0.68,2.36l1.49,1.45Z" data-code="ER" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M468.91,298.06l-1.24,-1.13l0.5,-2.11l0.88,-0.81l2.29,1.73l-0.52,0.71l-0.77,-0.3l-1.14,1.91Z" data-code="ME" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M491.9,285.98l-0.28,-1.04l0.25,-1.54l-0.15,-1.8l-3.32,-5.2l1.4,-0.31l1.71,1.08l1.07,0.18l0.88,0.78l0.03,1.44l0.78,0.52l0.33,1.38l0.81,0.94l0.0,0.67l-1.14,-0.08l-0.7,-0.47l-0.52,0.29l-0.06,0.94l-1.08,2.21Z" data-code="MD" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M545.91,449.15l0.4,3.06l0.63,1.22l-0.21,1.04l-0.56,-0.81l-0.69,-0.01l-0.47,0.77l0.41,2.15l-0.18,0.89l-0.72,0.79l-0.15,2.18l-5.77,18.57l-3.92,1.7l-3.12,-1.54l-0.6,-1.26l-0.19,-2.48l-0.86,-2.12l-0.21,-1.83l0.39,-1.67l1.21,-0.76l0.01,-0.79l1.19,-2.08l0.23,-1.69l-1.06,-3.05l-0.19,-2.26l0.81,-1.36l0.32,-1.49l4.63,-1.23l3.44,-3.04l0.85,-1.42l-0.09,-0.71l0.78,-0.04l1.38,-1.79l0.13,-1.65l0.45,-0.62l1.16,1.7l0.59,1.62Z" data-code="MG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M378.77,359.44l0.06,-0.63l0.93,-0.75l0.82,-1.41l-0.09,-1.07l0.79,-1.77l1.31,-1.64l0.95,-0.61l0.66,-1.61l0.09,-1.52l0.81,-1.54l1.72,-1.11l1.55,-2.81l1.16,-1.0l2.44,-0.41l1.94,-1.91l1.31,-0.82l2.09,-2.4l-0.51,-3.84l1.25,-3.95l1.5,-1.88l4.46,-2.74l2.37,-4.82l1.43,0.01l1.7,1.31l2.31,-0.21l3.46,0.7l0.81,1.67l0.16,1.84l0.86,3.17l0.57,0.63l-0.27,0.69l-3.05,0.46l-1.26,1.11l-1.33,0.24l-0.33,0.37l-0.09,1.91l-2.69,1.06l-1.07,1.5l-1.89,0.72l-2.58,0.47l-4.04,2.12l-0.53,4.86l-1.16,0.07l-0.92,0.64l-1.96,-0.36l-2.42,0.56l-0.74,1.99l-0.86,0.41l-1.14,3.39l-3.53,3.11l-0.81,3.66l-0.96,1.14l-0.29,0.84l-4.94,0.19Z" data-code="MA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M598.64,298.24l-1.64,1.79l0.06,0.61l1.85,1.26l1.99,-0.71l2.27,1.34l-2.58,1.91l-2.57,-0.24l-0.2,-0.5l0.47,-1.39l-0.47,-0.52l-3.35,0.77l-2.1,3.89l-1.86,-0.14l-0.39,0.23l-0.65,1.43l0.21,0.53l1.65,0.69l0.47,2.05l-1.21,2.74l-1.54,-0.54l-1.11,-0.04l0.05,-1.53l-0.25,-0.38l-3.3,-1.35l-2.56,-1.53l-4.4,-3.69l-1.33,-3.48l-1.1,-0.68l-2.57,0.15l-0.7,-0.5l-0.46,-2.81l-3.37,-1.79l-0.46,0.06l-2.07,1.94l-2.09,1.14l-0.2,0.45l0.29,1.2l-1.92,0.03l-0.09,-11.97l5.98,-1.95l6.18,4.04l2.35,3.08l7.41,-0.61l2.72,2.28l-0.18,3.21l0.39,0.42l0.89,0.02l0.45,2.42l0.38,0.33l2.93,0.1l0.96,1.58l1.29,-0.25l1.05,-2.28l3.18,-2.25l1.24,-0.54Z" data-code="UZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M673.9,359.64l-1.97,1.62l-0.57,0.98l-1.4,0.62l-1.36,1.08l-1.99,0.36l-1.08,2.72l-0.91,0.41l-0.19,0.55l1.21,2.31l2.52,3.49l-0.79,1.95l-0.74,0.41l-0.17,0.52l0.65,1.39l1.61,1.98l0.25,2.61l0.9,2.15l-1.92,3.6l0.68,-2.27l-0.81,-1.75l0.19,-2.68l-1.05,-1.54l-1.24,-6.25l-1.12,-2.29l-0.61,-0.13l-4.33,3.06l-2.39,-0.66l0.77,-2.89l-0.52,-2.65l-1.92,-3.02l0.25,-0.78l-0.29,-0.51l-1.33,-0.31l-1.61,-1.97l-0.1,-1.35l0.82,-0.23l0.04,-1.7l1.03,-0.53l0.21,-0.44l-0.23,-0.99l0.54,-0.98l0.08,-2.3l1.45,0.46l0.48,-0.2l1.12,-2.26l0.16,-1.4l1.34,-2.25l-0.01,-1.58l2.89,-1.73l1.62,0.46l0.51,-0.43l-0.17,-1.48l0.65,-0.39l0.07,-1.08l0.77,-0.11l0.71,1.41l1.06,0.72l-0.03,4.05l-2.38,2.46l-0.3,3.26l0.47,0.43l2.27,-0.39l0.51,2.15l1.47,0.69l-0.61,1.87l0.19,0.47l2.97,1.52l1.64,-0.56l0.02,0.35Z" data-code="MM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M392.61,383.9l-0.19,-2.39l-0.99,-0.88l-0.44,-1.31l-0.09,-1.3l0.81,-0.59l0.35,-1.26l2.37,0.66l1.31,-0.48l0.86,0.15l0.66,-0.57l9.83,-0.04l0.38,-0.28l0.56,-1.82l-0.44,-0.66l-2.35,-22.51l3.26,-0.04l16.7,11.72l0.74,1.34l2.5,1.11l0.02,1.42l0.44,0.39l2.34,-0.22l0.01,5.49l-1.28,1.64l-0.26,1.51l-5.31,0.58l-1.08,0.93l-2.9,0.1l-0.87,-0.48l-1.38,0.37l-2.4,1.1l-0.6,0.88l-1.86,1.1l-0.43,0.71l-0.79,0.4l-1.44,-0.21l-0.81,0.84l-0.34,1.65l-1.91,2.04l-0.06,1.04l-0.67,1.23l0.13,1.17l-0.97,0.39l-0.23,-0.65l-0.52,-0.24l-1.35,0.4l-0.34,0.55l-2.69,-0.29l-0.37,-0.36l-0.02,-0.91l-0.65,-0.35l0.45,-0.65l-0.03,-0.52l-2.12,-2.46l-0.76,-0.01l-2.0,1.17l-0.78,-0.15l-0.8,-0.67l-1.21,0.23Z" data-code="ML" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M676.61,267.85l3.78,1.95l5.69,-1.19l2.35,0.48l2.34,1.79l1.81,2.09l2.28,-0.04l3.11,0.62l2.49,-0.96l3.42,-0.7l3.51,-2.62l1.21,0.34l1.56,1.35l2.31,-0.25l-2.72,6.05l0.64,1.85l0.5,0.22l1.31,-0.44l2.36,0.55l2.04,-1.29l1.73,1.03l2.1,2.39l-0.15,0.72l-1.72,-0.34l-3.79,0.54l-1.88,1.14l-1.76,2.29l-3.71,1.35l-2.44,1.82l-3.81,-0.99l-0.44,0.19l-1.31,2.27l1.07,2.53l-1.56,1.04l-1.74,1.78l-2.78,1.14l-3.78,0.14l-4.05,1.18l-2.75,1.69l-1.16,-0.94l-2.93,0.0l-3.61,-2.0l-2.59,-0.55l-3.41,0.46l-5.11,-0.75l-2.62,0.07l-1.31,-1.82l-1.4,-3.4l-1.47,-0.37l-3.14,-2.22l-6.15,-1.06l-0.73,-1.26l0.89,-4.37l-1.73,-2.97l-3.7,-1.54l-1.96,-1.86l-0.53,-2.16l2.39,-0.63l4.75,-3.33l3.59,-1.75l2.18,1.16l2.44,0.05l1.83,1.83l2.46,0.14l3.58,0.97l0.4,-0.12l2.43,-2.72l0.07,-0.43l-0.93,-2.14l2.28,-3.66l2.59,1.52l4.94,1.41l0.44,2.74Z" data-code="MN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M472.81,299.6l0.49,-0.78l3.56,-0.8l1.01,0.87l0.14,1.71l-0.66,0.59l-1.14,-0.05l-1.14,0.75l-1.37,0.24l-0.79,-0.61l-0.3,-1.19l0.2,-0.73Z" data-code="MK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M505.5,439.25l0.85,1.96l0.15,2.88l-0.69,1.66l0.72,1.81l0.06,1.29l0.49,0.64l0.07,1.07l0.4,0.55l0.8,-0.23l0.55,0.62l0.7,-0.21l0.34,0.6l0.19,2.98l-1.04,0.63l-0.53,1.27l-1.11,-1.1l-0.16,-1.59l0.51,-1.33l-0.32,-1.32l-0.99,-0.65l-0.82,0.12l-2.36,-1.66l0.63,-1.99l0.82,-1.18l-0.46,-2.03l0.9,-2.88l-0.95,-2.53l0.97,0.19l0.29,0.41Z" data-code="MW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M407.4,349.79l-2.62,0.03l-0.39,0.44l2.42,23.13l0.37,0.43l-0.39,1.27l-9.75,0.04l-0.56,0.54l-0.91,-0.11l-1.27,0.46l-1.61,-0.66l-0.98,0.03l-0.36,0.29l-0.38,1.37l-0.42,0.24l-2.93,-3.44l-2.96,-1.55l-1.62,-0.03l-1.27,0.55l-1.12,-0.2l-0.65,0.4l-0.08,-0.51l0.68,-1.31l0.31,-2.47l-0.57,-3.99l0.23,-1.25l-0.68,-1.53l-1.16,-1.05l0.25,-0.42l9.58,0.02l0.4,-0.45l-0.46,-3.79l0.47,-1.08l2.11,-0.22l0.36,-0.4l-0.08,-6.64l7.81,0.14l0.41,-0.4l0.01,-3.47l7.8,5.59Z" data-code="MR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M498.55,406.22l0.7,-0.46l1.65,0.5l1.96,-0.57l1.7,0.01l1.45,-0.98l0.91,1.33l1.33,3.95l-2.57,4.03l-1.46,-0.4l-2.54,0.91l-1.37,1.61l-0.01,0.81l-2.42,-0.01l-2.26,1.01l-0.17,-1.59l0.58,-1.04l0.14,-1.94l1.37,-2.28l1.78,-1.58l-0.17,-0.65l-0.72,-0.24l0.13,-2.43Z" data-code="UG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M717.48,403.36l-1.39,0.65l-2.12,-0.41l-2.88,-0.0l-0.38,0.28l-0.84,2.75l-0.99,0.96l-1.21,3.29l-1.73,0.45l-2.45,-0.68l-1.39,0.31l-1.33,1.15l-1.59,-0.14l-1.41,0.44l-1.44,-1.19l-0.18,-0.73l1.34,0.53l1.93,-0.47l0.75,-2.23l4.02,-1.03l2.75,-3.21l0.82,0.94l0.64,-0.05l0.4,-0.65l0.96,0.06l0.42,-0.36l0.24,-2.69l1.81,-1.65l1.21,-1.87l0.63,-0.01l1.07,1.06l0.34,1.28l3.44,1.35l-0.06,0.35l-1.37,0.1l-0.35,0.54l0.32,0.88ZM673.68,399.48l0.17,1.1l0.47,0.33l1.65,-0.3l0.87,-0.94l1.61,1.52l0.98,1.57l-0.12,2.81l0.41,2.29l0.95,0.9l0.88,2.44l-1.27,0.12l-5.1,-3.68l-0.34,-1.29l-1.37,-1.59l-0.33,-1.97l-0.88,-1.4l0.25,-1.68l-0.46,-1.06l1.63,0.84Z" data-code="MY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M133.1,328.46l0.22,0.49l9.64,3.54l6.96,-0.02l0.4,-0.4l0.0,-0.81l3.76,0.0l3.55,3.11l1.4,2.99l1.51,1.09l2.08,0.86l0.48,-0.14l1.46,-2.1l1.72,-0.05l1.59,1.03l2.06,3.53l1.47,1.63l1.26,3.28l2.18,1.06l2.27,0.6l-1.19,3.88l-0.42,5.19l1.79,5.01l1.62,1.94l0.61,1.55l1.2,1.45l2.55,0.67l1.38,1.13l7.54,-1.93l1.86,-1.32l1.14,-4.4l4.1,-1.24l3.56,-0.11l0.32,0.31l-0.06,0.97l-1.26,1.49l-0.67,1.74l0.38,0.71l-0.73,2.32l-0.49,-0.3l-1.0,0.08l-1.0,1.41l-0.47,-0.11l-0.53,0.47l-4.26,-0.02l-0.4,0.4l-0.0,1.08l-1.1,0.26l0.1,0.44l1.82,1.46l0.56,0.94l-3.19,0.21l-1.21,2.12l0.24,0.73l-0.2,0.45l-2.24,-2.21l-1.45,-0.94l-2.22,-0.7l-1.52,0.23l-3.06,1.18l-10.55,-3.9l-2.86,-2.0l-3.78,-0.94l-1.08,-1.21l-2.62,-1.46l-1.18,-1.57l-0.39,-0.85l0.66,-0.64l-0.19,-0.55l0.53,-0.77l0.01,-0.93l-2.0,-3.91l-2.21,-2.71l-2.53,-2.16l-1.19,-1.68l-2.2,-1.21l-0.31,-0.45l0.34,-1.56l-0.21,-0.44l-1.23,-0.63l-1.36,-1.26l-0.59,-1.87l-1.53,-0.48l-2.44,-2.68l-0.15,-0.94l-1.33,-2.14l-0.84,-2.11l-0.15,-1.39l-1.81,-1.16l-0.98,0.05l-1.31,-0.74l-0.58,0.22l-0.4,1.19l0.71,3.95l3.51,4.09l0.28,0.83l0.53,0.26l0.41,1.51l1.33,1.8l1.58,1.46l0.8,2.49l1.43,2.51l0.13,1.37l0.37,0.36l1.03,0.08l1.68,2.38l-0.84,0.79l-0.66,-1.55l-1.68,-1.59l-2.91,-1.94l0.06,-1.89l-0.53,-1.73l-2.91,-2.11l-0.56,0.08l-1.95,-1.14l-0.92,-1.02l0.72,-0.08l0.93,-1.06l0.08,-1.82l-1.93,-2.04l-1.46,-0.81l-3.76,-8.06l4.87,-0.45Z" data-code="MX" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M507.77,331.27l0.39,-0.81l0.2,0.43l-0.34,1.09l0.52,0.43l0.68,-0.23l-0.86,3.84l-1.16,-3.52l0.6,-0.8l-0.03,-0.44ZM508.72,328.43l0.38,-1.13l0.64,0.0l0.52,-0.54l0.02,0.67l-0.52,1.01l-0.55,-0.25l-0.5,0.24Z" data-code="IL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M444.48,298.15l-0.65,2.02l-0.56,-0.34l-0.51,-1.98l0.42,-1.04l0.99,-0.8l0.31,2.13ZM429.62,268.54l1.78,1.88l1.48,-0.14l2.08,1.68l1.36,0.33l1.23,0.98l3.1,0.6l-1.08,2.26l-0.3,2.52l-0.41,0.38l-0.92,-0.28l-0.51,0.42l0.07,0.77l-1.82,2.19l-0.04,1.65l0.57,0.37l0.85,-0.41l0.62,1.14l-0.04,1.13l0.61,1.11l-0.78,1.22l0.65,2.72l1.29,0.62l-0.19,1.03l-2.02,1.73l-4.75,-0.9l-3.84,1.13l-0.52,2.09l-2.47,0.37l-2.7,-1.47l-1.18,0.64l-4.28,-1.44l-0.76,-1.02l1.21,-2.03l0.41,-7.31l-2.58,-3.82l-1.89,-1.93l-3.74,-1.44l-0.2,-2.16l2.82,-0.72l4.11,0.96l0.48,-0.46l-0.62,-3.38l1.98,1.12l5.83,-3.02l0.91,-3.28l1.57,-0.58l0.25,0.97l1.34,0.35l1.05,1.43ZM289.01,408.29l-0.81,0.8l-0.78,0.12l-0.5,-0.66l-0.56,-0.1l-0.91,0.6l-0.46,-0.22l1.09,-2.96l-0.96,-1.77l-0.17,-1.49l1.07,-1.77l2.32,0.75l2.51,2.01l0.3,0.74l-2.14,3.96Z" data-code="FR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M531.15,388.78l1.52,0.12l5.13,-0.96l5.3,-1.49l-0.01,4.43l-2.67,3.4l-1.85,0.01l-8.04,-2.95l-2.55,-3.19l1.12,-1.73l2.04,2.35Z" data-code="XS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M492.16,172.43l-0.28,5.17l3.67,4.26l-2.21,4.98l2.86,6.98l-1.64,5.01l2.21,4.51l-0.98,3.55l3.63,4.02l-0.84,2.48l-7.53,9.52l-4.5,0.42l-4.38,1.84l-3.74,0.97l-1.3,-2.46l-2.36,-1.68l0.53,-4.89l-1.2,-4.86l1.14,-3.04l2.23,-3.46l5.68,-6.22l1.8,-1.58l-0.4,-2.8l-3.4,-2.81l-0.79,-2.25l-0.16,-10.13l-7.02,-7.77l0.96,-1.19l2.47,3.3l3.5,-0.17l2.57,1.6l0.53,-0.09l2.46,-3.23l1.19,-5.07l3.49,-2.23l2.82,2.55l-1.01,4.77Z" data-code="FI" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M869.95,457.1l-1.21,0.42l-0.08,-0.24l2.98,-1.23l-0.15,0.44l-1.54,0.62ZM867.58,459.4l0.43,0.38l-0.27,0.91l-1.24,0.29l-1.04,-0.25l-0.14,-0.69l0.64,-0.59l0.92,0.26l0.7,-0.31Z" data-code="FJ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M274.37,564.69l1.48,1.33l-0.53,1.0l-2.96,1.07l-0.95,-1.2l-0.57,-0.05l-1.79,1.54l-0.79,-1.16l2.52,-2.03l1.9,0.9l0.46,-0.09l1.23,-1.32Z" data-code="FK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M202.32,382.47l0.82,-0.18l1.03,-1.02l-0.04,-0.89l0.68,-0.0l0.63,-0.54l0.97,0.23l1.53,-1.28l0.58,-1.0l1.17,0.35l2.41,-0.95l0.13,1.34l-0.81,1.96l0.1,2.77l-0.36,0.38l-0.11,1.76l-0.47,0.81l0.18,1.15l-1.73,-0.86l-0.71,0.27l-1.47,-0.6l-0.52,0.16l-4.02,-3.85Z" data-code="NI" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M430.16,264.22l0.76,-0.72l2.14,-5.88l3.19,-1.63l1.7,0.1l0.35,1.07l-0.6,3.64l-0.51,1.24l-1.24,0.0l-0.4,0.44l0.34,3.35l-2.18,-2.14l-0.43,-0.11l-2.22,0.8l-0.89,-0.15Z" data-code="NL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M491.42,157.32l7.17,5.11l-2.71,1.67l-0.13,0.55l2.55,4.24l-3.9,2.61l-1.31,0.42l0.79,-4.7l-3.21,-2.91l-0.48,-0.04l-4.06,2.73l-1.21,5.15l-2.11,2.72l-2.64,-1.54l-3.04,0.32l-2.65,-3.53l-0.63,-0.01l-1.41,1.75l-1.41,0.26l-0.33,0.36l-0.33,4.08l-4.27,-0.99l-0.48,0.32l-0.6,3.44l-2.07,-0.02l-0.38,0.27l-4.15,11.7l-3.88,8.48l0.84,2.18l-0.71,1.86l-2.2,-0.09l-0.4,0.28l-1.64,5.41l0.15,7.19l1.58,2.74l-0.8,5.79l-2.04,3.34l-0.83,2.09l-1.27,-2.26l-0.65,-0.07l-4.87,5.52l-3.05,1.02l-3.16,-2.22l-0.86,-5.06l-0.78,-11.7l2.19,-3.29l6.55,-4.59l5.02,-5.96l4.64,-8.4l6.0,-12.26l11.0,-13.83l5.32,-3.11l3.99,0.38l0.38,-0.19l3.69,-6.04l4.48,0.3l4.3,-1.47ZM484.42,59.58l4.68,4.94l-3.51,7.19l-6.97,1.55l-7.03,-2.18l-0.42,-3.6l-0.37,-0.35l-3.35,-0.23l-2.51,-6.12l7.16,-3.9l3.42,3.43l0.63,-0.09l2.33,-4.19l5.93,3.56ZM482.22,93.35l-4.99,4.27l-3.84,-2.35l1.56,-3.06l-1.38,-3.53l4.4,-2.11l0.89,4.13l3.36,2.65ZM466.32,69.71l8.02,9.81l-6.13,5.05l-1.37,8.88l-2.22,2.36l-1.15,9.08l-2.49,0.35l-5.08,-6.44l2.14,-3.9l-0.08,-0.49l-3.69,-3.4l-4.82,-10.44l-1.89,-10.23l6.16,-4.58l1.22,4.4l0.41,0.29l3.57,-0.19l0.37,-0.32l0.9,-4.57l3.14,-0.43l3.02,4.76Z" data-code="NO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M474.4,460.84l-1.11,0.05l-0.38,0.4l-0.07,9.11l-2.09,0.08l-0.38,0.4l-0.0,18.09l-1.98,1.29l-1.16,0.18l-2.43,-0.69l-0.48,-1.18l-0.99,-0.78l-0.55,0.05l-0.9,1.05l-1.52,-1.75l-0.94,-1.97l-1.99,-8.9l-0.06,-3.23l-0.33,-1.56l-2.3,-3.43l-1.91,-4.94l-1.96,-2.48l-0.12,-1.61l2.33,-0.8l1.43,0.07l1.82,1.15l10.23,-0.26l1.84,1.26l6.01,0.37ZM474.58,460.83l6.59,-1.65l1.91,0.41l-1.71,0.41l-1.31,0.85l-1.12,-0.95l-4.36,0.94Z" data-code="NA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M839.03,452.86l0.23,1.16l-0.44,0.03l-0.2,-1.47l0.42,0.28Z" data-code="VU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M838.79,471.67l-0.34,0.23l-2.9,-1.8l-3.27,-3.48l1.65,0.85l4.86,4.19Z" data-code="NC" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M454.74,355.83l1.33,1.41l0.49,0.07l1.26,-0.72l0.53,3.62l0.94,0.85l0.17,0.94l0.82,0.72l-0.45,0.98l-0.96,5.37l-0.13,3.28l-3.05,2.34l-1.22,3.61l1.02,1.25l-0.0,1.48l0.39,0.4l1.13,0.04l-0.1,0.49l-0.45,0.09l-0.35,0.68l-1.47,-2.44l-0.86,-0.29l-2.09,1.38l-1.73,-0.67l-1.45,-0.17l-0.85,0.35l-1.36,-0.07l-1.64,1.1l-1.06,0.05l-2.94,-1.29l-1.44,0.59l-1.01,-0.03l-0.97,-0.95l-2.7,-0.99l-2.69,0.31l-0.87,0.65l-0.46,1.62l-0.74,1.17l-0.12,1.55l-1.57,-1.1l-1.31,0.24l0.03,-0.82l-0.32,-0.41l-2.59,-0.52l-0.15,-1.17l-1.36,-1.62l-0.29,-1.01l0.13,-0.85l1.29,-0.08l1.08,-0.93l3.31,-0.22l2.22,-0.41l0.32,-0.34l0.2,-1.5l1.39,-1.91l-0.01,-5.78l3.37,-1.15l7.24,-5.24l8.41,-5.07l3.69,1.09Z" data-code="NE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M456.32,383.7l0.64,0.66l-0.28,1.06l-2.11,2.02l-2.03,5.2l-1.37,1.16l-1.15,3.19l-1.33,0.66l-1.46,-0.97l-1.21,0.16l-1.38,1.37l-0.91,0.24l-1.79,4.07l-2.33,0.81l-1.11,-0.07l-0.86,0.51l-1.71,-0.05l-1.19,-1.39l-0.89,-1.9l-1.77,-1.66l-3.95,-0.08l0.07,-5.23l0.42,-1.44l1.95,-2.32l-0.14,-0.91l0.43,-1.18l-0.53,-1.42l0.25,-2.95l0.72,-1.08l0.32,-1.35l0.46,-0.39l2.47,-0.28l2.34,0.89l1.15,1.03l1.28,0.04l1.22,-0.59l3.03,1.28l1.5,-0.14l1.36,-1.01l1.32,0.07l0.82,-0.35l3.45,0.81l1.82,-1.34l1.84,2.7l0.66,0.16Z" data-code="NG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M857.8,512.11l1.85,3.38l0.45,0.2l0.3,-0.38l0.03,-1.36l0.38,0.29l0.56,2.51l2.02,1.03l1.81,0.29l1.59,-1.16l0.7,0.2l-1.16,4.01l-1.98,0.12l-0.73,1.27l0.21,1.25l-2.44,4.45l-1.47,1.02l-0.42,-0.65l-0.66,-0.3l1.25,-2.35l-0.81,-2.16l-2.64,-1.38l0.04,-0.7l1.82,-1.29l0.42,-2.46l-0.15,-2.29l-0.96,-2.0l-0.05,-0.75l-3.11,-3.94l-0.82,-1.69l1.57,1.56l1.76,0.72l0.66,2.55ZM853.83,527.42l0.57,1.38l0.61,0.17l1.4,-1.06l0.46,0.9l0.0,1.2l-2.48,3.93l-1.26,1.36l-0.06,0.47l0.6,1.08l-1.47,0.09l-2.32,1.54l-2.04,5.78l-3.02,2.49l-2.03,-0.07l-1.72,-1.2l-2.46,-0.23l-0.29,-0.92l1.25,-2.46l3.05,-3.36l1.62,-0.67l4.01,-3.18l1.56,-1.87l1.08,-2.44l1.01,-1.01l0.35,-1.73l1.23,-1.07l0.35,0.88Z" data-code="NZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M641.15,342.42l-0.0,3.36l-1.74,0.04l-4.8,-0.9l-1.59,-1.45l-3.36,-0.36l-7.66,-3.88l0.81,-2.23l2.33,-1.79l1.77,0.78l2.49,1.85l1.38,0.43l0.99,1.42l1.89,0.55l1.99,1.22l5.5,0.95Z" data-code="NP" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M472.78,298.18l-1.1,-1.47l0.98,-0.9l0.29,-0.94l2.0,1.84l-0.4,0.85l-1.77,0.62Z" data-code="XK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M407.4,389.11l0.86,0.42l0.56,0.9l1.13,0.54l1.19,-0.61l0.97,-0.08l1.42,0.54l0.6,3.25l-1.03,2.09l-0.65,2.85l1.06,2.33l-0.06,0.53l-2.54,-0.47l-1.66,0.03l-3.06,0.47l-4.11,1.61l0.32,-3.06l-1.18,-1.31l-1.32,-0.67l0.42,-0.86l-0.2,-1.4l0.5,-0.68l0.01,-1.59l0.84,-0.33l0.26,-0.5l-1.15,-3.02l0.12,-0.51l0.51,-0.25l0.66,0.31l1.93,0.02l0.67,-0.72l0.71,-0.14l0.25,0.7l0.57,0.22l1.4,-0.61Z" data-code="CI" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M444.61,279.47l-0.29,1.12l0.16,0.5l1.13,0.67l1.03,0.12l-0.12,0.88l-0.79,0.44l-1.7,-0.42l-0.47,0.25l-0.46,1.23l-0.72,0.07l-0.3,-0.39l-0.58,-0.06l-1.31,1.14l-0.93,0.13l-0.87,-0.62l-0.82,-1.51l-0.52,-0.17l-0.61,0.29l0.02,-0.85l1.73,-1.95l0.07,-0.65l0.96,0.08l0.57,-0.53l1.97,0.02l0.67,-0.71l2.16,0.92Z" data-code="CH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M242.07,384.75l-1.7,0.59l-0.59,1.19l-1.7,1.7l-0.37,1.94l-0.67,1.44l0.31,0.57l1.03,0.14l0.25,0.91l0.57,0.65l-0.04,2.35l1.64,1.42l3.16,-0.24l1.26,0.28l1.67,2.06l0.41,0.13l4.09,-0.39l0.45,0.22l-0.92,1.95l-0.2,1.8l0.52,1.83l0.75,1.05l-1.12,1.1l0.07,0.63l0.84,0.51l0.74,1.3l-0.39,-0.45l-0.59,-0.01l-0.71,0.74l-4.71,-0.05l-0.4,0.41l0.03,1.57l0.33,0.39l1.11,0.2l-1.68,0.4l-0.29,0.38l-0.01,1.82l1.16,1.14l0.34,1.25l-1.05,7.05l-1.04,-0.87l1.26,-1.99l-0.13,-0.56l-2.18,-1.23l-1.38,0.2l-1.14,-0.38l-1.27,0.61l-1.55,-0.26l-1.38,-2.46l-1.23,-0.75l-0.85,-1.2l-1.67,-1.19l-0.86,0.13l-2.11,-1.32l-1.01,0.31l-1.8,-0.29l-0.52,-0.91l-3.09,-1.68l0.77,-0.52l-0.1,-1.12l0.41,-0.64l1.34,-0.32l2.0,-2.88l-0.11,-0.57l-0.67,-0.43l0.39,-1.38l-0.52,-2.11l0.49,-0.83l-0.4,-2.13l-0.97,-1.36l0.17,-0.67l0.86,-0.08l0.47,-0.75l-0.46,-1.63l1.41,-0.07l1.8,-1.7l0.93,-0.24l0.3,-0.38l0.45,-2.78l1.22,-1.01l1.44,-0.04l0.45,-0.5l1.91,0.12l2.93,-1.85l1.15,-1.15l0.91,0.47l-0.26,0.45Z" data-code="CO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M740.22,270.81l4.55,1.5l2.81,2.58l0.98,3.43l0.38,0.29l3.8,0.0l2.34,-1.51l3.31,-0.89l-1.01,2.59l-1.01,1.46l-0.85,3.95l-1.53,3.16l-2.73,-0.57l-2.43,1.3l-0.19,0.43l0.65,2.95l-0.32,3.68l-0.94,0.07l-0.37,0.4l0.01,0.58l-0.89,-1.11l-0.67,0.07l-0.92,1.77l-3.72,1.4l-0.25,0.46l0.28,1.25l-1.5,-0.08l-1.08,-0.96l-0.59,0.06l-1.68,2.31l-2.7,1.74l-2.03,2.08l-3.39,0.92l-1.93,1.54l-1.22,0.4l0.42,-0.81l-0.43,-1.03l1.81,-2.01l0.02,-0.51l-1.32,-1.73l-0.51,-0.11l-2.25,1.21l-2.83,2.28l-1.5,2.02l-2.27,0.14l-1.56,1.64l-0.04,0.47l1.32,2.16l2.01,0.63l0.3,1.47l1.98,0.92l0.42,-0.05l2.6,-2.09l1.99,1.1l1.5,0.12l0.24,0.97l-3.39,0.94l-1.12,1.61l-2.5,1.64l-1.29,2.15l0.13,0.55l2.57,1.6l0.97,2.9l3.17,4.94l-0.03,1.8l-1.36,0.69l-0.19,0.5l0.6,1.55l1.41,0.95l-0.9,4.05l-1.43,0.4l-3.85,6.72l-2.28,3.23l-6.78,4.72l-2.73,0.3l-1.45,1.07l-0.61,-0.62l-0.56,-0.01l-1.36,1.29l-3.39,1.31l-2.61,0.41l-1.1,2.86l-0.81,0.09l-0.5,-1.47l0.5,-0.88l-0.25,-0.59l-3.36,-0.86l-1.3,0.41l-2.3,-0.64l-0.95,-0.87l0.34,-1.33l-0.3,-0.49l-2.19,-0.48l-1.13,-0.96l-0.48,-0.03l-2.06,1.4l-4.28,0.28l-2.76,1.08l-0.28,0.43l0.32,2.61l-0.59,-0.03l-0.19,-1.39l-0.56,-0.34l-1.67,0.72l-2.47,-1.26l0.63,-1.94l-0.25,-0.5l-1.37,-0.46l-0.55,-2.3l-0.46,-0.3l-2.13,0.37l0.24,-2.6l2.39,-2.48l0.03,-4.49l-1.19,-0.94l-0.79,-1.57l-0.41,-0.22l-1.4,0.2l-2.0,-0.32l0.48,-1.12l-1.17,-1.78l-0.56,-0.11l-1.62,1.1l-2.25,-0.6l-2.89,1.82l-2.25,2.08l-1.74,0.31l-1.17,-0.74l-3.32,-0.68l-1.48,0.83l-1.04,1.32l-0.12,-1.23l-0.54,-0.34l-1.44,0.56l-5.54,-0.9l-1.98,-1.22l-1.89,-0.56l-0.99,-1.42l-1.34,-0.39l-2.55,-1.88l-2.01,-0.89l-1.21,0.59l-5.57,-3.64l-0.54,-2.5l1.19,0.26l0.49,-0.37l0.08,-1.52l-0.98,-1.65l0.16,-2.6l-2.69,-3.58l-4.12,-1.33l-0.68,-2.18l-1.91,-1.6l-0.38,-0.78l-0.5,-3.27l-1.52,-0.73l-0.7,0.14l-0.49,-2.31l0.57,-0.59l-0.13,-0.89l2.06,-1.34l1.59,-0.59l2.55,0.42l0.43,-0.23l0.85,-1.9l2.99,-0.37l1.11,-1.41l4.04,-1.97l0.39,-0.97l-0.17,-1.67l1.48,-0.77l0.19,-0.49l-2.1,-5.65l4.54,-1.3l1.38,-0.84l1.88,-6.37l4.59,1.12l0.4,-0.13l1.49,-1.91l0.11,-3.42l2.01,-0.45l1.83,-2.43l0.45,-0.15l0.67,2.44l2.23,2.08l3.44,1.35l1.58,2.72l-0.93,4.08l0.95,1.84l6.54,1.28l2.95,2.14l1.48,0.4l1.07,3.0l1.52,2.13l3.06,0.09l5.13,0.76l3.38,-0.46l2.34,0.48l3.65,2.02l3.07,0.05l0.99,0.93l0.48,0.05l2.87,-1.78l3.94,-1.15l3.84,-0.16l3.06,-1.29l1.77,-1.81l1.72,-1.14l0.16,-0.47l-1.12,-2.36l1.05,-1.82l4.03,0.9l2.45,-1.85l3.76,-1.36l1.97,-2.46l1.63,-0.96l3.49,-0.47l1.91,0.4l0.47,-0.31l0.18,-1.65l-2.27,-2.59l-2.11,-1.27l-0.44,0.02l-1.78,1.27l-2.29,-0.54l-1.28,0.37l-0.43,-1.02l2.76,-6.16l3.03,1.25l3.53,-2.45l0.15,-1.96l2.18,-4.08l1.47,-1.55l-0.03,-2.26l-1.16,-1.03l1.66,-1.66l2.96,-0.72l3.21,-0.11l3.62,1.21l2.05,1.43l3.31,8.17l0.92,3.82ZM696.92,366.89l-1.87,1.1l-1.63,-0.65l-0.06,-1.84l1.03,-1.01l2.58,-0.7l1.15,0.05l0.31,0.56l-0.98,1.09l-0.53,1.4Z" data-code="CN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M457.92,387.33l1.06,1.92l-1.4,0.16l-1.05,-0.23l-0.45,0.23l-0.54,1.2l0.08,0.45l1.48,1.48l1.05,0.45l1.01,2.47l-1.52,3.0l-0.68,0.68l-0.13,3.69l2.38,3.84l1.09,0.8l0.24,2.48l-3.67,-1.14l-11.27,-0.13l0.23,-1.79l-0.98,-1.66l-1.19,-0.54l-0.44,-0.97l-0.6,-0.42l1.71,-4.28l0.75,-0.13l1.38,-1.37l0.65,-0.03l1.71,0.99l1.93,-1.12l1.14,-3.2l1.38,-1.17l2.0,-5.16l2.17,-2.15l0.3,-1.65l-0.86,-0.89l0.18,-0.37l0.8,1.32l0.07,3.24Z" data-code="CM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M246.67,568.71l-3.34,2.4l-0.55,3.89l-0.62,0.06l-2.66,-1.3l-2.82,-2.86l-3.06,-2.32l-0.71,-2.33l0.65,-2.52l-1.22,-2.56l-0.31,-6.43l1.02,-3.46l2.58,-2.79l-0.19,-0.66l-3.24,-0.91l2.11,-2.91l0.78,-5.35l2.3,1.02l0.56,-0.29l1.31,-7.14l-0.2,-0.42l-1.68,-0.9l-0.58,0.28l-0.7,3.81l-0.82,-0.25l1.58,-10.59l1.15,-2.43l-0.71,-3.1l-0.18,-3.15l1.02,-0.35l3.26,-9.88l1.07,-4.5l-0.56,-4.47l0.74,-2.47l-0.29,-3.45l1.46,-3.5l2.04,-17.19l-0.67,-7.94l1.04,-0.54l0.54,-0.92l0.79,1.16l0.32,1.82l1.25,1.19l-0.69,2.61l1.33,2.98l0.97,3.7l0.47,0.29l1.49,-0.31l0.11,0.25l-0.77,2.53l-2.57,1.28l-0.22,0.37l0.08,4.51l-0.47,0.8l0.58,1.25l-1.59,1.59l-1.68,2.74l-0.89,2.6l0.21,2.85l-1.49,2.9l1.12,5.38l0.64,0.64l-0.01,2.49l-1.39,2.89l0.02,2.59l-1.89,2.18l0.02,2.98l0.7,2.85l-1.44,1.23l-1.26,6.27l0.39,3.95l-0.98,0.94l0.58,3.94l1.04,1.3l-0.69,1.22l0.14,0.54l1.01,0.61l0.18,0.88l-1.04,0.92l0.26,2.03l-0.89,4.69l-1.31,3.11l0.25,2.01l-0.73,2.21l-1.97,1.93l0.28,4.31l0.88,1.43l1.6,0.0l-0.01,2.68l1.04,2.36l6.16,0.76ZM248.69,570.67l0.0,9.15l0.4,0.4l3.58,0.07l-0.53,1.14l-1.93,1.23l-2.45,-0.46l-1.9,-1.34l-2.54,-0.61l-5.59,-4.63l-2.57,-3.5l4.23,3.11l3.32,1.53l0.5,-0.14l1.29,-1.95l0.83,-2.85l2.04,-1.51l1.3,0.35Z" data-code="CL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M504.86,320.38l0.39,0.01l0.27,-0.07l-0.3,0.35l-0.36,-0.28Z" data-code="XC" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M280.04,266.9l-1.66,3.44l0.11,0.49l0.5,-0.0l1.44,-1.15l1.05,0.52l-0.63,0.98l0.16,0.58l2.22,1.06l1.38,-0.83l1.97,0.93l-0.68,2.46l0.52,0.48l1.3,-0.48l0.99,3.78l-0.93,2.87l-0.77,0.09l-1.25,-0.52l0.49,-2.7l-0.87,-0.87l-0.52,0.06l-2.77,3.06l-0.43,-0.04l1.14,-1.12l-0.14,-0.66l-2.4,-0.9l-7.4,0.09l-0.2,-0.58l1.35,-1.14l0.02,-0.6l-0.8,-0.75l1.91,-2.12l2.57,-6.16l1.48,-2.16l1.98,-1.26l0.5,0.08l-1.6,3.09ZM68.32,168.48l4.07,1.51l3.89,3.35l2.78,0.73l0.42,-0.15l2.16,-2.88l2.84,-2.09l3.89,0.75l3.71,-3.14l3.71,-1.66l1.54,2.72l0.62,0.1l1.99,-1.93l0.48,-2.97l1.15,0.53l4.17,6.45l0.67,0.01l2.68,-3.95l0.27,4.33l0.54,0.35l3.08,-1.17l1.05,-2.04l2.63,0.36l3.83,3.0l5.86,2.58l3.48,1.19l2.44,-0.39l2.95,3.04l-3.23,3.06l0.16,0.67l4.53,1.42l6.92,-0.76l1.96,-1.04l2.47,3.65l0.64,0.03l2.72,-3.33l-0.01,-0.52l-2.34,-2.61l1.33,-1.93l2.87,-0.3l1.88,-0.64l1.8,1.47l2.48,3.63l0.41,0.17l2.63,-0.5l4.62,2.96l3.83,-1.03l3.59,0.16l0.42,-0.43l-0.27,-3.92l1.8,-0.96l3.49,2.08l-0.01,6.03l0.34,0.4l0.44,-0.28l1.5,-4.95l1.69,0.15l0.43,-0.33l1.13,-6.89l-2.74,-4.66l-2.86,-2.89l0.19,-8.09l2.75,-5.34l2.86,1.11l2.44,3.36l3.31,8.33l-2.12,3.42l0.22,0.59l4.38,1.37l-0.01,6.85l0.29,0.39l0.45,-0.18l3.02,-4.91l2.56,3.84l-0.68,5.11l2.42,4.42l0.7,0.0l2.61,-4.74l1.86,-5.93l0.15,-7.44l3.08,0.48l3.57,1.03l3.18,3.35l0.14,3.2l-1.81,3.53l1.71,3.82l-0.29,2.9l-4.72,4.27l-3.21,0.89l-2.43,-1.77l-0.62,0.23l-0.74,3.09l-2.4,5.08l-0.73,2.58l-2.76,3.73l-3.68,0.5l-2.07,2.63l-0.15,3.32l-2.86,0.78l-3.1,4.45l-2.74,5.98l-0.98,4.09l-0.14,5.74l0.31,0.4l3.44,0.75l2.25,7.78l0.48,0.26l3.37,-0.88l4.49,1.92l2.43,1.68l1.92,2.2l3.09,1.21l2.61,1.84l6.65,0.69l-0.36,3.49l0.8,4.33l1.81,4.63l3.81,3.97l0.51,0.05l2.08,-1.51l1.37,-4.39l-1.31,-6.63l-1.54,-2.05l3.69,-1.91l2.84,-3.1l1.49,-3.43l-0.24,-3.19l-1.7,-3.97l-2.92,-3.49l2.86,-5.19l-1.09,-4.55l-0.81,-7.95l1.39,-0.99l4.1,1.4l2.62,0.54l2.14,-1.31l5.09,4.62l1.07,2.2l4.09,0.36l-0.06,3.98l0.83,6.25l2.42,1.04l1.74,2.7l0.57,0.11l3.63,-2.66l2.51,-5.54l1.22,-1.73l7.63,15.44l-0.95,2.7l0.14,0.45l3.3,2.51l2.23,2.5l4.1,1.23l1.45,1.25l0.96,3.51l2.08,0.8l0.87,1.37l0.17,4.34l-3.4,2.77l-4.22,1.5l-3.06,3.15l-4.04,0.61l-5.35,-0.82l-6.4,0.25l-2.32,2.87l-3.25,1.78l-6.48,8.38l-0.03,0.47l0.45,0.17l2.33,-0.73l3.98,-4.83l5.12,-3.08l3.49,-0.36l1.77,1.49l-2.18,2.58l0.8,4.03l1.01,2.99l3.5,1.85l4.14,-0.52l2.14,-3.2l0.24,1.68l1.22,0.99l-2.64,2.0l-5.49,2.09l-2.54,1.45l-2.73,2.43l-1.38,-0.18l-0.08,-2.39l4.16,-2.8l0.16,-0.45l-0.39,-0.28l-4.01,0.12l-2.61,0.4l-1.4,-1.73l-0.12,-5.1l-1.11,-1.06l-1.83,0.44l-0.65,-0.76l-0.63,0.03l-1.91,2.77l-0.81,2.9l-0.81,1.48l-1.66,0.64l-0.47,0.87l-8.32,0.08l-1.21,0.71l-2.33,2.23l-0.72,-0.14l-1.36,1.08l-1.12,-0.54l-4.75,1.43l-0.9,1.32l0.21,0.59l1.7,0.22l0.05,0.22l-1.84,0.36l-1.85,0.9l-1.19,-0.29l-0.92,0.15l-2.95,2.0l-0.71,-0.11l0.32,-0.68l1.12,-1.78l1.72,-1.33l0.09,-2.6l1.16,-2.28l0.48,0.59l2.03,0.48l0.42,-0.16l0.82,-1.6l-2.66,-4.02l-2.29,-0.71l-5.63,-0.81l-0.4,-0.66l-0.86,0.2l0.27,-0.64l-0.21,-0.52l-0.72,-0.32l0.32,-1.06l-0.91,-1.28l0.34,-0.82l-0.29,-0.55l-2.6,-0.52l-0.76,-1.93l-0.95,-0.76l-1.67,-0.09l-2.67,-0.67l-1.13,1.4l-1.48,0.69l-0.85,1.24l-2.8,-0.89l-2.1,0.45l-2.38,-1.13l-4.23,-0.83l-0.58,-0.48l-0.42,-1.96l-0.4,-0.32l-0.85,0.02l-0.39,0.4l-0.01,1.07l-69.11,-0.01l-6.5,-5.37l-4.5,-1.66l-1.29,-3.28l0.34,-2.39l-0.2,-0.41l-3.03,-1.66l-0.52,-3.39l-2.92,-2.97l-0.05,-1.94l1.39,-2.23l-0.07,-2.8l-4.34,-3.13l-4.08,-8.55l-4.01,-4.22l-1.31,-2.51l-0.57,-0.15l-2.51,1.6l-2.18,2.42l-3.81,-5.1l-2.44,-1.39l-2.26,-0.18l0.03,-55.45ZM265.75,272.87l-0.72,0.04l-3.11,-1.15l-1.72,-1.35l3.19,0.89l2.36,1.57ZM249.33,12.09l6.65,1.61l5.26,2.56l4.43,5.22l-0.1,4.84l-5.98,7.79l-6.13,3.67l-2.26,3.84l0.35,0.6l4.74,-0.08l-5.52,9.28l-4.14,4.52l-4.23,11.87l-5.01,2.26l-1.69,2.82l-7.4,1.42l-0.32,0.34l0.22,0.41l3.02,1.48l-1.51,2.34l2.02,6.18l-2.26,4.04l-3.94,3.58l-1.16,4.49l-3.53,3.68l0.35,2.54l0.44,0.34l3.85,-0.39l0.04,2.09l-6.37,6.12l-6.3,-2.81l-7.5,1.6l-3.7,-1.27l-4.4,-0.52l-0.28,-4.64l4.41,-2.41l0.2,-0.41l-1.19,-8.1l1.06,-0.58l6.49,4.94l0.49,-0.0l0.12,-0.48l-3.41,-7.64l-3.92,-2.37l1.85,-4.46l4.51,-3.29l0.71,-4.65l-3.55,-5.6l-0.98,-6.84l6.22,0.58l1.88,1.51l0.57,-0.08l3.91,-5.41l-0.21,-0.62l-5.64,-1.76l-8.71,0.93l-4.24,-5.03l-2.06,-6.44l-2.92,-4.92l-0.52,-5.65l3.5,-3.22l2.94,-0.62l4.91,-2.99l3.67,-6.97l2.62,0.86l2.63,5.2l0.41,0.22l0.34,-0.32l1.88,-10.36l3.17,-3.13l4.37,-2.24l7.32,-0.83l1.2,2.03l0.52,0.16l7.1,-3.49l10.71,2.64ZM203.82,140.61l1.98,5.56l0.38,0.26l0.37,-0.27l2.27,-6.74l5.84,-3.34l4.06,8.5l-0.37,5.31l0.57,0.39l4.95,-2.38l2.28,-3.11l5.2,3.94l3.34,3.74l0.31,3.32l0.54,0.34l4.32,-1.65l2.44,4.64l6.13,3.12l2.09,2.87l2.25,6.4l-4.35,3.07l-0.01,0.65l5.9,4.44l3.95,1.47l3.53,5.87l3.81,0.57l-0.69,3.91l-4.11,6.58l-2.68,-2.22l-3.9,-5.85l-0.43,-0.17l-3.24,0.78l-0.3,0.35l-0.24,3.8l2.63,3.5l3.42,2.75l0.96,1.44l1.58,5.48l-0.73,3.38l-2.67,-1.26l-6.25,-4.45l-0.52,0.05l-0.04,0.52l6.1,8.03l0.24,1.1l-6.09,-1.92l-5.3,-3.12l-2.77,-2.46l0.72,-1.31l-0.1,-0.51l-7.38,-5.75l-0.64,0.33l0.03,1.33l-6.7,0.85l-1.79,-1.68l1.46,-3.85l4.49,-0.1l5.15,-0.77l0.31,-0.54l-0.79,-2.04l0.83,-2.91l3.22,-6.15l-0.67,-3.24l-1.07,-2.43l-3.84,-3.29l-4.67,-2.18l1.24,-1.37l0.05,-0.47l-2.65,-4.44l-2.33,-0.57l-1.88,-2.37l-0.65,0.04l-1.25,2.02l-4.3,0.88l-9.0,-1.6l-5.26,-2.14l-3.98,-1.1l-1.81,-2.3l2.43,-3.26l-0.32,-0.64l-3.2,-0.03l-0.75,-7.66l1.89,-7.38l2.46,-3.41l5.58,-2.04l-1.59,4.91ZM261.18,282.95l2.07,0.7l1.54,-0.05l-0.57,0.69l-0.66,0.17l-2.92,-1.41l-0.44,-0.86l0.38,-0.46l0.61,1.23ZM230.78,185.0l-2.28,0.26l-0.54,-2.72l0.98,-3.45l1.88,-0.76l1.65,1.57l0.03,2.61l-0.24,0.76l-1.47,1.73ZM229.41,141.37l0.16,1.75l-4.89,-0.38l-2.72,1.08l-0.48,-0.34l-2.65,-4.39l0.09,-2.82l0.87,-0.43l5.47,0.92l4.14,4.61ZM222.03,214.7l-0.78,2.22l-0.56,-0.23l-0.54,-1.3l0.87,-1.54l0.57,0.07l0.44,0.77ZM183.65,102.44l3.0,3.59l4.7,-0.02l1.97,3.24l-0.41,4.19l2.83,2.3l1.84,2.54l6.99,1.27l4.2,-2.19l4.96,-0.84l3.84,0.67l2.53,3.56l0.53,3.8l-1.43,2.32l-3.48,1.88l-3.25,-1.1l-7.15,1.44l-5.04,0.16l-3.95,-1.13l-6.43,-2.95l-0.83,-5.12l-0.3,-4.98l-2.56,-4.72l-5.31,-1.46l-2.69,-3.1l0.83,-3.99l4.63,0.64ZM207.36,195.03l0.42,2.4l0.63,0.26l0.99,-0.72l1.27,1.36l5.47,3.76l0.21,2.54l0.49,0.36l1.62,-0.39l1.33,1.4l-1.71,1.36l-3.54,-1.23l-1.33,-2.43l-0.66,-0.06l-2.46,2.99l-3.05,2.47l-0.7,-2.67l-0.45,-0.29l-2.39,0.38l1.64,-2.22l0.32,-4.55l0.78,-5.03l1.13,0.31ZM215.49,211.5l-2.69,2.74l-1.33,-0.09l-0.38,-1.01l1.61,-2.18l2.82,0.04l-0.02,0.5ZM202.66,70.17l2.91,4.33l-3.3,3.83l-4.54,9.4l-4.14,0.83l-4.93,-1.5l-2.57,-4.9l0.04,-4.53l1.93,-3.49l-0.36,-0.59l-4.35,0.1l-2.61,-4.34l-1.55,-6.33l1.71,-6.55l1.67,-4.57l2.41,-1.04l0.22,-0.48l-0.96,-3.26l5.05,-0.73l3.21,8.41l8.21,6.06l1.95,9.35ZM187.39,143.67l-2.74,6.11l-2.28,-0.24l-1.49,-6.99l0.04,-4.2l1.26,-3.63l2.29,-2.28l4.96,0.3l4.35,2.01l-3.51,7.33l-2.87,1.59ZM186.12,124.07l-1.2,3.26l-3.2,-0.62l-2.75,-2.26l1.22,-4.02l3.15,-2.36l1.93,3.09l0.86,2.91ZM185.64,96.93l-0.83,0.24l-4.33,-0.68l-0.51,-2.52l4.35,0.15l1.52,1.89l-0.2,0.91ZM180.62,90.66l-3.24,2.16l-1.76,-2.41l-1.05,-4.51l-0.18,-4.75l2.69,0.43l1.32,0.77l2.85,4.19l-0.63,4.11ZM180.98,172.19l-1.22,1.91l-3.04,-1.9l-2.16,0.64l-2.93,-2.72l1.98,-2.02l1.52,-2.75l3.72,3.03l2.13,3.8ZM169.77,135.22l2.97,1.73l4.08,-1.03l0.51,2.03l-2.26,4.02l0.07,0.48l3.66,3.51l-0.43,6.97l-3.8,2.82l-2.06,-0.56l-1.71,-2.96l-6.1,-6.18l0.04,-2.04l4.64,0.95l0.44,-0.57l-2.66,-5.4l2.61,-3.78ZM174.46,107.75l1.36,3.53l0.08,5.21l-1.09,7.07l-3.71,0.89l-2.35,-1.35l0.05,-5.54l-0.47,-0.4l-3.64,0.69l-0.14,-7.04l2.56,0.16l3.62,-3.51l3.32,0.59l0.42,-0.3ZM170.01,87.71l0.84,4.38l-3.36,-1.1l-4.3,-4.01l-4.91,-0.41l2.06,-3.18l-0.05,-0.5l-2.92,-2.99l-0.16,-4.33l4.31,1.6l6.62,4.67l1.87,5.86ZM134.6,141.21l-1.16,3.7l0.55,0.48l5.29,-2.43l3.29,4.01l0.64,-0.03l2.53,-3.85l1.89,2.29l2.03,7.94l0.37,0.3l0.4,-0.26l1.28,-3.56l-1.72,-8.28l1.76,-1.01l2.22,1.24l2.69,3.29l2.45,13.62l8.57,7.16l-0.23,2.66l-3.8,0.53l-0.29,0.6l1.51,2.57l-0.67,2.03l-4.14,-1.0l-4.49,-1.91l-3.03,0.47l-4.65,2.34l-10.43,1.63l-1.41,-3.17l-3.42,-1.92l-2.23,0.65l-2.72,-5.01l5.02,-1.82l3.63,0.3l3.27,-1.29l0.25,-0.38l-0.26,-0.37l-4.84,-1.75l-5.5,0.57l-3.28,-0.14l-1.06,-2.23l5.47,-2.91l0.2,-0.46l-0.4,-0.3l-3.77,0.11l-3.96,-1.88l1.97,-5.68l1.69,-3.21l6.41,-4.99l2.07,1.35ZM158.82,138.54l-1.83,4.71l-3.34,-5.15l0.6,-0.86l2.98,-0.32l1.59,1.62ZM149.59,111.85l0.99,3.73l0.63,0.21l2.09,-1.62l2.15,0.37l0.41,4.59l-1.42,4.36l-8.24,1.45l-6.38,4.09l-3.32,0.18l-0.26,-2.47l5.03,-4.13l0.12,-0.46l-0.41,-0.24l-11.2,1.15l-3.08,-1.54l3.28,-9.52l2.11,-2.66l6.67,3.38l4.39,5.99l4.63,0.92l0.44,-0.53l-3.52,-9.7l2.01,-3.46l2.07,1.01l0.81,4.89ZM145.71,84.15l-2.55,2.05l-3.61,-0.01l0.03,-1.26l2.32,-3.45l0.99,0.43l2.82,2.24ZM144.69,94.95l-4.27,3.06l-3.27,-3.31l1.81,-3.41l3.34,-1.13l3.11,1.67l-0.73,3.12ZM118.92,155.09l-5.99,3.39l-1.29,-3.14l-5.55,-4.03l2.72,-9.3l2.17,-5.73l-2.25,-5.4l7.82,-1.34l3.61,1.91l6.24,0.5l2.31,2.51l2.44,3.4l-2.87,2.01l-6.21,6.07l-3.1,5.73l-0.05,3.42ZM129.56,96.45l-0.31,7.96l-1.8,3.53l-2.35,0.59l-4.6,4.46l-3.74,1.48l-2.92,-1.93l4.07,-7.68l5.0,-7.12l3.62,0.15l3.02,-1.45ZM111.13,275.3l-0.71,0.3l-3.83,-1.6l-0.83,-1.38l-2.13,-1.28l-0.67,-1.21l-2.4,-0.65l-0.75,-2.19l3.73,1.32l2.25,0.41l2.0,3.05l2.52,1.64l0.8,1.62ZM87.8,253.38l0.9,0.35l1.87,-0.27l-0.67,4.25l1.83,2.97l-1.42,-1.69l-0.98,-1.97l-1.19,-1.23l-0.34,-2.41Z" data-code="CA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M466.72,406.37l-0.1,1.03l-1.25,2.97l-0.19,3.62l-0.46,1.78l-0.23,0.63l-1.61,1.19l-1.21,1.39l-1.09,2.43l0.04,2.09l-3.25,3.25l-0.5,-0.24l-0.5,-0.83l-1.36,-0.02l-0.98,0.89l-1.68,-0.99l-1.54,1.24l-1.52,-1.96l1.57,-1.14l0.11,-0.52l-0.77,-1.35l2.1,-0.66l0.39,-0.73l1.05,0.82l2.21,0.11l1.12,-1.37l0.37,-1.81l-0.27,-2.09l-1.13,-1.5l1.0,-2.69l-0.13,-0.45l-0.92,-0.58l-1.6,0.17l-0.51,-0.94l0.1,-0.61l2.75,0.09l3.97,1.24l0.51,-0.33l0.17,-1.28l1.24,-2.21l1.28,-1.14l2.76,0.49Z" data-code="CG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M461.16,408.1l-0.26,-1.19l-1.09,-0.77l-0.84,-1.18l-0.29,-1.0l-1.04,-1.15l0.08,-3.44l0.58,-0.49l1.16,-2.36l1.85,-0.17l0.61,-0.62l0.97,0.58l3.15,-0.97l2.48,-1.92l0.02,-0.96l2.82,0.02l2.36,-1.18l1.93,-2.86l1.16,-0.94l1.11,-0.31l0.27,0.87l1.34,1.48l-0.39,2.02l0.3,1.01l4.01,2.76l0.17,0.93l2.63,2.31l0.6,1.44l2.08,1.4l-3.84,-0.21l-1.94,0.88l-1.24,-0.49l-2.67,1.2l-1.29,-0.18l-0.51,0.37l-0.6,1.22l-3.35,-0.65l-1.57,-0.91l-2.42,-0.83l-1.45,0.91l-0.97,1.28l-0.26,1.56l-3.22,-0.43l-1.49,1.33l-0.94,1.62Z" data-code="CF" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M487.01,402.27l2.34,-0.14l1.35,1.84l1.34,0.45l0.86,-0.39l1.21,0.12l1.07,-0.41l0.54,0.89l2.04,1.54l-0.14,2.72l0.7,0.54l-1.38,1.13l-1.53,2.54l-0.17,2.05l-0.59,1.08l-0.02,1.72l-0.72,0.84l-0.66,3.01l0.63,1.32l-0.44,4.26l0.64,1.47l-0.37,1.22l0.86,1.8l1.53,1.42l0.3,1.27l0.44,0.51l-4.08,0.75l-0.92,1.82l0.51,1.35l-0.74,5.46l0.17,0.38l2.45,1.47l0.54,-0.1l0.12,1.64l-1.28,-0.01l-1.85,-2.37l-1.94,-0.45l-0.48,-1.14l-0.56,-0.2l-1.41,0.74l-1.71,-0.3l-1.01,-1.19l-2.49,-0.2l-0.44,-0.77l-1.98,-0.21l-2.88,0.36l0.11,-2.42l-0.85,-1.13l-0.16,-1.36l0.32,-1.74l-0.47,-0.89l-0.04,-1.5l-0.4,-0.39l-2.53,0.02l0.1,-0.41l-0.39,-0.49l-1.28,0.01l-0.43,0.46l-1.62,0.32l-0.83,1.8l-1.09,-0.28l-2.4,0.52l-1.37,-1.91l-1.3,-3.31l-0.38,-0.27l-7.39,-0.03l-2.46,0.42l0.5,-0.45l0.37,-1.47l0.66,-0.38l0.92,0.08l0.73,-0.82l0.87,0.02l0.31,0.68l1.4,0.36l3.59,-3.63l0.01,-2.23l1.02,-2.29l2.69,-2.39l0.43,-0.99l0.49,-1.96l0.17,-3.51l1.25,-2.95l0.36,-3.15l0.86,-1.13l1.1,-0.67l3.57,1.73l3.65,0.73l0.46,-0.21l0.8,-1.46l1.24,0.19l2.61,-1.17l0.81,0.44l1.04,-0.03l0.59,-0.66l0.7,-0.16l1.81,0.25Z" data-code="CD" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M458.44,265.89l1.23,1.2l1.49,0.27l0.09,1.1l1.36,0.81l0.58,-0.21l0.25,-0.67l1.12,0.29l0.53,1.3l1.67,0.21l0.69,1.14l-1.4,1.19l-0.12,0.65l-0.55,0.55l-1.59,0.21l-0.56,0.65l-1.03,-0.52l-1.03,0.17l-2.15,-1.12l-1.05,0.4l-1.18,1.3l-1.53,-1.0l-2.59,-2.49l-0.57,-2.36l1.48,-0.7l0.99,-1.01l1.72,-0.74l0.54,-0.59l0.73,0.29l0.87,-0.32Z" data-code="CZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M504.35,321.02l0.49,0.34l-1.34,0.65l-0.91,-0.29l-0.26,-0.55l2.02,-0.14Z" data-code="CY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M211.34,387.89l0.48,1.0l1.61,1.62l-0.54,0.45l0.3,1.42l-0.25,1.2l-1.09,-0.6l-0.05,-1.25l-2.46,-1.43l-0.28,-0.77l-0.66,-0.45l-0.45,-0.0l-0.11,1.05l-1.32,-0.95l0.31,-1.31l-0.36,-0.6l0.31,-0.27l1.42,0.58l1.29,-0.14l0.56,0.56l0.74,0.17l0.55,-0.27Z" data-code="CR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M221.21,356.57l1.27,1.05l2.18,-0.29l4.43,3.42l2.09,0.45l-0.1,0.41l0.36,0.49l1.75,0.1l1.44,0.97l-3.07,0.42l-4.17,-0.03l0.79,-0.7l-0.04,-0.63l-1.2,-0.76l-1.49,-0.16l-0.7,-0.62l-0.56,-1.44l-0.4,-0.25l-1.34,0.1l-2.2,-0.68l-0.89,-0.6l-3.18,-0.41l-0.28,-0.17l0.6,-0.76l-0.36,-0.29l-2.73,-0.05l-1.7,1.33l-0.91,0.03l-0.61,0.71l-1.03,0.22l1.14,-1.35l1.01,-0.54l3.69,-1.04l3.98,0.22l2.21,0.87Z" data-code="CU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M500.35,482.11l0.5,2.14l-0.39,0.94l-1.04,0.22l-1.23,-1.25l-0.02,-0.69l0.84,-1.65l1.34,0.28Z" data-code="SZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M510.98,327.85l0.08,-1.44l0.55,-1.47l1.28,-1.07l0.12,-0.44l-0.41,-1.19l-1.14,-0.38l-0.19,-1.91l0.53,-1.11l1.29,-1.31l0.19,-1.27l0.6,0.24l2.61,-0.82l1.36,0.56l2.06,-0.01l2.95,-1.17l3.29,-0.29l-0.72,1.1l-1.49,1.11l0.23,2.19l-0.89,3.46l-10.14,6.13l-2.17,-0.92Z" data-code="SY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M621.37,297.76l-3.91,1.98l-0.95,1.31l-3.03,0.37l-1.14,2.06l-2.35,-0.39l-2.01,0.7l-2.39,1.55l0.09,1.02l-0.42,0.44l-4.5,0.47l-3.01,-1.02l-2.38,0.19l0.12,-0.96l2.3,0.46l1.14,-0.97l1.99,0.21l3.21,-2.37l-0.03,-0.67l-2.97,-1.75l-1.95,0.72l-1.27,-0.86l1.77,-1.84l-0.12,-0.64l-0.4,-0.18l0.36,-0.95l1.35,-0.39l4.01,1.14l0.5,-0.31l0.35,-1.82l1.08,-0.54l3.4,1.37l1.14,-0.35l7.61,0.43l1.15,1.13l1.27,0.45Z" data-code="KG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M506.26,414.59l1.87,-2.56l0.93,-2.15l-1.38,-4.08l-1.06,-1.6l2.82,-2.75l0.79,0.26l0.12,1.41l0.86,0.83l1.9,0.11l3.28,2.13l3.57,0.44l1.05,-1.12l1.96,-0.9l0.82,0.69l1.16,0.09l-1.78,2.45l0.03,9.12l1.3,1.94l-1.37,0.78l-0.67,1.03l-1.08,0.46l-0.34,1.67l-0.81,1.07l-0.45,1.55l-0.68,0.56l-3.2,-2.23l-0.35,-1.58l-8.86,-4.98l0.14,-1.6l-0.57,-1.04Z" data-code="KE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M481.71,393.21l1.07,-0.73l1.2,-3.2l1.36,-0.26l1.61,2.0l0.87,0.34l1.11,-0.41l1.5,0.07l0.57,0.53l2.49,0.0l0.44,-0.63l1.07,-0.4l0.45,-0.84l0.59,-0.33l1.9,1.34l1.6,-0.2l2.83,-3.35l-0.32,-2.23l1.6,-0.53l-0.24,1.62l0.3,1.84l1.34,1.18l0.2,1.88l0.35,0.41l0.02,1.54l-0.23,0.47l-1.42,0.25l-0.85,1.44l0.3,0.6l1.4,0.17l1.12,1.08l0.59,1.13l1.03,0.53l1.28,2.37l-4.42,3.99l-1.74,0.01l-1.89,0.55l-1.47,-0.52l-1.15,0.57l-2.96,-2.62l-1.3,0.49l-1.06,-0.15l-0.79,0.39l-0.82,-0.22l-1.8,-2.7l-1.91,-1.1l-0.66,-1.5l-2.62,-2.33l-0.18,-0.94l-2.37,-1.61Z" data-code="SS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M283.12,400.08l2.1,0.53l-1.08,1.95l0.2,1.72l0.93,1.49l-0.59,2.04l-0.43,0.71l-1.12,-0.42l-1.32,0.22l-0.93,-0.2l-0.46,0.26l-0.25,0.73l0.33,0.7l-0.89,-0.13l-1.39,-1.98l-0.31,-1.34l-0.97,-0.31l-0.89,-1.47l0.35,-1.61l1.45,-0.82l0.33,-1.87l2.61,0.44l0.58,-0.47l1.75,-0.16Z" data-code="SR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M689.52,379.15l0.5,1.47l-0.28,2.77l-4.0,1.87l-0.16,0.59l0.69,0.97l-2.06,0.17l-2.05,0.97l-1.82,-0.32l-0.9,-1.17l-1.23,-2.56l-0.55,-2.88l1.4,-1.87l3.01,-0.46l2.23,0.35l2.01,0.99l0.51,-0.14l0.95,-1.49l1.74,0.75Z" data-code="KH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M195.8,379.9l1.41,-1.21l2.24,1.46l0.98,-0.27l0.44,0.21l-0.27,1.07l-1.14,-0.03l-3.65,-1.23Z" data-code="SV" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M476.87,273.43l-1.2,2.33l-2.74,-1.08l-1.05,0.4l-0.52,0.78l-3.44,0.85l-0.48,0.81l-1.74,0.38l-1.88,-1.17l-0.2,-1.03l0.4,-0.94l1.02,0.01l0.86,-0.39l1.74,-2.23l0.83,0.19l0.76,-0.39l1.06,1.14l0.49,0.08l1.33,-0.74l1.26,0.34l1.63,-0.49l1.87,1.16Z" data-code="SK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M737.47,312.73l1.03,-0.11l0.87,-1.28l2.69,-0.35l0.32,-0.3l1.75,3.04l0.59,1.94l0.02,3.41l-0.81,1.45l-2.22,0.59l-1.92,1.21l-1.79,0.21l-0.2,-1.21l0.44,-2.44l-0.97,-2.83l1.45,-0.41l0.23,-0.6l-1.48,-2.32Z" data-code="KR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M456.18,286.22l-0.51,-1.56l0.2,-1.29l1.68,0.23l1.44,-0.83l2.08,-0.09l0.62,-0.56l0.24,0.62l-1.66,0.8l-0.43,1.53l-0.67,0.28l-0.24,0.94l-1.2,-0.55l-0.54,0.09l-0.33,0.43l-0.67,-0.05Z" data-code="SI" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M736.77,312.06l-0.91,-0.45l-0.89,0.68l-1.23,-0.97l0.49,-1.01l0.5,-0.32l0.58,-2.78l-0.45,-0.8l-1.38,-0.34l-0.75,-0.55l1.69,-1.74l2.72,-1.75l1.57,-2.11l1.1,0.86l2.17,0.12l0.41,-0.49l-0.32,-1.43l3.54,-1.33l0.93,-1.56l1.03,1.28l-1.46,1.26l-0.79,1.2l0.02,2.38l-1.08,0.61l-1.41,1.55l-1.7,0.58l-1.23,1.17l-0.16,2.14l2.12,1.67l-0.16,0.33l-2.59,0.32l-1.14,1.41l-1.21,0.08Z" data-code="KP" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M540.8,336.41l0.38,0.92l-0.17,0.78l0.61,1.64l-0.95,0.04l-0.83,-1.35l-1.59,-0.2l1.34,-2.02l1.21,0.17Z" data-code="KW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M390.09,377.95l0.12,1.57l0.49,1.48l0.96,0.82l0.05,1.3l-1.26,-0.19l-0.75,0.33l-1.84,-0.62l-5.84,-0.13l-2.54,0.51l-0.22,-1.04l1.78,0.04l2.01,-0.92l1.03,0.48l1.09,0.05l1.29,-0.62l0.14,-0.58l-0.51,-0.74l-1.81,0.25l-1.13,-0.64l-0.79,0.04l-0.72,0.61l-2.31,0.06l-0.92,-1.79l-0.82,-0.65l0.64,-0.36l1.81,-3.15l0.65,-0.64l1.04,0.19l1.39,-0.56l1.19,-0.02l2.72,1.39l3.03,3.53Z" data-code="SN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M394.46,393.98l-1.73,1.98l-0.58,1.34l-2.07,-1.06l-1.22,-1.26l-0.65,-2.4l1.16,-0.97l0.67,-1.18l1.21,-0.52l1.66,0.0l1.03,1.65l0.52,2.42Z" data-code="SL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M552.75,298.52l0.51,-1.47l-0.48,-1.19l-2.96,-1.32l-1.07,-2.94l-1.37,-0.98l-0.03,-0.45l1.95,0.27l0.45,-0.38l0.09,-2.29l1.75,-0.47l2.09,0.51l0.49,-0.34l0.45,-3.5l-0.45,-2.38l-0.42,-0.32l-2.41,0.17l-2.39,-0.84l-2.87,1.59l-2.15,0.7l-0.86,-0.4l0.15,-1.86l-1.6,-2.47l-2.02,-0.09l-1.83,-2.19l1.33,-2.64l-0.61,-1.04l1.66,-3.54l2.17,1.91l0.66,-0.26l0.29,-2.7l4.94,-4.15l3.67,-0.1l8.38,4.33l2.97,-1.63l3.74,-0.08l3.1,1.99l0.56,-0.13l0.6,-0.97l3.28,0.16l0.4,-0.27l0.63,-1.89l-0.15,-0.46l-3.62,-2.47l1.99,-1.65l-0.2,-1.23l2.05,-0.92l0.17,-0.58l-1.66,-2.63l0.88,-1.1l9.22,-1.46l1.35,-1.1l6.17,-1.58l2.26,-1.78l4.05,0.85l0.74,4.22l0.54,0.3l2.46,-0.98l2.8,1.27l-0.18,2.03l0.44,0.43l2.58,-0.3l4.83,-3.09l0.03,0.36l3.16,3.23l5.57,10.31l0.69,0.03l1.11,-1.75l3.11,2.07l3.78,-0.93l1.13,0.59l1.15,2.17l1.83,0.89l1.0,1.55l0.4,0.18l2.95,-0.47l1.06,1.89l-1.65,2.2l-1.92,0.33l-0.33,0.38l-0.12,3.61l-1.14,1.37l-4.73,-1.15l-0.48,0.28l-1.76,6.36l-1.1,0.68l-4.91,1.4l-0.26,0.52l2.13,5.72l-1.4,0.73l-0.08,1.73l-0.87,-0.28l-1.43,-1.27l-7.9,-0.45l-0.92,0.34l-3.74,-1.37l-1.63,0.99l-0.31,1.59l-3.7,-1.05l-1.87,0.48l-0.76,1.57l-1.35,0.6l-3.3,2.34l-1.12,2.31l-0.42,0.01l-0.93,-1.56l-2.86,-0.1l-0.45,-2.43l-0.39,-0.33l-0.81,-0.02l0.02,-3.32l-3.0,-2.52l-4.58,0.18l-2.74,0.47l-2.34,-3.04l-6.74,-4.23l-6.45,2.1l-0.28,0.38l0.1,12.31l-0.69,0.09l-1.62,-2.42l-1.83,-1.07l-3.13,0.66l-0.68,0.6Z" data-code="KZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M537.53,338.97l2.0,0.25l0.91,1.39l1.49,-0.06l0.88,2.19l1.29,0.79l0.51,1.03l1.56,1.08l-0.1,1.98l0.32,0.93l1.57,2.56l0.76,0.55l0.71,-0.04l1.37,4.1l7.83,1.63l0.51,-0.29l0.77,1.29l-1.56,5.0l-7.29,2.58l-7.31,1.05l-2.34,1.19l-1.88,2.79l-0.76,0.28l-0.83,-0.79l-0.91,0.12l-2.88,-0.52l-3.5,0.25l-0.86,-0.57l-0.58,0.15l-0.66,1.29l0.16,1.12l-0.43,0.33l-0.93,-1.42l-0.33,-1.18l-1.23,-0.89l-1.27,-2.1l-0.78,-2.27l-1.73,-1.83l-1.14,-0.49l-1.54,-2.37l-0.2,-3.5l-1.44,-3.02l-1.27,-1.19l-1.33,-0.58l-1.31,-3.5l-0.77,-0.7l-0.97,-2.05l-2.8,-4.2l-1.07,-0.17l0.59,-2.85l2.75,0.31l1.08,-0.88l0.6,-0.99l1.74,-0.36l0.65,-1.08l0.72,-0.43l0.1,-0.6l-2.09,-2.45l4.42,-1.3l0.48,-0.39l2.75,0.73l3.66,2.01l7.03,5.8l4.88,0.32Z" data-code="SA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M480.3,192.35l-4.15,1.76l-2.43,4.19l0.32,3.66l-3.86,4.45l-4.93,4.95l-1.79,7.79l1.78,3.64l2.29,2.71l-2.14,5.19l-2.69,1.39l-0.95,7.87l-1.3,3.9l-2.71,-0.39l-0.43,0.25l-1.32,3.3l-2.29,0.16l-0.75,-3.94l-2.09,-5.18l-1.86,-6.56l1.04,-2.66l2.12,-3.53l0.83,-6.02l-1.6,-2.83l-0.15,-7.02l1.52,-4.93l2.18,0.09l0.39,-0.26l0.87,-2.28l-0.85,-2.14l3.83,-8.36l4.06,-11.45l2.12,0.02l0.4,-0.33l0.59,-3.35l4.31,1.0l0.49,-0.36l0.34,-4.24l1.04,-0.19l6.98,7.72l0.07,9.8l0.74,2.18Z" data-code="SE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M505.98,389.25l-0.34,-0.78l-1.17,-0.91l-0.27,-1.62l0.29,-1.82l-0.34,-0.46l-1.16,-0.18l-0.54,0.59l-1.23,0.11l-0.28,0.65l0.53,0.66l0.17,1.23l-2.44,3.01l-0.96,0.2l-2.39,-1.41l-0.95,0.52l-0.38,0.78l-1.11,0.41l-0.29,0.5l-1.94,0.0l-0.54,-0.52l-1.81,-0.09l-0.95,0.41l-2.45,-2.36l-2.07,0.54l-0.73,1.27l-0.6,2.11l-1.25,0.58l-0.75,-0.62l0.27,-2.67l-1.48,-1.78l-0.22,-1.49l-0.92,-0.97l-0.02,-1.3l-0.57,-1.17l-0.69,-0.16l0.7,-1.31l-0.18,-1.15l0.65,-0.63l0.03,-0.55l-0.36,-0.42l1.56,-3.02l1.91,0.16l0.43,-0.4l-0.1,-11.14l2.49,-0.01l0.4,-0.4l-0.0,-4.96l29.02,0.0l0.65,2.11l-0.49,0.67l0.36,2.75l0.93,3.22l2.12,1.59l-0.9,1.07l-1.72,0.4l-0.98,0.91l-1.42,5.73l0.24,1.16l-0.38,2.09l-0.97,2.4l-1.53,1.32l-1.32,2.93l-1.22,0.86l-0.37,1.34Z" data-code="SD" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M241.8,368.82l0.05,-0.67l-0.47,-0.75l0.43,-0.45l0.19,-1.02l-0.09,-1.57l1.66,0.01l1.99,0.64l0.33,0.69l1.29,0.19l0.33,0.77l0.99,0.09l0.81,0.64l-0.46,0.53l-1.13,-0.48l-1.87,-0.01l-1.27,0.6l-0.75,-0.56l-1.01,0.55l-0.79,1.43l-0.23,-0.62Z" data-code="DO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M528.43,386.01l-0.45,0.67l-0.58,-0.25l-1.51,0.13l-0.18,-1.02l1.45,-1.97l0.83,0.17l0.77,-0.44l0.2,1.01l-1.21,0.52l-0.06,0.7l0.73,0.48Z" data-code="DJ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M452.3,246.5l-1.22,2.88l-2.11,-1.99l-0.26,-1.39l2.98,-1.2l0.61,1.7ZM447.78,242.9l-0.32,0.89l-0.89,-0.07l-1.8,3.21l0.54,2.1l-1.13,0.47l-1.58,-0.48l-0.91,-2.19l-0.07,-4.44l0.99,-2.3l2.0,-0.26l1.11,-1.38l1.3,-0.85l-0.05,1.54l-0.73,1.69l0.3,1.28l1.25,0.79Z" data-code="DK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M453.15,278.66l-0.56,-0.42l-1.2,-0.11l-1.89,0.66l-2.12,-0.15l-0.57,0.71l-0.83,-0.67l-0.98,0.09l-2.56,-1.08l-0.49,0.15l-0.39,0.62l-1.46,-0.02l0.26,-2.16l1.24,-2.54l-0.28,-0.57l-3.51,-0.68l-0.95,-0.81l0.12,-1.49l-0.49,-1.0l0.27,-2.61l-0.38,-3.76l1.43,-0.25l0.63,-1.53l0.65,-3.87l-0.43,-1.44l0.31,-0.56l1.61,-0.18l0.34,0.68l0.67,0.07l1.7,-2.09l-0.57,-3.77l1.35,0.41l1.33,-0.45l0.28,1.46l2.27,0.9l-0.02,1.24l0.52,0.39l2.55,-0.8l1.33,-1.07l2.53,1.51l1.08,1.24l0.51,1.88l-0.61,1.39l0.88,1.43l0.58,2.06l-0.16,1.52l0.87,2.18l-0.54,0.2l-0.49,-0.34l-0.54,0.07l-0.57,0.68l-1.71,0.73l-1.01,1.02l-1.75,0.82l-0.2,0.5l0.84,2.98l2.45,2.3l-0.71,1.4l-1.0,0.83l0.33,2.27Z" data-code="DE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M528.26,376.46l0.26,-0.43l-0.22,-1.03l0.28,-0.61l-0.09,-0.91l0.92,-0.7l-0.08,-1.37l0.39,-0.76l1.01,0.48l3.33,-0.27l3.76,0.42l0.95,0.82l1.36,-0.59l1.74,-2.67l2.18,-1.11l6.86,-0.96l2.48,5.52l-1.64,0.77l-0.56,1.93l-6.23,2.19l-2.29,1.82l-1.93,0.05l-1.41,1.03l-4.24,0.75l-1.72,1.5l-3.28,0.19l-0.52,-1.19l0.02,-1.52l-1.34,-3.33Z" data-code="YE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M441.47,315.57l-0.34,1.19l0.39,2.88l-0.55,2.35l-1.58,1.92l0.36,2.53l1.92,1.66l0.17,0.85l1.43,1.1l1.85,7.66l0.13,1.23l-0.57,5.23l0.2,1.59l-0.88,1.03l-0.02,0.5l1.41,1.93l0.14,1.24l0.89,1.54l0.5,0.17l0.97,-0.42l1.72,1.11l0.83,1.29l-8.23,4.95l-7.23,5.24l-3.43,1.15l-2.3,0.21l-0.28,-1.63l-2.56,-1.12l-0.67,-1.28l-26.12,-18.48l0.01,-3.67l3.77,-1.98l2.44,-0.43l2.12,-0.8l1.08,-1.5l2.81,-1.11l0.34,-2.2l1.34,-0.31l1.04,-1.0l3.46,-0.73l0.36,-1.59l-0.58,-0.56l-0.83,-3.02l-0.18,-1.95l-0.8,-1.65l2.06,-1.44l2.62,-0.52l1.71,-1.32l2.31,-0.91l8.23,-0.8l1.51,0.41l2.27,-1.19l2.45,-0.02l0.91,0.65l1.38,-0.05Z" data-code="DZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M892.73,206.44l1.34,0.72l1.36,-0.5l1.85,1.36l2.21,0.69l-1.59,1.04l-2.57,-2.02l-2.38,0.18l-0.3,-0.25l0.09,-1.21ZM183.2,272.56l0.38,1.78l1.12,0.96l4.22,0.82l2.39,1.15l2.19,-0.43l2.01,0.64l-1.73,0.85l-3.49,3.04l-0.14,0.83l0.52,0.39l2.3,-0.7l1.8,1.17l5.17,-2.8l-0.37,0.89l0.24,0.53l1.35,0.45l1.71,1.35l4.7,-1.01l0.4,0.77l1.58,0.45l0.68,0.78l-1.42,0.21l-2.2,-0.37l-3.59,1.03l-2.72,3.73l0.35,0.91l0.62,-0.0l0.61,-0.75l-1.43,5.39l0.29,3.47l0.67,1.77l0.61,0.48l1.03,-0.07l0.75,-0.43l1.59,-2.19l0.13,-2.45l-0.82,-2.2l0.11,-1.33l1.2,-2.74l0.42,-0.36l0.48,0.84l0.4,-0.3l0.4,-1.6l0.59,-0.51l0.24,-0.94l1.66,0.56l1.67,1.25l-0.03,2.8l-1.28,1.3l0.02,1.21l0.87,0.37l1.67,-1.46l0.49,0.18l0.51,3.02l-2.51,4.23l0.17,0.59l1.54,0.69l1.51,0.19l1.93,-0.49l4.72,-2.41l2.16,-2.03l-0.08,-1.39l0.77,-0.26l3.91,0.4l2.14,-1.19l0.19,-0.39l-0.31,-1.71l2.31,-2.21l1.0,-0.57l8.31,-0.03l0.57,-0.94l1.9,-0.88l0.92,-1.72l0.75,-2.75l1.58,-2.29l0.94,0.69l1.44,-0.54l0.81,0.77l-0.0,4.78l1.98,3.01l-2.38,1.52l-5.36,2.37l-1.81,3.03l0.01,1.98l0.83,1.79l0.78,0.27l-6.43,1.12l-2.21,1.0l-0.21,0.48l0.45,0.28l3.52,-0.57l-2.73,0.77l-1.77,-0.26l-0.76,0.91l0.23,0.65l0.34,0.07l-0.43,1.87l-1.26,1.73l-1.46,-1.16l-0.49,-0.06l-0.18,0.46l0.52,1.74l0.61,0.64l0.03,0.92l-0.94,1.5l-1.22,-1.31l-0.28,-2.52l-0.35,-0.35l-0.42,0.27l-0.48,1.39l0.34,1.57l-0.97,-0.29l-0.48,0.22l0.16,0.5l1.54,0.91l0.1,2.78l0.78,0.52l0.53,3.76l-1.43,2.04l-2.47,0.86l-1.71,1.78l-1.31,0.27l-1.27,1.11l-0.43,1.05l-2.7,1.91l-2.64,3.21l-0.45,2.23l0.45,2.17l0.85,2.51l1.09,2.0l0.04,1.26l1.16,3.2l-0.18,2.82l-0.55,1.49l-0.47,0.22l-0.88,-0.24l-0.33,-1.01l-1.03,-0.79l-2.75,-5.4l0.46,-2.04l-0.76,-1.66l-1.95,-2.41l-1.47,-0.55l-2.38,1.23l-1.46,-1.42l-1.79,-0.75l-2.78,0.36l-2.27,-0.31l-2.03,0.23l-1.04,0.45l-0.18,0.57l0.39,0.67l0.19,1.47l-0.9,-0.23l-0.84,0.49l-1.57,-0.08l-2.08,-1.52l-2.08,0.34l-1.91,-0.65l-3.74,0.89l-2.39,2.17l-2.54,1.28l-1.45,1.47l-0.61,1.43l-0.02,1.98l0.38,1.9l-1.99,-0.55l-1.81,-0.8l-1.25,-3.25l-1.44,-1.57l-2.24,-3.73l-1.76,-1.15l-2.28,-0.01l-1.71,2.18l-1.74,-0.72l-1.16,-0.78l-1.52,-3.14l-3.94,-3.35l-4.34,-0.0l-0.4,0.4l-0.0,0.81l-6.5,0.02l-9.04,-3.34l-0.33,-0.75l-5.69,0.52l-0.43,-1.37l-1.62,-1.72l-1.14,-0.41l-0.55,-0.94l-1.27,-0.14l-1.02,-0.83l-2.22,-0.29l-0.43,-0.33l-0.36,-1.7l-2.4,-3.06l-2.02,-4.21l-0.05,-0.96l-2.93,-3.59l-0.33,-2.54l-1.3,-1.83l0.52,-2.65l-0.09,-2.87l-0.78,-2.59l0.96,-3.2l0.61,-6.46l-0.46,-4.91l-1.48,-4.8l0.09,-0.23l3.09,1.09l1.27,3.33l0.71,0.07l0.68,-1.24l-1.12,-5.71l68.79,-0.0l0.4,-0.4l0.13,-1.09ZM32.37,157.48l1.75,3.33l0.67,0.06l0.98,-1.29l3.62,0.39l-0.12,1.35l0.27,0.41l3.83,1.28l2.65,-0.7l5.14,2.3l4.86,0.72l1.87,0.93l3.47,-1.11l3.64,2.11l2.52,0.95l-0.03,56.12l0.38,0.4l2.37,0.14l2.29,1.31l3.91,5.31l0.63,0.04l2.4,-2.69l2.1,-1.34l1.18,2.24l3.95,4.14l4.1,8.6l4.22,2.91l0.06,2.46l-1.03,1.56l-1.12,-1.31l-2.06,-1.31l-0.68,-3.73l-3.26,-3.82l-1.32,-4.34l-0.33,-0.28l-6.34,-0.42l-2.8,-1.31l-5.26,-5.09l-6.77,-2.72l-3.55,0.39l-4.79,-2.25l-3.33,-2.21l-2.78,1.09l-0.25,0.43l0.46,3.15l-3.97,1.29l-2.26,1.69l-2.25,0.84l-0.29,-2.33l1.07,-4.71l2.51,-1.5l0.15,-0.53l-0.69,-1.3l-0.62,-0.11l-3.19,2.88l-1.77,3.43l-3.56,3.49l-0.04,0.53l1.65,2.14l-2.16,3.15l-5.1,3.33l-0.76,2.13l-3.78,2.28l-0.91,2.19l-2.68,1.74l-1.82,-0.27l-6.95,4.17l-3.92,1.13l2.36,-1.94l2.5,-1.4l2.58,-2.35l3.26,-0.66l1.2,-1.79l3.42,-2.69l2.56,-2.83l0.42,-3.52l1.25,-2.78l-0.09,-0.45l-0.46,-0.07l-2.63,1.33l-0.6,-0.62l-0.6,0.03l-1.02,1.31l-1.33,-1.98l-0.71,0.08l-0.3,0.77l-0.56,-1.45l-0.62,-0.17l-2.39,1.85l-1.03,-0.0l-0.18,-2.46l0.44,-1.74l-1.7,-2.14l-0.41,-0.11l-3.01,0.89l-1.94,-2.17l-1.61,-1.16l-0.11,-2.96l-1.78,-2.05l0.88,-2.78l2.01,-2.96l0.87,-2.7l1.66,-0.33l1.59,0.82l0.5,-0.12l1.86,-2.47l1.93,0.32l1.91,-1.75l-0.34,-2.97l-1.22,-1.04l1.59,-1.93l-0.33,-0.65l-1.69,0.11l-2.66,1.27l-0.72,1.08l-1.92,-1.11l-3.43,0.63l-3.41,-1.3l-1.05,-2.33l-2.87,-3.16l3.14,-2.29l5.47,-2.98l1.51,0.0l-0.29,2.67l0.42,0.44l5.29,-0.24l0.34,-0.59l-2.03,-3.88l-3.12,-2.51l-1.79,-3.25l-2.4,-2.83l-3.25,-2.04l1.19,-3.05l4.45,-0.33l3.16,-3.2l0.69,-3.62l2.43,-3.32l2.42,-0.86l4.6,-3.26l2.51,0.36l3.66,-3.91l3.4,1.47ZM37.56,239.39l-2.21,1.54l-0.94,-0.87l-0.32,-1.79l3.24,-2.14l1.37,0.26l0.77,1.05l-1.9,1.94ZM31.06,363.53l0.98,0.48l0.75,0.91l-1.77,1.1l-0.44,-1.57l0.48,-0.92ZM29.32,361.52l0.19,0.06l0.11,0.07l-0.18,0.04l-0.12,-0.16ZM25.2,359.55l0.2,0.24l-0.14,-0.02l-0.05,-0.23ZM5.91,226.07l-1.09,0.55l-2.4,-1.69l1.72,-0.6l1.6,0.37l0.17,1.37Z" data-code="US" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M286.86,504.69l-0.94,1.64l-2.58,1.54l-1.67,-0.55l-1.42,0.28l-2.4,-1.28l-1.51,0.09l-1.28,-1.4l0.16,-1.65l0.56,-0.83l-0.02,-2.91l1.22,-5.04l1.18,-0.23l2.36,2.12l1.08,0.03l4.36,3.37l1.24,1.73l-0.98,1.58l0.62,1.52Z" data-code="UY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M510.37,325.96l-0.89,0.55l1.84,-3.86l0.6,0.08l0.24,0.7l-1.15,0.96l-0.64,1.57Z" data-code="LB" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M689.54,378.29l-1.76,-0.75l-0.5,0.15l-0.94,1.48l-1.33,-0.65l0.62,-0.99l0.11,-2.2l-2.04,-2.45l-0.25,-2.69l-1.9,-2.14l-2.15,-0.31l-0.79,0.93l-1.12,0.06l-1.06,-0.4l-2.05,1.22l-0.04,-1.63l0.61,-2.74l-0.36,-0.49l-1.35,-0.1l-0.11,-1.26l-0.97,-0.9l0.33,-0.61l1.63,-1.34l0.39,0.36l1.33,0.07l0.42,-0.45l-0.34,-2.75l0.7,-0.21l1.28,1.86l1.11,2.41l0.36,0.23l2.82,0.02l0.72,1.72l-1.4,0.67l-0.72,0.95l0.13,0.59l2.91,1.54l3.61,5.34l1.88,1.81l0.57,1.65l-0.35,1.99Z" data-code="LA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M724.01,356.0l-0.73,1.52l-0.9,-1.56l-0.26,-1.81l1.38,-2.53l1.73,-1.8l0.64,0.46l-1.86,5.73Z" data-code="TW" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M266.64,389.17l0.28,-1.17l1.13,-0.22l-0.06,1.21l-1.35,0.18Z" data-code="TT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M513.19,301.28l3.65,1.31l3.06,-0.48l2.09,0.29l3.13,-1.74l2.44,-0.15l2.19,1.49l0.35,0.95l-0.23,1.5l0.24,0.43l2.34,1.31l-1.23,0.67l-0.2,0.43l0.75,3.55l-0.42,1.23l1.16,2.15l-0.57,0.25l-0.9,-0.73l-2.91,-0.41l-1.25,0.5l-4.23,0.45l-2.81,1.15l-1.9,0.01l-1.54,-0.57l-2.56,0.81l-0.66,-0.49l-0.64,0.29l-0.12,1.59l-0.89,0.9l-0.49,-0.75l0.8,-1.4l-0.41,-0.19l-1.43,0.25l-2.0,-0.69l-2.04,1.79l-3.49,0.32l-2.14,-1.66l-2.7,-0.1l-0.87,1.34l-1.36,0.29l-2.28,-1.56l-2.71,-0.02l-1.37,-2.89l-1.7,-1.68l1.09,-2.23l-0.08,-0.46l-1.31,-1.28l2.41,-2.71l3.68,-0.13l0.36,-0.25l0.94,-2.24l4.48,0.41l3.23,-2.2l2.8,-0.91l3.98,-0.07l4.28,2.31ZM488.78,302.77l-1.7,1.44l-0.51,-0.99l1.37,-2.91l-0.78,-0.93l1.78,-0.74l1.78,0.37l0.45,1.31l1.81,0.89l-0.14,0.26l-2.76,0.17l-1.31,1.13Z" data-code="TR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M624.16,398.87l-1.82,0.48l-0.99,-1.67l-0.42,-3.47l0.95,-3.45l1.21,0.98l2.26,4.21l-0.34,2.34l-0.85,0.58Z" data-code="LK" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M489.13,238.44l0.98,0.86l0.21,2.15l0.72,2.39l-3.68,2.17l-2.21,-1.98l-1.3,-0.34l-0.27,-0.73l-0.45,-0.25l-2.41,0.44l-4.15,-0.29l-2.48,1.13l0.07,-2.68l1.15,-2.72l1.91,-1.29l2.14,3.3l2.01,-0.09l0.38,-0.35l0.45,-3.34l1.74,-0.68l3.03,2.19l2.16,0.1Z" data-code="LV" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M486.92,246.68l0.19,1.58l-2.02,1.5l-0.54,2.27l-2.48,1.47l-2.05,-0.02l-0.5,-1.08l-1.3,-0.59l-0.07,-2.33l-1.21,-0.74l-2.38,-0.69l-0.45,-3.18l2.51,-1.21l4.09,0.28l2.23,-0.39l0.52,0.88l1.23,0.27l2.22,1.99Z" data-code="LT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M436.07,271.5l-0.48,-0.1l0.29,-1.66l0.29,0.51l-0.1,1.25Z" data-code="LU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M399.36,395.85l0.18,1.54l-0.49,1.0l0.08,0.47l2.47,1.8l-0.33,2.81l-2.65,-1.13l-5.78,-4.62l0.58,-1.32l2.1,-2.34l0.86,-0.22l0.77,1.14l-0.14,0.86l0.59,0.87l1.0,0.14l0.76,-0.99Z" data-code="LR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M491.05,494.85l-0.48,0.15l-1.5,-1.78l1.12,-1.53l2.18,-1.51l1.52,1.34l-0.99,1.94l-1.23,0.4l-0.62,0.98Z" data-code="LS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M670.27,385.68l-1.41,3.9l0.15,2.01l0.38,0.36l1.38,0.07l0.9,2.05l0.55,2.34l1.4,1.45l1.61,0.38l0.96,0.97l-0.5,0.64l-1.1,0.2l-0.34,-1.18l-2.04,-1.1l-0.63,0.23l-0.63,-0.62l-0.48,-1.3l-2.55,-2.64l-0.73,0.41l0.95,-3.91l2.16,-4.25ZM670.67,384.59l-0.92,-2.2l-0.26,-2.64l-2.14,-3.1l0.72,-0.5l0.89,-2.62l-2.62,-3.66l-0.99,-1.9l0.88,-0.52l1.05,-2.63l1.74,-0.19l2.59,-1.63l0.76,0.58l0.13,1.42l0.37,0.36l1.23,0.09l-0.52,2.34l0.05,2.46l0.6,0.33l2.43,-1.45l0.77,0.4l1.47,-0.08l0.71,-0.89l1.48,0.14l1.71,1.92l0.25,2.69l1.92,2.15l-0.1,1.92l-0.61,0.87l-2.22,-0.33l-3.5,0.65l-1.6,2.14l0.36,2.6l-1.51,-0.79l-1.85,-0.01l0.28,-1.54l-0.4,-0.47l-2.21,0.02l-0.4,0.37l-0.19,2.77l-0.34,0.94Z" data-code="TH" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M596.66,558.28l-3.18,0.21l-0.05,-1.59l0.4,-1.7l1.28,0.9l2.08,0.42l-0.53,1.76Z" data-code="TF" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M422.7,387.47l-0.1,1.24l1.53,1.53l0.08,1.1l0.5,0.65l-0.11,5.64l0.49,1.47l-1.31,0.35l-1.02,-2.13l-0.18,-1.13l0.53,-2.2l-0.63,-1.16l-0.22,-3.7l-1.01,-1.41l0.07,-0.29l1.37,0.03Z" data-code="TG" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M480.25,365.02l0.12,9.75l-2.1,0.05l-1.14,1.91l-0.69,1.65l0.34,0.73l-0.66,0.92l0.24,0.9l-0.86,1.97l0.45,0.5l0.59,-0.1l0.34,0.65l0.03,1.39l0.9,1.06l-1.45,0.43l-1.27,1.03l-1.83,2.78l-2.16,1.08l-2.31,-0.15l-0.86,0.25l-0.26,0.49l0.17,0.62l-2.11,1.69l-2.85,0.87l-1.09,-0.57l-0.73,0.67l-1.12,0.1l-1.1,-3.13l-1.25,-0.64l-1.22,-1.23l0.3,-0.65l3.01,0.04l0.35,-0.6l-1.3,-2.21l-0.08,-3.33l-0.97,-1.68l0.22,-1.06l-0.38,-0.48l-1.22,-0.04l0.0,-1.27l-0.98,-1.08l0.97,-3.05l3.25,-2.68l0.13,-3.38l0.95,-5.29l0.52,-1.1l-0.1,-0.47l-0.91,-0.8l-0.19,-0.98l-0.8,-0.6l-0.55,-3.77l2.11,-1.24l19.56,10.1Z" data-code="TD" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M483.49,331.4l-0.77,1.19l0.3,1.46l-0.6,1.92l0.73,2.26l0.0,25.02l-2.48,0.01l-0.41,0.87l-19.41,-10.02l-4.41,2.35l-1.37,-1.37l-3.82,-1.13l-1.14,-1.71l-1.98,-1.28l-1.22,0.33l-0.67,-1.15l-0.16,-1.3l-1.29,-1.77l0.88,-1.24l-0.07,-4.54l0.43,-2.38l-0.86,-3.65l1.13,-0.8l0.22,-1.23l-0.21,-1.1l3.49,-2.78l0.28,-2.06l2.44,0.85l1.18,-0.22l1.97,0.47l3.14,1.26l1.37,2.7l5.71,1.77l2.64,1.43l1.62,-0.76l1.29,-1.41l-0.45,-2.46l0.67,-1.22l1.67,-1.29l1.56,-0.37l3.13,0.56l1.09,1.36l3.98,0.83l0.38,0.6Z" data-code="LY" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M550.76,353.19l1.89,-0.42l3.84,0.02l4.77,-4.92l0.19,0.38l0.26,1.67l-0.82,0.01l-0.39,0.35l-0.08,2.12l-0.82,0.64l-0.01,1.0l-0.67,1.03l-0.39,1.45l-7.07,-1.29l-0.71,-2.04Z" data-code="AE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M240.68,386.52l0.53,0.75l-0.02,1.07l-1.07,1.78l0.95,2.01l0.42,0.23l1.4,-0.44l0.56,-1.84l-0.77,-1.17l-0.1,-1.49l2.83,-0.94l0.26,-0.49l-0.28,-0.97l0.3,-0.28l0.66,1.32l1.96,0.26l1.4,1.23l0.08,0.69l0.39,0.35l4.81,-0.23l1.49,1.12l1.92,0.31l1.67,-0.84l0.22,-0.61l3.44,-0.14l-0.18,0.56l0.86,1.2l2.19,0.35l1.68,1.1l0.37,1.87l0.41,0.32l1.56,0.17l-1.66,1.36l-0.22,0.92l0.66,0.98l-1.67,0.54l-0.3,0.4l0.04,0.99l-0.56,0.57l-0.01,0.55l1.85,2.27l-0.66,0.69l-4.47,1.29l-0.72,0.54l-3.69,-0.9l-0.71,0.27l-0.02,0.7l0.91,0.53l-0.08,1.55l0.35,1.58l0.35,0.31l1.66,0.17l-1.3,0.52l-0.48,1.13l-2.68,0.91l-0.6,0.77l-1.57,0.13l-1.17,-1.13l-0.8,-2.52l-1.25,-1.26l1.02,-1.23l-1.29,-2.95l0.18,-1.62l1.0,-2.21l-0.2,-0.49l-1.14,-0.47l-4.02,0.36l-1.82,-2.11l-1.57,-0.33l-2.99,0.23l-1.06,-0.98l0.25,-1.24l-0.2,-1.02l-0.59,-0.69l-0.29,-1.06l-1.08,-0.39l0.78,-2.81l1.9,-2.12Z" data-code="VE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M600.86,316.06l-1.73,1.47l0.72,3.0l-1.1,1.13l-0.02,1.35l-0.49,0.78l-2.15,-0.09l-0.37,0.58l0.8,1.63l-1.4,0.74l-1.06,1.8l0.07,1.81l-0.66,0.56l-0.91,-0.22l-1.91,0.38l-0.48,0.81l-1.88,0.14l-1.49,1.9l-0.08,2.2l-2.91,1.07l-1.64,-0.24l-0.72,0.58l-1.41,-0.31l-2.4,0.41l-3.54,-1.24l1.98,-2.49l-0.21,-1.88l-0.3,-0.34l-1.63,-0.42l-0.19,-1.69l-0.76,-2.19l0.96,-1.48l-0.18,-0.59l-0.75,-0.31l1.48,-5.22l2.12,0.97l2.14,-0.38l0.74,-1.45l1.77,-0.42l1.54,-1.0l0.62,-2.51l1.88,-0.54l0.48,-0.87l0.93,0.61l2.13,0.12l2.55,1.01l1.96,-0.89l0.64,0.46l0.58,-0.13l0.69,-1.23l1.58,-0.09l0.47,-0.64l0.24,-1.17l0.79,-0.81l0.81,0.43l-0.19,0.66l0.71,0.58l-0.09,2.61l1.28,1.05ZM601.25,315.96l1.86,-0.88l1.42,-1.28l3.93,0.22l0.11,0.23l-2.26,0.81l-5.06,0.9Z" data-code="AF" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M530.81,314.51l0.79,0.72l1.26,-0.3l1.46,3.35l1.63,1.01l0.15,1.38l-1.23,1.13l-0.53,2.67l1.73,2.85l3.12,1.72l1.16,2.02l-0.38,1.98l0.39,0.48l0.41,-0.0l0.02,1.16l0.79,1.02l-2.51,-0.11l-1.71,2.58l-4.3,-0.21l-7.02,-5.78l-3.73,-2.06l-2.89,-0.78l-0.86,-3.1l5.46,-3.23l0.95,-3.7l-0.2,-2.14l1.28,-0.77l1.22,-1.86l0.86,-0.39l2.67,0.37Z" data-code="IQ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M384.17,190.14l-0.45,3.88l2.67,3.88l-3.04,4.17l-9.15,4.83l-9.47,-2.42l1.99,-2.05l-0.1,-0.63l-4.53,-2.38l3.43,-0.89l0.3,-0.41l-0.11,-1.75l-0.3,-0.36l-4.81,-1.29l1.43,-3.39l3.37,-0.82l3.74,4.02l0.56,0.03l3.59,-3.17l2.9,1.61l0.45,-0.04l3.95,-3.21l3.58,0.38Z" data-code="IS" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M533.43,314.24l-1.29,-2.38l0.43,-1.06l-0.72,-3.4l1.03,-0.56l0.32,0.9l1.26,1.49l2.06,0.57l1.12,-0.18l2.89,-2.33l0.6,-0.15l0.42,0.54l-0.74,1.37l0.06,0.46l1.56,1.68l0.66,0.05l0.67,1.99l2.55,0.89l1.88,1.61l3.7,0.53l3.91,-0.83l0.47,-0.8l2.17,-0.66l1.65,-1.68l1.49,0.08l1.19,-0.57l1.57,0.26l2.84,1.62l1.88,0.32l2.77,2.69l1.78,0.2l0.18,2.19l-1.69,5.93l0.23,0.49l0.64,0.26l-0.85,1.58l0.81,2.33l0.19,1.83l0.3,0.35l1.63,0.43l0.16,1.43l-2.16,2.5l-0.01,0.51l2.21,3.19l2.35,1.3l0.06,2.26l1.24,0.74l0.12,0.75l-3.31,1.33l-1.08,3.14l-9.68,-1.74l-0.99,-3.18l-1.43,-0.75l-2.18,0.48l-2.47,1.31l-2.82,-0.86l-2.46,-2.11l-2.41,-0.84l-3.42,-6.37l-0.49,-0.2l-1.17,0.41l-1.43,-0.86l-0.51,0.09l-0.64,0.77l-0.97,-1.07l-0.02,-1.4l-0.71,-0.39l0.27,-1.92l-1.29,-2.25l-3.13,-1.73l-1.59,-2.62l0.51,-2.08l1.3,-1.32l-0.19,-1.79l-1.73,-1.17l-1.57,-3.6Z" data-code="IR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M537.0,308.96l-0.27,0.03l-1.24,-2.34l-0.92,0.01l-0.62,-0.73l-0.69,-0.08l-0.96,-0.89l-1.58,-0.69l0.2,-1.3l-0.28,-0.9l2.73,-0.41l1.13,1.15l-0.21,1.0l1.06,0.9l-0.5,0.74l0.08,0.53l2.05,1.37l0.04,1.62Z" data-code="AM" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M470.32,297.19l0.73,0.03l0.93,0.99l0.13,0.95l-0.3,1.27l0.36,1.43l1.02,0.9l-1.82,3.2l-0.18,-0.65l-1.26,-1.0l-0.19,-1.36l0.53,-3.17l-0.55,-1.64l0.61,-0.94Z" data-code="AL" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M461.55,429.93l1.26,3.16l1.94,2.36l2.47,-0.54l1.25,0.32l0.44,-0.18l0.93,-1.92l1.31,-0.08l0.41,-0.44l0.47,-0.0l-0.1,0.41l0.39,0.49l2.65,-0.02l0.03,1.2l0.48,1.02l-0.34,1.52l0.18,1.56l0.83,1.04l-0.13,2.87l0.54,0.39l3.96,-0.41l-0.1,1.81l0.39,1.06l-0.24,1.45l-4.7,-0.03l-0.4,0.39l-0.12,8.23l2.93,3.55l-3.84,0.9l-5.89,-0.36l-1.88,-1.27l-10.47,0.23l-1.3,-1.03l-1.85,-0.16l-2.4,0.78l-0.15,-1.08l0.33,-2.2l1.0,-3.5l1.35,-3.24l2.24,-2.82l0.33,-2.07l-0.13,-1.54l-0.8,-1.08l-1.21,-2.88l0.87,-1.62l-1.27,-4.13l-1.17,-1.53l2.47,-0.63l7.03,0.03ZM451.71,428.77l-0.47,-1.26l1.25,-1.11l0.32,0.3l-0.99,1.03l-0.12,1.04Z" data-code="AO" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M258.05,471.85l1.38,1.83l0.68,-0.08l0.87,-1.93l2.39,0.09l4.94,4.92l2.17,0.51l2.99,1.99l2.47,1.04l0.26,0.88l-2.38,4.1l0.23,0.58l5.39,1.21l2.13,-0.46l2.46,-2.25l0.49,-2.47l0.76,-0.32l0.98,1.25l-0.04,1.9l-3.67,2.62l-2.85,2.79l-3.42,4.08l-1.3,5.37l0.01,2.9l-0.54,0.77l-0.36,3.52l3.15,2.82l-0.31,1.9l1.54,1.59l-0.1,1.23l-2.3,3.86l-3.55,1.64l-4.91,0.65l-2.7,-0.32l-0.43,0.5l0.5,1.83l-0.49,2.34l0.4,1.59l-1.21,0.94l-2.34,0.42l-2.29,-1.15l-1.41,0.93l0.41,3.97l1.69,1.02l1.41,-0.77l0.39,0.92l-2.08,0.99l-2.01,2.14l-0.47,3.69l-0.49,1.57l-2.34,0.12l-2.08,2.01l-0.63,3.07l2.46,2.67l2.21,0.74l-0.73,2.83l-2.84,2.04l-1.73,4.57l-2.18,1.47l-1.15,1.98l0.77,4.43l1.16,1.7l-2.44,-0.66l-5.82,-0.52l-0.91,-2.06l0.05,-2.9l-0.46,-0.4l-1.41,0.21l-0.69,-1.12l-0.2,-3.82l1.89,-1.73l0.79,-2.4l-0.26,-1.97l1.31,-3.13l0.91,-4.79l-0.23,-1.96l1.06,-0.95l-0.27,-1.32l-1.01,-0.76l0.63,-1.12l-0.05,-0.46l-1.05,-1.22l-0.53,-3.58l0.97,-0.92l-0.42,-4.02l1.21,-6.04l1.53,-1.49l-0.75,-3.06l-0.01,-2.68l1.79,-1.91l0.05,-2.76l1.43,-3.06l0.01,-2.77l-0.69,-0.77l-1.09,-4.84l1.48,-2.87l-0.19,-2.93l0.85,-2.48l1.59,-2.58l1.73,-1.72l0.05,-0.51l-0.61,-0.89l0.45,-0.89l-0.07,-4.37l2.71,-1.48l0.86,-2.84l-0.22,-0.73l1.77,-2.07l2.9,0.58ZM256.68,580.89l-1.95,0.18l-1.42,-1.53l-3.82,-0.12l-0.0,-7.37l1.57,3.7l3.26,2.57l3.18,1.01l-0.81,1.56Z" data-code="AR" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M705.79,484.09l0.27,0.04l0.18,-0.47l-0.49,-1.51l0.92,1.16l0.45,0.15l0.28,-0.39l-0.09,-1.61l-1.99,-3.77l1.09,-3.43l-0.24,-1.62l0.34,-0.64l0.38,1.08l0.43,-0.19l0.99,-1.75l1.91,-0.85l1.29,-1.18l1.81,-0.93l0.95,-0.17l0.93,0.27l1.92,-0.97l1.46,-0.29l1.03,-0.82l1.44,0.04l2.78,-0.86l1.36,-1.18l0.71,-1.48l1.41,-1.28l0.3,-2.63l1.27,-1.61l0.78,1.67l0.54,0.19l1.07,-0.52l0.15,-0.59l-0.73,-1.02l0.45,-0.73l0.78,0.4l0.58,-0.3l0.28,-1.84l1.87,-2.17l1.12,-0.39l0.28,-0.58l0.62,0.17l0.5,-0.36l0.03,-0.38l1.87,-0.58l1.65,1.06l1.35,1.49l3.4,0.39l0.44,-0.54l-0.46,-1.24l1.05,-1.82l1.04,-0.62l0.14,-0.55l-0.25,-0.41l0.88,-1.19l1.31,-0.78l1.31,0.27l2.1,-0.48l0.31,-0.4l-0.05,-1.31l-0.92,-0.78l1.48,0.56l1.41,1.08l2.11,0.65l0.81,-0.21l1.4,0.71l1.69,-0.67l0.8,0.19l0.64,-0.33l0.71,0.78l-1.33,1.96l-0.71,0.07l-0.35,0.51l0.24,0.87l-1.52,2.38l0.12,1.06l2.15,1.66l1.97,0.86l3.04,2.4l1.97,0.66l0.54,0.89l2.72,0.87l1.84,-1.12l2.07,-6.05l-0.43,-3.63l0.3,-1.75l0.47,-0.87l-0.32,-0.69l1.09,-3.31l0.46,-0.47l0.4,0.71l0.17,1.52l0.65,0.53l0.15,1.04l0.85,1.22l0.12,2.41l0.9,2.03l0.57,0.18l1.3,-0.79l1.69,1.73l-0.2,1.09l0.53,2.23l0.39,1.32l0.68,0.49l0.6,1.99l-0.2,1.51l0.81,1.79l2.87,1.56l3.14,2.21l-0.12,0.78l1.38,1.62l0.95,2.84l0.58,0.22l0.71,-0.42l0.8,0.92l0.61,0.01l0.46,2.48l4.82,4.87l0.66,2.1l-0.07,3.44l1.15,2.31l-0.13,2.37l-1.1,3.88l0.04,1.73l-0.48,2.02l-1.05,2.56l-1.9,1.57l-1.73,3.77l-2.38,6.57l-0.24,3.08l-1.15,0.88l-2.86,0.16l-2.31,1.3l-2.5,2.46l-1.81,-1.24l-1.29,-0.49l0.31,-1.32l-0.55,-0.46l-1.5,0.69l-2.01,2.12l-7.1,-2.39l-1.49,-1.79l-1.13,-4.06l-1.45,-1.37l-1.84,-0.28l0.58,-1.28l-0.61,-2.26l-0.73,-0.1l-1.14,1.96l-0.94,0.24l0.6,-0.77l0.44,-1.84l0.99,-1.67l-0.2,-2.22l-0.28,-0.35l-0.43,0.13l-2.0,2.51l-1.51,1.0l-0.93,2.15l-1.35,-0.87l-0.01,-1.63l-1.57,-2.18l-1.11,-0.96l0.27,-0.39l-0.13,-0.58l-3.21,-1.8l-1.84,-0.13l-2.55,-1.44l-4.58,0.3l-6.02,2.02l-2.54,-0.14l-2.62,1.5l-2.13,0.67l-1.49,2.78l-3.48,0.33l-2.3,-0.54l-3.48,0.46l-1.6,1.58l-0.81,-0.03l-2.36,1.75l-3.24,-0.11l-3.72,-2.38l0.04,-1.18l1.19,-0.49l0.48,-0.93l0.21,-3.17l-0.28,-1.75l-1.34,-3.02l-0.39,-1.56l0.06,-1.8l-0.96,-1.79l-0.17,-1.0l-1.02,-1.04l-0.29,-2.09l-1.15,-1.85ZM784.91,527.24l2.67,1.14l3.23,-1.06l1.08,0.16l0.16,3.5l-0.85,1.25l-0.18,1.86l-0.27,-0.29l-0.62,0.04l-1.56,2.15l-1.66,-0.2l-1.41,-2.68l-0.37,-2.29l-1.4,-2.82l0.04,-0.96l1.14,0.2Z" data-code="AU" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M462.92,275.34l0.01,2.75l-1.06,0.01l-0.34,0.61l0.39,0.64l-1.07,2.55l-2.0,0.08l-1.34,0.81l-5.27,-1.14l-0.48,-1.1l-0.47,-0.23l-2.47,0.64l-0.42,0.58l-2.45,-0.51l-0.75,-0.44l0.44,-1.16l1.11,0.9l0.63,-0.17l0.25,-0.69l1.91,0.14l1.87,-0.66l0.97,0.09l0.68,0.66l0.65,-0.15l0.25,-0.83l-0.31,-2.16l0.82,-0.52l0.68,-1.35l1.49,0.98l0.52,-0.07l1.34,-1.47l0.61,-0.2l1.79,1.07l1.3,-0.12l0.74,0.46Z" data-code="AT" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M623.36,335.51l-1.27,1.12l-0.97,2.68l0.21,0.5l8.04,4.05l3.43,0.39l1.57,1.44l4.92,0.91l2.18,-0.04l0.38,-0.3l0.29,-1.28l-0.32,-1.72l0.15,-0.92l0.82,-0.32l0.44,2.59l2.28,1.07l1.78,-0.4l4.14,0.1l0.38,-0.36l0.18,-1.73l-0.53,-0.69l1.4,-0.31l2.25,-2.09l2.69,-1.7l1.92,0.64l1.8,-1.03l0.8,1.22l-0.69,0.98l0.26,0.63l2.42,0.38l0.09,0.52l-0.83,0.77l0.13,1.14l-1.53,-0.3l-3.24,1.94l-0.12,1.84l-1.32,2.23l-0.17,1.44l-0.93,1.89l-1.63,-0.52l-0.52,0.37l-0.09,2.72l-0.56,1.13l0.2,0.85l-0.53,0.28l-1.18,-3.85l-1.08,-0.27l-0.38,0.31l-0.24,1.03l-0.66,-0.68l0.55,-1.12l1.21,-0.35l1.15,-2.33l-0.23,-0.56l-1.58,-0.49l-4.33,-0.29l-0.19,-1.63l-0.35,-0.35l-1.11,-0.13l-1.91,-1.16l-0.57,0.17l-0.88,1.89l0.11,0.48l1.38,1.12l-1.11,0.73l-0.69,1.14l0.18,0.55l1.24,0.59l-0.32,1.59l0.85,2.01l0.36,2.08l-0.22,0.62l-4.58,0.54l-0.33,0.42l0.13,1.86l-1.18,1.39l-3.65,1.85l-2.79,3.1l-4.32,3.33l-0.18,1.29l-4.65,1.82l-0.77,2.19l0.64,5.37l-1.06,2.51l-0.01,3.97l-1.24,0.28l-1.14,1.94l0.39,0.85l-1.69,0.53l-1.04,1.84l-0.65,0.47l-2.06,-2.06l-2.1,-6.05l-2.2,-3.67l-1.05,-4.8l-2.29,-3.61l-1.76,-8.34l0.01,-3.18l-0.49,-2.59l-0.55,-0.29l-3.53,1.56l-1.52,-0.28l-2.87,-2.86l0.86,-0.7l0.08,-0.54l-0.74,-1.06l-2.68,-2.13l1.26,-1.38l5.33,0.01l0.39,-0.48l-0.5,-2.37l-1.42,-1.51l-0.27,-2.01l-1.44,-1.26l2.33,-2.5l3.05,0.07l2.62,-2.99l1.6,-2.96l2.4,-2.88l0.06,-2.16l1.98,-1.58l-0.01,-0.64l-1.93,-1.4l-0.82,-1.91l-0.81,-2.4l0.91,-0.97l3.58,0.7l2.93,-0.45l2.32,-2.35l2.31,3.07l-0.24,2.31l0.99,1.68l-0.05,0.92l-1.34,-0.3l-0.48,0.47l0.7,3.26l2.61,2.09l3.02,1.77Z" data-code="IN" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M495.56,426.32l2.8,-3.13l-0.02,-0.82l-0.64,-1.3l0.68,-0.52l0.14,-1.47l-0.76,-1.25l0.31,-0.11l2.26,0.03l-0.51,2.76l0.76,1.3l0.5,0.12l1.05,-0.53l1.19,-0.12l0.61,0.24l1.43,-0.62l0.1,-0.67l-0.71,-0.62l1.57,-1.7l8.65,4.86l0.32,1.53l3.34,2.33l-1.05,2.81l0.13,1.61l1.63,1.12l-0.6,1.77l-0.01,2.33l1.89,4.05l0.57,0.44l-1.47,1.09l-2.61,0.95l-1.43,-0.04l-1.06,0.77l-2.29,0.36l-2.87,-0.69l-0.83,0.07l-0.64,-0.75l-0.31,-2.8l-1.32,-1.36l-3.25,-0.77l-3.96,-1.59l-1.18,-2.42l-0.32,-1.75l-1.76,-1.49l0.42,-1.05l-0.44,-0.89l0.08,-0.96l-0.46,-0.58l0.06,-0.56Z" data-code="TZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M539.27,301.57l1.33,0.36l0.44,-0.21l0.4,-0.78l1.11,-1.01l2.3,3.71l1.5,0.55l-1.32,0.17l-0.34,0.33l-0.81,3.49l-0.98,1.01l0.05,1.26l-1.28,-1.27l0.73,-1.34l-0.78,-1.39l-1.51,0.17l-2.32,1.87l-0.04,-1.43l-2.05,-1.48l0.5,-0.74l-0.07,-0.53l-1.07,-0.91l0.33,-0.54l-0.14,-0.55l-1.17,-1.02l1.91,0.73l1.71,0.07l0.37,-0.88l-1.01,-1.48l0.2,-0.14l0.4,0.06l1.63,1.92ZM533.76,306.94l0.63,0.52l0.69,-0.0l0.63,1.35l-0.71,-0.18l-1.25,-1.69Z" data-code="AZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M405.07,254.34l0.37,2.67l-1.78,3.47l-4.21,2.28l-2.89,-0.5l1.83,-4.09l-1.24,-4.04l4.62,-4.68l0.33,1.5l-0.5,2.21l0.41,0.49l1.45,-0.06l1.61,0.75Z" data-code="IE" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M756.47,417.79l0.69,4.01l2.79,1.78l0.51,-0.1l2.04,-2.59l2.71,-1.43l2.05,-0.0l3.9,1.73l2.46,0.45l0.08,15.16l-1.75,-1.55l-2.54,-0.51l-0.88,0.72l-2.32,0.06l0.69,-1.33l1.45,-0.64l0.23,-0.46l-0.65,-2.74l-1.24,-2.22l-5.04,-2.3l-2.09,-0.23l-3.68,-2.27l-0.55,0.13l-0.65,1.07l-0.52,0.12l-0.55,-1.89l-1.21,-0.78l1.84,-0.62l1.72,0.05l0.39,-0.52l-0.21,-0.66l-0.38,-0.28l-3.45,-0.0l-1.13,-1.48l-2.1,-0.43l-0.52,-0.61l2.69,-0.48l1.28,-0.78l3.66,0.94l0.3,0.71ZM757.91,430.25l-0.62,0.82l-0.1,-0.8l0.59,-1.12l0.13,1.1ZM747.38,422.88l0.34,0.72l-1.22,-0.57l-4.68,-0.1l0.27,-0.62l2.78,-0.09l2.52,0.67ZM741.05,415.14l-0.67,-2.88l0.64,-2.01l0.41,0.86l1.21,0.18l0.16,0.7l-0.1,1.68l-0.84,-0.16l-0.46,0.3l-0.34,1.34ZM739.05,423.4l-0.5,0.45l-1.34,-0.36l-0.17,-0.37l1.73,-0.08l0.27,0.36ZM721.45,414.41l-0.19,1.97l2.24,2.23l0.54,0.02l1.27,-1.07l2.75,-0.5l-0.9,1.21l-2.11,0.93l-0.16,0.6l2.22,3.01l-0.3,1.07l1.36,1.75l-2.26,0.85l-0.28,-0.31l0.12,-1.19l-1.64,-1.34l0.17,-2.24l-0.56,-0.39l-1.67,0.76l-0.23,0.39l0.3,6.18l-1.1,0.25l-0.69,-0.47l0.64,-2.21l-0.39,-2.42l-0.39,-0.34l-0.8,-0.01l-0.58,-1.29l0.98,-1.6l0.35,-1.96l1.32,-3.87ZM728.59,426.17l0.38,0.5l-0.02,1.28l-0.88,0.49l-0.53,-0.48l1.04,-1.79ZM729.04,416.88l0.27,-0.05l-0.02,0.13l-0.24,-0.08ZM721.68,413.95l0.16,-0.32l1.89,-1.65l1.83,0.68l3.16,0.35l2.94,-0.1l2.39,-1.66l-1.73,2.13l-1.66,0.43l-2.41,-0.48l-4.17,0.13l-2.39,0.51ZM730.55,440.42l1.11,-1.94l2.02,-0.82l0.08,0.62l-1.45,1.68l-1.77,0.46ZM728.12,435.8l-0.1,0.38l-3.46,0.66l-2.91,-0.27l-0.0,-0.25l1.54,-0.41l1.66,0.73l1.67,-0.19l1.61,-0.65ZM722.9,440.18l-0.64,0.03l-2.26,-1.21l1.12,-0.24l1.78,1.42ZM716.26,435.69l0.88,0.51l1.28,-0.17l0.2,0.35l-4.65,0.73l0.4,-0.67l1.15,-0.02l0.75,-0.74ZM711.66,423.74l-0.38,-0.16l-2.54,1.01l-1.12,-1.44l-1.69,-0.13l-1.16,-0.75l-3.04,0.77l-1.1,-1.15l-3.31,-0.11l-0.35,-3.05l-1.35,-0.95l-1.11,-1.98l-0.33,-2.06l0.27,-2.14l0.9,-1.01l0.37,1.15l2.09,1.49l1.53,-0.48l1.82,0.08l1.38,-1.19l1.0,-0.18l2.28,0.67l2.26,-0.53l1.52,-3.64l1.01,-0.99l0.78,-2.57l4.1,0.31l-1.11,1.77l0.02,0.46l1.7,2.2l-0.23,1.39l2.07,1.71l-2.33,0.42l-0.88,1.9l0.1,2.05l-2.4,1.9l-0.06,2.45l-0.7,2.79ZM692.58,431.94l0.35,0.26l4.8,0.25l0.78,-0.97l4.17,1.09l1.13,1.69l3.69,0.45l2.14,1.05l-1.8,0.61l-2.77,-1.0l-4.8,-0.12l-5.24,-1.42l-1.84,-0.25l-1.11,0.3l-4.26,-0.97l-0.7,-1.14l-1.59,-0.13l1.18,-1.66l2.74,0.13l2.87,1.13l0.26,0.69ZM685.53,429.08l-2.22,0.04l-2.06,-2.04l-3.15,-2.01l-2.93,-3.52l-3.11,-5.33l-2.2,-2.12l-1.64,-4.06l-2.32,-1.69l-1.27,-2.07l-1.96,-1.5l-2.51,-2.65l-0.11,-0.66l4.81,0.53l2.15,2.38l3.31,2.74l2.35,2.66l2.7,0.17l1.95,1.59l1.54,2.17l1.59,0.95l-0.84,1.71l0.15,0.52l1.44,0.87l0.79,0.1l0.4,1.58l0.87,1.4l1.96,0.39l1.0,1.31l-0.6,3.01l-0.09,3.51Z" data-code="ID" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M493.77,283.66l1.85,0.21l0.66,-0.27l0.1,-0.68l-0.25,-0.87l-0.8,-0.85l-0.34,-1.43l-0.87,-0.71l0.01,-1.37l-1.13,-1.01l-1.16,-0.23l-2.07,-1.18l-1.66,0.37l-0.67,0.55l-0.9,-0.0l-0.86,0.91l-1.69,0.33l-0.76,0.47l-1.18,-0.82l-3.05,-0.42l-0.9,0.48l-0.22,-0.62l-1.16,-0.85l0.86,-1.88l0.25,0.1l0.53,-0.51l-0.57,-1.53l2.08,-2.96l1.38,-0.69l0.26,-1.34l-1.09,-3.02l0.9,-0.18l1.27,-1.02l1.78,-0.08l2.45,0.31l2.87,0.98l1.87,0.08l0.85,0.53l1.06,-0.47l0.78,0.77l2.17,-0.18l0.91,0.35l0.54,-0.34l0.15,-1.9l0.58,-0.67l2.82,-0.06l0.87,-0.86l3.0,-0.22l1.29,1.86l-0.53,0.89l0.21,1.25l0.36,0.33l1.78,0.17l0.93,2.49l3.18,1.38l1.95,-0.52l1.69,1.77l1.39,-0.04l3.36,1.15l0.02,0.75l-0.97,1.91l0.49,2.26l-0.28,0.89l-2.37,0.33l-1.29,1.04l-0.21,1.6l-1.85,0.32l-1.58,1.12l-2.41,0.24l-2.16,1.36l-0.19,0.36l0.32,2.54l1.49,0.93l1.92,-0.16l-0.18,0.47l-2.65,0.61l-3.21,1.92l-0.89,-0.46l0.44,-1.33l-0.24,-0.5l-2.27,-0.86l2.41,-1.32l0.12,-0.62l-0.93,-0.95l-3.62,-0.85l-0.14,-1.08l-0.47,-0.34l-2.32,0.45l-2.91,4.52l-1.19,-0.45l-0.98,0.48l-0.36,-0.21l1.35,-2.93Z" data-code="UA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M549.32,350.8l-0.76,-0.24l-0.14,-1.72l0.84,-1.35l0.47,0.54l0.04,1.41l-0.45,1.36Z" data-code="QA" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                            <path d="M508.58,448.77l-0.34,-2.6l0.51,-2.07l3.55,0.64l2.51,-0.38l1.02,-0.76l1.49,0.01l2.74,-0.99l1.66,-1.21l0.51,9.32l0.41,1.25l-0.68,1.69l-0.93,1.74l-1.5,1.52l-5.16,2.32l-2.78,2.78l-1.02,0.54l-1.71,1.84l-0.98,0.59l-0.35,2.45l1.16,1.99l0.49,2.24l0.43,0.31l-0.06,2.14l-0.39,1.21l0.5,0.73l-0.25,0.78l-0.92,0.86l-5.13,2.47l-1.22,1.39l0.21,1.17l0.59,0.4l-0.11,0.78l-1.22,-0.02l-0.73,-3.1l0.42,-3.19l-1.78,-5.56l2.49,-2.89l0.69,-1.93l0.44,-0.43l0.28,-1.57l-0.39,-0.94l0.59,-3.72l-0.01,-3.32l-1.48,-1.17l-1.2,-0.23l-1.74,-1.18l-1.92,0.0l-0.3,-2.12l7.06,-1.98l1.28,1.1l0.89,-0.1l0.67,0.45l0.1,0.75l-0.51,1.3l0.19,1.83l1.75,1.86l0.65,-0.13l0.71,-1.68l1.17,-0.86l-0.26,-3.51l-1.05,-1.87l-1.04,-0.95Z" data-code="MZ" fill="#f3f6f9" fill-opacity="1" stroke="#9599ad" stroke-width="0.25" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                                        </g>
                                        <g id="jvm-regions-labels-group"></g>
                                        <g id="jvm-lines-group">
                                            <line x1="42.445053619958244" y1="114.50394645162207" x2="129.96388625564276" y2="127.56940129021272" data-index="0" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                            <line x1="187.68598857687311" y1="108.07497241778486" x2="129.96388625564276" y2="127.56940129021272" data-index="1" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                            <line x1="144.80665562604923" y1="89.41536391204622" x2="129.96388625564276" y2="127.56940129021272" data-index="2" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                            <line x1="79.84438751930159" y1="171.2100941650308" x2="129.96388625564276" y2="127.56940129021272" data-index="3" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                            <line x1="49.75284147498295" y1="133.843450355812" x2="129.96388625564276" y2="127.56940129021272" data-index="4" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                            <line x1="207.4607021163197" y1="143.36402223304077" x2="129.96388625564276" y2="127.56940129021272" data-index="5" stroke="#808080" stroke-width="1" stroke-linecap="round" animation="true" stroke-dasharray="6 3 6" class="jvm-line"></line>
                                        </g>
                                        <g id="jvm-markers-group">
                                            <image data-index="0" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/gl.svg" width="23" height="23" x="133.30665562604923" y="77.91536391204622" class="jvm-marker jvm-element"></image>
                                            <image data-index="1" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/ca.svg" width="23" height="23" x="30.945053619958244" y="103.00394645162207" class="jvm-marker jvm-element"></image>
                                            <image data-index="2" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/br.svg" width="23" height="23" x="68.34438751930159" y="159.7100941650308" class="jvm-marker jvm-element"></image>
                                            <image data-index="3" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/rs.svg" width="23" height="23" x="118.46388625564276" y="116.06940129021272" class="jvm-marker jvm-element"></image>
                                            <image data-index="4" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/ru.svg" width="23" height="23" x="176.18598857687311" y="96.57497241778486" class="jvm-marker jvm-element"></image>
                                            <image data-index="5" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/us.svg" width="23" height="23" x="38.25284147498295" y="122.343450355812" class="jvm-marker jvm-element"></image>
                                            <image data-index="6" xlink:href="https://themesbrand.com/toner/html/assets/images/flags/au.svg" width="23" height="23" x="195.9607021163197" y="131.86402223304077" class="jvm-marker jvm-element"></image>
                                        </g>
                                        <g id="jvm-markers-labels-group"><text data-index="0" x="161.30665562604923" y="89.41536391204622" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Greenland</text><text data-index="1" x="58.945053619958244" y="114.50394645162207" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Canada</text><text data-index="2" x="96.34438751930159" y="171.2100941650308" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Brazil</text><text data-index="3" x="146.46388625564276" y="127.56940129021272" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Serbia</text><text data-index="4" x="204.18598857687311" y="108.07497241778486" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Russia</text><text data-index="5" x="66.25284147498294" y="133.843450355812" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">US</text><text data-index="6" x="223.9607021163197" y="143.36402223304077" dy="0.6ex" font-family="Verdana" font-size="12" font-weight="500" cursor="default" fill="#374151" class="jvm-marker jvm-element">Australia</text></g>
                                    </svg></div>

                                <div class="mt-4">
                                    <h4 class="mb-1">65,802 <small class="fw-normal fs-14">Total Sales</small></h4>
                                    <p class="text-muted">Sales from Jan - Dec 2022</p>
                                </div>

                                <div class="table-responsive table-card mt-3">
                                    <table class="table table-borderless table-striped align-middle table-sm fs-14 mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/us.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">United States</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    23410
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/gl.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">Greenland</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    19520
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/br.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">Brazil</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    16459
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/au.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">Australia</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    14795
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/ru.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">Russia</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    13479
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <img src="https://themesbrand.com/toner/html/assets/images/flags/ca.svg" alt="" height="18" class="rounded-circle">
                                                        </div>
                                                        <h6 class="fw-medium fs-14 mb-0">Canada</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    12645
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12 mt-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-centered align-middle table-nowrap mb-0" id="customerTable">
                                        <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col" data-sort="orderId">Order ID</th>
                                                <th scope="col" data-sort="product_name">Product Name</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Delivery Date</th>
                                                <th scope="col">Vendor</th>
                                                <th scope="col">Ratings</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010331</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Macbook Pro</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-2.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Terry White</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $658.00
                                                </td>
                                                <td>17 Dec, 2022</td>
                                                <td>26 Jan, 2023</td>
                                                <td>Brazil</td>
                                                <td>4.5 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-info">New</span>
                                                </td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010332</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Borosil Paper Cup</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-4.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Daniel Gonzalez</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $345.00
                                                </td>
                                                <td>02 Jan, 2023</td>
                                                <td>26 Jan, 2023</td>
                                                <td>Namibia</td>
                                                <td>4.8<i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Out Of Delivery</span>
                                                </td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010333</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Stillbird Helmet</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-3.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Stephen Bird</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $80.00
                                                </td>
                                                <td>20 Dec, 2022</td>
                                                <td>29 Dec, 2022</td>
                                                <td>USA</td>
                                                <td>4.3 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-success">Delivered</span>
                                                </td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010334</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Bentwood Chair</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Ashley Silva</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $349.99
                                                </td>
                                                <td>31 Nov, 2022</td>
                                                <td>13 Dec, 2022</td>
                                                <td>Argentina</td>
                                                <td>3.9 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Pending</span>
                                                </td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010335</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Apple Headphone</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-9.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Scott Wilson</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $264.37
                                                </td>
                                                <td>23 Nov, 2022</td>
                                                <td>03 Dec, 2022</td>
                                                <td>Jersey</td>
                                                <td>4.7 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-primary">Shipping</span>
                                                </td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="orders-overview.html" class="fw-medium link-primary">#TB010336</a>
                                                </td>
                                                <td>
                                                    <a href="product-overview.html" class="text-reset">Smart Watch for Man's</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-8.jpg" alt="" class="avatar-xxs rounded-circle photo12">
                                                        </div>
                                                        <div class="flex-grow-1">Heather Jimenez</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $741.98
                                                </td>
                                                <td>02 Nov, 2022</td>
                                                <td>12 Nov, 2022</td>
                                                <td>Spain</td>
                                                <td>4.4 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                <td>
                                                    <span class="badge badge-soft-success">Delivered</span>
                                                </td>
                                            </tr><!-- end tr -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">25</span> Results
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row widget-responsive-fullscreen bottom-box">
                    <div class="col-xxl-3 mb-4 mt-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Customer Satisfaction</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fw-medium">Report<i class="bi bi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Download Report</a>
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="area_chart_spline" data-colors="[&quot;--tb-primary&quot;, &quot;--tb-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 245px;">
                                    <div id="apexcharts7k7ueile" class="apexcharts-canvas apexcharts7k7ueile apexcharts-theme-light" style="width: 247px; height: 244px;"><svg id="SvgjsSvg1672" width="247" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1674" class="apexcharts-inner apexcharts-graphical" transform="translate(4, -5)">
                                                <defs id="SvgjsDefs1673">
                                                    <clipPath id="gridRectMask7k7ueile">
                                                        <rect id="SvgjsRect1679" width="249" height="242" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask7k7ueile"></clipPath>
                                                    <clipPath id="nonForecastMask7k7ueile"></clipPath>
                                                    <clipPath id="gridRectMarkerMask7k7ueile">
                                                        <rect id="SvgjsRect1680" width="291" height="288" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1698" x1="0" y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1699" stop-opacity="0.3" stop-color="rgba(75,147,255,0.3)" offset="0.5"></stop>
                                                        <stop id="SvgjsStop1700" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.7"></stop>
                                                        <stop id="SvgjsStop1701" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1702" stop-opacity="0.3" stop-color="rgba(75,147,255,0.3)" offset="1"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient1721" x1="0" y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop1722" stop-opacity="0.3" stop-color="rgba(6,214,160,0.3)" offset="0.5"></stop>
                                                        <stop id="SvgjsStop1723" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.7"></stop>
                                                        <stop id="SvgjsStop1724" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                        <stop id="SvgjsStop1725" stop-opacity="0.3" stop-color="rgba(6,214,160,0.3)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1678" x1="121" y1="0" x2="121" y2="240" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs apexcharts-active" x="121" y="0" width="1" height="240" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1741" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1742" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1728" class="apexcharts-grid">
                                                    <g id="SvgjsG1729" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                        <line id="SvgjsLine1733" x1="0" y1="40" x2="243" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1734" x1="0" y1="80" x2="243" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1735" x1="0" y1="120" x2="243" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1736" x1="0" y1="160" x2="243" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1737" x1="0" y1="200" x2="243" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1730" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                    <line id="SvgjsLine1740" x1="0" y1="240" x2="243" y2="240" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1739" x1="0" y1="1" x2="0" y2="240" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1681" class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1682" class="apexcharts-series" seriesName="ThisxMonth" data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1703" d="M 0 240 L 0 204C 14.174999999999999 204 26.325000000000003 184 40.5 184C 54.675 184 66.825 208 81 208C 95.175 208 107.325 184 121.5 184C 135.675 184 147.825 132 162 132C 176.175 132 188.325 48 202.5 48C 216.675 48 228.825 16 243 16C 243 16 243 16 243 240M 243 16z" fill="url(#SvgjsLinearGradient1698)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7k7ueile)" pathTo="M 0 240 L 0 204C 14.174999999999999 204 26.325000000000003 184 40.5 184C 54.675 184 66.825 208 81 208C 95.175 208 107.325 184 121.5 184C 135.675 184 147.825 132 162 132C 176.175 132 188.325 48 202.5 48C 216.675 48 228.825 16 243 16C 243 16 243 16 243 240M 243 16z" pathFrom="M -1 400 L -1 400 L 40.5 400 L 81 400 L 121.5 400 L 162 400 L 202.5 400 L 243 400"></path>
                                                        <path id="SvgjsPath1704" d="M 0 204C 14.174999999999999 204 26.325000000000003 184 40.5 184C 54.675 184 66.825 208 81 208C 95.175 208 107.325 184 121.5 184C 135.675 184 147.825 132 162 132C 176.175 132 188.325 48 202.5 48C 216.675 48 228.825 16 243 16" fill="none" fill-opacity="1" stroke="#4b93ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7k7ueile)" pathTo="M 0 204C 14.174999999999999 204 26.325000000000003 184 40.5 184C 54.675 184 66.825 208 81 208C 95.175 208 107.325 184 121.5 184C 135.675 184 147.825 132 162 132C 176.175 132 188.325 48 202.5 48C 216.675 48 228.825 16 243 16" pathFrom="M -1 400 L -1 400 L 40.5 400 L 81 400 L 121.5 400 L 162 400 L 202.5 400 L 243 400" fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1683" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                            <g id="SvgjsG1685" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1686" r="4" cx="0" cy="204" class="apexcharts-marker no-pointer-events wtxrt0ze" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle>
                                                                <circle id="SvgjsCircle1687" r="4" cx="40.5" cy="184" class="apexcharts-marker no-pointer-events wqpche1xd" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1688" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1689" r="4" cx="81" cy="208" class="apexcharts-marker no-pointer-events wq0l9yqxm" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1690" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1691" r="6" cx="121.5" cy="184" class="apexcharts-marker no-pointer-events w5e68nn5tf" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1692" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1693" r="4" cx="162" cy="132" class="apexcharts-marker no-pointer-events we5rhvzn3" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1694" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1695" r="4" cx="202.5" cy="48" class="apexcharts-marker no-pointer-events w45f6vx52" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1696" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1697" r="4" cx="243" cy="16" class="apexcharts-marker no-pointer-events wqox2rhd5i" stroke="#4b93ff" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1705" class="apexcharts-series" seriesName="LastxMonth" data:longestSeries="true" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1726" d="M 0 240 L 0 172C 14.174999999999999 172 26.325000000000003 136 40.5 136C 54.675 136 66.825 104 81 104C 95.175 104 107.325 148 121.5 148C 135.675 148 147.825 180 162 180C 176.175 180 188.325 120 202.5 120C 216.675 120 228.825 60 243 60C 243 60 243 60 243 240M 243 60z" fill="url(#SvgjsLinearGradient1721)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask7k7ueile)" pathTo="M 0 240 L 0 172C 14.174999999999999 172 26.325000000000003 136 40.5 136C 54.675 136 66.825 104 81 104C 95.175 104 107.325 148 121.5 148C 135.675 148 147.825 180 162 180C 176.175 180 188.325 120 202.5 120C 216.675 120 228.825 60 243 60C 243 60 243 60 243 240M 243 60z" pathFrom="M -1 400 L -1 400 L 40.5 400 L 81 400 L 121.5 400 L 162 400 L 202.5 400 L 243 400"></path>
                                                        <path id="SvgjsPath1727" d="M 0 172C 14.174999999999999 172 26.325000000000003 136 40.5 136C 54.675 136 66.825 104 81 104C 95.175 104 107.325 148 121.5 148C 135.675 148 147.825 180 162 180C 176.175 180 188.325 120 202.5 120C 216.675 120 228.825 60 243 60" fill="none" fill-opacity="1" stroke="#06d6a0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask7k7ueile)" pathTo="M 0 172C 14.174999999999999 172 26.325000000000003 136 40.5 136C 54.675 136 66.825 104 81 104C 95.175 104 107.325 148 121.5 148C 135.675 148 147.825 180 162 180C 176.175 180 188.325 120 202.5 120C 216.675 120 228.825 60 243 60" pathFrom="M -1 400 L -1 400 L 40.5 400 L 81 400 L 121.5 400 L 162 400 L 202.5 400 L 243 400" fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1706" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                                            <g id="SvgjsG1708" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1709" r="4" cx="0" cy="172" class="apexcharts-marker no-pointer-events wztpv7iyp" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle>
                                                                <circle id="SvgjsCircle1710" r="4" cx="40.5" cy="136" class="apexcharts-marker no-pointer-events wu8utgajb" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1711" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1712" r="4" cx="81" cy="104" class="apexcharts-marker no-pointer-events wl3s4fbn" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1713" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1714" r="6" cx="121.5" cy="148" class="apexcharts-marker no-pointer-events w6xmvc7iv" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1715" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1716" r="4" cx="162" cy="180" class="apexcharts-marker no-pointer-events wnepsknp8" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1717" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1718" r="4" cx="202.5" cy="120" class="apexcharts-marker no-pointer-events wz1qrgogv" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                            <g id="SvgjsG1719" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask7k7ueile)">
                                                                <circle id="SvgjsCircle1720" r="4" cx="243" cy="60" class="apexcharts-marker no-pointer-events w5mrm0g8c" stroke="#06d6a0" fill="#ffffff" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1684" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    <g id="SvgjsG1707" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                </g>
                                                <g id="SvgjsG1731" class="apexcharts-grid-borders" style="display: none;">
                                                    <line id="SvgjsLine1732" x1="0" y1="0" x2="243" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1738" x1="0" y1="240" x2="243" y2="240" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1750" x1="0" y1="241" x2="243" y2="241" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                                </g>
                                                <line id="SvgjsLine1753" x1="0" y1="0" x2="243" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1754" x1="0" y1="0" x2="243" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1755" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1756" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1757" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1758" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1759" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1677" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1751" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                                <g id="SvgjsG1752" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1675" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active" style="left: -7.2625px; top: 151px;">
                                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">4</div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(75, 147, 255);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">This Month: </span><span class="apexcharts-tooltip-text-y-value">54</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(6, 214, 160);"></span>
                                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Last Month: </span><span class="apexcharts-tooltip-text-y-value">63</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light apexcharts-active" style="left: 110.863px; top: 237px;">
                                            <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 6.4px;">4</div>
                                        </div>
                                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border rounded text-center p-3">
                                    <div class="row">
                                        <div class="col-xl-6 border-end">
                                            <h6 class="fs-6">$10,532</h6>
                                            <p class="text-muted mb-0 text-frame"><i class="bi bi-app-indicator text-primary align-middle me-1"></i> This Month</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <h6 class="fs-17">$9,532</h6>
                                            <p class="text-muted mb-0 text-frame"><i class="bi bi-app-indicator text-success align-middle me-1"></i> Last Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div>
                    <div class="col-xxl-9 mt-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Stock Report</h4>
                                <div class="flex-shrink-0">
                                    <a href="#" class="btn bg-primary-subtle text-primary btn-sm">
                                        <i class="bi bi-file-earmark-text align-middle"></i> Generate Report
                                    </a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col">Product ID</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Updated Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Stock Status</th>
                                                <th scope="col">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#00541</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-1.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">Rockerz Ear Bluetooth Headphones</a></div>
                                                    </div>
                                                </td>
                                                <td>16 Aug, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$658.00</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">In Stock</span>
                                                </td>
                                                <td>15 PCS</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#07484</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-5.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">United Colors Of Benetton</a></div>
                                                    </div>
                                                </td>
                                                <td>05 Sep, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$145.00</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Low Stock</span>
                                                </td>
                                                <td>05 PCS</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#01641</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-4.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">Striped Baseball Cap</a></div>
                                                    </div>
                                                </td>
                                                <td>28 Sep, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$215.00</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Out of Stock</span>
                                                </td>
                                                <td>0 PCS</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#00065</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-3.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">350 ml Glass Grocery Container</a></div>
                                                    </div>
                                                </td>
                                                <td>02 Oct, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$79.99</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">In Stock</span>
                                                </td>
                                                <td>37 PCS</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#00156</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-2.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">One Seater Sofa</a></div>
                                                    </div>
                                                </td>
                                                <td>11 Oct, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$264.99</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">In Stock</span>
                                                </td>
                                                <td>23 PCS</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="product-overview.html" class="fw-medium link-primary text-decoration-none">#09102</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="https://themesbrand.com/toner/html/assets/images/products/img-8.png" alt="" class="avatar-xs rounded-circle photo-23">
                                                        </div>
                                                        <div class="flex-grow-1"><a href="product-overview.html" class="text-reset">Men's Running Shoes Active Grip</a></div>
                                                    </div>
                                                </td>
                                                <td>19 Nov, 2022</td>
                                                <td>
                                                    <span class="text-secondary color-1">$264.99</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Low Stock</span>
                                                </td>
                                                <td>23 PCS</td>
                                            </tr><!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h5 class="card-title flex-grow-1 mb-0">Product Delivery</h5>
                                <a href="#" class="flex-shrink-0 text-decoration-none font-1212">View All <i class="bi bi-arrow-right-short align-bottom"></i></a>
                            </div>
                            <div class="card-body px-0">
                                <div data-simplebar="init" style="max-height: 415px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="vstack gap-3 px-3">
                                                            <div class="p-3 border border-dashed rounded-3">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                        <img src="https://themesbrand.com/toner/html/assets/images/products/img-8.png" alt="" class="img-fluid d-block photo-123">
                                                                    </div>
                                                                    <div class="flex-grow-1 font-123">
                                                                        <a href="product-overview.html" class="text-decoration-none">
                                                                            <h6 class=" font1122">Men's Running Shoes Activ... </h6>
                                                                        </a>
                                                                        <p class="mb-0">by: <span class="text-info">Aisha Bradley</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3 border border-dashed rounded-3">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                        <img src="https://themesbrand.com/toner/html/assets/images/products/img-4.png" alt="" class="img-fluid d-block photo-123">
                                                                    </div>
                                                                    <div class="flex-grow-1 font-123">
                                                                        <a href="product-overview.html" class="text-decoration-none">
                                                                            <h6 class=" font1122">Striped Baseball Cap</h6>
                                                                        </a>
                                                                        <p class="mb-0">by: <span class="text-info">Edgar Bailey</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3 border border-dashed rounded-3">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                        <img src="https://themesbrand.com/toner/html/assets/images/products/img-3.png" alt="" class="img-fluid d-block photo-123">
                                                                    </div>
                                                                    <div class="flex-grow-1 font-123">
                                                                        <a href="product-overview.html" class="text-decoration-none">
                                                                            <h6 class=" font1122">350 ml Glass Groce...</h6>
                                                                        </a>
                                                                        <p class="mb-0">by: <span class="text-info">Adam Small</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3 border border-dashed rounded-3">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                        <img src="https://themesbrand.com/toner/html/assets/images/products/img-6.png" alt="" class="img-fluid d-block photo-123">
                                                                    </div>
                                                                    <div class="flex-grow-1 font-123">
                                                                        <a href="product-overview.html" class="text-decoration-none">
                                                                            <h6 class=" font1122">Monte Carlo Sweaters</h6>
                                                                        </a>
                                                                        <p class="mb-0">by: <span class="text-info">Evie Merrill</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3 border border-dashed rounded-3">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                        <img src="https://themesbrand.com/toner/html/assets/images/products/img-9.png" alt="" class="img-fluid d-block photo-123">
                                                                    </div>
                                                                    <div class="flex-grow-1 font-123">
                                                                        <a href="product-overview.html" class="text-decoration-none">
                                                                            <h6 class=" font1122">Ceramic Coffee Mug</h6>
                                                                        </a>
                                                                        <p class="mb-0">by: <span class="text-info">Keaton Larson</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 646px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-height-100 height-123">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Top Categories</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Report<i class="bi bi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Download Report</a>
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="multiple_radialbar" data-colors="[&quot;--tb-primary&quot;, &quot;--tb-danger&quot;, &quot;--tb-success&quot;, &quot;--tb-secondary&quot;]" class="apex-charts" dir="ltr" style="min-height: 191.274px;">
                                    <div id="apexchartsc1y1nxvo" class="apexcharts-canvas apexchartsc1y1nxvo apexcharts-theme-light" style="width: 247px; height: 191.274px;"><svg id="SvgjsSvg1640" width="247" height="191.2741241455078" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1642" class="apexcharts-inner apexcharts-graphical" transform="translate(-13.5, 0)">
                                                <defs id="SvgjsDefs1641">
                                                    <clipPath id="gridRectMaskc1y1nxvo">
                                                        <rect id="SvgjsRect1644" width="282" height="300" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskc1y1nxvo"></clipPath>
                                                    <clipPath id="nonForecastMaskc1y1nxvo"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskc1y1nxvo">
                                                        <rect id="SvgjsRect1645" width="280" height="302" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1646" class="apexcharts-radialbar">
                                                    <g id="SvgjsG1647">
                                                        <g id="SvgjsG1648" class="apexcharts-tracks">
                                                            <g id="SvgjsG1649" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                <path id="apexcharts-radialbarTrack-0" d="M 26.16097560975608 138 A 111.83902439024392 111.83902439024392 0 0 1 249.83902439024394 138" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.627512195121953" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 26.16097560975608 138 A 111.83902439024392 111.83902439024392 0 0 1 249.83902439024394 138"></path>
                                                            </g>
                                                            <g id="SvgjsG1651" class="apexcharts-radialbar-track apexcharts-track" rel="2">
                                                                <path id="apexcharts-radialbarTrack-1" d="M 39.02439024390242 138 A 98.97560975609758 98.97560975609758 0 0 1 236.97560975609758 138" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.627512195121953" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 39.02439024390242 138 A 98.97560975609758 98.97560975609758 0 0 1 236.97560975609758 138"></path>
                                                            </g>
                                                            <g id="SvgjsG1653" class="apexcharts-radialbar-track apexcharts-track" rel="3">
                                                                <path id="apexcharts-radialbarTrack-2" d="M 51.887804878048755 138 A 86.11219512195125 86.11219512195125 0 0 1 224.11219512195123 138" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.627512195121953" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 51.887804878048755 138 A 86.11219512195125 86.11219512195125 0 0 1 224.11219512195123 138"></path>
                                                            </g>
                                                            <g id="SvgjsG1655" class="apexcharts-radialbar-track apexcharts-track" rel="4">
                                                                <path id="apexcharts-radialbarTrack-3" d="M 64.75121951219509 138 A 73.24878048780491 73.24878048780491 0 0 1 211.2487804878049 138" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.627512195121953" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 64.75121951219509 138 A 73.24878048780491 73.24878048780491 0 0 1 211.2487804878049 138"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1657">
                                                            <g id="SvgjsG1662" class="apexcharts-series apexcharts-radial-series" seriesName="Fashion" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1663" d="M 26.16097560975608 138 A 111.83902439024392 111.83902439024392 0 0 1 237.64930039056935 87.22614542668981" fill="none" fill-opacity="0.85" stroke="rgba(75,147,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.863414634146343" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="153" data:value="85" index="0" j="0" data:pathOrig="M 26.16097560975608 138 A 111.83902439024392 111.83902439024392 0 0 1 237.64930039056935 87.22614542668981"></path>
                                                            </g>
                                                            <g id="SvgjsG1664" class="apexcharts-series apexcharts-radial-series" seriesName="Electronics" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1665" d="M 39.02439024390242 138 A 98.97560975609758 98.97560975609758 0 0 1 193.34645859229977 55.94550074564975" fill="none" fill-opacity="0.85" stroke="rgba(239,71,111,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.863414634146343" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="124" data:value="69" index="0" j="1" data:pathOrig="M 39.02439024390242 138 A 98.97560975609758 98.97560975609758 0 0 1 193.34645859229977 55.94550074564975"></path>
                                                            </g>
                                                            <g id="SvgjsG1666" class="apexcharts-series apexcharts-radial-series" seriesName="Groceries" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath1667" d="M 51.887804878048755 138 A 86.11219512195125 86.11219512195125 0 0 1 124.52908482265757 52.94798889499526" fill="none" fill-opacity="0.85" stroke="rgba(6,214,160,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.863414634146343" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="81" data:value="45" index="0" j="2" data:pathOrig="M 51.887804878048755 138 A 86.11219512195125 86.11219512195125 0 0 1 124.52908482265757 52.94798889499526"></path>
                                                            </g>
                                                            <g id="SvgjsG1668" class="apexcharts-series apexcharts-radial-series" seriesName="Others" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath1669" d="M 64.75121951219509 138 A 73.24878048780491 73.24878048780491 0 0 1 194.11182125792476 90.91659147778986" fill="none" fill-opacity="0.85" stroke="rgba(124,107,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7.863414634146343" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-3" data:angle="140" data:value="78" index="0" j="3" data:pathOrig="M 64.75121951219509 138 A 73.24878048780491 73.24878048780491 0 0 1 194.11182125792476 90.91659147778986"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle1658" r="64.4350243902439" cx="138" cy="138" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                            <g id="SvgjsG1659" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1660" font-family="Helvetica, Arial, sans-serif" x="138" y="138" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Sales</text><text id="SvgjsText1661" font-family="Helvetica, Arial, sans-serif" x="138" y="170" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">2922</text></g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1670" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1671" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1643" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card text-center border-dashed mb-0">
                                            <div class="card-body">
                                                <h6 class="fs-16">986</h6>
                                                <i class="bi bi-square-fill text-primary me-1 fs-11"></i> Fashion
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-center border-dashed mb-0">
                                            <div class="card-body">
                                                <h6 class="fs-16">874</h6>
                                                <i class="bi bi-square-fill text-danger me-1 fs-11"></i> Electronics
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-center border-dashed mb-0">
                                            <div class="card-body">
                                                <h6 class="fs-16">321</h6>
                                                <i class="bi bi-square-fill text-success me-1 fs-11"></i> Groceries
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-center border-dashed mb-0">
                                            <div class="card-body">
                                                <h6 class="fs-16">741</h6>
                                                <i class="bi bi-square-fill text-secondary me-1 fs-11"></i> Others
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div> <!-- .card-->
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-height-100 height-123">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">New Customers</h4>
                                <a href="users-list.html" class="flex-shrink-0 text-decoration-none font-1212">View All <i class="bi bi-arrow-right-short align-bottom"></i></a>
                            </div><!-- end card header -->

                            <div data-simplebar="init" style="max-height: 445px;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-2.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Tommy Carey</h6>
                                                                <p class="fs-13 text-muted mb-0">02 Jan, 2023</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:careytommy@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-1.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Cassius Brock</h6>
                                                                <p class="fs-13 text-muted mb-0">24 Nov, 2022</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:brock@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-3.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Gabrielle Holden</h6>
                                                                <p class="fs-13 text-muted mb-0">17 Nav, 2022</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:gabrielle@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-5.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Alfred Hurst</h6>
                                                                <p class="fs-13 text-muted mb-0">18 Dec, 2021</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-6.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Kristina Hooper</h6>
                                                                <p class="fs-13 text-muted mb-0">04 Oct, 2022</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:alfredH@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-8.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Jacques Leon</h6>
                                                                <p class="fs-13 text-muted mb-0">02 Jan, 2023</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:jacques@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-7.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Edward Rogers</h6>
                                                                <p class="fs-13 mb-0">25 Nov, 2022</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:edwardro@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-bottom border-bottom-dashed">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="https://themesbrand.com/toner/html/assets/images/users/avatar-10.jpg" alt="" class="rounded dash-avatar photo-00">
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-1">Alina Holland</h6>
                                                                <p class="fs-13 mb-0">11 Jan, 2023</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <a href="mailto:hollandalina@toner.com" class="btn btn-icon btn-sm btn-soft-danger"><i class="ph-envelope"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 585px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card card-height-100 height-123">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Top Products</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Report<i class="bi bi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Download Report</a>
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">90%</span>
                                    <h6 class="mb-2">Fashion &amp; Clothing</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">64%</span>
                                    <h6 class="mb-2">Lighting</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 64%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">77%</span>
                                    <h6 class="mb-2">Footwear</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 77%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">53%</span>
                                    <h6 class="mb-2">Electronics</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 53%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">81%</span>
                                    <h6 class="mb-2">Beauty &amp; Personal Care</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 81%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">96%</span>
                                    <h6 class="mb-2">Books</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 96%"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="badge badge-soft-dark float-end">69%</span>
                                    <h6 class="mb-2">Furniture</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 69%"></div>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge badge-soft-dark float-end">63%</span>
                                    <h6 class="mb-2">Mobile Accessories</h6>
                                    <div class="progress progress-sm bar-23" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-dark bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 63%"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>