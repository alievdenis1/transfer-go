<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = Role::where('slug','Admin')->first();
        $user1 = new User();
        $user1->name = 'Demo';
        $user1->email = 'demo@demo.ru';
        $user1->password = Hash::make('sxnt0R2ibSw32i7');
        $user1->save();
        $user1->roles()->attach($developer);

    }
}
