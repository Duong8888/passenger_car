<?php

namespace App\Models;

use Google\Cloud\Storage\StorageClient;

class Firebase
{
    public function uploadImage($request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $uploadedUrls = [];

        foreach ($request->file('images') as $index => $image) {
            $fileName = time() . '_' . $image->getClientOriginalName();

            // Initialize Google Cloud Storage
            $storage = new StorageClient([
                'keyFilePath' => base_path(env('FIREBASE_CREDENTIALS_PATH')),
                'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
            ]);

            // Get the default bucket
            $bucket = $storage->bucket(env('FIREBASE_STORAGE_BUCKET'));

            // Upload the image to Google Cloud Storage
            $object = $bucket->upload(
                file_get_contents($image->getRealPath()),
                [
                    'name' => $fileName,
                    'predefinedAcl' => 'publicRead', // Set ACL to allow public read access
                ]
            );

            // Get the public URL
            $publicUrl = $object->signedUrl(new \DateTime('2050-01-01'));
            $parsedUrl = parse_url($publicUrl);
            // Reconstruct the URL without the query string
            $baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];
            // Store the public URL in the array
            $uploadedUrls[] = [
                'index' => $index,
                'image' => $baseUrl
            ];
        }
        return $uploadedUrls;
    }
}
