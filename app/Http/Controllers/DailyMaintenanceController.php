<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyMaintenance;
use App\Workstation;

class DailyMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = DailyMaintenance::all();
      if(count($data) > 0){ //mengecek apakah data kosong atau tidak
          $res['message'] = "Success!";
          $res['values'] = $data;
          return response($res);
      }
      else{
          $res['message'] = "Empty!";
          return response($res);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $ws = Workstation::whereHostname($request->input('ws'))->first();
      dd($ws);
      /*
      $id_ws = $ws['id'];
      $date = "";
      $data = new DailyMaintenance();
      $data->id_ws = $id_ws;

      if($data->save()){
          $res['message'] = "Success!";
          $res['value'] = "$data";
          return response($res);
      }
      */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($date)
    {
      $data = DailyMaintenance::where('date',$date)->get();

      if(count($data) > 0){ //mengecek apakah data kosong atau tidak
          $res['message'] = "Success!";
          $res['values'] = $data;
          return response($res);
      }
      else{
          $res['message'] = "Failed!";
          return response($res);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
