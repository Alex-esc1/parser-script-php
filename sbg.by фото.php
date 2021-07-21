<?php

$xhe_host ="127.0.0.1:7010";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");

$file = "C:\\2.html";

for($ii=0;$ii<count($keys);$ii++) 
{

	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$debug->optimize_memory()."<br>";

$spn ="<p>".$span->get_inner_text_by_number(30)." \фото\ ".$image->get_src_by_number(1);
$textfile->add_string_to_file($file,$spn)."<br>";

}

$app->shell_execute("",$file);


$app->quit();
?>