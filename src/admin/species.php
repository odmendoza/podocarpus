<?php

include("../config/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

//$miconexion->consulta("CREATE TABLE `species` (
//  `id` int NOT NULL auto_increment primary key ,
//  `name` varchar(50) NOT NULL,
//  `scientific_name` varchar(50) NOT NULL,
//  `age` int NOT NULL,
//  `habitat` text NOT NULL,
//  `description` text NOT NULL,
//  `image` text NOT NULL
//) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$miconexion->consulta("INSERT INTO species(id, name, scientific_name, age, habitat, description, image)
VALUES ('',
        'Oso de anteojos',
        'Tremarctos ornatus',
        '6',
        'Pueden vivir a una altura de hasta 4.750 metros sobre el nivel del mar y no suelen bajar de los 200 metros. La gran variedad de hábitats abarca bosques tropicales secos, tierras bajas húmedas, bosques tropicales húmedos, zonas arbustivas tanto secas como húmedas y pastizales de gran altitud',
        'El oso de anteojos, oso andino, oso sudamericano, ucumari y jukumari, es una especie de mamífero de la familia Ursidae. Es la única especie viviente de su género',
        'https://upload.wikimedia.org/wikipedia/commons/9/99/Spectacled_Bear_-_Houston_Zoo.jpg');");

//$miconexion->consulta("SELECT * FROM especies");
//$miconexion->verconsulta();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Parque Podocarpus | Admin</title>

    <link rel="stylesheet" href="../assets/css/species.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/bc9c77379f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-1 " id="icon">
            <i class="fas fa-house-user"></i>
            <i class="fas fa-paw" id="active"></i>
            <i class="fas fa-adjust"></i>
            <i class="fas fa-basketball-ball"></i>
            <i class="fas fa-bug"></i>
        </div>
        <div class="col-md-10 specie">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ESPECIES</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><a href="edit-specie.php">
                                <button type="button"><i class="fas fa-edit"></i></button>
                            </a></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><a href="edit-specie.php">
                                <button type="button"><i class="fas fa-edit"></i></button>
                            </a></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td><a href="edit-specie.php">
                                <button type="button"><i class="fas fa-edit"></i></button>
                            </a></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!--            --><?php
            //            if(isset($_POST['add'])){
            //                $name = $_POST["name"];
            //                $scientific_name = $_POST["scientific_name"];
            //                $age = $_POST["age"];
            //                $habitat = $_POST["habitat"];
            //                $description = $_POST["description"];
            //                $image = $_POST["image"];
            //
            //                $miconexion->consulta("INSERT INTO species(name, scientific_name, age, habitat, description, image) VALUES ('$name', '$scientific_name','$age','$habitat','$description','$image')");
            //            }
            //            ?>

            <form action="" method="post">
                <div class="row mt-5">
                    <label class="col-sm-12 col-form-label add mb-3 ">AGREGAR ESPECIES</label>
                    <div class="mb-3  row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre Cientifico</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Habitat</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" accept=".jpeg,.png,.jpg">
                        </div>
                    </div>
                    <div class="mb-3 row col-sm-2">
                        <button type="submit" class="btn btn-dark mt-4" id="button">AGREGAR</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>