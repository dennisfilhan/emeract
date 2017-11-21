@extends('layouts.master')

@section('title')
    <title>D'KOST Cuaca</title>
@endsection

<section class="success">
    <div class="container">
        <h2 class="text-center">Cuaca Hari Ini</h2>
        <hr class="star-light">
    	<div class="row">

            <div class="col-lg-4 ml-auto">

                <div class="row">

                    <div class="col-lg-6 ml-auto">
                        <h3>{{ $response->name }} </h3>
                        <p style="color: white; font-size: 25px;">{{ $response->weather[0]->description }}</p>                
                    </div>
                    
                    <div class="col-lg-5 ml-auto">
                        <?php 
                        $imgUrl = "http://openweathermap.org/img/w/".$response->weather[0]->icon.".png";
                        ?> 
                        <img width="120px" src="<?php echo($imgUrl)  ?>">
                    </div>

                </div>


                <div class="col-lg-12 ml-auto">
                    <p><b>TEKANAN ANGIN:</b> {{ $response->wind->speed }}  </p>
                    <p><B>DERAJAT ANGIN:</B> {{ $response->wind->deg }} </p>
                </div>

            </div>
            <div class="col-lg-4 mr-auto">
                
                <H5>TEMPERATUR INFO</H5>
                <table class="table table-striped" style="color: white;">
                    <TR>
                        <td>Temp</td>
                        <td> {{ $response->main->temp }}</td>
                    </TR>
                    <TR>
                        <td>Pressure</td>
                        <td>{{ $response->main->pressure }}</td>
                    </TR>
                    <TR>
                        <td>Humidity</td>
                        <td>{{ $response->main->humidity }}</td>
                    </TR>
                    <TR>
                        <td>Temp Min</td>
                        <td>{{ $response->main->temp_min }}</td>
                    </TR>
                    <TR>
                        <td>Temp Max</td>
                        <td>{{ $response->main->temp_max }}</td>
                    </TR>
                    <TR>
                        <td>Sea Level</td>
                        <td>{{ $response->main->sea_level }}</td>
                    </TR>
                    <TR>
                        <td>Grnd Level</td>
                        <td>{{ $response->main->grnd_level }}</td>
                    </TR>
                </table>


            </div>
    	</div>
    </div>
</section>


@section('content')

@endsection