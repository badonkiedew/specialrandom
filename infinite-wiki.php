<?php
	include("conn.php");

	//print "test";
	//echo phpinfo();
		
	    $arr = array(1, 2, 3,);
	foreach ($arr as &$columns) {
		$timestamp = time();
		print $timestamp; 
		sleep(2);
	    $columns = $wikiurl;
	$randomurl = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
	    
	$wikiurl = trim($randomurl,"location :");
	

	$urlin = mysqli_query($mysqli, "INSERT INTO urls VALUES('$timestamp','$wikiurl')");

		



	$urlout = mysqli_query($mysqli, "SELECT * FROM urls where(wikinum ='$timestamp')");
		

	


	$select_row=mysqli_fetch_array($urlout);
				$raw_num = $select_row["wikinum"];
				$raw_wiki = $select_row["url"];
		print "$raw_num";
		print "$raw_wiki";

print "<a class=visiturl href=$raw_wiki><iframe scrolling=no align=middle class=preview src=$raw_wiki></iframe>$raw_wiki</a>";
		
	    

}
