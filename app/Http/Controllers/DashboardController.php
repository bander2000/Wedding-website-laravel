<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Money;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=User::with('information')->with('money')->where('type','!=','admin')->get();
        return view('dashboard.index')->with('users',$users);
    }

    public function comment()
    {
        $users=User::with('information')->where('type','!=','admin')->get();
        return view('dashboard.comment')->with('users',$users);
    }

    public function statistic()
    {
        $sum = Money::sum('amount');
        $commentCount=Information::whereNotNull('comment')->count();
        $peopleCount=Information::where('attend','Yes')->count();

        return view('dashboard.staticstic')
        ->with([
            'sum'=>$sum,
            'commentCount'=>$commentCount,
            'peopleCount'=>$peopleCount
        ]);
    }
}
