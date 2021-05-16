<?php  
    include 'header.php';
    ?>
    <style>
    <?php
    include 'change.css';
    ?>
    </style>

    



<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($dbc, $_POST['search']);
        $query = "SELECT * FROM recipe WHERE recipe_name LIKE '%$search%' OR recipe_description LIKE '%$search%'" ;
        $result = mysqli_query($dbc, $query);
        $queryResult = mysqli_num_rows($result);

    

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='recipebox'>
                <p>".$queryResult." Results</p>
                <p><img src='".$row['img']."'</p>
                <h2><p class='name1'>".$row['recipe_name']."</p></h2>
                <p class='desc'>".$row['recipe_description']."</p>
                </div></a>";
            }
        }else {
            echo "none";
        }

    }
    ?>
