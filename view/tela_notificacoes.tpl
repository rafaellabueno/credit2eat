
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
                <th scope="col">Ações</th>
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
                                <td>
                                    <form name="notificacao" action="./tela_notificacoes" method="post">
                                        <input type="hidden" name="id" value="{$N.id}">
                                        <!-- <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign"></span>
                                                Visto
                                            </label>
                                        </div>-->
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary btn-sm " name="botao">Visto</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    {/foreach}



                </div>

            </ul>

        </section>

    </table>



</html>