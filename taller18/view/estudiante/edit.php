<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/taller18/routes.php');
    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();
    $idEstudiante = $_GET['id'];
    $estudiante = $object->search($idEstudiante);
    $cursos = $object ->combolist();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 16</title>
    <?php
      require_once(ROOT_PATH.'header.php');
    ?>
</head>
<body>
    <?php
      require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editando Registro</h2>
        </div>
        <form id="formPersona" action="update.php" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Est.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$estudiante[0]?>" type="text" class="form-control" name="id" id="id" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$estudiante[1]?>" type="text" class="form-control" name="nombre" id="nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input value="<?=$estudiante[2]?>" type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="idCurso" class="form-label">Código curso</label>
                <select class="form-control" name="idCurso" id="idCurso">
                    <option value="0">No especificado</option>
                    <?php  foreach ($cursos as $curso) { 
                        if ($estudiante[3]==$curso['idCurso']) { ?>
                            <option selected="selected" value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option>
                        <?php } else { ?>
                        <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option>

                    <?php } 
                        }?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-4">Actualizar</button>
        </form>
    </div>
</body>
    <?php
      require_once(ROOT_PATH.'footer.php');
    ?>
</html>