<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; 
use App\Models\Subscriber;
use App\Models\Property; 
use App\Models\Image; 
use Illuminate\Support\Str;

class DashboardController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('admin.home',compact('data'));
    }

    public function about()
    {
        //
        $data = [
            'title' => 'About Us',
        ];
        return view('admin.aboutUs',compact('data'));
    }

    
    public function contactList()
    {
        //
        $data = [
            'title' => 'contact Lists',
            "lists" => Contact::get(),
        ];
        return view('admin.contactList',compact('data'));
    }

    public function subscribeList()
    {
        //
        $data = [
            'title' => 'NewsLetter Subscriber Lists',
            "lists" => Subscriber::get(),
        ];
        return view('admin.subscribeList',compact('data'));
    }
    
    public function propertyList()
    {
        //
        $data = [
            'title' => 'Property Lists',
            "lists" =>  Property::get(),
        ];
        return view('admin.propertyList',compact('data'));
    }
    
    public function propertyAdd()
    {
        //
        $data = [
            'title' => 'Property Adds',
        ];

        return view('admin.propertyAdd',compact('data'));
    }
    
    public function propertySubmit(Request $request)
    {
        
         // Process the form data
         $formData                    = new Property();
         $formData->name              = $request->title;
         $formData->slug              = Str::slug($request->title);
         $formData->registration      = $request->registration;
         $formData->bedroom           = $request->bedroom;
         $formData->bathroom          = $request->bathroom;
         $formData->sleeps            = $request->sleep;
         $formData->sqft              = $request->sqft;
         $formData->min_price         = $request->min_rate;
         $formData->max_price         = $request->max_rate;
         $formData->description       = $request->description;
         $formData->short_description = $request->short_description;
         
         $featured = "";
         if ($request->hasFile('featured_image')) {
             // Process the uploaded image
             $featured = Str::slug($request->title).'.'.$request->file('featured_image')->extension();  
             $request->file('featured_image')->move(public_path('front/images/product'), $featured);
         }
         $formData->featured_image = $featured;

         $images = null ;
         // Process each image
         if ($request->hasFile('images')) {
            $imageDataArray = []; // Empty array to store image data
            foreach ($request->file('images') as $key => $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                // Image ko public folder mein save karta hai
                $image->move(public_path('front/images/product'), $imageName);
                $imageDataArray[] = [
                    'name' => $request->input('image_names')[$key],
                    'path' =>  $imageName,
                ];
            }
            // Image data ko JSON string mein convert karta hai
            $images = json_encode($imageDataArray);
         }
         $formData->image_data        = $images;


         if($formData->save()){
            toastr()->success('Property submitted successfully', 'success');
            return response()->json(['status' => 'success', 'message' => 'Form submitted successfully']);
         }else{
            toastr()->error('Somthing Went Wrong', 'error');
            return response()->json(['status' =>  'danger' ,'message' => 'Somthing Wrong']);
         }


    }

    public function propertyDelete($id)
    { 
        $record = Property::find($id);

        if ($record) {
            $record->delete(); // This soft deletes the record
            toastr()->warning('Record deleted successfully', 'warning');
        } else {
            toastr()->error('Record not found', 'Error');
        }

        return redirect()->back();

    }
    

}