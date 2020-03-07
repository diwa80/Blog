<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update()
    {
        $settings = Setting::first();

        $settings->site_name =request()->site_name;
        $settings->address =request()->address;
        $settings->contact_email =request()->contact_email;
        $settings->contact_number =request()->contact_number;

        $settings ->save();

        return redirect()->back();
    }
}
