<?php
    session_start();

    $conn = mysqli_connect(
        'localhost',
        'root',
        '19081995',
        'proyectofinal'

    );

    if ($conn->connect_errno) {
        printf("Falló la conexión: %s\n", $conn->connect_error);
        $_SESSION['message'] =  '500';
        $_SESSION['message_type'] = 'error'; 
        exit();
    }
?>