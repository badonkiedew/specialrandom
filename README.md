# special::random

working with simple curl request to grep random urls from wikipedia.

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location 

pipe into specified text document

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location >> special-random.txt

remove location header

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location | cut -b 11-


remove location header/pipe into specified text document

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location | cut -b 11- >> special-random.txt








