<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatAccesosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DengueController;
use App\Http\Controllers\IrasController;
use App\Http\Controllers\EdasController;
use App\Http\Controllers\InfluenzaController;
use App\Http\Controllers\HepatitisAController;
use App\Http\Controllers\HepatitisAgudaController;
use App\Http\Controllers\AlacranismoController;
use App\Http\Controllers\ChinkungunyaController;
use App\Http\Controllers\ZikaController;
use App\Http\Controllers\ViruelaController;
use App\Http\Controllers\EsaviController;
use App\Http\Controllers\SemanasController;

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
Route::get('/',['as'=>'login2', function () {
    if(Auth::user()==null){
        return view('auth/login');
    }else{
        return redirect()->route('home');
    }
}]);

Route::get('/contrares', [contraresController::class,'index'])->name('contrares');
Route::post('contrares', [contraresController::class,'actua'])->name('actua');

Auth::routes();
Route::group(['namespace'=>'admin', 'middleware' => 'val_acceso'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/usuarios',[UserController::class,'index'])->name('usuarios.index');
    Route::get('/usuarios/crear',[UserController::class,'create'])->name('usuarios.create');
    Route::post('/usuarios/guardar',[UserController::class,'save'])->name('usuarios.save');
    Route::get('/usuario/actualizar/{usuario}',[UserController::class,'actualizar'])->name('usuarios.actualizar');
    Route::post('/reg_den',[DengueController::class,'dengue'])->name('reg_den');
    Route::post('/reg_inf',[InfluenzaController::class,'influenza'])->name('reg_inf');
    Route::post('/reg_iras',[IrasController::class,'iras'])->name('reg_iras');
    Route::post('/reg_edas',[EdasController::class,'edas'])->name('reg_edas');
    Route::post('/reg_hep',[HepatitisAController::class,'hepatitisa'])->name('reg_hep');
    Route::post('/reg_hepa',[HepatitisAgudaController::class,'hepatitis'])->name('reg_hepa');
    Route::post('/reg_ala',[AlacranismoController::class,'alacran'])->name('reg_ala');
    Route::post('/reg_chi',[ChinkungunyaController::class,'chinkungunya'])->name('reg_chi'); 
    Route::post('/reg_zika',[ZikaController::class,'zika'])->name('reg_zika'); 
    Route::post('/reg_vir',[ViruelaController::class,'viruela'])->name('reg_vir');
    Route::post('/reg_esa',[EsaviController::class,'esavi'])->name('reg_esa'); 
    Route::post('/val_den',[DengueController::class,'validar'])->name('val_den');
    Route::post('/val_inf',[InfluenzaController::class,'validar'])->name('val_inf');
    Route::post('/val_ira',[IrasController::class,'validar'])->name('val_ira');
    Route::post('/val_eda',[EdasController::class,'validar'])->name('val_eda');
    Route::post('/val_hep',[HepatitisAController::class,'validar'])->name('val_hep');
    Route::post('/val_hepa',[AlacranismoController::class,'validar'])->name('val_hepa');
    Route::post('/val_chi',[ChinkungunyaController::class,'validar'])->name('val_chi');
    Route::post('/val_zika',[ZikaController::class,'validar'])->name('val_zika');
    Route::post('/val_vir',[ViruelaController::class,'validar'])->name('val_vir');
    Route::post('/val_esa',[EsaviController::class,'validar'])->name('val_esa');
    Route::get('/historial/dengue',[SemanasController::class,'dengue'])->name('historial.dengue');
    Route::get('/actualizar/dengue/{Dengue}',[DengueController::class,'actualizar'])->name('act_den');
    Route::post('/dengue/actualizar/{dengue}',[DengueController::class,'update'])->name('dengue.update');
    Route::get('/historial/influenza',[SemanasController::class,'influenza'])->name('historial.influenza');
    Route::get('/actualizar/influenza/{influenza}',[InfluenzaController::class,'actualizar'])->name('act_inf');
    Route::post('/influenza/actualizar/{influenza}',[InfluenzaController::class,'update'])->name('influenza.update');
    Route::get('/historial/iras',[SemanasController::class,'iras'])->name('historial.iras');
    Route::get('/actualizar/iras/{ira}',[IrasController::class,'actualizar'])->name('act_iras');
    Route::post('/iras/actualizar/{ira}',[IrasController::class,'update'])->name('iras.update');
    Route::get('/historial/edas',[SemanasController::class,'edas'])->name('historial.edas');
    Route::get('/actualizar/edas/{edas}',[EdasController::class,'actualizar'])->name('act_edas');
    Route::post('/edas/actualizar/{edas}',[EdasController::class,'update'])->name('edas.update');
    Route::get('/historial/hepatitis',[SemanasController::class,'hepatitis'])->name('historial.hepatitis');
    Route::get('/actualizar/hepatitis/{hepatitis}',[HepatitisAController::class,'actualizar'])->name('act_hep');
    Route::post('/hepatitis/actualizar/{hepatitis}',[HepatitisAController::class,'update'])->name('hepatitis.update');
    Route::get('/historial/hepatitisaguda',[SemanasController::class,'hepatitisaguda'])->name('historial.hepa');
    Route::get('/actualizar/hepatitisaguda/{hepatitis}',[HepatitisAgudaController::class,'actualizar'])->name('act_hepa');
    Route::post('/hepatitisaguda/actualizar/{hepatitis}',[HepatitisAgudaController::class,'update'])->name('hepatitisa.update');
    Route::get('/historial/alacranismo',[SemanasController::class,'alacranismo'])->name('historial.alacranismo');
    Route::get('/actualizar/alacranismo/{alacran}',[AlacranismoController::class,'actualizar'])->name('act_ala');
    Route::post('/alacranismo/actualizar/{alacran}',[AlacranismoController::class,'update'])->name('alacranismo.update');
    Route::get('/historial/chinkungunya',[SemanasController::class,'chinkungunya'])->name('historial.chinkungunya');
    Route::get('/actualizar/chinkungunya/{chinkungunya}',[ChinkungunyaController::class,'actualizar'])->name('act_chin');
    Route::post('/chinkungunya/actualizar/{chinkungunya}',[ChinkungunyaController::class,'update'])->name('chinkungunya.update');
    Route::get('/historial/zika',[SemanasController::class,'zika'])->name('historial.zika');
    Route::get('/actualizar/zika/{zika}',[ZikaController::class,'actualizar'])->name('act_zik');
    Route::post('/zika/actualizar/{zika}',[ZikaController::class,'update'])->name('zika.update');
    Route::get('/historial/viruela',[SemanasController::class,'viruela'])->name('historial.viruela');
    Route::get('/actualizar/viruela/{viruela}',[ViruelaController::class,'actualizar'])->name('act_vir');
    Route::post('/viruela/actualizar/{viruela}',[ViruelaController::class,'update'])->name('viruela.update');
    Route::get('/historial/esavi',[SemanasController::class,'esavi'])->name('historial.esavi');
    Route::get('/actualizar/esavi/{esavi}',[EsaviController::class,'actualizar'])->name('act_esa');
    Route::post('/esavi/actualizar/{esavi}',[EsaviController::class,'update'])->name('esavi.update');

    Route::get('registros/pdf', [PDFController::class,'registro'])->name('registros.pdf');

});