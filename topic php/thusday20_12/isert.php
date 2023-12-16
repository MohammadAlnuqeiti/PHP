<?php
require_once('./config.php');

$sql ="SELECT * FROM movies";

$db->query($sql);
echo "<br>";
echo "<pre>";
$data = mysqli_query($db, $sql); // array لحتى تطبع البيانات وكل سطر يمثل  foreach  تمثل كل شي في الداتا بيس من بيانات وغيرها , لهيك بعمل عليها data
echo "<table border=2px solid black >";
echo "<tr><td>id</td><td> name</td><td> discription</td><td> image</td><td> date</td><td> date</td></tr>";
foreach($data as $dd){
echo "<tr>";
echo "<td >".$dd['id']."</td>";
echo "<td>".$dd['movie_name']."</td>";
echo "<td>".$dd['movie_discreption']."</td>";
echo "<td>"."<img src='{$dd['movie_image']}'style=\"width:200px\">"."</td>";
echo "<td>".$dd['created_at']."</td>";
echo "<td>".$dd['updated_at']."</td>";
echo "</tr>";
}
echo "</table>";
?>