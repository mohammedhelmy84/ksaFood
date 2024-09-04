<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\SupervisorController;    
use App\Http\Controllers\OrderBranchesController; 
use App\Http\Controllers\ProfileController;
use App\Models\Order\Order;
use App\Models\Supervisor;
use App\Models\User;
use App\Models\Vendor\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/signin', [AuthenticatedSessionController::class, 'signin'])->name('signin');
Route::get('/dashboard', function () {
    $auth = Auth::id();
    $vendor = Vendor::where('user_id',$auth)->first();
    $startDate = now()->subDays(30);
    $endDate = now();
    $orders_this_month = Order::where('vendor_id',$vendor->id)->whereBetween('created_at', [$startDate, $endDate])->get();


    $customers = User::where('role',0)->get();

    return view('dashboardvendor.dashboard',compact('orders_this_month','customers'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/orders/order_details', OrderDetailsController::class); //->middleware('can:create-products');
    Route::get('/orders/order_status/{id}', [OrderDetailsController::class,'show'])->name('orders.order_status');
    Route::get('/supervisor/index', [SupervisorController::class,'index'])->name('supervisor.index');
    Route::get('/supervisor/create', [SupervisorController::class,'create'])->name('supervisor.create');
    Route::get('/supervisor/edit/{id}',  [SupervisorController::class,'edit']);//->name('supervisor.edit');
    Route::post('/supervisor/store', [SupervisorController::class,'store'])->name('supervisor.store');
    Route::post('/supervisor/update/{id}', [SupervisorController::class,'update'])->name('supervisor.update');
    Route::resource('/supervisor', SupervisorController::class);


  
    Route::resource('/orders/orders_report', OrderBranchesController::class);


    Route::get('logout',function(){
       Auth::logout();
       return redirect()->route('login');
    });


});




require __DIR__.'/auth.php';
