
<html>
    <center>
        <h3>Lista de Clientes com Pendências</h3> 
    </center>

    <hr>

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Pendências</th>
                </tr>
            </thead>


            <!-- começa a lista de clientes -->
            <section id="produtos" class="row">

                <ul style="list-style: none">

                    <div class="row" id="pularlinha">

                        {foreach from=$CLI item=C}

                            <tbody>
                                <tr>	
                                    <th scope="row"><a href="" style="color: #000000">{$C.cli_nome}</a></th>
                                    <td>{$C.cli_matricula}</td>
                                    <td>{$C.cli_email}</td>
                                    <td>{$C.cli_curso}</td>
                                    <td>R${$C.cli_divida}</td>
                            </tbody>


                            <!--</a>
    
                            </div>
    
                            </li> -->

                        {/foreach}



                    </div>

                </ul>

            </section>

        </table>
    </div>



</html>

<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> -->