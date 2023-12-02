<?php
include "./dbconfig.php";

if (isset($_GET['auth']))  {


    if ($_GET['auth'] == "login") {
        include "login.php";
    }
    if ($_GET['auth'] == "loginOTP") {
        include "loginOTP.php";
    }
    if ($_GET['auth'] == "register") {
        include "register.php";
    }
    if ($_GET['auth'] == "registerOTP") {
        include "registerOTP.php";
    }
  
} else if(isset($_GET['page'])){
    if ($_GET['page'] == "cart") {
        include "Cart.php";
    }
}
 else {
    include "./home.php";
}


?>
