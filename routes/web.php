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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('', function () {
    return view('utama');
});
Route::get('/test', function () {
    return view('uploadevaluasi');
});
Route::get('','DiklatController@index');
Route::post('/update-sekertaris','DiklatController@updatesekertaris');
Route::get('/editsekertaris-{id}','DiklatController@editsekertaris');
Route::get('/sekertaris','DiklatController@sekertaris');
Route::get('/email','EmailController@email');

Route::get('/perencanaan','DiklatController@perencanaan');
Route::get('/input-perencanaan','DiklatController@inputperencanaan');
Route::post('/input-perencanaan-kirim', 'DiklatController@perencanaankirim');
Route::get('/perencanaan/export_excel', 'DiklatController@perencanaan_excel');

Route::get('/pelaksanaan','DiklatController@pelaksanaan');
Route::get('/pelaksanaan-edit-{id}', 'DiklatController@editpelaksanaan');
Route::post('/pelaksanaan-update', 'DiklatController@pelaksanaanupdate');
Route::get('/pelaksanaan/export_excel', 'DiklatController@pelaksanaan_excel');

Route::get('/evaluasi','DiklatController@evaluasi');
Route::get('/upload-evaluasi','DiklatController@uploadevaluasi');
Route::get('/upload-evaluasi-{id}','DiklatController@uploadfileevaluasi');
Route::post('/upload-file-pengadaan-{id}','DiklatController@uploadfilepengadaan');
Route::post('/upload-file-pendukung-{id}','DiklatController@uploadfilependukung');
Route::get('/evaluasi/export_excel', 'DiklatController@evaluasi_excel');

Route::get('pengadaan-{id}-download', 'DiklatController@downloadpengadaan');
Route::get('pendukung-{id}-download', 'DiklatController@downloadpendukung');

Route::get('/datapeserta-{id}','DiklatController@datapeserta');

Route::get('/peserta','DiklatController@peserta');
Route::get('/inputpeserta','DiklatController@inputpeserta');
Route::post('/inputpesertakirim','DiklatController@inputpesertakirim');

Route::get('/edit-sekertaris-{id}','DiklatController@editsekertaris');

Route::get('/template', function()
{
	return view('template');
}
);

Route::get('/cetak-sp','DiklatController@cetaksp');

Route::get('/ekspor-{id}', 'DiklatController@ekspor');

Route::get('/peserta/export_excel', 'DiklatController@peserta_excel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
