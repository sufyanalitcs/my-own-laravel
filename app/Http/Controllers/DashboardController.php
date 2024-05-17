<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;  

class DashboardController extends Controller
{
   /**
     * Display a listing of the resource.
     */
      
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('front.pages.dashboard.index',compact('data'));
    }
      
    public function appointments()
    {
        $data = [
            'title' => 'Appointments',
        ];
        return view('front.pages.dashboard.appointments',compact('data'));
    }
    
       
    public function online_vouchers()
    {
        $data = [
            'title' => 'Online Vouchers',
        ];
        return view('front.pages.dashboard.online_vouchers',compact('data'));
    }

    public function family_and_friends()
    {
        $data = [
            'title' => 'Family And Friends',
        ];
        return view('front.pages.dashboard.family_and_friends',compact('data'));
    }
    
    public function favourites()
    {
        $data = [
            'title' => 'Favourites',
        ];
        return view('front.pages.dashboard.favourites',compact('data'));
    }


    
    public function profile()
    {
        $data = [
            'title' => 'Profile',
        ];
        return view('front.pages.dashboard.profile',compact('data'));
    }

    
    
    public function reviews()
    {
        $data = [
            'title' => 'Reviews',
        ];
        return view('front.pages.dashboard.reviews',compact('data'));
    }

    
    
    public function consents()
    {
        $data = [
            'title' => 'Consents',
        ];
        return view('front.pages.dashboard.consents',compact('data'));
    }

 

}