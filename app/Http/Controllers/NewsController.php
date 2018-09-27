<?php

namespace emeract\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Curl::to('https://newsapi.org/v1/articles')
                ->withData( array(
                    'source' => 'google-news',
                    'sortBy' => 'top',
                    'apiKey' => '62e84a8d51504279834785fa4b240d0c' ) )
                ->asJsonResponse()
                ->get();

        return view('pages.news', compact('response'));
     }

    public function json()
    {
        $response = Curl::to('https://newsapi.org/v2/top-headlines')
            ->withData( array(
                //'source' => 'google-news',
                //'sortBy' => 'top',
                'country' => 'id',
                'apiKey' => '53b07a7620bf43ca828ffd95184bb933' ) )
            ->asJsonResponse()
            ->get();

        return response()->json($response);
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
