<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\usermodel; // Adjusted model import

class usermodelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usermodels')->insert([
            'username' => 'jkl',
            'password' => Hash::make('12344')
        ]);
    }
}
