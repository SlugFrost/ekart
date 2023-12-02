<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Overview</title>
</head>
<style>
    .page-title-box {
    padding: 0 0 20px;
}
.card {
    margin-bottom: 1.5rem;
}
.card-title {
    font-size: 16px;
    margin: 0 0 7px 0;
}
td{
    font-size: 14px;
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
    z-index: 2;
}
.order-tracking.completed .is-complete {
    border-color: #06d6a0;
    background-color: #06d6a0;
}
.line12{
    width: 200px;
    height: 2px !important;
    float: right;
    position: absolute;
    left: 125px;
    border: none;
    background-color: #06d6a0;
    opacity: 1;
}
.line13{
    width: 200px;
    float: right;
    position: absolute;
    left: 372px;
    border: none;
    background-color: #06d6a0;
    opacity: 1;
    height: 2px !important;
}
.line14{
    width: 200px;
    float: right;
    position: absolute;
    right: 390px;
    border: none;
    background-color: #06d6a0;
    opacity: 1;
    height: 2px !important;
}
.line15{
    width: 200px;
    float: right;
    position: absolute;
    right: 140px;
    border: none;
    background-color: #c2c2c2;
    opacity: 1;
    height: 2px !important;
}
.invoice{
    background-color: #7c6bff;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    color: white;
    font-weight: 500;
}
.down{
    font-size: 13px;
    margin-right: 3px;
}
.page-title-box h4 {
    font-weight: 700;
    font-size: 15px!important;
    text-transform: uppercase;
}
</style>
<body>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
            <div class="row">
                        <div class="col-12">
                            <div class="page-title-box pb-2 d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Overview</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#!" class=" text-decoration-none text-dark">Orders</a></li>
                                        <li class="breadcrumb-item active">Overview</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 align-items-center">
                        <div class="col">
                            <h6 class="fs-18 mb-0">Order ID: #22830</h6>
                        </div>
                        <div class="col text-end">
                            <button type="button" class="invoice"><i class="bi bi-download down"></i> Invoice</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-success bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Customer Info</h6>
                                            <p class="mb-0 fw-medium">Daniel Gonzalez</p>
                                            <p class="mb-1">gabrielle@toner.com</p>
                                            <p class="mb-0">013-789-9876</p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-success-subtle text-success rounded fs-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-primary bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Shipping Address</h6>
                                            <p class="mb-0">Block A, House 123, Floor 2</p>
                                            <p class="mb-1">Tashkent, Uzbekistan</p>
                                            <p class="mb-0">013-789-9876</p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                                                <i class="bi bi-geo"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-info bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Billing Address</h6>
                                            <p class="mb-0">Block A, House 123, Floor 2</p>
                                            <p class="mb-1">Tashkent, Uzbekistan</p>
                                            <p class="mb-0">013-789-9876</p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-info-subtle text-info rounded fs-3">
                                                <i class="bi bi-file-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card bg-primary overflow-hidden">
                                <div class="card-body position-relative">
                                    <h5 class="card-title fw-medium text-white">Add New Orders</h5>
                                    <p class="text-white">Orders are one of the main building blocks of creating an an ad campaign in Ad Manager.</p>
                                    <a href="http://localhost/Ecommerce/dashboard/?page=createorder" class="link-dark text-decoration-none fw-medium text-white">Create Order <i class="bi bi-arrow-right align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                                $query = "SELECT * FROM orders";
                                $query_run = mysqli_query($db, $query);
                                ?>

                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="card" style=" height:475px;">
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col">Product ID</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col" class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                    <a href="#!" class="fw-medium link-primary"><?php echo $row['id']; ?></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="../assets/images/products/img-1.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><?php echo $row['pname']; ?></div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary"><?php echo $row['amount']; ?></span>
                                                    </td>

                                                    <td>01 PCS</td>
                                                    <td class="text-end"><?php echo $row['amount']; ?></td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td colspan="2" class="p-0">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr class="border-top">
                                                                    <th>Total (USD) :</th>
                                                                    <th class="text-end">$1868.97</th>
                                                                </tr>

                                                                <?php
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }

                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-xxl-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <h5 class="card-title flex-grow-1 mb-0">Logistics Details</h5>
                                            <div class="flex-shrink-0">
                                                <a href="#track-order" class="btn btn-sm btn-primary text-white fw-medium">Track Order</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <i class="bi bi-truck fs-1"></i>
                                                <h5 class="fs-18">Toner Logistics </h5>
                                                <p class="mb-0">ID: MFDS1400457854</p>
                                                <p class="mb-0">Payment Mode : Dedit Card</p>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Payment Detail:</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-borderless align-middle description-table mb-0">
                                                    <tbody><tr>
                                                        <td>Transactions:</td>
                                                        <td><span class="fw-medium">#VLZ124561278124</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Payment Method</td>
                                                        <td><span class="fw-medium">Debit Card</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card Number:</td>
                                                        <td><span class="fw-medium">XXXX XXXX XXXX 3028</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card Holder Name</td>
                                                        <td><span class="fw-medium">Daniel Gonzalez</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Amount</td>
                                                        <td><span class="fw-medium">$1868.98</span></td>
                                                    </tr>
                                                </tbody></table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card" id="track-order">
                                <div class="card-header d-flex  align-items-center gap-3">
                                    <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn bg-primary-subtle btn-sm text-primary fw-medium "><i class="bi bi-geo-alt text-primary fw-medium"></i> Change Address</button>
                                        <button type="button" class="btn bg-danger-subtle btn-sm text-danger"><i class="bi bi-x-octagon-fill text-danger"></i> Cancel Order</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-2 order-tracking text-center completed">
                                        <hr class="line12">
                                            <span class="is-complete d-flex align-items-center justify-content-center"><i class="bi bi-check2 text-white fs-4"></i></span>
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6 class="fs-17">Order Process</h6>
                                                    <p class="text-muted fs-15 mb-0">Mon, 24 Dec, 2022</p>
                                                </div>
                                            </div>
                                            
                                        </div><!--end col-->
                                        <div class="col-lg-2 order-tracking text-center completed">
                                        <hr class="line13">
                                        <span class="is-complete d-flex align-items-center justify-content-center"><i class="bi bi-check2 text-white fs-4"></i></span>
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6 class="fs-17">Packed</h6>
                                                    <p class="text-muted fs-15 mb-0">Thu, 28 Dec, 2022</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-2 order-tracking text-center completed">
                                        <hr class="line14">
                                        <span class="is-complete d-flex align-items-center justify-content-center"><i class="bi bi-check2 text-white fs-4"></i></span>
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6 class="fs-17">Order Shipped</h6>
                                                    <p class="text-muted fs-15 mb-0">Thu, 02 Jan, 2023</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-2 order-tracking text-center completed">
                                            <hr class="line15">
                                        <span class="is-complete bg-secondary-subtle d-flex align-items-center justify-content-center"><i class="bi bi-check2 text-secondary fs-4"></i></span>
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6 class="fs-17">Out Of Delivery</h6>
                                                    <p class="text-muted fs-15 mb-0">Thu, 10 Jan, 2023</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-2 order-tracking text-center completed">
                                        <span class="is-complete bg-secondary-subtle d-flex align-items-center justify-content-center"><i class="bi bi-check2 text-secondary fs-4"></i></span>
                                            <div class="card mt-3 mb-0">
                                                <div class="card-body">
                                                    <h6 class="fs-17">Delivered</h6>
                                                    <p class="text-muted fs-15 mb-0">Thu, 16 Jan, 2023</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end container-->
                    </div>
            </div>
        </div>
    </div>
</body>
</html>