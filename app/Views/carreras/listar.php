<?= $header ?>

<a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>" >↼ Atrás</a>
<a class="btn btn-success" href="<?= base_url("crear-carrera"); ?>" >Crear registro de carrera nueva</a>

<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Carrera</th>
                    
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($carreras as $carrera) : ?>
                    <tr>
                        <td><?= $carrera["Id"] ?></td>
                        <td><?= $carrera["Carrera"] ?></td>

                        <td>
                        <a href="<?= base_url("editar-carreras/" .$carrera["Id"]); ?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?= base_url("borrar-carreras/" .$carrera["Id"]); ?>" class="btn btn-danger" type="button">Borrar</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $footer ?>