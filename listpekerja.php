<?php
include("core/db.php");
?>

<?php 
include("parts/header.php");
?>
    <!-- content -->
    <div class="content">
        <div class="container">
            <p>Anda dihalaman List Pekerja</p>
            <?php 
                $query="SELECT * from pekerjaform";
                $result=mysqli_query($connect,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo " NAMA : ".$row['nama']."<br>"." NO PEKERJA : ".$row['nopekerja']."<br>"." UMUR : ".$row['umur']."<br>"." ALAMAT ".$row['alamatpekerja']."<hr>";
                    }
                }else{
                    echo "data belum ready";
                }
            ?>
        </div>
    </div>
    <!-- end content -->
<?php 
include("parts/footer.php");
?>
