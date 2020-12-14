<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'email' => 'admin@apps.ipb.ac.id',
            'password' => bcrypt('adminfmipa2020'),
        ]);

        DB::table('admin')->insert([
            'email' => 'admin2@apps.ipb.ac.id',
            'password' => bcrypt('admin2fmipa2020'),
        ]);
    }
}
