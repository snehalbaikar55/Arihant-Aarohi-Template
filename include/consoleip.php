<?php 
$logfile= 'console_ip.txt';
$IP = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("Asia/Kolkata");
/*$logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://dnsstuff.com/tools/city.ch?ip='.$_SERVER['REMOTE_ADDR'].' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a>';*/
$logdetails= date("F j, Y, g:i a") . ': ' . 'Visitor ip='.$_SERVER['REMOTE_ADDR'] . ': '.'Url='.$base_url= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// open the file for reading and writing
$fp = fopen($logfile, "a+");
// write out new log entry to the beginning of the file
fwrite($fp, $logdetails, strlen($logdetails));
file_put_contents('console_ip.txt',"\r\n",FILE_APPEND);
fclose($fp);
$base_url= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$referrer_url = $_SERVER['HTTP_REFERER'];
session_start();
$_SESSION['url'] = $base_url;
$_SESSION['base_url'] = $referrer_url ; ?>