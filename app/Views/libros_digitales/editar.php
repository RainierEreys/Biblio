<?= $header ?>

<?php print_r($libro);
?>
Formulario de editar
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form method="post" action="<?= site_url("/actualizarlibro-digi") ?>" enctype="multipart/form-data">

        <input type="hidden" name="Id" value="<?= site_url($libro[ "Id"]); ?>" >

            <div class="form-group">
                <label>Titulo </label>
                <input type="text" name="titulo" value="<?= $libro[ "titulo"]; ?>" class="form-control">
            </div>

            <div>
                <label for="imagen" class="form-label">Imagen: </label>
                <input type="file" class="form-control-file" name="imagen" id="imagen">
            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("listarlibrodigi"); ?>" >Cancelar</a>
        </form>
        </p>

    </div>
</div>
<?= $footer ?>