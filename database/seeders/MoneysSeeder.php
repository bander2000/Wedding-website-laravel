<?php

namespace Database\Seeders;

use App\Models\Money;
use Illuminate\Database\Seeder;

class MoneysSeeder extends Seeder
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
            Money::create(
                [
                'user_id'=>$i,
                'amount'=>rand(5, 50)
                ]
                );
                
        }
    }
}
