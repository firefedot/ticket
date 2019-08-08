<?php
header( "Content-Type: text/html; charset=utf-8" );
//ini_set('display_errors',1);
error_reporting(E_ALL);
$start = microtime(true);
$login=$_POST['email'];

#$date_today=strftime('%Y-%m-%d %H:%M:%S');
echo "Логин: ".$login.'</br>';
