<?php
include("../res/x5engine.php");
$nameList = array("y6p","ygy","dl3","hx2","rsf","zjx","3rd","4ul","mkc","nlk");
$charList = array("X","P","K","H","J","N","5","K","L","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
