<?= $header ?>


<!--<a class="btn btn-info" href="<?= base_url("consultar"); ?>" >↼ Atrás</a>
<a class="btn btn-success" href="<?= base_url("crearlibrodigi"); ?>" >Crear registro de libro nuevo</a>-->

<style>
    .main-container {
        width: 1000px;
        margin-left: 250px;
        margin-top: 30px;
    }
</style>

    <div class="main-container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Imagen</th>
                    <th>      </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($libros_digitales as $libro) : ?>
                    <tr>
                        <td><?= $libro["Id"] ?></td>
                        <td><?= $libro["titulo"] ?></td>
                        <td><?= $libro["fecha_publicacion"] ?></td>
                        <td><?= $libro["autor"] ?></td>
                        <td><?= $libro["editorial"] ?></td>
                        <td>
                            <img src="<?= base_url()?>/uploads/<?= $libro["imagen"];?>" 
                        class="img-thumbnail" width="100" alt="">
                    </td>
                        <td>
                        <a href="<?= base_url("editarlibro-digi/" .$libro["Id"]); ?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?= base_url("borrarlibro-digi/" .$libro["Id"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $footer ?>

