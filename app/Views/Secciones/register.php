<?= $header ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: arial;
    }

    div div{
        margin: auto;
    }

    div div form {
        width: 400px;
       
        position: relative;
        background: #4e4d4d;
        margin-top: 18px;
        box-shadow: 7px 13px 37px #000;
        padding: 20px 30px;
        border-top: 4px solid #017bab;
        color: white;
    }

    div div h1 {
        margin: 0;
        text-align: center;
        height: 40px;
        margin-bottom: 30px;
        border-bottom: 1px solid;
        font-size: 20px;
    }

    div div form .form-control {
        width: 100%;
        border: 1px solid #017bab;
        margin-bottom: 15px;
        padding: 11px 10px;
        background: #adb5bd;
        font-size: 14px;
        font-weight: bold;
    }

    div div form button {
        width: 100%;
        height: 40px;
        background: #017bab;
        border: none;
        color: white;
        margin-bottom: 5px;

    }

</style>

<div class="container">

    
        <div class="col-sm-4"></div>
        <div class="col-sm-4">

        <?php if(isset($validation)){?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors();?>
            </div>
        <?php } ?>

            <form method ="POST" action="<?php echo base_url(). '/crear-usuario' ?>">
                
                
                <br />
                <label for="usuario">Nombre:</label>
                <input type="text" value="<?= old("nombre"); ?>" name="nombre" required="" class="form-control">
                <label for="usuario">Apellido:</label>
                <input type="text" name="apellido" value="<?= old("apellido"); ?>" required="" class="form-control">
                <label for="usuario">Nombre de usuario:</label>
                <input type="text" name="usuario" value="<?= old("usuario"); ?>" required="" class="form-control">
                <label for="passwordd">Contraseña:</label>
                <input type="text" name="password" value="<?= old("password"); ?>" required="" class="form-control">
                <label for="passwordd">Confirmar contraseña:</label>
                <input type="text" name="valid_pass" value="<?= old("valid_pass"); ?>" required="" class="form-control">
                <label>Rol:</label>
                <select name="id_rol" id="id_rol" class="form-control" required>
                    <option value="">Elegir rol:</option>
                    <?php foreach($roles as $row){
                        echo '<option value="'.$row["id"].'">'.$row["nombre_rol"].'</option>';
                    } ?>
                </select>
                <br>
                <button class="btn btn-primary" type="submit">Registrar</button>
            </form>

        </div>
        <div class="col-sm-4"></div>
    
</div>

<?= $footer ?>