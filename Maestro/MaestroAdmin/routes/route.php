<?php

/**
 * Административная часть
 */
Auth::routes();

Route::group([
        'prefix' => 'admin',
        'namespace' => 'Maestro\\MaestroAdmin\\App\\Http\\Controllers',
        'middleware' => ['web', 'admin', 'auth']
        ],
        function () {

            Route::get('/', 'IndexAdminController@index')->name('admin');
            Route::post('/', 'IndexAdminController@getPost');

            Route::get('/articles', 'ArticleAdminController@index')->name('admin.articles');
            Route::get('/articles/edit/{id}', 'ArticleAdminController@edit')->name('admin.articles.edit');
            Route::get('/article/create', 'ArticleAdminController@create')->name('admin.article.create');
            

           // Route::get('/login', 'Auth\LoginAdminController@showLoginForm')->name('admin.login');
          //  Route::post('/login', 'Auth\LoginAdminController@login');
          //  Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');


           // Route::get('/login-admin', 'Auth\LoginAdminController@showLoginForm')->name('admin.login');



          //  Route::get('/maestro', 'IndexAdminController@index')->name('admin');

});

