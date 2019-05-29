<?php
include "./includes/header.inc.php";
include "./conexion1.php";

$clausura = mysqli_query($conexion, "SELECT * FROM ceremonias where idCeremonias = 4");

?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--                <img src="./images/ceremonias-lima-2019.jpg" class="img-fluid" alt="Responsive image" style="width: 100% !important;">-->
                <?php
                while( $row = mysqli_fetch_assoc($clausura) ){
                    ?>
                    <section class="row no-gutter align-items-center">
                        <div class="col-lg-12 text-center p-0 d-flex align-items-center">
                            <img class="img-fluid position-relative mx-auto" src="<?php echo $row['imagenC'];?>" alt="" style="width: 100% !important;">
                            <h1 class="w-100 position-absolute text-light my-auto" style="text-align: left; margin-top: 30px !important; margin-left: 20px !important;"><?php echo $row['titulo'];?><br><?php echo $row['DescripcionC'];?></h1>
                        </div>
                    </section>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <hr>
    <?php
    $tipoClausura= mysqli_query($conexion, "select * from tipoceremonias where idTipoCeremonias = 5");
    ?>
    <div class="container">
        <?php
        while( $tipoI = mysqli_fetch_assoc($tipoClausura) ){
            ?>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $tipoI['ImagenTipoCeremonia'];?>" class="img-fluid" alt="Responsive image" style="width: 100%">
                    <span class="d-block p-2 bg-primary text-white">
                    <p><h3 style="margin-left: 15% !important;"><?php echo $tipoI['NombreC'];?></h3></p>
                </span>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary"><?php echo $tipoI['subTitulo'];?></h2>
                    <?php echo $tipoI['descripcionTipoC'];?>
                </div>

            </div>
            <?php
        }
        ?>
    </div>
    <hr>
    <div class="container-fluid pattern-ceremonias">
        <div class="col-md-8 offset-2">
            <section class="">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h1>CALENDARIO</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3" style="width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <img src="./images/clausura/milco3.png" class="img-fluid" alt="Responsive image" style="width: 50%">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h1 class="card-title text-primary">11</h1>
                                            <h4 class="text-primary">AGOSTO</h4>
                                            <p class="card-text text-primary">LIMA <br> <b>ESTADIO </b><br> <b>NACIONAL</b></p>
                                            <p class="text-info">CEREMONIA DE CLAUSURA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.654382045209!2d-77.03591788459768!3d-12.067284345569464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8eb498672dd%3A0xefa377174834b5d7!2sEstadio+Nacional!5e0!3m2!1ses!2spe!4v1548567027178" frameborder="0" style="border:0" allowfullscreen="" width="100%" height="500px"></iframe>
            </div>
        </div>
    </div>
</main>
<?php
include "./includes/footer.inc.php";
?>

