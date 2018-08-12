<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=".\media\imagens\Credit2Eat---Icon.png"> <!-- ICONE DO SITE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{$TITULO_SITE}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{$GET_TEMA}/tema/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{$GET_TEMA}/tema/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{$GET_TEMA}/tema/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="{$GET_TEMA}/http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='{$GET_TEMA}/http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{$GET_TEMA}/tema/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black">
        <!--    <div class="sidebar" data-color="blue" data-image="{$GET_TEMA}/tema/img/sidebar-5.jpg"> --> 

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{$GET_HOME}" class="simple-text">
                    <img width="200px" height="50px"  
                        src=".\media\imagens\Credit2Eat---Complete.png"/>
                </a>
            </div>

            <ul class="nav">
                <li> <!--class="active"-->
                    <a href="{$PAG_CLIENTES}">
                        <i class="pe-7s-user"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li>
                    <a href="{$PAG_PRODUTOS}">
                        <i class="pe-7s-graph"></i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li>
                    <a href="{$GET_VENDAS}">
                        <i class="pe-7s-cash"></i>
                        <p>Vendas</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-news-paper"></i>
                        <p>Minha Conta</p>
                    </a>
                </li>
                <!--<li>
                    <a href="{$PAG_CONTATO}">
                        <i class="pe-7s-science"></i>
                        <p>Contato</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="  "></i>
                        <p>Notifications</p>
                    </a>
                </li> -->
				<li class="active-pro">
                    <a href="{$PAG_MINHACONTA}">
                        <i class="pe-7s-rocket"></i>
                        <p>Minha Conta</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">dasshboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dasdadshboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!--<li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li> -->
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="pe-7s-bell">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content"> <!--// CONTEUDO DA PAGINA -->
            <div class="container-fluid"> <!-- CONTEUDO DA PAGINA // CONTEUDO DA PAGINA // CONTEUDO DA PAGINA -->
                {php}
                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);
                {/php}
            </div>
        </div>               

<!--RODAPÉ -->
        <footer class="footer">
                <p class="copyright pull-right">
                    <center>
                        <h5>&copy; <script>document.write(new Date().getFullYear())</script> <a href="{$GET_HOME}">Credit2Eat</a></h5>
                    </center>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{$GET_TEMA}/tema/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{$GET_TEMA}/tema/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="{$GET_TEMA}/tema/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{$GET_TEMA}/tema/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{$GET_TEMA}/tema/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	/*$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer." NOTIFICAÇÃO NA TELA*/

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
