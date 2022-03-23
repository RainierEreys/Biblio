<?php

$Idlibro = $datos[0]["Id_libro"];
$titulo = $datos[0]["titulo"];
$fecha = $datos[0]["fecha_publicacion"];
$disponibilidad = $datos[0]["disponibilidad"];
$autor = $datos[0]["autor"];
$edicion = $datos[0]["edicion"];
$editorial = $datos[0]["editorial"];
$ciudad = $datos[0]["ciudad"];
$cantidad = $datos[0]["cantidad"];

?>

<?= $header ?>

<style>

    .card{
        
        position: inherit;
        margin-left: 250px;
        margin-right: 100px;
    }
</style>

<div class="card">
    
    <div class="card-body">
        <h4 class="card-title">Formulario de editar</h4>
        <!--<?php print_r($datos); ?>-->
        <p class="card-text">

        <form method="post" action="<?= site_url("/actualizarlibro") ?>" enctype="multipart/form-data">

            <input type="text" id="Id_libro" name="Id_libro" hidden="" value="<?php echo $Idlibro ?>" >

            <div class="form-group">
                <label>Titulo </label>
                <input type="text" value="<?php echo $titulo ?>" name="titulo" class="form-control">
            </div>

            <br />
            <div class="form-group">
                <label>Año de publicación </label>
                <input type="text" value="<?php echo $fecha ?>" name="fecha_publicacion" class="form-control">
            </div>

            <br />
            <label>Autor</label>
            <select name="autor" id="Autor" class="form-control input-lg">
                <option value="<?php echo $autor ?>">Seleccionar autor:</option>
                <?php foreach ($Autores as $row) {
                    echo '<option value="' . $row["Nombre"] . " " . $row["Apellido"] . '">' . $row["Nombre"] . " " . $row["Apellido"] . '</option>';
                } ?>
            </select>
            <br/>
            <a class="btn btn-primary" href="crear-autor">Agregar autor</a>

            <br/>
            <br />
            <div class="form-group">
                <label>Edición </label>
                <input type="text" value="<?php echo $edicion?>" name="edicion" class="form-control">
            </div>

            <br />
            <label>Editorial</label>
            <select name="editorial" id="Editorial" class="form-control input-lg">
                <option value="<?php echo $editorial?>">Seleccionar editorial:</option>
                <?php foreach ($Editorial as $row) {
                    echo '<option value="' . $row["Nombre"] . '">' . $row["Nombre"] . '</option>';
                } ?>
            </select>
            <br/>
            <a class="btn btn-primary" href="crear-editorial">Agregar editorial</a>

            <br/>
            <br />
            <div class="form-group">
                <label>Ciudad </label>
                <input type="text" value="<?php echo $ciudad ?>" name="ciudad" class="form-control">
            </div>

            <br />
            <div class="form-group">
                <label>Cantidad </label>
                <input type="text" value="<?php echo $cantidad ?>" name="cantidad" class="form-control">
            </div>
            
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
        </form>
        </p>
    </div>
</div>

<?= $footer ?>