{include 'templates/header.tpl'}
<div class="container-fluid margen contenedor">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <figure>
                <img class="ofertaHotweek" src="img/ofertaHotweek.png" alt="">
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div id="carouselExampleIndicators" class="carousel slide margen" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner container fluid">
                    <div class="carousel-item active">
                    <img src="img/imgCarrosel.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/imgCarrosel2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/imgCarrosel3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <figure>
                <img class="list-group-item" src="img/leche.jpg" alt="">
            </figure>
        </div>
        <div class="col-md-4 col-xs-12">
            <figure>
                <img class="list-group-item" src="img/harina.jpg" alt="">
            </figure>
        </div>
        <div class="col-md-4 col-xs-12"> 
            <figure>
                <img class="list-group-item" src="img/aceite.jpg" alt="">
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <a href="productos"><button class="btn btn-outline-primary">Ver mas Productos</button></a>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}