<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  
  
</head>
<body>
  <img src="R.jpg" alt="Image" >
  <style>
    body img{
      width: 100%;
      height: 780px;
      background-size:100%;
      display: block;
      ali
    }
  </style>
<?php

$name= $_POST['name'];
$color= $_POST['color'];
$Date= $_POST['Date'];
$gender= $_POST['gender'];

// Database connection
$conn = new mysqli('localhost','root','','predictor');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into form(name, color, Date, gender) values(?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $color, $Date, $gender);
  $execval = $stmt->execute();
  $stmt->close();
  $conn->close();
}

?>

</body>
</html>


