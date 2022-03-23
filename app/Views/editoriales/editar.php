<?= $header ?>


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos de la editorial</h4>
        <p class="card-text">

        <form method="post" action="<?= site_url("/actualizar-editorial") ?>" enctype="multipart/form-data">

        <input type="hidden" name="Id_libro" value="<?= site_url($autor[ "Id"]); ?>" >

        <div class="form-group">
                <label>Editorial: </label>
                <input type="text" value="<?= old("Nombre"); ?>" name="Nombre" class="form-control">
            </div>
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("listar-editorial"); ?>">Cancelar</a>
        </form>
        </p>

    </div>
</div>
<?= $footer ?>