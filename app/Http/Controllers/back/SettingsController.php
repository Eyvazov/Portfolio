<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    public function index(){
        $item = Settings::first();
        $item->{'lang'} = $item->getTranslationsArray();
        return view('back.settings.general', compact('item'));
    }

    public function generalUpdate(SettingsRequest $request){
        $item = Settings::first();

        $item->update($request->input());

        if ($request->hasFile('favicon')){
            $distIcon = public_path($item->icon);
            if (File::exists($distIcon)){
                File::delete($distIcon);
            }
            $favicon = 'images/favicon/Favicon-' . time() . '.' . $request->favicon->extension();
            $request->favicon->move(public_path('images/favicon'), $favicon);
            $item->icon = $favicon;
        }

        if ($request->hasFile('logo')){
            $distLogo = public_path($item->logo);
            if (File::exists($distLogo)){
                File::delete($distLogo);
            }
            $logo = 'images/logo/Logo-' . time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images/logo'), $logo);
            $item->logo = $logo;
        }

        $item->save();
        return redirect()->back()->withSuccess('Məlumatlar yeniləndi!');
    }
}
