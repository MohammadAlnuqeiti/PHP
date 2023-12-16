<?php

class user{

    public $id;
    public $name;
    public $phoneNumber;
    public $email;

    public  function connect(){

        try{

        $con=new PDO('mysql:localhost=localhost;dbname=test','root','');

        
        return $con;
    
        }catch(PDOException $error){
    
            echo 'the error ' . $error->getMessage();
    
    
        }
    }
    public function create($id,$name,$phoneNumber,$email){

        $this->id=$id;
        $this->name=$name;
        $this->phoneNumber=$phoneNumber;
        $this->email=$email;

        $sql="INSERT INTO users (id,name,email,phoneNumber) VALUES (?,?,?,?)";

        $db=user::connect()->prepare($sql);
        $db->execute([NULL,$name,$phoneNumber,$email]);

    }

    public function update($id,$name,$phoneNumber,$email){

        $this->id=$id;
        $this->name=$name;
        $this->phoneNumber=$phoneNumber;
        $this->email=$email;
        $sqll="UPDATE  users SET  name=? , email=? , phoneNumber=? WHERE id=?";

        $db=user::connect()->prepare($sqll);
        $db->execute([$name,$phoneNumber,$email,$id]);

    }
    function delete($name){
        // $this->id=$id;
        $this->name=$name;
        $sql="DELETE FROM users WHERE name = ?";
        $db=user::connect()->prepare($sql);
        $db->execute([$name]);



    }
}
class Admin extends user{
    public $role;
    function __construct($id,$name,$phoneNumber,$email,$role=1)
    {

        $this->role=$role;
        $this->id=$id;
        $this->name=$name;
        $this->phoneNumber=$phoneNumber;
        $this->email=$email;

        $sql="INSERT INTO users (id,name,email,phoneNumber,role) VALUES (?,?,?,?,?)";

        $db=user::connect()->prepare($sql);
        $db->execute([NULL,$name,$phoneNumber,$email,$role]);
    }
}

?>