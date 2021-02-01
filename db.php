<?php
    session_start();
    $servidor= "localhost";
    $nombreusuario= "root";
    $password = "";

    $base= "proyectofinal";

    $conexion= new mysqli($servidor, $nombreusuario, $password);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
       }   
    $sql= "CREATE DATABASE proyectofinal";
    if($conexion->query($sql)===true){
        echo "Base de datos creado correctamente...";
    } 
    $conexion= new mysqli($servidor, $nombreusuario, $password, $base);
    
    $tabla= "CREATE TABLE formulario(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre varchar(100) NOT NULL,
        telefono varchar(10) NOT NULL,
        mascota varchar(100) NOT NULL,
        sexo varchar(20) NOT NULL,
        descripcion text NOT NULL,
        fecha date NULL,
        imagen text NULL)";

    if($conexion->query($tabla)===true){
        echo "tabla creada correctamente...";
    } 

    $tabla2= "CREATE TABLE users(
        id INT AUTO_INCREMENT PRIMARY KEY,
        email varchar(100) NOT NULL,
        password varchar(100) NOT NULL)";
        
    if($conexion->query($tabla2)===true){
        echo "tabla2 creada correctamente...";
    } 
    $email= 'admin@espol.edu.ec';
    $admin="INSERT INTO users(email, password) VALUES ('admin@espol.edu.ec','123')";

    $resultado = $conexion->query("SELECT email FROM users WHERE email ='".$email."'");
    
    if($resultado->num_rows <= 0 ){
        if($conexion->query($admin)===true){
            echo "admin creado correctamente...";
        } 

    }
    
    

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'proyectofinal'

    );

    if ($conn->connect_errno) {
        printf("Falló la conexión: %s\n", $conn->connect_error);
        $_SESSION['message'] =  '500';
        $_SESSION['message_type'] = 'error'; 
        exit();
    }
?>