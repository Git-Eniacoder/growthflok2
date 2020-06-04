<?php
date_default_timezone_set("Asia/Calcutta");
$data=$_POST['mail'].",".date("Y-m-d").",".date("h:i:sa");
$fp = fopen('newsletter.csv', 'a+');
fwrite($fp, $data);  
fwrite($fp, "\n");  
fclose($fp); 
	echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank you for subscription');
    window.location.href='index.php';
    </SCRIPT>";
?>