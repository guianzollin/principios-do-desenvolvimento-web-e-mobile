<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Giovani';
        $user->email = 'giovanijb10@hotmail.com';
        $user->save();

        $user = new User;
        $user->name = 'Darlan';
        $user->email = 'darlan@hotmail.com';
        $user->save();
    }
}
