<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost"; $usuario = "root"; $contrasenia = "contraseña"; $nombreBaseDatos = "Proyecto_FLP";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);

if (isset($_GET["consultar"])){
    $sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM Tournament");
    if(mysqli_num_rows($sqlEmpleaados) > 0){
        $empleaados = mysqli_fetch_all($sqlEmpleaados,MYSQLI_ASSOC);
        echo json_encode($empleaados);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}

// Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
if (isset($_GET["consultars"])){
    $sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM Tournament WHERE id_tourn=".$_GET["consultars"]);
    if(mysqli_num_rows($sqlEmpleaados) > 0){
        $empleaados = mysqli_fetch_all($sqlEmpleaados,MYSQLI_ASSOC);
        echo json_encode($empleaados);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}

// Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
if (isset($_GET["consultaruser"])){
    $data = json_decode(file_get_contents("php://input"));
    $user_name=$data->user_name;
    $password=$data->password;
    $sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM Users WHERE (user_name = '$user_name' && password = '$password') ");
    if ( !empty($sqlEmpleaados) AND mysqli_num_rows($sqlEmpleaados) > 0){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{   echo json_encode(["success"=>0]); }
}

if(isset($_GET["insertar"])){
    $data = json_decode(file_get_contents("php://input"));
    $name_tourn=$data->name_tourn;
    $game_tourn=$data->game_tourn;
    $carreer_tourn=$data->carreer_tourn;
    $teams_tourn=$data->teams_tourn;
    $private_tourn=$data->private_tourn;
    $rules_t=$data->rules_t;
    $prize_tourn=$data->prize_tourn;
    $enabled_t = 1;
        if(($name_tourn!="")&&($game_tourn!="")){
            
    $sqlEmpleaados = mysqli_query($conexionBD,"INSERT INTO Tournament(name_tourn,game_tourn,carreer_tourn,teams_tourn,private_tourn,prize_tourn,rules_t,enabled_t)
     VALUES('$name_tourn','$game_tourn',' $carreer_tourn','$teams_tourn','$private_tourn','$prize_tourn','$rules_t','$enabled_t') ");
    echo json_encode(["success"=>1]);
        }
    exit();
}

if(isset($_GET["insertaruser"])){
    $data = json_decode(file_get_contents("php://input"));
    $first_name=$data->first_name;
    $user_name=$data->user_name;
    $last_name=$data->last_name;
    $password=$data->password;
    $mail=$data->mail;
        if(($user_name!="")&&($first_name!="")){
            
    $sqlEmpleaados = mysqli_query($conexionBD,"INSERT INTO Users(first_name,last_name,mail,password,user_name)
     VALUES('$first_name','$last_name',' $mail','$password','$user_name') ");
    echo json_encode(["success"=>1]);
        }
    exit();
}

   

//borrar pero se le debe de enviar una clave ( para borrado )
if (isset($_GET["borrar"])){
    $sqlEmpleaados = mysqli_query($conexionBD,"DELETE FROM Tournament WHERE id_tourn=".$_GET["borrar"]);
    if($sqlEmpleaados){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}

?> 










