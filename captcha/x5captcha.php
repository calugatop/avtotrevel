<?php
include("../res/x5engine.php");
$nameList = array("7g8","lde","vec","fk7","54g","fuu","zhy","ulj","hn5","8sl");
$charList = array("S","F","F","W","F","S","P","W","N","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
