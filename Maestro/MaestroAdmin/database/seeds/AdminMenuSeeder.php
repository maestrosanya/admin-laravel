<?php

namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_menu')->insert([
            'title' => 'Главная',
            'slug'  => '/'

        ]);
    }
}
