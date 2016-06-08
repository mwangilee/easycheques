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
    //<editor-fold defaultstate="collapsed" desc="Dashboard">
    public function dashboard()
    {
        $this->userID = Session::get('email');
        return view ('forms.dashboard');
    }
    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Cheques">
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
    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Currencies">
     public function currencies(){ 
        $currencies = DB::table('tblcurrency')->get();
        
        return view('grids.currency', ['currency' => $currencies]);
        
    }
    public function addcurrency(){ 
      
           If(Request::ismethod('post')){
           if (DB::table('tblcurrency')->insert([
                        'currencycode' => Request::input('currencycode'),
                        'currencyname' => Request::input('currencyname'),
                        'chequebookcode' => Request::input('chequebookcode'),
                        'status' => Request::input('status'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')])) 
                {

                  $message = 'Recored inserted successfully';

                  return redirect()->route('currencies')->with('message', $message);
                        
                }else{
                     
                    $message = 'Failed to insert record';

                  return redirect()->route('currencies')->with('fail', $message);
                }
        

        }else{
            
            return view('forms.addcurrency');
        }
        
        
    }
    
    public function editcurrency($id=null){
        
        if(Request::ismethod('post')){
            
             $id = Request::input('id');
              $data = [
                 'currencycode' => Request::input('currencycode'),
                'currencyname' => Request::input('currencyname'),
                'chequebookcode' => Request::input('chequebookcode'),
                'status' => Request::input('status'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')];

                if (DB::table('tblcurrency')->where('id', '=', $id)->update($data)) {
                    $message = 'Record has been updated successfully';
                    return redirect()->route('currencies')->with('message', $message);
                } else {
                    $message = 'Recored failed to update';
                    return redirect()->route('currencies')->with('fail', $message);
                };
            
        }else{
           
            $currency = DB::table('tblcurrency')->where('id', $id)->first();
            return view('forms.editcurrency', ['currency' => $currency]);
            
        }
        
    }
    
    public static function deletecurrency($id) {
        if(DB::table('tblcurrency')->where('id', $id)->delete()){
            
            return redirect()->route('currencies')->with('message', 'currency deleted successfully');
            
        }else{
            
            return redirect()->route('currencies')->with('fail', 'error deleting currency'); 
        }
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Branches">
    
    public function branches(){ 
        $branches = DB::table('tblbranches')->get();
        return view('grids.branches', ['branches' => $branches]);
        
    }
    public function addbranch(){ 
        
           If(Request::ismethod('post')){
           if (DB::table('tblbranches')->insert([
                        'branchcode' => Request::input('branchcode'),
                        'branchname' => Request::input('branchname'),
                        'address' => Request::input('address'),
                        'status' => Request::input('status'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')])) 
                {

                  $message = 'Recored inserted successfully';

                  return redirect()->route('branches')->with('message', $message);
                        
                }else{
                     
                    $message = 'Failed to insert record';

                  return redirect()->route('branches')->with('fail', $message);
                }

        }else{
            
            return view('forms.addbranch');
        }
        
        
    }
    
    public function editbranch($id=null){
        
        if(Request::ismethod('post')){
            
             $id = Request::input('id');
              $data = [
                'branchcode' => Request::input('branchcode'),
                'branchname' => Request::input('branchname'),
                'address' => Request::input('address'),
                'status' => Request::input('status'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')];

                if (DB::table('tblbranches')->where('id', '=', $id)->update($data)) {
                    $message = 'Record has been updated successfully';
                    return redirect()->route('branches')->with('message', $message);
                } else {
                    $message = 'Recored failed to update';
                    return redirect()->route('branches')->with('fail', $message);
                };
            
        }else{
           
            $branch = DB::table('tblbranches')->where('id', $id)->first();
            return view('forms.editbranch', ['branch' => $branch]);
            
        }
        
    }
    
    public static function deleteBranch($id) {
        if(DB::table('tblbranches')->where('id', $id)->delete()){
            
            return redirect()->route('branches')->with('message', 'branch deleted successfully');
            
        }else{
            
            return redirect()->route('branches')->with('fail', 'error deleting branch'); 
        }
    }
    
    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Country Codes">
    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Printer Settings">
    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Serial Reconciliations">
    //</editor-fold>
   
    
}
