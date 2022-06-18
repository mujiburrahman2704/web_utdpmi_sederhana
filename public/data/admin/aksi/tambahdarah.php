<?php
include '../../../database/database.php';
if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $jumlah=$_POST['jml'];
    date_default_timezone_set("Asia/Jakarta");
    $date = date("Y-m-d h:i:sa");
    if(empty($nik)){
        echo '<script>alert("Data Jangan Kosong");location.href="../";</script>';  
        
    }else{
        $sql1 = mysqli_query($conn,"SELECT * FROM data WHERE nik='$nik'");
        $cek = mysqli_num_rows($sql1);
        $data = mysqli_fetch_array($sql1);
        $gol = $data['golongan_darah'];
        if($cek > 0){
            mysqli_query($conn,"insert into report values('$nik','$date','$jumlah')");
            mysqli_query($conn,"UPDATE darah set jumlah = jumlah+'$jumlah' WHERE gol_darah='$gol'");
            ?>
            <script language="javascript">
            alert("Berhasil Disimpan !");
            location.href = "../";
            </script>
            <?php
        }else{
        
        }
    }
}
?>