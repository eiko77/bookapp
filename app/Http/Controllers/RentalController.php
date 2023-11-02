<?php

namespace App\Http\Controllers;

use App\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(Request $request)
    {
        $items = Rental::all();
        return view('rental.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('rental.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Rental::$rules);
        $rental = new Rental;
        $form = $request->all();

        unset($form['_token']);

        $rental->fill($form)->save();
        return redirect('/rental');
    }

    public function delete(Request $request)
    {
        $rental = Rental::find($request->id);
        return view('rental.del', ['form' => $rental]);
    }

    public function remove(Request $request)
    {
        Rental::find($request->id)->delete();
        return redirect('/rental');
    }


    public function edit(Request $request)
    {
        $rental = Rental::find($request->id);
        return view('rental.edit', ['form' => $rental]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Rental::$rules);
        $rental = Rental::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $rental->fill($form)->save();
        return redirect('/rental');
    }

    public function find(Request $request)
    {
        return view('rental.find', ['input' => '']);
    }

    public function search(Request $request)
    {

        // // 完全一致検索（原始的方法）
        $item = Rental::where('bookname', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];

        // // nameEqual　部分一致検索(失敗　原因不明)
        // // $min =$request-> input
        // $item = Rental::nameEqual($request->input)->first();
        // $param = ['input' => $request->input,'item' =>$item];

        return view('rental.find', $param);
    }

    public function show(Request $request)
    {
        $bookname= $request ->bookname;
        $items = Rental::table('rentals')
        ->where('bookname','like','%'.$bookname.'%')
        ->get();
        return view('rental.show', ['items' => $items]);
    }
}
