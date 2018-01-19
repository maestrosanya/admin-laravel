<?php

namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
   
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Пользователи
        $this->call(UsersTableSeeder::class);

        // Роли пользователей
        $this->call(RolesTableSeeder::class);

        // Привелегии пользователей
        $this->call(PermissionTableSeeder::class);

        // Связь ролей и привилегий
        $this->call(RolePermissionTableSeeder::class);

        // Связь ролей и пользователей
        $this->call(RoleUserTableSeeder::class);

        // Главное меню
        $this->call(AdminMenuSeeder::class);

        // Категории
        $this->call(CategoriesTableSeeder::class);

        // Записи
        $this->call(ArticlesTableSeeder::class);
    }
}
