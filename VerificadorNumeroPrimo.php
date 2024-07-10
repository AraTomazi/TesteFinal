<?php

class VerificadorNumeroPrimo {
    public function ehPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

class VerificadorNumeroPrimoTest {
    public function run() {
        $verificador = new VerificadorNumeroPrimo();
        
        
        $this->assertVerificaPrimo($verificador, 13, true);
        
       
        $this->assertVerificaPrimo($verificador, 10, false);
        
        
        $this->assertVerificaPrimo($verificador, 1, false);
    }

    private function assertVerificaPrimo($verificador, $numero, $esperado) {
        $resultado = $verificador->ehPrimo($numero);
        if ($resultado === $esperado) {
            echo "Teste para verificar se $numero é primo: PASSOU\n";
        } else {
            echo "Teste para verificar se $numero é primo: FALHOU\n";
        }
    }
}


$testador = new VerificadorNumeroPrimoTest();
$testador->run();

?>
