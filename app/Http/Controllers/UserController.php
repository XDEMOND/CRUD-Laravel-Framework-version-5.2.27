<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
     public function index()	
  {
    

        $users = User::all();
        return view('admin_profile.read',compact('users'));

    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */


   

  public function create(Request $request)
  {



  		$user = new User;
  		$user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->second_last_name = $request->second_last_name;
        $user->telephone = $request->telephone;
        $user->cell_number = $request->cell_number;
        $user->email = $request->email;
  		$user->password = Hash::make($request->password);
  		$user->save();
  		return response()->view('admin_profile.index');




  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $user = User::find($id);
    	
  		return response()->view('admin_profile.update',compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
  	   $data = request()->all();
  	   	
     	
  		$user =  User::find($id);
  		$user->name = $data['name'];
        $user->last_name = $data['last_name'];
        $user->second_last_name = $data['second_last_name'];
        $user->telephone = $data['telephone'];
        $user->cell_number = $data['cell_number'];
  		$user->email = $data['email'];
  		$user->password = Hash::make($data['password']);
  		$user->save();
  		return redirect('/admin_read');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request, User $user)
  {
    	
		// dd("Elimminado". $id);
			$user->delete();
   
         return response()->view('admin_profile.index');
  }


  
}

