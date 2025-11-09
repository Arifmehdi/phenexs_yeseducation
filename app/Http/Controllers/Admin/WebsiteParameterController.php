<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WebsiteParameterController extends Controller
{
    public function websiteparam(){
        menuSubmenu('websiteparam','websiteparamSM');
        $websiteParameter = WebsiteParameter::first();
        return view('admin.websiteparam',compact('websiteParameter'));
    }

    public function update(Request $request, $id){

        $wp = WebsiteParameter::find($request->id);

        $wp->website_title = $request->website_title;
        $wp->shipping_cahrge = $request->shipping_cahrge;
        $wp->google_search_console = $request->google_search_console;
        $wp->google_analytics_code = $request->google_analytics_code;
        $wp->facebook_pixel_code = $request->facebook_pixel_code;
        $wp->meta_author = $request->meta_author;
        $wp->meta_description = $request->meta_description;
        $wp->footer_copyright = $request->footer_copyright;
        $wp->fb_url = $request->fb_url;
        $wp->contact_mobile = $request->contact_mobile;
        $wp->whatsapp_number = $request->whatsapp_number;
        $wp->contact_email = $request->contact_email;
        $wp->contact_address = $request->contact_address;
        $wp->twitter_url = $request->twitter_url;
        $wp->linkedin_url = $request->linkedin_url;
        $wp->instagram_url = $request->instagram_url;
        $wp->youtube_url = $request->youtube_url;

        //For SEO START
        $wp->twitter_title = $request->twitter_title;
        $wp->twitter_description = $request->twitter_description;
        $wp->twitter_creator = $request->twitter_creator;
        $wp->og_title = $request->og_title;
        $wp->og_description = $request->og_description;

        $wp->editedby_id = Auth::id();



        if ($request->hasFile('logo')) {
            if ($wp->logo) {
                Storage::delete('public/wp/'.$wp->logo);
            }
            $file = $request->logo;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = "logo" . time() . $ext;
            $file->storeAs('wp', $imageName,'public');
            $wp->logo = $imageName;
        }
        if ($request->hasFile('logo_alt')) {
            if ($wp->logo_alt) {
                Storage::delete('public/wp/'.$wp->logo_alt);
            }
            $file = $request->logo_alt;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = "logo-alt" . time() . $ext;
            $file->storeAs('wp', $imageName,'public');
            $wp->logo_alt = $imageName;
        }
        if ($request->hasFile('favicon')) {
            if ($wp->favicon) {
                Storage::delete('public/wp/'.$wp->favicon);
            }
            $file = $request->favicon;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = "favicon" . time() . $ext;
            $file->storeAs('wp', $imageName,'public');
            $wp->favicon = $imageName;
        }


        $wp->save();
        return redirect()->back()->with('success','website parameter updated');
    }
}