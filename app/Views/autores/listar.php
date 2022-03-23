<?= $header ?>

<style>
    table{
        
        margin-left: 250px;
    }
</style>
<a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>" >↼ Atrás</a>
<a class="btn btn-success" href="<?= base_url("crear-autor"); ?>" >Crear registro de autor nuevo</a>

<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacionalidad</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($autores as $autor) : ?>
                    <tr>
                        <td><?= $autor["Nombre"] ?></td>
                        <td><?= $autor["Apellido"] ?></td>
                        <td><?= $autor["Nacionalidad"] ?></td>

                        <td>
                        <a href="<?= base_url("editar-autores/" .$autor["Id"]); ?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?= base_url("borrar-autores/" .$autor["Id"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $footer ?>