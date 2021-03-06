<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Arr;
use App\Models\Office;
use App\Models\Review;
use App\Models\Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //офисы
        $offices = Office::orderBy('id')->get();
        //реквизиты

        $details = Detail::all('name', 'value')->toArray();

        $key = Arr::pluck($details, 'name');
        $value = Arr::pluck($details, 'value');

        $details = array_combine($key, $value);
        // отзывы
        $reviews = Review::where('status', 'published')
        ->orderByDesc('created_at')
        ->limit(5)
        ->get(['id', 'name', 'text', 'rating', 'created_at']);

        return view('user.index', compact('reviews','details', 'offices'));
    }
}
