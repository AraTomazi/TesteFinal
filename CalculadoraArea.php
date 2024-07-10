<?php


class CalculadoraArea {
    public function areaQuadrado($lado) {
        return $lado * $lado;
    }

    public function areaRetangulo($largura, $altura) {
        return $largura * $altura;
    }

    public function areaCirculo($raio) {
        return pi() * $raio * $raio;
    }
}


function testCalculadoraArea() {
    $calculadora = new CalculadoraArea();

  
    $resultado = $calculadora->areaQuadrado(5);
    echo "Área do quadrado com lado 5: " . $resultado . "\n\n";
    
    if ($resultado == 25) {
        echo "Teste para areaQuadrado passou.\n\n";
    } else {
        echo "Teste para areaQuadrado falhou.\n\n";
    }

    
    $resultado = $calculadora->areaRetangulo(4, 5);
    echo "Área do retângulo com largura 4 e altura 5: " . $resultado . "\n\n";
    
    if ($resultado == 20) {
        echo "Teste para areaRetangulo passou.\n\n";
    } else {
        echo "Teste para areaRetangulo falhou.\n\n";
    }

    // Teste para areaCirculo
    $resultado = $calculadora->areaCirculo(4);
    echo "Área do círculo com raio 4: " . $resultado . "\n\n";
    
    if (abs($resultado - (pi() * 4 * 4)) < 0.0001) { 
        echo "Teste para areaCirculo passou.\n\n";
    } else {
        echo "Teste para areaCirculo falhou.\n\n";
    }
}

testCalculadoraArea();

?>
