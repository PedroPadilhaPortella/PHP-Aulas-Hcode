<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen("google.png"/*ou $basename*/, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" alt="">