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
        $user = 'null';
        $nb = count($users);
        $i = 0;
        while ($i < $nb) {
            if ($username != $users[$i])
                $i++;
            else {
                $user = $username;
            }

            return $user;
        }
    }
}
