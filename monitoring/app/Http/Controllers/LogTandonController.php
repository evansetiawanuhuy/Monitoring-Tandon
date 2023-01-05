<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogTandon;

class LogTandonController extends Controller
{
    public function index()
    {
        $logTandons = LogTandon::all();
        $time = ['1 min', '2 min', '3 min', '4 min', '5 min', '6 min'];
        return view('admin.log')
        ->with('time',json_encode($time,JSON_NUMERIC_CHECK))
        ->with('logTandons', $logTandons);
        // $logs1 = LogTandon::where('id_tandon', 1)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        // $logs2 = LogTandon::where('id_tandon', 2)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        // $logs3 = LogTandon::where('id_tandon', 3)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();

        // return response()->json(
        //     [
        //         'log1' => $logs1,
        //         'log2' => $logs2,
        //         'log3' => $logs3,
        //     ]
        // );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $log = LogTandon::create($request->all());
        return response()->json([
            'message' => $log
        ]);
    }

    public function getData(Request $request)
    {
        $logs1 = LogTandon::where('id_tandon', 1)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        $logs2 = LogTandon::where('id_tandon', 2)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        $logs3 = LogTandon::where('id_tandon', 3)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();

        return response()->json(
            [
                'log1' => $logs1,
                'log2' => $logs2,
                'log3' => $logs3,
            ]
        );
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
