<?php
            require_once ('conn.php');
			$keeperid = $_GET['idn'];
			$keepurl = $_GET['wikidest'];
			echo "$keeperid $keepurl";
			

		//$idgin = mysqli_query($mysqli, "INSERT INTO keepers VALUES($keeperid,$keepurl)");

		$wikidin = mysqli_query($mysqli, "INSERT INTO keepers VALUES('$keeperid','$keepurl')");

		sleep(1);
		header("Location: $keepurl", true, 301);



			
		

?>
