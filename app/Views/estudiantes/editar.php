<?php

$CodigoEstudiante = $datos[0]["Codigo_estudiante"];
$Cedula = $datos[0]["Cedula"];
$Nombre = $datos[0]["Nombre"];
$Apellido = $datos[0]["Apellido"];
$Telefono = $datos[0]["Telefono"];
$Email = $datos[0]["Email"];

?>

<?= $header ?>


<style>
    .card{
        position: inherit;
        margin-left: 250px;
        margin-right: 100px;
    }

    .caja-info{
        width: 200px;
        position: inherit;
        margin-top: 300px;
        margin-left: 20px;
        float: left;
        text-align: center;
        font-size: 14px;
    }

    .caja-info p{
        text-align: left;
    }
</style>
<div class="caja-info">
    <h6>Códigos de carreras</h6>
    <p>INGINF-Ingeniería Informática</p>
    <p>INGM-Ingeniería Marítima</p>
    <p>INGAMB-Ingeniería Ambiental</p>
    <p>ADM-Licenciatura en Administración</p>
    <p>TUR-Licenciatura en Turismo</p>
    <p>TSUACU-TSU en Transporte</p>
    <p>VELPRE-Velero de preparacion</p>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Editar datos del estudiante</h4>

        <p class="card-text">

        <form method="post" action="<?= site_url("/actualizar-estudiante") ?>" enctype="multipart/form-data">

        <input type="text" id="Codigo_estudiante" name="Codigo_estudiante" hidden="" value="<?php echo $CodigoEstudiante ?>" >

            <div class="form-group">
                <label>Cédula: </label>
                <input type="text" value="<?php echo $Cedula ?>" name="Cedula" class="form-control">
            </div>
            <div class="form-group">
                <label>Nombre: </label>
                <input type="text" value="<?php echo $Nombre ?>" name="Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Apellido: </label>
                <input type="text" value="<?php echo $Apellido ?>" name="Apellido" class="form-control">
            </div>
            <div class="form-group">
                <label>Código de carrera:</label>
                <select name="Cod_carrera" id="Cod_carrera" class="form-control input-lg">
                    <option value="">Elegir código de carrera:</option>
                    <?php foreach($carrera as $row){
                        echo '<option value="'.$row["Codigo_carrera"].'">'.$row["Codigo_carrera"].'</option>';
                    } ?>
                </select>
                <br/>
            </div>
            <div class="form-group">
                <label>Teléfono: </label>
                <input type="text" value="<?php echo $Telefono ?>" name="Telefono" class="form-control">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="text" value="<?php echo $Email ?>" name="Email" class="form-control">
            </div>
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
        </form>
        </p>
    </div>
</div>

<?= $footer ?>