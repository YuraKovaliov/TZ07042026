<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Arr;

class PostService
{
    /**
     * Create a new class instance.
     */
    public function create(array $data): Post
    {
        return Post::create($data);

    }

    public function update(Post $post, array $data): Post
    {
        $post->update($data);
        return $post->fresh();
    }
}
