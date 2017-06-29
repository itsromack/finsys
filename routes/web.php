<?php
Auth::routes();

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/home', 'HomeController@index');

Route::group([
    'middleware' => [
        'auth'
    ]
], function() {
    // Dashboard
    Route::get('/dashboard', 'DashboardController@index');

    // Clients
    Route::group(['prefix' => 'clients'], function() {
        Route::get('/', 'ClientsController@index')->name('list_clients');
        // Route::get('/new', 'ClientsController@create');
        // Route::post('/create', 'ClientsController@store');
        // Route::post('/update', 'ClientsController@update');
        // Route::get('/{id}', 'ClientsController@show');
    });

});
