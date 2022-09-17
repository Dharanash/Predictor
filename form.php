<?php

$name= $_POST['name'];
$color= $_POST['color'];
$Date= $_POST['Date'];
$gender= $_POST['gender'];

if(!empty($name) || !empty($color) || !empty($Date) || !empty($gender)){

    $host='localhost';
    $dbname='project-predictor';

    // Create connection
$conn = new mysqli ($host, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
   
    $INSERT = "INSERT Into form (name , color ,Date, gender )values(?,?,?,?)";
  
  
       //checking username
        
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("stds", $name,$color,$Date,$gender);
        $stmt->execute();
        echo "New record inserted sucessfully";
}
       $stmt->close();
       $conn->close();
      }
   else {
   echo "All field are required";
   die();
}




?>