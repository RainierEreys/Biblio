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
                <th>Nº de Préstamo</th>
                <th>Código del estudiante</th>
                <th>Libro prestado</th>
                <th>Fecha de préstamo</th>
                <th>Fecha de devolución</th>
                <th>Fecha de entrega</th>
                <th>Cantidad</th>
                <th>Estatus</th>
                <th>Observaciones</th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($prestamos as $prestamo) : ?>
                <tr>
                    <td><?= $prestamo["Id_prestamo"] ?></td>
                    <td><?= $prestamo["Id_estudiante"] ?></td>
                    <td><?= $prestamo["libro"] ?></td>
                    <td><?= $prestamo["fecha_prestamo"] ?></td>
                    <td><?= $prestamo["fecha_devolucion"] ?></td>
                    <td><?= $prestamo["fecha_entrega"] ?></td>
                    <td><?= $prestamo["cantidad"] ?></td>
                    <td><?= $prestamo["estatus"] ?></td>
                    <td><?= $prestamo["observaciones"] ?></td>

                    <td>
                        <a href="<?= base_url("editar-prestamo/" . $prestamo["Id_prestamo"]); ?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?= base_url("borrar-prestamo/" . $prestamo["Id_prestamo"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $footer ?>