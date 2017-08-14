<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use Mail;
use App\Projects;
use App\Galery;

class InicioController extends Controller
{
    public function index(){
    	$projects = Projects::All();
    	foreach ($projects as $key => $value) {
    		$value->Galery = Galery::select('*')->where('project_id', $value->id)->get();
    	}
    	//var_dump($projects); return;
    	return view('index-v1', compact('projects'));
    }
    public function email_contact(Request $request){
    	Mail::send('emails.contact',$request->all(),function($msj){
            $msj->subject('Cotización');
            $msj->to('contacto.logictools@gmail.com');
        });
    }
}
