<?php

$xhe_host ="127.0.0.1:7062";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);

$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$spn ="<p>".$h1->get_inner_text_by_number(0)." \цена\ ".$span->get_by_attribute("class","price", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";
}

$app->shell_execute("",$file);


$app->quit();
?>