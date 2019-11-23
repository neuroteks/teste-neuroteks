<?php
    include 'DB/querys.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET)){
            $termos = getTermos();
        
            $myJSON = array();
            while($linha = mysqli_fetch_assoc($termos)){
                array_push($myJSON, $linha); 
            }

            $myJSON = json_encode($myJSON);
            echo $myJSON;
        }
        else
            echo "Get Vazio";
    }


    else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST)){
            $data = json_decode(file_get_contents('php://input'));

            for($i = 0; $i < count($data); $i++){
                $termo = $data[$i]->termo->nome;
                $link = $data[$i]->link;
                insertIntoBusca($termo, $link);
            }
        }
        else
            echo "Post Vazio";
    }
    
?>