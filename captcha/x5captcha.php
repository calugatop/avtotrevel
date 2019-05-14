<?php
include("../res/x5engine.php");
$nameList = array("atv","j7v","y8t","ek8","ymr","4y5","654","6ae","7sr","7rv");
$charList = array("R","Z","7","C","L","D","5","W","A","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
