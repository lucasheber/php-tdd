<?php


namespace CDC\Loja\Carrinho;


use CDC\Loja\Produto\Produto;

class CarrinhoDeCompras
{
    /** @var \ArrayObject Produto */
    private $products;

    public function __construct()
    {
        /** @var \ArrayObject Produto */
        $this->products = new \ArrayObject();

    }

    public function adiciona(Produto $produto)
    {
        $this->products->append($produto);
    }

    public function maiorValor()
    {
        if (count($this->getProducts()) === 0) {
            return 0;
        }

        $maior = $this->getProducts()[0]->getValor();
        foreach ($this->getProducts() as $product) {
            if ($maior < $product->getValor()) {
                $maior = $product->getValor();
            }
        }

        return $maior;
    }

    /**
     * @return \ArrayObject
     */
    public function getProducts(): \ArrayObject
    {
        return $this->products;
    }

}