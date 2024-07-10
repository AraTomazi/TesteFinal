<?php

class GeradorNumeroAleatorio {
    public function gerar($min, $max) {
        if ($min > $max) {
            throw new Exception("O valor mínimo deve ser menor ou igual ao valor máximo");
        }
        return rand($min, $max);
    }
}

class GeradorNumeroAleatorioTest {
    public function testGerarNumeroValido() {
        $gerador = new GeradorNumeroAleatorio();

        // Teste para gerar número entre 1 e 10
        $min = 1;
        $max = 10;
        $resultado = $gerador->gerar($min, $max);

        echo "Gerar número entre $min e $max: $resultado\n";
    }

    public function testGerarNumeroMinMaiorQueMax() {
        $gerador = new GeradorNumeroAleatorio();

        // Teste para gerar número com min > max (deve lançar exceção)
        $min = 10;
        $max = 1;

        try {
            $resultado = $gerador->gerar($min, $max);
            echo "Este teste deveria falhar: gerou $resultado\n";
        } catch (Exception $e) {
            echo "Exceção capturada: " . $e->getMessage() . "\n";
        }
    }
}

// Executar os testes
$testador = new GeradorNumeroAleatorioTest();
$testador->testGerarNumeroValido();
$testador->testGerarNumeroMinMaiorQueMax();

?>
