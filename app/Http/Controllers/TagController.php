<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(StoreTagRequest $request)
    {
        Tag::create($request->only('name'));

        return redirect()->back();
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->back();
    }
}
