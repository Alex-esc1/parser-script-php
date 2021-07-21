<?php
$xhe_host ="127.0.0.1:7010";
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");
$keys = file("C:\\2.txt");
$file = "C:\\2.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	$ks = trim($keys[$ii]);
  $browser->navigate($ks);
$tr="<p>"."|ссылка|".$ks."</p>";
$textfile->add_string_to_file($file,$tr)."<br>";

$t="<p>".$h1->get_inner_text_by_number(0)."|�-��|".$div->get_by_attribute("class","sidebar-menu__collapse collapse in is-hidden", false)->get_inner_html();
$textfile->add_string_to_file($file,$t);
}
$app->shell_execute("",$file);
$app->quit();
?>