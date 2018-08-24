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
			$query = "SELECT * FROM venda inner join venda_produto where venda.id_venda = venda_produto.venda_id and cliente.cli_id = venda.id_cliente";

			$query = "ORDER BY venda.id_venda";

			$this->ExecuteSQL($query);
		
			$this->GetLista();
		}

		/*function GetVendasProdutos(){
			$query = "SELECT * FROM venda_produto";

			$query = "ORDER BY data_venda";

			$this->ExecuteSQL($query);

			$this->GetLista();
		}

		function GetVendasID($id){
			//busca as vendas
			$query = "SELECT * FROM venda";
	
			//$query .= " AND prod_id = {$id}";  se eu tiro isso ele mostra todos os existentes, se eu deixo ele não mostra nenhum
		
			$this->ExecuteSQL($query);

			$this->GetLista();
		} */

		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()){
			$this->itens[$i] = array(
				'id_venda' => $lista['id_venda'],
				'valor_venda' => $lista['valor_venda'],
				'a_prazo' => $lista['a_prazo'],
				'id_cliente' => $lista['id_cliente'],
				'produto_id' => $lista['produto_id'],
				'data_venda' => $lista['data_venda']
			);
			$i++;
			}
		}

		private function setVendas($cliente, $valor, $data, $produto, $aprazo){

			$query = "INSERT INTO venda (id_cliente, valor_venda, a_prazo, data_venda) VALUES ('$cliente','$valor','$aprazo','$data')";
			$id = mysqli_insert_id();
			$query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $id_produto);";
			$var = $this->ExecuteSQL($query, $query2);
		}

	}

?>
		<!-- private function setVenda($id_cliente, $valor, $data, $id_produto, $aprazo){
			$query = "INSERT INTO venda ('$id_cliente','$valor_venda','$a_prazo') VALUES ('$cliente','$valor','$aprazo')";
			$var = $this->ExecuteSQL($query);
		}-->