<?php

namespace App\Http\Controllers;

use App\Models\Chermet;
use App\Models\Cvetmet;
use App\Models\Faq;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $black_metal = Chermet::get();
        $color_metal = Cvetmet::get();
        $faqs = Faq::get();
        return view('welcome',['black_metal' => $black_metal, 'color_metal' => $color_metal, 'faqs' => $faqs]);
    }
}
