<?php
	$beverages = array(
		array("Es Teh", "Air", "Gula", "Teh"," S "),
		array("Jus Pisang", "Air", "Pisang", "Blender", "Sendok"),
		array("Jahe Panas", "Temulawak", "Lengkuas", "Cengkeh", "dan bumbu dapur lainnya")
		);

		for ($b = 0; $b < 3;$b++){
			echo "<p>";
			for ($bv = 0; $bv < 5;$bv++){
				echo $beverages[$b][$bv]." ";
			}
			echo "</p>";
		}
?>