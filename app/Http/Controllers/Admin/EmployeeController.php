<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // получение данных с сортировкой по полю number
        $items = User::orderBy('id')->get();

        return view('admin.employees.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // офисы
        $offices = Office::orderBy('id')->get();

        return view('admin.employees.create', compact('offices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new User();

        $item->name = $request['name'];
        $item->position = $request['position'];
        $item->office_id = $request['office_id'];
        $item->email = $request['email'];
        $item->password = bcrypt($request['password']);

        $item->save();

        return redirect()->route('admin.employees.index');
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
        $item = User::findOrFail($id);

        return view('admin.employees.show', compact('item'));
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
        $item = User::findOrFail($id);
        // офисы
        $offices = Office::orderBy('id')->get();

        return view('admin.employees.edit', compact('item', 'offices'));
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
        $item = User::findOrFail($id);

        $item->name = $request['name'];
        $item->position = $request['position'];
        $item->office_id = $request['office_id'];
        $item->email = $request['email'];

        if ($request['password'] !== null) {
            $item->password = bcrypt($request['password']);
        }

        $item->save();

        return redirect()->route('admin.employees.index');
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
        $item = User::findOrFail($id);
        // удаление записи
        $item->delete();

        return redirect()->route('admin.employees.index');
    }
}
