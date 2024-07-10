<?php

class ConversorString {
    public function paraMaiusculas($string) {
        return strtoupper($string);
    }

    public function paraMinusculas($string) {
        return strtolower($string);
    }
}

class ConversorStringTest {
    // Método para testar o método paraMaiusculas
    public function testParaMaiusculas() {
        $conversor = new ConversorString();
        
        $entrada = "Hello World";
        $esperado = "HELLO WORLD";
        $resultado = $conversor->paraMaiusculas($entrada);
        
        // Verificação do resultado
        if ($resultado === $esperado) {
            echo "Teste para paraMaiusculas passou.\n\n";
        } else {
            echo "Teste para paraMaiusculas falhou.\n\n";
        }
    }
    
    // Método para testar o método paraMinusculas
    public function testParaMinusculas() {
        $conversor = new ConversorString();
        
        $entrada = "Hello World";
        $esperado = "hello world";
        $resultado = $conversor->paraMinusculas($entrada);
        
        // Verificação do resultado
        if ($resultado === $esperado) {
            echo "Teste para paraMinusculas passou.\n\n";
        } else {
            echo "Teste para paraMinusculas falhou.\n\n";
        }
    }
}

// Executar os testes
$testador = new ConversorStringTest();
$testador->testParaMaiusculas();
$testador->testParaMinusculas();

?>
