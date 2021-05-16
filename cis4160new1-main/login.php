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
        

            <form action="home.php" method="post">
                <p class = "sign">Sign in with email</p>
                <!-- if error occured it will display the error to the users -->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            <!-- ----------------------------------- -->
                <input type="text" name="email" placeholder="Email Address"><br>

             
                <input type="password" name="password" placeholder="Password"><br>

                <button type="submit"><pre>Sign in</pre></button>
            </form>

    
            

      <!-- <a href = "?????"> New to Allrecipes?<span style="color:orange" > Join for free!</span></a> -->
    </body>
</html>