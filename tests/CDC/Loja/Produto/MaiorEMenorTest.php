<?php


namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use PHPUnit\Framework\TestCase as PHPUnit;

class MaiorEMenorTest extends PHPUnit
{

    public function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 450));
        $carrinho->adiciona(new Produto("Liquidificaro", 250));
        $carrinho->adiciona(new Produto("Jogo de Pratos", 70));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals("Jogo de Pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

    public function testOrdemCrescente()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Jogo de Pratos", 70));
        $carrinho->adiciona(new Produto("Liquidificaro", 250));
        $carrinho->adiciona(new Produto("Geladeira", 450));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals("Jogo de Pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

    public function testApenasUmProduto()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Jogo de Pratos", 70));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals("Jogo de Pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Jogo de Pratos", $maiorMenor->getMaior()->getNome());
    }
}