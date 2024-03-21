<?php
use PHPUnit\Framework\TestCase;

class HeaderIncludeTest extends TestCase
{
    public function testIncludeHeaderBlackBox()
    {
        ob_start();
        include('../plantillas/header_administrador.php');
        $output = ob_get_clean();

        // Verificar que el contenido del header está en la salida
        $this->assertStringContainsString('contenido esperado en el header', $output);
    }

    public function testIncludeHeaderWhiteBox()
    {
        // Verificar que el archivo existe
        $this->assertFileExists('../plantillas/header_administrador.php');
    }
}
?>