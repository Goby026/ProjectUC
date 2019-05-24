<?php
include "./includes/header.inc.php";
include "conexion1.php";

$result = mysqli_query($conexion, "SELECT * FROM pais");

$num = mysqli_num_rows($result);

?>
<main>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">LISTA DE PAISES PARTICIPANTES</h1>
            <p class="lead">Juegos panamericanos Lima 2019</p>
        </div>
    </div>

    <div class="container">
        <ul class="list-group">
            <?php
            while( $row = mysqli_fetch_assoc($result) ){
                ?>
                <li class="list-group-item"><?php echo $row['NombrePais'] ?></li>
                <?php
            }
            ?>
        </ul>
    </div>
</main>
<?php
include './includes/footer.inc.php';
?>
