
<html>
    <center>
        <h3>Notificações</h3> 
    </center>
    <!--<div style="text-align: right;"><a href="./cadastrar_cliente"><button class="btn btn-primary">Cadastrar Novo Cliente</button></a></div>-->
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Notificação</th>
                <th scope="col">Data</th>
            </tr>
        </thead>


        <!-- começa a lista de clientes -->
        <section id="produtos" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    {foreach from=$NOT item=N}

                        <tbody>
                            <tr>	
                                <td>{$N.titulo}</td>
                                <td>{$N.data}</td>
                            </tr>
                        </tbody>

                    {/foreach}



                </div>

            </ul>

        </section>

    </table>



</html>