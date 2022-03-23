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
    <img class="card-img-top" src="holder.js/100px180/" alt="">

    <div class="card-body">
        <h4 class="card-title">Ingresar datos del estudiante</h4>

        <p class="card-text">

        <form method="post" action="<?= site_url("/guardar-estudiante") ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Cédula: </label>
                <input type="text" value="<?= old("Cedula"); ?>" name="Cedula" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre: </label>
                <input type="text" value="<?= old("Nombre"); ?>" name="Nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Apellido: </label>
                <input type="text" value="<?= old("Apellido"); ?>" name="Apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Código de carrera:</label>
                <select name="Cod_carrera" id="Cod_carrera" class="form-control" required>
                    <option value="">Elegir código de carrera:</option>
                    <?php foreach($carrera as $row){
                        echo '<option value="'.$row["Codigo_carrera"].'">'.$row["Codigo_carrera"].'</option>';
                    } ?>
                </select>
                <br/>
            </div>
            <div class="form-group">
                <label>Teléfono: </label>
                <input type="text" value="<?= old("Telefono"); ?>" name="Telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="text" value="<?= old("Email"); ?>" name="Email" class="form-control" required>
            </div>
            <br/>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-info" href="<?= base_url("BibliotecaUMC"); ?>">Cancelar</a>
        </form>
        </p>
    </div>
</div>

<?= $footer ?>