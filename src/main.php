<?php

$link = $_POST["link"];

print($link);

shell_exec("yt-dlp -f 'ba' -x --audio-format mp3 '".$link."'");

?>

