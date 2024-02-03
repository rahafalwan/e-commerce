<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->delete();
        $statement = "ALTER TABLE type AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
       
        DB::table('type')->insert([
            'type_name' =>'Earings',
            'created_at'=>date("Y-m-d H:i:s") ,

            
        ]);
        DB::table('type')->insert([
            'type_name' =>'Rings',
            'created_at'=>date("Y-m-d H:i:s") ,
            
        ]);
        DB::table('type')->insert([
            'type_name' =>'Necklace',
            'created_at'=>date("Y-m-d H:i:s") ,
            
        ]);
       
        
        
    }
}
