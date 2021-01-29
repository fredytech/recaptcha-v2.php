<?php
$secret=$_POST["secret"];
$ule="https://www.google.com/recaptcha/api/siteverify?secret=.$secret."&response=".$response;
$verify=file_get_contents($ulr);
echo $verify;
?>