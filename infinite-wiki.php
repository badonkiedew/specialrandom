
	<?php
	include("conn.php");
		
	//print "test";
	//echo phpinfo();
		
	    $arr = array(1,2,3,4,5,6,7,8,9,10);
	foreach ($arr as &$columns) {
		
		 $timestamp = time();
	
		
		
		//$columns = $wikiurl;
	$randomurl = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
	    
	$wikiurl = trim($randomurl,"location :");
	print $wikiurl;

	//$artcheck = exec("curl -s $wikiurl | grep noarticletext");
	//$thumbx = exec("curl -s $wikiurl | grep thumbimage");
	//$mapcheck = exec("curl -s $wikiurl | grep geography");			//<table class="infobox geography vcard" style="width:22em;width:23em">
	//if($artcheck) {
	//print "decoy article skipped";
		//		}  


			

					//$dsample = exec('curl -s $wikiurl | grep
	$imgscan = exec("curl -s $wikiurl | grep og:image");

	if($imgscan){
	echo " - image present -";
	$trim_img_front = substr("$imgscan", 35);
	$img_src = rtrim($trim_img_front, '"/>');
	$imgin = mysqli_query($mysqli, "INSERT INTO images VALUES('$timestamp','$img_src')");
	$urlin = mysqli_query($mysqli, "INSERT INTO urls VALUES('$timestamp','$wikiurl')");
	sleep(4);
	} else {
	echo "no images";
		}	
		


	
		
}


	//$urlout = mysqli_query($mysqli, "SELECT * FROM urls where(wikinum ='$timestamp')");
		

	
//include("conn.php");

//	$select_row=mysqli_fetch_array($urlout);
		//		$raw_num = $select_row["wikinum"];
	//			$raw_wiki = $select_row["url"];
		
	//	echo $raw_wiki;

//print " $raw_num - <a class='visiturl' target=new href=$raw_wiki>$raw_wiki</a><button>Keeper!</button><br>";

//print "<iframe scrolling=no align=middle class=decription src=$raw_wiki></iframe>";
		



	// $arr is now filled
	    

	    //unset($value); // break the reference with the last element




	?>
			







