<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function MongoDB\BSON\toJSON;

class MainController extends Controller
{
    public function index () {

        $cars = Cars::with('category')->get();

        return view('posts.index', compact('cars'));
    }


    public function filter(Request $request)
    {
        $carCategory = $request->car_category_id;
        $carBrand = $request->car_brands;

        Log::info("filter Laravel functionnnnn");
        Log::info($carCategory);
        Log::info($carBrand);

        $cars = Cars::with('category')
            ->whereHas('category', function ($query) use ($carCategory) {
                $query->where('title', $carCategory);
            })
            ->whereIn('car_mark', $carBrand)
            ->get();

        Log::info('NEW CARSSSSSSSSS');
        Log::info($cars);


        return response()->json($cars);
    }

}
