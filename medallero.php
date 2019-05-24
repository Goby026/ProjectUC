<?php
include "./includes/header.inc.php";
include "conexion1.php";

$result = mysqli_query($conexion, "SELECT p.NombrePais, m.oro, m.plata, m.bronce, (m.oro + m.plata + m.bronce) as 'total' FROM medallero m inner join pais p on m.idPais = p.idPais");

$num = mysqli_num_rows($result);

$cont = 1;

?>
<main>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">MEDALLERO SEGUN PAISES</h1>
            <p class="lead">Juegos panamericanos Lima 2019</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">PAIS</th>
                        <th scope="col">ORO</th>
                        <th scope="col">PLATA</th>
                        <th scope="col">BRONCE</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while( $row = mysqli_fetch_assoc($result) ){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $cont++; ?></th>
                            <td><?php echo $row['NombrePais'] ?></td>
                            <td><?php echo $row['oro'] ?></td>
                            <td><?php echo $row['plata'] ?></td>
                            <td><?php echo $row['bronce'] ?></td>
                            <td><?php echo $row['total'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<?php
include './includes/footer.inc.php';
?>
