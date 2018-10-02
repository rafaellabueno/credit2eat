<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="icon" type="image/png" href=".\media\imagens\Credit2Eat---Icon.png">
        <title>{$TITULO_SITE}</title>
        <link href="tema/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="tema/js/bootstrap.min.js"></script>
        <script src="tema/js/jquery.3.2.1.js"></script>
        <style>

            /*
             * Specific styles of signin component
             */
            /*
             * General styles
             */
            .card-container.card {
                max-width: 350px;
                padding: 40px 40px;
            }

            .btn {
                font-weight: 700;
                height: 36px;
                -moz-user-select: none;
                -webkit-user-select: none;
                user-select: none;
                cursor: default;
            }

            /*
             * Card component
             */
            .card {
                background-color: #F7F7F7;
                /* just in case there no content*/
                padding: 20px 25px 30px;
                margin: 0 auto 25px;
                margin-top: 50px;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            }

            .profile-img-card {
                width: 100%;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
            }

            /*
             * Form styles
             */
            .profile-name-card {
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0 0;
                min-height: 1em;
            }

            .reauth-email {
                display: block;
                color: #404040;
                line-height: 2;
                margin-bottom: 10px;
                font-size: 14px;
                text-align: center;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .form-signin #nome,
            .form-signin #senha,
            .form-signin #email {
                direction: ltr;
                height: 44px;
                font-size: 16px;
            }

            .form-signin input[type=email],
            .form-signin input[type=password],
            .form-signin input[type=text],
            .form-signin button {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                z-index: 1;
                position: relative;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .form-signin .form-control:focus {
                border-color: rgb(104, 145, 162);
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            }

            .btn.btn-signin {
                /*background-color: #4d90fe; */
                background-color: rgb(104, 145, 162);
                /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
                padding: 0px;
                font-weight: 700;
                font-size: 14px;
                height: 36px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                border: none;
                -o-transition: all 0.218s;
                -moz-transition: all 0.218s;
                -webkit-transition: all 0.218s;
                transition: all 0.218s;
            }

            .btn.btn-signin:hover,
            .btn.btn-signin:active,
            .btn.btn-signin:focus {
                background-color: rgb(12, 97, 33);
            }

            .forgot-password {
                color: rgb(104, 145, 162);
            }

            .forgot-password:hover,
            .forgot-password:active,
            .forgot-password:focus{
                color: rgb(12, 97, 33);
            }


            body {
                padding: 0px;
                border: 0px;
                margin: 0px;
                height: 100%;
            }
            html {
                height: 100%;
                background-repeat: no-repeat;
                background-image: linear-gradient(rgb(104, 145, 162), rgb(104, 145, 162));
                overflow: hidden;
            }


        </style>



    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->

                <img id="profile-img" class="profile-img-card" src=".\media\imagens\Credit2Eat---Complete.png" /> <!-- IMAGEM -->
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="./cadastro" method="post">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required autofocus>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
                </form><!-- /form -->
                <a href="./redireciona?caminho=login" style="text-decoration: none;"><center>Logar</center></a>
                <br><br><center><h4>{$ERRO}</h4></center>

            </div><!-- /card-container -->
        </div><!-- /container -->


        <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
            $(document).ready(function () {
                // DOM ready

                // Test data
                /*
                 * To test the script you should discomment the function
                 * testLocalStorageData and refresh the page. The function
                 * will load some test data and the loadProfile
                 * will do the changes in the UI
                 */
                // testLocalStorageData();
                // Load profile if it exits
                loadProfile();
            });


            /**
             * Main function that load the profile if exists
             * in localstorage
             */
            function loadProfile() {
                if (!supportsHTML5Storage()) {
                    return false;
                }
                // we have to provide to the callback the basic
                // information to set the profile
                getLocalProfile(function (profileImgSrc, profileName, profileReAuthEmail) {
                    //changes in the UI
                    $("#profile-name").html(profileName);
                    $("#reauth-email").html(profileReAuthEmail);
                    $("#nome").hide();
                    $("#remember").hide();
                });
            }

            /**
             * function that checks if the browser supports HTML5
             * local storage
             *
             */
            function supportsHTML5Storage() {
                try {
                    return 'localStorage' in window && window['localStorage'] !== null;
                } catch (e) {
                    return false;
                }
            }

            /**
             * Test data. This data will be safe by the web app
             * in the first successful login of a auth user.
             * To Test the scripts, delete the localstorage data
             * and comment this call.
             *
             */
            function testLocalStorageData() {
                if (!supportsHTML5Storage()) {
                    return false;
                }

                localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
                localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
            }
        </script>

        {php}
                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);
        {/php}
    </body>

</html>
