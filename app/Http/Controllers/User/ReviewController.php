<?php

namespace App\Http\Controllers\User;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // создание записи из данных формы
        Review::create($request->except('status'));

        return redirect()->route('user.reviews.create')->with('success', 'Ваш отзыв успешно добавлен');
    }
}
