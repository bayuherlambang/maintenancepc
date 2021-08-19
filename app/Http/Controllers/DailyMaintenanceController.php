<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyMaintenance;
use App\Workstation;
use Carbon\Carbon;

class DailyMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = "Rekap Maintenance PC";
      $data = DailyMaintenance::all();
      $data->transform(function($d) {
        $id_ws = Workstation::where('id', $d->id_ws)->first();
        $d->hostname = $id_ws->hostname;
        $d->ext = $id_ws->ext;
        $d->ip_ext = $id_ws->ip_ext;
        $d->model = $id_ws->model." & ".$id_ws->serialnumber;
        $rawDate = explode(" ", $d->created_at);

        $rawDate = explode("-", $rawDate[0]);

        $d->date = $rawDate[2]."/". $rawDate[1]."/".$rawDate[0];
        //dd($rawDate);
        return $d;
      });
      return view('pages.maintenance.index')->withTitle($title)->withData($data);
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

      $ws = Workstation::whereHostname($request->input('hostname'))->first();
      $id_ws = $ws['id'];
      $data = new DailyMaintenance([
        'id_ws'=> $id_ws,
      ]);
      if($data->save()){
          $res['message'] = "Success!";
          $res['value'] = "$data";
          return response($res);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($date)
    {
      $data = DailyMaintenance::whereDate('created_at', '=', $date)->get();

      if(count($data) > 0){ //mengecek apakah data kosong atau tidak
          $res['message'] = "Success!";
          $data->transform(function($d) {
            $id_ws = Workstation::where('id', $d->id_ws)->first();
            $d->hostname = $id_ws->hostname;
            $d->ext = $id_ws->ext;
            $d->ip_ext = $id_ws->ip_ext;
            $d->model = $id_ws->model." & ".$id_ws->serialnumber;
            return $d;
        });
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
