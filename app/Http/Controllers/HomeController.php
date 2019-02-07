<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use Carbon\Carbon;
use App\Models\Portion;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }

    // public function docs()
    // {
    //     return view('document');
    // }

    public function anggota()
    {
        $users = User::latest()->paginate(5);
        return view('anggota',compact('users','myuser'))->with('i', (request()->input('page', 2) - 1) * 1);
    }

    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request ){

               
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,200)->save( public_path('uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }

}
