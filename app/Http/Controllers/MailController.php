<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    



    public function onlineJob(Request $request){

    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required|email',
    		'phone'=>'required',
    		'language'=>'required',
    		'capacity'=>'required',
    		'speciality'=>'required',
    		'experience'=>'required',
    		'address'=>'required',
    		'cv'=>'required',



    		]);
    	$data=['name'=>$request->get('name'),'email'=>$request->get('email'),

'phone'=>$request->get('phone'),'language'=>$request->get('language'),

'capacity'=>$request->get('capacity'), 'speciality'=>$request->get('speciality'),
'experience'=>$request->get('experience')  , 'address'=>$request->get('address'),

'cv'=>$request->get('cv'),'gender'=>$request->get('gender'),'jobtime'=>$request->get('jobtime')

    	];


    	Mail::send('templates.onlinejob',$data,function($message){
    		$message->from('info@Alboraq.com','Alboraq');
    		$message->to('SALLY.NADER.AHMED@hotmail.com')->subject('New Candidate Application');




    	});
    	return view('home')->with('message','your application submitted');
    }



    public function onlinetranslation(Request $request){
    	$this->validate($request,[

'business'=>'required',


'volume'=>'required',
'field'=>'required',
'comment'=>'required',
'file'=>'required',

    		]);

    	if(! empty($request->get('file'))){


    		
    	}


$data=[

'business'=>$request->get('business'),
'volume'=>$request->get('volume'),
'field'=>$request->get('field'),
'comment'=>$request->get('comment'),
'source'=>$request->get('source'),
'target'=>$request->get('target'),





];



Mail::send('templates.onlinetranslation',$data,function($message){
    		$message->from('info@Alboraq.com','Alboraq');
    		$message->to('SALLY.NADER.AHMED@hotmail.com')->subject('Online Translation');




    	});





return view('home')->with('message','your translation was sent');

    }
}
