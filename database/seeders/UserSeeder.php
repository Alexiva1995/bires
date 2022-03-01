<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=> 'admin bires',
            'name'=> 'admin',
            'lastname'=> Str::random(5),
            'phone'=> Str::random(5),
            'admin'=> '1',
            'country_id'=> '1',
            'referred_id'=> null,
            'email'=> 'admin@bires.com',
            'email_verified_at'=> Carbon::now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
