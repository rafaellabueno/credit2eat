<?php
	
	class Produtos extends Conexao {
	
		function __construct(){
			parent::__construct();
		}

		public $nome = '';
		public $valor = '';
		public $qnt_min = '';
		public $qnt = '';

		function GetProdutos(){
			//busca os produtos
			$query = "SELECT * FROM produtos";
	
			$query .= " ORDER BY prod_nome"; //prod_id DESC
		
			$this->ExecuteSQL($query);

			$this->GetLista();
		}

		function GetProdutosID($id){
			//busca os produtos
			$query = "SELECT * FROM produtos WHERE prod_id = {$id}";
		
			$this->ExecuteSQL($query);

			return $this->ListarDados();
		}

		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()){
			$this->itens[$i] = array(
				'prod_id' => $lista['prod_id'],
				'prod_nome' => $lista['prod_nome'],
				'prod_valor' => $lista['prod_valor'],
				'prod_qnt_min' => $lista['prod_qnt_min'],
				'prod_qnt' => $lista['prod_qnt'],
				'prod_qnt_ven' => $lista['prod_qnt_ven'],
				'prod_slug' => $lista['prod_slug'],
				'usuario_id' => $lista['usuario_id']
			);
			$i++;
			}
		}

		public function setProduto($nome, $valor, $qnt_min, $qnt_atual){
			
			$query = "INSERT INTO produtos (prod_nome, prod_valor, prod_qnt_min, prod_qnt) VALUES ('$nome', '$valor', '$qnt_min','$qnt_atual');";	
			$var = $this->ExecuteSQL($query);

					//header("location:./menu");
		}

	}

?>