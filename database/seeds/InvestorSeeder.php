<?php

use Illuminate\Database\Seeder;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'id'=> 1,
              'name'=> 'Ian Gabriel Dupa',
              'address'=> 'Ilijan Norte, Tubigon, Bohol',
              'phone'=> '09075125112',
              'investment'=> 10000,
            ],
            [    
                'id'=> 2,
                'name'=> 'Mark Joseph Dupa',
                'address'=> 'Ilijan Norte, Tubigon, Bohol',
                'phone'=> '09075125113',
                'investment'=> 20000,
              ],

        ];
  
        foreach($data as $i){
            \App\Investor::create($i);
        }
    }
}
