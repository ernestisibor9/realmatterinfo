<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    // All Adverts
    public function AllAds()
    {
        $ads = Advert::latest()->get();
        return view('admin.backend.ads.all_ads', compact('ads'));

        if (empty($ads)) {
            $notification = array(
                'message' => 'No records found',
                'alert-type' => 'error'
            );
            return redirect()->route('all.ads')->with($notification);
        }
    }
    // Add Post
    public function AddAds()
    {
        return view('admin.backend.ads.add_ads');
    }
    // Store Ads
    public function StoreAds(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|dimensions:max_height=334,max_width=262',
            'banner' => 'image|mimes:jpeg,png,jpg,gif|dimensions:max_height=92,max_width=750',
        ]);

        $image = $request->file('photo');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('upload/ads_images/'), $filename);
        $save_url = 'upload/ads_images/' . $filename;

        $image = $request->file('banner');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('upload/ads_images/'), $filename);
        $save_url_banner = 'upload/ads_images/' . $filename;

        Advert::insert([
            'ads_owner' => $request->ads_owner,
            'ads_style' => $request->ads_style,
            'photo' => $save_url,
            'banner'=> $save_url_banner,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Ads Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.ads')->with($notification);
    }
    // Edit Ads
    public function EditAds($id)
    {
        $ads = Advert::find($id);
        return view('admin.backend.ads.edit_ads', compact('ads'));
    }
    // Update Post
    public function UpdateAds(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|dimensions:max_height=334,max_width=262',
            'banner' => 'image|mimes:jpeg,png,jpg,gif|dimensions:max_height=92,max_width=750',
        ]);

        $ads_id = $request->id;

        if ($request->file('photo')) {

            $image = $request->file('photo');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/ads_images/'), $filename);
            $save_url = 'upload/ads_images/' . $filename;

            Advert::find($ads_id)->update([
                'ads_owner' => $request->ads_owner,
                'ads_style' => $request->ads_style,
                'photo' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Ads Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.ads')->with($notification);
        }
        if ($request->file('banner')) {

            $image = $request->file('banner');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/ads_images/'), $filename);
            $save_url_banner = 'upload/ads_images/' . $filename;

            Advert::find($ads_id)->update([
                'ads_owner' => $request->ads_owner,
                'ads_style' => $request->ads_style,
                'banner' => $save_url_banner,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Ads Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.ads')->with($notification);
        }
        else {
            Advert::find($ads_id)->update([
                'ads_owner' => $request->ads_owner,
                'ads_style' => $request->ads_style,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Ads Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.ads')->with($notification);
        }
    }
    public function DeleteAds($id)
    {

        $item = Advert::find($id);
        $img = $item->photo;
        $banner = $item->banner;
        unlink($img);
        unlink($banner);

        Advert::find($id)->delete();
        $notification = array(
            'message' => 'Ads Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

}
