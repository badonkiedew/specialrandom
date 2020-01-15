<html>

<head>

<style>
.preview {
    width:600px; height:400px;
    -webkit-transform:scale(.25);
    -ms-transform:scale(.5);
    transform:scale(.5);
    -webkit-transform-origin:0 0; 
    -ms-transform-origin:0 0; 
    transform-origin:0 0; 
    border:4px solid blue;
    margin:0 0 -300px 0;
}
</style>





<?php
//print "test";
//echo phpinfo();
/*
curl -I https://en.wikipedia.org/wiki/Special:Random | grep location
*/
$wikiroll = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');


$wikiurl = trim($wikiroll,"location :");


print "<iframe class=preview src=$wikiurl></iframe>";
?>


