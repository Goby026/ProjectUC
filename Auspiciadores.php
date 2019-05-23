<?php
    include './includes/header.inc.php';
?>

<main>
    <?php
    strtotime('2019-05-17'); //1293836400
    ?>
    <div class="sliderC">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/Ausp_slider/gloria.jpg" />
                </div>
                <div class="item">
                    <img src="img/Ausp_slider/latam.jpg" />
                </div>
                <div class="item">
                    <img src="img/Ausp_slider/toyota.jpg" />
                </div>
                <div class="item">
                    <img src="img/Ausp_slider/lima19.jpg" />
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


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

</main>

<?php
include './includes/footer.inc.php';
?>
