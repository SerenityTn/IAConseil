<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller{

    public function show($id){
		return view('user.profile');
    }
    
    public function edit($id){
        return view('user.profile_edit');
    }


    public function update(Request $request, $id){
		$validator = Validator::make($request->all(), [				
				'nom' => 'required'
		]);
    	
    	$validator->after(function($validator) {    		
    		if (!empty(request()->input('old_password'))){    			    	
    			if(!Hash::check(request()->input('old_password'), auth()->user()->password)){    			
    				$validator->errors()->add('old_password', 'Votre ancien mot de passe est incorrecte');    	
    			}else{
    				$this->validate(request(),[
    						'password' => 'required|min:6'
    				]);
    			}
    		}
    	});
    	    	   
    	if ($validator->fails()) {
 			return back()->withErrors($validator)->withInput();
    	}
    	
    	$user = User::find($id);
    	$user->fill(Input::all());
    	$user->save();
    	return redirect()->to(route('user.profile.show', ['id' => auth()->user()->id]))->with('status', 'Modifications effectués!');
    }	    
}