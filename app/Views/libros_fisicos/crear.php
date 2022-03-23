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
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form method="post" action="<?= site_url("/guardar") ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Titulo </label>
                <input type="text" value="<?= old("titulo"); ?>" name="titulo" class="form-control">
            </div>
            <br />
            <div class="form-group">
                <label>Año de publicación </label>
                <input type="text" value="<?= old("fecha_publicacion"); ?>" name="fecha_publicacion" class="form-control">
            </div>
            <br />
            <label>Autor</label>
            <select name="autor" id="Autor" class="form-control input-lg">
                <option value="">Seleccionar autor:</option>
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
                <input type="text" value="<?= old("edicion"); ?>" name="edicion" class="form-control">
            </div>
            <br />
            <label>Editorial</label>
            <select name="editorial" id="Editorial" class="form-control input-lg">
                <option value="">Seleccionar editorial:</option>
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
                <input type="text" value="<?= old("ciudad"); ?>" name="ciudad" class="form-control">
            </div>
            <br />
            <div class="form-group">
                <label>Cantidad </label>
                <input type="text" value="<?= old("cantidad"); ?>" name="cantidad" class="form-control">
            </div>
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
        </form>
        </p>
    </div>
</div>

<?= $footer ?>