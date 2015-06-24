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

include "DBclass.php";

$dbconn = new DB();
echo "<center>";
$dbconn->GetData();
echo "</center>";