<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use DB;
use Validator;
use Request;
use Session;

class HomeController extends Controller
{
     private $userID;
      public function __construct() {
        

        $this->userID = null;

        //Authentication check
        $this->middleware('auth');

    }
    public function dashboard()
    {
        $this->userID = Session::get('email');
        return view ('forms.dashboard');
    }
    
    public function printcheques()
    {
    
        return view ('forms.printchequebook');
    }
    
    public function chequerequest()
    {
        if(Request::ismethod('post')){
            dd(Request::input());
             return redirect()->back();
            
        }else{
           return view ('forms.chequerequests'); 
        }
    
        
    }

    
}
