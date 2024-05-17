<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact; 
use App\Models\Subscriber;
use App\Models\Property;

class HomeController extends Controller
{
   /**
     * Display a listing of the resource.
     */

     
    public function index()
    {
        //
        $data = [
            'title' => 'Home',
        ];
        return view('front.pages.home',compact('data'));
    }

    
     
    public function shop()
    {
        //
        $data = [
            'title' => 'Shop',
        ];
        return view('front.pages.shop',compact('data'));
    }


    public function shop_detail()
    {
        //
        $data = [
            'title' => 'Shop Detail',
        ];
        return view('front.pages.shop_detail',compact('data'));
    }


    
    public function all_works()
    {
        $data = [
            'title' => 'All Works',
        ];
        return view('front.pages.all_works',compact('data'));
    }

    
    public function city()
    {
        $data = [
            'title' => 'City',
        ];
        return view('front.pages.city',compact('data'));
    }


    public function contactSubmit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

          // Process the form data
          $formData = new Contact();
          $formData->name = $request->name;
          $formData->email = $request->email;
          $formData->messages = $request->message;
          
          if($formData->save()){
            return response()->json(['status' => 'success', 'message' => 'Form submitted successfully']);
          }else{
            return response()->json(['status' =>  'danger' ,'message' => 'Somthing Wrong']);
          }

    }

    public function newsletterSubscribe(Request $request)
    {
        // Validate the email
        $request->validate([
            'newsletterEmail' => 'required|email|unique:subscribers,email',
        ]);

        // Create a new subscriber
        $subscriber = new Subscriber();
        $subscriber->email = $request->newsletterEmail;
        if($subscriber->save()){
             return response()->json(['status' => 'success', 'message' => 'Thank you for subscribing <br> to our newsletter!']);
        }else{
             return response()->json(['status' =>  'danger' ,'message' => 'Somthing Wrong']);
        }

    }


    public function fetchProperty(Request $request)
    {

        $order = $request->query("order");
        if(!$order)
             $order = -1;
        $o_column = "";
        $o_order = "";
        switch($order)
        {
        case 1:
              $o_column = "created_at";
              $o_order = "DESC";
              break;
        case 2:
              $o_column = "created_at";
              $o_order = "ASC";
              break;
        case 3:
              $o_column = "regular_price";
              $o_order = "ASC";
              break;  
        case 4:
              $o_column = "regular_price";
              $o_order = "DESC";
              break;
        default:
              $o_column = "id";
              $o_order = "DESC";
        }    

        
        $prange = $request->query("prange");
        if(!$prange)
            $prange = "0,500";
        $from  = explode(";",$prange)[0];
        $to  = explode(";",$prange)[1];

        

        $propertiesQuery  = Property::whereBetween('min_price',array($from,$to))
                            ->orderBy('created_at','DESC')
                            ->orderBy($o_column,$o_order);
        
        $search = $request->query("search");
        if (!empty($search)) {
            $propertiesQuery->Where("name", "like", "%$search%")
            ->orWhere("short_description", "like", "%$search%"); 
        }

        $location = $request->query("location");
        if (!empty($location)) {
            $propertiesQuery->orWhere("location", $location);
        }

        $guest = $request->query("guest");
        if (!empty($guest)) {
            $propertiesQuery->orWhere("guest", $guest);
        }

        $bedroom = $request->query("bedroom");
        if (!empty($bedroom)) {
            $propertiesQuery->orWhere("bedroom", $bedroom);
        }

        $bathroom = $request->query("bathroom");
        if (!empty($bathroom)) {
            $propertiesQuery->orWhere("bathroom", $bathroom);
        }

        $properties = $propertiesQuery->paginate(9); 
        $property_count = "Showing ".$properties->firstItem()." to ".$properties->lastItem()." of " .$properties->total()." results";
        // Return the view as JSON response
        return response()->json([
            'properties' => view('front.serviceCard', compact('properties'))->render(),
            'property_count' => $property_count
        ]);
    }



    
    public function vacationDetail($slug)
    { 
        $property = Property::where('slug', $slug)->first();
        $data = [
            'title'     => 'Vacation Homes Details',
            'property'   => $property,
        ]; 
        return view('front.vacationHomesDetails',compact('data'));
    }

    public function management()
    { 
        $data = [
            'title'     => 'Vacation Rental Management',
        ];
        return view('front.management',compact('data'));
    }

    public function logouts () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}