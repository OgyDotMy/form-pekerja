<?php
include("core/db.php");
?>

<?php 
include("parts/header.php");
?>
    <!-- content -->
    <div class="content">
        <div class="container">
            <p>Anda dihalaman Submit Pekerja</p> <br />
            <h3>Input Pekerja</h3>
            <form action="core/doinput.php" method="POST">
                <label for="">Nama Pekerja</label>
                <input type="text" name="nama" id="nama">
                <label for="nopekerja">No Pekerja</label>
                <input type="text" name="nopekerja" id="nopekerja">
                <label for="umur">Umur Pekerja</label>
                <input type="number" name="umur" id="number">
                <label for="alamatpekerja">Alamat Pekerja</label>
                <input type="text" class="textaro" name="alamatpekerja" id="alamatpekerja">
                <br /><br />
                <button type="submit" name="submitdata">Submit</button>
            </form>
        </div>
    </div>
    <!-- end content -->

<?php 
include("parts/footer.php");
?>
