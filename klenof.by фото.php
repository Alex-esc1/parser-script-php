<?php

$xhe_host ="127.0.0.1:7108";

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
$div->click_by_number(284);
$t="<p>".$h1->get_inner_text_by_number(0)."|����|".$image->get_src_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t);
}
$app->shell_execute("",$file);
$app->quit();
?>