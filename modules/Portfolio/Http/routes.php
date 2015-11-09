<?php

Route::group(['prefix' => 'portfolio', 'namespace' => 'Modules\Portfolio\Http\Controllers'], function()
{
	Route::get('/', 'PortfolioController@index');
});

Route::group(['namespace' => 'Modules\Portfolio\Http\Controllers'], function()
{
	Route::get('/', 'PortfolioController@index');
});