<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchAppTest extends TestCase
{
    use DatabaseTransactions;
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
        $inventory = factory(App\Inventory::class)->create();
        $response = $this->call('GET', '/api/search/name/'.$inventory->name);

        $this->assertContains($inventory->name, $response->getContent());
    }

    public function testSearchForNameReturnsEmptyResultForUnMatchSearch()
    {
        $this->json('GET', '/api/search/name/Mayowa')
             ->seeJsonEquals([]);
    }

}
