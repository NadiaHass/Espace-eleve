<?php
include 'classes/user/user.php';

class UsersView extends User{
// it handles showing informations inside the website
public function showUserById($id){
    $user = $this->getUserById($id);
    echo $user['firstName'];
}
}