<?php

Route::get('error/{code}', 'ExceptionController@index')->name("error");
