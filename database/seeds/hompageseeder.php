<?php

use Illuminate\Database\Seeder;

class hompageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
               factory(App\homepage::class, 7)->create();

    }
}
