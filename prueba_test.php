<?php
use PHPUnit\Framework\TestCase;

class prueba_test extends TestCase
{
    public function testIncludeHeaderBlackBox()
    {
        ob_start();
        include('plantillas/header_administrador.php');
        include('secciones/cerrar_sesion.php');
        $output = ob_get_clean();

        // Verificar que el contenido del header está en la salida
        $this->assertStringContainsString('Modificar datos de paciente', $output);
    }

    public function testIncludeHeaderWhiteBox()
    {
        // Verificar que el archivo existe
        $this->assertFileExists('plantillas/header_administrador.php');
    }
    
    public function testUserSessionEnds()
    {
        // Incluir el archivo que inicia la sesión y establece la variable de sesión
        include('secciones/index.php');
        //include('secciones/cerrar_sesion.php');
    
        // Verificar que la variable de sesión se estableció correctamente
        $this->assertEquals('testUser', $_SESSION['usuario']);
    
        // Cerrar la sesión
        session_destroy();
    
        // Verificar que la variable de sesión ya no existe
        $this->assertFalse(isset($_SESSION['usuario']));
    }

    public function testDatabaseConnection()
{
    // Crear una nueva instancia de PDO
    $db = new PDO('mysql:host=localhost;dbname=oncohumana_vivir', 'user', 'pass');

    // Verificar que la conexión se realizó correctamente
    $this->assertInstanceOf(PDO::class, $db);
}

}
?>