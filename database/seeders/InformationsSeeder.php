<?php

namespace Database\Seeders;

use App\Models\Information;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class InformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <11 ; $i++) { 
            # code...
            Information::create(
                [
                'user_id'=>$i,
                'comment'=> ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'attend'=>'Yes',
                'Numberofguests'=>rand(1,5)
                ]
                );
                
        }
    }
}
