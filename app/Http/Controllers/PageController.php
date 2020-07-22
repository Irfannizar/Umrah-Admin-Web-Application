<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    
    public function main()
    {
        return view('cust.Main_index');
    }
    
    public function loginForm()
    {
        return view('login');
    }

    public function home()
    {
        return view('cust.Main_index');
    }

    public function new()
    {
        return view('components.create');
    }


    public function nav()
    {
        return view('components.NavBar1');
    }

    public function package1()
    {
        return view('components.package_1');
    }

    public function payment()
    {
        return view('components.paymentform');
    }

    public function search()
    {
        return view('components.MainSearch');
    }

    public function search1()
    {
        return view('components.MainPage');
    }

    public function checkMonth(Request $request) {
        $month = $request->month;
        
        If($month == 'January') {
            Return view('components.create'); //page ap yg ko nk tnjuk klu January
        }
        Elseif($month == 'February')
            Return view(); //page ap plak klu February yg dia pilih
        }
}
