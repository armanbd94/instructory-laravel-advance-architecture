<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Services\PostService AS Post;
use Modules\Backend\Http\Requests\PostRequest;


class PostController extends Controller
{

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function index()
    {
        $data = $this->post->index();
        return view('backend::index',compact('data'));
    }

    public function create()
    {
        return view('backend::create');
    }

    public function store(PostRequest $request)
    {
        $result = $this->post->create($request);
        if($result){
            return redirect('post')->with('success','Data has been saved successfully');
        }else{
            return redirect('post')->with('error','Data cannot save');
        }
    }
}
