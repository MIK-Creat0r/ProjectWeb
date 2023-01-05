<?php
    $nama=$_POST['nama'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $ttl=$_POST['ttl'];
    $kelamin=$_POST['kelamin'];
    $pendidikan=$_POST['pendidikan'];
                        
    $a=-1;
    $les=array();
    if($_POST['edukasi']==1){
        array_push($les,"Edukasi");
        $a=$a+1;
    }
    if($_POST['majalah']==1){
        array_push($les,"Majalah");
        $a=$a+1;
    }
    if($_POST['resep']==1){
        array_push($les,"Resep");
        $a=$a+1;
    }
    if($_POST['manga']==1){
        array_push($les,"Manga");
        $a=$a+1;
    }
                        
    echo "
    <table class='table'>
    <tr><td>Nama Pendaftar</td><td>: $nama</td></tr>
    <tr><td>Nomor Telepon</td><td>: $phone</td></tr>
    <tr><td>Email</td><td>: $email</td></tr>
    <tr><td>Tanggal Lahir</td><td>: $ttl</td></tr>
    <tr><td>Jenis Kelamin</td><td>: $kelamin</td></tr>
    <tr><td>Buku yang diminati</td><td>:";
    if($a != -1){
        for($i = 0; $i <= $a; $i++){
            echo " $les[$i],";
        }
    }
        echo "</td></tr>
        <tr><td>Level yang Diambil</td><td>: $pendidikan</td></tr>
        </table>";
?>