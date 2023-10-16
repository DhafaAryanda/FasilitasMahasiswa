<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Facility;
use Illuminate\Support\Facades\Storage;

class ManajemenKontenController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();

        return view('admin.manajemen.konten.facility', ['facilities' => $facilities]);
    }

    public function create()
    {
        return view('admin.manajemen.konten.facility-create');
    }

    public function edit($id)
    {
        $facility = Facility::find($id);
        return view('admin.manajemen.konten.facility-edit', ['facility' => $facility]);
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
        return redirect()->route('admin.manajemen.konten.facility')->with('success', 'Fasilitas berhasil ditambahkan');

    }

    public function update(Request $request, $id) 
    {

        $data = $request->except('_token');

        $request->validate([
            'title' => 'required|string',
            'categories' => 'required|string',
            'small_thumbnail' => 'image|mimes:jpeg,jpg,png',
            'about' => 'required|string',
            'image_detail_1' => 'image|mimes:jpeg,jpg,png',
            'image_detail_2' => 'image|mimes:jpeg,jpg,png',
            'show' => 'required|boolean'
            
        ]);

        $facility = Facility::find($id);

        if ($request->small_thumbnail) {
            // save new images
            $smallThumbnail = $request->small_thumbnail;
            $originalSmallThumbnailName = Str::random(10).$smallThumbnail->getClientOriginalName();
            $smallThumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
            $data['small_thumbnail'] = $originalSmallThumbnailName;

            //delete old images
            Storage::delete('public/thumbnail/'.$facility->small_thumbnail);
        }

        if ($request->image_detail_1) {
            // save new images
            $imageDetail1 = $request->image_detail_1;
            $originalImageDetail1Name = Str::random(10).$imageDetail1->getClientOriginalName();
            $imageDetail1->storeAs('public/detail', $originalImageDetail1Name);
            $data['image_detail_1'] = $originalImageDetail1Name;
            
            //delete old images
            Storage::delete('public/thumbnail/'.$facility->image_detail_1);
        }

        if ($request->image_detail_2) {
            // save new images
            $imageDetail2 = $request->image_detail_2;
            $originalImageDetail2Name = Str::random(10).$imageDetail2->getClientOriginalName();
            $imageDetail2->storeAs('public/detail', $originalImageDetail2Name);
            $data['image_detail_2'] = $originalImageDetail2Name;
                
             //delete old images
             Storage::delete('public/thumbnail/'.$facility->image_detail_2);
        }

        $facility->update($data);

        return redirect()->route('admin.manajemen.konten.facility')->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy($id)
    {
        Facility::find($id)->delete();

        return redirect()->route('admin.manajemen.konten.facility')->with('success', 'Fasilitas berhasil dihapus');
    }
}
