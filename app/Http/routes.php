<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function($id) {
    if ($id == 1) {
        $post = [
            'title' => 'this is the title',
            'content' => 'this is the content'
        ];
    } else {
        $post = [
            'title' => 'this is a different title',
            'content' => 'this is some other content'
        ];
    }
    return view('blog.post');
})->name('blog.post');

Route::get('about', function() {
    return view('other.about');
})->name('other.about');

//ADMIN
Route::group(['prefix' => 'admin'], function() {

    Route::get('', function() {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function() {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function() {
        return "admin.create is working";
    })->name('admin.create');

    Route::get('edit/{id}', function($id) {
        if ($id == 1) {
            $post = [
                'title' => 'this is the title',
                'content' => 'this is the content'
            ];
        } else {
            $post = [
                'title' => 'this is a different title',
                'content' => 'this is some other content'
            ];
        }
        return view('admin.edit');
    })->name('admin.edit');

    Route::post('edit', function() {
        return "admin.update is working";
    })->name('admin.update');
});

