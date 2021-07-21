<?php

$xhe_host ="127.0.0.1:7010";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\3.txt");

$file = "C:\\3.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$tr="<p>"."|ссылка|".$ks."</p>";
$textfile->add_string_to_file($file,$tr);
$t="<p>".$h1->get_inner_text_by_number(0)."|Раздел|".$span->get_inner_text_by_number(8);
$textfile->add_string_to_file($file,$t);
$spn ="<p>".$h1->get_inner_text_by_number(0)."|Адрес|".$span->get_inner_text_by_number(23);
$textfile->add_string_to_file($file,$spn);
$t="<p>".$h1->get_inner_text_by_number(0)."|Сайт|".$span->get_inner_html_by_number(55);
$textfile->add_string_to_file($file,$t);
}

$app->shell_execute("",$file);
$app->quit();
?>