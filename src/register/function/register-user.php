<?php
    include ("../../asset/includes/connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass']; 
    
    $sql = $conn->prepare("SELECT * FROM tb_users WHERE email_user = '$email'");
    $sql->execute();
    $row = $sql->rowCount();

    if ( $row > 0 ){
        $array = array(
            "return"=> "email_invalid",
        );

        echo json_encode($array);
    }else {
        $sql = $conn->prepare("INSERT INTO tb_users(cd_user, nm_user, email_user, password_user) VALUES (null, '$name','$email','$pass')");
        $return_sql = $sql->execute();

        if($return_sql){
            $array = array(
                "return"=> TRUE,
            );
        
            echo json_encode($array);

        }else{
            
            $array = array(
                "return"=> FALSE,
            );
        
            echo json_encode($array);
        }

    }


