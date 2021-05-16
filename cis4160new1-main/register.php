<!DOCTYPE html>
<html>
    <head>
        <title>registration php</title>
        <link rel = "stylesheet" href = "change.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- https://www.bootstrapcdn.com/fontawesome/ -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       
    </head>
    <body>

        <div><img src = 'doneregister.png'></div>
        <a href = 'main.php'><i class = "fa fa-home" style="font-size:36px;color:grey"></i></a><div class = "regis">Thank you for your registration!</div>
        <div><img src = 'bodyregister.png'></div>
        <div><img src = 'bottomregister.png'></div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require('mysqli_connect.php');
            $errors = array();

            if(empty($_POST['display'])){
                $errors[] = "You forgot to enter your first name";
            }else{
                $n = mysqli_real_escape_string($dbc, $_POST['display']);
            }
            if(empty($_POST['email'])){
                $errors[] = "You forgot to enter your email";
            }else{
                $e = mysqli_real_escape_string($dbc, $_POST['email']);
            }
            if(empty($_POST['password'])){
                $errors[] = "You forgot to enter your password";
            }else{
                $p = mysqli_real_escape_string($dbc, $_POST['password']);
            }
            if(empty($errors)){

            
            $n = $_POST['display'];
            $e = $_POST['email'];
            $p = $_POST['password'];
            $query = "INSERT INTO users (display, email, password, reg_date) value('$n','$e',SHA1('$p'),NOW())";

            $run = mysqli_query($dbc,$query);
            
            
            if($run){
     
                echo "<p> You have been registered</p>";
                // header("Refresh:3, URL=displayfood.php");
            }else{
                echo "<h1>Error!</h1><p>You could not be regitered, please try again</p>";
                echo "<p>".mysqli_error($dbc)."</p>";
            }
            }else{
                echo "<h1>error!</h1>";
                echo "<p>The following errors have occured: </br>";
                // header("Refresh:3, URL=reform.php");
                foreach($errors as $item){
                    echo "$item<br/>";
                }

                echo "Please try again!</p>";
                // header("Refresh:3, URL=reform.php");
            }

            mysqli_close($dbc);
        }else{
            echo "<h1>ACCESS DENIED!</h1>";
        }
    
    ?>


  
    </body>
</html>