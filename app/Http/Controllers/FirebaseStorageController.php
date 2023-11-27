<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\FirebaseStorage;

class FirebaseStorageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();

        // Upload the image to Firebase Storage
        $storage = FirebaseStorage::storage();
        $bucket = $storage->getBucket();

        $object = $bucket->upload(
            file_get_contents($image->getRealPath()),
            [
                'name' => $fileName,
            ]
        );

        $downloadUrl = $object->signedUrl(new \DateTime('2050-01-01'));

        // You can now use $downloadUrl to access the uploaded image

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}