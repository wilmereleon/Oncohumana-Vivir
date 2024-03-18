<?php include('plantillas/encabezadoPrincipal.php'); ?>
<?php
include '../configuraciones/conecta.php';
// Consulta:
$consulta = "SELECT * FROM pacientes_eps";
$guardar = $conecta->query($consulta);

// Consulta de búsqueda:
$where ="";
if (!empty($_POST)) {
  $valor = $_POST['busqueda'];
  if (!empty($valor)) {
    $where = "WHERE id LIKE '%$valor%'";
  }
}
$consultaB = "SELECT * FROM pacientes_eps $where";
$resultado = $conecta->query($consultaB);

// VALIDACIÓN DE EXISTENCIA DE BOTÓN ENVIAR:
if (isset($_POST['registrar'])) {
  // Recibir datos:
  $id = $_POST['id'];
  $tipo = $_POST['tipo'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $telefono_celular = $_POST['telefono_celular'];
  $correo = $_POST['correo'];

  // Consulta:
  $consulta = "INSERT INTO pacientes_eps (id, tipo, nombres, apellidos, fecha_nacimiento, telefono_celular, correo) VALUES ('$id', '$tipo','$nombres', '$apellidos', '$fecha_nacimiento', '$telefono_celular', '$correo')";
  $guardar = $conecta->query($consulta);

  // Validación:
  if ($guardar) {
    echo "<script>alert('Registro exitoso')</script>";
    echo "<script>window.location.replace('../secciones/vista_administrador_modificar.php')</script>";
  } else {
    echo "<script>alert('Registro fallido')</script>";
    echo "<script>window.location.replace('../secciones/vista_administrador_modificar.php')</script>";
  }
}
?>

 
<div class="container">
    <div class="row">
    <h1>Prueba de cuerpo (Colaboradores)</h1>
    <h2>Prueba de cuerpo (Colaboradores)</h2>
    <h3>Prueba de cuerpo (Colaboradores)</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum excepturi,
        alias ipsum labore numquam vitae repellendus cum. Sed accusantium, harum,
        nisi commodi quae nam natus facere ipsum numquam nihil ut.</p>
    </div>
</div>







<?php include('plantillas/piePrincipal.php'); ?>