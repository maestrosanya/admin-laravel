<?php
namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maestro\MaestroAdmin\App\Helpers\RoutesHelper;

class PermissionTableSeeder extends Seeder
{
    private $routesAdmin;

    public function __construct()
    {
        $this->routesAdmin = new RoutesHelper();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()             
    {

        DB::table('permission')->insert([
            'id'   => '1',
            'permission' => 'all',
            'view' => json_encode($this->routesAdmin->get()),
            'edit' => json_encode($this->routesAdmin->get())
        ]);
        
    }
}