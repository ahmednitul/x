<?php
$links = array(

"https://dl.dropboxusercontent.com/s/ezwlkq2shmxw5dc/174_throb_pov2_720p_4000.mp4?dl=0",

);

$randomRedirection = $links[array_rand($links)];
header("Location: $randomRedirection");
?>