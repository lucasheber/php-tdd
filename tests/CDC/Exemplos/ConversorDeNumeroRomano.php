<?php

namespace CDC\Exemplos;

/**
 * Description of ConversorDeNumeroRomano
 *
 * @author lucas
 */
class ConversorDeNumeroRomano {

    protected $tabela = array("I" => 1, "V" => 5, "X" => 10, "L" => 50, "C" => 100, "D" => 500, "M" => 1000,);

    /**
     * 
     * @param string $numeroRomano
     * @return int
     */
    public function converte(string $numeroRomano): int
    {
        if (array_key_exists($numeroRomano, $this->tabela)) {
            return $this->tabela[$numeroRomano];
        }

        return 0;
    }

}
