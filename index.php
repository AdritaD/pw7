</!DOCTYPE html>
<html lang="en">
<head>
  <title>PW7</title>
  <meta name="viewpoint" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>


<?php

$user = 'root';
$password = 'root';
$db = 'pw7';
$host = 'localhost';
$port = 3306;

$conn = mysqli_connect(
   $host, 
   $user, 
   $password,
   $db,
   $port
);

  if (!$conn ) {
      die('Could not connect: ' . mysqli_error());
  }
  
  $sql= 'SELECT * FROM book';
  
  
  $retval = mysqli_query( $conn, $sql );
  $data=array();
  if(! $retval ) {
    die('Could not get data');
  }
  if (mysqli_num_rows($retval)==0) {
      echo "<br>No Data found <br>";
      
    } else {
      while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        array_push($data, $row);

      }
      echo json_encode($data);
    }
?>








</body>
</html>