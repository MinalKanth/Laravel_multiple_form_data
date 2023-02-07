<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb1;
use App\Models\tb2;
use App\Models\tb3;
use App\Models\tb4;
use App\Models\tb5;

use Brian2694\Toastr\Facades\Toastr;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb1 = tb1::all();
        return view('index', compact('tb1'));

        // return view('index', [
        //     'tb1' => DB::table('tb1')->paginate(5)
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('add', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|min:2|max:50|string',
        'date' => 'nullable|string',
        'profession' => 'required|string',
        'bio' => 'required|string|max:500',
        'country' => 'nullable|string',
        'address' => 'required|string',
        'location' => 'required|string',
        'phone' => 'nullable|numeric',
        // 'email' => 'required|exists:tb1,email',
        'email' => 'required|string',
        'website' => 'nullable|string',
        'linkedin' => 'nullable|string',
        'twitter' => 'nullable|string',
        'facebook' => 'nullable|string',
        'github' => 'nullable|string',
        'image' => 'nullable|mimes:jpg,jpeg,png',
            ]);

        // echo "<pre>";
        // print_r($request->all());
        // exit;

        DB::beginTransaction();
        try{

            $requestData = $request;
            $imgName = Str::snake($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('users/'), $imgName);
            $requestData['image'] = $imgName;

            $tb1 = new tb1;
           $tb1->name = $request->name;
           $tb1->date = $request->date;
           $tb1->profession = $request->profession;
           $tb1->bio = $request->bio;
           $tb1->country = $request->country;
           $tb1->address = $request->address;
           $tb1->location = $request->location;
           $tb1->phone = $request->phone;
           $tb1->email = $request->email;
           $tb1->website = $request->website;
           $tb1->linkedin = $request->linkedin;
           $tb1->twitter = $request->twitter;
           $tb1->facebook = $request->facebook;
           $tb1->github = $request->github;
        //    $tb1->github = $request->image;



           $tb1->image = $imgName;
            $tb1->save();
            $last_insert_id = $tb1->id;

            if(count($request->description) > 0){
                $tb2 = new tb2;
                for($i  = 0; $i < count($request->description); $i++){
                    $tb2->platform_title = $request->platform_title[$i];
                    $tb2->description = $request->description[$i];
                    $tb2->tb1_id = $last_insert_id;
                    $tb2->save();
                }
            }
            if(count($request->value) > 0){
                for($i  = 0; $i < count($request->value); $i++){
                    $tb3 = new tb3;
                    $tb3->skill = $request->skill[$i];
                    $tb3->value = $request->value[$i];
                    $tb3->tb1_id = $last_insert_id;
                    $tb3->save();
                }
            }
            if(count($request->collage_name) > 0){
                for($i  = 0; $i < count($request->collage_name); $i++){
                    $tb4 = new tb4;
                    $tb4->collage_name = $request->collage_name[$i];
                    $tb4->e_start_from = $request->e_start_from[$i];
                    $tb4->e_end_at = $request->e_end_at[$i];
                    $tb4->e_description = $request->e_description[$i];
                    $tb4->tb1_id = $last_insert_id;
                    $tb4->save();
                }
            }
            if(count($request->company_name) > 0){
                for($i  = 0; $i < count($request->company_name); $i++){
                    $tb5 = new tb5;
                    $tb5->company_name = $request->company_name[$i];
                    $tb5->job_title = $request->job_title[$i];
                    $tb5->w_location = $request->w_location[$i];
                    $tb5->w_start_from = $request->w_start_from[$i];
                    $tb5->w_end_at = $request->w_end_at[$i];
                    $tb5->w_description = $request->w_description[$i];
                    $tb5->tb1_id = $last_insert_id;
                    $tb5->save();
                }
            }

            DB::commit();
            Toastr::success('New User added Successfully :)', 'success');
            return redirect()->route('user.create');
        }catch(\Exception $e) {
            DB::rollback();
            Toastr::error('New User added Fail :) - '.$e, 'Error');
            return redirect()->back();

        }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tb1 = tb1::findOrFail($id);
        $tb2 = tb2::findOrFail($id);
        $tb3 = tb3::findOrFail($id);
        $tb4 = tb4::findOrFail($id);
        // $tb5 = tb5::findOrFail($id);

        return view('show_user', compact('tb1','tb2','tb3','tb4'));
        // $tb1 = tb1::all();
        // $tb2 = tb2::all();
        // $tb3 = tb3::all();
        // $tb4 = tb4::all();
        // $tb5 = tb5::all();
        // return view('show_user',compact('id','tb1'));
    //     $users = DB::table('tb1')
    //     ->join('tb2', 'tb1.id', '=', 'tb2.tb1_id')
    //     ->select('tb1.*', 'tb2.*')
    //     ->where('tb1.id','=',$id)
    //     ->get();
    // $tb1 = DB::table('tb1')->where('id',$id)->get();
    // return view('show_user',compact('tb1','users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//         return tb2::with('tb1')
