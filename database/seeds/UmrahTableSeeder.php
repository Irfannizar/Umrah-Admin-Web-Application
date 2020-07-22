<?php

use Illuminate\Database\Seeder;

class UmrahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('umrah')->insert([
            'agency'=>'ALFAJR TRAVEL & TOURS',
            'package' =>'Pakej Marwah',
            'price' =>'RM5890',
            'flight' =>'Malindo Air'
        ]);

        DB::table('umrah')->insert([
            'agency'=>'ALFAJR TRAVEL & TOURS',
            'package' =>'Pakej Raudhah',
            'price' =>'RM5290',
            'flight' =>'Air Asia'
        ]);

        DB::table('umrah')->insert([
            'agency'=>'PDC TRAVEL',
            'package' =>'Pakej MyJimat',
            'price' =>'RM5350',
            'flight' =>'Air Asia'
        ]);

        DB::table('umrah')->insert([
            'agency'=>'PDC TRAVEL',
            'package' =>'Pakej MyGolden',
            'price' =>'RM6450',
            'flight' =>'Air Asia'
        ]);

        DB::table('umrah')->insert([
            'agency'=>'PDC TRAVEL',
            'package' =>'Pakej MyPremium',
            'price' =>'RM7850',
            'flight' =>'Air Asia'
        ]);

    }
}
