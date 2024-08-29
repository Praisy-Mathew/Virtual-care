<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Gallery;

class BaseController extends Controller{
        public function index()
        {
            $services = Services::all();
            $testimonials = Testimonial::where('status',1)->get();
            //$testimonials = Testimonial::all();
            $departments = Department::all();
            $doctors= Doctor::all();
            $galleries = Gallery::where('department', 'Virtualcare(Home Page)')->get();
 
            return view('user.index', compact('services', 'testimonials', 'departments', 'doctors', 'galleries'));
        }
    
        public function about()
        {
            return view('user.about');
        }
    
        public function services()
        {
            $services = Services::all();
           return view('user.services', compact('services'));
        }
    
        public function contact()
        {
            return view('user.contact');
        }
    
    
        public function em()
        {   
            
            $doctors= Doctor::all();
            $galleries = Gallery::where('department', 'Emergency')->get(); // Fetch images for the Emergency department
            return view('user.em', compact('doctors', 'galleries'));
        }
    
        public function pa()
        {   
            $doctors= Doctor::all();
            $galleries = Gallery::where('department', 'Paediatric')->get(); // Fetch images for the Emergency department
            return view('user.pa', compact('doctors', 'galleries'));
        }
    
        public function or()
        {   
            $doctors= Doctor::all();
            $galleries = Gallery::where('department', 'Orthopaedic')->get(); // Fetch images for the Emergency department
            return view('user.or', compact('doctors', 'galleries'));
    
        }
    
        public function gyne()
        {   
            $doctors= Doctor::all();
            $galleries = Gallery::where('department','Gynaecology')->get(); // Fetch images for the Emergency department
            return view('user.gyne', compact('doctors', 'galleries'));
        }
         
        public function privacyPolicy()
        {
            return view('user.privacy-policy');
        }
    
        public function termsOfService()
        {
            return view('user.terms-of-service');
        }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'mobile' => 'required|string|max:255',
                'message' => 'required|string',
            ]);
    
            Contact::create($validatedData);
    
            return redirect()->back()->with('success', 'Contact form submitted successfully!');
        }
        public function destroy($id)
        {
            $contact = Contact::findOrFail($id);
            $contact->delete();
    
            return redirect()->back()->with('success', 'Contact message deleted successfully!');
        }
        
        
       
       
    }
    
