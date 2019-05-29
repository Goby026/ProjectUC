<?php
    include './includes/header.inc.php';
?>


<main class="auspiciadores">
    <?php
    strtotime('2019-05-17'); //1293836400
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Ausp_slider/gloria.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Ausp_slider/latam.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Ausp_slider/toyota.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Ausp_slider/lima19.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contador" data-until="<?php echo strtotime('2019-07-27');?>" data-done="Finished!" data-respond>

                    <div class="dias block">
                        <div class="conta"></div>
                        <div class="label" >Dias</div>
                    </div>
                    <div class="horas block">
                        <div class="conta"></div>
                        <div class="label">Horas</div>
                    </div>
                    <div class="minutos block">
                        <div class="conta"></div>
                        <div class="label">Minutos</div>
                    </div>
                    <div class="segundos block">
                        <div class="conta"></div>
                        <div class="label">Segundos</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php
include './includes/footer.inc.php';
?>
