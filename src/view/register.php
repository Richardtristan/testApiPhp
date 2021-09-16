

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/login">phpapi</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://github.com/Richardtristan" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="register" style="width: 100%;height: auto;background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
    <h2 class="text-uppercase text-center text-white mb-0" style="padding: 0px;margin: 40px;"><br><strong>CREATE AN ACCOUNT.</strong><br><br></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="registerForm" name="register" method="post" novalidate="novalidate">
                    <div class="control-group"></div>
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2">
                                <section class="register-photo" style="background: rgba(241,247,252,0);">
                                    <div class="form-container">

                                            <h2 class="text-center text-secondary text-uppercase"></h2>
                                            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" style="background: rgb(255,236,236);"></div>
                                            <?php
                                            if ($user != null && $user->UsernameExist()) {
                                                    echo '<p>This username exist</p>';
                                                }

                                                if ($isemptyUsername) {
                                                    echo "<p>This value is needed</p>";
                                                }
                                             ?>
                                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="background: rgb(255,236,236);"></div>
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