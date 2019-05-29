<?php
include "./includes/header.inc.php";
include "./conexion1.php";

$inauguracion = mysqli_query($conexion, "SELECT * FROM ceremonias where idCeremonias = 3");

?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--                <img src="./images/ceremonias-lima-2019.jpg" class="img-fluid" alt="Responsive image" style="width: 100% !important;">-->
                <?php
                while( $row = mysqli_fetch_assoc($inauguracion) ){
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
    $tipoInauguracion = mysqli_query($conexion, "select * from tipoceremonias where idCeremonias = 3");
    ?>
    <div class="container">
        <?php
        while( $tipoI = mysqli_fetch_assoc($tipoInauguracion) ){
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
                                        <img src="./images/inauguracion/milco2.png" class="img-fluid" alt="Responsive image" style="width: 60%">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="text-center">
                                        <h1 class="card-title text-primary">26</h1>
                                        <h4 class="text-primary">JULIO</h4>
                                        <p class="card-text text-primary">LIMA <br> <b>ESTADIO </b><br> <b>NACIONAL</b></p>
                                        <p class="text-info">CEREMONIA DE INAUGURACIÓN</p>
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
</main>
<?php
include "./includes/footer.inc.php";
?>

