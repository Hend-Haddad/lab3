<?php
require_once './Post.php';
class  User
{
    public function __construct(
        public string $user
    ) {
    }

    public function post(string $content): Post
    {
        $content = readline('write your post:');
        $post = new post($content);
        return $post;
    }
}
