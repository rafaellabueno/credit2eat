
<?php
$smarty = new Template();

//se existe o post do produto
if (isset($_POST['prod_nome'])) {

    $prod = new Produtos();
    $resp = $prod->setProduto($_POST['prod_nome'], $_POST['prod_valor'], $_POST['prod_qnt_min'], $_POST['prod_qnt']);

    /* 	echo '<pre>';
      print_r($_POST);
      echo '</pre>'; */

    header("location:./produtos");
}

$smarty->display('cadastrar_produto.tpl');
?>
<!-- <?php
//$smarty = new Template();
//$prod = new Produtos();
//$prod->setProduto($_POST['nomeProduto'],$_POST['valorProduto'], $_POST['qntdMin'], $_POST['qntdAtual']);
//$smarty->display('cadastrar_produto.tpl');
?>

<?php
//$user = new Usuario();
//$resp = $user->cadastrar($_POST['nome'], $_POST['email'], $_POST['senha']);
?>
-->