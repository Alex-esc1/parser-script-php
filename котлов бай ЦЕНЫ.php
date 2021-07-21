<?php
$xhe_host ="127.0.0.1:7066";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\2.txt");
$file = "C:\\2.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$spn ="<p>".$ks."\ ".$h1->get_inner_text_by_number(0)." \цена\ ".$div->get_by_attribute("class","pb-cost", false)->get_inner_text()." \ старая цена\ ".$span->get_by_attribute("class","old", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn)."<br>";
}
$app->shell_execute("",$file);
$app->quit();
?>