// ->where('tb1_id' ,'=', '$id')
// ->get()->all();
// $tb1_id =$id;
// $tb1 = DB::table('tb1')
//         ->select('tb1.*','tb2.*')
//         ->leftjoin('tb2','tb2.tb1_id','tb2.id')
//         ->where('id', $tb1_id)
//         ->get();
//         dd($tb1);

// return ＄usersDetails;
$tb1_id =$id;
        // $users = tb1::join('tb2', 'tb2.tb1_id', '=', 'tb1.id')
        //       ->join('tb3', 'tb3.tb1_id', '=', 'tb1.id')
        //     //   ->get(['tb1.*', 'tb2.*', 'tb3.*']);
        //       ->get();

    //           $tb1 = DB::table('tb1')
    //    ->join('tb2', 'tb2.tb1_id', '=', 'tb1.id')
    //    ->join('tb3', 'tb3.tb1_id', '=', 'tb2.tb1_id')
    //    ->select('tb3.*', 'tb2.*', 'tb1.*')
    //    ->get();

    //  return view('show_user', compact('tb1', 'id'));

$tb1 = tb1::findOrFail($id);
        // $tb2 = tb2::get();
        $tb3 = DB::table('tb3')
                    ->where('tb1_id', '=', $id)
                    ->get();
                   $datas = json_decode($tb3, true);

        $tb4 = DB::table('tb4')
                   ->where('tb1_id', '=', $id)
                   ->get();
                  $datas_tb4 = json_decode($tb4, true);

        $tb5 = DB::table('tb5')
                   ->where('tb1_id', '=', $id)
                   ->get();
                  $datas_tb5 = json_decode($tb5, true);
        // $tb3 = tb3::findOrFail($tb1_id);
        // $tb4 = tb4::findOrFail($tb1_id);
        // $tb5 = tb5::findOrFail($id);

return view('show_user', compact('tb1','id','datas','datas_tb4','datas_tb5'));
        // return view('brand_edit', compact('tb1','tb1'));

    //     $tb1 = tb1::where('id', $tb1_id)
    // ->leftJoin('tb2', 'tb1.id', '=', 'tb2.tb1_id')
    // ->select('tb1.*','tb2.*')->first();

    // return view('show_user', compact('tb1'));
}
    // public function edit(tb1 $tb1)
    // {

    //     return view('brand_edit', compact('tb1'));
    //     // $tb1 = tb1::where('id', '=','$id')->get(array('name','date','profession','bio','country','address','location','phone','email','website','linkedin','twitter','facebook','github','image'));
    //     // $tb1 = tb1::where('id', '=','$id')->all()->get();
    //     // $tb1 = tb1::all();
    //     // $tb2 = tb2::all();
    //     // $tb3 = tb3::all();
    //     // $tb4 = tb4::all();
    //     // $tb5 = tb5::all();
    //     // return view('show_user',compact('id','tb1','tb2','tb3','tb4','tb5'));

    //     // $tb1 = tb1::where('id', '=', '$id')->first();
    //     // return view('show_user',compact('id','tb1'));
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function tb2()
    // {
    //    return $this->belongsTo(tb1::class);
    // }

    function index2()
    {
    	$data = tb1::join('tb2.*', 'tb2.tb1_id', '=', 'tb1.id')
              		->join('tb3.*', 'tb3.tb1_id', '=', 'tb1.id')
              		->get(['tb1.*', 'tb2.*', 'tb3.*']);

       	/*Above code will produce following query

        Select
        	`country`.`country_name`,
        	`state`.`state_name`,
        	`city`.`city_name`
        from `country`
        inner join `state`
        	on `state`.`country_id` = `country`.`country_id`
        inner join `city`
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('show_user', compact('data'));
    }
}
