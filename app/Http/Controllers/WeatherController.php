<?php

namespace emeract\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response = Curl::to('http://api.openweathermap.org/data/2.5/weather')
                ->withData( array( 'q' => 'Bandung', 'APPID' => '3e1bf095b5adc55212c2dc6fce9c8722' ) )
                ->asJsonResponse()
                ->get();

        $data = $response->coord->lon;

        return view('pages.weather', compact('response'));
    }

    public function json($q = 'Bandung', $unit = 'c'){
        $unit = $unit!='c'?'':'metric';
        $response = Curl::to('http://api.openweathermap.org/data/2.5/weather')
            ->withData( array(
                'q' => $q,
                'units' => $unit,
                'APPID' => 'b465ad04a62c3d01f53fee60bf146d84'
            ) )
            ->asJsonResponse()
            ->get();
        return response()->json(["data"=>$response]);
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
