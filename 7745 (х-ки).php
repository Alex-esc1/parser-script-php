<?php

$xhe_host ="127.0.0.1:7101";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\5.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$tr="<p>"." ссылка ".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)." |х-ки| ".$div->get_by_attribute("class","catalog-sbf products-filter", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
$tt="<p>".$h1->get_inner_text_by_number(0)." |х-ки| ".$div->get_by_attribute("class","catalog-sbf products-filter", false)->get_inner_html();
$textfile->add_string_to_file($file,$tt);
}

$app->shell_execute("",$file);


$app->quit();
?>