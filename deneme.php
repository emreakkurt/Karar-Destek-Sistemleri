<?php
	header('Content-Type:application/json');
	$baglanti=mysqli_connect("localhost","root","","logo_yazilim_sirketi");
	$sorgu2=mysqli_query($baglanti,"SELECT y_id,y_karar_beceri,y_risk_yonetim,y_iletisim_beceri,y_yazilim_beceri FROM yoneticiler WHERE y_id='1'");
	$data2=array();
	foreach($sorgu2 as $row){
		$data2[]=$row;
	}
	
	echo json_encode($data2);
	mysqli_close($baglanti);

	
?>


