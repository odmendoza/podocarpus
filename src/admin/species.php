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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div  class="col-md-1 " id="icon">
        <i  class="fas fa-house-user"></i>
        <i  class="fas fa-paw"></i>
        <i  class="fas fa-adjust"></i>
        <i  class="fas fa-basketball-ball"></i>
        <i  class="fas fa-bug"></i>
    </div>
        <div class="col-md-10 specie">
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
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td >Larry the Bird</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            </tbody>
            </table>
            <div class="mb-3 add row">
    <label  class="col-sm-12 col-form-label ">AGREGAR ESPECIES</label>
  </div>
  <div class="mb-3 row">
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
  <div class="mb-3">
  <input class="form-control" type="file" id="formFile">
</div>
        </div>
    </div>
    </div>
    

</body>
</html>