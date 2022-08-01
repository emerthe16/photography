<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "best_memory";
$conn = mysqli_connect($servername,$user,$pass,$db);
 if($conn)
 {
    echo"connected";
}
 else{
    echo"not connected";
 }

?>