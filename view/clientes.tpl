
<html>
    <center>
        <h3>Lista de Clientes</h3> 
    </center>
    <!--<div style="text-align: right;"><a href="./cadastrar_cliente"><button class="btn btn-primary">Cadastrar Novo Cliente</button></a></div>-->
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Email</th>
                <th scope="col">Curso</th>
                <th scope="col">Pendências</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>


        <!-- começa a lista de clientes -->
        <section id="produtos" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    {foreach from=$CLI item=C}

                        <!-- <li class="col-md-4">
                         
                         <div class="thumbnail"> 
     
                                 <a href="{$CLI_INFO}/{$C.cli_id}/{$C.c_nome}"> -->

                        <tbody>
                            <tr>	
                                <th scope="row"><a href="" style="color: #000000">{$C.cli_nome}</a></th>
                                <td>{$C.cli_matricula}</td>
                                <td>{$C.cli_email}</td>
                                <td>{$C.cli_curso}</td>
                                <td>R${$C.cli_divida}</td>
                                <td>
                                    <!--<a href="javascript:void(0);" class="zerar" id-pessoa="{$C.cli_id}" style="color: #030300" style=""><i class="pe-7s-refresh-2"></i>-->
                                    <a href="javascript:void(0);" class="excluir" id-pessoa="{$C.cli_id}" style="color: #030300" style=""><i class="pe-7s-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>


                        <!--</a>

                        </div>

                        </li> -->

                    {/foreach}



                </div>

            </ul>

        </section>

    </table>



</html>



<script type="text/javascript">
    $('.excluir').click(function () {
        var idPessoa = $(this).attr('id-pessoa');

        $("#ModalDelete").modal();

        $('.excluirCliente').click(function () {
            var urlConsulta = './excluir/' + idPessoa;
            console.log(idPessoa);
            $.get(urlConsulta, function (res) {
                console.log(res);
                if (res === '1') {
                    bootbox.alert("Cliente excluído com sucesso", function () {

                        window.location.reload();

                    });
                } else {
                    bootbox.alert("Falhou", function () {


                        window.location.reload();
                    });
                }

            });
        });

    });
</script>
<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> -->