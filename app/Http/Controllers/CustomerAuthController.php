<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Session;
class CustomerAuthController extends Controller
{
    private $customer;

    public function register()
    {
        return view('new.reg');
    }

    public function newCustomer(Request $request)
    {

        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:11',
            'password' => 'required|min:6',
        ]);

        // Check if the customer already exists in the Admission table
        $existingCustomer = \App\Models\Admission::where('email', $request->email)->first();

        if ($existingCustomer) {
            // If customer exists, return with an error message
            return back()->with('message', 'Sorry, a customer with this email already exists.');
        }

        // Create new customer
        $this->customer = \App\Models\Admission::create([
            'email' => $request->email,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
        ]);
        $this->course = \App\Models\Course::create([
            'course_name' => $request->course_name,
            'teacher' => $request->teacher,
            'student_id' => $this->customer->id,
        ]);

        // Store customer information in the session
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        // Redirect to customer dashboard
        return redirect('/customer-dashboard');
    }



    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }

    public function dashboard()
    {
        return view('new.success');
    }
}
