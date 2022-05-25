<?php

namespace App\Http\Controllers\Admin;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // получение данных с сортировкой по полю number
        $items = Review::orderByDesc('created_at')->get();

        return view('admin.reviews.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
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
        Review::create($request->all());

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // получение записи по id
        $item = Review::findOrFail($id);

        return view('admin.reviews.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // получение записи по id
        $item = Review::findOrFail($id);

        return view('admin.reviews.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // получение записи по id
        $item = Review::findOrFail($id);
        // обновление записи по данным формы
        $item->update($request->all());

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // получение записи по id
        $item = Review::findOrFail($id);
        // удаление записи
        $item->delete();

        return redirect()->route('admin.reviews.index');
    }
}
