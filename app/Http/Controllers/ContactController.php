<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'reason' => 'required|string',
            'message' => 'required|string',
        ]);

        // Save the contact form data
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'reason' => $request->reason,
            'massage' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
    public function index()
    {
        $responses = Contact::latest()->paginate(10);
        return view('admin.contact-responses', compact('responses'));
    }
    public function show($id)
    {
        $response = Contact::findOrFail($id);
        return view('admin.contact-detail', compact('response'));
    }

    // Delete a contact response
    public function destroy($id)
    {
        $response = Contact::findOrFail($id);
        $response->delete();

        return redirect()->route('contact.index')->with('success', 'Response deleted successfully.');
    }
}
