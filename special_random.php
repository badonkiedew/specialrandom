<?php
//print "test";
//echo phpinfo();
/*
curl -I https://en.wikipedia.org/wiki/Special:Random | grep location
*/
echo exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
?>
