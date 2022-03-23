<?= $header ?>


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del autor</h4>
        <p class="card-text">

        <form method="post" action="<?= site_url("/actualizar-autores") ?>" enctype="multipart/form-data">

        <input type="hidden" name="Id_libro" value="<?= site_url($autor[ "Id"]); ?>" >

        <div class="form-group">
                <label>Nombre: </label>
                <input type="text" value="<?= old("Nombre"); ?>" name="Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Apellido: </label>
                <input type="text" value="<?= old("Apellido"); ?>" name="Apellido" class="form-control">
            </div>
            <div class="form-group">
                <label>Nacionalidad </label>
                <input type="text" value="<?= old("Nacionalidad"); ?>" name="Nacionalidad" class="form-control">
            </div>
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("listar-autores"); ?>">Cancelar</a>
        </form>
        </p>

    </div>
</div>
<?= $footer ?>