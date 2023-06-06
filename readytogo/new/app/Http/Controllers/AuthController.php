<?php

namespace App\Http\Controllers;

use Redirect;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reviews;
use App\Models\trips;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function adminlogin(){
        return view('auth.adminlogin');
    }

    public function admin_dashboard(Request $request){

        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

      //  $bool = Auth::user()->admin;

     // $trips = DB::select('select * from usertrips');
        $reservations = trips::select('usertrips.*', 'assets.*')->join('assets', 'usertrips.dest', "=", "assets.dest")->get();

        
        
        if(Auth::attempt($request->only('email','password'))){
            if (Auth::user()->admin==true){
                
                //$reservations = DB::select("select * from usertrips JOIN assets ON usertrips.dest=assets.dest WHERE email='".Auth::user()->email."'");
        
              return view('admindashboard',['reservations'=>$reservations]);
                //return view('admindashboard',['trips'=>$trips]);
            }
            
        }
        return Redirect::back()->withErrors($credentials);
        
        
    }

    public function destroy_adminres(Request $request) 
    {
        $today_date = Carbon::now();
        $date = $request->date;
        $data_difference = $today_date->diffInDays($date, false);
        $reservations = trips::select('usertrips.*', 'assets.*')->join('assets', 'usertrips.dest', "=", "assets.dest")->get();

       // echo $data_difference;
        if($data_difference < -2) {
            $destroy = trips::where('id', $request->id)->firstorfail()->delete();
            return Redirect::back();
//            return view('admindashboard',['reservations'=>$reservations]);
        }
       else {
        return Redirect::back()->withErrors('Incorrect');
        }
       
    }


    public function addnewadmins(Request $request){
        return view('auth.addadmin');
    }
    public function addnew_admins(Request $request){
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required|unique:users|email',
            'password'=> 'required|',
        ]);


        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> \Hash::make($request->password),
            'admin'=> true
        ]);
        return redirect('admindashboard')->withError('Ese to nai chalega');
    }


    public function login(Request $request){
        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('welcome');
        }
        return Redirect::back()->withErrors($credentials);

    }
    public function register_view()
    {
        return view('auth.register');
    }


   

   

    public function register(Request $request){
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required|unique:users|email',
            'password'=> 'required|',
        ]);


        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> \Hash::make($request->password),
            'admin'=> false
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('login');
        }

        return redirect('register')->withError('Ese to nai chalega');
    }

   

    public function confirm(){

        return view('confirm');
    }

    public function welcome(){
      
        return view('welcome');
        
    }

    public function adminreviews(){
        $reviews = reviews::get();
  //      $reviews = DB::select("select * from reviews");
        return view('adminreviews',['reviews'=>$reviews]);

    }

    public function admindash(){

        $current_date = Carbon::now();
        $newdate = $current_date->subDays(2);

        $reservations = trips::select('usertrips.*', 'assets.*')->join('assets', 'usertrips.dest', "=", "assets.dest")->get();

        return view('admindashboard',['reservations'=>$reservations]);
        
    }
    
    public function logout(){
        \Session::flush();
        Auth::logout();
        return redirect('');
    }


}
