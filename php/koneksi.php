<?php
define('HOST','localhost');
define('USER','id11444277_root');   //sesuaikan nama user
define('PASS','yanka123');
//sesuaiakan nama password
define('DB','id11444277_servisppk');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
date_default_timezone_set("Asia/Jakarta");
?>
