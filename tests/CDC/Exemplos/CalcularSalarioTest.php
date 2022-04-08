<?php
/*namespace CDC\Loja\Exemplo;

require_once __DIR__ . "\..\..\..\\vendor\autoload.php";

use PHPUnit_Framework_TestCase as PHPUnit;

use CDC\Loja\RH\CalculadoraDeSalario,
    CDC\Loja\RH\Funcionario,
    CDC\Loja\RH\TabelaCargos;

class CalcularSalarioTest extends PHPUnit
{
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite(){
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("André", 1500.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calcularSalario($desenvolvedor);
        $this->assertEquals(1500.0 * 0.9, $salario, null, 0.00001);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite(){
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("André", 4000.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calcularSalario($desenvolvedor);
        $this->assertEquals(4000.0 * 0.8, $salario, null, 0.00001);
    }

    public function testCalculoSalarioDBAsComSalarioAbaixoDoLimite(){
        $calculadora = new CalculadoraDeSalario();
        $dba = new Funcionario("André", 4000.0, TabelaCargos::DBA);
        $salario = $calculadora->calcularSalario($dba);
        $this->assertEquals(500.0 * 0.85, $salario, null, 0.00001);
    }
}*/