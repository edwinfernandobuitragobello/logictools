<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
    public function email_contact(){
    	echo json_encode($_POST);
    	# Instantiate the client.
		$mgClient = new Mailgun('key-af6acfd466924da0c98ceab9737d49d2');
		$domain = "sandbox601f56c388c9498783d68527bd994850.mailgun.org";

		# Make the call to the client.
		$result = $mgClient->sendMessage("$domain",
		          array('from'    => 'Mailgun Sandbox <postmaster@sandbox601f56c388c9498783d68527bd994850.mailgun.org>',
		                'to'      => 'alexander jaimes <contacto.logictools@gmail.com>',
		                'subject' => 'Hello alexander jaimes',
		                'text'    => 'Congratulations alexander jaimes, you just sent an email with Mailgun!  You are truly awesome! '));

		# You can see a record of this email in your logs: https://mailgun.com/app/logs .

		# You can send up to 300 emails/day from this sandbox server.
		# Next, you should add your own domain so you can send 10,000 emails/month for free. 
    }
}
