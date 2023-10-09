<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Facility;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('admin.facility', ['facilities' => $facilities]);
    }

    public function create()
    {
        return view('admin.facility-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'title' => 'required|string',
            'categories' => 'required|string',
            'small_thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'about' => 'required|string',
            'image_detail_1' => 'required|image|mimes:jpeg,jpg,png',
            'image_detail_2' => 'required|image|mimes:jpeg,jpg,png',
            'show' => 'required|boolean'
            
        ]);

        $smallThumbnail = $request->small_thumbnail;
        $imageDetail1 = $request->image_detail_1;
        $imageDetail2 = $request->image_detail_2;


        $originalSmallThumbnailName = Str::random(10).$smallThumbnail->getClientOriginalName();
        $originalImageDetail1Name = Str::random(10).$imageDetail1->getClientOriginalName();
        $originalImageDetail2Name = Str::random(10).$imageDetail2->getClientOriginalName();

        $smallThumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
        $imageDetail1->storeAs('public/detail', $originalImageDetail1Name);
        $imageDetail2->storeAs('public/detail', $originalImageDetail2Name);

        $data['small_thumbnail'] = $originalSmallThumbnailName;
        $data['image_detail_1'] = $originalImageDetail1Name;
        $data['image_detail_2'] = $originalImageDetail2Name;

        Facility::create($data);
        return redirect()->route('admin.facility')->with('success', 'Fasilitas berhasil ditambahkan');

    }
}
