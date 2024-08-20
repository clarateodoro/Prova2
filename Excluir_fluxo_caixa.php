<?php
    include('Conexao.php');
    $id = $_GET['id'];
    $sql = 'DELETE FROM fluxo_caixa WHERE id  = '.$id;
    echo "<h1> Excluir Tabela </h1>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Registro excluído com sucesso<br>";
    else
        echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";

?>
<a href = 'Index.php'>Voltar</a>