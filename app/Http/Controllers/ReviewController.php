<?php

namespace emeract\Http\Controllers;

use emeract\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ixudra\Curl\Facades\Curl;
use Session;
use Alert;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all()->sortByDesc("created_at");
        // dd($reviews);
        return view('pages.listReview', compact('reviews'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $Request)
    {
        $searchKey = $Request->searchKey;
        $reviews = Review::where('service_identifier', 'LIKE', '%'.$searchKey.'%')->get()->sortByDesc("created_at");
        // dd($reviews);
        return view('pages.listReview', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $Request)
    {
        $response = null;
        $reviewType = $Request->review_layanan;
        if (Auth::check()){
            if ($reviewType == 'posPolisi'){
              $response = Curl::to('http://api.jakarta.go.id/v1/emergency/pospolda')
                    ->withHeader('Content-Type: application/json')
                    ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                    ->asJsonResponse()
                    ->get();

              $data = array();
              foreach ($response->data as $key => $value) {
                $data[] = $value->name . ' ( Placemark_Id: '.$value->placemark_id.' )';
              }
              // dd($data);

              $reviewType = 'Pos Polisi';
              return view('pages.addReview', compact('data', 'reviewType'));

            } else if ($reviewType == 'ambulance'){
                $response = Curl::to('http://api.jakarta.go.id/v1/emergency/ambulance')
                      ->withHeader('Content-Type: application/json')
                      ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                      ->asJsonResponse()
                      ->get();

                $data = array();
                foreach ($response->VEHICLE->DATA as $key => $value) {
                  $data[] = 'No Polisi: '.$value->LICENSE . ' | Username: '.$value->USERNAME. ' | Type: '.$value->TYPE;
                }

                // dd($data);

                $reviewType = 'Ambulance';
                return view('pages.addReview', compact('data', 'reviewType'));

            } else if ($reviewType == 'rumahSakit'){
              $response = Curl::to('http://api.jakarta.go.id/v1/rumahsakitumum')
                    ->withHeader('Content-Type: application/json')
                    ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                    ->asJsonResponse()
                    ->get();

               $data = array();
               foreach ($response->data as $key => $value) {
                 $data[] = 'RS. '.$value->nama_rsu . ' | Telp: '.$value->telepon[0].' ('.$value->kode_pos.')';
               }
               // dd($data);

               $reviewType = 'Rumah Sakit';
               return view('pages.addReview', compact('data', 'reviewType'));

            } else if ($reviewType == 'posPemadam'){
                $response = Curl::to('http://api.jakarta.go.id/v1/emergency/pospemadam')
                      ->withHeader('Content-Type: application/json')
                      ->withHeader('Authorization: vH5IApExeaUn+jOMvs1M1c/1evpHHQmVE9lKoMSkEKFcGY2DXeHCkk6Zcn85BY/Y')
                      ->asJsonResponse()
                      ->get();

                $data = array();
                foreach ($response->data as $key => $value) {
                    $data[] = $value->POS_PEMADAM . ' | '.$value->ALAMAT;
                }
                // dd($data);

                $reviewType = 'Pos Pemadam Kebakaran';
                return view('pages.addReview', compact('data', 'reviewType'));

            }


        } else {
            // Alert::warning('Upps..', 'Untuk memberikan review, Silahkan login dulu !');
            // alert()->overlay('Upps..', $Request->review_layanan, 'info');
            // Alert::message('Welcome back!');
            Alert::warning('Silahkan login terlebih dahulu', 'Uppsss...')->persistent('Close');;
            // Alert::message('this is message aler');
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName = null;
        if (isset($request->img_review)){
            $request->validate([
              'img_review' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time().'_emeract'.'.'.$request->img_review->getClientOriginalExtension();
            $request->img_review->move(public_path('img/reviewImg'), $imageName);
        }

        Review::create([
          'user_id' => auth()->id(),
          'review_type' => request('review_type'),
          'service_identifier' => request('service_identifier'),
          'ratting' => (int) request('ratting'),
          'review_content' => request('review_content'),
          'img_review' => $imageName
        ]);

        return redirect('listReview');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \emeract\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \emeract\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \emeract\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \emeract\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
