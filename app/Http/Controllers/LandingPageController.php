<?php

namespace App\Http\Controllers;

use App\Mail\InformationMail;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'=>'string|min:3|required',
            'email'=>'string|required',
            'numberOfGuests'=>'required|numeric|min:0|not_in:0',
            'attend'=>'string',
            'comment'=>'string|min:10|max:600'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() .'#rvsp')
                    ->withErrors($validator)
                    ->withInput();
        }

        session()->put('data', [
            'name'=>$request->name,
            'email'=>$request->email,
            'comment'=>$request->comment
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);
        }


        $information=Information::create([
            'user_id'=>$user->id,
            'comment'=> $request->comment,
            'attend'=> $request->attend,
            'Numberofguests'=> $request->numberOfGuests
        ]);

         Mail::to('example@example.com')->send(new InformationMail($user,$information));


        

        return redirect(url()->previous() .'#rvsp')
        ->with('success message','');

    }

}
