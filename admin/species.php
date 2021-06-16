<?php
// Add this to protect an admin view
include($_SERVER['DOCUMENT_ROOT'] . '/podocarpus/dll/security.php');

?>

<?php
include('shared/header.php');
?>
            <div class="row">
                <?php
                //$miconexion comes from security.php
                $miconexion->consulta("SELECT * FROM species");
                $miconexion->verconsultacrud();
                ?>
            </div>
            <form action="actions/insert.php" method="post">
                <div class="row mt-5">
                    <label class="col-sm-12 col-form-label add mb-3 ">AGREGAR ESPECIES</label>
                    <div class="mb-3  row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="scientific_name" class="col-sm-2 col-form-label">Nombre Cientifico</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="scientific_name" name="scientific_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="age" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="habitat" class="col-sm-2 col-form-label">Habitat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="habitat" name="habitat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="txt" id="image" name="image" accept=".jpeg,.png,.jpg">
                        </div>
                    </div>
                    <div class="mb-3 row col-sm-2">
                        <button type="submit" class="btn btn-dark mt-4" id="button" name="add">AGREGAR</button>
                    </div>
            </form>

<?php
include('shared/footer.php');
?>