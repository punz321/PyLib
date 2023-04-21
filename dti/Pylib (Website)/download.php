<?php
$file =$_Get['file'].".zip";

header("content-disposition:attachment; filename=".urlencode($file));

$fb =fopen($file,"r");
while(!feof($fb)){
    echo fread($fb,8192);
    flush();
}
fclose($fb);
?>