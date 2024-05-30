<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    // public function sms(){
    //     $data = json_encode(array(
    //         'msisdn'=>'254721819738',
    //         'text'=>"Helllo",
    //         'username'=>'ausaa',
    //         'issn'=>'AUSAA_KENYA',
    //         'password'=> '5730e2efac8d2ff04fba8558636112f7',
    //     ));
    //     $response = Http::withBody($data,'application/json')->withHeaders(['Content-Type : application/json'])->post('https://client.airtouch.co.ke:9012/sms/api/');
    //     $result = json_decode($response);
    //     return $result;
    // }

    public function projects(){
        return view('projects');
    }
    public function reports(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        $leaders= User::where('role','!=','Guest')->get();
        return view('about',compact('leaders'));
    }
}
