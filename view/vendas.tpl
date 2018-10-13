<center>
    <h3>Lista de Vendas</h3>
</center>
<hr>
<div class="row">
    <!--<div class="form-group" style="text-align: left;"><a href="./venda_vista"><button class="btn btn-primary">Realizar Venda à Vista</button></a></div>-->
    <div style="text-align: left;"><a href="./realizar_vendas"><button class="btn btn-primary btn-sm">REALIZAR NOVA VENDA</button></a></div>
</div>
<hr>

<!--	<section>
                <center>
                        PAGINAS
                </center>	
        </section> -->

<div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Valor</th>
                <th scope="col">Produto(s)</th>
                <th scope="col">Hora/data</th>
            </tr>
        </thead>


        <!-- começa a lista de vendas -->
        <section id="vendas" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    {foreach from=$VEN item=V}
                        <tbody>
                            <tr>	
                                <th scope="row">{$V.nome_cli}</th>
                                <td>R${$V.valor_prod}</td> 
                                <td>{$V.nome_prod}</td>
                                <td>{$V.data_venda}</td>		
                            </tr>
                        </tbody>

                    {/foreach} 

                </div>

            </ul>

        </section>

    </table>
</div>

