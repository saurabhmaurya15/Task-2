<html>
<head><style>

table, td, th {
    border: 1px solid green;
    table-layout: fixed;
    width: 120;
    text-align: center;
}

th {
    background-color: green;
    color: white;
}

    </style></head><body></body></html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include "header.php";
include "DBclass.php";

$dbconn = new DB();
//$dbconn->GetData();
echo "<div align='center'>";
//echo $_POST['brand'].' '.$_POST['category'];
//if(!empty($_POST['brand']) && !empty($_POST['category']))
//{
//    $dbconn->SearchCoupon($_POST['brand'],$_POST['category']);
//}
//elseif(!empty($_POST['brand']) && empty($_POST['category']))
//{
//    $dbconn->SearchCouponBrand($_POST['brand']);
//}
//elseif(empty($_POST['brand']) && !empty($_POST['category'])) 
//{
//    $dbconn->SearchCouponCategory($_POST['category']);
//}
//else
//{
//    echo "Empty Search Query passed!";
//}
$dbconn->SearchCoupon($_POST['brand'], $_POST['category']);

echo "</div>";