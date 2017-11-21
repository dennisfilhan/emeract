<?php

namespace emeract\Http\Controllers;

use Illuminate\Http\Request;
use emeract\Review;

class ReviewApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = false;
        $message = "";
        $result = null;

        $reviews = Review::all();
        if ($reviews->first()){
          $status = true;
          $message = "Request data is successfull";
        } else {
          $status = false;
          $message = "Data Request is failed";
        }

        $response = [
          'status' => $status,
          'message' => $message,
          'Api Provider' => 'Emeract.com',
          'admin email' => 'abdulaziz733@gmail.com',
          'data' => $reviews
        ];

        return $response;
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
    public function show($service_identifier)
    {
        if ($service_identifier != null){
          $status = false;
          $message = "";
          $result = null;

          $reviews = Review::where('service_identifier', 'LIKE', '%'.$service_identifier.'%')->get();
          if ($reviews->first()){
            $status = true;
            $message = "Request data is successfull";
          } else {
            $status = false;
            $message = "Data Request is failed";
          }

          $response = [
            'status' => $status,
            'message' => $message,
            'Api Provider' => 'Emeract.com',
            'admin email' => 'abdulaziz733@gmail.com',
            'data' => $reviews
          ];

          return $response;
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
