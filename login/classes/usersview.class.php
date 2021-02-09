<?php session_start(); ?>
<?php
class UsersView extends UsersDao {
    public function userlogin ($name, $pass){
        $result = $this->getUser($name, $pass);
        if (empty($result))
        {
            echo '<script>alert("Invalid credentials")</script>';
        }else{
            $_SESSION["user"] = $name ;
            header('Location: home.php');
        }
    }
    public function registerUser(User $user){
       // print_r($user);
        $this->addUser($user);
    }
    
    

    public function validateUser(User $user)
    {
        $errors = array();
        if($user->firstname==null){
            array_push($errors,"Firstname can't be null or empty");
        }
        if($user->lastname == null){
            array_push($errors,"Lastname can't be null or empty");
        }
        if($user->email == null){
            array_push($errors,"Email can't be null or empty");
        }
        if($user->password == null){
            array_push($errors,"Password can't be null or empty");
        }   
        if(!empty($errors)) 
        throw new customException($errors);
          // $err = new customException($errors);
        // print_r($errors);
        }
}

?>