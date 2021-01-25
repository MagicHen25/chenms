<?php

use Illuminate\Database\Seeder;

class BdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Bdata::class)->times(50)->create();
    }
}
