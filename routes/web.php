<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\atividadeController;
use App\Http\Controllers\DesenvolvedoresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\satividadesController;
use App\Http\Controllers\ExamesController;

Route::get('/', [siteController::class, 'index'])->name('inicial');

Route::get('/home', [siteController::class, 'menuone'])->name('site.menuone')->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');



Route::get('/desenvolvedores', [siteController::class, 'menutwo'])->name('site.menutwo')->middleware('auth');
Route::get('/atividades', [siteController::class, 'menutree'])->name('site.menutree')->middleware('auth');
Route::get('/satividades', [siteController::class, 'menufour'])->name('site.menufour')->middleware('auth');
Route::get('/exame', [siteController::class, 'menufive'])->name('site.menufive')->middleware('auth');




Route::post('/auth',[LoginController::class, 'auth'])->name('login.auth');


Route::get('/admin/usuario/create', [siteController::class, 'create'])->name('admin.usuario.create')->middleware('auth');

Route::get('/admin/add_users', [siteController::class, 'gone'])->name('admin.usuario.add')->middleware('auth');
Route::delete('/admin/usuario/delete{id}', [siteController::class, 'destroy'])->name('admin.delete')->middleware('auth');

Route::post('/admin/add_users/store',[siteController::class, 'store'] )->name('admin.usuario.store')->middleware('auth');

Route::get('/admin/add_atividades', [atividadeController::class, 'index'])->name('admin.atividades.add')->middleware('auth');

Route::get('/admin/add_exames', [ExamesController::class, 'index'])->name('admin.exames.add')->middleware('auth');


Route::get('/admin/add_desenvolvedores', [DesenvolvedoresController::class, 'index'])->name('admin.desenvolvedores.add')->middleware('auth');


Route::get('/admin/atividades/create', [atividadeController::class, 'create'])->name('admin.atividade.create')->middleware('auth');

Route::post('/admin/add_atividades/store',[atividadeController::class, 'store'] )->name('admin.atividade.store')->middleware('auth');

Route::post('/admin/add_exames/store',[ExamesController::class, 'store'] )->name('admin.exames.store')->middleware('auth');

Route::delete('/admin/atividades/delete{id}', [atividadeController::class, 'destroy'])->name('admin.at.delete')->middleware('auth');


Route::get('/atividades_detalhes/{id}', [atividadeController::class, 'gone'])->name('site.atdetalhes')->middleware('auth');
Route::get('/satividades_detalhes/{id}', [satividadesController::class, 'gone'])->name('site.satdetalhes')->middleware('auth');
Route::get('/exames_detalhes/{id}', [ExamesController::class, 'gone'])->name('site.examdetalhes')->middleware('auth');


Route::get('/admin/desenvolvedores/create', [DesenvolvedoresController::class, 'create'])->name('admin.desenvolvedores.create')->middleware('auth');

Route::post('/admin/add_desenvolvedores/store',[DesenvolvedoresController::class, 'store'] )->name('admin.desenvolvedores.store')->middleware('auth');


Route::delete('/admin/desenvolvedores/delete{id}', [DesenvolvedoresController::class, 'destroy'])->name('admin.desen.delete')->middleware('auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/desenvolvedores_detalhes/{id}', [DesenvolvedoresController::class, 'gone'])->name('site.detalhesd')->middleware('auth');

Route::get('/admin/add_satividades', [satividadesController::class, 'index'])->name('admin.satividades.add')->middleware('auth');

Route::get('/admin/satividades/create', [satividadesController::class, 'create'])->name('admin.satividade.create')->middleware('auth');

Route::post('/admin/add_satividades/store',[satividadesController::class, 'store'] )->name('admin.satividade.store')->middleware('auth');

Route::delete('/admin/satatividades/delete{id}', [satividadesController::class, 'destroy'])->name('admin.sat.delete')->middleware('auth');

Route::get('/admin/add_exame', [ExamesController::class, 'index'])->name('admin.exame.add')->middleware('auth');


Route::get('/admin/exames/create', [ExamesController::class, 'create'])->name('admin.exames.create')->middleware('auth');

Route::delete('/admin/exames/delete{id}', [ExamesController::class, 'destroy'])->name('admin.exam.delete')->middleware('auth');