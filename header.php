<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Calcutta');
$time = localtime(time(),true);


if($time[tm_hour]>=12 && $time[tm_hour]<16)
    echo "good afternoon<br>";
elseif($time[tm_hour]>=16)
    echo "good evening<br>";
else
    echo "good morning!<br>";

