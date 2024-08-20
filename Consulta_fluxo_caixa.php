<?php
include("Conexao.php");

$sql = "SELECT * FROM fluxo_caixa";
$tipo = $_POST['radio2'];
$result = mysqli_query($con, $sql);
$total=0;

if($tipo == 'entrada'){
    $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
   
}else if($tipo == 'saida'){
    $sql= "select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
} else if($tipo == 'saldo'){
    $sql = "select sum(case when tipo = 'entrada' then valor else 0 end) -
                   sum(case when tipo = 'saida' then valor else 0 end) as valor 
                   from fluxo_caixa"; 
                }
                $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_row($result);
        echo " <br>O valor total é : $row[0]";

    
    
?>
<a href='Index.php'><br>Voltar</a>