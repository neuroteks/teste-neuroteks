<?php
    include '../DB/querys.php';
    $termos = getBuscas();
?>

<!doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>View</title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  
</head>
 
<body>
 
    <section class="container">

        <input type="search" class="light-table-filter" data-table="table-info" placeholder="Filtrar/Procurar">
    
        <table class="table-info table">
            <thead>
            <tr>
                <th>Termo</th>
                <th>Link</th>
                <th>ID</th>
            </tr>
            </thead>
            <tbody>
                <?php
                while($linha = mysqli_fetch_assoc($termos)){
                    echo "<tr>";
                    echo "<td>". $linha['termo'] . "</td>";
                    echo "<td>". $linha['link'] . "</td>";
                    echo "<td>". $linha['id'] ."</td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
 
    </section>
 
<script  src="function.js"></script>
 
</body>
</html>