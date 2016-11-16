<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchAppTest extends TestCase
{
    /**
     * Test that the page loads the correctly
     *
     * @return void
     */
    public function testSearchAppPageLoadsCorrectly()
    {

        $this->visit('/')
             ->see('Search Inventory');
    }

    public function testSearchForNameReturnsCorrectResult()
    {
        $this->json('GET', '/api/search/name/Jacob')
             ->seeJsonEquals([
                 [
                    'name' => "Jacob",
                    'price' => 200
                 ]
             ]);
    }

    public function testSearchForNameReturnsEmptyResultForUnMatchSearch()
    {
        $this->json('GET', '/api/search/name/Mayowa')
             ->seeJsonEquals([[]]);
    }

}




// Get  - /search
// 		— categoryID
// 		—— name
//         -- FilterBy - name, price, categ
// 		— Orderby - name, price, category, default

