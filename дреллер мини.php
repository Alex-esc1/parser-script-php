<?php

$xhe_host ="127.0.0.1:7010";

require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\1.txt");

$file = "C:\\1.html";

for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);


$spn ="<p>"." \название\ ".$td->get_inner_text_by_number(17);
$textfile->add_string_to_file($file,$spn)."<p>";

$pn ="<p>"." \телефон\ ".$anchor->get_inner_text_by_number(32)." ".$td->get_inner_text_by_number(29);
$textfile->add_string_to_file($file,$pn)."<p>";

$n ="<p>"." \описание\ ".$div->get_inner_text_by_number(29);
$textfile->add_string_to_file($file,$n)."<p>";

}

$app->shell_execute("",$file);


$app->quit();
?>