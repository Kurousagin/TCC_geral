<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twet;

class TwetController extends Controller
{
    public function index(){
        return view('posts.twets',[
            'posts'=>auth()->user()
        ]);

        
    } 

    
    public function store(Request $request){

        $attributes=request()->validate(['body'=>'required|max:255']);
    	$twet =Twet::create([
             'user_id'=>auth()->id(),
             'body' =>  $attributes['body']

    	]);
       $user = auth()->user();
        $twet ->user_id =$user->id; 
    	return view('posts.twets');
    }

    public function show($id)
    {
        $tweet = Twet::find($id);
        return view('show', ['tweet' => $tweet]);
    
}


public function dashboard() 
{
        $user = auth()->user();
        $twet = $user->twets;
         return view('posts.dashboard',['twets'=> $twet]);

}




    



}
