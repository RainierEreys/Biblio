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
        nav{
            background-color: #319FFF;
        }
        
        nav .container-fluid .mainmenubtn {
            background-color: #495057;
            font-family: Arial;
            font-size: 18px;
            border-radius: 7px;
            color: white;
            border: none;
            cursor: pointer;
            padding: 20px;
            margin-top: 6px;
        }

        nav .container-fluid .dropdown .mainmenubtn:hover {
            background-color: blue;
        }

        nav .container-fluid .dropdown {
            margin-right: 30px;
            position: relative;
            display: inline-block;
            background-color: #319FFF;
        }

        nav .container-fluid .dropdown a{
            color: white;
        }

        nav .container-fluid .dropdown .dropdown-menu {
            display: none;
            background-color: #319FFF;
            max-width: 175px;
        }

        nav .container-fluid .dropdown .dropdown-menu a {
            color: white;
            padding: 10px;
            font-size: 13px;
            text-decoration: none;
            background-color: #319FFF;
            color: white;
            display: block;
        }

        nav .container-fluid .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>

    <?php if (session("mensaje")) : ?>

    <div class="alert-danger" role="alert">
        <?php echo session("mensaje"); ?>
    </div>
    <?php endif; ?>

    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="BibliotecaUMC">Biblioteca-UMC</a>
            <div class="dropdown">

            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="margin-right: 45px;"data-bs-toggle="dropdown" aria-expanded="false">
                    Opciones
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Iniciar como Superusuario</a></li>
                    <li><a class="dropdown-item" href="login">Iniciar sesion</a></li>
                    
                </ul>
            </div>

            </div>

            </form>
        </div>
        </div>
    </nav>
    <br />
    <br />