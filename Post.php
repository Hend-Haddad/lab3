<?php
require_once './Comment.php';
require_once './User.php';
class Post
{
    /**
     * @var Comment
     */
    private $comment = [];
    public function __construct(
        public string $post
    ) {
    }

    public function like(): void
    {
    }
    public function addComment(Comment $comment): void
    {
        $comment = new Comment('$comment');
        echo $comment;
    }
    public function getComment(): array
    {
        return var_dump([$this->comment]);
    }
    public function isLikedBy(User $user): bool
    {
        $boolean = false;
        if ($user->like() = 1) {
            $boolean = true;
        }
        return $boolean;
    }
}
