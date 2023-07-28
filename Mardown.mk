## lab-3
###goal
Our goal is to develop a social media platform called SocialLand. This platform will provide functionality to
register users, enable them to create or delete posts and comments, find users by their usernames, and list all
posts, among other features.
## branches
I use two branches:
-branch 'main'
-branch 'feature1'
### main branch
in this branch we do the following:
- create a 'User' class  with one attribute 'user' 
- creat a 'SocialLand' class contains the methods:
```php
public function registre(User $user): void =>this methods allows to regitre a new user
public function getUser(): array 
public function findByUser (string $username): User => in this function we browse an array to search on a user by their name.
```
### feature1 branch 
in this branch we do the following:
-create a 'Post' class with one attribut 'post'. this class contain the methods:
```php
public function addComment(Comment $comment): void => in this method we added a comment.
public function getComment(): array.
public function isLikedBy(User $user): bool => this method returns a boolean which expresses if a user like the post.
public function post(string $content): Post => in this method the user write a post.
```



