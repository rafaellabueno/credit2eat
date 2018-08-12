<?php
	
	class Produtos extends Conexao {
	
		function __construct(){
			parent::__construct();
		}

		function GetProdutos(){
			//busca os produtos
			$query = "SELECT * FROM produtos";
	
			$query .= " ORDER BY prod_id DESC"; 
		
			$this->ExecuteSQL($query);

			$this->GetLista();
		}

		function GetProdutosID($id){
			//busca os produtos
			$query = "SELECT * FROM produtos";
	
			//$query .= " AND prod_id = {$id}";  se eu tiro isso ele mostra todos os existentes, se eu deixo ele não mostra nenhum
		
			$this->ExecuteSQL($query);

			$this->GetLista();
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
				'prod_slug' => $lista['prod_slug']
			);
			$i++;
			}
		}

	}

?>

<!--$query = "SELECT * FROM {this->prefix} produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id" 
query para buscar os produtos de uma categoria específica-->