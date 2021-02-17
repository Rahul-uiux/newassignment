<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'LG',
            'price'=>'10000',
            'description'=>'samrt phone for 4 gb ram ',
            'category'=>'mobile',
            'gallary'=>'https://images-na.ssl-images-amazon.com/images/I/71hh7cpWadL._SL1500_.jpg'
        ],
        ['name'=>'Oppo',
        'price'=>'20000',
        'description'=>'samrt phone for 4 gb ram ',
        'category'=>'mobile',
        'gallary'=>'https://images-na.ssl-images-amazon.com/images/I/71XbGanz3qL._SL1500_.jpg'
    ],
    ['name'=>'samsung',
    'price'=>'10000',
    'description'=>'samrt phone for 4 gb ram ',
    'category'=>'tv',
    'gallary'=>'https://rukminim1.flixcart.com/image/416/416/television/z/b/6/samsung-32j4003-original-imaezvg8eynmheds.jpeg?q=70'
],
 ['name'=>'panasonic',
'price'=>'30000',
'description'=>'samrt phone for 4 gb ram ',
'category'=>'fridge',
'gallary'=>'https://images-na.ssl-images-amazon.com/images/I/71-XsJoSe1L._SL1500_.jpg'
]

        ]);
    }
}
