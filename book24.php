<?php


$xhe_host ="127.0.0.1:7012";

// The following code is required to properly run XWeb Human Emulator
require("C:\XWeb\Human Emulator Free\Templates\xweb_human_emulator.php");

$keys = file("C:\\2.txt");
$file = "C:\\1.html";
for($ii=0;$ii<count($keys);$ii++) 
{
	// получить запрос
	$ks = trim($keys[$ii]);
   // перейти
$browser->navigate("https://book24.ru/search/?q=".$ks);

$p = $element->click_by_inner_html("

                        
                              сожалению, п",false);

  if ($p == 1) {

$browser->navigate("https://book24.ru/search/?q=".$ks);

}
else{
$s="<p>".$ks." ".$image->get_src_by_number(1)."</p>";
$debug->optimize_memory()."<br>";
$image->screenshot_by_number("C:\\foto\\".$ks.".jpeg",1);
$debug->optimize_memory()."<br>";
$image->click_by_number(1);
$t="<p>".$ks." ".$h1->get_inner_text_by_number(0)."</p>";
$textfile->add_string_to_file($file,$t)."<br>";
$debug->optimize_memory()."<br>";


$textfile->add_string_to_file($file,$s)."<br>";
$debug->optimize_memory()."<br>";
}

}


// показать
$app->shell_execute("",$file);



// Quit
$app->quit();
?>