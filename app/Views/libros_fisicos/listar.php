<?= $header ?>

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
                <th>Ciudad</th>
                <th>Cantidad</th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($libros as $libro) : ?>
                <tr>
                    <td><?= $libro["Id_libro"] ?></td>
                    <td><?= $libro["titulo"] ?></td>
                    <td><?= $libro["fecha_publicacion"] ?></td>
                    <td><?= $libro["autor"] ?></td>
                    <td><?= $libro["editorial"] ?></td>
                    <td><?= $libro["ciudad"] ?></td>
                    <td><?= $libro["cantidad"] ?></td>
                    <!--<td>
                            <img src="<?= base_url() ?>/uploads/<?= $libro["imagen"]; ?>" 
                        class="img-thumbnail" width="100" alt="">-->
                    </td>
                    <td>
                        <a href="<?= base_url("editarlibro/" . $libro["Id_libro"]); ?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?= base_url("borrarlibro/" . $libro["Id_libro"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $footer ?>