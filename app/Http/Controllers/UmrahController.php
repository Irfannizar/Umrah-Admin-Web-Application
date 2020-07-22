<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Umrah;
use App\Order;
use PDF;
use Auth;
use Mail;

class UmrahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __comstruct(){
        $this ->middleware('auth');

    }



    //-------------------admin function only

    public function dashboard()
    {
        if(Auth::user()->lvl == 1) {
            return view('admin_dark.admin_main');
   } else {
            return view('cust.Main_index');
   }
        
    } 

    
   

    public function search(Request $request)
    
    {
        
        $keyword = $request -> get('keyword');
        $umrahs = Umrah::where('flight', 'LIKE' , '%'.$keyword. '%') ->get();

        return view('admin_dark.admin_listpro', compact('umrahs'));
    }

    public function store(Request $request)
    {
      
        
        $umrah = new Umrah();
        $umrah -> agency=$request -> get('agency');
        $umrah -> package=$request -> get('package');
        $umrah -> price=$request -> get('price');
        $umrah -> flight=$request -> get('flight');
        $umrah -> save();

        return redirect() -> back();
    }

    public function admin()
    {
        return view('admin.admin');
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
  
        return redirect('/index') ->with('success','Umrah record has been updated');
       
    }

    public function umrah_delete($id)
    {
        
        $umrah = Umrah::find($id);
        $umrah->delete();
        return redirect('/index');
    }

    
    

    //----general----//
    public function signup()
    {
        return view('user.register');
    }

    public function login(Request $request)
    {
        return view('user.login');
    }

    

    

  

    



    //----------------customer function only

    public function contact()
    {
        return view('umrah.contact');
    }
    
    public function cust_search(Request $request)
    {
        
        $keyword = $request -> get('keyword');
        $umrahs = Umrah::where('flight', 'LIKE' , '%'.$keyword. '%') ->get();

        return view('umrah.umrah_list', compact('umrahs'));
    }
    
    public function cust_index()
     {
        $umrahs = Umrah::all();
        return view('umrah.umrah_list', compact('umrahs'));
    }

   

    public function cust_show($id)
    {
        //return 'hahaha';
        $umrah = \App\Umrah ::find($id);
        //return $umrah;
        //return 'hahahha';
        //return ($id);
        return view('umrah.index_show', compact('umrah'));

    }

    public function umrah_show($id)
    {
        $umrah = \App\Umrah ::find($id);

        return view('umrah.umrah_show', compact('umrah'));
    }

    public function payment($id, Request $request)
    {
        $umrah = \App\Umrah ::find($id);
        $umrah_date = $request->umrah_date;
        
        return view('cust.payment', compact('umrah','umrah_date'));
    }

    public function cust_receipt($id, Request $request)
    {
        
        $orders = new Order();
        $orders -> date=$request -> get('date_umrah');
        $orders -> name=$request -> fullname;
        $orders -> email=$request -> get('email');
        $orders -> package=$request -> get('package');
        $orders -> price=$request -> get('price');
        $orders-> save();


        $umrah = \App\Umrah ::find($id);
        $data['title'] = "This is Test Mail Tuts Make";
        $data['umrah'] = $umrah;
        
        $data['name'] = Auth::user()->name;
         $data['email'] = Auth::user()->email;
         $data['tel'] = Auth::user()->tel;
 
        Mail::send('umrah.umrah_receipt', $data, function($message) {
 
            $message->to(Auth::user()->email, Auth::user()->fullname)
 
                    ->subject('E-Jawlah Invoice No');
        });

        return view('umrah.umrah_receipt', compact('umrah'));
    }






















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function nav()
    {
        return view('components.navbar');
    }
}
