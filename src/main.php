<?php

$source = $_POST["source"];
$format = $_POST["format"];
$link = $_POST["link"];
$id = rand(0,1000);


function download($format, $link, $id) {

    shell_exec("yt-dlp -f 'ba' '".$format."' '".$link."' -o '/downloads/'".$id."'/%(title)s.%(ext)s'");
    print($format);
    print($link);

}

#print($id )
#print($link );
#print($format );
#print($source );

switch ($format) {
    case 'Mp3':
        $format = "-x --audio-format mp3";
        download($format,$link,$id);
        #print($id);
        break;

    case 'Mp4':
        $format = "-S res,ext:mp4:m4a --recode mp4";
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
    <title>Document</title>
</head>
<body>


<p> Download complete</p>
<a href="/downloads/<?php echo $id;?>/*" download>
  <img src="../php.png" alt="W3Schools" width="104" height="142">
</a>
</body>
</html>