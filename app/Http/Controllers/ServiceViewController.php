<?php

namespace emeract\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Mapper;

class ServiceViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
        $response = null;
        $reviewType = $Request->review_layanan;
        if ($reviewType == 'posPolisi'){
          $response = Curl::to('http://api.jakarta.go.id/v1/emergency/pospolda')
                ->withHeader('Content-Type: application/json')
                ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                ->asJsonResponse()
                ->get();

          Mapper::map(-6.175110, 106.865039, ['title' => 'DKI Jakarta', 'animation' => 'DROP', 'zoom' => 12, 'cluster' => false, 'icon' => '../img/poloffice.png']);
          foreach ($response->data as $key => $value) {
            Mapper::marker($value->lat, $value->lng, ['title' => $value->name, 'animation' => 'DROP', 'icon' => '../img/poloffice.png']);
          }

          return view('pages.ServiceView');

        } else if ($reviewType == 'ambulance'){
            $response = Curl::to('http://api.jakarta.go.id/v1/emergency/ambulance')
                  ->withHeader('Content-Type: application/json')
                  ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                  ->asJsonResponse()
                  ->get();

            Mapper::map(-6.175110, 106.865039, ['title' => 'DKI Jakarta', 'animation' => 'DROP', 'zoom' => 12, 'cluster' => false, 'icon' => '../img/ambulance.png']);
            foreach ($response->VEHICLE->DATA as $key => $value) {
              Mapper::marker( (double) $value->LATITUDE, (double) $value->LONGITUDE, ['title' => $value->USERNAME, 'animation' => 'DROP', 'icon' => '../img/ambulance.png']);
            }

            return view('pages.ServiceView');

        } else if ($reviewType == 'rumahSakit'){
          $response = Curl::to('http://api.jakarta.go.id/v1/rumahsakitumum')
                ->withHeader('Content-Type: application/json')
                ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                ->asJsonResponse()
                ->get();

           Mapper::map(-6.175110, 106.865039, ['title' => 'DKI Jakarta', 'animation' => 'DROP', 'zoom' => 12, 'cluster' => false, 'icon' => '../img/hospital.png']);
           foreach ($response->data as $key => $value) {
             Mapper::marker($value->location->latitude, $value->location->longitude, ['title' => $value->nama_rsu, 'animation' => 'DROP', 'icon' => '../img/hospital.png']);
           }
           return view('pages.ServiceView');

        } else if ($reviewType == 'posPemadam'){
            $response = Curl::to('http://api.jakarta.go.id/v1/emergency/pospemadam')
                  ->withHeader('Content-Type: application/json')
                  ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                  ->asJsonResponse()
                  ->get();

            Mapper::map(-6.175110, 106.865039, ['title' => 'DKI Jakarta', 'animation' => 'DROP', 'zoom' => 12, 'cluster' => false, 'icon' => '../img/firefighter.png']);
            foreach ($response->data as $key => $value) {
              Mapper::marker($value->LAT, $value->LNG, ['title' => $value->POS_PEMADAM, 'animation' => 'DROP', 'icon' => '../img/firefighter.png']);
            }
            return view('pages.ServiceView');

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
