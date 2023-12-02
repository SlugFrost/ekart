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

        .section {
            position: relative;
            padding: 80px 0px;
        }
    </style>
</head>
<?php include "./header.php";
    
    ?>


<body>
    <div class="container-fluid">
        <div class="main-content">
            <div class="page-content">
                <section class="page-wrapper bg-primary">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center d-flex align-items-center justify-content-between">
                                    <h4 class="text-white mb-0">Shopping Cart</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                            <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>

                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger text-center text-capitalize mb-4 fs-14">
                                    save up to <b>30%</b> to <b>40%</b> off omg! just look at the <b>great deals</b>!
                                </div>
                            </div>
                        </div>
                        <div class="row product-list justify-content-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center mb-4">
                                    <h5 class="mb-0 flex-grow-1 fw-medium">There are <span class="fw-bold product-count">4</span> products in your cart</h5>
                                    <div class="flex-shrink-0">
                                        <a href="#!" class="text-decoration-underline link-secondary">Clear Cart</a>
                                    </div>
                                </div>
                                <?php
                                $sql = $db->query("SELECT * FROM `carts` JOIN products ON  products.id = carts.pro_id");
                              $total= 0;
                                while($row = mysqli_fetch_array($sql)) {
                                     $total +=$row['price'];
                                
                                ?>
                                <div class="card product">
                                    <div class="card-body p-4">
                                        <div class="row gy-3">
                                            <div class="col-sm-auto">
                                                <div class="avatar-lg h-100">
                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                        <img src="./dashboard/<?php echo $row['filename']?>" alt="" class="avatar-lg rounded">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <a href="#!">
                                                    <h5 class="fs-16 lh-base mb-1"><?php echo $row['pname']?></h5>
                                                </a>
                                                <br>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly="">
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div class="text-lg-end">
                                                    <p class="text-muted mb-1 fs-12">Item Price:</p>
                                                    <h5 class="fs-16"><span class="product-price">₹<?php echo $row['price']?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center gy-3">
                                            <div class="col-sm">
                                                <div class="d-flex flex-wrap my-n1">
                                                    <div>
                                                        <a href="#!" class="btn btn-sm btn-outline-danger ms-2 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card footer -->
                                </div>
                                <?php } 
                                
                                
                                ?>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="sticky-side-div">
                                    <div class="card overflow-hidden mt-5">
                                        <div class="card-header border-bottom-dashed">
                                            <h5 class="card-title mb-0 fs-15">Order Summary</h5>
                                        </div>
                                        <div class="card-body pt-4">
                                            <div class="table-responsive table-card">
                                                <table class="table table-borderless mb-0 fs-15">
                                                    <tbody>
                                                        <tr class="table-active">
                                                            <th>Total (Rs) :</th>
                                                            <td class="text-end">
                                                                <span class="fw-semibold cart-total">₹<?= $total; ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div>
                                    </div>
                                    <div class="hstack gap-2 justify-content-end">
                                        <a href="http://localhost/NewToner/">
                                        <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
                                        </a>
                                        <button type="button" id="rzp-button1" class="btn btn-hover btn-success">Check Out <i class="ri-logout-box-r-line align-bottom ms-1"></i></button>
                                    </div>
                                </div>
                                <!-- end sticky -->
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_lJvpreguAZvtTJ", // Enter the Key ID generated from the Dashboard
    "amount": <?php echo $total*100; ?>, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
   // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
      //  alert(response.razorpay_payment_id);
       // alert(response.razorpay_order_id);
       // alert(response.razorpay_signature)

       <?php 
        $insertquery = $db->query("INSERT INTO `paygate`(user_id, payment_id,amount) VALUES ('{$_SESSION['user']}','444','{$total}')");
       
       ?>
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
</body>

</html>