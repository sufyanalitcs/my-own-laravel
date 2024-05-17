<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;  

class SellerController extends Controller
{
   /**
     * Display a listing of the resource.
     */

      
    public function index()
    {
        $data = [
            'title' => 'Seller Account',
        ];
        return view('seller.pages.index',compact('data'));
    }
    
      


}