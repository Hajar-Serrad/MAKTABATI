<?php

use Illuminate\Support\Facades\Route;


/*           **********************     INSCRIPTION            ************************* */
Route::get('/welcome/register','Auth\RegisterBisController@showfirstform')->name('register1');
Route::post('/welcome/register','Auth\RegisterBisController@register')->name('register2');
Route::post('/registerbis','Auth\RegisterController@register')->name('register3');
Route::get('/registerbis/{id}','Auth\RegisterController@showform')->name('register4');

/*           **********************     CONNEXION            ************************* */
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('Adminlogin1');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('Adminlogin2');   
Route::get('/user/login', 'Auth\LoginController@showUserLoginForm')->name('Userlogin1');
Route::post('/user/login', 'Auth\LoginController@userLogin')->name('Userlogin2');   

/*           **********************     DECONNEXION            ************************* */
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/admin/logout', 'Auth\LoginController@adminLogout')->name('admin.logout');

/*   ********** ROUTES D'AUTHENTICATIONS DEFINIES PAR LARAVEL  *************** */
Auth::routes();    


/*           **********************     TEMPLATES            ************************* */
Route::view('/user','layouts.app')->name('back');
Route::view('/admin','layouts.appAdmin')->name('adminapp');

/*           **********************     LES HOMEPAGES            ************************* */
Route::view('/user/dashboard','home.homeUser')->name('home');
Route::view('/admin/dashboard','home.homeAdmin')->name('dashboard');

Route::get("/homeUser","HomeController@indexUser");
Route::get("/homeAdmin","HomeController@indexAdmin");


/*           **********************     DES PROPRIETES AJOUTEES POUR LA TEMPLATE            ************************* */
// plus //USER
Route::get("/about us", function(){
    return view("plus.about");
 })->name('about');
 Route::get("/privacy policy", function(){
    return view("plus.privacy");
 })->name('privacy');

// plusAdmin  //ADMIN
Route::get("/ABOUT US", function(){
   return view("plusAdmin.about");
})->name('about_us');
Route::get("/PRIVACY POLICY", function(){
   return view("plusAdmin.privacy");
})->name('privacy_policy');

/* ******************************************** */

/*           **********************     LES OPERATIONS DE CRUD           ************************* */
Route::view('/add','books.create'); // creer un livre
Route::resource('copies', 'CopyController')->only(['create','store', 'destroy']);  // crud -> copycontroller
Route::post('/copies/add', 'CopyController@add')->name('add'); // ajouter un exemplaire
Route::post('/copies/edit', 'CopyController@update1')->name('update1');  // modifier un exemplaire
Route::post('/copies/update', 'CopyController@update2')->name('update2');  // modifier un exemplaire
Route::post('/copies/delete', 'CopyController@delete')->name('delete');  // supprimer un exemplaire
Route::resource('books', 'BookController');  // crud -> bookcontroller
Route::resource('borrowing', 'BorrowingController')->only(['index', 'destroy']);  //  crud -> borrowingcontroller
Route::post("/admin/borrow","BorrowingController@borrow")->name('borrow');  //  emprunter un livre
Route::get("/admin/collect","BorrowingController@collect")->name('collect');  //  collecter les emails 
Route::get('/admin/books','BookController@indexAdmin')->name('index'); // afficher les livres pour l'admin
Route::get('/admin/books/{book}','BookController@showAdmin')->name('show');  // afficher un livre pour l'admin
Route::get('/admin/members','UserController@index')->name('members');

/*           **********************     LA PAGE D'ACCUEIL        ************************* */
Route::get("/welcome", function(){
   return view("welcome");
})->name('welcome');