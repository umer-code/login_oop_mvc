
<?php
class UsersDao extends Dbh{
    protected function getUser($name,$pass){
        $sql = 'SELECT * FROM user WHERE email = ? and pass = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt -> execute([$name, $pass]);
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function addUser(User $user){
        $sql = 'INSERT INTO user(email, pass) VALUES (?, ?)' ;
        $stmt = $this->connect()->prepare($sql);
        $stmt -> execute([$user->email, $user->password]);
        echo "Added successfully";   
    }
}

?>