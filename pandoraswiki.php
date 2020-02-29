<?php
?>
<link href="troller.css" rel="stylesheet">
<meta http-equiv="Refresh" content="0; url=../pandoras.php" />
<body bgcolor="black">
<center>
<div class="display_view">
<?php
//include("conn.php");
			
		function animatefreely(){
		$anim_config_num = "1";
		while($anim_config_num <= 13){
				
		$animation_vars = array("left center","right center","center top","center center","center bottom");
		shuffle($animation_vars);
		$config1 = $animation_vars[1];
	
		$config2 = $animation_vars[2];
	
		$config3 = $animation_vars[3];
	
		$config4 = $animation_vars[4];
		print "<style>@-webkit-keyframes image-roller$anim_config_num {0% {background-position:$config1;}50% {background-position:$config2;}75% { background-position:$config3;}100% {background-position:$config4;}}</style>";
		++$anim_config_num;
			}	
		
	}

		//print "test";
	//echo phpinfo();

	
		
	
	

				animatefreely();
	
	
	


		
		$articles = "1";
	 
	while ($articles != "13") {
		
		 $timestamp = time();
			
		//$columns = $wikiurl;
	$randomurl = exec('curl -I https://en.wikipedia.org/wiki/Special:Random | grep location');
	   
	$wikiurl = trim("$randomurl","location : https://en.wikipedia.org/wiki/");
	$url_encode = urlencode("$wikiurl"); 
		
			
				//print $onesyl;
	//$thumbx = exec("curl -s $wikiurl | grep thumbimage");
	//$mapcheck = exec("curl -s $wikiurl | grep geography");	

		//<table class="infobox geography vcard" style="width:22em;width:23em">

	$artcheck = exec("curl -s https://en.wikipedia.org/wiki/$url_encode | grep noarticletext");

	if($artcheck) {
				$endPoint = "https://en.wikipedia.org/w/api.php";
				$params = [
				    "action" => "query",
				    "list" => "prefixsearch",
				    "pssearch" => "$url_encode",
					"pslimit" => "1",
					'limit' => "1",
				    "format" => "json"
				];

				$url = $endPoint . "?" . http_build_query( $params );

				$ch = curl_init( $url );
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
				$output = curl_exec( $ch );
				curl_close( $ch );

				$result = json_decode( $output, true );
				
				    foreach( $result["query"]["prefixsearch"] as $page ) {
    				$updated_url =  "$page[title]";
						$url_encode = str_replace(" ", "_", "$updated_url");
					
				
				}
				
				

/*
<a class="butt_float" target="_blank" href="wikimusic.php?img=<?php echo $img_src; ?>&idn=<?php echo $timestamp; ?>&wikidest=<?php echo $url_encode; ?>">	
				<button type="submit">Listen</button></a>
<a class="butt_float" target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2F<?php echo $wiki_url;?>&display=popup&ref=plugin&src=share_button">
				<button type="submit">Share</button></a>
<a class="butt_float" target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2F<?php echo $wiki_url;?>&display=popup&ref=plugin&src=share_button">
				<button type="submit">Biology</button></a>
		$parturlin = mysqli_query($mysqli, "INSERT INTO parturl VALUES('$timestamp', '$url_encode')");
			echo " - partial article logged -";
			$delay = rand(1,4);
		echo $delay;
		sleep($delay);
				*/			
			} 

		$onesyl = iconv_strlen($wikiurl);
	if($onesyl != "1")
{

$imgscan = exec("curl -s https://en.wikipedia.org/wiki/$url_encode | grep og:image");
		//<a href="/wiki/Music_genre" title="Music genre">Genre</a>

if ($imgscan){
$trim_img_front = substr("$imgscan", 35);
	$img_src = rtrim($trim_img_front, '"/>');
$mystring = "$img_src";

$findmap   = 'map';
$findmapcaps = 'Map';
$findabet = 'cursiv';


if (((strpos($mystring, $findmap) == false) || (strpos($mystring, $findmapcaps) == false) || (strpos($mystring, $findabet) == false))) { 
					

 


			

					//$dsample = exec('curl -s $wikiurl | grep
	//$imgscan = exec("curl -s https://en.wikipedia.org/wiki/$specialchars | grep og:image");

	
	//echo " - image present -" . urldecode($url_encode);
	
	//$imgin = mysqli_query($mysqli, "INSERT INTO images VALUES('$timestamp','$img_src', '$url_encode')");
		
			++$articles;

	$title=urldecode($url_encode);
?>
<a title="<?php echo $title; ?>" target="_blank" href="../read_later.php?img=<?php echo $img_src; ?>&idn=<?php echo $timestamp; ?>&wikidest=https://en.wikipedia.org/wiki/<?php echo $url_encode; ?>" valign="center">
<div class="buttons" style="animation-name: image-roller<?php echo $articles;?>;background-image:url(<?php echo $img_src; ?>);"></div></a>
<?php
/*

<a class="butt_float" target="_blank" href="wikimusic.php?img=<?php echo $img_src; ?>&idn=<?php echo $timestamp; ?>&wikidest=<?php echo $url_encode; ?>">	
				<button type="submit">Listen</button></a>
	<a class="butt_float" target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2F<?php echo $wiki_url;?>&display=popup&ref=plugin&src=share_button">
				<button type="submit">Share</button></a></a></div>

<?php

*/
	$delay = rand(1,4);
	//echo $delay;
	//sleep($delay);
	} elseif (!$imgscan) {
	
		//$urlin = mysqli_query($mysqli, "INSERT INTO urls VALUES('$timestamp','$url_encode')");
	
	//echo " - no images - " . urldecode($url_encode);
	//$delay = rand(1,4);		
	//echo $delay;
	//sleep($delay);
	
		}	
		
		
			
	}
	
		
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
			
</div>
</center>
</body>




