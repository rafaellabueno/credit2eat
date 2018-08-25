<?php

/**
 * Description of Conexao
 *
 * @author Guilherme
 */
class Conexao extends Config {
    
  private $host, $user, $senha, $banco;
    
  protected $obj, $itens=array(), $prefix;

    function __construct() {
       $this->host = self::BD_HOST;
       $this->user = self::BD_USER;
       $this->banco = self::BD_BANCO;
       $this->senha = self::BD_SENHA;
       $this->prefix = self::BD_PREFIX;
    
       try {
           
           if($this->Conectar() == null){
            $this->Conectar();
           }
       } catch (Exception $ex) {
           exit($ex->getMessage().'<h2> Erro na conexão! </h2>');
       }
       
    }
    
    private function Conectar(){
        $options = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING  
        );
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}" ,
          $this->user, $this->senha, $options);
        return $link;
    }
    
    function ExecuteSQL($query, array $params = NULL){
      $this->obj = $this->Conectar()->prepare($query);
      return $this->obj->execute();
    }

    function ExecuteSQL2($query, $query2, array $params = NULL){
      $this->obj = $this->Conectar()->prepare($query, $query2);
      return $this->obj->execute();
    }
    
    function ListarDados(){
      return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados(){
      return $this->obj->rowCount();
    }


    function GetItens(){
      return $this->itens;
    } 

}

?>