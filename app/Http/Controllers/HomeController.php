<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Http::get('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&past_days=10&hourly=temperature_2m,relativehumidity_2m,windspeed_10m')->json();
       
        
        return view('home', ['data'=>$data]);
    }
    public function list()
    {
        return Http::get('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&past_days=2&hourly=temperature_2m,relativehumidity_2m,windspeed_10m')->json();
        
        //return view('home');
    }
}
