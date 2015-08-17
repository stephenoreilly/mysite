<?php
    session_start();
    include("connection.php");
    $sessionid=$_SESSION['id'];
    $diary=mysqli_real_escape_string($link,$_POST['diary']);
    $query="UPDATE users2 SET diary='$diary' WHERE id=$sessionid LIMIT 1";
    
    
    mysqli_query($link,$query);
    
?>