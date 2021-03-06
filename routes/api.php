<?php

//use Illuminate\Routing\Route;

Route::post('condutor', 'Api\CondutorApiController@store');

Route::post('servico', 'Api\ServicoApiController@store');
Route::get('servico/servicos', 'Api\ServicoApiController@servicos');
Route::post('veiculo', 'Api\VeiculoApiController@store');
Route::get('condutor/marca', 'Api\CondutorApiController@marca');
Route::get('condutor/modelo', 'Api\CondutorApiController@modelo');

Route::post('login', 'Api\LoginApiController@login');
Route::post('checkin', 'Api\CheckinApiController@store');
Route::post('agendamento', 'Api\AgendamentoApiController@store');
