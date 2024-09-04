<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order\Order;
use App\Models\Order\OrderItem;
use App\Models\Vendor\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::id();
        $vendor = Vendor::where('user_id',$auth)->first();
    
        $orders = Order::where('vendor_id',$vendor->id)->orderBy('id', 'desc')->simplePaginate(5);
        $totalorders = Order::where('vendor_id',$vendor->id)->count();

        return view('orders.order_details',compact('orders','totalorders'));
    }

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orderitems = OrderItem::where('order_id', $id)
        ->with('product')
        ->get();
        $orders_branch = Order::where('id',$id)->first();
        // $order_date = Order::where('id',$id)->


            // $totalOrder = number_format(
            // $orderitems->sum(function ($orderitem) {
            // return $orderitem->total ?? 0;  // If $orderitem->total is null, default to 0
            // }), 
            // 2
            // );

            // $totalOrder = $orderitems->sum(function ($orderitem) {
            //     return $orderitem->total ?? 0; 
            // });
            
            // $totalOrderFormatted = number_format($totalOrder, 2, '.', '');
        //  $orderitems = OrderItem::where('order_id',$id)->get();

           

            $totalOrder = $orderitems->sum(function ($orderitem) {

            return is_numeric($orderitem->total) ? (float) $orderitem->total : 0;
            });



         return view('orders.order_status',compact('orderitems','totalOrder','orders_branch'));

  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
