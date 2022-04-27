<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Pubg UC',
            'description' => 'Bonus UC may not be applicable if purchase currency is different from your Razer Gold PIN currency.',
            'price'=>'600'

        ]);
        $product->save();
    }
}
