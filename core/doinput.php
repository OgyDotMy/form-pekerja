<?php 
    
    include("db.php");

    $nama = $_POST['nama'];
    $nopekerja = $_POST['nopekerja'];
    $umur = $_POST['umur']; 
    $alamatpekerja = $_POST['alamatpekerja'];

    $query="INSERT INTO pekerjaform (nama,nopekerja,umur,alamatpekerja) value ('$nama','$nopekerja','$umur','$alamatpekerja')";

    if(mysqli_query($connect,$query)){
        echo "databased saved";
        header("location:../listpekerja.php?status=datasaved");
        exit();
    }else{
        echo "error:".$query."<br>".mysqli_connect_error($connect);
    }
    


?>
