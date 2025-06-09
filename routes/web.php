<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\StudentModel;
use App\Models\studentrecordModel;
use App\Http\Middleware\logoutMiddleware;

//For Retrieving Static Data// we can also retrieve dynamic data
Route::get('/', function()
{
    return view('index');
});
//For Sending Data in database
Route::post('/studentregister',[StudentController::class,'register'])->name('studentregister');

//Route to get Login form

Route::get('/login', function()
{
    return view('login');
});

//Route for Student Login

Route::post('/studentlogin',[StudentController::class,'studentlogin'])->name('studentlogin');


//Internal 

Route::middleware([logoutMiddleware::class])->group(function()
{
//Route for Dashboard

Route::get('/dashboard', function()
{
    if(Session::has('l4sod'))
    {
        $select = StudentModel::where('id',Session::get('l4sod'))->first();
        return view('dashboard', compact('select'));
    }   

});
Route::get('/recordstudent', function()
{
    return view('recordstudent');
});

Route::post('/recordstudent',[StudentController::class,'recordstudent'])->name('recordstudent');

Route::get('/viewstudentrecords', function()
{
    $records = array();
    $records = studentrecordModel::all();
    return view('viewstudentrecords', compact('records'));
});
Route::delete('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
Route::get('/logout',[StudentController::class,'logout'])->name('logout');;

    
});


