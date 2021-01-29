<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Ixudra\Curl\Facades\Curl;

class ListController extends Controller
{
	public function getDataUser()
    {
        return view('list');
    }
    public function getData()
    {
        $response = Http::get('https://reqres.in/api/users?page=1');
        $datas = $response->json();
        //$test = compact('datas'); 
        return view('list', compact('datas'));
        //dd($datas);
    }
}
