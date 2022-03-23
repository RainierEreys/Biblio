<?= $header ?>

<!--<a class="btn btn-info" href="<?= base_url("consultar"); ?>" >↼ Atrás</a>
<a class="btn btn-success" href="<?= base_url("crear-estudiante"); ?>" >Crear registro de estudiante nuevo</a>-->
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
                <th>Código de estudiante</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                
                <th> </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($estudiantes as $estudiante) : ?>
                <tr>
                    <td><?= $estudiante["Codigo_estudiante"] ?></td>
                    <td><?= $estudiante["Cedula"] ?></td>
                    <td><?= $estudiante["Nombre"] ?></td>
                    <td><?= $estudiante["Apellido"] ?></td>
                    <td><?= $estudiante["Telefono"] ?></td>
                    <td><?= $estudiante["Email"] ?></td>
                   

                    <td>
                        <a href="<?= base_url("editar-estudiante/" . $estudiante["Codigo_estudiante"]); ?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?= base_url("borrar-estudiante/" . $estudiante["Codigo_estudiante"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $footer ?>