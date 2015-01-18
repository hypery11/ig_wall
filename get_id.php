<?php

echo file_get_contents("https://api.instagram.com/v1/users/search?client_id=bf550b87688947d4a04f7567696dafaf&q=".$_GET["id"]);

?>
