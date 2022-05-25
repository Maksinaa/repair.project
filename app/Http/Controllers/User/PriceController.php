<?php

namespace App\Http\Controllers\User;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // получение данных с сортировкой по полю number
        $items = Service::orderBy('price')->get();

        return view('user.price', compact('items'));
    }
}
