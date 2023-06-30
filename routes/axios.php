<?php

use App\Http\Controllers\FormController;

/*Forms*/
Route::post('/send-form', [FormController::class, 'sendForm'])->name('axios.sendForm');
/*Forms*/
