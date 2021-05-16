<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel = "stylesheet" href = "loginchange.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- https://www.bootstrapcdn.com/fontawesome/ -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <?php
            // if the value get from email and password is true.
            if (isset($_POST['email']) && isset($_POST['password'])) {
                require('mysqli_connect.php');
                //importing the data from the database.
                function validate($data){
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
                   return $data;
                }
                // set the value for email and password
                $email= validate($_POST['email']);
                $password = validate($_POST['password']);
                
                // if the email or password is empty will remind the user to reenter again.
                if (empty($email)) {
                    header("Location: login.php?error=Oops! Enter your email address.");
                    exit();
                }else if(empty($password)){
                    header("Location: login.php?error=Oops! Enter your password.");
                    exit();
                }else{
                    //after all condition is true it will run the query.
                    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

                    $result = mysqli_query($dbc,$sql);
                    // if the resul is true of one of the colum then it will validate then get back to the main page.
                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);
                        if($row['email'] === $email && $row['password'] === $password){
                            echo "logged in!";
                            header("Location: afterlogout.php");
                        }else{
                            //if false it will display the error message
                                header("Location: login.php?error=Sorry, we don't recognize that email or password. Try again!");
                                exit();
                            }         
                    }else{
                        //if false it will display the error message
                        header("Location: login.php?error=Sorry, we don't recognize that email or password. Try again!");
                        exit();
                    }
                }
            
            }else{//if it error will still remain the homepage
                header("Location: home.php");
                exit();
            } 
        
        
        ?>
    </body>
</html>        