<?php
    include ("../../asset/includes/connection.php");

    $email = $_POST['email'];
    $password = $_POST['pass'];
   
    
    $sql = $conn->prepare("SELECT password_user, email_user, cd_user FROM tb_users WHERE email_user = '$email'");
    $sql->execute();
    $count =  $sql->rowCount();
    $ret = $sql->fetch(PDO::FETCH_OBJ);

    if($count > 0) {
        if($email == $ret->email_user && $password == $ret->password_user){
            session_start();
            $_SESSION['code'] = $ret->cd_user;
            $array = array(
                "return" => TRUE,
            );
            echo json_encode($array);
        }else{
            $array = array(
                "return" => FALSE,
            );
            echo json_encode($array);
        }
    }else{
        $array = array(
            "return" => "user_not_found",
        );
        echo json_encode($array);
    }
    