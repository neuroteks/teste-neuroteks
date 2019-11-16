<?php
    // Takes raw data from the request
    //$json = file_get_contents('php://input');
    /*
    {
        "termo": "3"
        "link": "https://www.devmedia.com.br/dominando-o-selenium-web-driver-na-pratica/34183"
    }
    */ 
    $json = '[
        {
            "nome": "Selenium Web Driver"
        },
        {
            "nome": "Dockerizando Python"
        },
        {
            "nome": "Meltan"
        },
        {
            "nome" : "Melmetal"
        },
        {          
          "nome": "Agumon"
        },
        {         
          "nome": "Greymon"
        }
        
    ]'; 

    // Converts it into a PHP object
    $data = json_decode($json, true);
    //print_r(array_values ($data));


    //acessar o bd aqui
    $connect = mysqli_connect("localhost", "root", "", "bd_json");

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //$count = count($data);
    
    foreach($data as $item)
    {        
        //$string_var =  __toString($data[$i]->nome);
        $query = "INSERT INTO `termo` (nome) VALUES ('".$item['nome']."')";
        if (mysqli_query($connect, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }      
    }
    
    mysqli_close($connect);

    //chama script Python do Selenium WebDriver
    $response = system('python open_selenium.py', $retval);

?>

