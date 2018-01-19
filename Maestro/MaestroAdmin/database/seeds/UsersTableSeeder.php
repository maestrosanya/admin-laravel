<?php
namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id'             => '1',
            'name'           => 'admin',
            'email'          => 'admin@admin.ru',
            'password'       => bcrypt('admin123'),
            'remember_token' => str_random(10)
        ]);

        DB::table('users')->insert([
            'name'           => 'Иван Иванович',
            'email'          => 'ivan109@2ivan33.com',
            'password'       => bcrypt('secret'),
            'remember_token' => str_random(10)
        ]);

    }
}
