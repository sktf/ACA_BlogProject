<?php
require_once('db_info.php');
?>

<h1>Create or Edit Post</h1>
<form action="edit_post.php" method="POST">
    <input type="title" name="Title" placeholder="Title Your Post" /><br>
    <br>
    <input type="text" name="author" placeholder="Author's Name" /><br>
    <br>
    <TEXTAREA name="content" rows="25" cols="80">Add Content!</TEXTAREA>
    <br>
    <input type="submit" name="submit" value="POST IT!" /><br>

</form>
<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];

    //more to be added
}