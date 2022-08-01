<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'is_admin' => 'admin',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@gmail.com',
                'email_verified_at' => now(),
                'is_admin' => 'kasir',
                'password' => bcrypt('12345678'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
