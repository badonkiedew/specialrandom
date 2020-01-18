		<html>

<head>

</head>
<style>
.preview {
    width: 100%;
    height: 80%;
    -webkit-transform:scale(.45);
    -ms-transform:scale(.8);
    transform:scale(.8);
    -webkit-transform-origin:0 0; 
    -ms-transform-origin:0 0; 
    transform-origin:0 0; 
    border:0px solid blue;
    margin:auto;
color: #9932cc;
    box-shadow: 0px 4px 16px #b9ebff;
    border: 1px solid #9932cc;
    border-radius: 5px;
	z-index: 0;
}
.visiturl {
	z-index: 1;
	}
</style>


				
<body align=center bgcolor=#2a4b8d>


	<?php
	include("conn.php");

		$timestamp = time();
		print $timestamp; 
	    

	    
	    
	//print "test";
	//echo phpinfo();

	    $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
	foreach ($arr as &$columns) {
	    $columns = $wikiurl;
	$randomurl = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
	    $wikiurl = trim($randomurl,"location :");
	$urlin = mysqli_query($mysqli, "INSERT INTO urls VALUES('$timestamp','$wikiurl')");
	$urlout = mysqli_query($mysqli, "SELECT wikinum, url FROM randomwiki where(wikinum ='$timestamp' && url ='$wikiurl')");
		$timestamp = "";
	if ($result = $mysqli->query($urlout)) {
				
			   
	    while ($row = $result->mysqli_fetch_array()) {

				$raw_num = $row[wikinum];
				$raw_wiki = $row[url];
		print $raw_num;
		print $raw_wiki;
			}
			$result->close();
				}
		
	    print "<a class=visiturl href=$wikiurl><iframe scrolling=no align=middle class=preview src=$wikiurl></iframe>$wikiurl</a>";

}
	// $arr is now filled
	    

	    //unset($value); // break the reference with the last element







	?>
				</center>
