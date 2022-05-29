<?php
$cari = $_POST['cari'];
    if($cari == null){
        echo $cari;
        $sql = "select * from data";
    }else{
        $sql = "select * from data where golongandarah='$cari'";
    }
    $data = mysqli_query($conn,$sql);