<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

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
        $items->add(new Item("Pen Drive", 8));
        $items->add(new Item("Boomerang", 50));
        $items->add(new Item("Camiseta", 70));

        $Cart = new Cart;
        $total = $Cart->getTotal($items);

        $this->assertEquals(128, $total);
    }
}