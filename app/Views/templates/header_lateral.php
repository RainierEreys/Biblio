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
    <main>

        <style>
            @charset "utf-8";

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
                width: max(8%, 200px);
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
                background: aqua
            }

            .lateral ul {
                list-style: none;
                padding-left: 0;
                margin-top: 0;
            }

            .lateral ul li {
                display: block;
                position: relative;
                padding: 8px 10px;
                margin-left: 0;
                border-bottom: 1px solid #060696
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
                background: blue;
                color: white;
            }
        </style>

</head>

<div class="lateral">
    <header>Indice</header>
    <ul class="menuVert">
        <li><a href="#">item 1</a></li>
        <li><a href="#">item 2</a></li>
        <li><a href="#">item 3</a></li>
        <li><a href="/">item 4</a></li>
    </ul>
</div>
<div class="principal">
    Aquí está el contenido de este bloque
    Rellena con suficiente espadio para que supere
    la altura de la pantalla y aparezca el scroll
</div>