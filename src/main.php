<?php

$source = $_POST["source"];
$format = $_POST["format"];
$link = $_POST["link"];
$id = rand(0,1000);


function download($format, $link, $id) {

    shell_exec("yt-dlp ".$format." ".$link." -o './downloads/'".$id."'/'".$id."'.%(ext)s'");

}

#print($id )
#print($link );
#print($format );
#print($source );

switch ($format) {
    case 'Mp3':
        $format = " -f 'ba' -x --audio-format mp3";
        $file = "mp3";
        download($format,$link,$id);
        break;

    case 'Mp4':
        $format = '-f "bestvideo[ext=mp4]+bestaudio[ext=m4a]/best[ext=mp4]/best"';
        $file = "mp4";
        download($format,$link,$id);
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miku-DLP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>


<p> Download complete</p>
<a href="./downloads/<?php echo $id;?>/<?php echo $id;?>.<?php echo $file;?>" download><button>Download</button></a>
</body>
</html>