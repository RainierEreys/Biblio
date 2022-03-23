<?= $header ?>

<?php 

$user_session = session();

?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: arial;
    }


    div div form {
        width: 400px;
        height: 360px;
        margin: auto;
        background: #4e4d4d;
        margin-top: 180px;
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
    <?php print_r($user_session->nombre); ?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">

            <form action="<?php echo base_url("/inicio-sesion") ?>" method="POST">
                
                
                <br />
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" required="" class="form-control">
                <label for="passwordd">Contraseña:</label>
                <input type="text" name="password" required="" class="form-control">
                <br>
                <button class="btn btn-primary">Entrar</button>
            </form>

        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?= $footer ?>