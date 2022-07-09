<?php 

    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="datapekerja";

    // create connetion with db server
    $connect=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

    //chech connectioh
    if(!$connect){
        die("connection failed:".mysqli_connect_error());
    }

    // echo "connection succeded";

?>
