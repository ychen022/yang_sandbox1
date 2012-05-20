<?php
header('Content-Type:text/html; charset=UTF-8');

ob_start();
include('formsub.html');
$htstr=ob_get_contents();
ob_end_clean();

echo $htstr;
?>
    