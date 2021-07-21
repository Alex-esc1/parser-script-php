<?php

$xhe_host ="127.0.0.1:7010";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\4.txt");
$file = "C:\\4.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$t="<p>".$ks."|Тайтлы|".$webpage->get_title();
$textfile->add_string_to_file($file,$t);
}
$app->shell_execute("",$file);
$app->quit();
?>