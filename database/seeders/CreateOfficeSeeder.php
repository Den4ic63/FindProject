<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        name	country	city	office_type
        $offices = [
            [
                'name' => 'ЕЕвтех',
                'country' => 'Беларусь',
                'city' => 'Минск',
                'office_type'=> 'Главный',
            ],
            [
                'name' => 'ЕЕвтех2',
                'country' => 'Беларусь',
                'city' => 'Гродно',
                'office_type'=> 'Обычный',
            ],
            [
                'name' => 'ЕЕвтех3',
                'country' => 'Польша',
                'city' => 'Варшава',
                'office_type'=> 'Обычный',
            ],
            [
                'name' => 'ЕЕвтех4',
                'country' => 'Польша',
                'city' => 'Варшава',
                'office_type'=> 'Обычный',
            ],
            [
                'name' => 'ЕЕвтех5',
                'country' => 'Армения',
                'city' => 'Есть',
                'office_type'=> 'Обычный',
            ],
        ];

        Office::insert($offices);
    }
}
