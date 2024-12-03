<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Auth Routes
Route::get('/register', [AuthController::class, 'showregisterform'])->name('showregister')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showloginform'])->name('showlogin')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Employees Table Route

Route::get('/users', [EmployeeController::class,'index'])->name('custom.users');

Route::get('/create', function(){
        return view('custom.create');
    })->name('create.users');
Route::post('/create',[EmployeeController::class, 'store'])->name('store');

Route::get('/edit/{id}',[EmployeeController::class, 'edit'])->name('custom.edit');

Route::post('/update/{id}',[EmployeeController::class,'update'])->name('update');

Route::get('delete/{id}',[EmployeeController::class,'destroy'])->name('detroy');


Route::get('/', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('Dashboard')->middleware('auth');
Route::get('/calendar', [\App\Http\Controllers\HomeController::class, 'calendar'])->name('Calendar');
Route::get('/chat', [\App\Http\Controllers\HomeController::class, 'chat'])->name('Chat');
Route::get('/blog-detail', [\App\Http\Controllers\HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/blog-grid', [\App\Http\Controllers\HomeController::class, 'blogGrid'])->name('blogGrid');
Route::get('/blog-list', [\App\Http\Controllers\HomeController::class, 'blogList'])->name('blogList');
Route::get('/contacts-grid', [\App\Http\Controllers\HomeController::class, 'contactsGrid'])->name('contactsGrid');
Route::get('/contacts-list', [\App\Http\Controllers\HomeController::class, 'contactsList'])->name('contactsList');
Route::get('/contacts-profile', [\App\Http\Controllers\HomeController::class, 'contactsProfile'])->name('contactsProfile');
Route::get('/email-inbox', [\App\Http\Controllers\HomeController::class, 'emailInbox'])->name('emailInbox');
Route::get('/email-read', [\App\Http\Controllers\HomeController::class, 'emailRead'])->name('emailRead');
Route::get('/invoices-detail', [\App\Http\Controllers\HomeController::class, 'invoicesDetail'])->name('invoicesDetail');
Route::get('/invoices-list', [\App\Http\Controllers\HomeController::class, 'invoicesList'])->name('invoicesList');
Route::get('/avatars', [\App\Http\Controllers\HomeController::class, 'avatars'])->name('avatars');
Route::get('/buttons', [\App\Http\Controllers\HomeController::class, 'buttons'])->name('buttons');
Route::get('/cards', [\App\Http\Controllers\HomeController::class, 'cards'])->name('cards');
Route::get('/charts-apex', [\App\Http\Controllers\HomeController::class, 'chartsApex'])->name('chartsApex');
Route::get('/charts-chartjs', [\App\Http\Controllers\HomeController::class, 'chartsChartjs'])->name('chartsChartjs');
Route::get('/charts-echart', [\App\Http\Controllers\HomeController::class, 'chartsEChart'])->name('chartsEChart');
Route::get('/charts-knob', [\App\Http\Controllers\HomeController::class, 'chartsKnob'])->name('chartsKnob');
Route::get('/charts-sparkline', [\App\Http\Controllers\HomeController::class, 'chartsSparkline'])->name('chartsSparkline');
Route::get('/colors', [\App\Http\Controllers\HomeController::class, 'colors'])->name('colors');
Route::get('/coming-soon', [\App\Http\Controllers\HomeController::class, 'comingSoon'])->name('comingSoon');
Route::get('/confirm-mail', [\App\Http\Controllers\HomeController::class, 'confirmMail'])->name('confirmMail');
Route::get('/dropdown', [\App\Http\Controllers\HomeController::class, 'dropdown'])->name('dropdown');
Route::get('/email-verification', [\App\Http\Controllers\HomeController::class, 'emailVerification'])->name('emailVerification');
Route::get('/extended-lightbox', [\App\Http\Controllers\HomeController::class, 'extendedLightbox'])->name('extendedLightbox');
Route::get('/extended-notifications', [\App\Http\Controllers\HomeController::class, 'extendedNotifications'])->name('extendedNotifications');
Route::get('/extended-rangeslider', [\App\Http\Controllers\HomeController::class, 'extendedRangeSlider'])->name('extendedRangeSlider');
Route::get('/extended-rating', [\App\Http\Controllers\HomeController::class, 'extendedRating'])->name('extendedRating');
Route::get('/extended-sweet-alert', [\App\Http\Controllers\HomeController::class, 'extendedSweetalert'])->name('extendedSweetalert');
Route::get('/faqs', [\App\Http\Controllers\HomeController::class, 'faqs'])->name('faqs');
Route::get('/file-uploads', [\App\Http\Controllers\HomeController::class, 'fileUploads'])->name('fileUploads');
Route::get('/flexbox&grid', [\App\Http\Controllers\HomeController::class, 'flexboxGrid'])->name('flexboxGrid');
Route::get('/form-advanced', [\App\Http\Controllers\HomeController::class, 'formAdvanced'])->name('formAdvanced');
Route::get('/form-editors', [\App\Http\Controllers\HomeController::class, 'formEditors'])->name('formEditors');
Route::get('/form-elements', [\App\Http\Controllers\HomeController::class, 'formElements'])->name('formElements');
Route::get('/form-mask', [\App\Http\Controllers\HomeController::class, 'formMask'])->name('formMask');
Route::get('/form-validation', [\App\Http\Controllers\HomeController::class, 'formValidation'])->name('formValidation');
Route::get('/form-wizard', [\App\Http\Controllers\HomeController::class, 'formWizard'])->name('formWizard');
Route::get('/general', [\App\Http\Controllers\HomeController::class, 'general'])->name('general');
Route::get('/icons-boxicons', [\App\Http\Controllers\HomeController::class, 'iconsBoxIcons'])->name('iconsBoxIcons');
Route::get('/icons-dripicons', [\App\Http\Controllers\HomeController::class, 'iconsDripIcons'])->name('iconsDripIcons');
Route::get('/icons-materialdesign', [\App\Http\Controllers\HomeController::class, 'iconsMaterialDesign'])->name('iconsMaterialDesign');
Route::get('/lock-screen', [\App\Http\Controllers\HomeController::class, 'lockScreen'])->name('lockScreen');
// Route::get('/login',[\App\Http\Controllers\HomeController::class,'login'])->name('login');
// Route::get('/logout',[\App\Http\Controllers\HomeController::class,'logout'])->name('logout');
Route::get('/maintenance', [\App\Http\Controllers\HomeController::class, 'maintenance'])->name('maintenance');
Route::get('/maps-google', [\App\Http\Controllers\HomeController::class, 'mapsGoogle'])->name('mapsGoogle');
Route::get('/maps-leaflet', [\App\Http\Controllers\HomeController::class, 'mapsLeaflet'])->name('mapsLeaflet');
Route::get('/maps-vector', [\App\Http\Controllers\HomeController::class, 'mapsVector'])->name('mapsVector');
Route::get('/modals', [\App\Http\Controllers\HomeController::class, 'modals'])->name('modals');
Route::get('/pricing', [\App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');
Route::get('/progress', [\App\Http\Controllers\HomeController::class, 'progress'])->name('progress');
Route::get('/recoverpw', [\App\Http\Controllers\HomeController::class, 'recoverPassword'])->name('recoverPassword');
// Route::get('/register',[\App\Http\Controllers\HomeController::class,'register'])->name('register');
Route::get('/sizing', [\App\Http\Controllers\HomeController::class, 'sizing'])->name('sizing');
Route::get('/tables-basic', [\App\Http\Controllers\HomeController::class, 'tablesBasic'])->name('tablesBasic');
Route::get('/tables-datatable', [\App\Http\Controllers\HomeController::class, 'tablesDatatable'])->name('tablesDatatable');
Route::get('/tables-editable', [\App\Http\Controllers\HomeController::class, 'tablesEditable'])->name('tablesEditable');
Route::get('/tablesResponsive', [\App\Http\Controllers\HomeController::class, 'tablesResponsive'])->name('tablesResponsive');
Route::get('/tabs&accordions', [\App\Http\Controllers\HomeController::class, 'tabsAccordions'])->name('tabsAccordions');
Route::get('/timeline', [\App\Http\Controllers\HomeController::class, 'timeLine'])->name('timeLine');
Route::get('/toasts', [\App\Http\Controllers\HomeController::class, 'toasts'])->name('toasts');
Route::get('/two-step-verification', [\App\Http\Controllers\HomeController::class, 'twoStepVerification'])->name('twoStepVerification');
Route::get('/typography', [\App\Http\Controllers\HomeController::class, 'typography'])->name('typography');
Route::get('/utilities', [\App\Http\Controllers\HomeController::class, 'utilities'])->name('utilities');
