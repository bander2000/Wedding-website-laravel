<?php

namespace App\Http\Controllers;

use App\Mail\InformationMail;
use App\Mail\MoneyMail;
use App\Models\Information;
use App\Models\Money;
use App\Models\User;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class CheackController extends Controller
{
    //
    public function index()
    {
            return view('cheackout');
    }

    public function store(Request $request)
    {

        try {
            $charge = Stripe::charges()->create([
                'amount' => $request->amount,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'payment',
                'receipt_email' => $request->email
            ]);

            $user = User::where('email', '=', $request->email)->first();
            if ($user === null) {
                $user=User::create([
                    'name'=>$request->name,
                    'email'=>$request->email
                ]);
            }


            $money=Money::create([
                'user_id'=>$user->id,
                'amount'=>$request->amount
            ]);


            
           Mail::to('example@example.com')->send(new MoneyMail($user,$money));
            

           

            // Session::flush();

            return redirect()->route('thankyou')
            ->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    
}
