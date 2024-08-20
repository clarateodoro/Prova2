<?php
    include('Conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1> Alterar Dados </h1>";
    $sql = "UPDATE fluxo_caixa SET
            data = '".$data."',
            tipo = '".$tipo."',
            valor = '".$valor."',
            cheque = '".$cheque."',
            historico = '".$historico."'
            WHERE id = ".$id;
    echo $sql;
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar o banco de dados: ".mysqli_error($con)."<br>";

?>
<br>
<a href='Index.php'> Voltar </a>