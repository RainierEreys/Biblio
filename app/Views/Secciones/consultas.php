<?= $header ?>

<style>
    .container-cartas-1 {
        width: 100%;
        height: 50%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: auto;
        min-height: calc(100% -4rem);
    }

    .container-cartas-2 {
        width: 100%;
        height: 50%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: auto;
        min-height: calc(100% -4rem);
    }

    .container-cartas-1 .cartas-home .card-1 {
        width: 330px;
        height: 400px;
        border-radius: 8px;
        box-shadow: 2px 2px 5px #343a40;
        overflow: hidden;
        margin: 20px;
        text-align: center;
        transition: all 0.25s;
        background-color: #0d6efd;
    }

    .container-cartas-2 .cartas-home .card-1 {
        width: 330px;
        height: 400px;
        border-radius: 8px;
        box-shadow: 2px 2px 5px #343a40;
        overflow: hidden;
        margin: 20px;
        text-align: center;
        transition: all 0.25s;
        background-color: #0d6efd;
    }

    .container-cartas-1 .cartas-home .card-1:hover {
        transform: translateY(-7px);
        box-shadow: crimson;
    }

    .container-cartas-2 .cartas-home .card-1:hover {
        transform: translateY(-7px);
        box-shadow: crimson;
    }

    .container-cartas-1 .cartas-home .card-1 .card-img-top-1 {
        width: 330px;
        height: 220px;
    }

    .container-cartas-2 .cartas-home .card-1 .card-img-top-1 {
        width: 330px;
        height: 220px;
    }

    .container-cartas-1 .cartas-home .card-1 .card-body-1 .card-title-1 {
        font-weight: 600;
        color: blanchedalmond;
        margin-top: 8px;
        font-family: Verdana;
        font-size: 15px;
    }

    .container-cartas-2 .cartas-home .card-1 .card-body-1 .card-title-1 {
        font-weight: 600;
        color: blanchedalmond;
        margin-top: 8px;
        font-family: Verdana;
        font-size: 15px;
    }

    .container-cartas-1 .cartas-home .card-1 .card-body-1 .card-text-1 {
        padding: 0 1rem;
        font-size: 16px;
        font-weight: 300;
        font-family: Arial;
        justify-self: unset;
    }

    .container-cartas-2 .cartas-home .card-1 .card-body-1 .card-text-1 {
        padding: 0 1rem;
        font-size: 16px;
        font-weight: 300;
        font-family: Arial;
        justify-self: unset;
    }

    .container-cartas-1 .cartas-home .card-1 .card-body-1 a {
        font-weight: 500;
        text-decoration: none;
        background-color: #495057;
        color: white;
    }

    .container-cartas-2 .cartas-home .card-1 .card-body-1 a {
        font-weight: 500;
        text-decoration: none;
        background-color: #495057;
        color: white;
    }
</style>

<a class="btn btn-info" style="margin-left: 20px; width: 100px; height: 50px;" href="<?= base_url("BibliotecaUMC"); ?>" >↼ Atrás</a>
<br/>
<div class="container-cartas-1">
    <div class="cartas-home">
        <div class="card-1">
            <img class="card-img-top-1" src="<?= base_url(); ?>/public/assets/images/consultalibro.jpg" alt="Card image cap">
            <div class="card-body-1">
                <h5 class="card-title-1">CONSULTAR BIBLIOTECA FISICA</h5>
                <p class="card-text-1">Verifica la disponibilidad de los textos almacenados fisicamente en el catálogo.</p>
                <a href="<?= base_url(); ?>/listarlibro" class="btn btn-primary">¡Consultar!</a>
            </div>
        </div>
    </div>
    <div class="cartas-home">
        <div class="card-1">
            <img class="card-img-top-1" src="<?= base_url(); ?>/public/assets/images/textodigital.jpg" alt="Card image cap">
             <div class="card-body-1">
                <h5 class="card-title-1">CONSULTAR BIBLIOTECA DIGITAL</h5>
                <p class="card-text-1">Verifica la disponibilidad de los textos almacenados digitalmente en el catálogo.</p>
                <a href="<?= base_url(); ?>/listarlibrodigi" class="btn btn-primary">¡Consultar!</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-cartas-2">
    <div class="cartas-home">
        <div class="card-1">
            <img class="card-img-top-1" src="<?= base_url(); ?>/public/assets/images/consultapedido.jpg" alt="Card image cap">
            <div class="card-body-1">
                <h5 class="card-title-1">CONSULTAR PRÉSTAMO</h5>
                <p class="card-text-1">Verifica los préstamos insolventes.</p>
                <a href="<?= base_url(); ?>/listar-prestamos" class="btn btn-primary">¡Consultar!</a>
            </div>
        </div>
    </div>
        
    <div class="cartas-home">
        <div class="card-1">
            <img class="card-img-top-1" src="<?= base_url(); ?>/public/assets/images/consultaestudiante.jpg" alt="Card image cap">
            <div class="card-body-1">
                <h5 class="card-title-1" ">CONSULTAR ESTUDIANTE</h5>
                <p class="card-text-1">Consulta información de los estudiantes que hacen uso del servicio biblioteca y verifica su solvencia.</p>
                <a href="<?= base_url(); ?>/listar-estudiantes" class="btn btn-primary">¡Consultar!</a>
            </div>
        </div>
    </div>
</div>

        <?= $footer ?>