<?php
use Illuminate\Support\Facades\Route;

Route::get('add/publication',[\App\Http\Controllers\AuthenticatedUsers\AddPublicationController::class,'index'])->name('publications');
Route::post('add/publication',[\App\Http\Controllers\AuthenticatedUsers\AddPublicationController::class,'index'])->name('add_publication');

Route::get('add/topic',[\App\Http\Controllers\AuthenticatedUsers\AddTopicController::class,'index'])->name('topics');
Route::post('add/topic',[\App\Http\Controllers\AuthenticatedUsers\AddTopicController::class,'addTopic'])->name('add_topic');
