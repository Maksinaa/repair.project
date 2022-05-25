<?php

namespace App\Http\Controllers\User;
use App\Models\Review;
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
        // получение данных с сортировкой по полю number
        $reviews = Review::where('status', 'published')
        ->orderByDesc('created_at')
        ->get(['id', 'name', 'text', 'rating', 'created_at']);

        return view('user.index', compact('reviews'));
    }
}
