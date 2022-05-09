<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twet;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\File\File;

class TwetController extends Controller
{
    public function index()

    {
        $posts = Twet::all();

        return view('dashboard')->with('posts', $posts);
    }
    public function Home()

    {
        $posts = Twet::all();



        return view('home')->with('posts', $posts);
    }





    public function store(Request $request)
    {
        $posts = new Twet;


        $user = auth()->user();
        $posts->user_id = $user->id;
        $posts->body =  $request->body;
        
        $posts->image = '' ;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extensao = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extensao;

            $request->image->move(public_path('site/img'), $imageName);

<<<<<<< HEAD
            $posts->image = $imageName;
=======
            $twet->image =$imageName;  
            
>>>>>>> ad18a8acffff169967cdb5f4cdcc05d6f145553d
        }

<<<<<<< HEAD


        $posts->save();



        return redirect('/posts');
=======
        //image upload
*/
return view('home');
>>>>>>> ad18a8acffff169967cdb5f4cdcc05d6f145553d
    }

    public function delete(){

        $twet = Twet::findOrFail($id);
        $twet -> delete();
        return view('dashboard');
    }


}



