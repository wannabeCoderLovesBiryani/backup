<?php
use App\Providers\RouteServiceProvider
/*


Named routes is an important feature in the Laravel framework.
It allows you to refer to the routes when generating URLs or redirects to the specific routes.
In short, we can say that the naming route is the way of providing a nickname to the route.
*/

Route::get('/', 'HomeController@home')->name('home')
  // ->middleware('auth')
  ;

// optional route parameter
Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {
    $pages = [
        1 => [
            'title' => 'from page 1',
        ],
        2 => [
            'title' => 'from page 2',
        ],
    ];
    $welcomes = [1 => '<b>Hello</b> ', 2 => 'Welcome to '];

    return view('blog-post', [
        'data' => $pages[$id],
        'welcome' => $welcomes[$welcome],
    ]);
# Regular Expression Constraints

/*
The where method accepts the name of the parameter and a regular expression defining how
the parameter should be constrained:
*/

Route::get('/user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

oute::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');

Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');

Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');


Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/secret', 'HomeController@secret')
  ->name('secret')
  ->middleware('can:home.secret');
Route::resource('posts', 'PostController');
Route::get('/posts/tag/{tag}', 'PostTagController@index')->name('posts.tags.index');

Route::resource('posts.comments', 'PostCommentController')->only(['index', 'store']);
Route::resource('users.comments', 'UserCommentController')->only(['store']);
Route::resource('users', 'UserController')->only(['show', 'edit', 'update']);

Route::get('mailable', function () {
    $comment = App\Comment::find(1);
    return new App\Mail\CommentPostedMarkdown($comment);
});

Auth::routes();
