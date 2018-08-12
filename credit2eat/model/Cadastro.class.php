<!--  <?php
class Cadastro extends Config {
    
    private $host, $user, $senha, $banco;
    
    protected $obj, $itens=array(), $prefix;

    function __construct() {
       $this->host = self::BD_HOST;
       $this->user = self::BD_USER;
       $this->banco = self::BD_BANCO;
       $this->senha = self::BD_SENHA;
       $this->prefix = self::BD_PREFIX;

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('credit2eat');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse lemail já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome',$email','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }

?>  -->
