<h1>Listar Contatos</h1>
<hr>

<table class="table table-striped table-dark table-hover">
    <thead">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $posicao => $cadaContato) {
                $infosSeparadas = explode(';', $cadaContato);
                echo '<tr>';
                    echo '<td>' . $infosSeparadas[0] .'</td>';
                    echo '<td>' . $infosSeparadas[1] .'</td>';
                    echo '<td>' . $infosSeparadas[2] .'</td>';
                    echo "<td>
                        <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a>
                        <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>Editar</a></td>";
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
