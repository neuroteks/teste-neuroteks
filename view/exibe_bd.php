<?php
    if (isset($_POST['submit'])) {
        $connection = new mysqli("localhost", "root", "", "bd_json");
        $q = $connection->real_escape_string($_POST['q']);
        $column = $connection->real_escape_string($_POST['column']);

        if($column == "" || ($column != "id_termo" && $column != "link" && $column != "nome"))
            $column = "nome";

        //$sql = $connection->query("SELECT * FROM busca WHERE $column LIKE '$q'");
        //$sql = "SELECT * FROM `busca` WHERE $column LIKE '%".$q."%'";
        $sql = "SELECT * FROM busca b JOIN termo t ON b.id_termo = t.id WHERE $column LIKE '%".$q."%'";
        $result = $connection->query($sql);
        
        if (!$result) {
            trigger_error('Invalid query: ' . $connection->error);
        }
        
        if ($result->num_rows > 0)
        {
            $search_result = filterTable($sql);
        
        } else
        {
            echo "Sua busca não retornou nenhum resultado :(";
            $query = "SELECT * FROM busca b JOIN termo t ON b.id_termo = t.id";
            $search_result = filterTable($query);
        }

    } else {
        $query = "SELECT * FROM busca b JOIN termo t ON b.id_termo = t.id";
        $search_result = filterTable($query);
    }

    // function to connect and execute the query
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "bd_json");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/custom.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--==='============================================================================================-->
        <title>Search Results</title>
    </head>
    <body>
        <form method="post" action="exibe_bd.php">
            <input type="text" name="q" placholder="Digite uma busca aqui :D">
            <select name="column">
                <option value="">Selecione o filtro</option>
                <option value="id_termo">Id do Termo</option>
                <option value="nome">Termo</option>
                <option value="link">Link</option>
            </select>
            <input type="submit" name = "submit" value="Buscar">

            <div class="table100 ver2 m-b-110">
				<div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">                    
                                <th class="cell100 column1">Id do Termo</th>
                                <th class="cell100 column2">Termo</th>
                                <th class="cell100 column3">Link</th>
                            </tr>
                        </thead>
                        <!-- populate table from mysql database -->
                    </table>
                </div> 

                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($search_result)):?>
                                <tr class="row100 body">
                                    <td class="cell100 column1"><?php echo $row['id_termo'];?></td>
                                    <td class="cell100 column2"><?php echo $row['nome'];?></td>                    
                                    <td class="cell100 column3"><?php echo $row['link'];?></td>                    
                                </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>                    
            </div>
    </body>
</html>