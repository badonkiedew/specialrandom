# special::random

simple curl request to grep random urls from wikipedia.

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location

pipe into specified text document

curl -I https://en.wikipedia.org/wiki/Special:Random | grep location >> special-random.txt

grep $(date +'%Y-%m-%d') Cos-01.csv | cut -d',' -f1`
