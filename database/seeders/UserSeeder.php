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
            'username'=> 'admin zoe',
            'name'=> 'admin',
            'lastname'=> Str::random(5),
            'phone'=> Str::random(5),
            'country_id'=> '1',
            'referred_id'=> '1',
            'email'=> 'admin@zoe.com',
            'email_verified_at'=> Carbon::now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
