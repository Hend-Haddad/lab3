<?php
require_once './User.php';
class SocialLand
{
    /**
     * @var User[]
     */
    private $users = [];



    public function register(User $user): void
    {
        $user = new User('$user');
        echo $user;
    }
    public function getUsers(): array
    {
        return $this->users;
    }


    public function findByUsername(string $username)
    {
        $name = 'null';
        foreach ($users as $user) {
            if ($username instanceof User) {
                $name = $user;
                break;
            }
            return $name;
        }
    }
}
