<?php

namespace App\Http\Controllers;

use App\Funder;
use App\PetOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class RegisterController extends Controller
{
    public function registerView()
    {

        return view('includes.registration');
    }
    protected function createAuth(Request $request)
    {


        // return $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($request['register_as'] == 'pet_owner') {
            $uuid = (string) Uuid::generate();


            $pet_owner  = new PetOwner();
            $pet_owner->name = $request['name'];
            $pet_owner->uuid = $uuid;
            $pet_owner->user_role = 'Pet Owner';
            $pet_owner->email = $request['email'];
            $pet_owner->password = Hash::make($request['password']);
            $pet_owner->save();
            return redirect()->to('/login');
        } else {
            $uuid = (string) Uuid::generate();
            $funder  = new Funder();
            $funder->name = $request['name'];
            $funder->uuid = $uuid;
            $funder->user_role = 'Funder';
            $funder->email = $request['email'];
            $funder->password = Hash::make($request['password']);
            $funder->save();
            return redirect()->to('/login');
        }
    }
}
