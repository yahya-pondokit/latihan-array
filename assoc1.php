<?php
	$rasa = array("gula"=>"manis", "garam"=>"asin", "nasi goreng"=>"random");
	arsort($rasa);
	foreach ($rasa as $r => $rs) {
		echo "<p>Cita rasa ".$r." adalah ".$rs."</p>";
	}
?>