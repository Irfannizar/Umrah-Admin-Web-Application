<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Umrah;
use App\Order;
use PDF;
use Auth;

class AdminController extends Controller
{

    //

    public function home()
    {
        return view('cust.Main_index');
    }

    public function index()
     {
        $umrahs = Umrah::all();
        //return view('cust.Main_index');
        return view('admin.index', compact('umrahs'));
     }

    public function umrah_create()
     {
       
        return view('admin_dark.create_umrah');
    }

    

    public function admin_show($id)
    {
        $umrah = \App\Umrah ::find($id);
        return view('admin.umrah_show', compact('umrah'));

    }


    

    public function admin_main()
    {
        return view('admin_dark.admin_main');
    }

    public function admin_list_umrah()
    {
        $umrahs = Umrah::all();
        return view('admin_dark.admin_listpro' , compact('umrahs'));
        return view('admin_dark.admin_umrahs' , compact('umrahs'));
    }

    public function admin_list_order()
    {
        $orders = Order::all();
        return view('admin_dark.admin_listorder' , compact('orders'));             
    }

    

    public function umrah_delete($id)
    {
        
        $umrah = Umrah::find($id);
        $umrah->delete();
        return redirect('/list-umrah');
    }
    public function order_delete($id)
    {
        
        $order = Order::find($id);
        $order->delete();
        return redirect('/list-order');
    }

    public function cust_delete($id)
    {
        
        $user = User::find($id);
        $user->delete();
        return redirect('/list-cust');
    }

    // public function sendEmail()
    // {
    //    return Auth::user()->email;
    //     $data['title'] = "This is Test Mail Tuts Make";

    //     $data['name'] = Auth::user()->name;
 
    //     Mail::send('umrah.umrah_receipt', $data, function($message) {
 
    //         $message->to(Auth::user()->email, Auth::user()->fullname)
 
    //                 ->subject('Tuts Make Mail');
    //     });
 

    // }

    public function umrah_edit($id)
    {
       // return 'hahaha';
        
        $umrah = \App\Umrah ::find($id);
        return view('admin_dark.update_umrah', compact('umrah'));

    }

    public function umrah_update(Request $request, $id)
    {
       
        $request->validate([
           
            'price' => 'required',
            'agency' => 'required',
            'package' => 'required',
            'flight' => 'required'
           ]);
        
        $umrah=Umrah::find($id);
        $umrah -> id = $request-> id;
        $umrah -> agency = $request-> agency;
        $umrah -> package = $request-> package;
        $umrah -> price = $request-> price;
        $umrah -> flight = $request-> flight;
        $umrah -> save();
  
        return redirect('/list-umrah') ->with('success','Umrah record has been updated');
       
    }

    public function admin_list_admin()
    {
        //$users = User::all();
        $users = User::where('lvl', '1')->get();
        //$umrahs = Umrah::where('flight', 'LIKE' , '%'.$keyword. '%') ->get();
        return view('admin_dark.admin_list' , compact('users'));
    }

    public function admin_list_cust()
    {
        //$users = User::all();
        $users = User::where('lvl', '2')->get();
        //$umrahs = Umrah::where('flight', 'LIKE' , '%'.$keyword. '%') ->get();
        return view('admin_dark.cust_list' , compact('users'));
    }

    public function admin_edit($id)
    {
       // return 'hahaha';
        
        $users = \App\Umrah ::find($id);
        return view('admin_dark.update_user', compact('users'));

    }

    public function admin_update(Request $request, $id)
    {
       
        $request->validate([
           
            'name' => 'required',
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'tel' => 'required'
           ]);
        
        $user=User::find($id);
        $user -> id = $request-> id;
        $user -> name = $request-> name;
        $user -> fullname = $request-> fullname;
        $user -> address = $request-> address;
        $user -> email = $request-> email;
        $user -> tel = $request-> tel;
        $user -> save();
  
        return redirect('/list-user') ->with('success','Umrah record has been updated');
       
    }
}


    