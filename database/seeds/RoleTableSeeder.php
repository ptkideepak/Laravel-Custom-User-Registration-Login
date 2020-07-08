<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'admin'],
            ['name'=>'client'],
            ['name'=>'user'],
        ];

        DB::table('roles')->insert($data);
    }
}
