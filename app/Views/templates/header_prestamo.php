<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= base_url(); ?>/public/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/publicassets/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/publicassets/js/plugins/select2/select2-bootstrap.min.css">
    <title>Document Title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      

        body {
            height: 100%;
            background-color: #a1d2ce;
        }

        html {
            height: 100%;
        }

        main {
            width: 80%;
            height: auto;
            margin: 0 auto;
            background: aliceblue;
        }

        .lateral {
            box-sizing: border-box;
            width: max(15%, 250px);
            display: inline-block;
            position: fixed;
            padding-top: 30px
        }

        .principal {
            margin-left: max(10%, 200px);
            padding: 0 10px;
            height: 100%;
            text-align: justify;
            background: white;
        }

        /*Hasta aquí ya tenemos un menu lateral fijo,
    ahora viene ponerlo bonito*/

        .lateral header {
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
            border-bottom: 1px solid black;
            background: aqua;
            border-left: 1px solid black;
            border-right: 1px solid white;
        }

        .lateral ul {
            list-style: none;
            padding-left: 0;
            margin-top: 0;
            border-left: 1px solid black;
            border-right: 1px solid white;
            background: #319FFF;
        }

        .lateral ul li {
            display: block;
            position: relative;
            padding: 8px 10px;
            margin-left: 0;
            border-bottom: 1px solid #060696
        }

        .lateral ul li ul {
            display: none;
            position: absolute;
        }

        .lateral ul li:hover>ul {
            display: block;
        }

        .lateral ul li ul li {
            position: relative;
        }

        .lateral ul li ul {
            right: 0px;
            top: auto;
        }

        .lateral ul li a {
            color: black;
            text-decoration: none;
        }

        .lateral ul li a:after {
            content: ' ';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .lateral ul li:hover,
        .lateral ul li:hover a {

            color: white;
        }
    </style>
</head>

<body>


    

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="BibliotecaUMC">Biblioteca-UMC</a>            
        </div>
    </nav>
    <br />
    <br />

    <div class="lateral">
            <header>Menú</header>
            <ul class="menuVert">
                <li><a href="<?= base_url(); ?>/crearlibro">Registrar texto físico</a></li>
                <li><a href="<?= base_url(); ?>/crearlibrodigi">Registrar texto digital</a></li>
                <li><a href="<?= base_url(); ?>/crear-estudiante">Registrar estudiante</a></li>
                <li><a href="/">Consultar ></a>
                    <ul>
                        <li><a href="<?= base_url(); ?>/listarlibro">Consultar biblioteca física</a></li>
                        <li><a href="<?= base_url(); ?>/listarlibrodigi">Consultar biblioteca digital</a></li>
                        <li><a href="<?= base_url(); ?>/listar-prestamos">Consultar préstamos</a></li>
                        <li><a href="<?= base_url(); ?>/listar-estudiantes">Consultar estudiantes</a></li>
                    </ul>
                </li>
            </ul>
        </div>