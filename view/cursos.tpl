<center>
    <h3>Lista de Cursos</h3> 
</center>
<hr>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome Curso</th>
        </tr>
    </thead>

<section id="cursos" class="row">

        <ul style="list-style: none">

            <div class="row" id="pularlinha">

                {foreach from=$CUR item=C}

                    <tbody>
                        <tr>			
                            <th scope="row"><a href="" style="color: #030300">{$C.nome_curso}</a></th>
                    	</tr>
                    </tbody>

                {/foreach}

            </div>

        </ul>

    </section>

</table>