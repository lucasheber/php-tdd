<?php


namespace CDC\Loja\Produto;


use CDC\Loja\Carrinho\CarrinhoDeCompras;

class MaiorEMenor
{
    /** @var Produto */
    private $maior;
    /** @var Produto */
    private $menor;

    public function encontra(CarrinhoDeCompras $carrinhoDeCompras)
    {
        foreach ($carrinhoDeCompras->getProducts() as $product) {
            if (empty($this->menor) || $product->getValor() < $this->menor->getValor()) {
                $this->menor = $product;
            }

            if (empty($this->maior) || $product->getValor() > $this->maior->getValor()) {
                $this->maior = $product;
            }
        }
    }

    /**
     * @return Produto
     */
    public function getMaior()
    {
        return $this->maior;
    }

    /**
     * @return Produto
     */
    public function getMenor()
    {
        return $this->menor;
    }

}