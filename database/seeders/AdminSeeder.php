<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        $admins = [
            [
                'name' => 'medhat ahmed',
                'email' => 'medhatmero552000@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => 0
            ],
            [
                'name' => 'amr medhat',
                'email' => 'amr@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => 0
            ],
            [
                'name' => 'ahmed medhat',
                'email' => 'ahmed@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => 0
            ]
        ];
        foreach($admins as $admin){
            Admin::create($admin);
        }
    }
}
