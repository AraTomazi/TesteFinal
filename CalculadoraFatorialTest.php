<?php

class CalculadoraFatorial {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

class CalculadoraFatorialTest {
  
    public function testCalcularFatorialPositivo() {
        $calculadora = new CalculadoraFatorial();

        $entrada = 5;
        $esperado = 120; 
        $resultado = $calculadora->calcular($entrada);

      
        if ($resultado === $esperado) {
            echo "Teste para calcular fatorial de $entrada passou.\n\n";
        } else {
            echo "Teste para calcular fatorial de $entrada falhou. Resultado obtido: $resultado\n\n";
        }
    }

    
    public function testCalcularFatorialZero() {
        $calculadora = new CalculadoraFatorial();

        
        $entrada = 0;
        $esperado = 1; 
        $resultado = $calculadora->calcular($entrada);

        
        if ($resultado === $esperado) {
            echo "Teste para calcular fatorial de $entrada passou.\n\n";
        } else {
            echo "Teste para calcular fatorial de $entrada falhou. Resultado obtido: $resultado\n\n";
        }
    }

    
    public function testCalcularFatorialNegativo() {
        $calculadora = new CalculadoraFatorial();

       
        $entrada = -1;

        try {
            $calculadora->calcular($entrada);
            
            echo "Teste para calcular fatorial de $entrada falhou. Nenhuma exceção lançada.\n\n";
        } catch (Exception $e) {
           
            if ($e->getMessage() === "Número deve ser não-negativo") {
                echo "Teste para calcular fatorial de $entrada passou (lançou exceção corretamente).\n\n";
            } else {
                echo "Teste para calcular fatorial de $entrada falhou. Mensagem de exceção inesperada: " . $e->getMessage() . "\n\n";
            }
        }
    }
}


$testador = new CalculadoraFatorialTest();
$testador->testCalcularFatorialPositivo();
$testador->testCalcularFatorialZero();
$testador->testCalcularFatorialNegativo();

?>
