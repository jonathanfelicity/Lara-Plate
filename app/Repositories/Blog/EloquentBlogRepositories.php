<?php

namespace App\Repositories\Blog;
use App\Repositories\Blog\BlogContract;

class EloquentBlogRepositories implements BlogContract{
    public function getAll(){
        return "All Data";
    }
}