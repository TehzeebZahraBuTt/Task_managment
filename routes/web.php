<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
function getUsers(){
    return [
        1=>['name'=>'Ali','city'=>'khushab','phone'=>12345],
        2=>['name'=>'ahmad','city'=>'jauharabad','phone'=>678],
        3=>['name'=>'Kiran','city'=>'Sargodha','phone'=>910]
      ];
}
//PARAM ROUTES

            // Route::get('/test',function(){
            //    // return view('first');
            //    return "<a href='/post'>Click here</a>";
            // });
            // Route::get('/post/{id?}',function($id=null){
            //     if($id){
            //         return "<h1>Route Id : ".$id."</h1>";
            //     }else{
            //         return "<h1>No Route Id Found</h1>";
            //     }

            // });

//WITH NAMED ROUTES

            // Route::get('/', function () {
            //     return view('Home');
            // })->name('home');
            // Route::get('/first',function(){

            //        return view('first');

            // })->name('post');
//REDIRECT
            // Route::get('/home',function(){
            //     return view('Home');

            // });
            // Route::get('/second',function(){
            //     return view('first');
            // });
            // Route::redirect('/first','/second');
//GROUP ROUTES
        // Route::prefix('page')->group(function(){
        //     Route::get('/home',function(){
        //         return ('Home');

        //     });
        //     Route::get('/first',function(){
        //         return view('first');

        //     });

        // });
//FALLBACK FOR 404 ERROR
        // Route::fallback(function(){
        //     return "<h1>Page not Found</h1>";

        // });

// Route::get('/first',function(){
//     return view('first');
// });

//SHOWING ALL USERS ON ONE PAGE THEN BY LINK GOINT TO THAT USER DETAIL PAGE

// Route::get('/home',function(){
//     $names=getUsers();
//     return view('Home',[
//         'users'=>$names
//     ]);
// });
// Route::get('/first/{id}',function($id){
//     $users=getUsers();
//      abort_if(!isset($users[$id]),404);
//     $user=$users[$id];
//     return view('first',[
//         'id'=>$user
//     ]);
// })->name('view.user');


//Route::get('/',[FirstController::class,'show']);


Route::controller(FirstController::class)->group(function(){
       // Route::get('/','showHome')->name('home');
       // Route::get('/blog','showBlog')->name('blog');
        // Route::get('/contact','showContact')->name('contact');
        // Route::get('/create','create')->name('create');
        // Route::post('/store','store')->name('store');
        // Route::get('/','index')->name('home');
        // Route::get('/blog/{id}','edit','id')->name('blog','id');

});

Route::controller(TestController::class)->group(function(){

        Route::get('/','create')->name('form')->middleware('test:user');
        Route::post('/store','store')->name('store');
        Route::get('/details','index')->name('list');
        Route::get('/edit/{id}','edit','id')->name('edit','id');
        Route::post('/update{id}','update','id')->name('update','id');
        Route::get('/delete/{id}','destroy','id')->name('delete','id');
        Route::get('/show/{id}','show','id')->name('view');
});
Route::resource('file', FileController::class);
Route::get('login',[UserController::class,'login'])->name('login');
Route::get('register',[UserController::class,'register'])->name('register');

Route::post('loginReq',[UserController::class,'loginRequest'])->name('loginRequest');
Route::post('registerReq',[UserController::class,'registerRequest'])->name('registerRequest');

Route::get('logout',[UserController::class,'logout'])->name('logout');


// Route::get('/home',TestController::class);  //AGR KOI FUNCTION SPECIFY NI KRAIN GY TO CONSTRUCTOR METHOD CALL HOGA
// Route::get('/home',[TestController::class,'text']);//LKN AGR METHOD SPECIFY KIA HWA HOGA TO WOHI METHOD HI CALL HOGA CONSTRUCTOR NI




