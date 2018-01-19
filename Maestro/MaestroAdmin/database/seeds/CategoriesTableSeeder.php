<?php

namespace Maestro\MaestroAdmin\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Главная',
            'alias' => '/'
        ]);

        DB::table('categories')->insert([
            'title' => 'Блог',
            'alias' => 'blog'
        ]);

        DB::table('categories')->insert([
            'title' => 'Компьютеры',
            'alias' => 'computers'
        ]);

        DB::table('categories')->insert([
            'title' => 'Интересное',
            'alias' => 'iteresting'
        ]);

        DB::table('categories')->insert([
            'title' => 'Советы',
            'alias' => 'soveti'
        ]);

        DB::table('categories')->insert([
            'title' => 'Портфолио',
            'alias' => 'portfolio'
        ]);

        DB::table('categories')->insert([
            'title' => 'Контакты',
            'alias' => 'contacts'
        ]);


        // Дочернии категории
        DB::table('categories')->insert([
            'title' => 'Блог Разд-1',
            'alias' => 'blog-razd-1',
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'title' => 'Блог Разд-2',
            'alias' => 'blog-razd-2',
            'parent_id' => 1
        ]);

        DB::table('categories')->insert([
            'title' => 'Интерес-1',
            'alias' => 'interes-1',
            'parent_id' => 3
        ]);

        DB::table('categories')->insert([
            'title' => 'Интерес-2',
            'alias' => 'interes-2',
            'parent_id' => 3
        ]);

        DB::table('categories')->insert([
            'title' => 'Совет-1',
            'alias' => 'sovet-1',
            'parent_id' => 4
        ]);
    }
}
