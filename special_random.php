 

 <link href="img_display.css" rel="stylesheet">  
 
<div style="flex-grid img-column">

<?php
            require_once ('conn.php');
          
            $sqlQuery = "SELECT * FROM images order by rand() limit 26";
            
		$result = mysqli_query($mysqli, $sqlQuery);
        		
	            while ($row = mysqli_fetch_assoc($result)) {
		
				$timestamp = $row['idnumber']; 
				$img_url = $row['imgurl'];
				$urlout = mysqli_query($mysqli, "SELECT * FROM urls where(wikinum ='$timestamp')");
							
				$select_row=mysqli_fetch_array($urlout);
				$raw_num = $select_row["wikinum"];
				$raw_wiki = $select_row["url"];
		$img_delete = "DELETE FROM images where (idnumber ='$timestamp')";
		$entry_delete = "DELETE FROM urls where (wikinum ='$timestamp')";
	$delete_entry = mysqli_query($mysqli, $entry_delete);
	$delete_images = mysqli_query($mysqli, $img_delete);
	          $trim_url = substr("$raw_wiki", 30);
			 ?>

      	

					
	<a title="<?php echo $trim_url; ?>" href="../keepers.php?idn=<?php echo $raw_num; ?>&wikidest=<?php echo $raw_wiki; ?>" class=manufacture valign=center style="background-image:url(<?php echo $img_url; ?>);background-size:contain;border:0px;">
		<div class="maker">
					
					</div>
		
		</a>
		
        
        <?php
	unset($timestamp);
            }

		
        ?>
