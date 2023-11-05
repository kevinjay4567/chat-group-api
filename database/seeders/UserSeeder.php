<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Test',
            'email' => 'test@mail.com',
            'password' => Hash::make('test'),
        ]);

        DB::table('channel_user')->insert(['user_id' => $user->id, 'channel_id' => 1]);
    }
}
