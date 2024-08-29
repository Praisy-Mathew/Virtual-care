<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Gallery;



class AdminController extends Controller
{
    public function index()
    {   
        $patientsCount = Patient::count(); 
        $doctorsCount = Doctor::count();
        $appointmentsCount = Appointment::count();
        $departmentsCount = Department::count(); // Count of departments
        $servicesCount = Services::count(); // Count of services
        $testimonialsCount = Testimonial::count(); // Count of testimonials
        $contactsCount = Contact::count(); // Count of contacts
        $galleryCount = Gallery::count();
        $today = date('Y-m-d');
        $todaysAppointments = Appointment::whereDate('date_time', $today)->get();
        return view('admin.index', compact('todaysAppointments', 'patientsCount', 'doctorsCount','appointmentsCount', 
        'departmentsCount', 
        'servicesCount', 
        'testimonialsCount', 
        'contactsCount','galleryCount'));
    }
   

    public function doctors()
    {
        //$doctors = Doctor::all();
        $doctors = Doctor::with('department')->get();
        $departments = Department::all(); 
        $doctorCount = Doctor::count(); // Count of doctors
        return view('admin.doctors', compact('doctors', 'departments','doctorCount'));
       
    }

    public function patients()
    {   
         $patients = Patient::all();
         $patientsCount = Patient::count(); 
         return view('admin.patients', compact('patients','patientsCount'));
    }

    public function appointments()
    {   
        $appointments = Appointment::all();
        return view('admin.appointments', compact('appointments'));
    }

    public function departments()
    {   
        $departments = Department::all();
        return view('admin.departments', compact('departments'));
    }
    public function services()
    {
        $services = Services::all();
        //$servicesCount = $services::count();
        return view('admin.services', compact('services' ));
    }
    public function testimonials()
    {   
        $testimonials = Testimonial::all();
        return view('admin.testimonials', compact('testimonials'));
    }
    public function showTestimonials()
  {
    $testimonials = Testimonial::where('status', 1)->get(); // Retrieve only displayed testimonials for user view
    return view('user.testimonials', compact('testimonials'));
  }
    public function gallery()
    {   
        $galleries = Gallery::all(); 
        return view('admin.gallery', compact('galleries') );
    }
    public function contacts()
    {
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }
          
              //Service Section
    public function servicesStore(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 

        ]);

        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->description;
       // $service->icon = $request->icon;
          if ($request->hasFile('icon')) {
           $imagePath = $request->file('icon')->store('images', 'public');
            $service->icon = $imagePath;
     }
        
        $service->save();
        //Services::create($validatedData);

        return redirect()->back()->with('success', 'Service added successfully.');
    }
    
    // Update an existing service
    public function servicesUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
             'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $service = Services::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        //$service->icon = $request->icon;
         if ($request->hasFile('icon')) {
            // Store the new image and update the image path in the database
            $imagePath = $request->file('icon')->store('images', 'public');
            $service->icon = $imagePath;
        }
        
        $service->save();

        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    // Delete a service
     public function servicesDestroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

    public function testimonialsStore(Request $request)
    {   
        $validatedData = $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        Testimonial::create($validatedData);
    
        return redirect()->back()->with('success', 'Testimonial added successfully.');
    }
    
    public function testimonialsUpdate(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            //'status' => 'required|boolean',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->author = $request->author;
        $testimonial->content = $request->content;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $imagePath;
        }
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial updated successfully.');
    }

    public function testimonialsDestroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully.');
    }
    public function toggleStatus($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            $testimonial->status = $testimonial->status ? 0 : 1;// Toggle status
            $testimonial->save();
            
            return redirect()->back()->with('status', 'Testimonial status updated successfully!');
        }

        return redirect()->back()->with('error', 'Testimonial not found.');
    }


    public function departmentsStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Department::create($validatedData);

        return redirect()->back()->with('success', 'Department added successfully.');
    }
    public function departmentsUpdate(Request $request, $id)
   {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $department = Department::findOrFail($id);
    $department->update($validatedData);

    return redirect()->back()->with('success', 'Department updated successfully.');
    }
      public function departmentsDestroy($id)
    {
    $department = Department::findOrFail($id);
    $department->delete();

    return redirect()->back()->with('success', 'Department deleted successfully.');
    }

     public function doctorsStore(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|exists:departments,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
        
        Doctor::create($validatedData);

    
        return redirect()->back()->with('success', 'Doctor added successfully.');
    }
    public function doctorsUpdate(Request $request, $id)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'department' => 'required|exists:departments,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'location' => 'required|string',
    ]);

    $doctor = Doctor::findOrFail($id);
    $departments = Department::all(); // Fetch departments for the form
    $doctor->name = $request->name;
    $doctor->department = $request->department;
    $doctor->location = $request->location;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $doctor->image = $imagePath;
    }
    $doctor->save();

    return redirect()->back()->with('success', 'Doctor updated successfully.');
   }

public function doctorsDestroy($id)
   {
    $doctor = Doctor::findOrFail($id);
    $doctor->delete();

    return redirect()->back()->with('success', 'Doctor deleted successfully.');
   }

   public function appointmentsStore(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'age' => 'required|integer',
           'address' => 'required|string|max:255',
           'phone' => 'required|string|max:20',
           'email' => 'required|email|max:255',
           //'doctor_name' => 'required|string|max:255',
           'department' => 'required|string|max:255',
           'date_time' => 'required|date_format:Y-m-d\TH:i',
           'notes' => 'nullable|string',
       ]);
    
       Appointment::create($request->all());
    

       return redirect()->back()->with('success', 'Appointment booked successfully!');
   }
   public function showPatients()
    {
        // Retrieve patient details from the appointments table
        $patients = Appointment::select('name', 'age', 'address', 'phone', 'email')
                               ->distinct()
                               ->get();

        return view('admin.patients', compact('patients'));
    }
     public function appointmentsUpdate(Request $request, $id)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            //'doctor_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'date_time' => 'required|date_format:Y-m-d\TH:i',
            'notes' => 'nullable|string',
        ]); 

           dd($validatedData); // Dump and die to inspect data

       
       $appointment = Appointment::findOrFail($id);
       $appointment->update($validatedData);


       return redirect()->back()->with('success', 'Appointment updated successfully.');
     }

     public function appointmentsDestroy($id)
     {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

    return redirect()->back()->with('success', 'Appointment deleted successfully.');
     }

    public function galleryStore(Request $request)
   {
    $validatedData = $request->validate([
        'department' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $validatedData['image'] = $imagePath;

        
        Gallery::create($validatedData);
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
    
   
  }
  public function gallerysDestroy($id)
  {
      $gallery = Gallery::findOrFail($id);
      $gallery->delete();

      return redirect()->back()->with('success', 'Image deleted successfully.');
  }



}
