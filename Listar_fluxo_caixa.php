<?php
    include('Conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Fluxo Caixa</title>
</head>
<body>
    <h1>Consultar Fluxo Caixa</h1>
    <table border = "1" align = "center" widht = 500>
        <tr>
            <th>Código:</th>
            <th>Data:</th>
            <th>Tipo:</th>
            <th>Valor:</th>
            
            <th>Cheque:</th>
            <th>Histórico:</th>
            <th>Excluir:</th>
            <th>Altera:</th>    
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<td>".$row['id'] ."</td>";
                echo "<td>".$row['data'] ."</td>";
                echo "<td>".$row['tipo'] ."</td>";
                echo "<td>".$row['valor'] ."</td>";
               
                echo "<td>".$row['cheque'] ."</td>";
                echo "<td>".$row['historico'] ."</td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href='Index.php'><br>Voltar</a>
</body>
</html>