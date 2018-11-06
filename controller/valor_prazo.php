<?php
$smarty = new Template();

$exec = new Configuracoes();

$query2 = "SELECT valor_prazo FROM valor_prazo WHERE id=1 and id_usuario='$_SESSION[id]'";
$var2 = $exec->ExecuteSQL($query2);
$valor2 = $exec->ListarDados($query2);
$valor_prazo = $valor2['valor_prazo'];
?>

<html>
    <center>
        <h3>Definir Valor Venda a Prazo</h3> 
    </center>
    <hr>
    <br>

    <form id="valor_prazo" name="valor_prazo" action="./valor_prazo" method="post">
        <div class="col-md-3" class="col-xs-6">
            <div class="form-group" style="width:350px">
                <label><font size=4>Insira o valor:</font></label>
                <input type="float" class="form-control" id="valor" name="valor" required>
            </div>
        </div>   
        <div class="col-md-3" class="col-xs-6">
            <div class="form-group" style="width:350px">
                <label><font size=4>Valor a Prazo Atual: R$<?php echo $valor_prazo ?></font></label>
            </div>
        </div>   
        <div class="col-md-12" class="col-xs-6">
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Definir Valor</button>
            </div>
        </div>
    </form>
</html>


<?php
if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];
    $query = "UPDATE valor_prazo SET valor_prazo='$valor' WHERE id=1";
    $var = $exec->ExecuteSQL($query);
    header("location:./valor_prazo");
}

