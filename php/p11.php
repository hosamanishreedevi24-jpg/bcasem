<?php
$file=fopen("sample.txt","w");

if($file){
fwrite($file,"Welcome to PHP Programming.");
fclose($file);
echo"File created and data written successfully.";
}
else
{
echo"Unable to create the file.";
}
?>