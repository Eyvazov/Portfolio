<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
            $img = Image::make($request->favicon)->resize(512, 512);
            $img->save(public_path($favicon));
            $item->icon = $favicon;
        }

        if ($request->hasFile('logo')){
            $distLogo = public_path($item->logo);
            if (File::exists($distLogo)){
                File::delete($distLogo);
            }
            $logo = 'images/logo/Logo-' . time() . '.' . $request->logo->extension();
            $img = Image::make($request->logo)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path($logo));
            $item->logo = $logo;
        }

        $item->save();
        return redirect()->back()->withSuccess('Məlumatlar yeniləndi!');
    }
}
