<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twet;

class TwetController extends Controller
{
    public function index()
    {
        return view('posts.twets', [
            'posts' => auth()->user()
        ]);
    }


    public function store(Request $request)
    {
       

        $attributes = request()->validate(['body' => 'required|max:255']);
      
        $image= request()->validate(['image' => 'required|max:255']);
        $twet = Twet::create([
            'user_id' => auth()->id(),
            'body' =>  $attributes['body'],
           'image'=> $image['image']
        ]);
        $user = auth()->user();
        $twet->user_id = $user->id;


/*        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extesion = $requestImage->extesion();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now") ).  "." . $extesion;

            $request->image->move(public_path('site/img'), $imageName);

            $twet->image =$imageName;  
            
        }
        

        //image upload
*/
return view('home');
    }

    public function delete(){

        $twet = Twet::findOrFail($id);
        $twet -> delete();
        return view('dashboard');
    }


}



