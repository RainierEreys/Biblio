<?= $header ?>

<a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>" >↼ Atrás</a>
<a class="btn btn-success" href="<?= base_url("crear-editorial"); ?>" >Crear registro de editorial nueva</a>

<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Editorial</th>
                    
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($editoriales as $editorial) : ?>
                    <tr>
                        <td><?= $editorial["Id"] ?></td>
                        <td><?= $editorial["Nombre"] ?></td>

                        <td>
                        <a href="<?= base_url("editar-editorial/" .$editorial["Id"]); ?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?= base_url("borrar-editorial/" .$editorial["Id"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $footer ?>