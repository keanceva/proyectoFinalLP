
<?php include 'db.php'; ?>
 <?php
       $_SESSION['message'] =   "";
       $_SESSION['message_type'] = ''; 
        if($_POST['email'] != NULL || $_POST['password'] != NULL){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($resultado = $conn->query("SELECT email,password FROM users WHERE email ='".$email."' and password='".$password."'")) {
                        if ($resultado->num_rows > 0 ) {
                            $_SESSION['usuario'] = $email; 
                            header('Location: index.php');              
                        }else{
                            $_SESSION['usuario'] = '404'; 
                            $_SESSION['message'] =   "Usuario incorrecto";
                            $_SESSION['message_type'] = 'warning'; 
                            header('Location: login.php');   
                        }             
                //$resultado->close();
            }
         

        }else {
            $_SESSION['message'] = 'Completar los campos';
            $_SESSION['message_type'] = 'warning'; 
            header('Location: login.php');   
        }
            
           
?>