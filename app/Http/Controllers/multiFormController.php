<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb1;
use App\Models\tb2;
use App\Models\tb3;
use App\Models\Country;

class multiFormController extends Controller
{
    public function cardAllEmployee(Request $request)
    {
        $users = DB::table('tb1')
                    ->join('tb2', 'tb1.id', '=', 'tb2.tb1_id')
                    ->select('tb1.*', 'tb2.birth_date', 'tb2.gender', 'tb2.company')
                    ->get();
        $userList = DB::table('tb1')->get();
        $permission_lists = DB::table('tb3')->get();
        return view('form.allemployeecard',compact('users','userList','permission_lists'));
    }
}
