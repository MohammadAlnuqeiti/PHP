<??>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  // start connection with database
  $conn = new PDO("mysql:host=$servername;dbname=dbpdo", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //select type error
 
  // $select="SELECT * FROM users ORDER BY fname ASC";
  // $conn->exec($select);
  echo "Database created successfully<br>";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 // insert data on table users
  if($_SERVER['REQUEST_METHOD']== "POST" ){

      $name=$_POST['name'];
      $email=$_POST['email'];

      $data = "INSERT INTO users (fname, email)
      VALUES ('$name', '$email')";
      
      $conn->exec($data);
      // $_POST['name'] ="";

  }
 
$conn = null;

  // $sql = "CREATE TABLE user (
  //   id int,
  // fname text,
  // email text
  // ";
  // use exec() because no results are returned
  
  // $conn->exec($sql);
  // if(isset($_POST['submit']) && $_POST['submit'] != "" && $_POST['name'] != ""){

?>