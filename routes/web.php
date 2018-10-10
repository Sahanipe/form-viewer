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

Route::get('/', function () {
    return view('pdf-generator');
});
// Route::get('edit/profile',function () {
//     return view('pdf-generator');
// });
Route::get('edit/profile','PdfGeneratorController@generatePdf');

// Route::get('/certificates/certificate',function(){
//     return view('certificates.certificate');
// });
// Route::get('/pca1',function(){
//     return view('PCA.PCA1');
// });
// Route::get('/pca2',function(){
//     return view('PCA.PCA2');
// });
// Route::get('/pca3',function(){
//     return view('PCA.PCA3');
// });
// Route::get('/pca4',function(){
//     return view('PCA.PCA4');
// });
// Route::get('/pca10',function(){
//     return view('PCA.PCA10');
// });
// Route::get('/pca/extraordinary',function(){
//     return view('PCA.Extraordinary');
// });
// Route::get('/registration/form5',function(){
//     return view('registration.form-5');
// });
// Route::get('/registration/form18',function(){
//     return view('registration.form-18');
// });
// Route::get('/registration/form19',function(){
//     return view('registration.form-19');
// });
// Route::get('/registration/form44',function(){
//     return view('registration.form-44');
// });
// Route::get('/registration/form45',function(){
//     return view('registration.form-45');
// });
// Route::get('/registration/form46',function(){
//     return view('registration.form-46');
// });
// Route::get('/registration/form1',function(){
//     return view('registration.form-1');
// });
// Route::get('/secretary/firm',function(){
//     return view('secretary.se-firm');
// });
// Route::get('/secretary/individual',function(){
//     return view('secretary.se-individual');
// });
// Route::get('/secretary/firm',function(){
//     return view('secretary.se-firm');
// });
// Route::get('/auditor/certificate',function(){
//     return view('auditors.auditors-certificate');
// });
// Route::get('/pdf',function(){
//     return view('pdf-generator');
// });

// Route::get('edit/profile', function(){
//     return view('pdf-generator');
// });

