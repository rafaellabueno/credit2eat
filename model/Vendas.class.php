<?php
	
	class Vendas extends Conexao {
		
		function __construct(){
			parent::__construct();
		}

		public $valor = '';
		public $data = '';
		public $cliente = '';
		public $produtos = '';

		function GetVendas(){ //busca as vendas
			$query = "SELECT * FROM venda inner join venda_produto where venda.id_venda = venda_produto.venda_id and id_usuario = $_SESSION[id]"; 

			//$query2 = "SELECT cli_nome FROM cliente c where c.cli_nome = $this(id_cliente)"

			$this->ExecuteSQL($query);
		
			$this->GetLista();
		}

		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()){

				$cli = new Clientes();
				$nome_cli = $cli->GetClienteID($lista['id_cliente'])['cli_nome'];

				$prod = new Produtos();
				$nome_prod = $prod->GetProdutosID($lista['produto_id'])['prod_nome'];
                $valor_prod = $prod->GetProdutosID($lista['produto_id'])['prod_valor'];

                /*$data = strtotime($data_venda);
                $data_venda = date('H:i:s D-m-y',$data);*/ //DATA            
                                
			$this->itens[$i] = array(
				'id_venda' => $lista['id_venda'],
				'a_prazo' => $lista['a_prazo'],
				'id_cliente' => $lista['id_cliente'],
				'produto_id' => $lista['produto_id'], 
				'data_venda' => $lista['data_venda'],
				'nome_cli' => $nome_cli,
				'nome_prod' => $nome_prod,
                'valor_prod' => $valor_prod
			);
			$i++;
			}
		}

		function setVendas($cliente, $produtos){
			$query = "INSERT INTO venda (id_cliente, id_usuario) VALUES ('$cliente','$_SESSION[id]')";
			$var = $this->ExecuteSQL($query);
			$id = $this->LastInsertID();
			foreach ($produtos as $produto) {
				$query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $produto);";
				$var2 = $this->ExecuteSQL($query2);
			}
			
		}

	}

?>

	<!-- $query = "INSERT INTO venda (cliente, a_prazo) VALUES ('$cliente','$valorp','$aprazo')"; QUERY COM A PRAZO -->


		<!-- private function setVenda($id_cliente, $valor, $data, $id_produto, $aprazo){
			$query = "INSERT INTO venda ('$id_cliente','$valor_venda','$a_prazo') VALUES ('$cliente','$valor','$aprazo')";
			$var = $this->ExecuteSQL($query);
		}-->

		<!-- private function setVendas($cliente, $valor, $data, $produto, $aprazo){
			$valorp = "SELECT prod_valor FROM produtos p WHERE p.prod_id = $produto";
			$query = "INSERT INTO venda (id_cliente, valor_venda, a_prazo, data_venda) VALUES ('$cliente','$valorp','$aprazo','$data')";
			$id = mysqli_insert_id();
			$query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $id_produto);";
			$var = $this->ExecuteSQL($query);
			var2 = $this->ExecuteSQL($query2);
		} ExecuteSQL --> 