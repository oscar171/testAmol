<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/numero', function () {
	$number = rand();
	if(empty(session()->get('arraynumbers')))
	session()->put('arraynumbers',[$number]);
	else
	session()->push('arraynumbers',$number);

	return view('welcome')->with('number',$number);
})->name('generate.number');

Route::post('/numero',function(){

	if(! empty(session()->get('arraynumbers')))
	return response()->json(['numbers'=> session()->get('arraynumbers')]);

	return response()->json(['message' => "No ha generado numeros"]);
})->name('show.numbers');

Route::get('/borrar', function () {
	session()->flush();
	return redirect('/');
});