<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KtpData; // Import the KtpData model
use Illuminate\Support\Facades\Log;  // For logging
use Illuminate\Support\Facades\Redirect;


class KTPController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('form');
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the form data
        try {
            $validated = $request->validate([
                'nik' => 'required|string|max:16',
                'full_name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'dob' => 'required|date',
                'ktp_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate image
            ]);
        } catch (\Exception $e) {
            // Log the validation error
            Log::error('Validation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Validasi data gagal!');
        }

        // Handle image upload
        try {
            if ($request->hasFile('ktp_image')) {
                $image = $request->file('ktp_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/ktp_images'), $imageName);

                // Save the image URL in the database (Example)
                $imageUrl = '/uploads/ktp_images/' . $imageName;
            } else {
                throw new \Exception('No image file uploaded.');
            }
        } catch (\Exception $e) {
            // Log the error during file upload
            Log::error('Image upload failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal mengupload gambar!');
        }

        // Create a new entry in the KtpData model (Save the data into the database)
        try {
            KtpData::create([
                'nik' => $validated['nik'],
                'full_name' => $validated['full_name'],
                'address' => $validated['address'],
                'dob' => $validated['dob'],
                'image_url' => $imageUrl ?? null, // Store the image URL if it exists
            ]);
        } catch (\Exception $e) {
            // Log database insertion error
            Log::error('Database insertion failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan data ke database!');
        }

        // Redirect with a success message
        return redirect('/dashboard')->with('success', 'Verifikasi KTP berhasil!');


    }
}
