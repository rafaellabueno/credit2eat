<?php

require_once '../controller/Autoloader.php';

spl_autoload_register(function ($className) {
    $import = new Autoloader();
    $import->register($className);
});

if (!session_id()) {
    session_start();
}

/**
 * Classe estatica que facilita a manipulação do webService do moodle
 *
 * @author Marcio Bigolin <marcio.bigolinn@gmail.com>
 * adaptado por 
 *
 */
class MoodleUtil {

    public static $token = false;
    public static $site = 'https://moodle.canoas.ifrs.edu.br';

    public static function geraToken($usuario, $senha) {

        $url = 'https://moodle.canoas.ifrs.edu.br/login/token.php?username=' . $usuario . '&password=' . $senha . '&service=moodle_mobile_app';
        set_time_limit(0);
        $str = json_decode(file_get_contents($url));
        if (isset($str->token)) {
            self::$token = $str->token;
            return true;
        } else {
            return false;
        }
    }

    public static function requisita($servico) {


        $url = self::$site . '/webservice/rest/server.php?wsfunction=' . $servico . '&wstoken=' . self::$token . '&moodlewsrestformat=json';
        set_time_limit(0);
        return json_decode(file_get_contents($url));
    }

}