<?php
$smarty = new Template();

$clientes = new Clientes();
$clientes->GetClientes();

$smarty->assign('CLI', $clientes->GetItens());

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());

$smarty->display('cliente_divida.tpl');

if (isset($_POST['cliente'])) {

    $divida = new Clientes();
    $resp = $divida->GetClienteID($_POST['cliente']);

    $cliente = $_POST['cliente'];

    $buscadados = "SELECT * FROM cliente WHERE cli_id = $cliente";
    $var = $clientes->ExecuteSQL($buscadados);
    $dados = $clientes->ListarDados($buscadados);

    $nomecliente = $dados['cli_nome'];
    $dividacliente = $dados['cli_divida'];

    $buscaprodutos = "SELECT produtos.prod_nome, venda_produto.venda_id, venda_produto.produto_id FROM produtos INNER JOIN venda_produto ON venda_produto.produto_id = produtos.prod_id INNER JOIN venda ON venda.id_venda = venda_produto.venda_id INNER JOIN cliente ON cliente.cli_id = venda.id_cliente WHERE cli_id = $cliente and venda_produto.pendente = 1";
    $var2 = $produtos->ExecuteSQL($buscaprodutos);
    $dados2 = $produtos->ListarDadosArray($buscaprodutos);
    ?>
    <br>
    <br>
    <hr>
    <html>
        <center>
            <h3>Histórico</h3> 
        </center>
        <hr>
        <br>
        <form name="cliente_divida" action="./zera_divida" method="post">
            <div class="section">
                <input type="hidden" name="vendas" value="<?php
                foreach ($dados2 as $p) {
                    echo $p['produto_id'] . '-' . $p['venda_id'];
                    if (next($dados2)) {
                        echo (", ");
                    }
                }
                ?>">
                <input type="hidden" name="cliente_nome" value="<?php echo $nomecliente ?>">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Nome: </font></label>
                    <input type="text" value="<?php echo $nomecliente ?>" class="form-control" name="cliente_nome" id="cliente_nome" >
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Pendências:</font></label>
                    <input type="text" value="R$<?php echo $dividacliente ?>" class="form-control"  id="cliente_divida" name="cliente_divida" >
                </div>
                <div class="form-group">
                    <label><font size=4>Produtos Pendentes:</font></label>
                    <input type="text" value="<?php
                    foreach ($dados2 as $p) {
                        $nomeprodutos = $p['prod_nome'];
                        echo $nomeprodutos;
                        if (next($dados2)) {
                            echo (", ");
                        }
                    }
                    ?>" class="form-control"  id="produto" name="produtos">
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Efetuar Pagamento</button>
            </div>
            <div class="col-md-3">
                <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
            </div>
        </form>
        <?php
    }
    ?>