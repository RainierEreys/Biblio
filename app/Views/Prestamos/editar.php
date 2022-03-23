<?php

$Idprestamo = $datos[0]["Id_prestamo"];
$Idestudiante = $datos[0]["Id_estudiante"];

$fechaprestamo = $datos[0]["fecha_prestamo"];
$fechadevolucion = $datos[0]["fecha_devolucion"];
$estatus = $datos[0]["estatus"];
$observaciones = $datos[0]["observaciones"];
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
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Editar datos del libro</h4>
        <p class="card-text">

        
        
        <form method="post" action="<?= site_url("/actualizar-prestamo") ?>" enctype="multipart/form-data">

            <input type="text" id="Id_prestamo" name="Id_prestamo" hidden="" value="<?php echo $Idprestamo ?>">

            <label>Código del estudiante solicitante</label>
            <select name="Id_estudiante" id="Id_estudiante" class="form-control input-lg">
                <option value="<?php echo $Idestudiante ?>">Código de estudiante:</option>
                <?php foreach ($estudiante as $row) {
                    echo '<option value="' . $row["Codigo_estudiante"] . '">' . $row["Codigo_estudiante"] . '</option>';
                } ?>
            </select>
            <br/>
            <label>Libro solicitado</label>
            <select name="libro" id="libro" class="form-control input-lg">
                <option value="">Seleccionar libro:</option>
                <?php foreach ($libro as $row) {
                    echo '<option value="' . $row["titulo"] . " " . $row["fecha_publicacion"] . '">' . $row["titulo"] . " " . $row["fecha_publicacion"] . '</option>';
                } ?>
            </select>
            <br/>
            <a class="btn btn-primary" href="crearlibro">Agregar libro</a>
            <br/>
            <br/>
            <div class="form-group">
                <label>Fecha de préstamo</label>
                <input type="date" value="<?php echo $fechaprestamo ?>" name="fecha_prestamo" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label>Fecha de devolución</label>
                <input type="date" value="<?php echo $fechadevolucion ?>" name="fecha_devolucion" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label>Fecha de entrega</label>
                <input type="date" value="" name="fecha_entrega" class="form-control">
            </div>
            <br/>
            <label>Estatus</label>
            <select name="estatus" id="estatus" class="form-control input-lg" style="width: 400px;">
                <option value="<?php echo $estatus ?>">Seleccionar condición:</option>
                <?php foreach ($estatu as $row) {
                    echo '<option value="' . $row["Condicion"] . '">' . $row["Condicion"] . '</option>';
                } ?>
            </select>
            <br/>
            <div class="form-group">
                <label>Cantidad</label>
                <input type="text" value="<?php echo $cantidad ?>" name="cantidad" class="form-control">
            </div>
            <br/>
            <div class="form-group">
                <label>Observaciones</label>
                <textarea value="<?php echo $observaciones ?>" name="observaciones" class="form-control"></textarea>
            </div>  
            
                <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
   
        </form>
        
        </p>
    </div>
</div>
        <?= $footer ?>