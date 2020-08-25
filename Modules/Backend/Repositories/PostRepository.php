<?php
namespace Modules\Backend\Repositories;

use Modules\Backend\Contracts\PostContract;
use Modules\Backend\Entities\Post;

class PostRepository implements PostContract{
    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function all($column=array('*'),string $orderBy='id',string $sortBy='desc'){
        return $this->post->orderBy($orderBy,$sortBy)->get($column);
    }
    public function store(array $params){
        return $this->post->create($params);
    }
}