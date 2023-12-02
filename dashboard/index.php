<?php include "./../dbconfig.php" ?>
<?php include "./header1.php" ?>
<?php include "sidebar1.php" ?>

<?php

if(isset($_GET["page"])) {

if($_GET['page']=="categories") {
    include "Categories/Categories.php";
}
if($_GET['page']=="subcategories") {
    include "SubCategories/SubCategories.php";
}
if($_GET['page']=="createproduct") {
    include "CreateProduct/CreateProduct.php";
}
if($_GET['page']=="view") {
    include "CreateProduct/view.php";
}
if($_GET['page']=="edit") {
    include "CreateProduct/edit.php";
}
if($_GET['page']=="delete") {
    include "CreateProduct/delete.php";
}
if($_GET['page']=="gridview") {
    include "GridView/GridView.php";
}
if($_GET['page']=="listview") {
    include "ListView/ListView.php";
}
if($_GET['page']=="overview") {
    include "Overview/Overview.php";
}
if($_GET['page']=="orderlistview") {
    include "Orders/OrderListview.php";
}
if($_GET['page']=="orderoverview") {
    include "Orders/OrderOverview.php";
}
if($_GET['page']=="createorder") {
    include "Orders/CreateOrder.php";
}

}
else{
    include "./home.php";
}

?>






<?php include "footer1.php" ?>