<?php

require_once('./config.php');

$sql ="INSERT INTO movies (movie_name,movie_discreption,movie_image) 
VALUES('the gray man','is a 2022 American action thriller film directed by the Russo Brothers. The film was released theatrically on July 15, 2022, and was released on Netflix on July 22. The film is based on the 2009 novel The Gray Man by Marc Greaney.
','../image/grayman.jpeg')";


$db->query($sql);
 ?>


