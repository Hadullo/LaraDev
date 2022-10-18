<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function redirect()
     {
        if (Auth::id())
        {
            if (Auth::user()->utype == 'ADM')
            {
                return view("dashboard.adminUser.index");
            }

                else
            {
                return view("dashboard.normalUsers.index");

            }
        }
        else

        {
            return redirect()->back();

        }


     }
}
