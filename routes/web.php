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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'GuestController@index')->name('page.index');
Route::get('/products', 'GuestController@ProductView')->name('page.products');
Route::get('/contact', 'GuestController@ContactView')->name('page.contact');
Route::get('/about', 'GuestController@AboutView')->name('page.about');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
	
	//Admin Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

		// ajax add new product form
	Route::post('/form/AddNewProduct', 'AdminController@AddNewProductAjaxForm');
		// add new product
	Route::post('/add/new/product', 'AdminController@AddNewProduct');
		// Dealer Product Purchase Form
	Route::post('/form/DealerProductPurchaseForm', 'AdminController@DealerProductPurchaseForm');
		// Tax Purchase form
	Route::post('/form/tax/purchase', 'AdminController@TaxPurchase');
		// add new supplier form
	Route::post('/form/add/new/supplier', 'AdminController@AddNewSupplier');
		// add supplier
	Route::post('/form/add/detail/Supplier', 'AdminController@AddSupplier');
	// submit tex purchase
	Route::post('/form/add/purchase', 'AdminController@AddTaxPurchase');
	// /tax form add purchase decription
	Route::post('/form/add/purchase/decription', 'AdminController@AddTaxPurchaseDescription');
	// add new leader
	Route::post('/form/AddNewLeader', 'AdminController@AddNewLeaderForm');
	// add new dealer
	Route::post('/form/AddNewDealer', 'AdminController@AddNewDealerForm');
});


Route::prefix('board')->group(function() {
	Route::get('/login', 'Auth\BoardLoginController@showLoginForm')->name('board.login');
	Route::post('/login', 'Auth\BoardLoginController@login')->name('board.login.submit');
	Route::get('/', 'BoardController@index')->name('board.dashboard');
	Route::get('/logout', 'Auth\BoardLoginController@boardLogout')->name('board.logout');
	//Board Password reset routes
	Route::post('/password/email', 'Auth\BoardForgotPasswordController@sendResetLinkEmail')->name('board.password.email');
	Route::get('/password/reset', 'Auth\BoardForgotPasswordController@showLinkRequestForm')->name('board.password.request');
	Route::post('/password/reset', 'Auth\BoardResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\BoardResetPasswordController@showResetForm')->name('board.password.reset');
	// open Leader page view
	Route::get('/leader', 'BoardController@OpenLeaderPage')->name('board.leader');
	// open ajax leader table page
	Route::get('/page/leader/table', 'BoardController@LeaderTablePage');
	// open ajax leader table page search
	Route::get('/page/leader/table/search', 'BoardController@LeaderTablePageSearch');
	// open ajax leader register page
	Route::get('/page/register/leader', 'BoardController@RegisterLeaderPage');
	// Rregister new Leader
	Route::post('/leader/register', 'BoardController@RegisterLeader');
	// verify leader
	Route::post('/leader/verify', 'BoardController@VerifyLeader');
	// board leader modal view return
	Route::get('/leaderTable/modal', 'BoardController@BoardModalData');
	// update Leader
	Route::post('/leader/update', 'BoardController@UpdateLeader');
	// delete leader
	Route::post('/leader/delete', 'BoardController@DeleteLeader');

	// open dealer page view
	Route::get('/dealer', 'BoardController@OpenDealerPage')->name('board.dealer');
	// open dealer register page
	Route::get('/page/register/dealer', 'BoardController@RegisterDealerPage');
	// Rregister new dealer
	Route::post('/dealer/register', 'BoardController@RegisterDealer');
	// open ajax leader table page
	Route::get('/page/dealer/table', 'BoardController@DealerTablePage');
	// verify leader
	Route::post('/dealer/verify', 'BoardController@VerifyDealer');
	// board dealer modal view return
	Route::get('/dealerTable/modal', 'BoardController@BoardDealerModalData');
	// update Dealer
	Route::post('/dealer/update', 'BoardController@UpdateDealer');
	// delete dealer
	Route::post('/dealer/delete', 'BoardController@DeleteDealer');
	// get board vat page
	Route::get('/vatIm', 'BoardController@VatPage')->name('board.vat');
	// get board vat add supplier ajax view
	Route::get('/add/vat/supplier', 'BoardController@VatAddSupplierView');
	// add board vat supplier 
	Route::post('/add/vat/supplier', 'BoardController@VatAddSupplier');
});


Route::prefix('employee')->group(function() {
	Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
	Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
	Route::get('/', 'EmployeeController@index')->name('employee.dashboard');
	Route::get('/logout', 'Auth\EmployeeLoginController@employeeLogout')->name('employee.logout');
	
	//Employee Password reset routes
	Route::post('/password/email', 'Auth\EmployeeForgotPasswordController@sendResetLinkEmail')->name('employee.password.email');
	Route::get('/password/reset', 'Auth\EmployeeForgotPasswordController@showLinkRequestForm')->name('employee.password.request');
	Route::post('/password/reset', 'Auth\EmployeeResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\EmployeeResetPasswordController@showResetForm')->name('employee.password.reset');
});

