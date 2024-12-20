<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::latest()->get();
        return view('admin.all-ads', compact('ads'));
    }

    public function create()
    {
        return view('admin.add-ad');
    }

    public function edit(Ad $ad)
    {
        return view('admin.edit-ad', compact('ad'));
    }

    public function destroy(Ad $ad)
    {
        $ad->clearMediaCollection('ad_image');
        $ad->delete();
        return redirect()->route('all-ads')->with([
            'status' => 'success',
            'message' => 'Ad Deleted Successfully',
        ]);
    }
}
