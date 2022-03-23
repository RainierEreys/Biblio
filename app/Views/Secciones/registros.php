<?= $header ?>

<style>
    .container .row .container1 {
        width: 100%;
        height: 50%;

    }

    .container .row .container1 .col-sm-4-1 {

        margin: auto;
        width: 45%;
        text-align: center;
    }

    .container .row .container1 .col-sm-4-1 table {
        border-collapse: collapse;
        border: solid black;
    }



    .container .row .container1 .col-sm-4-2 {

        width: 45%;
        text-align: center;
        margin: auto;
    }

    .container .row .container1 .col-sm-4-2 table {
        border-collapse: collapse;
        border: solid black;
    }

    .container .row .container1 .col-sm-4 {

        margin: auto;
        width: 45%;
        text-align: center;
    }

    .container .row .container1 .col-sm-4 table {
        border-collapse: collapse;
        border: solid black;
    }

    .container .row .container1 .col-sm-4-3{
        margin: auto;
        width: 45%;
        text-align: center;
    }

    .container .row .container1 .col-sm-4-3 table {
        border-collapse: collapse;
        border: solid black;
    }
</style>
<a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>" >↼ Atrás</a>
<div class="container">
    
    <div class="row">

        <div class="container1">
        <div class="col-sm-4-1">
                <h3>Usuarios</h3>
                <a class="btn btn-success" href="#">Editar tabla</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nombre de Usuario</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td><?= $usuario["nombre"] ?></td>
                                <td><?= $usuario["apellido"] ?></td>
                                <td><?= $usuario["usuario"] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-4-1">
                <h3>Autores</h3>
                <a class="btn btn-success" href="#">Editar tabla</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nacionalidad</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($autores as $autor) : ?>
                            <tr>
                                <td><?= $autor["Nombre"] ?></td>
                                <td><?= $autor["Apellido"] ?></td>
                                <td><?= $autor["Nacionalidad"] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>



            <div class="col-sm-4-2">
                <h3>Editoriales</h3>
                <a class="btn btn-success" href="#">Editar tabla</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Editorial</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($editoriales as $editorial) : ?>
                            <tr>
                                <td><?= $editorial["Id"] ?></td>
                                <td><?= $editorial["Nombre"] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>



            <div class="col-sm-4">
                <h3>Carreras académicas</h3>
                <a class="btn btn-success" href="#">Editar tabla</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Carrera</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($carreras as $carrera) : ?>
                            <tr>
                                <td><?= $carrera["Id"] ?></td>
                                <td><?= $carrera["Carrera"] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-4-3">
                <h3>Tipo de documentos digitales</h3>
                <a class="btn btn-success" href="#">Editar tabla</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Tipos de documento digital</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($tipo_documentos as $tipodoc) : ?>
                            <tr>
                                <td><?= $tipodoc["Id"] ?></td>
                                <td><?= $tipodoc["tipo_textodigital"] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>