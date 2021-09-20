<body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <a class="nav-link py-3 px-0 px-lg-3 btn-sm rounded bg-danger text-white" href="/logout"
           style="padding: 1% !important;">Logout</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a></li>
                <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/lucky">Lucky chest</a></li>
                <li class="nav-item"></li>
                <li class="nav-item mx-0 mx-lg-1"></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/pokedex">My
                        pokedex</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="pokedex" style="width: 100%; height: 100%; background-color: #FE5858">
    <h2 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;"><br><strong>My
            pokedex</strong><br><br></h2>
    <div class="container" style="padding-top: 5%">

        <?php
        if ($myPokemons != []) {?>
            <div class="row g-2 mx-auto p-12 w-100" style="width: 100%">
            <?php foreach ($myPokemons as $data) {
                $list->pokemon($data);
                $pokemon = $list->callApi();
                $story->pokemonSpecies($data);
                $stories = $story->callApi();

                $phrase = preg_replace('/\f/', ' ', $stories->flavor_text_entries[0]->flavor_text);

                ?>
                <div  class="col-sm-6 col-md-4 col-xl-4 card-<?php echo $pokemon->id ?>">
                <div class="card bg-secondary card-<?php echo $pokemon->id ?>"
                     style="margin-left: auto; margin-right: auto;">
                    <div class="text-center text-white card-<?php echo $pokemon->id ?>">
                        Number: <?php echo $pokemon->id ?></div>
                    <div class="row card-<?php echo $pokemon->id ?>">
                        <img id="img-<?php echo $pokemon->id ?>"  style="margin-left: auto; margin-right: auto; width: auto ; height: 50%"
                             class="imgHover card-text col-1 card-<?php echo $pokemon->id ?>"
                             src="<?php echo $pokemon->sprites->front_default ?>" alt="Card image pokemon"
                             data-shiny="<?php echo $pokemon->sprites->front_shiny ?>"
                             data-default="<?php echo $pokemon->sprites->front_default ?>"/>
                        <?php if ($listDouble[$data]){?>
                            <div style="margin-left: auto; margin-right: auto; padding-top: 5%" class=" nameHovercard-text col-6 text-center text-white"><?php echo $listDouble[$data];?> time(s) catch</div>
                       <?php }?>
                        <div data-name="<?php echo strtoupper($pokemon->name) ?>" data-story="<?php echo $phrase; ?>"
                             id="pokemonName-<?php echo $pokemon->id ?>"
                             class="nameHover card-text col-6 text-white card-<?php echo $pokemon->id ?>"
                             style="margin-left: auto; margin-right: auto;padding-left: 0"><?php echo strtoupper($pokemon->name) ?></div>
                    </div>
                    <div class=" row justify-content-around card-<?php echo $pokemon->id ?>">
                        <?php foreach ($pokemon->types as $type) { ?>

                            <div style="<?php colortype($type->type->name);?> margin: 4% !important;"
                                 class="card-text col-auto text-white card-<?php echo $pokemon->id ?>"><?php echo ucfirst($type->type->name) ?></div>
                        <?php } ?>
                    </div>
                    <hr class="card-<?php echo $pokemon->id ?>" style=" width: 80%; background-color: black">
                    <div class="card-<?php echo $pokemon->id ?> row justify-content-around text-white">
                        <?php foreach ($pokemon->abilities as $ability) { ?>

                            <div class="card-<?php echo $pokemon->id ?> typoAbility card-text col-auto pb-2"><?php echo ucfirst($ability->ability->name) ?></div>
                        <?php } ?>

                    </div>
                </div>
                </div>

            <?php }
        } else { ?>
            <div class="card text-center" style="margin-left: auto; margin-right: auto;">
                <img class="card-img-top" src="/../../public/assets/img/pikachu-pleure.gif"
                     style="width: 25%; height: auto; margin-left: auto; margin-right: auto !important;"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Pokedex empty </h5>
                    <p class="card-text text-center">You dont have any Pokemons.</p>
                    <a href="/lucky" class=" btn btn-primary text-center">Go test your chance</a>
                </div>
            </div>
            </div>
        <?php } ?>
    </div>
</section>
<footer style="bottom: 0;width: 100%; !important;" class="text-center footer">
    <div style="padding-bottom: 5%" class="container ">
        <div class="row">
            <div class="col">
                <h4 class="text-uppercase">github</h4><a
                        class="btn btn-outline-light text-center btn-social rounded-circle" role="button"
                        href="https://github.com/Richardtristan" target="_blank"><i
                            class="fab fa-github"></i></a>
            </div>
        </div>
    </div>

<div class="text-center text-white copyright py-4">
    <div class="container"><small>Copyright © Tristan RICHARD 2021</small></div>
    <div style="font-size: 10px; padding: 2%" class="container">Vos données personnelles sont conservées pour une
            durée maximale de 3 ans. En application de la loi Informatique et Libertés du 6 janvier 1978 modifiée par la
            loi du 9 août 2004 et du Règlement Général sur la Protection des Données, entrée en vigueur le 25 mai 2018,
            vous disposez d’un droit d’accès, de rectification, de modification et de suppression concernant les données
            qui vous concernent. Vous pouvez contacter le responsable pour exercer ce droit : richard.tristan.93@gmail.com. Nous mettons tout en oeuvre pour protéger vos données personnelles et empêcher
            leur diffusion. Néanmoins, si un piratage venait à entraîner une fuite de données, le responsable des
            données s’engage à prévenir toutes personnes victime d’une violation de ses données à caractère personnel.
            Parallèlement, une notification documentée de cette violation sera également adressée à la CNIL dans un
            délai maximum de 72 heures après sa découverte.</div>
</div>
</footer>
<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
<script src="/../../public/assets/js/main.js"></script>
</body>

</html>