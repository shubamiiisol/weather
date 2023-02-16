@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                 <b>   <p>latitude:  {{$data['latitude']}} </p>
                    <p>longitude:  {{$data['longitude']}} </p>
                    <p>generationtime_ms:  {{$data['generationtime_ms']}} </p>
                    <p>timezone:  {{$data['timezone']}} </p></b>
                    <table border="1">
                    <tr>
    <th>---------Hourly Time-----------</th>
    <th>-----Temperature------</th>
    <th>Relativehumidity_2m-------</th>
    <th>Windspeed_10m---------</th>
  </tr>
  <!-- <pre>
  {{
    
    print_r($data['hourly']) 
 
}}
</pre> -->
                    @foreach($data['hourly']['time'] as $index => $code )
                   
                      <tr>
                        <td>{{$code}}</td>
                        <td>{{$data['hourly']['temperature_2m'][$index]}}</td>
                        <td>{{$data['hourly']['relativehumidity_2m'][$index]}}</td>
                        <td>{{$data['hourly']['windspeed_10m'][$index]}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
