<?php

namespace Database\Seeders;

use App\Models\Requisite;
use Illuminate\Database\Seeder;

class RequisiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Requisite();
        $admin->number_card = '5555 4444 3333 2222 1111';
        $admin->save();
    }
}
