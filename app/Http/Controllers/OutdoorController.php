<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outdoor;

class outdoorController extends Controller
{
    function index()
    {
        return view('index', ['showall' => outdoor::all()]);
    }

    function additems()
    {
        return view('additems');
    }

    function saveitems(Request $request)
    {


        $obj = new outdoor();
        $obj->batchno = $request->bno;
        $obj->quantity = $request->qty;
        $obj->status = $request->status;
        $obj->remarks = $request->remarks;
        $obj->save();

        return redirect('/');

    }

    function deleteitems(outdoor $outdoor, $id)
    {
        $row = $outdoor::destroy($id);
        return back();
    }
    public function edititems($id)
    {
        $data = outdoor::find($id);
        return view('edit', compact('data'));
    }


    public function updateitems(Request $request)
    {
        $obj = outdoor::find($request->id);
        $obj->batchno = $request->bno;
        $obj->quantity = $request->qty;
        $obj->status = $request->status;
        $obj->remarks = $request->remarks;
        $obj->update();
        return redirect('/');

    }
}