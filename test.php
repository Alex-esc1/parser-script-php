<?php

$xhe_host ="127.0.0.1:7010";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\test.txt");

$file = "C:\\log.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$i = 1;
	while ($i <= 100) { 

	$btn->click_by_number(20);
    $btn->click_by_number(27);

		$i++;
	}


}


$app->quit();
?>