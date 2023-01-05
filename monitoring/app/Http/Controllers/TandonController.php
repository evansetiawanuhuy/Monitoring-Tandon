<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tandon;

class TandonController extends Controller
{
    public function index()
    {
        $tandons = Tandon::all();
        $time = ['1 min', '2 min', '3 min', '4 min', '5 min', '6 min'];
        return view('admin.tandon')
        ->with('time',json_encode($time,JSON_NUMERIC_CHECK))
        ->with('tandons', $tandons);
    }

    public function create()
    {
        return view('admin.tandon');
    }

    public function store(Request $request)
    {
        Tandon::create($request->all());
        return redirect('/tandon');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
