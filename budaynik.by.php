<?php

$xhe_host ="127.0.0.1:7088";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory();
$tr="<p>"."|������|".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(0)."|��������|".$div->get_by_attribute("class","detail-text clearfix", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
$spn ="<p>".$h1->get_inner_text_by_number(0)."|����|".$div->get_by_attribute("class","price", false)->get_inner_text()."|�������|".$div->get_by_attribute("class","marks", false)->get_inner_text();
$textfile->add_string_to_file($file,$spn);
$t="<p>".$h1->get_inner_text_by_number(0)."|����|".$image->get_src_by_number(7)."</p>";
$textfile->add_string_to_file($file,$t);
}

$app->shell_execute("",$file);


$app->quit();
?>