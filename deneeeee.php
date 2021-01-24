
<?php
	$baglanti=new PDO('mysql:host=localhost;dbname=logo_yazilim_sirketi','root','');
	if(isset($_POST)) {
		$email = $_POST['email'];
		$sifre = $_POST['sifre'];
	}

	if($email&&$sifre)
	{
		$sql = "SELECT * from ceo where c_email=? and c_sifre=?";
		$query = $baglanti->prepare($sql);
		$query->bindParam(1, $email);
		$query->bindParam(2,$sifre);
		$query->execute();
		$data_count = $query->rowCount();

		
		if ($data_count>0) {
			header('location:management.php');
		}
		else {
			echo 'Something is wrong :S';
		}
	}

	
	


    
?>