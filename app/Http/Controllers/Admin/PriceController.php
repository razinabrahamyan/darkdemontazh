<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chermet;
use App\Models\Cvetmet;
use App\Models\Faq;
use App\Models\Price;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * PriceController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function chermet()
    {
        $prices = Chermet::get();
        return view('admin.chermet')->with(['prices' => $prices]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function saveChermet(Request $request, $id): JsonResponse
    {

        $data_array = [
            'price' => str_replace(' ', '', $request['price']),
        ];

        $price = Chermet::query()->find($id);

        $price->price = $data_array['price'];
        $price->category = $request->category;
        $price->description = $request->description;
        $price->save();
        return response()->json($price);
    }


    public function cvetmet()
    {
        $prices = Cvetmet::get();
        return view('admin.cvetmet')->with(['prices' => $prices]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function saveCvetmet(Request $request, $id): JsonResponse
    {

        $data_array = [
            'price' => str_replace(' ', '', $request['price']),
        ];

        $price = Cvetmet::query()->find($id);

        $price->price = $data_array['price'];
        $price->category = $request->category;
        $price->save();
        return response()->json($price);
    }

    /**
     * @return Application|Factory|View
     */

    public function faq(){
        $faqs = Faq::get();
        return view('admin.faqs')->with(['faqs' => $faqs]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function saveFaqs(Request $request, $id){
        $price = Faq::query()->find($id);
        $price->question = $request->question;
        $price->answer = $request->answer;
        $price->save();
        return response()->json($price);
    }

}
