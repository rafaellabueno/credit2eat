<?php

/**
 * TRATA PAGINAS E PARAMETROS DA URL
 */
class Rotas {

    /**
     *
     * @var type string - define a pasta controler
     */
    private static $pasta_controller = 'controller';

    /**
     *
     * @var type string - define a pasta de views
     */
    private static $pasta_view = 'view';

    /**
     *
     * @var type array - recebe os parametros da URL
     */
    public static $pag;

    public static function getLastError() {

        if (isset($_SESSION['erro'])) {
            $error = $_SESSION['erro'];
            return $error;
        }
    }

    public static function get_Pagina() {

        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            $barra = DIRECTORY_SEPARATOR;

            $pagina = self::$pasta_controller . $barra . self::$pag[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
                //echo $pagina;
            } else {
                if (isset($_SESSION['id']))
                    include 'erro.php';
            }
        } else {
            
        }
    }

    /**
     * @return string URL do Site
     */
    public static function get_SiteHOME() {

        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    /**
     * 
     * @return string : pasta raiz do sistema
     */
    public static function get_SiteRAIZ() {

        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    /**
     * 
     * @return string - URL do template do site
     */
    public static function get_SiteTEMA() {

        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    public static function get_SiteClientes() {
        return self::get_SiteHOME() . '/clientes';
    }

    public static function get_SiteVENDAS() {
        return self::get_SiteHOME() . '/vendas';
    }

    public static function pag_Contato() {
        return self::get_SiteHOME() . '/contato';
    }

    public static function pag_MinhaConta() {
        return self::get_SiteHOME() . '/minhaconta';
    }

    public static function pag_Produtos() {
        return self::get_SiteHOME() . '/produtos';
    }

    public static function pag_CadastrarProdutos() {
        return self::get_SiteHOME() . '/cadastrar_produtos';
    }

}

?>