<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $statement = "ALTER TABLE product AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
        DB::table('products')->insert([
            'type_id' => 3,
            'name' =>'SILVER DIAMOND NECKLACE',
            'price' =>185.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. ',
            'sku' =>'1029102-4',
            'image'=>'necklace/diamond-silver-necklace-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'name' =>'DIAMOND WEDDING RING',
            'price' =>95.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-2',
            'image'=>'rings/platinum-couple-ring-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 1,
            'name' =>'GOLDEN DIAMOND EARRINGS',
            'price' =>105.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-5',
            'image'=>'earings/gold-stones-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 3,
            'name' =>'SILVER DROP NECKLACE',
            'price' =>145.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-3',
            'image'=>'neckless/blue-stone-768x768.jpg',
              'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 1,
            'name' =>'EARRING & NECKLACE SET',
            'price' =>175.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-8',
            'image'=>'neckless/heart-pendant-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'name' =>'COUPLE ENGAGEMENT RINGS',
            'price' =>125.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-9',
            'image'=>'rings/diamond-ring-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'name' =>'COUPLE SILVER RING DIAMONDS',
            'price' =>99.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-10',
            'image'=>'rings/diamond-band-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 1,
            'name' =>'MAROON DIAMOND EARRINGS',
            'price' =>85.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-1',
            'image'=>'earings/polka-diamonds-768x768.jpg',
            
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 3,
            'name' =>'MAROON DIAMOND PENDANT',
            'price' =>100.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-7',
            'image'=>'neckless/diamond-set--768x768.jpg',
            
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
        DB::table('products')->insert([
            'type_id' => 3,
            'name' =>'MPURPLE HEART PENDANT',

            'price' =>105.00,
            'description' =>'Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus. Ut enim ad minim eniam, quis nostrud exercitation ullamco laboris. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Porttitor magna cras vel  libero hendrerit vel nam in sapien id urna egestas cursus.'

            ,
            'sku' =>'1029102-6',
            'image'=>'neckless/pocket-chain-768x768.jpg',
            'created_at'=>date("Y-m-d H:i:s") ,
        ]);
    }
}
