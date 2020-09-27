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

$result = mysqli_query($conn, "SELECT name,credit FROM user_id ORDER BY id"); 
?>

<!DOCTYPE HTML>
<HTML>
<head>
	<title>Transfer</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
          body{
              background-image:url('5.jpg');
          }
          .res-tab{
              overflow-x: auto;
          }
          h1{
            font-style: italic;
            text-align: center;
            color: white;
          }
          table{
              border-collapse: collapse;
              position:center;
              margin-left:20%;
              color:white;
              width: 60%;
              left:50%
              font-size: 18px;
              font-style: italic;  
              text-align: center;
          }
          th{
              background-color: black;
              color: white;
          }
          th,td{
              border: 2px solid #ddd;
              padding: 15px;
          }
          @media screen and (max-width:500px) {
            table{
            color:black;
            margin-left:2%;
            }
            body{
                background-image:url('index.jpg');

            }
            h1{
            font-style: italic;
            text-align: center;
            color: black;
          }
           
          }
          </style>
</head>
<body>
    <div class="res-tab">
        <h1>CREDIT MANAGEMENT SYSTEM</h1>
        <table>
            <tbody>
                <tr>
                    <th><center>USER NAME</center></th>
                    <th><center>CREDITS</center></th>
                    <th><center>OPERATION</center></th>
                </tr>
                <tr>
                <?php 
  
                    while($res = mysqli_fetch_array($result)) {     
                echo "<tr>";
                echo "<td style=\"text-align:center\">".$res['name']."</td>";
                echo "<td style=\"text-align:center\">".$res['credit']."</td>";
                echo "<td ><a href=\"transfer_credit.php?ID=$res[name]\">Transfer</a></td>";
    
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="index.html" style="color:black;margin-left:49%;width:20%"><button>BACK</button></a>
</body>   
