<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Products::create([

        	'name' => 'Single sunflower bouquet',
        	'slug' => 'Single sunflower bouquet',
        	'price' => 250,
        	'details' => 'Single sunflower bouquet',
        ]);

        Products::create([

        	'name' => 'Basket sunflower bouquet',
        	'slug' => 'Basket sunflower bouquet',
        	'price' => 550,
        	'details' => 'Basket sunflower bouquet',
        ]);

        Products::create([

        	'name' => 'Vase sunflower bouquet',
        	'slug' => 'Vase sunflower bouquet',
        	'price' => 400,
        	'details' => '7pcs sunflower',
        ]);

        Products::create([

        	'name' => '1pc Sunflower',
        	'slug' => '1pc Sunflower',
        	'price' => 35,
        	'details' => '1pc sunflower',
        ]);

        Products::create([

        	'name' => 'Flower',
        	'slug' => 'Flower',
        	'price' => 130,
        	'details' => 'Flower',
        ]);

        Products::create([

        	'name' => 'Rose bouquet',
        	'slug' => 'Rose bouquet',
        	'price' => 400,
        	'details' => 'Rose bouquet',
        ]);
    }
}
