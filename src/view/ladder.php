<body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <?php if (!isset($_SESSION['idUser'])) {?>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Log in</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">Register</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a></li>
            </ul>
        </div>
        <?php } ?>
        <?php if (isset($_SESSION['idUser'])) {?>
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
        <?php } ?>
    </div>
</nav>

<section id="ladder" style=" background-color: #FE5858">

        <h2 class="text-uppercase text-center text-white mb-0" style="padding-top: 3%;"><br><strong>The best
                trainers</strong><br><br></h2>
    <div class="container" style=" min-height:auto;!important;">
        <div class="container" style="padding-top: 15%; padding-bottom: 15%">
            <?php if ($ladderPkm != []) { ?>
                <div class="row g-2 mx-auto p-12 " style=";height: 100% !important;">
                    <?php foreach ($ladderPkm as $data) { ?>
                        <div style="margin-left: auto; margin-right: auto;" class="col-sm-12 col-md-12 col-xl-12">
                            <?php $numPokemons = explode(",", $data[1]);
                            unset($numPokemons[0])
                            ?>
                            <div class="col-12">
                                <div class="card bg-secondary" style="margin-left: auto; margin-right: auto;">
                                    <h4 style=" padding: 2%" class="text-center text-white col-12 ">USERNAME : </h4>
                                    <div style="margin-right: 10%; margin-left: 10%">
                                    <div style="font-size: 28px; padding: 2%; background-color: #FFD622; border-radius: 10px;" class="text-center text-black col-12"><?php echo $data[0] ?></div>
                                    </div>
                                    <div style="font-size: 16px; padding: 2%" class="text-center text-white col-12">
                                        Pokemons : <?php echo count($numPokemons) ?></div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>

            <?php } ?>
        </div>
    </div>
</section>
<footer style="bottom: 0;width: 100%; height: auto; !important;" class="text-center footer">
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

    <div style="height: auto" class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright ?? Tristan RICHARD 2021</small></div>
        <div style="font-size: 10px; padding: 2%" class="container">Vos donn??es personnelles sont conserv??es pour une
            dur??e maximale de 3 ans. En application de la loi Informatique et Libert??s du 6 janvier 1978 modifi??e par la
            loi du 9 ao??t 2004 et du R??glement G??n??ral sur la Protection des Donn??es, entr??e en vigueur le 25 mai 2018,
            vous disposez d???un droit d???acc??s, de rectification, de modification et de suppression concernant les donn??es
            qui vous concernent. Vous pouvez contacter le responsable pour exercer ce droit :
            richard.tristan.93@gmail.com. Nous mettons tout en oeuvre pour prot??ger vos donn??es personnelles et emp??cher
            leur diffusion. N??anmoins, si un piratage venait ?? entra??ner une fuite de donn??es, le responsable des
            donn??es s???engage ?? pr??venir toutes personnes victime d???une violation de ses donn??es ?? caract??re personnel.
            Parall??lement, une notification document??e de cette violation sera ??galement adress??e ?? la CNIL dans un
            d??lai maximum de 72 heures apr??s sa d??couverte.
        </div>
    </div>
</footer>

<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
<script src="/../../public/assets/js/main.js"></script>
</body>

</html>