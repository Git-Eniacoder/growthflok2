<?php
date_default_timezone_set("Asia/Calcutta");
$data=$_POST['name'].",".$_POST['email'].",".$_POST['mobile'].",".$_POST['subject'].",".$_POST['description'].",".date("Y-m-d").",".date("h:i:sa");
$fp = fopen('contact.csv', 'a+');
fwrite($fp, $data);  
fwrite($fp, "\n");  
fclose($fp); 
    echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='contact.php?msg_sig=1';
    </SCRIPT>";
?>