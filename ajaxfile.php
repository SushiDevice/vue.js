<?php

include 'config.php';

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

//fetch all records

if($request == 1){
    $userData = mysqli_query($con, "SELECT * FROM Prueba");

    $response = array();

    while($row = mysqli_fetch_assoc($userData)){
        $response[] = $row;
    }
    echo json_encode($response);
    exit;
}


// Add record
if($request == 2){
    $nombre = $data->username;
    $apellido = $data->apellido;
    
  
    $userData = mysqli_query($con,"SELECT * FROM users WHERE nombre='".$nombre."'");
    if(mysqli_num_rows($userData) == 0){
      mysqli_query($con,"INSERT INTO Prueba(nombre,apellido) VALUES('".$nombre."','".$apellido."')");
      echo "Insert successfully";
    }else{
      echo "Username already exists.";
    }
  
    exit;
  }

?>