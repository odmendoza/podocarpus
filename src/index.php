<?php
include("config/config.php");
include("shared/header.php");
?>
    <header class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/mountains.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/mountains-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/mountains-3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="container">
        <section class="section">
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
        </section>
        <section class="section">
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
            <article class="article">
                <div class="imagen">IMAGE</div>
                <h3 class="title">Lorem Limpsum</h3>
                <h4 class="description">Lorem Limpsum</h4>
            </article>
        </section>
    </div>
    <section class="patrocinadores">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, fugit.
    </section>
<?php
include("shared/footer.php");
?>