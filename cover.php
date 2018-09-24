<?php
$links = array(

"https://orig00.deviantart.net/b060/f/2010/024/e/b/be_wallpaper_by_madazulu.jpg",
"https://img00.deviantart.net/9fe9/i/2012/035/e/b/wallpaper_by_kevelito-d4onvit.jpg",
"https://img00.deviantart.net/0297/i/2012/061/4/1/wallpaper_by_kevelito-d4rgcqn.jpg",

);

$randomRedirection = $links[array_rand($links)];
header("Location: $randomRedirection");
?>