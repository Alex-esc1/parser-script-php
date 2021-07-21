<?php
$xhe_host ="127.0.0.1:7010";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\2.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$t="<p>".$ks."|photo|".$image->get_src_by_number(7)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
}
$app->shell_execute("",$file);
$app->quit();
?>