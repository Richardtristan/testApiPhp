<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="icon" type="image/png" sizes="1300x1300" href="/../../public/assets/img/avatar.png">
    <link rel="stylesheet" href="/../../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <script src="https://kit.fontawesome.com/767e5fc4a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/../../public/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/../../public/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/../../public/assets/css/Registration-Form-with-Photo.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <a class="py-3 px-0 px-lg-3 rounded" href="/logout">
            <button class="btn btn-danger" type="button">Logout</button>
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                                     href="/login">home</a></li>
                <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/lucky">Lucky chest</a></li>
                <li class="nav-item"></li>
                <li class="nav-item mx-0 mx-lg-1"></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/pokedex">My
                        pokedex</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="pokedex" style="width: 100%; height: auto; background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
<div class="container" style="padding-top: 5%" >
    <div class="row g-2 mx-auto p-4 w-100 " style="width: 100%">
        <?php foreach ($myPokemons as $data){
        $api->pokemon($data);
        $pokemon = $api->callApi(); ?>
        <div class="col-4">
        <div class="card " style="margin-left: auto; margin-right: auto;">
            <div class="text-center ">Number: <?php echo $pokemon->id ?></div>
            <div class="row">
                <img style="padding-right: 0" class="card-text col-6" src="<?php echo $pokemon->sprites->front_shiny ?>" alt="Card image cap"/>

                <div class="card-text col-6 " style="padding-left: 0; padding-top: 20%"><?php echo $pokemon->name ?></div>
            </div>
            <div class=" row justify-content-around">
                <?php foreach ($pokemon->types as $type) { ?>

                    <div class="card-text col-auto"><?php echo $type->type->name ?></div>
                <?php } ?>
            </div>
            <hr style=" width: 80%; background-color: black">
            <div class=" row justify-content-around">
                <?php foreach ($pokemon->abilities as $ability) { ?>

                    <div class="card-text col-auto pb-2"><?php echo $ability->ability->name ?></div>
                <?php }?>

            </div>
        </div>
        </div>
        <?php } ?>
    </div>
    </div>
</section>
<footer class="text-center footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-uppercase">github</h4><a
                        class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="https://github.com/Richardtristan target="_blank""><i
                            class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>
<div class="text-center text-white copyright py-4">
    <div class="container"><small>Copyright © Tristan RICHARD 2021</small></div>
</div>
<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
<script src="/../../public/assets/js/main.js"></script>
</body>

</html>