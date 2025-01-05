<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function edit()
    {
        $student = Auth::user()->student; // Asume una relación user->student
        return view('students.update-student-information-form', compact('student'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'place_of_origin' => 'nullable|string|max:255',
            'interests' => 'nullable|array',
            'social_links' => 'nullable|json',
        ]);

        $student = Auth::user()->student; // Asume una relación user->student
        $student->update($request->all());

        return redirect()->back()->with('status', 'Student information updated successfully!');
    }
}
