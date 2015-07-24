<?php
//note: read map generator files and look for syntax, close to what is needed
include('db_info.php');

//Name="text_body"
?>

<h1>Blog Blog Blog</h1>

<form action="edit_post.php" method="POST">

    <input type="submit" name="submit" value="SUBMIT" /><br>
    <br><br>
    <input type="text" name="author" value="Author" /><br>
    <br>
    <TEXTAREA name="blog_body" COLS="20" ROWS="4" </TEXTAREA>

</form>