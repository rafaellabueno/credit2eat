<center>
    <h3>Lista de Produtos</h3>
</center>
<!-- <div style="text-align: right;"><a href="./cadastrar_produto"><button class="btn btn-primary">Cadastrar Novo Produto</button></a></div> -->
<hr>

<!--	<section>
                <center>
                        PAGINAS
                </center>	
        </section> -->

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Mínimo</th>
            <th scope="col">Vendidos</th>
        </tr>
    </thead>


    <!-- começa a lista de produtos -->
    <section id="produtos" class="row">

        <ul style="list-style: none">

            <div class="row" id="pularlinha">

                {foreach from=$PRO item=P}

                    <tbody>
                        <tr>			
                            <th scope="row"><a href="" style="color: #030300">{$P.prod_nome}</a></th>                          
                            <td>R$ {$P.prod_valor}</td>
                            <td>{$P.prod_qnt}</td>
                            <td>{$P.prod_qnt_min}</td>
                            <td>{$P.prod_qnt_ven}</td>					
                        </tr>
                    </tbody>

                {/foreach}

            </div>

        </ul>

    </section>

</table>

