
<section id="login"
         style="width: 100%;height: auto;background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;padding-top: 15%; padding-bottom: 15%">
    <h2 class="text-uppercase text-center text-white pt-3" style="padding: 0px;margin: 40px;">Login</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <section>
                    <form method="post">
                        <h2 class="visually-hidden">Login Form</h2>
                        <div class="mb-3"><input value="<?php echo $filterUsername ?>" class="form-control" type="text"
                                                 name="username" placeholder="username"
                                                 style="background: rgb(255,236,236);"></div>

                        <div class="mb-3"><input class="form-control" type="password" name="password"
                                                 placeholder="Password"
                                                 style="background: rgb(255,236,236);border-color: rgb(255,236,236);">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-block text-black w-100" type="submit">Log In</button>
                            <a class=" pt-2 not-already" href="/register">You don't have an account? Create here.</a>
                        </div>
                    </form>
                    <?php
                    if (isset($_SESSION['confirm'])){
                        if ($_SESSION['confirm'] === 'ok'){
                        echo '<div id="modalLogin" style="display: block" class="myModal modal is-valid" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Valitdation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Thanks for the validation</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a  class="btn btn-primary" href="/login">Log In</a>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                        session_unset();
                        session_destroy();
                        }
                    }
                    if (isset($login)) {
                        if (!$login->login()) {
                            echo '<div id="modalLogin" style="display: block" class="myModal modal is-valid" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Bad</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bad password or username or account not confirmed in email</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a  class="btn btn-primary" href="/login">Log In</a>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                        }
                    } ?>
                </section>
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
        <div class="container"><small>Copyright ?? Tristan RICHARD 2021</small></div>
        <div style="font-size: 10px; padding: 2%" class="container">Vos donn??es personnelles sont conserv??es pour une
            dur??e maximale de 3 ans. En application de la loi Informatique et Libert??s du 6 janvier 1978 modifi??e par la
            loi du 9 ao??t 2004 et du R??glement G??n??ral sur la Protection des Donn??es, entr??e en vigueur le 25 mai 2018,
            vous disposez d???un droit d???acc??s, de rectification, de modification et de suppression concernant les donn??es
            qui vous concernent. Vous pouvez contacter le responsable pour exercer ce droit : richard.tristan.93@gmail.com. Nous mettons tout en oeuvre pour prot??ger vos donn??es personnelles et emp??cher
            leur diffusion. N??anmoins, si un piratage venait ?? entra??ner une fuite de donn??es, le responsable des
            donn??es s???engage ?? pr??venir toutes personnes victime d???une violation de ses donn??es ?? caract??re personnel.
            Parall??lement, une notification document??e de cette violation sera ??galement adress??e ?? la CNIL dans un
            d??lai maximum de 72 heures apr??s sa d??couverte.</div>
    </div>
</footer>
<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
<script src="/../../public/assets/js/main.js"></script>
</body>


</html>