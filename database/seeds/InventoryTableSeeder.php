<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invertory')->insert([
            'name' => 'Jacob',
            'price' => 200,
        ]);

    }
}
