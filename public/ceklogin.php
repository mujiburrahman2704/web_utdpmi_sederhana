<?php
	session_start();
	include '../database/database.php';
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if(empty($user) || empty($pass)){
		echo "hey Anda Gagal Login!!";
        header("location:../public?pesan=SoeKah?");
	}else{
		$sql = mysqli_query($conn,"SELECT * FROM user where username='$user'");
		$cek = mysqli_num_rows($sql);
		if($cek > 0){
			$data = mysqli_fetch_assoc($sql);
			if($data['level']=="admin"){
				$_SESSION['username'] = $user;
				$_SESSION['level'] = "admin"; //isi session
				echo "<script language ='javascript'>
					location.href='data/admin';//
				</script>";
			}else if($data['level']=="user"){
				$_SESSION['username'] = $user;
				$_SESSION['level'] = "dokter"; //isi session
				echo "<script language ='javascript'>
					location.href='data/user';//
				</script>";
			}else{ 
				//echo "username atau Password Salah";
				echo "<script language ='javascript'>
					location.href='confirm.php';
				</script>"; 
			}
		}else{
			//alert('username atau password Salah, Silahkan Daftar');
			//echo "username atau Password Salah";
			echo "<script language ='javascript'>	
				location.href='confirm.php';
			</script>";
		}
	}
?>