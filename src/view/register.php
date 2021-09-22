<body style="height: 100% !important;" id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/ladder">Ladder</a>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://github.com/Richardtristan" target="_blank">Contact</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="register"
         style="width: 100%;height: auto;background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;padding-top: 10%; padding-bottom: 10%">
    <h1 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;"><br><strong>CREATE AN ACCOUNT.</strong><br><br></h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="registerForm" name="register" method="post" novalidate="novalidate">
                    <div class="control-group"></div>
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2">
                                <div class="form-container" style="background: rgba(241,247,252,0);">
                                    <div class="mb-3"><input class="form-control" type="text" name="username"
                                                             value="<?php echo $filterUsername ?>" placeholder="Username"
                                                             style="background: rgb(255,236,236);"></div>

                                    <?php if ($user != null && $user->UsernameExist()) {
                                        echo '<p>This username exist</p>';
                                    }

                                    if ($isemptyUsername) {
                                        echo "<p>This value is needed</p>";
                                    }
                                    ?>
                                    <div class="mb-3"><input class="form-control" value="<?php echo $filterEmail ?>"
                                                             type="email" name="email" placeholder="Email"
                                                             style="background: rgb(255,236,236);"></div>
                                    <?php
                                    if ($user != null && $user->emailExist()) {

                                        echo ' <p>This mail exist<p>';
                                    }

                                    if ($issetEmail && $filterEmail) echo "<p>This is the right format</p>";
                                    else if ($issetEmail && !$filterEmail)echo "<p>This not the right format</p>";
                                    if ($isemptyEmail) {
                                        echo "<p>This value is needed</p>";
                                    }

                                    ?>
                                    <div class="mb-3"><input class="form-control" type="password"
                                                             name="password" placeholder="Password"
                                                             style="background: rgb(255,236,236);"></div>
                                    <?php if ($isemptyPassword) {
                                        echo "<p>This value is needed</p>";
                                    } ?>
                                    <div class="mb-3">
                                        <div class="form-check"><label class="form-check-label"><input
                                                        class="form-check-input" name="checkbox" type="checkbox"
                                                        style="/*background: rgb(255,236,236);*/border-style: solid;border-color: rgb(134,142,150);">Click
                                                here to agree to the license terms.</label></div>
                                        <?php if ($isemptyCheckbox) {
                                            echo "<p>This value is needed</p>";
                                        } ?>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-block w-100" id="submit" type="submit">Sign Up
                                        </button>
                                    </div>
                                    <a class="already" href="/login">You already have an account? Login here.</a>
                                    <?php
                                    if ($user != null && !$user->emailExist() && !$user->UsernameExist() && $_SESSION['mailer'] !== "" ) {
                                        echo '<div style="display: block" class="myModal modal is-valid" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thanks</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>You have registered</p>
                                                    </div>
                                                    <div class="modal-body">An email has been sent to activate your account</div>
                                                    <div class="modal-footer">
                                                    <a  class="btn btn-primary" href="/login">Log In</a>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }

                                    ?>
                                </div>
                        </div>
                    </div>
                    <div class="control-group"></div>
                    <div class="control-group"></div>
                    <div id="success"></div>
                    <div></div>
                </form>
            </div>
        </div>
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
