<?php

$clienteMat = isset($_POST['clienteMat']) ? $_POST['clienteMat'] : '';
$queryExiste = "SELECT cli_id FROM cliente WHERE cli_matricula = $clienteMat";
$varExiste = $this->ExecuteSQL($queryExiste);
$clienteExiste = $this->ListarDados($queryExiste);
$cliente = false;
$cliente = $clienteExiste['imagem'];
if ($cliente) {

    echo $cliente;
    return;
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

            echo $response['foto'];

            return;
        } else {
            
        }
    } else {
        
    }
}
?>