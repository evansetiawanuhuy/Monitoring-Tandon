<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogTandon;
use App\Models\Tandon;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $time = ['1 min', '2 min', '3 min', '4 min', '5 min', '6 min'];
        $logs1 = LogTandon::where('id_tandon', 1)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        $logs2 = LogTandon::where('id_tandon', 2)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();
        $logs3 = LogTandon::where('id_tandon', 3)->limit(6)->orderBy('created_at', 'DESC')->get()->pluck('distance')->toArray();

        $count_users = User::count();
        $count_tandons = Tandon::count();
        $count_tandon_active = Tandon::where('status', 1)->count();
        $count_tandon_nonactive = Tandon::where('status', 0)->count();

        return view('admin.dashboard')
        ->with('time',json_encode($time,JSON_NUMERIC_CHECK))
        ->with('logs1',$logs1)
        ->with('logs2',$logs2)
        ->with('logs3',$logs3)
        ->with('count_users', $count_users)
        ->with('count_tandons', $count_tandons)
        ->with('count_tandon_active', $count_tandon_active)
        ->with('count_tandon_nonactive', $count_tandon_nonactive);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function index_user()
    {
        $users = User::all();
        $time = ['1 min', '2 min', '3 min', '4 min', '5 min', '6 min'];
        return view('admin.user')
        ->with('time',json_encode($time,JSON_NUMERIC_CHECK))
        ->with('users', $users);
    }
}
