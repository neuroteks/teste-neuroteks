<?php
    //mysql -u root -p mysql
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'neuroteks';
    // Conecta-se ao banco de dados MySQL
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    // Caso algo tenha dado errado, exibe uma mensagem de erro
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


    function getTermos(){
        GLOBAL $conn;
        return mysqli_query($conn,"select * from termo");
    }

    function getBuscas(){
        GLOBAL $conn;
        return mysqli_query($conn,"select * from busca");
    }

    function insertIntoBusca($termo, $link){
        Global $conn;
        mysqli_query($conn, 'insert into busca (termo, link) values (' . "'$termo'" . ', ' . "'$link'" . ')');
    }
?>