<?php
ob_start();
session_start();
require_once("db.php");

$BasicHURL=str_replace('manage.php','',$_SERVER['PHP_SELF']);
$HURL="http://".$_SERVER['HTTP_HOST'].$BasicHURL;



if(empty($_REQUEST['p']))
    $page = "$error.php";
    else if(isset($_REQUEST['p']))
    $page = $_REQUEST['p'].".php";
    else
    $page = "$error.php";

if(file_exists("action/".$page))
    include("action/".$page);
    else
    include("action/error.php"); 
?>