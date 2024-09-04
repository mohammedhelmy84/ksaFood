<?php

namespace App\Http\Controllers;

use App\Models\Order\Order;
use App\Models\Vendor\Vendor;
use App\Models\Vendor\VendorBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderBranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $auth = Auth::id();
        // $vendor = Vendor::where('user_id',$auth)->first();
        // $branches = VendorBranch::where('vendor_id',$vendor->id)->get();
        // $orders_branch = Order::where('branch_id',$branches->id)->get();
         $branches = Order::get()->unique('branch_id');
    
         return view('orders.orders_report',compact('branches'));
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
        //
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
