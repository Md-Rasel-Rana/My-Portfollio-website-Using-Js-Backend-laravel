<?php
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;




Route::get('/',[DemoController::class,'index']);
Route::get('/About',[DemoController::class,'Aboutpage']);
Route::get('/Resume',[DemoController::class,'Resumepage']);
Route::get('/Services',[DemoController::class,'Servicespage']);
Route::get('/Skills',[DemoController::class,'Skillspage']);
Route::get('/Projects',[DemoController::class,'Projectspage']);
Route::get('/MyBlog',[DemoController::class,'MyBlogpage']);
Route::get('/Contact',[DemoController::class,'Contactpage']);

Route::post('/message-send',[DemoController::class,'Usermessage']);

Route::get('/download/resume',function (){
    $file = storage_path('app/public/Rasel-Rana-Resume-Laravel-Developer.pdf');
    return response()->download($file, 'Rasel-Rana-Resume-Laravel-Developer.pdf');
});
