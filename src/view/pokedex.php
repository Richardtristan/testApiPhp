

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
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/pokedex">My pokedex</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="pokedex" style="width: 100%; height: auto; background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
<h2 class="text-uppercase text-center text-secondary mb-0" style="padding: 0px;margin: 40px;"><br><strong>My pokedex</strong><br><br></h2>

    <div class="container" style="padding-top: 5%" >
        <div class="row g-2 mx-auto p-4 w-100 " style="width: 100%">
            <?php foreach ($myPokemons as $data){
                $api->pokemon($data);
                $pokemon = $api->callApi(); ?>
                <div class="col-4">
                    <div class="card " style="margin-left: auto; margin-right: auto;">
                        <div class="text-center ">Number: <?php echo $pokemon->id ?></div>
                        <div class="row">
                            <img id="img-<?php echo $pokemon->id ?>" style="padding-right: 0" class="card-text col-6 jsHover" src="<?php echo $pokemon->sprites->front_default ?>" alt="Card image pokemon" data-shiny="<?php echo $pokemon->sprites->front_shiny ?>" data-default="<?php echo $pokemon->sprites->front_default ?>"/>

                            <div class="card-text col-6 " style="padding-left: 0; padding-top: 20%"><?php echo $pokemon->name ?></div>
                        </div>
                        <div class=" row justify-content-around">
                            <?php foreach ($pokemon->types as $type) { ?>

                                <div class="card-text col-auto <?php colortype($api);?>"><?php echo $type->type->name ?></div>
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