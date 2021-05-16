<?php
include 'mysqli_connect1.php';

if(isset($_POST['upload'])) {
    $file = $_FILES['image']['name'];

    $query = "UPDATE recipe
    SET img = '$file'
    WHERE recipe_id = 4;";

    $result = mysqli_query($dbc,$query);

    if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }
}


?>

<?php

?>

<!DOCTYPE html>
<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit" name="upload" value="UPLOAD">Upload</button>
</form>
</body>

</html>

