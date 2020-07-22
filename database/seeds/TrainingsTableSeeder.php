<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trainings')->insert([
            'title'=>'Laravel Basics',
            'desc' =>'2 days Laravel course',
            'trainer' =>'Azim Othman',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Intermediate',
            'desc' =>'3 days Laravel course',
            'trainer' =>'Ishak Hamdi',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Advanced',
            'desc' =>'4 days Laravel course',
            'trainer' =>'Sha Alhaya',
        ]);
    }
}
