<?php
$xhe_host ="127.0.0.1:7097";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\1.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$tr="<p>"."|������|".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";
$t="<p>".$h1->get_inner_text_by_number(1)."|�-��|".$div->get_by_attribute("class","schema-filter schema-filter_aside", false)->get_inner_text();
$textfile->add_string_to_file($file,$t);
$debug->optimize_memory();
}
$app->shell_execute("",$file);
$app->quit();
?>