<?php

$link = $_POST["link"];

print($link);

shell_exec("mkdir '".$link."'");
?>