<body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <a class="nav-link py-3 px-0 px-lg-3 btn-sm rounded bg-danger text-white" href="/logout" style="padding: 1% !important;">Logout</a>
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
<section id="lucky"
         style=" padding-top: 15%; width: 100%; height: auto; background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
    <div class="container">
        <h1 class="text-center text-dark bg-light rounded">Try to catch 1 pokemon every 2 hours</h1>
        <?php if ($issetVar && $date < $dateNow) {
            $list->pokemon($randId);
            $pokemon = $list->callApi();
            $name = ucfirst($pokemon->name);
            echo "<div style='display: block' class='myModal modal is-valid' tabindex='-1'></div>
                                               <div class=' myModal modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='text-center modal-title'>WIN</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body row container'>
                                                        <p class='text-center'>You receive</p>
                                                        <img class= 'text-center modal-header col-4' src='{$pokemon->sprites->front_default}' alt='Card image pokemon'/>
                                                        <p class='modal-dialog col-4'>$name</p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <a  class='btn btn-primary' href='/pokedex'>My Pokedex</a>
                                                        <a  class='btn btn-danger' href='/lucky'>close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
        } else if ($issetVar && $date > $dateNow) {

            echo "<div id='modalLucky' style='display: block' class='myModal modal is-valid' tabindex='-1'>
                                               <div class='myModal modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title'>come back later</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <p>you haven't waited long enough. Date of next capture : $hour</p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary ' data-bs-dismiss='modal'>Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
        } ?>
        <form class="w-50 h-50" method="post"
              style="padding-top: 5%;  display: block; margin-left: auto; margin-right: auto; ">
            <input name="pokemon" data-toggle="tooltip" data-placement="top" title="Click on me" type="image"
                   src="/public/assets/img/pokeball.png" alt="Submit" width="100%" height="100%">
        </form>
    </div>
</section>
<footer style="bottom: 0;width: 100%;" class="text-center footer">
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