<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Facade;
// use App\Support\Seo;
use App\Partner;
use App\Post;
use App\Mail\Contact;
use Mail; // Envia e-mail 


class WebController extends Controller
{
    public function home()
    {
        // $partners = Partner::orderBy('id','DESC')->get();
        $partners = Partner::all();
        // var_dump($partners);
        $seo = $this->seo->render(
            "Página Home - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            url('/'),
            asset('\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($partners->cover, 400, 200))')
        );
    	return view('front.home', [
            'head' => $seo,
            'partners' => $partners
        ]);
    }

    public function about()
    {
    	// echo "Page about";
        $seo = $this->seo->render(
            "Página Sobre - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            url('/'),
            asset('img/bg.jpg')
        );// 
    	return view('front.about', [
            'head' => $seo
        ]);
    }
    public function blog()
    {

        $posts = Post::join('categories', 'posts.category_id', '=', 'categories.id')
        ->get();
   
        // var_dump($posts);        
        $seo = $this->seo->render(
            "Página Blog - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            url('/'),
            asset('img/bg.jpg')
        );
    	// echo "Page blog";   	
    	return view('front.blog', [
            'head' => $seo,
            'posts' => $posts
        ]);
    }
    public function article($uri)
    {
        $post = Post::where('uri', $uri)->get()->first();
        $seo = $this->seo->render(
            "Página Artigos - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            route('article', $post->uri),
            asset('\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 1200))')
        );
    	// echo "Page article";
    	return view('front.article', [
            'head' => $seo,
            'post' => $post
        ]);   	
    }
    public function contact()
    {
        $seo = $this->seo->render(
            "Página Contatos - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            url('/'),
            asset('img/bg.jpg')
        );
    	// echo "Page contact";
    	return view('front.contact', [
            'head' => $seo
        ]);    	
    }
    public function sendmail(Request $resquest)
    {
        $data = [
            'reply_name'    => $resquest->name,
            'reply_email'   => $resquest->email,
            'phone_number'  => $resquest->phoneNumber,
            'subject'       => $resquest->subject,
            'message'       => $resquest->message
        ];
        // var_dump($resquest->all());
        Mail::send(new Contact($data));        
        return redirect()->route('contact-success');
         
    }
    public function contact_success()
    {
        $seo = $this->seo->render(
            "Página Mail Success - Web App Framework Laravel v7.0.3",
            "Este site consiste em aprimorar o desenvolvimento com o Framework Laravel v7.0.3",
            url('/'),
            asset('\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 1200))')
        );
        // echo "Page contact";
        return view('front.message_confirm_mail', [
            'head' => $seo

        ]);     
    }
    
}
