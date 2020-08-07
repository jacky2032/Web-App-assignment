<?php
Session_start();
if(!isset($_SESSION['adminerror'])){
    $_SESSION['adminerror'] = "";
}
if(isset($_SESSION['currentAdmin'])){

    header('Location:backendHome.php');
   
   
   }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
    </head>
    <body>
       <div class="adminLoginWrapper">

            <div id="tableContainer" class = "tableContainer">
                <div class= "tableRow">
                    <span>DIGITAL LIBRARY</span>
                </div>
                <div class = "tableRow login100-form-title">
                    Administrator/Librarian<br>
                    Account Login
                </div>
                <div class="tableRow">
                <form id="login-form" method="post" action="adminLoginAuthentication.php" >
                    <input id="adminID" name="adminID" class="tableColumn loginInput" type="text" placeholder="User-ID">
                    <input id="adminPass" name="adminPass" class="tableColumn loginInput" type="password" placeholder="Password">
                </div>
                <div class="tableRow">
                    <span>
                 <?php echo $_SESSION['adminerror']?>
                    </span>
                    <button class="tableColumn login100-form-btn2" type="submit" value="submit">Sign In</button>
                    </form>
                </div>
                <div class= "tableRow">
                Forgot<span class="txt2 txt-link"> Password</span>
                </div>          
            </div>
       </div>
        
       <script>
           var x = document.getElementById("tableContainer");
           x.style.paddingLeft += "10px";
           x.style.paddingRight+="10px";
       </script>
    </body>
</html>
