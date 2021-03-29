<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'first_name'     => 'Admin',
            'last_name'      => 'Admin',
            'middle_name'    => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$Kdxxq2RuCE7ehhvBAWZiIO.ozF11lGBBZaO.j4Z2zWcri8YjB9tkW',
            'remember_token' => null,
            'created_at'     => '2019-06-23 12:13:02',
            'updated_at'     => '2019-06-23 12:13:02',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
