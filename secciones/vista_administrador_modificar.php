<?php
include '../configuraciones/conecta.php';
// Consulta:
$consulta = "SELECT * FROM pacientes_eps";
$guardar = $conecta->query($consulta);
?>

<?php include('../plantillas/header_administrador.php'); ?>

<h1>Modificar datos de pacientes</h1>

<div class="container">
  <h4 class="text-center">Registro de pacientes</h4>
  <form class="" action="index.html" method="post">


  </form>

  
</div>
<div class="container">
  <div class="col-sm-12 col-md-12 col-lg-12">
     <h3 class="text-center">Listado de pacientes en BD</h3>
     <div class="table-responsive table-hover" id="tablaConsulta">
        <table class="table">
          <thead class="text-muted">
              <th class="text-center">Id</th>
              <th class="text-center">Tipo</th>
              <th class="text-center">Nombres</th>
              <th class="text-center">Apellidos</th>
              <th class="text-center">Edad</th>
              <th class="text-center">Telefono fijo</th>
              <th class="text-center">Telefono celular</th>
              <th class="text-center">Correo</th>
              <th class="text-center">Fecha de nacimiento</th>
              <th class="text-center">EPS</th>
              <th class="text-center">Categoría</th>
          </thead>
          <tbody>
          <?php while($row = $guardar->fetch_assoc()) { ?>
            <tr>
              <td class="text-center"><?php echo $row['id']; ?></td>
              <td class="text-center"><?php echo $row['tipo']; ?></td>
              <td class="text-center"><?php echo $row['nombres']; ?></td>
              <td class="text-center"><?php echo $row['apellidos']; ?></td>
              <td class="text-center"><?php echo $row['edad']; ?></td>
              <td class="text-center"><?php echo $row['telefono_fijo']; ?></td>
              <td class="text-center"><?php echo $row['telefono_celular']; ?></td>
              <td class="text-center"><?php echo $row['correo']; ?></td>
              <td class="text-center"><?php echo $row['fecha_nacimiento']; ?></td>
              <td class="text-center"><?php echo $row['EPS']; ?></td>
              <td class="text-center"><?php echo $row['categoria']; ?></td>
              <td><a href="#">Modificar</a></td>
              <td><a href="#">Eliminar</a></td>
              <td><a href="#">Cambiar</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table></
    </div>
  </div>
</div>

<?php include('../plantillas/footer_administrador.php'); ?>