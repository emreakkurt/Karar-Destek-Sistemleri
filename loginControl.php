<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.all.min.js"></script>
</body>
<?php
	include 'connect.php';

	
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
			echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Hoşgeldiniz.',
                    text: 'Sayın Deniz Haseki',
                }).then(function() {
                    window.location = 'management.php';
                });
                    </script>";
			
		}
		else {
			echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Başarısız.',
                    text: 'Kullanıcı adı veya şifre hatalı!',
                }).then(function() {
                    window.location = 'index.php';
                });
                    </script>";
		}
	}
    
?>

