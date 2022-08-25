<?php

namespace Database\Seeders;

use App\Models\GlobalSetting;
use Illuminate\Database\Seeder;

class GlobalConfigSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gb = GlobalSetting::first();
        if ($gb == null) {
            $nGb = new GlobalSetting;
            $nGb->minsum = 100;
            $nGb->save();
        }
    }
}
