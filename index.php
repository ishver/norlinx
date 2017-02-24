<?php
ob_start();
session_start();
require_once("db.php");
$p = 'home';
if (isset($_SERVER['REDIRECT_URL']) && !empty($_SERVER['REDIRECT_URL'])) {
    $p = $_SERVER['REDIRECT_URL'];
    $p = explode('/', $p);
    $p = $p[2];
}
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Norlinx | Master Your Data Center</title>
        <link rel="icon" href="<?php echo $baseURL; ?>images/favicon.ico" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Karma:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseURL; ?>fonts/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $baseURL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseURL; ?>css/owl.carousel.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo $baseURL; ?>css/style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $baseURL; ?>css/fancybox.css">
        <link href="<?php echo $baseURL; ?>css/responsive.css" type="text/css" rel="stylesheet" />
    </head>
    <body>

        <?php
        if ($conn->connect_error || !file_exists("view/".$p.".php")) {
            include("view/404.php"); 
        } else {
            ?>
            <div id="page" class="site">
                <?php include("view/header.php"); ?>
                <?php include("view/" . $p . ".php"); ?>
                <?php include("view/footer.php"); ?>
                <a class="scrollup" href="#colophon" style="display: block;"></a>
            </div>
        <?php } ?>
    </body>
</html>