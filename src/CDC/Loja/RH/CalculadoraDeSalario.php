<?php

namespace CDC\Loja\RH;

class CalculadoraDeSalario
{
    public function calcularSalario(Funcionario $funcionario)
    {
        if($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR){
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        }

        return 425.0;
    }
}
