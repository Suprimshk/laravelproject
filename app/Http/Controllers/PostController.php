<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        if(Auth()->user()->id != 1) {
            dd("Unauthorized Access");
        }
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'title'=>'required',
            'price'=>'required|numeric|min:0',
            'description'=>'',
            'image'=>'required|image',
            
        ]);

        $imgPath = request('image')->store('uploads','public');
        
        \App\Models\Gallery::create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            
            'price'=>$data['price'],
            'product'=>$imgPath,
        ]);


        return redirect('/adminpannel');
    }

    public function postCmnt($product){
        if (auth()->user()->id == 1) {
            return redirect('/adminpannel');
        }
        $check = \App\Models\Review::where('gallery_id','=',$product)->where('user_id','=',auth()->user()->id)->exists();
        $product = \App\Models\Gallery::findOrFail($product);
        if ($check) {
            dd('Youve already written a feedback');
        } else {
            $data = request()->validate([
                'rating'=>'required',
                'cmnt'=>'',
             ]);

            $product->reviews()->create([
                'rating'=>(int)$data['rating'],
                'comment'=>$data['cmnt'],
                'user_id'=>auth()->user()->id,
            ]);
            return redirect('/');
        }
        
        
    }

    public function deactivate(\App\Models\User $user) {
        if (auth()->user()->id == 1) {
            return redirect('/adminpannel');
        }
        if (auth()->user()->id == $user->id) {
            $rev = \App\Models\Review::select('*')->where('user_id','=',$user)->get();
            if (count($user->carts) > 0) {
                $user->carts()->delete();
            }
            if (count($rev) > 0) {     
                $rev = \App\Models\Review::select('*')->where('user_id','=',$user);
                $rev->delete();
            }
            $user->delete();
            return redirect('/login');
        }
        return redirect('/');
    }
    public function mailSend()
    {
        $details=[
            'title'=>'Title:BidyaJewellers',
            'body'=>'Body:welcome to the page',
        ];
        \Mail::to('suprimshakya2@gmail.com')->send(new SendMail($details));
        return view('emails.welcome-email');
    }
}
