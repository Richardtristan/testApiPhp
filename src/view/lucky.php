
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
<section id="lucky" style=" padding-top: 15%; width: 100%; height: auto; background: url(/../../public/assets/img/pikachu.jpg) center / cover no-repeat;">
    <div class="container">
            <h1  class="text-center text-dark bg-light rounded">Try to catch 1 pokemon every 2 hours</h1>
            <form class="w-50 h-50"  method="post" style="padding-top: 5%;  display: block; margin-left: auto; margin-right: auto; ">
                <button name="pokemon" type="submit"><img style="border-radius: 50% !important;" src="/../../public/assets/img/pokeball.png"></button>
            </form>
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
    <div class="container">
        <small>Copyright © Tristan RICHARD 2021</small></div>
</div>
<script src="https://kit.fontawesome.com/767e5fc4a3.js" crossorigin="anonymous"></script>
<script src="/../../public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/../../public/assets/js/freelancer.js"></script>
</body>

</html>