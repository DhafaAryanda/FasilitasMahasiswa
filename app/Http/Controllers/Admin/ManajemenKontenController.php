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
            'about' => 'required|string',
            'image1_detail' => 'required|image|mimes:jpeg,jpg,png',
            'image2_detail' => 'required|image|mimes:jpeg,jpg,png',
            'image3_detail' => 'sometimes|image|mimes:jpeg,jpg,png',
            'image4_detail' => 'sometimes|image|mimes:jpeg,jpg,png',
            'show' => 'required|boolean'
            
        ]);

        $data['about'] = nl2br($data['about']);

        $image1Detail = $request->file('image1_detail');
        $image2Detail = $request->file('image2_detail');
        $image3Detail = $request->file('image3_detail');
        $image4Detail = $request->file('image4_detail');


        if ($image1Detail) {
            $originalImage1DetailName = Str::random(10).$image1Detail->getClientOriginalName();
            $image1Detail->storeAs('public/detail', $originalImage1DetailName);
            $data['image1_detail'] = $originalImage1DetailName;
        }

        if ($image2Detail) {
            $originalImage2DetailName = Str::random(10).$image2Detail->getClientOriginalName();
            $image2Detail->storeAs('public/detail', $originalImage2DetailName);
            $data['image2_detail'] = $originalImage2DetailName;
        }

        if ($image3Detail) {
            $originalImage3DetailName = Str::random(10).$image3Detail->getClientOriginalName();
            $image3Detail->storeAs('public/detail', $originalImage3DetailName);
            $data['image3_detail'] = $originalImage3DetailName;
        }

        if ($image4Detail) {
            $originalImage4DetailName = Str::random(10).$image4Detail->getClientOriginalName();
            $image4Detail->storeAs('public/detail', $originalImage4DetailName);
            $data['image4_detail'] = $originalImage4DetailName;
        }



        // $originalSmallThumbnailName = Str::random(10).$smallThumbnail->getClientOriginalName();
        // $originalImage1DetailName = Str::random(10).$image1Detail->getClientOriginalName();
        // $originalImage2DetailName = Str::random(10).$image2Detail->getClientOriginalName();
        // $originalImage3DetailName = Str::random(10).$image3Detail->getClientOriginalName();
        // $originalImage4DetailName = Str::random(10).$image4Detail->getClientOriginalName();

        // $smallThumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
        // $image1Detail->storeAs('public/detail', $originalImage1DetailName);
        // $image2Detail->storeAs('public/detail', $originalImage2DetailName);
        // $image3Detail->storeAs('public/detail', $originalImage3DetailName);
        // $image4Detail->storeAs('public/detail', $originalImage4DetailName);

        // $data['small_thumbnail'] = $originalSmallThumbnailName;
        // $data['image1_detail'] = $originalImage1DetailName;
        // $data['image2_detail'] = $originalImage2DetailName;
        // $data['image3_detail'] = $originalImage3DetailName;
        // $data['image4_detail'] = $originalImage4DetailName;

        Facility::create($data);
        return redirect()->route('admin.manajemen.konten.facility')->with('success', 'Fasilitas berhasil ditambahkan');

    }

    public function update(Request $request, $id) 
    {

        $data = $request->except('_token');

        $request->validate([
            'title' => 'required|string',
            'categories' => 'required|string',
            'about' => 'required|string',
            'image1_detail' => 'image|mimes:jpeg,jpg,png',
            'image2_detail' => 'image|mimes:jpeg,jpg,png',
            'image3_detail' => 'sometimes|image|mimes:jpeg,jpg,png',
            'image4_detail' => 'sometimes|image|mimes:jpeg,jpg,png',
            'show' => 'required|boolean'
            
        ]);

        $facility = Facility::find($id);

        $data['about'] = nl2br($data['about']);

        if ($request->image1_detail) {
            // save new images
            $image1Detail = $request->image1_detail;
            $originalImage1DetailName = Str::random(10).$image1Detail->getClientOriginalName();
            $image1Detail->storeAs('public/detail', $originalImage1DetailName);
            $data['image1_detail'] = $originalImage1DetailName;
            
            //delete old images
            Storage::delete('public/detail/'.$facility->image1_detail);
        }

        if ($request->image2_detail) {
            // save new images
            $image2Detail = $request->image2_detail;
            $originalImage2DetailName = Str::random(10).$image2Detail->getClientOriginalName();
            $image2Detail->storeAs('public/detail', $originalImage2DetailName);
            $data['image2_detail'] = $originalImage2DetailName;
            
            //delete old images
            Storage::delete('public/detail/'.$facility->image2_detail);
        }

        if ($request->image3_detail) {
            // save new images
            $image3Detail = $request->image3_detail;
            $originalImage3DetailName = Str::random(10).$image3Detail->getClientOriginalName();
            $image3Detail->storeAs('public/detail', $originalImage3DetailName);
            $data['image3_detail'] = $originalImage3DetailName;
            
            //delete old images
            Storage::delete('public/detail/'.$facility->image3_detail);
        }

        if ($request->image4_detail) {
            // save new images
            $image4Detail = $request->image4_detail;
            $originalImage4DetailName = Str::random(10).$image4Detail->getClientOriginalName();
            $image4Detail->storeAs('public/detail', $originalImage4DetailName);
            $data['image4_detail'] = $originalImage4DetailName;
            
            //delete old images
            Storage::delete('public/detail/'.$facility->image4_detail);
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
