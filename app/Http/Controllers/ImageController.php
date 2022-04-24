<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(StoreImageRequest $request)
    {
        $data = $request->only(  ['image', 'event_id', 'title', 'description']);

        $file = $request->file('image');
        $filename = time() . $file->hashName() . $file->extension();

        $file->storeAs('/images/' . $filename);
        Image::create([
            'image' => $filename,
            'event_id' => $data['event_id'],
            'title'=> $data['title'],
            'description'=> $data['description'],
        ]);

        return redirect()->back();
   }

    public function destroy(Image $image)
    {
        Storage::delete($image->image);
        Image::delete($image);

        return redirect()->back();

}
}
