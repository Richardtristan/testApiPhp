
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <a class="nav-link py-3 px-0 px-lg-3 btn-sm rounded bg-danger text-white" href="/logout" style="padding: 1% !important;">Logout</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">home</a></li>
                <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/lucky">Lucky chest</a></li>
                <li class="nav-item"></li>
                <li class="nav-item mx-0 mx-lg-1"></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/pokedex">My pokedex</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="pokedex" style="width: 100%; height: auto; background-color: #FE5858">
<h2 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;"><br><strong>My pokedex</strong><br><br></h2>
    <div class="container" style="padding-top: 5%" >

            <?php if  ($myPokemons  != []) { var_dump($myPokemons); ?>
                <div class="row g-2 mx-auto p-12 w-100 " style="width: 100%">

                <?php foreach ($myPokemons as $data){
                $api->pokemon($data);
                $pokemon = $api->callApi();
                ?>
                <div class="col-4">

                    <div id="card-<?php echo $pokemon->id?>" class="card bg-secondary" style="margin-left: auto; margin-right: auto;">
                        <div class="text-center text-white">Number: <?php echo $pokemon->id ?></div>
                        <div class="row">
                            <img id="img-<?php echo $pokemon->id?>" style="padding-right: 0" class="card-text col-6 imgHover" src="<?php echo $pokemon->sprites->front_default ?>" alt="Card image pokemon" data-shiny="<?php echo $pokemon->sprites->front_shiny ?>" data-default="<?php echo $pokemon->sprites->front_default ?>"/>

                            <div class="card-text col-6 text-white" style="padding-left: 0; padding-top: 20%"><?php echo strtoupper($pokemon->name) ?></div>
                        </div>
                        <div class=" row justify-content-around">
                            <?php foreach ($pokemon->types as $type) { ?>

                                <div style="<?php colortype($type->type->name);?>margin: 3% !important;" class="card-text col-auto text-white"><?php echo ucfirst($type->type->name) ?></div>
                            <?php } ?>
                        </div>
                        <hr style=" width: 80%; background-color: black">
                        <div class=" row justify-content-around text-white">
                            <?php foreach ($pokemon->abilities as $ability) { ?>

                                <div class="typoAbility card-text col-auto pb-2"><?php echo ucfirst($ability->ability->name) ?></div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            <?php }
                }
            else {?>
                <div class="card text-center" style="margin-left: auto; margin-right: auto;">
                  <img class="card-img-top" src="/../../public/assets/img/pikachu-pleure.gif"  style="width: 25%; height: auto; margin-left: auto; margin-right: auto !important;" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Pokedex vide </h5>
                    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class=" btn btn-primary text-center">Go somewhere</a>
                  </div>
                </div>
        </div>
            <?php } ?>
    </div>
</section>
<footer class="text-center footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-uppercase">github</h4><a
                        class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="https://github.com/Richardtristan" target="_blank"><i
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