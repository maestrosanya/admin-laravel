<?php
namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('role_permission')->insert([
            'role_id'   => '1',
            'permission_id' => '1'
        ]);
        
    }
}