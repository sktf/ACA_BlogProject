<?php

include('db_info.php');


?>

<h1>Blog One</h1>

<form action="edit_post.php" method="POST">

    <input type="text" name="author" value="Author" /><br>
    <br>
    <input type="text" name="text_body" value="Enter Blog" /><br>
    <br>

    <br><br><br>
    <input type="submit" name="submit" value="SUBMIT" /><br>

    </form>