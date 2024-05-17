<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;  

class OtherController extends Controller
{
   /**
     * Display a listing of the resource.
     */

      
    public function about()
    {
        $data = [
            'title' => 'About Us',
        ];
        return view('front.pages.other.about_us',compact('data'));
    }
    
      
    public function terms()
    {
        $data = [
            'title' => 'Terms of Service',
        ];
        return view('front.pages.other.terms',compact('data'));
    }

      
    public function faq()
    {
        $data = [
            'title' => 'FAQ',
        ];
        return view('front.pages.other.faq',compact('data'));
    }

      
    public function privacy()
    {
        $data = [
            'title' => 'Privacy',
        ];
        return view('front.pages.other.privacy',compact('data'));
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
        ];
        return view('front.pages.other.contact',compact('data'));
    }

    
    public function security()
    {
        $data = [
            'title' => 'Security',
        ];
        return view('front.pages.other.security',compact('data'));
    }


}