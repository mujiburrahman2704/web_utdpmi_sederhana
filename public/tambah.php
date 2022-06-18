<?php
include 'database/database.php';
if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $nama=$_POST['namalengkap'];
    $pass=md5($_POST['password']);
    $nohp=$_POST['nomorhp'];
    $alamat=$_POST['alamat'];
    $tanggallahir=$_POST['tanggallahir'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $golongandarah=$_POST['golongandarah'];
    
    if(empty($nik) || empty($nama) || empty($nohp) || empty($alamat) || empty($tanggallahir) || empty($jeniskelamin) || empty($golongandarah) || empty($pass)){
        echo '<script>alert("Data Jangan Kosong");';
        
    }else{
        $sql1 = mysqli_query($conn,"SELECT * FROM data WHERE nik='$nik'");
        $cek = mysqli_num_rows($sql1);
        if($cek > 0){
            echo '<script>alert("Data NIK sudah ada");location.href="../";</script>';
        }else{
            $sql="insert into data values('$nik','$nama','$nohp','$alamat','$tanggallahir','$jeniskelamin','$golongandarah')";
            mysqli_query($conn,$sql);
            $sql1="insert into user values('','$nik','$pass','user')";
            mysqli_query($conn,$sql1);
            ?>
            <script language="javascript">
                alert("Berhasil Disimpan !");
                location.href="../";
            </script>
            <?php
        }
        
    }
}
?>


