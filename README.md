# special::random

simple curl request to grep random urls from wikipedia.

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location 

pipe into specified text document

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location >> special-random.txt

remove location header

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location | cut -d11-


remove location header/pipe into specified text document

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location | cut -d11- >> special-random.txt


convert to variable (PHP)
<?

$wikiroll = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');

// cut/multi-pipe error workaround

$wikiurl = trim($wikiroll,"location :");
echo "<iframe class=preview src=$wikiurl></iframe>";
?>






