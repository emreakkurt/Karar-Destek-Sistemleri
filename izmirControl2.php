<?php
	header('Content-Type:application/json');
	$baglanti=mysqli_connect("localhost","root","","logo_yazilim_sirketi");
	$sorgu2=mysqli_query($baglanti,"SELECT f_sosyal_olanak,f_ulasim_kolaylik,f_hijyen,f_yeme_icme FROM firmalar WHERE f_id='2'");
	
	$data2=array();
	
	foreach($sorgu2 as $row){
		$data2[]=$row;
	}
	
	
	echo json_encode($data2);
	
	mysqli_close($baglanti);

	
?>

