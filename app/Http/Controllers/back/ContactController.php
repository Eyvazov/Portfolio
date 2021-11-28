<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('back.settings.contact');
    }
    public function contactUpdate(){
        return 'Salam';
    }
}
