<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Formulario</title>
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
    <style>
      #intro {
        background-image: url(./img/fondo.jpg);
        height: 100vh;
      }

    </style>
      <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
          <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form action="./php/recover/recover.php" method="post" class="bg-white rounded shadow-5-strong p-5">
                <div class="form-outline mb-4">
                  <input type="text" id="usuario" name="usuario" class="form-control" />
                  <label class="form-label" for="form1Example1">Usuario</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control" />
                  <label class="form-label" for="form1Example1">Email</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>