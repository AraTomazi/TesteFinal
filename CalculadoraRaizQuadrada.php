<?php

class CalculadoraRaizQuadrada {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        return sqrt($numero);
    }
}

class CalculadoraRaizQuadradaTest {
    public function run() {
        $calculadora = new CalculadoraRaizQuadrada();

        
        $this->assertRaizQuadrada($calculadora, 25, 5.0);

      
        $this->assertRaizQuadrada($calculadora, 0, 0.0);

        
        $this->assertException($calculadora, -1, "Número deve ser não-negativo");
    }

    private function assertRaizQuadrada($calculadora, $numero, $esperado) {
        try {
            $resultado = $calculadora->calcular($numero);
            if (abs($resultado - $esperado) < 0.0001) {
                echo "Teste para calcular raiz quadrada de $numero: PASSOU\n";
            } else {
                echo "Teste para calcular raiz quadrada de $numero: FALHOU (Resultado obtido: $resultado, Esperado: $esperado)\n";
            }
        } catch (Exception $e) {
            echo "Teste para calcular raiz quadrada de $numero: FALHOU (Exceção lançada: " . $e->getMessage() . ")\n";
        }
    }

    private function assertException($calculadora, $numero, $mensagemEsperada) {
        try {
            $calculadora->calcular($numero);
            echo "Teste para calcular raiz quadrada de $numero: FALHOU (Nenhuma exceção lançada)\n";
        } catch (Exception $e) {
            if ($e->getMessage() === $mensagemEsperada) {
                echo "Teste para calcular raiz quadrada de $numero: PASSOU (Exceção lançada corretamente)\n";
            } else {
                echo "Teste para calcular raiz quadrada de $numero: FALHOU (Exceção lançada: " . $e->getMessage() . ")\n";
            }
        }
    }
}

$testador = new CalculadoraRaizQuadradaTest();
$testador->run();

?>
