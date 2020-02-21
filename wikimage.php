 

 <link href="img_display.css" rel="stylesheet">  
 
<div class="flex-grid img-column">

<?php
            require_once ('conn.php');





          
            $sqlQuery = "SELECT * FROM images where(arturl!='') order by rand() limit 12";
            
		$result = mysqli_query($mysqli, $sqlQuery);
        		
	            while ($row = mysqli_fetch_assoc($result)) {
		
				$timestamp = $row['idnumber']; 
				$img_url = $row['imgurl'];
				$wiki_url = $row['arturl'];
				
							
	          $trim_url = substr("$wiki_url", 30);


      	
		if (file_exists("image/$timestamp")) {	

				$img_locale = "image/$timestamp";		}

				else {
				$img_locale = "$img_url";			}		

									

	$dated = date( "m/d/Y hia", $timestamp); 

				?>					
	<a title="<?php echo $trim_url; ?> - <?php echo $dated; ?>" href="../grinderskeepers.php?img=<?php echo $img_url; ?>&idn=<?php echo $timestamp; ?>&wikidest=<?php echo $wiki_url; ?>" class=manufacture valign=center style="background-image:url(<?php echo $img_locale; ?>);background-size:contain;border:0px;">
		<div class="topdate">
					<?php 
						
						//print "$dated"; ?>
					
					</div>
		<div class="botart">
		<?php //echo $trim_url; ?>
		</div>
		</a>
		
        
        <?php
		$img_delete = "DELETE FROM images where (idnumber ='$timestamp')";
				$entry_delete = "DELETE FROM urls where (wikinum ='$timestamp')";
				$delete_entry = mysqli_query($mysqli, $entry_delete);
				$delete_images = mysqli_query($mysqli, $img_delete);

	unset($timestamp);
            }

		
        ?>
