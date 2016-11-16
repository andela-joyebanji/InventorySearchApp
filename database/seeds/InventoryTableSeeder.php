<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Inventory;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phpCategory = Category::where('name', '=', 'PHP')->first();
        Inventory::create([
                'name' => 'Jacob',
                'price' => 200,
                'category_id' => $phpCategory->id
        ]);

        $laravelCategory = Category::where('name', '=', 'Laravel')->first();
        Inventory::create([
                'name' => 'Oyebanji',
                'price' => 200.5,
                'category_id' => $laravelCategory->id
        ]);

    }
}
