<!DOCTYPE html>
<html>
    <head>
        <title>allrecipes</title>
        <link rel = "stylesheet" href = "change.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- https://www.bootstrapcdn.com/fontawesome/ -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div><img src = "registertoppart.PNG"></div>
        
        <form action = "register.php" method="POST" class="form">
            <div class = "signup">Sign up with email.</div>
            <div class = "form-group">
                <label for ="display"></label>
                <input class = "registerinput" type = "text" name = "display" id= "display" placeholder = "Display name" />
            </div>
            </br>
            <div class = "form-group">
                <label for ="email"></label>
                <input class = "registerinput" type = "text" name = "email" id= "email" placeholder = "Email"/>
            </div>
            </br>
            <div class = "form-group">
                <label for ="password"></label>
                <input class = "registerinput" type = "password" name = "password" id= "password" placeholder = "Password"/>
            </div>
            </br>
            <div>   
                <pre class = 'alarm'>     <input type="radio" id="d1" name="d1" required/>I am 13 years of age or older and agree to the Terms of        
                    Service and Privacy Policy—Your California Rights             </pre>
                
                </select>
            </div> 
            </br>
            <div>   
                <pre class = 'alarm'><input type="radio" id="d2" name="d2" required/>Email me exclusive subscription and special product offers 
                    from Allrecipes and the Meredith Women's Network.            </pre>
                
                </select>
            </div> 
            </br>
            <p><input type="submit" value="Create my account" class = "buttonregister"/></p>
        
        
        </form>
    
    </body>
</html>
