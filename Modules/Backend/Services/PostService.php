<?php
namespace Modules\Backend\Services;

use Modules\Backend\Contracts\PostContract AS Post;
use Illuminate\Http\Request;
class PostService{

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function index(){
        return $this->post->all();
    }

    public function create(Request $request){
        $collection = collect($request->all())->only(['title','description']);
        return $this->post->store($collection->all());
    }
}