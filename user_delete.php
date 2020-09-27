<?php

//including the database connection file
    $host="localhost";
    $dbUsername="root";
    $dbpassword="";
    $dbname="test";
/// Create a connection
    $conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);
/// for error occurs in connection
    
    if (mysqli_connect_error()) {
      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    $ID=$_GET['ID'];
    $result=mysqli_query($conn,"DELETE FROM user_id WHERE name='".$ID."' ");
    echo "<script>alert(\"!!!DELETED SUCCESFULLY!!!\");window.location.href=\"view_users1.php\";</script> ";
    ?>