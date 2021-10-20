<?php

namespace App\Http\Controllers\Vendor;

use App\Country;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
        $user = Auth::user();
        $countries = Country::all();
        return view('frontend.inside.profile.vendor.edit',compact('user','countries'));
        
    }
    public function saveprofile(Request $request){
        //dd($request->all());
        $user = Auth::user();
        $shop = Shop::updateOrCreate(['user_id'=> $user->id],[
            'name'=> $request->shop_name,
            'type'=> $request->type,
            'mobile'=> $request->mobile,
            'email'=> $request->email,
            'address'=> $request->address,
            'country_id'=> $user->country_id,
            'state_id'=> $request->state_id,
            'city_id'=> $request->city_id,
            'facebook'=> $request->facebook ? $request->facebook: null,
            'twitter'=> $request->twitter ? $request->twitter: null,
            'instagram'=> $request->instagram ? $request->instagram: null,
            'linkedin'=> $request->linkedin ? $request->linkedin: null,
            ]);
        return redirect()->route('profile');
    }

    public function settings(){
        return 'I dont exist';
    }
}