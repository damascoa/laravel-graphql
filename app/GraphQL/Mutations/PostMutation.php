<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

class PostMutation
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $args['user_id'] = $args['user'];
        $post = Post::create($args);
        return $post;
    }
}
