<?php

class Clientes extends Conexao {

    function __construct() {
        parent::__construct();
    }

    function GetClientes() {
        //busca os produtos
        $query = "SELECT * FROM cliente WHERE id_usuario = $_SESSION[id] and valido = 1";

        $query .= " ORDER BY cli_nome ";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    function GetClientesDevem() {
        //busca os produtos
        $query = "SELECT * FROM cliente WHERE id_usuario = $_SESSION[id] and valido = 1 and cli_divida > 0";

        $query .= " ORDER BY cli_nome ";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    function getImagem() {

        $clienteMat = isset($_POST['clienteMat']) ? $_POST['clienteMat'] : '';

        $queryExiste = "SELECT cli_id FROM cliente WHERE cli_matricula = $clienteMat";
        $varExiste = $this->ExecuteSQL($queryExiste);
        $clienteExiste = $this->ListarDados($queryExiste);
        $cliente = false;
        if ($cliente) {

            return $cliente;
        } else {

            // Dispara a consulta ao WebService
            $ch = curl_init();

            $fields["user"] = $clienteMat;
            $fields["password"] = isset($_POST['senha']) ? $_POST['senha'] : '';

            curl_setopt_array($ch, array(
                CURLOPT_URL => 'https://auth.canoas.ifrs.edu.br/login.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $fields
            ));

            //XGH
            // TODO: baixar e implementar certificado SSL
            // https://pt.stackoverflow.com/questions/110991/php-curl-emite-erro-unable-to-get-local-issuer-certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            $response = curl_exec($ch);
            $err = curl_error($ch);

            curl_close($ch);

            if (!$err) {

                // Fix String JSON
                $response = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response), true);


                if ($response['result'] == 1) { // Login e senha corretos
                    // Cadastra o usuario
                    /* if (!Usuario::where('matricula', $fields['user'])->first()) {

                      Usuario::create(array(
                      'nome' => $response['name'],
                      'matricula' => $fields['user'],
                      'sexo' => $response['genre'],
                      // TODO: mudar o campo no banco para aceitar a imagem em base64
                      //'imagem' => $response['foto']
                      'imagem' => '',
                      'moodle' => true,
                      ));

                      }

                      // Pega o id do usuário e faz o login
                      $usuario = Usuario::where('matricula', $fields['user'])->first();
                      Auth::loginUsingId($usuario['id'], false);

                      return redirect('/select-game');/* */

                    return $response['foto'];
                } else {
                    
                }
            } else {
                
            }
        }
    }

    public function setCliente($nome, $matricula, $email, $senha, $curso) {
        $ncurso = "SELECT nome_curso FROM cursos WHERE id_curso = $curso";
        $var1 = $this->ExecuteSQL($ncurso);
        $res = $this->ListarDados($ncurso);
        $nome_curso = $res['nome_curso'];
        $passwordhash = password_hash($senha, PASSWORD_DEFAULT);
        $query = "INSERT INTO cliente (cli_nome, cli_matricula, cli_email, cli_senha, id_usuario, valido, cli_curso) VALUES ('$nome', '$matricula','$email', '$passwordhash', '$_SESSION[id]', '1', '$curso');";
        $var = $this->ExecuteSQL($query);
    }

    function GetClienteID($id) {

        $query = "SELECT * FROM cliente WHERE cli_id = {$id}";

        $this->ExecuteSQL($query);

        return $this->ListarDados();
    }

    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'cli_id' => $lista['cli_id'],
                'cli_nome' => $lista['cli_nome'],
                'cli_matricula' => $lista['cli_matricula'],
                'cli_telefone' => $lista['cli_telefone'],
                'cli_email' => $lista['cli_email'],
                'cli_senha' => $lista['cli_senha'],
                'cli_divida' => $lista['cli_divida'],
                'cli_curso' => $lista['cli_curso']
                    //'id_usuario' => $lista['id_usuario']
            );
            $i++;
        }
    }

    public function atualizarCliente($nome, $email) {
        $query = "UPDATE cliente SET nome='$nome', email='$email' WHERE id = #id_usuario";
        $var = $this->ExecuteSQL($query);
    }

    public function remove($id) {

        $query = "UPDATE cliente SET valido = 0 where cli_id = $id";
        $var = $this->ExecuteSQL($query);
        return $var;
    }

}

?>