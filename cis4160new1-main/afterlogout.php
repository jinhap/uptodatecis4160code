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
        

        <!-- this is the toppart of the picture -->
        <div class = "firstdiv"> 
            <img class = "sticky" src = "toppart3.png" width= 100% height = 100%>
        </div>
        <div class = "function">
            <ul>
                <li class = "active"><i class = "fa fa-bars"></i><a href = "#">EXPLORE</a></li>
                <li><a href = "#"></a></li>
                <li><a href = "#"></a></li>
                <li><a href = "#"></a></li>
                <li><a href = "#"></a></li>
                <li><a href = "#"></a></li>
                <li><a href = "#">Your Account</a>
                    <div class = "submenu">
                        <ul>    
                            <li><a href="form1.php">Your Profile</a></li>
                            <li><a href="#">Newsletters</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

                    </div>
                
                
                </li>
            </ul>
        </div>
        
        <!-- this is for the search bar body-->
        <div class = "seconddiv"> 
            <!-- naviagte to another page -->
            <form class = "searchbar" action = "action??????.php" method="GET">  
            <!-- <form action = "action.php">       -->
            
                <input type = "search" placeholder = "Find a Recipe" name = "search2" >
                <button type = "submit"><i class="fa fa-search"></i></button>
            </form>
            
            <!-- bottom side -->

            <!-- right side -->
            <span><img class = "searchbody" src = "searchbarbody.PNG"></span>
         
        </div>
        <!-- <div class = "clearboth"></div>  -->
        <div class = "thirddiv">
            <!-- <span id="ingredient">SEARCH BY INGREDIENT</span> -->
        </div>
        <!-- start body image -->
        <div>
            <span><img src ="bodypart1.PNG"></span>
            <span><img src ="bodypart2.PNG"></span>
            <span><img src ="bodypart3.PNG"></span>
            <span><img src ="bodypart4.PNG"></span>
            <span><img src ="bodypart5.PNG"></span>
            <span><img src ="bodypart6.PNG"></span>
        </div>
        <!-- end body image -->
        
    <script src="main.js">

    </script>
    
    </body>
</html>