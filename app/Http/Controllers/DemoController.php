<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('pages.header');    
    }
    public function hero(){
        return view('pages.header');    
    }
    public function Aboutpage(){
        return view('pages.about');    
    }
    public function Resumepage(){
        return view('pages.resume');
    }
    public function Servicespage(){
        return view('pages.Service');
    }
    public function Skillspage(){
        return view('pages.skills');
    }
    public function Projectspage(){
        return view('pages.projects');
    }
    public function MyBlogpage(){
        return view('pages.blogs');
    }
    public function Contactpage(){
        return view('pages.contacts');
    }

    public function Usermessage(Request $request){
        //dd($request->all());
      Message::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message'),
      ]);
      return response()->json([
        'status'=>'success',
        'message' => 'Message sent successfully',
       ],201);
    }

}
