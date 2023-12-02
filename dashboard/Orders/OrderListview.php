<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Orders List View</title>
</head>
<style>
    .page-title-box {
        padding: 0 0 20px;
    }

    .page-title-box h4 {
        font-weight: 700;
        font-size: 15px !important;
        text-transform: uppercase;
    }

    .card {
        margin-bottom: 1.5rem;
    }

    .card-animate {
        transition: all .4s;
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
</style>

<body>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">List View</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                    <li class="breadcrumb-item active">List View</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card shadow-sm border-0 overflow-hidden card-animate">
                            <div class="card-body p-4 z-1 position-relative">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-primary-subtle text-primary fs-3 rounded">
                                            <i class="bi bi-cloud-plus-fill"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="200.32">200.32</span>k </h4>
                                        <p class="mb-0 fw-medium text-uppercase fs-14">New Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col">
                        <div class="card shadow-sm border-0 overflow-hidden card-animate">
                            <div class="card-body p-4 z-1 position-relative">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-warning-subtle text-warning fs-3 rounded">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="35.21">35.21</span>k </h4>
                                        <p class="mb-0 fw-medium text-uppercase fs-14">Pending Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col">
                        <div class="card shadow-sm border-0 overflow-hidden card-animate">
                            <div class="card-body p-4 z-1 position-relative">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-success-subtle text-success fs-3 rounded">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="647.32">647.32</span>k </h4>
                                        <p class="mb-0 fw-medium text-uppercase fs-14">Delivered Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col">
                        <div class="card shadow-sm border-0 overflow-hidden card-animate">
                            <div class="card-body p-4 z-1 position-relative">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-3 rounded">
                                            <i class="bi bi-box"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="215.36">215.36</span>k </h4>
                                        <p class="mb-0 fw-medium text-uppercase fs-14">Pickups Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col">
                        <div class="card shadow-sm border-0 overflow-hidden card-animate">
                            <div class="card-body p-4 z-1 position-relative">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-danger-subtle text-danger fs-3 rounded">
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="fs-22 fw-semibold mb-1"><span class="counter-value" data-target="8649">8,649</span></h4>
                                        <p class="mb-0 fw-medium text-uppercase fs-14">Cancelled Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>

                <div class="row" id="orderList">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-2 col-sm-6">
                                        <div>
                                            <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date" readonly="readonly">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-2 col-sm-6">
                                        <div class="dropdown">
                                            <button class="btn w-100 btn-white border border-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                All
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">All</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelled</a></li>
                                                <li><a class="dropdown-item" href="#">Delivered</a></li>
                                                <li><a class="dropdown-item" href="#">Inprogress</a></li>
                                                <li><a class="dropdown-item" href="#">Pending</a></li>
                                                <li><a class="dropdown-item" href="#">Pickups</a></li>
                                                <li><a class="dropdown-item" href="#">Returns</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-2 col-sm-6">
                                        <div class="dropdown">
                                            <button class="btn w-100 btn-white border border-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                All
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Select Payment</a></li>
                                                <li><a class="dropdown-item" href="#">All</a></li>
                                                <li><a class="dropdown-item" href="#">COD</a></li>
                                                <li><a class="dropdown-item" href="#">Mastercard</a></li>
                                                <li><a class="dropdown-item" href="#">Paypal</a></li>
                                                <li><a class="dropdown-item" href="#">Visa</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-2 col-sm-12">
                                        <div class="hstack gap-2">
                                            <button type="button" class="btn btn-primary w-100" onclick="filterData();">
                                                <i class="bi bi-filter me-1"></i> Filter
                                            </button>
                                            <a href="http://localhost/Ecommerce/dashboard/?page=createorder">
                                            <button type="button" class="btn btn-success w-100 add-btn" data-bs-toggle="modal" data-bs-target="#showModal">
                                                Add Order
                                            </button>
                                            </a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--END ROW-->
                            </div>
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <?php

                                $query = "SELECT * FROM orders";
                                $query_run = mysqli_query($db, $query);
                                ?>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle table-nowrap" id="orderTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="sort fw-medium desc" data-sort="id">Order ID</th>
                                                <th class="sort fw-medium" data-sort="customer_name">Customer</th>
                                                <th class="sort fw-medium" data-sort="product_name">Product Name</th>
                                                <th class="sort fw-medium" data-sort="amount">Amount</th>
                                                <th class="sort fw-medium" data-sort="order_date">Order Date</th>
                                                <th class="sort fw-medium" data-sort="delivery_date">Delivery Date</th>
                                                <th class="sort fw-medium" data-sort="payment_method">Payment Method</th>
                                                <th class="sort fw-medium" data-sort="status">Delivery Status</th>
                                                <th class="fw-medium" data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>

                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['cname']; ?></td>
                                                        <td><?php echo $row['pname']; ?></td>
                                                        <td><?php echo $row['amount']; ?></td>
                                                        <td><?php echo $row['orderdate']; ?></td>
                                                        <td><?php echo $row['deliverydate']; ?></td>
                                                        <td><?php echo $row['paymethod']; ?></td>
                                                        <td class="status"><span class="badge bg-success-subtle text-success  text-uppercase"><?php echo $row['status']; ?></span></td>
                                                        <td>
                                                            <div class="dropdown action"> <button class="btn bg-secondary-subtle btn-sm btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots"></i> </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                </ul>
                                                            </div>
                                                    </tr>

                                            <?php
                                                }
                                            } else {
                                                echo "No Record Found";
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center py-4">
                                            <div class="avatar-md mx-auto mb-4">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </div>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                        </div>
                                    </div>
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
        </div>
    </div>


</body>

</html>