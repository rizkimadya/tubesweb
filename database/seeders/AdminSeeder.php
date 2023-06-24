<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'roles' => 'admin',
            'nomor_ujian' => '123',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
