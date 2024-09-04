<?php

namespace App\Http\Controllers;

use App\Enums\User\UserRole;
use App\Models\Supervisor;
use App\Models\User;
use App\Models\Vendor\Vendor;
use App\Models\Vendor\VendorBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::id();
        $vendor = Vendor::where('user_id',$auth)->first();
        $supervisors = Supervisor::where('vendor_id',$vendor->id)->get();
    
        return view('supervisor.index',compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branch = VendorBranch::get();
        return view('supervisor.create',compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone' => 'required',
            'branch_name'=>'required',
            'email' => 'required',
            'password'=>'required',
         ],
         [
          'name.required'=>'Name is required',
          'address.required'=>'Address is required',
          'phone.required'=>'Phone is required',
          'branch_name.required'=>'Branch is required',
          'email.required'=>'Email is required',
          'password.required'=>'Password is required',
         ]
      );
      $auth = Auth::id();
      $vendor = Vendor::where('user_id',$auth)->first();
             $user = new User();
              $user->email = $request->email;
              $user->name = $request->name;
              $user->phone = $request->phone;
              $user->password = Hash::make($request->password);
              $user->role = UserRole::SUPERVISOR->value;
            
              $user->save();

              $supervisor = new Supervisor();
              $supervisor->address = $request->address;
              $supervisor->vendor_id = $vendor->id;
              $supervisor->user_id = $user->id;
              $supervisor->branch_id = $request->branch_name;
              
              $supervisor->save();

             return redirect()->route('supervisor.index');
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
        $supervisor = Supervisor::where('id',$id)->first();
        $branches = VendorBranch::get();

        return view('supervisor.edit',compact('supervisor','branches'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supervisor $supervisor, User $user)
    {
       

        $user = User::where('id',$supervisor->user_id)->first();
        $user->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
        ]);

        $supervisor->update([
            'address'=>$request->input('address'),
            'branch_id'=>$request->input('branch_name'),
         ]);

    
 
         $user->update();
         $supervisor->update();
    
             
        
 
          return redirect()->route('supervisor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
    
        $supervisor->delete();
        return redirect()->route('supervisor.index');
    }
}
