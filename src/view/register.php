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
    <div class="container"><a class="navbar-brand" href="#page-top">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                                                     href="https://github.com/Richardtristan" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="contact"
         style="width: 100%;height: auto;background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
    <h2 class="text-uppercase text-center text-secondary mb-0" style="padding: 0px;margin: 40px;"><br><strong>CREATE&nbsp;AN
            ACCOUNT.</strong><br><br></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="registerForm" name="register" method="post" novalidate="novalidate">
                    <div class="control-group"></div>
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2">
                            <div></div>
                            <small class="form-text text-danger help-block"></small>
                            <div></div>
                            <section>
                                <section class="register-photo" style="background: rgba(241,247,252,0);">
                                    <div class="form-container">
                                        <form id="myForm" method="post" style="background: rgba(255,255,255,0);">
                                            <h2 class="text-center text-secondary text-uppercase"></h2>
                                            <div class="mb-3"><input class="form-control" type="tex" name="username"
                                                                     placeholder="Username"
                                                                     style="background: rgb(255,236,236);"></div>
                                            <?php
                                            if ($user != null && $user->UsernameExist()) {
                                                    echo '<p>This username exist</p>';
                                                }

                                                if ($isemptyUsername) {
                                                    echo "<p>This value is needed</p>";
                                                }
                                             ?>
                                            <div class="mb-3"><input class="form-control" type="email" name="email"
                                                                     placeholder="Email"
                                                                     style="background: rgb(255,236,236);"></div>
                                            <?php
                                                if ($user != null && $user->emailExist()) {

                                                echo ' <p>This mail exist<p>';
                                            }

                                                if ($filterEmail) echo "<p>This is the right format</p>";
                                                else echo "<p>This not the right format</p>";
                                                if ($isemptyEmail) {
                                                    echo "<p>This value is needed</p>";
                                                }

                                            ?>
                                            <div class="mb-3"><input class="form-control" type="password"
                                                                     name="password" placeholder="Password"
                                                                     style="background: rgb(255,236,236);"></div>
                                            <?php if ($isemptyPassword) {
                                                echo "<p>cette valeur est obligatoire </p>";
                                            } ?>
                                            <div class="mb-3">
                                                <div class="form-check"><label class="form-check-label"><input
                                                                class="form-check-input" name="checkbox" type="checkbox"
                                                                style="/*background: rgb(255,236,236);*/border-style: solid;border-color: rgb(134,142,150);">Click
                                                        here to agree to the license terms.</label></div>
                                                <?php if ($isemptyCheckbox) {
                                                    echo "<p>cette valeur est obligatoire </p>";
                                                } ?>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary d-block w-100" id="submit" type="submit">Sign Up
                                                </button>
                                            </div>
                                            <a class="already" href="/login">You already have an account? Login here.</a>
                                            <?php
                                                if ($user != null && !$user->emailExist() && !$user->UsernameExist()) {
                                                    echo '<div id="myModal" style="display: block" class="modal is-valid" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thanks</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>You have registered</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                                }

                                            ?>
                                        </form>
                                    </div>
                                </section>
                            </section>
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
<footer class="text-center footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-uppercase">github</h4><a
                        class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i
                            class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>
<div class="text-center text-white copyright py-4">
    <div class="container"><small>Copyright © Tristan RICHARD 2021</small></div>
</div>
<div class="d-lg-none scroll-to-top position-fixed rounded"><a class="text-center d-block rounded text-white"
                                                               href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/cabin.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/cake.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/circus.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/game.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/safe.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
                            <hr class="star-dark mb-5">
                            <img class="img-fluid mb-5" src="/../../public/assets/img/portfolio/submarine.png">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit
                                asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-5"><a
                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                        data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
        </div>
    </div>
</div>

<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
<script src="/../../public/assets/js/main.js"></script>
</body>

</html>