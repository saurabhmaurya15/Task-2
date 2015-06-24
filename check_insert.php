<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "DBclass.php";

$dbconn = new DB();
echo "<center>";
$dbconn->InsertData($_POST['brand'],$_POST['category'],$_POST['code']);
echo "</center>";