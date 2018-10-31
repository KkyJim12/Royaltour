<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UIViewController@ShowIndex');

Route::get('/category','UIViewController@ShowCategory');

Route::get('/aboutus','UIViewController@ShowAboutus');

Route::get('/login','UIViewController@ShowLogin');

Route::post('/login-process','MemberController@LoginProcess');

Route::get('/logout-process','MemberController@LogoutProcess');

Route::get('/register-process','MemberController@RegisterProcess');

/* Backend */

Route::middleware(['admin'])->group(function () {
  /* Admin Dashboard */
  Route::get('/admin','AdminUIController@ShowDashboard')->name('admin-dashboard');



  /**************************** All Continent Function **************************/

  /* Show Continent List */
  Route::get('/admin/admin-continent','AdminUIController@ShowContinent');

  /* Show Create Continent */
  Route::get('/admin/admin-create-continent','AdminUIController@ShowCreateContinent');

  /* Create Continent Process */
  Route::post('/admin/admin-create-continent-process','AdminContinentController@AdminCreateContinentProcess');

  /* Show Edit Continent */
  Route::get('/admin/admin-edit-continent/{continent_id}','AdminUIController@ShowEditContinent');

  /* Edit Continent Process */
  Route::post('/admin/admin-edit-continent-process/{continent_id}','AdminContinentController@AdminEditContinentProcess');

  /* Delete Continent Process */
  Route::post('/admin/admin-delete-continent-process/{continent_id}','AdminContinentController@AdminDeleteContinentProcess');

  /**************************** End Continent Function **************************/





  /**************************** All Country Function **************************/

  /* Show Country List */
  Route::get('/admin/admin-country','AdminUIController@ShowCountry')->name('admin-country');

  /* Show Create country */
  Route::get('/admin/admin-create-country','AdminUIController@ShowCreateCountry');

  /* Create Country Process */
  Route::post('/admin/admin-create-country-process','AdminCountryController@AdminCreateCountryProcess');

  /* Show Edit Country */
  Route::get('/admin/admin-edit-country/{country_id}','AdminUIController@ShowEditCountry');

  /* Edit Country Process */
  Route::post('/admin/admin-edit-country-process/{country_id}','AdminCountryController@AdminEditCountryProcess');

  /* Delete Country Process */
  Route::post('/admin/admin-delete-country-process/{country_id}','AdminCountryController@AdminDeleteCountryProcess');

  /**************************** End Country Function **************************/


  /**************************** All City Function **************************/

  /* Show City List */
  Route::get('/admin/admin-city','AdminUIController@ShowCity')->name('admin-city');

  /* Show Create City */
  Route::get('/admin/admin-create-city','AdminUIController@ShowCreateCity');

  /* Create Country Process */
  Route::post('/admin/admin-create-city-process','AdminCityController@AdminCreateCityProcess');

  /* Show Edit City */
  Route::get('/admin/admin-edit-city/{city_id}','AdminUIController@ShowEditCity');

  /* Edit City Process */
  Route::post('/admin/admin-edit-city-process/{city_id}','AdminCityController@AdminEditCityProcess');

  /* Delete City Process */
  Route::post('/admin/admin-delete-city-process/{city_id}','AdminCityController@AdminDeleteCityProcess');

  /**************************** End City Function **************************/
});
