<?php

namespace Tests\Unit;

use App\Http\Controllers\OrdersController;
use App\Model\Book;
use PHPUnit\Framework\TestCase;

class CalculateBookPrice extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function calculate_book_price()
    {
        // would we reach into the db in the test when we know the actual function would be reaching into the db.

        // Arrange
        // we take the book they want, grab the price from the database.
        $book = Book::where('id',1);

        //Act
        $total = (new OrdersController())->calculateTotalPrice($book);

        //Assert

        // the total price is correct
        $this->assertEquals(27.8, $total[0]);
        // the subtotal is correct
        $this->assertEquals($book->price + 9.99, $total[1]);
        // the tax is correct
        $this->assertEquals(1.82, $total[2]);
    }
}
