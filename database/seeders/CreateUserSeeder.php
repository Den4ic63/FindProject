<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.ru',
                'password' => Hash::make('11111111'),
                'role_id'=> '1',
            ],
            [
                'name' => 'Test',
                'email' => 'test@mail.ru',
                'password' => Hash::make('11111111'),
                'role_id'=> '2',
            ],
            [
                'name' => 'Test1',
                'email' => 'test1@mail.ru',
                'password' => Hash::make('11111111'),
                'role_id'=> '2',
            ],
            [
                'name' => 'Test2',
                'email' => 'test2@mail.ru',
                'password' => Hash::make('11111111'),
                'role_id'=> '2',
            ],
            [
                'name' => 'Test3',
                'email' => 'test3@mail.ru',
                'password' => Hash::make('11111111'),
                'role_id'=> '2',
            ],
        ];

        for ($i = 1; $i <= 50; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('11111111'),
                'role_id'=>'2'
            ]);
        }

        User::insert($users);
    }
}
