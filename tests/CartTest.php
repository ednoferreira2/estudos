<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

require __DIR__.'/../src/Exercicio4.php';
use App\Items;
use App\Item;
use App\Cart;

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnCorrectTotal() {

        $items = new Items; 
        $items->add(new Item("Pen Drive", 1));
        $items->add(new Item("Boomerang", 2));
        $items->add(new Item("Camiseta", 3));

        $Cart = new Cart;
        $total = $Cart->getTotal($items);

        $this->assertEquals(6, $total);
    }
}