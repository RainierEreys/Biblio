<?= $header ?>

<style>
    .card{
        position: inherit;
        margin-left: 250px;
        
    }
</style>

<div class="card">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del autor</h4>
        <p class="card-text">

        <form method="post" action="<?= site_url("/guardar-autor") ?>" enctype="multipart/form-data">

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
            
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
        </form>
        </p>

    </div>
</div>
        <?= $footer ?>