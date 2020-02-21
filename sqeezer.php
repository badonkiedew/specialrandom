<?php

require_once ('conn.php');
          
            
		$sql_keepers = "SELECT * FROM keepers where(thumbs!='')&&(wikiurl!='') order by rand() limit 1";
            	$fetch_result = mysqli_query($mysqli, $sql_keepers);
			while ($row = mysqli_fetch_array($fetch_result)) {
				$uniqid = $row['numid']; 
				$visit_url = $row['wikiurl'];
				$img_src = $row['thumbs'];
				
				$trim_url = substr("$visit_url", 30);

				if (file_exists("image/$img_src")) {	

				$img_src = "image/$uniqid";

					echo "file has been thumnailed";
								}

				else {

				//translate featured image url
				//$img_url = exec("curl -s $visit_url | grep og:image");
				//$trim_img_front = substr("$img_url", 35);
				//$img_src = rtrim($trim_img_front, '"/>');

				
					
				//curl and generate image 
				$get_img = exec("curl -o $uniqid $img_src");
					
				$size = getimagesize($uniqid);

				switch ($size['mime']) {
				    case "image/gif":
					$src = "$uniqid";
					break;
				    case "image/jpeg":
					$src = imagecreatefromjpeg($uniqid);
					break;
				    case "image/png":
					$src = imagecreatefrompng($uniqid);
					break;
				    case "image/bmp":
					$src = "$uniqid";
					break;
				}

				list($width,$height)=getimagesize("$uniqid");

			$newwidth1=350;
        		$newheight1=($height/$width)*$newwidth1;
        		$tmp1=imagecreatetruecolor($newwidth1,$newheight1);
	imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);

switch ($size['mime']) {
    case "image/gif":
        imagegif($tmp1,"$uniqid",100);
		rename("$uniqid","image/$uniqid.gif");
		$ex_tension = "$uniqid.gif";
        break;
    case "image/jpeg":
        imagejpeg($tmp1,"$uniqid",100);
		rename("$uniqid","image/$uniqid.jpg");
		$ex_tension = "$uniqid.jpg";
        break;
    case "image/png":
        imagepng($tmp1,"$uniqid",9);
		rename("$uniqid","image/$uniqid.png");
		$ex_tension = "$uniqid.png";
        break;
    case "image/bmp":
        imagebmp($tmp1,"$uniqid",100);
		rename("$uniqid","image/$uniqid.bmp");
		$ex_tension = "$uniqid.bmp";
        break;
}
		
        print "$uniqid";

	$sql_imgup = "Update keepers set thumbs='$ex_tension' where numid=$uniqid";
            	if ($mysqli->query($sql_imgup) === TRUE) {
		
				echo " added"; }
			$mysqli->close();
        		@imagedestroy($src);
        		@imagedestroy($tmp1);

}

}
		

	
				

				//$ex_tension = substr("$img_src", -3);
	
				
				
				//$get_img = exec("curl -s -o $uniqid $img_src");
					
					//$sql_img = "update keepers SET where (numid=$uniqid)";
            
						//$img_result = mysqli_query($mysqli, $sql_img);
						 
?>



