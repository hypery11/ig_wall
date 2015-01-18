<?php

if($_GET["id"])
file_put_contents("log.txt",$_SERVER["REMOTE_ADDR"]."\t".date("Y-m-d l H:i:s")."\t".$_GET["id"]."\n",FILE_APPEND);

?>
