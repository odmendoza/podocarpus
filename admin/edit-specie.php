<?php
// Add this to protect an admin view
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/security.php');
?>

<?php

$id = $_GET["id"];

// Delete specie
$miconexion->consulta("select * from species where id = '$id' ");
$specieList = $miconexion->consulta_lista();
?>

<?php
include('shared/header.php');
?>

<!--<div class="container mt-5">-->
    <form action="actions/update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $specieList[0]?>">
        <div class="row mt-5">
            <label class="col-sm-12 col-form-label add mb-3 ">EDITAR ESPECIE</label>
            <div class="text-center">
                <img src="<?php echo $specieList[6]?>" class="img-thumbnail rounded mx-auto d-block" width="400px" height="400px">
                <br>
            </div>
            <div class="mb-3  row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $specieList[1]?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="scientific_name" class="col-sm-2 col-form-label">Nombre Cientifico</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="scientific_name" name="scientific_name" value="<?php echo $specieList[2]?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="age" class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="age" name="age" value="<?php echo $specieList[3]?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="habitat" class="col-sm-2 col-form-label">Habitat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="habitat" name="habitat" value="<?php echo $specieList[4]?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $specieList[5]?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input class="form-control" type="txt" id="image" name="image" accept=".jpeg,.png,.jpg" value="<?php echo $specieList[6]?>">
                </div>
            </div>
            <div class="mb-3 row col-sm-2">
                <button type="submit" class="btn btn-dark mt-4" id="button" name="update">ACTUALIZAR</button>
            </div>
    </form>
<!--</div>-->
<?php
include('shared/footer.php');
?>