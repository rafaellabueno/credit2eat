<?php
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());

$smarty->display('editar_produto.tpl');

if (isset($_POST['produto'])) {
    $produto = new Produtos();
    $resp = $produto->GetProdutosID($_POST['produto']);

    $produtoid = $_POST['produto'];

    $buscadados = "SELECT * FROM produtos WHERE prod_id = $produtoid";
    $var = $produtos->ExecuteSQL($buscadados);
    $dados = $produtos->ListarDados($buscadados);

    $idprod = $produtoid;
    $nomeproduto = $dados['prod_nome'];
    $valorproduto = $dados['prod_valor'];
    $quantidademinima = $dados['prod_qnt_min'];
    ?>
    <br>
    <br>
    <hr>
    <html>
        <center>
            <h3>Editar Produto</h3> 
        </center>
        <hr>
        <br>
        <form name="cliente_divida" action="./atualizar_produto" method="post">
            <input type="hidden" name="id" value="<?php echo $idprod ?>">
            <div class="form-group" style="width:300px">
                <label><font size=4>Nome: </font></label>
                <input type="text" value="<?php echo $nomeproduto ?>" class="form-control" name="nome_produto" id="nome_produto" >
            </div>
            <div class="form-group" style="width:300px">
                <label><font size=4>Valor:</font></label>
                <input type="text" value="<?php echo $valorproduto ?>" class="form-control"  id="valor_produto" name="valor_produto" >
            </div>
            <div class="form-group" style="width:300px">
                <label><font size=4>Quantidade Mínima:</font></label>
                <input type="text" value="<?php echo $quantidademinima ?>" class="form-control"  id="quantidade_produto" name="quantidade_produto" >
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Salvar Alterações</button>
            </div>
        </form> 	

    <?php } ?>
