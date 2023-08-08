<?php
    include ("../../../asset/includes/connection.php");
    $category = $_POST['category']; 

    $sql = $conn->prepare("SELECT * FROM tb_category WHERE nm_category = '$category'");
    $sql->execute();
    $row = $sql->rowCount();

    if ( $row > 0 ){
        $array = array(
            "return"=> "existing_category",
        );

        echo json_encode($array);
    }else{
        $sql = $conn->prepare("INSERT INTO tb_category(cd_category, nm_category, status_category) VALUES (null, '$category', 1 )");
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
    