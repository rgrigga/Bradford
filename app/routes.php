<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::any('/',function(){
//     dd();
// });

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

    # Comment Management
    Route::get('comments/{id}/edit', 'AdminCommentsController@getEdit')
        ->where('id', '[0-9]+');
    Route::post('comments/{id}/edit', 'AdminCommentsController@postEdit')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::get('comments/{id}/delete', 'AdminCommentsController@getDelete')
        ->where('id', '[0-9]+');
    Route::post('comments/{id}/delete', 'AdminCommentsController@postDelete')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{id}/show', 'AdminBlogsController@getShow')
        ->where('id', '[0-9]+');
    Route::get('blogs/{id}/edit', 'AdminBlogsController@getEdit')
        ->where('id', '[0-9]+');
    Route::post('blogs/{id}/edit', 'AdminBlogsController@postEdit')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::get('blogs/{id}/delete', 'AdminBlogsController@getDelete')
        ->where('id', '[0-9]+');
    Route::post('blogs/{id}/delete', 'AdminBlogsController@postDelete')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{id}/show', 'AdminUsersController@getShow')
        ->where('id', '[0-9]+');
    Route::get('users/{id}/edit', 'AdminUsersController@getEdit')
        ->where('id', '[0-9]+');
    Route::post('users/{id}/edit', 'AdminUsersController@postEdit')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::get('users/{id}/delete', 'AdminUsersController@getDelete')
        ->where('id', '[0-9]+');
    Route::post('users/{id}/delete', 'AdminUsersController@postDelete')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{id}/show', 'AdminRolesController@getShow')
        ->where('id', '[0-9]+');
    Route::get('roles/{id}/edit', 'AdminRolesController@getEdit')
        ->where('id', '[0-9]+');
    Route::post('roles/{id}/edit', 'AdminRolesController@postEdit')
        ->where('id', '[0-9]+')
        ->before('csrf');
    Route::get('roles/{id}/delete', 'AdminRolesController@getDelete')
        ->where('id', '[0-9]+');
    Route::controller('roles', 'AdminRolesController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

//:: User Account Routes ::

Route::group(array('before' => 'auth'), function()
{
    Route::get('user/settings', 'UserController@getSettings');

});
# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

# Contact Us Static Page
Route::get('contact-us', function()
{
    return View::make('contact');
});

// Return search page
Route::get('search', function()
{
    return View::make('search');
    //todo: controller
});

// Return about us page
Route::get('about', "HomeController@getAbout");
// {
    // return View::make('home.about');
// }

# links
# rgrigga
//Route::resource('demo', 'DemoController');

Route::group(array('before' => 'auth'), function()
{

    // Route::get('demo/{page}',function(){
    //     return View::make('demo.{page}');
    // });

    Route::get('demo/{page}','DemoController@getView');
    Route::get('demo','DemoController@getIndex');



});

Route::resource('home','HomeController');

////////////////// PHOTOS /////////////////////
//
//  https://tutsplus.com/lesson/routes-and-regular-expressions/
//
//
//

Route::resource('photos', 'PhotosController');
Route::get('photos/{$id}',function(){
    return $id;
})->where('id','\d+');


////////////////SURLS///////////////////////
//
//  Surls are short URL's.  Based on tutsplus.com
//  
//  Todo: Tags!
//



Route::post('surl', function()
{
    $url = Input::get('url');
    // $url = preg_replace('#^https?://#', '', $longurl);
    

    // validate url
    $v = Surl::validate(array('url' => $url));


    if($v !== true ) {
            return Redirect::to('surl/', array($v->errors));
    }
        
    // if url already in table, return it
    $record = Surl::where_url($url)->first();

    if ( $record ){
        //then return it
        return View::make('surl.show')
        ->with(array(
            'surl' => $record->surl,
            'url' => $record->url
            ));
    }
        
    $surl = Surl::get_unique_short_url();
        
    // else, add new row & return shortened url
    $row = Surl::create(array(
        'url'   => $url,
        'surl'  => $surl //slug
    ));
//dd($row);
    if( $row ){


        return View::make('surl.show')->with(array('surl' => $row->surl, 'url' => $row->url));
        //return "Found!";
    }
    return "Something went horribly wrong!";
});

Route::get('surl/{surl}', 'SurlController@getView');
Route::resource('surl', 'SurlController');


# Posts - Second to last set, match slug
Route::get('blog/{postSlug}', 'BlogController@getView');
Route::post('blog/{postSlug}', 'BlogController@postView');
Route::get('blog', 'BlogController@getIndex');
// Route::get('blog/{postSlug}', 'BlogController@getView');
// Route::post('blog/{postSlug}', 'BlogController@postView');

# Index Page - Last route, no matches
Route::get('/{homeSlug}', 'HomeController@getView');

Route::get('/', 'HomeController@getIndex');








