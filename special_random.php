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

    $arr = array(1, 2, 3, 4);
foreach ($arr as &$columns) {
    $wikiroll = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
    $columns = $wikiurl;
}
// $arr is now array(2, 4, 6, 8)
    
foreach ($arr as &$wikiurl) {
    $wikiurl = trim($wikiroll,"location :");
    print "<iframe class=preview src=$wikiurl></iframe>";
}    
    //unset($value); // break the reference with the last element








?>


