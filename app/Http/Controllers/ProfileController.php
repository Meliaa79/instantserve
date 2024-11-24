<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
{
    // Validation for incoming data
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:15', // Phone validation
        'shop_name' => 'nullable|string|max:255',
        'dob' => 'nullable|date',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();
    
    // If there is a new profile picture
    if ($request->hasFile('profile_picture')) {
        // Delete old picture if it exists
        if ($user->profile_picture && Storage::exists('public/profile_pictures/' . $user->profile_picture)) {
            Storage::delete('public/profile_pictures/' . $user->profile_picture);
        }

        $file = $request->file('profile_picture');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        // Store the file in the 'profile_pictures' directory
        $file->storeAs('public/profile_pictures', $fileName);

        // Update profile picture path
        $user->profile_picture = $fileName;
    }

    // Update other profile fields
    $user->update([
        'username' => $request->username,
        'email' => $request->email,
        'shop_name' => $request->shop_name,
        'phone' => $request->phone,
        'dob' => $request->dob,
        'gender' => $request->gender,
    ]);

    // Redirect to the admin profile page after updating
    return redirect()->route('admin.profile.show')->with('success', 'Profil berhasil diperbarui');
}

// In ProfileController.php
public function showAdminProfile()
{
    return view('admin.profile'); // Return your admin profile view here
}

}